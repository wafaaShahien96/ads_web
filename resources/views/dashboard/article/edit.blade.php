@extends('dashboard.layouts.app')
@section('title', __('trans.edit article'))
@section('content')

@if($errors->any())
  <div class="alert alert-danger">
    <h3>please correct your errors</h3> 
  <h4>{{$errors}}</h4> 
  </div>
@endif<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
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
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.article.update',$article->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="title:en">@lang('trans.title_in_english')</label>
                        <input type="text" class="form-control" name="title:en"id="title:en" value="{{$article->translate('en')->title}}">
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
                            <input type="text" class="form-control" name="title:ar"id="title:ar" value="{{$article->translate('ar')->title}}">
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
                  <textarea class="form-control content" name="content:en" id="content:en" rows="30" value="{{strip_tags($article->translate('en')->content)}}"autofocus >{{old('content', html_entity_decode($article->translate('en')->content))}}</textarea>
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
                      <textarea class="form-control content" name="content:ar" id="content:ar" value="{{$article->translate('ar')->conntent}}" rows="30" autofocus >{{old('content', html_entity_decode($article->translate('ar')->content))}}</textarea>
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
                <div class="col-6">
                    <div class="form-row align-items-center">
                    <label for="tags">@lang('trans.article tags')</label>
                    <select style="height:100px;" id="tags" name="tags[]" class="form-control mb-2 js-example-basic-single {{ $errors->first('tag') ? 'is-invalid':''}}" autofocus multiple>
                        @foreach ($tags as $tag)
                            @if(in_array($tag->id, $articletags))
                                <option selected value="{{$tag->id}}">{{$tag->translate('en')->name}}</option>
                            @else
                                <option value="{{$tag->id}}">{{$tag->translate('en')->name}}</option>
                            @endif
                        @endforeach
                    </select>
                        {{-- <select id="tags" name="tags[]:en" class="form-control mb-2 js-example-basic-single {{ $errors->first('tag') ? 'is-invalid':''}}" autofocus multiple>
                            <option value="" disabled selected>@lang('trans.tags')</option>
                            @foreach ($tags as $tag) 
                            <option value="{{ $tag ->id}}" {{ old('tag:en') && $tag->id == old('tag:en') ? 'selected':'' }} >{{$tag->translate('en')->name}}</option>
                            @endforeach
                        </select> --}}
                    </div>
                    @if($errors->first('tags'))
                    <h6 style="color: red;">{{$errors->first('tags') }}</h6>
                    @endif
                </div>
                <div class="col-6">    
                    <div class="form-row align-items-center">
                    <label for="tags">@lang('trans.article tags')</label>
                    <select style="height:100px;" id="tags" name="tags[]" class="form-control mb-2 js-example-basic-single {{ $errors->first('tag') ? 'is-invalid':''}}" autofocus multiple>
                        @foreach ($tags as $tag)
                            @if(in_array($tag->id, $articletags))
                                <option selected value="{{$tag->id}}">{{$tag->translate('ar')->name}}</option>
                            @else
                                <option value="{{$tag->id}}">{{$tag->translate('ar')->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    </div>
                    @if($errors->first('tags'))
                    <h6 style="color: red;">{{$errors->first('tags') }}</h6>
                    @endif
                </div>
            </div>
            <div class= "row">
                <div class="col-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedImage" name="image" value="{{($article->image)}}">
                        <label class="custom-file-label"id="image" for="validatedCustomFile" autofocus>@lang('trans.choose_article_image')</label>
                    </div>
                    <img src="{{ asset('storage/images/articles/' . $article->image) }}" alt="image" class="img-thumbnail" width="300px;">
                    @if ($errors->first('image'))
                        <h6 style="color: red;"> invalid image, only jpg,png and jpeg are allowed </h6>
                    @endif
                </div>    
            </div>     
            <div class="float-right mt-4">
                <button class="btn btn-success">@lang('trans.update')</button>
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