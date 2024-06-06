<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\News;
use App\Models\Review;
use App\Models\Team;
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
    public function about()
    {
        $about = About::latest()->first();
        $blog = Team::latest()->take(1)->get();
        $blogs1 = Team::latest()->skip(1)->take(2)->get();
        $blog2 = Team::latest()->skip(3)->take(1)->get();
        $blog3 = Team::latest()->skip(4)->take(1)->get();
        $blog4 = Team::latest()->skip(5)->take(1)->get();
        
        return view('frontend.about', compact(
            'about',
            'blog',
            'blogs1',
            'blog2',
            'blog3',
            'blog4',
        ));
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
