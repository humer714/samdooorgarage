<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\States;
use App\Models\Service;
use App\Models\Projects;
use App\Models\Homepages;
use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Support\Facades\Request;

class HomepagesController extends Controller
{
    /**
     *   here we will show the home page of the website front end
     */
    public function index()
    {
        $services = Service::all();
        $blogs = Blog::all();
        $projects = Projects::all();
        return view('front.front_pages.index', compact('services', 'blogs', 'projects'));
    }

    /**
     *   here we will show the about_us page of the website front end
     */
    public function about_us()
    {
        return view('front.front_pages.about_us');
    }

    /**
     *   here we will show the services page of the website front end
     */
    public function services()
    {
        $services = Service::all();
        return view('front.front_pages.services', compact('services'));
    }

    /**
     *   here we will show the projects page of the website front end
     */
    public function projects()
    {
        $projects = Projects::all();
        return view('front.front_pages.projects', compact('projects'));
    }

    /**
     *   here we will show the contact_us page of the website front end
     */
    public function contact_us()
    {
        return view('front.front_pages.contact_us');
    }

    /**
     *   here we will show the locations page of the website front end
     */
    public function locations()
    {
        $states = States::with('cities')->get();
        return view('front.front_pages.locations', compact('states'));
    }

    /**
     *   here we will show the blogs page of the website front end
     */
    public function blogs()
    {
        $blogs = Blog::all();
        return view('front.front_pages.blogs', compact('blogs'));
    }

    /**
     *   here we will show the service_detail page of the website front end
     */
    public function service_detail(Service $services)
    {
        $detail_data = $services;
        $list_services = Service::where('id', '!=', $services->id)->where('status', 1)->get();
        return view('front.front_pages.service_detail', compact('detail_data', 'list_services'));
    }

    /**
     *   here we will show the project_detail page of the website front end
     */
    public function project_detail(Projects $projects)
    {
        $detail_data = $projects;
        return view('front.front_pages.project_detail', compact('detail_data'));
    }

    /**
     *   here we will show the blog_detail page of the website front end
     */
    public function blog_detail(Blog $blog)
    {
        $detail_data = $blog;
        return view('front.front_pages.blog_detail', compact('detail_data'));
    }

    /**
     *   here we will show the location_detail page of the website front end
     */
    public function location_detail(City $city)
    {
        $city = City::with('state')->where('id', $city->id)->first();
        $detail_data = $city;
        $services = Service::all();
        return view('front.front_pages.location_detail', compact('detail_data', 'services'));
    }
}
