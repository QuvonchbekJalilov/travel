<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourStoreRequest;
use App\Http\Requests\TourUpdateRequest;
use App\Models\News;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::paginate(10);
        return view('admin.tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tour.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TourStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // Generate a unique name for the image to avoid conflicts
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            // Store the image in the public directory
            $path = $request->file('image')->storeAs('tour_photo', $name, 'public');
        }

        Tour::create([
            'title_uz' => $validated['title_uz'],
            'title_ru' => $validated['title_ru'],
            'title_en' => $validated['title_en'],
            'content_uz' => $validated['content_uz'],
            'content_ru' => $validated['content_ru'],
            'content_en' => $validated['content_en'],
            'price' => $validated['price'],
            'day' => $validated['day'],
            'image' => $path ?? null,
        ]);

        return redirect()->route('tour.index')->with('success', 'Successfully created tour');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        $tour = Tour::find($tour->id);
        return view('admin.tour.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        return view('admin.tour.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TourUpdateRequest $request, Tour $tour)
    {
        $validated = $request->validated();

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($tour->image) {
                Storage::delete('public/' . $tour->image);
            }

            // Store the new image
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            // Store the image in the public directory
            $path = $request->file('image')->storeAs('tour_photo', $name, 'public');
        }
        $tour->update([
            'title_uz' => $validated['title_uz'],
            'title_ru' => $validated['title_ru'],
            'title_en' => $validated['title_en'],
            'content_uz' => $validated['content_uz'],
            'content_ru' => $validated['content_ru'],
            'content_en' => $validated['content_en'],
            'price' => $validated['price'],
            'day' => $validated['day'],
            'image' => $path ?? $tour->image, // Keep the old image if a new one is not uploaded
        ]);

        return redirect()->route('tour.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        if ($tour->image){
            Storage::delete($tour->image);
        }

        $tour->delete();
        return redirect()->back();
    }
}
