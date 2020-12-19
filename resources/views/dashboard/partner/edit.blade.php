@extends('dashboard.layouts.app')

@section('content')


<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">
        @lang('trans.partners')
        </h3>
        <span class="kt-subheader__breadcrumbs-separator"></span>
            <h3 class="kt-subheader__title">
                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                @lang('trans.edit partner')
            </h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>@lang('trans.edit partner')</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.partner.update',$partner) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="row">
                 <div class="col-6">
                    <div class="form-group">
                        <label for="name:en">@lang('trans.name_in_english')</label>
                        <input type="text" class="form-control" name="name:en" value="{{$partner->translate('en')->name}}">

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
                      <input type="text" class="form-control" name="name:ar" value="{{$partner->translate('ar')->name}}">

                      @error('name:ar')
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
                        <label for="link">@lang('trans.web link')</label>
                        <input type="text" class="form-control" name="link" value="{{ $partner->link }}">  
                        @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    </div>
                 </div>
            </div>
            <div class= "row">
                <div class="col-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedImage" name="logo" value="{{($partner->logo)}}">
                        <label class="custom-file-label"id="logo" for="validatedCustomFile" autofocus>@lang('trans.choose_partner_logo')</label>
                    </div>
                    <img src="{{ asset('storage/images/partners/' . $partner->logo) }}" alt="image" class="img-thumbnail" width="200px;">
                    @if ($errors->first('logo'))
                        <h6 style="color: red;"> invalid logo, only jpg,png and jpeg are allowed </h6>
                    @endif
                </div> 
            </div>
                   
             <div class="float-right">
                <button class="btn btn-success">@lang('trans.update')</button>
                <a type="button" class="btn btn-primary ml-3 " href="{{ route('admin.partner.index') }}">@lang('trans.back')</a>
            </div>

            </form>
        </div>
    </div>
</div>
@endsection