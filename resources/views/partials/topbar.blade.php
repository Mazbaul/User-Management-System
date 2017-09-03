<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/admin/home') }}" class="logo"
       style="font-size: 16px;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
           <p>Ums</p></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
           <p>UMS</p></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="container">
         <div class="row">
              <div class="col-md-10 text-right" style="padding-left: 0px">
                    @if (Auth::check())
                        <div style="color:white">
                            Logged in as {{ Auth::user()->name }}
                        </div>
                    @else
                        <form action="{{ route('auth.login') }}" method="post">
                            {{ csrf_field() }}
                            <input type="email" name="email" placeholder="Email" />
                            <input type="password" name="password" placeholder="Password" />
                            <input type="submit" value="Login" class="btn btn-info">
                        </form>
                    @endif
                </div>
            </div>
          </div>
        </div>


    </nav>
</header>
