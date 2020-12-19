@extends('dashboard.layouts.app')

@section('title', __('trans.payments'))

@section('content')

    @include('dashboard.layouts.includes.alerts.success')
    @include('dashboard.layouts.includes.alerts.errors')

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    @lang('trans.payment')
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
            <div class="card-body">
            @if (count($payments) > 0)
            <table class="table table-hover text-center" id=" example">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('trans.user')</th>
                    <th scope="col">@lang('trans.package title')</th>
                    <th scope="col">@lang('trans.amount')</th>
                    <th scope="col">@lang('trans.purchased_date')</th>
                    <th scope="col">@lang('trans.expire_date')</th>
                    <th scope="col">@lang('trans.delete')</th>
                </tr>
                </thead>

                <tbody>
                    @isset($payments)
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{$payment->id}}</td>
                            <td>{{$payment->user->first_name}} {{$payment->user->last_name}}</td>
                                <td>{{$payment->package->type}}</td>
                                <td>{{$payment->amount}}</td>
                                <td>{{$payment->created_at}}</td>
                                <td>{{$payment->calculate()}}</td>
                                <td>
                                    <form action="{{route('admin.payment.destroy',['payment'=>$payment])}}" method="POST">
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
        </div>


        <!--End::Row-->

        <!--End::Dashboard 1-->
    </div>
    <!-- end:: Content -->
@endsection


