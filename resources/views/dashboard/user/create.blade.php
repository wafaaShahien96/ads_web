@extends('dashboard.layouts.app')

@section('title',__('trans.users.title'))

@section('content')

{{-- <link rel="stylesheet" href="//www.codermen.com/css/bootstrap.min.css">   --}}

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    @lang('trans.users.fields.add_user')
                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.users.index') }}" class="kt-subheader__breadcrumbs-link">
                       @lang('trans.users.fields.all_users')
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
        <div class="card" style="margin-top: -10px">
            <div class="card-header">
                <h3>@lang('trans.users.fields.add_user')</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('dashboard.layouts.includes.alerts.errors')
                    @include('dashboard.layouts.includes.alerts.success')


                    <div class="row">
                        <div class="col-md-6">
                            {{-- first_name --}}
                            <div class="form-group">
                                <label for="first_name">@lang('trans.users.fields.first_name')</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name... " value="{{old('first_name')}}" >
                                  @error('first_name')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                              </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="last_name">@lang('trans.users.fields.last_name')</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name...  " value="{{old('last_name')}}" >
                                  @error('last_name')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            {{-- email --}}
                            <div class="form-group">
                                <label for="email">@lang('trans.users.fields.email')</label>
                                <input type="email" name="email" placeholder="Email" id="email" class="form-control" value="{{old('email')}}" >
                                  @error('email')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            {{-- password --}}
                            <div class="form-group">
                                <label for="password">@lang('trans.users.fields.password')</label>
                                <input type="password" name="password" id="password" class="form-control" >
                                  @error('password')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                            </div>
                        </div>
                    </div>


                        <div class="row">
                            <div class="col-md-6">
                                {{-- phone --}}
                                <div class="form-group">
                                    <label for="phone">@lang('trans.users.fields.phone  ')</label>
                                    <input type="number" name="phone" id="phone" class="form-control" value="{{old('phone')}}">
                                      @error('phone')
                                          <span class="text-danger">{{$message}}</span>
                                      @enderror
                                </div>
                        </div>

                        <div class="col-md-6">
                            {{-- gender --}}
                            <div class="form-group">
                                <label for="gender">@lang('trans.users.fields.gender')</label>
                                <select name="gender" id="gender" class="form-control" >
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="company">Company</option>
                                </select>
                                  @error('gender')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="country_id">@lang('trans.users.fields.select_country')</label>
                            <select class="form-control" id="country" name="country_id">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}">
                            {{$country->name}}
                            </option>
                            @endforeach
                            </select>

                          @error('country_id')
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>
                        </div>

                        <div class="col-md-4">

                        <div class="form-group">
                            <label for="state_id">@lang('trans.users.fields.select_state')</label>
                            <select  id="state" name="state_id" class="form-control">

                            </select>
                              @error('state_id')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                          </div>
                    </div>


                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="city_id">@lang('trans.users.fields.select_city')</label>
                            <select  id="city" name="city_id" class="form-control">

                            </select>
                              @error('city_id')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                          </div>
                    </div>
                     </div>

                    <button class="btn btn-primary ">@lang('trans.save')</button>
                   </div>
                </form>
            </div>
        </div>

@endsection


@push('js')
<script>
    $('#country').change(function(){
    var countryID = $(this).val();
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('admin/get-state-list')}}?country_id="+countryID,
           success:function(res){
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                // console.log(res);
                    $.each(res,function(key,value){
               $("#state").append('<option value="'+value.id+'">'+value.name+'</option>');
                });

            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }
   });
   $('#state').on('change',function(){
    var stateID = $(this).val();
    // console.log(stateID);
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('admin/get-city-list')}}?state_id="+stateID,
           success:function(res){
            if(res){
                $("#city").empty();
                $("#city").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+value.id+'">'+value.name+'</option>');
                });

            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }

   });
</script>
  @endpush
