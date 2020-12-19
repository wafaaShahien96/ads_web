@extends('dashboard.layouts.app')
@section('title', __('global.contacts.title'))

@section('content')

@include('dashboard.layouts.includes.alerts.success')
@include('dashboard.layouts.includes.alerts.errors')

 <!-- begin:: Content Head -->
 <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                @lang('global.contacts.title')
            </h3>

            <span class="kt-subheader__separator kt-hidden"></span>

            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>

                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ route('admin.home') }}" class="kt-subheader__breadcrumbs-link"> @lang('global.home') </a>
            </div>
        </div>

    </div>
</div>
<!-- end:: Content Head -->

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <!--Begin::Row-->
    <div class="card card-custom" style="margin-top: -220px">
        <div class="card-header">
        <div class="card-title">
        </div>
        <div class="card-toolbar">

            {{-- @can('admin-create') --}}
            <a href="{{ route('admin.contacts.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>@lang('global.contacts.fields.add_contact')
            </a>
            {{-- @endcan --}}
            <!--end::Button-->
        </div>
        </div>
        
         <div class="card-body">
            <table class="table table-hover" id=" example">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('global.contacts.fields.first_name')</th>
                    <th scope="col">@lang('global.contacts.fields.last_name')</th>
                    <th scope="col">@lang('global.contacts.fields.email')</th>
                    <th scope="col">@lang('global.contacts.fields.subject')</th>
                    <th scope="col">@lang('global.contacts.fields.comment')</th>
                    <th scope="col">@lang('global.action')</th>

                    {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                    <th> {{$loop->iteration}}</th>
                    <td>{{$contact->first_name}}</td>
                    <td>{{$contact->last_name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->comment}}</td>
                    <td>
                
                        <form class="delete_form d-inline-block" action="{{route('admin.contacts.destroy', $contact->id)}} " method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="delete_btn btn btn-danger btn-flat btn-sm" type="button">
                                <i class="fa fa-trash"></i> @lang('global.delete')
                            </button>
                        </form>
                    </td>
                    @endforeach
                </tr>
                </tbody>
            </table>
           </div>
           <div class="card-footer">
            {{ $contacts->links() }}
           </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    //delete items
    $(document).on("click", 'button.delete_btn', function () {
        let target_form = $(this).closest(".delete_form");
        let cancel_txt =  '{{ __("global.cancel") }}';
        let ok_txt = '{{ __("global.ok") }}';
        Swal.fire({
            title: '{{ __("global.are you sure?") }}',
            text: '{{ __("global.warn deletion") }}',
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