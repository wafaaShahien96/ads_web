@extends('dashboard.layouts.app')

@section('title',__('trans.countries.title'))

@section('content')


    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    @lang('trans.countries.fields.add_country')

                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.country.index') }}" class="kt-subheader__breadcrumbs-link">
                        @lang('trans.countries.fields.all_countries')

                    </a>

                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.home') }}" class="kt-subheader__breadcrumbs-link">
                    @lang('trans.home')
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <div class="container-fluid">
        <div class="card"  style="margin-top: -180px">
            <div class="card-header">
                <h3>@lang('trans.countries.fields.edit_country')
                </h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.country.update' , $country->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                      <label for="name_en"><b>@lang('trans.countries.fields.name:en')</b></label>
                    <input type="text" name="name:en" id="name_en" class="form-control"
                     value="{{$country->translate('en')->name}}">

                        @error('name:en')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                     <label for="name_ar"><b>@lang('trans.countries.fields.name:ar')</b> </label>
                      <input type="text" name="name:ar" id="name_ar" class="form-control"
                      value="{{$country->translate('ar')->name}}" >
                        @error('name:ar')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="float-right">
                        <button class="btn btn-primary">@lang('trans.update')</button>
                        <a type="button" class="btn btn-success ml-3 " href="{{ route('admin.country.index') }}">@lang('trans.back')</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
