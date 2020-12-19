@extends('dashboard.layouts.app')
@section('title', __('trans.articles'))
@section('content')
<!-- begin:: Content Head -->
<div class="kt-subheader kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
            @lang('trans.add article')
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('admin.article.index') }}" class="kt-subheader__breadcrumbs-link">
                    @lang('trans.articles')
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
            <h3>@lang('trans.add article')</h3>
            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>please correct your errors</strong> 
                {{-- <h4>{{$errors}}</h4>  --}}
                </div>
            @endif
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="title:en">@lang('trans.title_in_english')</label>
                            <input type="text" class="form-control @error('title:en') is-invalid @enderror" name="title:en"id="title:en" value="{{ old('title:en') }}">
                            @error('title:en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="title:ar">@lang('trans.title_in_arabic')</label>
                            <input type="text" class="form-control  @error('title:ar') is-invalid @enderror" name="title:ar"id="title:ar" value="{{ old('title:ar') }}">
                            @error('title:ar')
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
                      <label for="content:ar">@lang('trans.content_in_english')</label>
                      <textarea class="form-control content  @error('content:en') is-invalid @enderror" name="content:en" id="content:en" value="{{ old('content:en') }}" rows="30"autofocus >
                        {{ old('content:en') }}
                      </textarea>
                      @error('content:en')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-group">
                      <label for="content:ar">@lang('trans.content_in_arabic')</label>
                      <textarea class="form-control content  @error('content:ar') is-invalid @enderror" name="content:ar" id="content:ar" rows="30"autofocus >
                        {{ old('content:ar') }}
                    </textarea>
                      @error('content:ar')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
               </div>
            </div>     
           <!-- tags -->
            <div class= "row">
                <div class="col-12">    
                    <div class="form-row align-items-center  {{ $errors->first('tags') ? 'is-invalid':''}}">
                    <label for="tags">@lang('trans.article tags')</label>
                    <select id="tags" name="tags[]" class="form-control mb-2 js-example-basic-single" autofocus multiple>
                        <option value="" disabled selected>@lang('trans.tags')</option>
                        @foreach ($tags as $tag) 
                        <option value="{{old('tag',$tag->id)}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    @error('tags')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class= "row">
                <div class="col-12">
                    <div class="custom-file @error('image') is-invalid @enderror ">
                        <input type="file" class="custom-file-input" id="validatedImage" name="image" required>
                        <label class="custom-file-label" id="image"for="validatedCustomFile" autofocus>@lang('trans.choose_article_image')</label>
                    </div>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>         
             <div class="float-right mt-5">
                <button type="submit" class="btn btn-success">@lang('trans.save')</button>
                <a type="button" class="btn btn-primary ml-3 " href="{{ route('admin.article.index') }}">@lang('trans.back')</a>
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