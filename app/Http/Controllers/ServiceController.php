<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $service = Service::all();
        return view('admin.services.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'slug' => ['required', 'unique:services,slug'],
            'description' => 'required',
            'status' => 'required',
            'excerpt' => 'required',
            'is_active' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'meta_description' => 'nullable',
        ]);

        $input['slug'] = Str::slug($request->slug);
        if ($image = $request->file('image')) {
            $destinationPath = public_path('/image/services_image/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
        else{
            $input['image'] = 'default.jpg';
        }
        $data = Service::create($input);

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $services)
    {
        return view('admin.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $services)
    {
        $input = $request->validate([
            'title' => 'required',
            'slug' => ['required', 'unique:services,slug,' . $services->id],
            'description' => 'required',
            'status' => 'required',
            'excerpt' => 'required',
            'is_active' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'meta_description' => 'nullable',
        ]);
        $input['slug'] = Str::slug($request->slug);
        if ($image = $request->file('image')) {
            $destinationPath = public_path('/image/services_image/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        $services->update($input);
        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $services)
    {

        $services->delete();
        return redirect()->route('services.index')->with('success', 'Service has been deleted');
    }
}
