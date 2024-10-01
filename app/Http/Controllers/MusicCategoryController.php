<?php

namespace App\Http\Controllers;

use App\Models\MusicCategory;
use App\Http\Requests\StoreMusicCategoryRequest;
use App\Http\Requests\UpdateMusicCategoryRequest;
use Illuminate\Http\Request;


class MusicCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('musicCategories.index', [
            'musicCategories' => MusicCategory::orderBy('created_at', 'DESC')->paginate(10)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('musicCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicCategoryRequest $request)
    {
        //get the validated data
        $validated = $request->validated();

        //create a slug
        $validated['slug'] = \Str::slug($validated['name']);

        MusicCategory::create($validated);

        return redirect()->route('musicCategories')
            ->with('flash.banner', 'Music Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MusicCategory $musicCategory)
    {
        return view('musicCategories.show', [
            'musicCategory' => $musicCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MusicCategory $musicCategory)
    {
        return view('musicCategories.edit', [
            'musicCategory' => $musicCategory
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicCategoryRequest $request, MusicCategory $musicCategory)
    {
        //get the validated data
        $validated = $request->validated();

        //create a slug
        $validated['slug'] = \Str::slug($validated['name']);
        $musicCategory->update($request->validated());

        return redirect()->route('musicCategories')
            ->with('flash.banner', 'Music Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MusicCategory $musicCategory)
    {
        $model = $musicCategory;

        $musicCategory->delete();

        //set the banner status to danger
        session()->flash('flash.bannerStyle', 'danger');

        return redirect()->route('musicCategories')
            ->with('flash.banner', 'MusicCategory '. $model->name . ' deleted successfully');
    }
}
