@extends('dashboard.layouts.app')

@section('title', __('trans.packages'))

@section('content')

    @include('dashboard.layouts.includes.alerts.success')
    @include('dashboard.layouts.includes.alerts.errors')

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    @lang('trans.package')
                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>

                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.home') }}" class="kt-subheader__breadcrumbs-link"> @lang('trans.home') </a>
                </div>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


        <!--Begin::Row-->
        <div class="card card-custom">
            <div class="card-header">
            <div class="card-title">
            </div>
            <div class="card-toolbar">

                <!-- {{-- @can('admin-create') --}} -->
                <a href="{{ route('admin.package.create') }}" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>@lang('trans.add package')
                </a>
                <!-- {{-- @endcan --}} -->

                <!--end::Button-->
            </div>
            </div>

            <div class="card-body">
            @if (count($packages) > 0)
            <table class="table table-hover text-center" id=" example">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('trans.package_type')</th>
                    <th scope="col">@lang('trans.package_price')</th>
                    <th scope="col">@lang('trans.total_ads')</th>
                    <th scope="col">@lang('trans.regular_ads')</th>
                    <th scope="col">@lang('trans.featured_ads')</th>
                    <th scope="col">@lang('trans.featured_ads_validity')</th>
                    <th scope="col">@lang('trans.package_validity')</th>
                    <th scope="col">@lang('trans.edit')</th>
                    <th scope="col">@lang('trans.delete')</th>
                </tr>
                </thead>

                <tbody>
                    @isset($packages)
                        @foreach ($packages as $package)
                            <tr>
                                <td>{{$package->id}}</td>
                                <td>{{$package->type}}</td>
                                <td>{{$package->price}}</td>
                                <td>{{$package->total_ads}}</td>
                                <td>{{$package->regular_ads}}</td>
                                <td>{{$package->featured_ads}}</td>
                                <td>{{$package->featured_ads_validity}}</td>
                                <td>{{$package->package_validity}}</td>
                                <td>
                                    <a href="{{ route('admin.package.edit', $package->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> @lang('trans.edit')</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.package.destroy',['package'=>$package])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i>@lang('trans.delete')</button>
                                    </form>                                
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>

            </table>
            @else
                <p>@lang('trans.no_data_found')</p>
            @endif
            </div>
        </div>


        <!--End::Row-->

        <!--End::Dashboard 1-->
    </div>
    <!-- end:: Content -->
@endsection


