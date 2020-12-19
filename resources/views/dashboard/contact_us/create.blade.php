@extends('dashboard.layouts.app')

@section('title',__('global.contacts.title'))

@section('content')

{{-- <link rel="stylesheet" href="//www.codermen.com/css/bootstrap.min.css">   --}}

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    @lang('global.contacts.fields.add_contact')
                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.contacts.index') }}" class="kt-subheader__breadcrumbs-link">
                       @lang('global.contacts.fields.all_contacts')
                    </a>

                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.home') }}" class="kt-subheader__breadcrumbs-link">
                    @lang('global.home')
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <div class="container-fluid">
        <div class="card" style="margin-top: -10px">
            <div class="card-header">
                <h3>@lang('global.contacts.fields.add_contatct')</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.contacts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('dashboard.layouts.includes.alerts.errors')
                    @include('dashboard.layouts.includes.alerts.success')


                    <div class="row">
                        <div class="col-md-6">
                            {{-- name --}}
                            <div class="form-group">
                                <label for="first_name">@lang('global.contacts.fields.first_name')</label>
                                <input type="text" name="first_name" id="name" class="form-control" placeholder="First Name... " value="{{old('first_name')}}" >
                                  @error('first_name')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                              </div>
                        </div>
                        
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="last_name">@lang('global.contacts.fields.last_name')</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name...  " value="{{old('last_name')}}" >
                                  @error('last_name')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            {{-- email --}}
                            <div class="form-group">
                                <label for="email">@lang('global.contacts.fields.email')</label>
                                <input type="email" name="email" placeholder="Email" id="email" class="form-control" value="{{old('email',)}}" >
                                  @error('email')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            {{-- name --}}
                            <div class="form-group">
                                <label for="subject">@lang('global.contacts.fields.subject')</label>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject... " value="{{old('subject')}}" >
                                  @error('subject')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                        <div class="form-group">
                            <label for="comment">@lang('global.contacts.fields.comment')</label>
                            <input type="text" name="comment" id="comment" class="form-control" placeholder="comment " value="{{old('comment')}}" >
                              @error('subject')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                          </div>
                    </div>
                    </div>

                    

                  
                    <button class="btn btn-primary ">@lang('global.save')</button>
                   </div>
                </form>
            </div>
        </div>
   
@endsection

