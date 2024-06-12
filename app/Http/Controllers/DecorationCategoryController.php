<?php

namespace App\Http\Controllers;

use App\Models\DecorationCategory;
use App\Http\Requests\StoreDecorationCategoryRequest;
use App\Http\Requests\UpdateDecorationCategoryRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class DecorationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('decorationCategories.index', [
            'decorationCategories' => DecorationCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('decorationCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDecorationCategoryRequest $request)
    {
        $validated = $request->validated();
        //create the slug
        $validated['slug'] = Str::slug($validated['name']);

        DecorationCategory::create($validated);

        return redirect()->route('decorationCategories')
            ->with('flash.banner', 'Decoration Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(DecorationCategory $decorationCategory)
    {
        return view('decorationCategories.show', [
            'decorationCategory' => $decorationCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DecorationCategory $decorationCategory)
    {
        return view('decorationCategories.edit', [
        'decorationCategory' => $decorationCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDecorationCategoryRequest $request, DecorationCategory $decorationCategory)
    {
        //get the validated data
        $validated = $request->validated();

        //create the slug
        $validated['slug'] = Str::slug($validated['name']);

        $decorationCategory->update($validated);

        return redirect()->route('decorationCategories')
            ->with('flash.banner', 'Decoration Category updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DecorationCategory $decorationCategory)
    {
        $model = $decorationCategory;

        $decorationCategory->delete();

        //set the banner to danger
        session()->flash('flash.bannerStyle', 'danger');

        return redirect()->route('decorationCategories')
            ->with('flash.banner', 'Decoration Category '. $model->name .' deleted successfully');


    }
}
