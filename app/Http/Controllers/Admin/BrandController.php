<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandStoreRequest;
use App\Models\Brand;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('admin.brands.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandStoreRequest $request)
    {
        $logo = $request->file('logo')->store('public/brands');
        $slider_image = $request->file('slider_image')->store('public/brands/slider');

        $brand = Brand::create([
            'name' => $request->name,
            'intro_en' => $request->intro_en,
            'intro_ru' => $request->intro_ru,
            'intro_mn' => $request->intro_mn,
            'logo' => $logo,
            'slider_image' => $slider_image,
            'start_year' => $request->start_year,
            'company_id' => $request->company_id,
        ]);

        return to_route('admin.brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $companies = Company::all();

        return view('admin.brands.edit', compact('brand', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required',
            'intro_en' => 'required',
            'intro_ru' => 'string',
            'intro_mn' => 'string',
            'start_year' => 'string',
        ]);

        $logo = $brand->logo;
        $slider_image = $brand->slider_image;

        if($request->hasFile('logo')){
            Storage::delete($brand->logo);
            $logo = $request->file('logo')->store('public/brands');
        } elseif($request->hasFile('slider_image')){
            Storage::delete($brand->slider_image);
            $slider_image = $request->file('slider_image')->store('public/brands/slider');
        }

        $brand->update([
            'name' => $request->name,
            'intro_en' => $request->intro_en,
            'intro_ru' => $request->intro_ru,
            'intro_mn' => $request->intro_mn,
            'logo' => $logo,
            'slider_image' => $slider_image,
            'start_year' => $request->start_year,
            'company_id' => $request->company_id,
        ]);

        if ($request->has('companies')) {
            $brand->companies()->sync($request->companies);
        }

        return to_route('admin.brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        Storage::delete($brand->logo);
        Storage::delete($brand->slider_image);
        $brand->companies()->detach();
        $brand->delete();

        return to_route('admin.brands.index');
    }
}
