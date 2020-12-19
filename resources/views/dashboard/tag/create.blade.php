@extends('dashboard.layouts.app')
@section('title', __('trans.tags'))
@section('content')
<!-- begin:: Content Head -->
<div class="kt-subheader kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
            @lang('trans.add tag')
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('admin.tag.index') }}" class="kt-subheader__breadcrumbs-link">
                    @lang('trans.tags')
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
            <h3>@lang('trans.add tag')</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.tag.store') }}" enctype="multipart/form-data">
                @csrf
             <div class="row">
                 <div class="col-6">
                    <div class="form-group">
                        <label for="name:en">@lang('trans.name_in_english')</label>
                        <input type="text" class="form-control  @error('name:en') is-invalid @enderror" name="name:en" value="{{ old('name:en') }}">
                        @error('name:en')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                 </div>
             </div>

            <div class="row">
               <div class="col-6">
                  <div class="form-group">
                      <label for="name:ar">@lang('trans.name_in_arabic')</label>
                      <input type="text" class="form-control @error('name:ar') is-invalid @enderror" name="name:ar" value="{{ old('name:ar') }}">

                      @error('name:ar')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
               </div>
            </div>
                   
             <div class="float-right">
                <button class="btn btn-success">@lang('trans.save')</button>
                <a type="button" class="btn btn-primary ml-3 " href="{{ route('admin.tag.index') }}">@lang('trans.back')</a>
            </div>

            </form>
        </div>
    </div>
</div>


@endsection





