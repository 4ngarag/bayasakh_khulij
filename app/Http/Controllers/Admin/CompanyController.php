<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyStoreRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {
        $logo_en = $request->file('logo_en')->store('public/companies');
        $logo_ru = $request->file('logo_ru')->store('public/companies');
        $logo_mn = $request->file('logo_mn')->store('public/companies');

        Company::create([
            'name_en' => $request->name_en,
            'name_ru' => $request->name_ru,
            'name_mn' => $request->name_mn,
            'intro_en' => $request->intro_en,
            'intro_ru' => $request->intro_ru,
            'intro_mn' => $request->intro_mn,
            'logo_en' => $logo_en,
            'logo_ru' => $logo_ru,
            'logo_mn' => $logo_mn,
            'direction_en' => $request->direction_en,
            'direction_ru' => $request->direction_ru,
            'direction_mn' => $request->direction_mn,
            'start_year' => $request->start_year,
            'company_size' => $request->company_size,
            'phone' => $request->phone,
            'email' => $request->email,
            'facebook' => $request->facebook,
        ]);

        return to_route('admin.companies.index');
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
    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ru' => 'string',
            'name_mn' => 'string',
            'intro_en' => 'required',
            'intro_ru' => 'string',
            'intro_mn' => 'string',
            'logo_en' => 'string',
            'logo_ru' => 'string',
            'logo_mn' => 'string',
            'direction_en' => 'string',
            'direction_ru' => 'string',
            'direction_mn' => 'string',
            'start_year' => 'required',
            'company_size' => 'string',
            'phone' => 'string',
            'email' => 'string',
            'facebook' => 'string',
        ]);

        $logo_en = $company->logo_en;
        $logo_ru = $company->logo_ru;
        $logo_mn = $company->logo_mn;

        if($request->hasFile('logo_en')){
            Storage::delete($company->logo_en);
            $logo_en = $request->file('logo_en')->store('public/companies');
        } elseif($request->hasFile('logo_ru')){
            Storage::delete($company->logo_ru);
            $logo_ru = $request->file('logo_ru')->store('public/companies');
        } elseif($request->hasFile('logo_mn')){
            Storage::delete($company->logo_mn);
            $logo_mn = $request->file('logo_mn')->store('public/companies');
        }

        $company->update([
            'name_en' => $request->name_en,
            'name_ru' => $request->name_ru,
            'name_mn' => $request->name_mn,
            'intro_en' => $request->intro_en,
            'intro_ru' => $request->intro_ru,
            'intro_mn' => $request->intro_mn,
            'logo_en' => $logo_en,
            'logo_ru' => $logo_ru,
            'logo_mn' => $logo_mn,
            'direction_en' => $request->direction_en,
            'direction_ru' => $request->direction_ru,
            'direction_mn' => $request->direction_mn,
            'start_year' => $request->start_year,
            'company_size' => $request->company_size,
            'phone' => $request->phone,
            'email' => $request->email,
            'facebook' => $request->facebook,
        ]);

        return to_route('admin.companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        Storage::delete($company->logo_en);
        Storage::delete($company->logo_ru);
        Storage::delete($company->logo_mn);
        $company->brands()->detach();
        $company->delete();

        return to_route('admin.companies.index');
    }
}
