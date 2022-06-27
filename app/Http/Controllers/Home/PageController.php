<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::orderByDesc('created_at')->limit(2)->get();

        return view('home.index', compact('posts'));
    }

    public function news($id)
    {
        return view('home.show.news_show', [
            'post' => Post::findOrFail($id)
        ]);
    }
    
    public function about()
    {
        return view('home.about');
    }

    public function history()
    {
        return view('home.about.history');
    }

    public function management()
    {
        return view('home.about.management');
    }
    
    public function branch()
    {
        $companies = Company::all();
        return view('home.branch', compact('companies'));
    }

    public function branch_show($id)
    {
        return view('home.show.company_show', [
            'company' => Company::findOrFail($id)
        ]);
    }

    public function brands()
    {
        $brands = Brand::all();
        return view('home.brands', compact('brands'));
    }

    public function brandsTest()
    {
        $brands = Brand::all();
        return view('home.brandsTest', compact('brands'));
    }

    public function brands_show($id)
    {
        return view('home.show.brand_show', [
            'brand' => Brand::findOrFail($id)
        ]);
    }

    public function career()
    {
        return view('home.career');
    }

    public function careers()
    {
        return view('hr.index');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function storelocation()
    {
        return view('home.storelocation');
    }
}
