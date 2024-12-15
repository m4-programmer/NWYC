<?php

namespace App\Models;

use Cohensive\OEmbed\Facades\OEmbed;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;

class Media extends Model
{
    use HasFactory;
    const VIDEO = "video";
    const AUDIO = "audio";

    protected $guarded= [];

//    protected $appends = ['url_string'];

    protected $casts = ["meta_data" => "json"];
    //should return the url format only without the iframe
    public function getUrlStringAttribute()
    {
        return  "https://www.youtube.com/embed/".$this->extractVideoId($this->attributes['url']);
    }

    /*Models*/
    public function tag()
    {
        return $this->belongsTo(VideoTag::class, 'video_tag_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeVideo(Builder $q): void
    {
        $q->where("type", self::VIDEO);
    }

    public function scopeAudio(Builder $q): void
    {
        $q->where("type", self::AUDIO);
    }

    public function scopeActive(Builder $q, $active = true): void
    {
        $q->where("status", $active);
    }


    //
    //returns the iframe format
    public function getUrlAttribute($value)
    {
        try {
            // First, try to retrieve the cached result.
//            if (Cache::has($value)) return Cache::get($value);

            // If not cached, fetch and embed the HTML.
            $embed = OEmbed::get($value);
            if ($embed && $this->type == self::VIDEO) {
                $embedHtml = $embed->html(['width' => 350]);

                // Cache the embedded HTML for future use.
                Cache::put($value, $embedHtml, now()->addMinutes(3600));

                return $embedHtml;
            }
        }
        catch (Exception $e) {
            // Log the error if needed
             logger()->error("Failed to get embed code: " . $e->getMessage());
             return null;
        }
        $newUrl = "https://www.youtube.com/embed/".$this->extractVideoId($value);
        $value = '<iframe src='.$newUrl .' width="350" height="197" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

        // Return original URL if embedding or caching fails.
        return $value;
    }

    public function extractVideoId($url) {
        $patterns = [
            '/youtu\.be\/([a-zA-Z0-9_-]+)/',           // For shortened URLs (e.g., youtu.be)
            '/youtube\.com\/(?:watch\?v=|live\/)([a-zA-Z0-9_-]+)/' // For full URLs (both standard and live)
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                return $matches[1];  // Return the video ID
            }
        }

        return null;  // Return null if no match
    }
}
