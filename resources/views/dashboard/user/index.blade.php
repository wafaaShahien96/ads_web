@extends('dashboard.layouts.app')
@section('title', __('trans.users.title'))

@section('content')

 <!-- begin:: Content Head -->
 <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                @lang('trans.users.title')
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

<div class="container-fluid kt-mb-100">
    <!--Begin::Row-->
    <div class="card " >
        <div class="card-header">
        <div class="card-title">
        </div>
        <div class="card-toolbar">

            {{-- @can('admin-create') --}}
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>@lang('trans.users.fields.add_user')
            </a>
            {{-- @endcan --}}
            <!--end::Button-->
        </div>
        </div>

        <div class="card-body">
            <table class="table table-hover text-center" id=" example">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('trans.users.fields.first_name')</th>
                    <th scope="col">@lang('trans.users.fields.last_name')</th>
                    <th scope="col">@lang('trans.users.fields.email')</th>
                    <th scope="col">@lang('trans.users.fields.phone  ')</th>
                    <th scope="col">@lang('trans.users.fields.gender')</th>

                    <th scope="col">@lang('trans.action')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                    <th> {{$loop->iteration}}</th>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->gender}}</td>

                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" " class="btn btn-sm  btn-icon btn-icon-md btn-info" ><i class="fa fa-edit"></i>
                        </a>

                         <form class="delete_form d-inline-block" action="{{ route('admin.users.destroy', $user->id)}}" method="post">
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
            {{ $users->links() }}
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

