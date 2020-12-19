@extends('dashboard.layouts.app')

@section('title',__('trans.categories.title'))

@section('content')


    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    @lang('trans.categories.fields.add_category')
                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.categories.index') }}" class="kt-subheader__breadcrumbs-link">
                       @lang('trans.categories.title')
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
    <div class="container-fluid">
        <div class="card" style="margin-top:-450px">
            <div class="card-header">
                <h3>@lang('trans.categories.fields.add_category')</h3>
            </div>

            <div class="card-body">
                <form action="{{route('admin.categories.store')}}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                      <label for="name_en"> <b>@lang('trans.categories.fields.name_en') </b> </label>
                      <input type="text" name="name:en" id="name_en" class="form-control" placeholder="name en .." >
                        @error('name:en')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>

                    <div class="col-md-6">
                     <div class="form-group">
                      <label for="name_ar"><b> @lang('trans.categories.fields.name_ar')  </b></label>
                      <input type="text" name="name:ar" id="name_ar" class="form-control" placeholder="name ar .." >
                        @error('name:ar')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>
                </div>

                    <div class="row " id="cats_list" style="display:none">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>@lang('trans.categories.fields.choose_category')</label>
                                <select name="parent_id" class="form-control">
                                @foreach ($categories as $category)
                                <option selected value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                </select>
                                @error('parent_id')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror

                            </div>
                        </div>
                       </div>


                  <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mt-1">
                                <input type="radio"
                                       name="type"
                                       value="1"
                                       checked
                                     
                                       class="switchery"
                                       data-color="success" />


                                <label class="card-title ml-1">@lang('trans.categories.fields.main_category')</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group mt-1">
                                <input type="radio"


                                       name="type"
                                       value="2"
                                       class="switchery" data-color="success" />

                                <label class="card-title ml-1">@lang('trans.categories.fields.sub_category')</label>
                            </div>
                        </div>

                    </div>



                    <div class="float-right">
                        <button class="btn btn-primary">@lang('trans.submit')</button>
                        <a type="button" class="btn btn-success ml-3 " href="{{ route('admin.categories.index') }}">@lang('trans.back')</a>
                    </div>
                </form>
            </div>
    </div>
        </div>
    </div>
@stop

@push('js')
    <script>
        $('input:radio[name="type"]').on('change', function() {
            // console.log($(this).val());
                if (this.checked && this.value == '2') {  // 1 if main cat - 2 if sub cat
                    $('#cats_list').css('display','block');
                }else{
                    $('#cats_list').css('display','none');
                }
            });
    </script>
@endpush
