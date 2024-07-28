@extends('doctor.layouts.admin')
@section('title','Dashboard |Admin')
@push('css')
<link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css">
          <style>
            .remove_box{
                position: absolute;
top: 0;
right: 14px;
z-index: 999;
            }
          </style>
@endpush
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">@lang('site.account_settings')</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- account setting page -->
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column nav-left">
                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-pill-general" data-toggle="pill"
                                       href="#account-vertical-general" aria-expanded="true">
                                        <i data-feather="user" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold"> general </span>
                                    </a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--    <a class="nav-link" id="account-pill-price" data-toggle="pill"-->
                                <!--       href="#account-vertical-price" aria-expanded="true">-->
                                <!--        <i data-feather="user" class="font-medium-3 mr-1"></i>-->
                                <!--        <span class="font-weight-bold"> @lang('site.prices_timings')</span>-->
                                <!--    </a>-->
                                <!--</li>-->

                                <!--<li class="nav-item">-->
                                <!--    <a class="nav-link" id="account-pill-clinic" data-toggle="pill"-->
                                <!--       href="#account-vertical-clinic" aria-expanded="true">-->
                                <!--        <i data-feather="user" class="font-medium-3 mr-1"></i>-->
                                <!--        <span class="font-weight-bold">@lang('site.clinics_images')</span>-->
                                <!--    </a>-->
                                <!--</li>-->
                                <!-- change password -->
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-password" data-toggle="pill"
                                       href="#account-vertical-password" aria-expanded="false">
                                        <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold"> change password</span>
                                    </a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--    <a class="nav-link" id="zoom_box_pill" data-toggle="pill"-->
                                <!--       href="#zoom_box" aria-expanded="false">-->
                                <!--        <i data-feather="lock" class="font-medium-3 mr-1"></i>-->
                                <!--        <span class="font-weight-bold"> @lang('site.Zoom_integration')</span>-->
                                <!--    </a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                             aria-labelledby="account-pill-general" aria-expanded="true">
                                            <!-- header media -->
                                            <form class="validate-form mt-2" action="{{route('admin.profile')}}"
                                                  method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="row">

                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-name"> name</label>
                                                            <input type="text" class="form-control" id="account-name"
                                                                   name="name" placeholder="Name"
                                                                   value="{{$user->name}}"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-e-mail">Email</label>
                                                            <input class="form-control"
                                                                   placeholder="Email"
                                                                   style="text-transform: lowercase !important;"
                                                                   value="{{$user->email}}" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mt-2 mr-1">save changes
                                                        </button>
                                                        <button type="reset" class="btn btn-outline-secondary mt-2">
                                                             Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                             aria-labelledby="account-pill-password" aria-expanded="false">
                                            <!-- form -->
                                            <form class="validate-form" action="{{route('admin.update.password')}}"
                                                  method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-new-password"> new password </label>
                                                            <div
                                                                class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" id="account-new-password"
                                                                       name="password" class="form-control"
                                                                       placeholder="@lang('site.new_password')" required/>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer">
                                                                        <i data-feather="eye"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('password')
                                                            <p class="error">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-retype-new-password">Retype New Password
                                                            <div
                                                                class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" class="form-control"
                                                                       required
                                                                       id="account-retype-new-password"
                                                                       name="password_confirmation"
                                                                       placeholder="@lang('site.new_password')"/>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer"><i
                                                                            data-feather="eye"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mt-1"> save changes
                                                        </button>
                                                        <button type="reset" class="btn btn-outline-secondary mt-1">
                                                             Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


@endsection
@push('js')
    <script>
        $(document).ready(function () {
            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('.profile-img').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $(".upload-image").on('change', function () {
                readURL(this);
            });
            $(".reset-image").on('click', function () {
                let image = '{{$user->image}}';
                $('.profile-img').attr('src', image);
            });

        });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        getDropify();
    })
    </script>

    <script>
        $(document).on('click','.add_image',function(){
            let html =``;
            html +=`<div class="col-md-4 position-relative">
            <div><i class="fa fa-trash btn btn-danger remove_box"></i></div>
                                                        <input type="file" class="dropify" name="files[]">
                                                    </div>`;
                                                    $('.append_images').append(html);
                                                    getDropify();
        });
        $(document).on('click','.remove_box',function(){
            $(this).closest('.col-md-4').remove();

        });
        function getDropify()
        {
            $('.dropify').dropify(
            {
                messages: {
                    'default': ' File',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            }
        );
        }
    </script>



<script type="text/javascript">
    $uploadCrop = $('#upload-input').croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200,
            type: 'box'
        },
        boundary: {
            width: 270,
            height: 270
        }
    });


    $('#upload').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });

        }
        reader.readAsDataURL(this.files[0]);
    });


    $('.upload-result').on('click', function (ev) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (resp) {
            $.ajax({
                url: "{{route('admin.profile')}}",
                type: "POST",
                data: {"profile_image":resp},
                success: function (data) {
                    alert('Image Uploaded Successfully');
                    location.reload()
                }
            });
        });
    });
    </script>


@endpush

