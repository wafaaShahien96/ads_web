@extends('dashboard.layouts.app')

@section('title',__('trans.states.title'))

@section('content')


    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    @lang('trans.states.fields.add_state')
                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.state.index') }}" class="kt-subheader__breadcrumbs-link">
                       @lang('trans.states.fields.all_state')
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
        <div class="card" style="margin-top: -80px">
            <div class="card-header">
                <h3>@lang('trans.states.fields.add_state')</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.state.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="country_id"><b>@lang('trans.states.fields.select_country')</b></label>
                        <select name="country_id" id="country_id" class="form-control">
                            @foreach ($countries as $country)
                            <option selected value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                          @error('country_id')
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>

                    <div class="form-group">
                      <label for="name_en"> <b>@lang('trans.states.fields.name:en') </b> </label>
                      <input type="text" name="name:en" id="name_en" class="form-control" placeholder="name en .." >
                        @error('name:en')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="name_ar"><b> @lang('trans.states.fields.name:ar')  </b></label>
                      <input type="text" name="name:ar" id="name_ar" class="form-control" placeholder="name ar .." >
                        @error('name:ar')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="float-right">
                        <button class="btn btn-primary">@lang('trans.submit')</button>
                        <a type="button" class="btn btn-success ml-3 " href="{{ route('admin.state.index') }}">@lang('trans.back')</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
