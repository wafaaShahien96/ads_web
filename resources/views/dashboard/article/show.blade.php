@extends('dashboard.layouts.app')
@section('title', __('trans.c'))
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
                   @isset($article)
                                <h3>{{$article->title}}</h3>
                                <h6>{{$article->userable->name}}</h6>
                                <p>{{$article->created_at}}</p>
                                {{-- <div class="kt-section">
                                    <div class="kt-section__info">Article's Tags</div>
                                    <div class="kt-section__content kt-section__content--solid">
                                    @foreach ($tags as $tag)
                                        <span class="btn btn-label-primary btn-pill"> {{$tag->tag()->name}}  </span>;
                                    @endforeach
                                    </div>
                                </div> --}}
                                <img src="{{ asset('storage/images/articles/' . $article->image) }}" alt="image" class="img-thumbnail" width="300px;">                                
                                <p>{!! html_entity_decode($article->content) !!}</p>
                                    <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('trans.edit')</a>
                                    <form class="delete_form d-inline-block" action="{{ route('admin.article.destroy',$article->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="delete_btn btn btn-danger btn-flat btn-sm" type="button">
                                            <i class="fa fa-trash"></i> @lang('trans.delete')
                                        </button>
                                    </form>
                    @endisset
                </tbody>

            </table>
            </div>
        </div>


        <!--End::Row-->

        <!--End::Dashboard 1-->
    </div>
    <!-- end:: Content -->
@endsection      