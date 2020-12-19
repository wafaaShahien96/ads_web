@extends('dashboard.layouts.app')

@section('title',__('trans.ads.title'))

@section('content')


<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left"
                    id="kt_subheader_mobile_toggle"><span></span></button>
                @lang('trans.ads.fields.edit_ads')
            </h3>

            <span class="kt-subheader__separator kt-hidden"></span>

            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('admin.ads.index') }}" class="kt-subheader__breadcrumbs-link">
                    @lang('trans.ads.title')
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
    <div class="card">
        <div class="card-header">
            <h3>@lang('trans.ads.fields.edit_ads')</h3>
        </div>

        <div class="card-body">
                <form action="{{route('admin.ads.update',$ads->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('dashboard.layouts.includes.alerts.errors')
                @include('dashboard.layouts.includes.alerts.success')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title"> <b>@lang('trans.ads.fields.title') </b> </label>
                            <input type="text" name="title" id="title" class="form-control" value="{{$ads->title}}" >
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        {{-- image --}}
                        <div class="form-group">
                            <label for="image">@lang('trans.ads.fields.image')</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" name="category_id" required>
                                <option value="">Select a Category</option>

                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                   {{ $ads->category_id == $category->id ? "selected" : "" }} >{{ $category->name }}
                                </option>
                                @if ($category->children)
                                @foreach ($category->children as $child)
                                <option value="{{ $child->id }}"
                                    {{ $ads->category_id == $child->id ? "selected" : "" }} >&nbsp;&nbsp;-
                                    &nbsp;{{ $child->name }}</option>
                                @endforeach
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        {{-- feature --}}
                        <div class="form-group">
                            <label for="featured">@lang('trans.ads.fields.feature')</label>
                            <select name="featured" id="featured" class="form-control">
                             <option value="yes" {{ $ads->featured == "yes" ? "selected" : "" }} >Yes</option>
                             <option value="no"  {{ $ads->featured == "no" ? "selected" : "" }}>No</option>

                            </select>
                            @error('feature')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        {{-- status --}}
                        <div class="form-group">
                            <label for="status">@lang('trans.ads.fields.status')</label>
                            <select name="status" id="status" class="form-control" >
                         <option value="inactive" {{ $ads->status == "inactive" ? "selected" : "" }} >INACTIVE</option>
                        <option value="active"  {{ $ads->status == "active" ? "selected" : "" }}>ACTIVE</option>
                        <option value="sold"  {{ $ads->status == "sold" ? "selected" : "" }}>SOLD</option>
                        <option value="expired"  {{ $ads->status == "expired" ? "selected" : "" }}>EXPIRED</option>
                        <option value="deleted"  {{ $ads->status == "deleted" ? "selected" : "" }}>DELETED</option>
                            </select>
                              @error('status')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        {{-- price --}}
                        <div class="form-group">
                            <label for="price">@lang('trans.ads.fields.price')</label>
                            <input type="number" name="price" id="price"
                             value="{{$ads->price}}"   class="form-control" >
                              @error('price')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        {{-- date --}}
                        <div class="form-group">
                            <label for="date">@lang('trans.ads.fields.date')</label>
                            <input type="date" name="date" id="date" class="form-control" value="{{$ads->date}}"  >
                              @error('date')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                </div>
                    </div>

                    <div class="col-md-6">
                        {{-- location --}}
                        <div class="form-group">
                            <label for="location">@lang('trans.ads.fields.location')</label>
                            <input type="text" name="location" id="location" class="form-control" >
                              @error('location')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                        </div>
                    </div>
                </div>


                <div class="float-right">
                    <button class="btn btn-primary">@lang('trans.update')</button>
                    <a type="button" class="btn btn-success ml-3 "
                        href="{{ route('admin.ads.index') }}">@lang('trans.back')</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
