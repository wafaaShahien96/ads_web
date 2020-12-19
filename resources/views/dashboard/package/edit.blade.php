@extends('dashboard.layouts.app')
@section('title', __('trans.packages'))
@section('content')


<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
        <span class="kt-subheader__breadcrumbs-separator"></span>
            <h3 class="kt-subheader__title">
                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                @lang('trans.add package')
            </h3>

             <span class="kt-subheader__separator kt-hidden"></span>

            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('admin.package.index') }}" class="kt-subheader__breadcrumbs-link">
                    @lang('trans.packages')
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

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>@lang('trans.add package')</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.package.update',$package->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-6">    
                    <div class="form-row align-items-center">
                    <label for="package_type">@lang('trans.package_type')</label>
                    <select id="package_type" name="package_type" class="form-control mb-2 js-example-basic-single" autofocus>
                        <option value="" disabled selected>@lang('trans.package_type')</option>
                        <option value="basic" {{($package->type) == 'basic'? 'selected' : '' }}>@lang('trans.basic')</option>
                        <option value="value"{{($package->type) == 'value'? 'selected' : '' }}>@lang('trans.value')</option>
                        <option value="plus"{{($package->type) == 'plus'? 'selected' : '' }}>@lang('trans.plus')</option>
                    </select>
                    </div>
                    @if($errors->first('package_type'))
                    <h6 style="color: red;">{{$errors->first('package_type') }}</h6>
                    @endif
                </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="price">@lang('trans.package_price')</label>
                    <input type="number" class="form-control" name="price" value="{{ $package->price }}">
                    @if ($errors->first('price'))
                    <h6 style="color: red;">@lang('trans.invalid price')</h6>
                    @endif
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="total_ads">@lang('trans.total_ads')</label>
                    <input type="number" class="form-control" name="total_ads" value="{{$package->total_ads }}">
                    @if ($errors->first('total_ads'))
                    <h6 style="color: red;">@lang('trans.invalid total_ads')</h6>
                    @endif
                </div>
            </div><div class="col-6">
                <div class="form-group">
                    <label for="regular_ads">@lang('trans.regular_ads')</label>
                    <input type="number" class="form-control" name="regular_ads" value="{{ $package->regular_ads }}">
                    @if ($errors->first('regular_ads'))
                    <h6 style="color: red;">@lang('trans.invalid regular_ads')</h6>
                    @endif
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="featured_ads">@lang('trans.featured_ads')</label>
                    <input type="number" class="form-control" name="featured_ads" value="{{ $package->featured_ads }}">
                    @if ($errors->first('featured_ads'))
                    <h6 style="color: red;">@lang('trans.invalid featured_ads')</h6>
                    @endif
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="featured_ads_validity">@lang('trans.featured_ads_validity')</label>
                    <input type="number" class="form-control" name="featured_ads_validity" value="{{ $package->featured_ads_validity}}">
                    @if ($errors->first('featured_ads_validity'))
                    <h6 style="color: red;">@lang('trans.invalid featured_ads_validity')</h6>
                    @endif
                </div>
            </div><div class="col-6">
                <div class="form-group">
                    <label for="package_validity">@lang('trans.package_validity')</label>
                    <input type="number" class="form-control" name="package_validity" value="{{ $package->package_validity}}">
                    @if ($errors->first('package_validity'))
                    <h6 style="color: red;">@lang('trans.invalid package_validity')</h6>
                    @endif
                </div>
            </div>
             <div class="float-right mt-4">
                <button class="btn btn-success">@lang('trans.save')</button>
                <a type="button" class="btn btn-primary ml-3 " href="{{ route('admin.package.index') }}">@lang('trans.back')</a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection