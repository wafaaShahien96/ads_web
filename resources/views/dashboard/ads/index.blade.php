@extends('dashboard.layouts.app')
@section('title', __('trans.ads.title'))

@section('content')

@include('dashboard.layouts.includes.alerts.success')
@include('dashboard.layouts.includes.alerts.errors')

<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                @lang('trans.ads.title')
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
            <a href="{{ route('admin.ads.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>@lang('trans.ads.fields.add_ads')
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
                    <th scope="col">@lang('trans.ads.fields.title')</th>
                    <th scope="col">@lang('trans.ads.fields.image')</th>
                    <th scope="col">@lang('trans.ads.fields.sub_category')</th>
                    <th scope="col">@lang('trans.ads.fields.feature')</th>
                    <th scope="col">@lang('trans.ads.fields.status')</th>
                    <th scope="col">@lang('trans.ads.fields.price')</th>
                    <th scope="col">@lang('trans.ads.fields.location')</th>
                    <th scope="col">@lang('trans.ads.fields.date')</th>
                    <th scope="col">@lang('trans.action')</th>

                    {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adses as $ads)
                    <tr>
                    <th> {{$loop->iteration}}</th>
                    <td>{{$ads->title}}</td>
                    <td>
                        <img src="{{ asset('storage/images/ads/'.$ads->image) }}" alt="image" class="img-thumbnail" width="80px;">
                   </td>
                    <td>{{$ads->category->name ?? ''}}</td>
                    <td>{{$ads->featured}}</td>
                    <td>{{$ads->status}}</td>
                    <td>{{$ads->price}}</td>
                    <td>{{$ads->location}}</td>
                    <td>{{$ads->date}}</td>
                    <td>
                        <a href="{{ route('admin.ads.edit', $ads->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                        <form class="delete_form d-inline-block" action="{{route('admin.ads.destroy', $ads->id)}} " method="post">
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
            {{ $adses->links() }}
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

