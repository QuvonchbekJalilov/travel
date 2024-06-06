<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\News;
use App\Models\Review;
use App\Models\Tour;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function main()
    {
        $lastTour = Tour::latest()->first();
        $secondTour = Tour::latest()->skip(1)->first();
        $thirdTour = Tour::latest()->skip(2)->first();

        $reviews = Review::take(8)->get();
        $tours = Tour::take(3);
        $faqs = Faq::all();
        return view('frontend.main', compact('lastTour', 'secondTour', 'thirdTour', 'reviews','tours', 'faqs'));
    }

    public function tour()
    {
        $tours = Tour::paginate(10);
        return view('frontend.tour', compact('tours'));
    }
    public function singleTour($tour){

        $tour = Tour::find($tour);

        return view('frontend.singleTour', compact('tour'));
    }

    public function blog()
    {
        $blog = News::latest()->first();
        $blog1 = News::latest()->skip(1)->paginate(4);
        $popular = News::orderBy('id', 'asc')->take(4)->get();


        return view('frontend.blog', compact('blog', 'blog1', 'popular'));
    }

    public function singleBlog($blog){
        $blog = News::find($blog);
        $popular = News::orderBy('id', 'asc')->take(4)->get();

        return view('frontend.singleBlog', compact('blog', 'popular'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
