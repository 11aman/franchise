     <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">{{ Auth::user()->name }}</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @if(Auth::user()->type==1)
                    <li class="active">
                        <a href="@if(Auth::user()->type==1){{url('home')}}
                            @elseif(Auth::user()->type==2){{url('profile')}}
                            @else{{url('Franchise')}}@endif"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <!-- <h3 class="menu-title">UI elements</h3> /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Manage Franchise</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{url('add')}}">Add Franchise</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{url('/view')}}">View Franchise</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Certificate</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i><a href="{{url('certificate')}}">Add  Certificate</a></li>
                            <li><i class="fa fa-circle"></i><a href="{{url('viewcertificate')}}">View Certificate</a></li>
                        </ul>
                    </li>
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Manage Students</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i></i><a href="{{url('addstudent')}}">Add Students</a></li>
                            <li><i class="fa fa-circle"></i><a href="{{url('/viewstudent')}}">View Students</a></li>
                        </ul>
                    </li> -->      
                    @elseif(Auth::user()->type==2)
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>My Profile</a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-circle"></i><a href="{{url('myprofile')}}">View Profile</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage certificate</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i><a href="{{url('showcertificate')}}">Download Certificate</a></li>
                       
                        </ul>
                    </li>
                    
                      @else
                       
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Manage Student</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i><a href="{{url('addstudent')}}">Add Student</a></li>
                            <li><i class="fa fa-circle"></i><a href="{{url('viewstudent')}}">view Student</a></li>   
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage fees</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i><a href="{{url('addfee')}}">Add fee</a></li>
                            <li><i class="fa fa-circle"></i><a href="">View fees</a></li>
                        </ul>
                    </li>

                    @endif
                    </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">