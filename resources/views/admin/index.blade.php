@extends('admin.admin_master')
@section('admin')

<!-- header area -->
<header class="header_area">
                <!-- logo -->
                <div class="sidebar_logo">
                    <a href="{{url('/admin/dashboard')}}">
                    <div class="login-logo" style="background: DodgerBlue;">
         <b><a style="color: red" class="navbar-brand" href="{{url('/admin/dashboard')}}"><span style="color: green">Mali</span><span style="color: yellow">passe</span>port</a></b>
        </div>
   <img src="{{asset('panel/assets/images/drapeau2.png')}}" alt="" class="img-fluid logo2">
                    </a>
                </div>
                <div class="sidebar_btn">
                    <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
                </div>
                <ul class="header_menu">
                    <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a>
                        <div class="modal fade search_box" id="myModal">
                              <button type="button" class="close m-2 text-white float-right" data-dismiss="modal">&times;</button>
                              <form action="#" class="modal-dialog modal-lg">
                                
                                <div class="modal-content bg-transparent">
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <input class="form-control bg-transparent text-white form-control-lg"  type="text" placeholder="Search...">
                                        <button class="btn btn-lg submit-btn" type="submit">Search</button>
                                      </div>
                                </div>
                                 
                              </form>
                        </div>
                    </li>
                   
                    <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
                            <div class="user_item dropdown-menu dropdown-menu-right">
                                <div class="admin">
                                    <a href="#" class="user_link"><img src="{{asset('panel/assets/images/iconn.png')}}" alt=""></a>
                                </div>
                            <ul>
                                
                                <li><a href="#"><span><i class="fas fa-user"></i></span> User Profile</a></li>
                                <li><a href=" "><span><i class="fas fa-cogs"></i></span>  Password Change</a></li>
                                <li>

                                    <a href="{{route('admin.logout')}} "><span><i class="fas fa-unlock-alt"></i></span> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>

                        <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </header><!-- / header area -->
            <!-- sidebar area -->
            <aside class="sidebar-wrapper ">
              <nav class="sidebar-nav">
                 <ul class="metismenu" id="menu1">
                    <li class="single-nav-wrapper">
                        <a href="{{url('/admin/dashboard')}}" class="menu-item">
                            <span class="left-icon"><i class="fas fa-home"></i></span>
                            <span class="menu-text">home</span>
                        </a>
                      </li>
                      <li class="single-nav-wrapper">
                          <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-list"></i></span>
                              <span class="menu-text">Demandes</span>
                          </a>
                            <ul class="dashboard-menu">
                              <li><a href="#"><i class="fas fa-hourglass-end"></i> Traitées</a></li>
                              <li><a href="#"><i class="fas fa-hourglass-start"></i> En traitement</a></li>
                            </ul>
                      </li>
                    <li class="single-nav-wrapper">
                          <a class="menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-money-bill"></i></i></span>
                              <span class="menu-text">Payements</span>
                          </a>
                      </li>
                      <li class="single-nav-wrapper">
                          <a class="menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-calendar"></i></span>
                              <span class="menu-text">rendez-vous</span>
                          </a>
                      </li>

                      <li class="single-nav-wrapper">
                          <a class="menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-user"></i></span>
                              <span class="menu-text">Users</span>
                          </a>
                      </li>

                      
                      
                    </ul>
              </nav>
            </aside><!-- /sidebar Area-->


         


  
<div class="content_wrapper">
    <!--middle content wrapper-->
    @if(Session::has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{session::get('message')}}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <h4>Bienvenue: {{Auth::guard('admin')->user()->name}} ( {{Auth::guard('admin')->user()->email}} )</h4>
    <div class="middle_content_wrapper">
        <!-- counter_area -->
        <section class="counter_area">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                             <span><i class="fa fa-code"></i></span>
                              <h2 class="timer count-number" data-to="300" data-speed="1500"></h2>
                        </div>
                     
                       <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-coffee"></i></span>
                             <h2 class="timer count-number" data-to="1700" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fas fa-user"></i></span>
                             <h2 class="timer count-number" data-to="11900" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">SomeText GoesHere</p>
                          
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-bug"></i></span>
                             <h2 class="timer count-number" data-to="157" data-speed="1500"></h2>
                        </div>
                         <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div>
            </div>
        </section>
        <!--/ counter_area -->
        <!-- table area -->
        <section class="table_area">
            <div class="panel">
                <div class="panel_header">
                    <div class="panel_title"><span>FooTable with row toggler, sorting, filter and pagination</span></div>
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Job Title</th>
                                  <th>Started On</th>
                                  <th data-hide="all">Date of Birth</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Dennise</td>
                                  <td>Fuhrman</td>
                                  <td>High School History Teacher</td>
                                  <td>November 8th 2011</td>
                                  <td>July 25th 1960</td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Elodia</td>
                                  <td>Weisz</td>
                                  <td>Wallpaperer Helper</td>
                                  <td>October 15th 2010</td>
                                  <td>March 30th 1982</td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Raeann</td>
                                  <td>Haner</td>
                                  <td>Internal Medicine Nurse Practitioner</td>
                                  <td>November 28th 2013</td>
                                  <td>February 26th 1966</td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>Junie</td>
                                  <td>Landa</td>
                                  <td>Offbearer</td>
                                  <td>October 31st 2010</td>
                                  <td>March 29th 1966</td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Solomon</td>
                                  <td>Bittinger</td>
                                  <td>Roller Skater</td>
                                  <td>December 29th 2011</td>
                                  <td>September 22nd 1964</td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>Bar</td>
                                  <td>Lewis</td>
                                  <td>Clown</td>
                                  <td>November 12th 2012</td>
                                  <td>August 4th 1991</td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td>Usha</td>
                                  <td>Leak</td>
                                  <td>Ships Electronic Warfare Officer</td>
                                  <td>August 14th 2012</td>
                                  <td>November 20th 1979</td>
                              </tr>
                              <tr>
                                  <td>8</td>
                                  <td>Lorriane</td>
                                  <td>Cooke</td>
                                  <td>Technical Services Librarian</td>
                                  <td>September 21st 2010</td>
                                  <td>April 7th 1969</td>
                              </tr>
                              <tr>
                                  <td>9</td>
                                  <td>Lorriane</td>
                                  <td>Cooke</td>
                                  <td>Technical Services Librarian</td>
                                  <td>September 21st 2010</td>
                                  <td>April 7th 1969</td>
                              </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- /table -->
            <!-- chart area -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel chart_area">
                        <div class="panel_header">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="far fa-chart-bar"></i></span>
                                <span>bar chat</span>
                            </div>
                        </div>
                        <div class="panel_body">
                            <div id="bar-chart">
                                <div id="bar-legend"></div>
                                <canvas id="bar-canvas" ></canvas>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel_header">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="fas fa-chart-pie"></i></span>
                                <span>pie chat</span>
                            </div>
                        </div>
                        <div class="panel_body">
                            <div id="piechart"></div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>                   
    </div><!--/middle content wrapper-->
</div><!--/ content wrapper -->

@endsection