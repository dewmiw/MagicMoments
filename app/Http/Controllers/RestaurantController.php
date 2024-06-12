<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Http\Request;





class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('restaurants.index', [
            'restaurants' => Restaurant::orderBy('created_at','DESC')->paginate()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        //get the validated data
        $validated = $request->validated();

        //create the slug
        $validated['slug'] = \Str::slug($validated['name']);

        Restaurant::create($validated);

        return redirect()->route('restaurants')
            ->with('flash.banner', 'Restaurant category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show', [
            'restaurants' => $restaurant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', [
            'restaurants' => $restaurant
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        //get the validated data
        $validated = $request->validated();

        //create the slug
        $validated['slug'] = \Str::slug($validated['name']);

        $restaurant->update($validated);
        return redirect()->route('restaurants')
            ->with('flash.banner', 'Restaurant category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        $model = $restaurant;

        $restaurant->delete();

        //set the banner status to danger
        session()->flash('flash.bannerStyle', 'danger');
        return redirect()->route('restaurants')
            ->with('flash.banner', 'Restaurant '. $model->name .' deleted successfully');
    }
}
