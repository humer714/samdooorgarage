<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller
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
        $projects = Projects::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
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
            'title' => 'required|max:255',
            'slug' => ['required', 'unique:projects,slug'],
            'description' => 'required',
            'status' => 'required',
            'client_name' => 'nullable|max:255',
            'category' => 'nullable|max:255',
            'start_date' => 'nullable',
            'is_active' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'meta_description' => 'nullable',
        ]);

        $input['slug'] = Str::slug($request->slug);
        if ($image = $request->file('image')) {
            $destinationPath = public_path('/image/project_image/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        } else {
            $input['image'] = 'default.jpg';
        }
        $data = Projects::create($input);

        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        return view('admin.projects.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
        $input = $request->validate([
            'title' => 'required|max:255',
            'slug' => ['required', 'unique:projects,slug' . $projects->id],
            'description' => 'required',
            'status' => 'required',
            'client_name' => 'nullabe|max:255',
            'category' => 'nullable|max:255',
            'start_date' => 'nullable',
            'is_active' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg',
            'meta_description' => 'nullable',
        ]);

        $input['slug'] = Str::slug($request->slug);
        if ($image = $request->file('image')) {
            $destinationPath = public_path('/image/project_image/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        $projects->update($input);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        $projects->delete();
        return redirect()->route('projects.index')->with('success', 'Project has been deleted');
    }
}
