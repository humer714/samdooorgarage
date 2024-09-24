<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\States;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::with('state')->get();
        return view('admin.cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = States::all();
        return view('admin.cities.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'title' => 'required',
            'slug' => ['required', 'unique:cities,slug'],
            'state_id' => 'required',
            'description' => 'required',
            'status' => 'required',
            'excerpt' => 'required',
            'google_map' => 'required',
            'contact_number' => 'nullable',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'twitter' => 'nullable',
            'linkedIn' => 'nullable',
            'yelp' => 'nullable',
            'yellow_pages' => 'nullable',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'meta_description' => 'nullable',
        ]);

        $input['slug'] = Str::slug($request->slug);
        if ($image = $request->file('image')) {
            $destinationPath = public_path('/image/city_image/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        } else {
            $input['image'] = 'default.jpg';
        }
        $data = City::create($input);

        return redirect()->route('city.index')->with('success', 'City created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $states = States::all();
        return view('admin.cities.edit', compact('city', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $input = $request->validate([
            'title' => 'required',
            'slug' => ['required', 'unique:cities,slug,' . $city->id],
            'state_id' => 'required',
            'description' => 'required',
            'status' => 'required',
            'excerpt' => 'required',
            'contact_number' => 'nullable',
            'google_map' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'twitter' => 'nullable',
            'linkedIn' => 'nullable',
            'yelp' => 'nullable',
            'yellow_pages' => 'nullable',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'meta_description' => 'nullable',
        ]);
        $input['slug'] = Str::slug($request->slug);
        if ($image = $request->file('image')) {
            $destinationPath = public_path('/image/city_image/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        $city->update($input);
        return redirect()->route('city.index')->with('success', 'City updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('city.index')->with('success', 'City deleted successfully');
    }
}
