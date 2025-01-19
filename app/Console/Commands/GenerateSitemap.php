<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Service;
use App\Models\Project;
use App\Models\Blog;
use App\Models\City;
use App\Models\Projects;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the website';

    public function handle()
    {
        // Define your live domain URL here
        $baseUrl = 'https://samgaragedooropenerrepairreplacement.com';

        // Create a new sitemap instance
        $sitemap = Sitemap::create();

        // Add static routes with full URLs
        $sitemap->add(Url::create("{$baseUrl}/"))
                ->add(Url::create("{$baseUrl}/about-us"))
                ->add(Url::create("{$baseUrl}/services"))
                ->add(Url::create("{$baseUrl}/projects"))
                ->add(Url::create("{$baseUrl}/contact"))
                ->add(Url::create("{$baseUrl}/locations"))
                ->add(Url::create("{$baseUrl}/blogs"));

        // Add dynamic routes for services
        $services = Service::all(); 
        foreach ($services as $service) {
            $sitemap->add(Url::create("{$baseUrl}/services/{$service->slug}"));
        }

        // Add dynamic routes for projects
        $projects = Projects::all();
        foreach ($projects as $project) {
            $sitemap->add(Url::create("{$baseUrl}/projects/{$project->slug}"));
        }

        // Add dynamic routes for blog posts
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $sitemap->add(Url::create("{$baseUrl}/blogs/{$blog->slug}"));
        }

        // Add dynamic routes for cities
        $cities = City::all();
        foreach ($cities as $city) {
            $sitemap->add(Url::create("{$baseUrl}/{$city->slug}"));
        }

        // Save the sitemap to a file (public folder, for example)
        $sitemap->writeToFile(public_path('sitemap.xml'));

        // Remove unnecessary tags from the sitemap
        $this->removeUnnecessaryTags(public_path('sitemap.xml'));

        

        $this->info('Sitemap generated successfully!');
    }

    protected function removeUnnecessaryTags($filePath)
    {
        // Get the content of the sitemap
        $sitemapContent = file_get_contents($filePath);

        // Remove <changefreq> and <priority> tags
        $sitemapContent = preg_replace('/<changefreq>.*?<\/changefreq>/', '', $sitemapContent);
        $sitemapContent = preg_replace('/<priority>.*?<\/priority>/', '', $sitemapContent);

        // Write the modified content back to the file
        file_put_contents($filePath, $sitemapContent);
    }
}
