<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqStoreRequest;
use App\Http\Requests\FaqUpdateRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqStoreRequest $request)
    {
        $validated = $request->validated();

        
        Faq::create([
            'title_uz' => $validated['title_uz'],
            'title_ru' => $validated['title_ru'],
            'title_en' => $validated['title_en'],
            'text_uz' => $validated['text_uz'],
            'text_ru' => $validated['text_ru'],
            'text_en' => $validated['text_en'],
        ]);

        return redirect()->route('faq.index')->with('success', "Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        $faq = Faq::find($faq->id);
        return view('admin.faq.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqUpdateRequest $request, Faq $faq)
    {
        $validated = $request->validated();

        $faq->update([
            'title_uz' => $validated['title_uz'],
            'title_ru' => $validated['title_ru'],
            'title_en' => $validated['title_en'],
            'text_uz' => $validated['text_uz'],
            'text_ru' => $validated['text_ru'],
            'text_en' => $validated['text_en'],
        ]);

        return redirect()->route('faq.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->back();
    }
}
