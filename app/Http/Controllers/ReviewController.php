<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewStoreRequest;
use App\Http\Requests\ReviewUpdateRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::orderBy('id', 'desc')->paginate(10); // 10 items per page
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewStoreRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            // Generate a unique name for the image to avoid conflicts
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            // Store the image in the public directory
            $path = $request->file('image')->storeAs('review_photo', $name, 'public');
        }

        Review::create([
            'full_name' => $validated['name'],
            'from_country' => $validated['from_country'],
            'text_uz' => $validated['text_uz'],
            'text_ru' => $validated['text_ru'],
            'text_en' => $validated['text_en'],
            'image' => $path ?? null,
        ]);

        return redirect()->route('review.index')->with('success', "Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        $review = Review::find($review->id);
        return view('admin.review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('admin.review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewUpdateRequest $request, Review $review)
    {
        $validated = $request->validated();

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($review->image) {
                Storage::delete('public/' . $review->image);
            }

            // Store the new image
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            // Store the image in the public directory
            $path = $request->file('image')->storeAs('review_photo', $name, 'public');
        }

        // Update the review record
        $review->update([
            'full_name' => $validated['name'],
            'from_country' => $validated['from_country'],
            'text_uz' => $validated['text_uz'],
            'text_ru' => $validated['text_ru'],
            'text_en' => $validated['text_en'],
            'image' => $path ?? $review->image, // Keep the old image if a new one is not uploaded
        ]);

        return redirect()->route('review.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        if($review->image){
            Storage::delete($review->image);
        }
        $review->delete();
        return redirect()->back();
    }
}
