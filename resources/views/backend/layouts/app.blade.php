<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - News Paper </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('public/backend') }}/assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/backend') }}/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="{{ asset('public/backend') }}/assets/plugins/tag-it/css/jquery.tagit.css">


</head>

<body>
    <div id="page-loader" class="fade show"> <span class="spinner"></span> </div>
    <div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
        <div id="header" class="header navbar-default">
            <div class="navbar-header">
                <a href="{{ route('home') }}" class="navbar-brand"><span class="navbar-logo"></span> <b>Newspaper</b> Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="navbar-form">
                    <form action="#" method="POST" name="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter keyword" />
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>
                 <li class="dropdown navbar-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         @if(Auth::user()->image)

                                <img src="{{ asset(Auth::user()->image) }}" alt="">

                            @else

                                <img src="{{ asset('public/manpowers/user.png') }}" alt="" />
                            @endif
                        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                        <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('user.profile') }}" class="dropdown-item"><i class="fa fa-user"></i> Profile</a>
                        <a href="{{ route('user.setting') }}" class="dropdown-item"><i class="fa fa-cogs"></i> Setting</a>


                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="fa fa-sign-out"></i>  {{ __('Logout') }}
                        </a>


                    </div>
                </li>
            </ul>
        </div>
        <div id="sidebar" class="sidebar">
            <div data-scrollbar="true" data-height="100%">
                <ul class="nav">
                    <li class="nav-profile">
                        <a href="javascript:;">
                            <div class="cover with-shadow"></div>
                            <div class="image">

                            @if(Auth::user()->image)

                                <img src="{{ asset(Auth::user()->image) }}" alt="">

                            @else

                                <img src="{{ asset('public/manpowers/user.png') }}" alt="" />
                            @endif
                            </div>
                            <div class="info"> {{ Auth::user()->name }} <small>Admistration</small> </div>
                        </a>
                    </li>

                </ul>
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li>
                        <a href="javascript:;">  <i class="fa fa-th-large"></i> <span>Dashboard</span> </a>
                    </li>


                    <li class="nav-header">Home Care</li>
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Home Care  </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href=""> Services List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Services <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href=""> Category List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href="">Add Category <i class="fa fa-plus text-theme"></i></a></li>
                        </ul>
                    </li>


                    <li class="nav-header">Medical Tourism</li>
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Medical Tourism </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href=""> Services List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Services <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href=""> Category List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href="">Add Category <i class="fa fa-plus text-theme"></i></a></li>
                        </ul>
                    </li>


                    <li class="nav-header">Tele Medicine</li>
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Tele Medicine
                        </a>
                        <ul class="sub-menu">
                            <li><a href=""> Type List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Type <i class="fa fa-plus text-theme"></i></a></li>
                        </ul>
                    </li>

                    <li class="nav-header">Organization</li>
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Organization
                        </a>
                        <ul class="sub-menu">
                            <li><a href=""> Type List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Type <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href=""> Organization List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Organization <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href=""> Branch List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Branch <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href=""> Doctor Assign List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Doctor Assign <i class="fa fa-plus text-theme"></i></a></li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Area
                        </a>
                        <ul class="sub-menu">
                            <li><a href=""> City List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add City <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href=""> Capital List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href="">Add Capital <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href=""> Country List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href="">Add Country <i class="fa fa-plus text-theme"></i></a></li>
                        </ul>
                    </li>

                    <li class="nav-header">Doctor</li>
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Doctor
                        </a>
                        <ul class="sub-menu">
                            <li><a href=""> Doctor List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Doctor <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href=""> Specialty List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Specialty <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href=""> Schedule List<i class="fa fa-list text-theme"></i></a></li>
                            <li><a href=""> Add Schedule <i class="fa fa-plus text-theme"></i></a></li>
                        </ul>
                    </li>




                    {{--   <li class="nav-header">Products</li>
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Products Settings </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('news.create') }}"> Categories <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href="{{ route('news.create') }}"> Sub Categories <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href="{{ route('news.index') }}">  Brands <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('letter.news.index') }}">Products <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('letter.news.index') }}">Orders <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('letter.news.index') }}">Vendors<i class="fa fa-list text-theme"></i> </a></li>
                        </ul>
                    </li>
                    --}}

                    <li class="nav-header">Users</li>
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-users"></i> <span>Users </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('user.create') }}">  Add User <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href="{{ route('user.index') }}">  Users list <i class="fa fa-list text-theme"></i> </a></li>
                        </ul>
                    </li>


                    <li class="nav-header">Settings</li>

                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-cogs"></i> <span>Web Settings </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('social.index') }}">  Social Media <i class="fa fa-share"></i> </a></li>
                            <li><a href="{{ route('website.setting.index') }}">  Setting <i class="fa fa-cogs text-theme"></i> </a></li>

                        </ul>
                    </li>



                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                </ul>
            </div>
        </div>




        @yield('content')






    </div>


    <script src="{{ asset('public/backend') }}/assets/js/app.min.js" type="text/javascript"></script>
    <script src="{{ asset('public/backend') }}/assets/js/theme/default.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('public/backend/assets/sweetalert/sweetalert2@9.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="{{ asset('public/backend') }}/assets/plugins/tag-it/js/tag-it.min.js"></script>


    <script>
        @if(Session::has('message'))

        var type = "{{Session::get('alert-type','info')}}"

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif

        $(document).ready(function() {


            $('.summernote').summernote({
                placeholder: "Let's write", height: 400,
                fontSizes: ['12', '14', '16', '18', '24', '36', '48'],
                toolbar: [ ['fontname', ['fontname']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']], ['insert',
                ['picture', 'myvideo', 'link', 'table', 'hr']],
                ['misc', ['fullscreen', 'undo', 'redo']] ],
                disableDragAndDrop: true, shortcut: false

            });


        });


        $(document).ready(function() {
            $('.select2').select2();




        });

    </script>


    <script>
    tinymce.init({
        selector: '#mytextarea',
        toolbar:
    "undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent",
        width: '100%',
        height: 600,
        content_style: "body {font-size: 14pt;}",
        fontsize_formats:"12px 14px 18px 24px 30px 36px 48px 60px 72px 96px",
    });
    </script>


    <script>
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete this data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                        'Deleted!',
                        'Data has been deleted.',
                        'success'
                    )
                }
            })
        });

    </script>

    @yield('customjs')
</body>
</html>
