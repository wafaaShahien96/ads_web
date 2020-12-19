@extends('dashboard.layouts.app')

@section('title',__('trans.cities.title'))

@section('content')


   <!-- begin:: Content Head -->
   <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                @lang('trans.cities.fields.add_city')
            </h3>

            <span class="kt-subheader__separator kt-hidden"></span>

            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('admin.city.index') }}" class="kt-subheader__breadcrumbs-link">
                    @lang('trans.cities.title')
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
    <!-- end:: Content Head -->
    <div class="container-fluid">
        <div class="card" style="margin-top: -80px">
            <div class="card-header">
                <h3>@lang('trans.cities.fields.add_city')</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.city.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="state_id"><b>@lang('trans.cities.fields.select_state')</b></label>
                        <select name="state_id" id="state_id" class="form-control">
                            @foreach ($states as $state)
                            <option selected value="{{$state->id}}">{{$state->name}}</option>
                            @endforeach
                        </select>
                          @error('state_id')
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>

                    <div class="form-group">
                      <label for="name_en"> <b>@lang('trans.cities.fields.name:en') </b> </label>
                      <input type="text" name="name:en" id="name_en" class="form-control" placeholder="name en .." >
                        @error('name:en')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="name_ar"><b> @lang('trans.cities.fields.name:ar')  </b></label>
                      <input type="text" name="name:ar" id="name_ar" class="form-control" placeholder="name ar .." >
                        @error('name:ar')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="float-right">
                        <button class="btn btn-primary">@lang('trans.submit')</button>
                        <a type="button" class="btn btn-success ml-3 " href="{{ route('admin.city.index') }}">@lang('trans.back')</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
