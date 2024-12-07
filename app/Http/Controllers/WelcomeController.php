<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $testimonials = collect([
            [
                "name" => "bolatito felicia",
                "job" => "Instrumentalist",
                "text" => "It was an awesome experience in the presence of the Lord From the beginning to the end of the service I had a great time Surely the lord is in this place",
                "rating" => 4,
                "image" => "assets/img/people/bolatito.png"
            ],
            [
                "name" => "Uzor Victor",
                "job" => "Software Engineer",
                "text" => "Awesome experience in the presence of God.",
                "rating" => 5,
                "image" => "assets/img/people/uzor.png"
            ],
            [
                "name" => "Benjamin Sunday",
                "job" => "Graphic Designer",
                "text" => "Amazing place to be",
                "rating" => 4,
                "image" => "assets/img/people/benjamin.png"
            ],
//            [
//                "name" => "Peter Parker",
//                "job" => "Photographer",
//                "text" => "Joining this fellowship was the best decision I’ve ever made.",
//                "rating" => 5,
//                "image" => "assets/img/testimonials/testimonials-4.jpg"
//            ]
        ])->map(fn($item) => (object)$item);
        return view('welcome', compact("testimonials"));
    }
}
