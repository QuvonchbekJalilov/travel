<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::paginate(10);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // Generate a unique name for the image to avoid conflicts
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            // Store the image in the public directory
            $path = $request->file('image')->storeAs('news_photo', $name, 'public');
        }

        News::create([
            'title_uz' => $validated['title_uz'],
            'title_ru' => $validated['title_ru'],
            'title_en' => $validated['title_en'],
            'content_uz' => $validated['content_uz'],
            'content_ru' => $validated['content_ru'],
            'content_en' => $validated['content_en'],
            'image' => $path ?? null,
        ]);

        return redirect()->route('news.index')->with('success', "Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        $news = News::find($news->id);
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsUpdateRequest $request, News $news)
    {
        $validated = $request->validated();

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($news->image) {
                Storage::delete('public/' . $news->image);
            }

            // Store the new image
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            // Store the image in the public directory
            $path = $request->file('image')->storeAs('news_photo', $name, 'public');
        }

        // Update the news record
        $news->update([
            'title_uz' => $validated['title_uz'],
            'title_ru' => $validated['title_ru'],
            'title_en' => $validated['title_en'],
            'content_uz' => $validated['content_uz'],
            'content_ru' => $validated['content_ru'],
            'content_en' => $validated['content_en'],
            'image' => $path ?? $news->image, // Keep the old image if a new one is not uploaded
        ]);

        return redirect()->route('news.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::delete($news->image);
        }
        $news->delete();
        return redirect()->back();
    }
}
