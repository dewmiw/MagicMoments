<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\MusicCategory;
use App\Models\DecorationCategory;


class ManagementController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        $restaurants = Restaurant::all();
        $musicCategories = MusicCategory::all();
        $decorationCategories = DecorationCategory::all();
        return view('admin.management', compact('restaurants', 'musicCategories', 'decorationCategories', 'bookings'));
    }

    // Create a new record for Restaurant
    public function createRestaurant(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'slug' => 'required|string|unique:restaurants,slug',
            'status' => 'required|boolean',
        ]);

        Restaurant::create($request->all());

        return redirect()->back()->with('success', 'Restaurant created successfully.');
    }


    // Delete Restaurant
    public function deleteRestaurant($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();

        return redirect()->route('restaurants.index')->with('success', 'Restaurant deleted successfully.');
    }

    // Create a new record for Music Category
    public function createMusicCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:music_categories,slug',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|boolean',
        ]);

        MusicCategory::create($request->all());

        return redirect()->back()->with('success', 'Music Category created successfully.');
    }


    // Delete Music Category
    public function deleteMusicCategory($id)
    {
        $musicCategory = MusicCategory::findOrFail($id);
        $musicCategory->delete();

        return redirect()->route('music_categories.index')->with('success', 'Music Category deleted successfully.');
    }

    // Create a new record for Decoration Category
    public function createDecorationCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:decoration_categories,slug',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|boolean',
        ]);

        DecorationCategory::create($request->all());

        return redirect()->back()->with('success', 'Decoration Category created successfully.');
    }


    // Delete Decoration Category
    public function deleteDecorationCategory($id)
    {
        $decorationCategory = DecorationCategory::findOrFail($id);
        $decorationCategory->delete();

        return redirect()->route('decoration_categories.index')->with('success', 'Decoration Category deleted successfully.');
    }
}
