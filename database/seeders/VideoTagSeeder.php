<?php

namespace Database\Seeders;

use App\Models\VideoTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VideoTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "title" => "MIDWEEK  SERVICE",
                "status" => "active",
                "slug" => Str::slug("MidWeek Service")
            ],
            [
                "title" => "SUNDAY SERVICE",
                "status" => "active",
                "slug" => Str::slug("Sunday Service")
            ]
        ];

        foreach ($data as $row)
        {
            VideoTag::updateOrCreate(['title' => $row['title']], $row + ['user_id' => 1]);
        }

    }
}
