@extends('dashboard.layouts.app')
@section('title', __('trans.articles'))
@section('title', __('trans.articles'))

@section('content')

    @include('dashboard.layouts.includes.alerts.success')
    @include('dashboard.layouts.includes.alerts.errors')

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    @lang('trans.articles')
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

                {{-- @can('admin-create') --}}
                <a href="{{ route('admin.article.create') }}" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>@lang('trans.add article')
                </a>
                {{-- @endcan --}}

                <!--end::Button-->
            </div>
            </div>

            <div class="card-body">
            @if(count($articles) > 0)
            <table class="table table-hover text-center" style="width: 100%;" id=" example">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('trans.title')</th>
                    <th scope="col">@lang('trans.image')</th>
                    <th scope="col">@lang('trans.content')</th>
                    <th scope="col">@lang('trans.created_by')</th>
                    <th scope="col">@lang('trans.action')</th>

                </tr>
                </thead>

                <tbody>
                    @isset($articles)
                    @foreach ($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>
                                <img src="{{ asset('storage/images/articles/' . $article->image) }}" alt="image" class="img-thumbnail" width="200px;">
                                </td>
                                <td>{{\Illuminate\Support\Str::limit(strip_tags(html_entity_decode($article->content)),50, $end='...') }}</td>
                                <td>{{$article->userable->name}}</td>
                                <td>
                                    <a href="{{ route('admin.article.show', $article->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> @lang('trans.display')</a>
                                    <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> @lang('trans.edit')</a>
                                    <form class="delete_form d-inline-block" action="{{ route('admin.article.destroy',$article->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="delete_btn btn btn-danger btn-flat btn-sm" type="button">
                                            <i class="fa fa-trash"></i>@lang('trans.delete')
                                        </button>
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
                {{ $articles->links() }}
            </div>
        </div>


        <!--End::Row-->

        <!--End::Dashboard 1-->
    </div>
    <!-- end:: Content -->
@endsection

@push('js')
    <script>
        //delete items
        $(document).on("click", 'button.delete_btn', function () {
            let target_form = $(this).closest(".delete_form");
            let cancel_txt =  '{{ __("trans.cancel") }}';
            let ok_txt = '{{ __("trans.ok") }}';
            Swal.fire({
                title: '{{ __("trans.Are you sure?") }}',
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
