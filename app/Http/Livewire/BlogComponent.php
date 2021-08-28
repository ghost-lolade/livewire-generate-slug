<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blogs;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BlogComponent extends Component
{
    public $blog_title;
    public $slug;
    public function render()
    {
        $blogs = Blog::latest()->take(7)->get();

        // $blogs = Blog::latest()->offset(5)->limit(7);
        // $blogs = Blog::latest()->skip(5)->take(7);
        return view('livewire.blog-component', compact('blogs'));
    }

    public function generateSlug()
    {
        $this->slug = SlugService::createSlug(Blog::class, 'slug', $this->blog_title);
    }

    public function store()
    {
        Blog::create([
            'blog_title' => $this->blog_title,
            'slug' => $this->slug,
        ]);
    }
}
