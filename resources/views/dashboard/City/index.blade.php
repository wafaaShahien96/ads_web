@extends('dashboard.layouts.app')
@section('title', __('trans.cities.title'))

@section('content')

@include('dashboard.layouts.includes.alerts.success')
@include('dashboard.layouts.includes.alerts.errors')

<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                @lang('trans.cities.title')
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
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid kt-mb-100">
    <!--Begin::Row-->
    <div class="card card-custom">
        <div class="card-header">
        <div class="card-title">
        </div>
        <div class="card-toolbar">

            {{-- @can('admin-create') --}}
            <a href="{{ route('admin.city.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>@lang('trans.cities.fields.add_city')
            </a>
            {{-- @endcan --}}

            <!--end::Button-->
        </div>
        </div>

         <div class="card-body">
            <table class="table table-hover text-center
            " id=" example">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('trans.cities.fields.state_id')</th>
                    <th scope="col">@lang('trans.cities.fields.name')</th>
                    <th scope="col">@lang('trans.action')</th>

                    {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                    <tr>
                    <th> {{$loop->iteration}}</th>
                    <td>{{$city->state_id}}</td>
                    <td>{{$city->name}}</td>
                    <td>
                        <a href="{{ route('admin.city.edit', $city->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                        <form class="delete_form d-inline-block" action="{{route('admin.city.destroy', $city->id)}} " method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="delete_btn btn btn-danger btn-flat btn-sm" type="button">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    @endforeach
                </tr>
                </tbody>
            </table>
           </div>
           <div class="card-footer">
            {{ $cities->links() }}
           </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    //delete items
    $(document).on("click", 'button.delete_btn', function () {
        let target_form = $(this).closest(".delete_form");
        let cancel_txt =  '{{ __("trans.cancel") }}';
        let ok_txt = '{{ __("trans.ok") }}';
        Swal.fire({
            title: '{{ __("trans.are you sure?") }}',
            text: '{{ __("trans.warn deletion") }}',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085D6',
            cancelButtonColor: '#d33',
            confirmButtonText: ok_txt,
            cancelButtonText: cancel_txt,
        }).then((result) => {
            if (result.value) {
                $(target_form).submit();
            }
        });
    });
</script>
@endpush

