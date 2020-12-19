@extends('dashboard.layouts.app')
@section('title', __('trans.partners'))
@section('content')


<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
        <span class="kt-subheader__breadcrumbs-separator"></span>
            <h3 class="kt-subheader__title">
                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                @lang('trans.add partner')
            </h3>

             <span class="kt-subheader__separator kt-hidden"></span>

            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('admin.partner.index') }}" class="kt-subheader__breadcrumbs-link">
                    @lang('trans.partners')
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
            <h3>@lang('trans.add partner')</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.partner.store') }}" enctype="multipart/form-data">
                @csrf
            <div class="row">
                 <div class="col-6">
                    <div class="form-group">
                        <label for="name:en">@lang('trans.name_in_english')</label>
                        <input type="text" class="form-control" name="name:en" value="{{ old('name:en') }}">

                        @error('name:en')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                 </div>
               <div class="col-6">
                  <div class="form-group">
                      <label for="name:ar">@lang('trans.name_in_arabic')</label>
                      <input type="text" class="form-control" name="name:ar" value="{{ old('name:ar') }}">

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
                        <input type="text" class="form-control" name="link" value="{{ old('link') }}">
                        @if ($errors->first('link'))
                        <h6 style="color: red;">@lang('trans.invalid link')</h6>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedImage" name="logo" required>
                    <label class="custom-file-label" id="image"for="validatedCustomFile" autofocus>@lang('trans.choose_partner_logo')</label>
                </div>
                    @if ($errors->first('logo'))
                        <h6 style="color: red;">@lang('trans.invalid logo')</h6>
                    @endif
            </div> 
             <div class="float-right mt-4">
                <button class="btn btn-success">@lang('trans.save')</button>
                <a type="button" class="btn btn-primary ml-3 " href="{{ route('admin.partner.index') }}">@lang('trans.back')</a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script>
    $('.content').summernote({height: 200});
    </script>
    <script>
        $(document).ready(function(){
            $('input[type="file"]').change(function(e){
                var fileName = e.target.files[0].name;
                console.log(e.target.files);
                $("#image").text(fileName);
            });
        });
    </script>
@endpush