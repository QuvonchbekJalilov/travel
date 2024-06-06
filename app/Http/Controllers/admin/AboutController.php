<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutStoreRequest;
use App\Http\Requests\AboutUpdateRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::paginate(10);
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // Generate a unique name for the image to avoid conflicts
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            // Store the image in the public directory
            $path = $request->file('image')->storeAs('about_photo', $name, 'public');
        }

        About::create([
            'title_uz' => $validated['title_uz'],
            'title_ru' => $validated['title_ru'],
            'title_en' => $validated['title_en'],
            'content_uz' => $validated['content_uz'],
            'content_ru' => $validated['content_ru'],
            'content_en' => $validated['content_en'],
            'image' => $path ?? null,
        ]);

        return redirect()->route('about.index')->with('success', "Successfully created");
    }


    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        $about = About::find($about->id);
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUpdateRequest $request, About $about)
    {
        $validated = $request->validated();

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($about->image) {
                Storage::delete('public/' . $about->image);
            }

            // Store the new image
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            // Store the image in the public directory
            $path = $request->file('image')->storeAs('about_photo', $name, 'public');
        }

        // Update the About record
        $about->update([
            'title_uz' => $validated['title_uz'],
            'title_ru' => $validated['title_ru'],
            'title_en' => $validated['title_en'],
            'content_uz' => $validated['content_uz'],
            'content_ru' => $validated['content_ru'],
            'content_en' => $validated['content_en'],
            'image' => $path ?? $about->image, // Keep the old image if a new one is not uploaded
        ]);

        return redirect()->route('about.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        if ($about->image) {
            Storage::delete($about->image);
        }
        $about->delete();
        return redirect()->back();
    }
}
