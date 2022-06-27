@extends('layouts.master')

@section('title')
@lang('nav_BranchCompanies')
@endsection

@section('content')

    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/branch.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>{{ Str::upper(__('nav_BranchCompanies')) }}</h1>
        </div>
    </div>

    <div class="section-wrapper py-0">
        <div class="container">
            <div class="row mt-5">
                @foreach ($companies as $company)
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="project-col">
                        <img src="{{ Storage::url($company->{'logo_'.app()->getLocale()}) }}" alt="" style="object-fit: cover;">
                        <div class="project-col__title">
                            <h4><a href="branch-companies/{{ $company->id }}" style="color: black">{{ Str::upper($company->{'name_'.app()->getLocale()}) }}</a></h4>
                            <p>{{ ucfirst($company->{'direction_'.app()->getLocale()}) }}@if($company->id == 1) <span style="float: right;" class="badge rounded-pill text-bg-info">Толгой компани</span>@endif</p>
                        </div>
                        <div style="height: 100px;">
                            @php $brandimage = App\Models\Brand::where('company_id',$company->id)->get() @endphp
                            @foreach($brandimage as $brand)
                            <div style="width: 74px; height: 38px; float: left;">
                                <a href="#brandModal{{ $brand->id }}" data-toggle="modal" data-target="#brandModal{{ $brand->id }}"><img src="{{ Storage::url($brand->logo) }}" alt="" style="width: 64px; height: 35px;"></a>
                                <!-- Brand Modal -->
                                <div class="modal fade bd-example-modal-lg" id="brandModal{{ $brand->id }}" tabindex="-1" role="dialog" aria-labelledby="brandModal{{ $brand->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            {{ $brand->name }}
                                        </div>
                                    </div>
                                </div>
                                <!-- Brand Modal END -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>



                @endforeach
            </div>
        </div>
    </div>
@endsection