@extends('dashboard.layouts.app')

@section('title', __('trans.partners'))

@section('content')

    @include('dashboard.layouts.includes.alerts.success')
    @include('dashboard.layouts.includes.alerts.errors')

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    @lang('trans.partner')
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
                <a href="{{ route('admin.partner.create') }}" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>@lang('trans.add partner')
                </a>
                <!-- {{-- @endcan --}} -->

                <!--end::Button-->
            </div>
            </div>
            <div class="card-body">
            @if (count($partners) > 0)
            <table class="table table-hover text-center" id=" example">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('trans.name_in_english')</th>
                    <th scope="col">@lang('trans.name_in_arabic')</th> 
                    <th scope="col">@lang('trans.partner logo')</th>
                    <th scope="col">@lang('trans.web link')</th>
                    <th scope="col">@lang('trans.edit')</th>
                    <th scope="col">@lang('trans.delete')</th>
                </tr>
                </thead>

                <tbody>
                    @isset($partners)
                        @foreach ($partners as $partner)
                            <tr>
                                <td>{{$partner->id}}</td>
                                <td>{{$partner->translate('en')->name}}</td>
                                <td>{{$partner->translate('ar')->name}}</td>
                                <td>
                                    <img src="{{ asset('storage/images/partners/' . $partner->logo) }}" alt="image" class="img-thumbnail" width="150px;">
                                </td>
                                <td>
                                <a href="{{$partner->link}}">{{$partner->link}}</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.partner.edit', $partner->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> @lang('trans.edit')</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.partner.destroy',['partner'=>$partner])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>@lang('trans.delete')</button>
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
            <div class="card-footer">
                {{ $partners->links() }}
            </div>
        </div>
        <!--End::Row-->

        <!--End::Dashboard 1-->
    </div>
    <!-- end:: Content -->
@endsection


