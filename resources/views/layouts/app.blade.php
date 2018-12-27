<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
    @yield('title')
  </title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="{{ url('quickadmin/css') }}/font-awesome.min.css" />
  <link rel="stylesheet" href="{{ url('quickadmin/css') }}/bootstrap.min.css" />
  <link rel="stylesheet" href="{{ url('quickadmin/css') }}/components.css" />
  <link rel="stylesheet" href="{{ url('quickadmin/css') }}/quickadmin-layout.css" />
  <link rel="stylesheet" href="{{ url('quickadmin/css') }}/quickadmin-theme-default.css" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css" />

  <meta property="og:title" content="Kwiz" />
  <meta property="og:image" content="{{ asset('kwiz.png') }}" />
  <meta property="og:description" content="Sebuah website kuis dengan Laraquiz dan QuickAdminPanel." />
</head>

<body class="page-header-fixed">

  <!-- Header -->
<header id="header">
  <div class="container">
    <nav><!-- Navigation Menu -->
      <a href="/" class="page-logo"><img src="img/logo.png" alt="" title="" /></a>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="about">About</a></li>
    </ul>
  </nav><!-- End of Navigation Menu -->
</div>
</header>



  <!-- old navbar
  <div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner">
      <div class="page-header-inner">
        <div class="navbar-header">
          <nav>
            <a href="{{ url('/') }}" class="page-logo"><img src="img/logo.png" alt="logo">
            </a>
          </div>
          <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
          </a>
          <div class="top-menu">
            <ul class="nav navbar-nav pull-right"></ul>
          </nav>
        </div>
      </div>
    </div>
  </div> -->


  <!-- Sidebar -->
  <div class="page-container">
    <div class="page-sidebar-wrapper">
      @inject('request', 'Illuminate\Http\Request')
      <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
          <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="{{ $request->segment(1) == 'tests' ? 'active' : '' }}">
              <a href="{{ route('tests.index') }}">
                <i class="fa fa-gears"></i>
                <span class="title">
                  @lang('quickadmin.test.new')</span>
              </a>
            </li>
            <li class="{{ $request->segment(1) == 'results' ? 'active' : '' }}">
              <a href="{{ route('results.index') }}">
                <i class="fa fa-gears"></i>
                <span class="title">
                  @lang('quickadmin.results.title')</span>
              </a>
            </li>
            @if(Auth::user()->isAdmin())
              <li class="{{ $request->segment(1) == 'topics' ? 'active' : '' }}">
                <a href="{{ route('topics.index') }}">
                  <i class="fa fa-gears"></i>
                  <span class="title">
                    @lang('quickadmin.topics.title')</span>
                </a>
              </li>
              <li class="{{ $request->segment(1) == 'questions' ? 'active' : '' }}">
                <a href="{{ route('questions.index') }}">
                  <i class="fa fa-gears"></i>
                  <span class="title">
                    @lang('quickadmin.questions.title')</span>
                </a>
              </li>
              <li class="{{ $request->segment(1) == 'questions_options' ? 'active' : '' }}">
                <a href="{{ route('questions_options.index') }}">
                  <i class="fa fa-gears"></i>
                  <span class="title">
                    @lang('quickadmin.questions-options.title')</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users"></i>
                  <span class="title">
                    @lang('quickadmin.user-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                  <li class="{{ $request->segment(1) == 'roles' ? 'active active-sub' : '' }}">
                    <a href="{{ route('roles.index') }}">
                      <i class="fa fa-briefcase"></i>
                      <span class="title">
                        @lang('quickadmin.roles.title')
                      </span>
                    </a>
                  </li>
                  <li class="{{ $request->segment(1) == 'users' ? 'active active-sub' : '' }}">
                    <a href="{{ route('users.index') }}">
                      <i class="fa fa-user"></i>
                      <span class="title">
                        @lang('quickadmin.users.title')
                      </span>
                    </a>
                  </li>
                  <li class="{{ $request->segment(1) == 'user_actions' ? 'active active-sub' : '' }}">
                    <a href="{{ route('user_actions.index') }}">
                      <i class="fa fa-th-list"></i>
                      <span class="title">
                        @lang('quickadmin.user-actions.title')
                      </span>
                    </a>
                  </li>
                </ul>
              </li>
              @endif
              <li>
                <a href="#logout" onclick="$('#logout').submit();">
                  <i class="fa fa-arrow-left"></i>
                  <span class="title">
                    @lang('quickadmin.logout')</span>
                </a>
              </li>
          </ul>
        </div>
      </div>
      {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
      <button type="submit">
        @lang('quickadmin.logout')</button>
        {!! Form::close() !!}
    </div>

    <div class="page-content-wrapper">
      <div class="page-content">

        @if(isset($siteTitle))
        <h3 class="page-title">
          {{ $siteTitle }}
        </h3>
        @endif

        <div class="row">
          <div class="col-md-12">

            @if (Session::has('message'))
            <div class="note note-info">
              <p>{{ Session::get('message') }}</p>
            </div>
            @endif
            @if ($errors->count() > 0)
            <div class="note note-danger">
              <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
            @endif

            @yield('content')

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="scroll-to-top" style="display: none;">
    <i class="fa fa-arrow-up"></i>
  </div>

  {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
  <button type="submit">Logout</button>
  {!! Form::close() !!}

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
  <script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>
  <script src="{{ url('quickadmin/js') }}/main.js"></script>

  <script>
    window._token = '{{ csrf_token() }}';
  </script>

  @yield('javascript')
</body>

</html>
