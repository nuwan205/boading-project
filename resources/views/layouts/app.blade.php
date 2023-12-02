

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet"  href="{{ asset('css/owner.css')}}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important;">
                <div class="item logo">
                  <img src="https://image.flaticon.com/icons/svg/866/866218.svg" /><img src="https://image.flaticon.com/icons/svg/866/866218.svg" style="display: none" />
                </div>
                <div class="ui accordion">
                  <a class="title item">Dashboard  <i class="dropdown icon"></i>
                              </a>
                  <div class="content">
                    <a class="item" href="dashboard.html">Dashboard
                                  </a>
                  </div>
              
                  <div class="title item">
                    <i class="dropdown icon"></i> Apps
                  </div>
                  <div class="content">
                    <a class="item" href="inbox.html">Inbox
                                  </a>
                    <a class="item" href="mail.html">Mailbox
                                  </a>
                    <a class="item" href="chat.html">Chat
                                  </a>
                    <a class="item" href="contacts.html">Contacts
                                  </a>
                    <a class="item" href="photoeditor.html">Photo Editor
                                  </a>
                    <a class="item" href="calendar.html">Calendar
                                  </a>
                    <a class="item" href="filter.html">Filter
                                  </a>
                    <a class="item" href="todo.html">Todo
                                  </a>
                  </div>
                  <div class="title item">
                    <i class="dropdown icon"></i> Layouts
                  </div>
                  <div class="content">
                    <a class="item" href="sidebar.html">Sidebar
                                  </a>
                    <a class="item" href="menu.html">Nav
                                  </a>
                    <a class="item" href="animatedicon.html">Animated Icon
                                  </a>
                    <a class="item" href="box.html">Box
                                  </a>
                    <a class="item" href="cards.html">Cards
                                  </a>
                    <a class="item" href="color.html">Colors
                                  </a>
                    <a class="item" href="comment.html">Comment
                                  </a>
                    <a class="item" href="embed.html">Embed
                                  </a>
                    <a class="item" href="faq.html">Faq
                                  </a>
                    <a class="item" href="feed.html">Feed
                                  </a>
                    <a class="item" href="gallery.html">Gallery
                                  </a>
                    <a class="item" href="grid.html">Grid
                                  </a>
                    <a class="item" href="header.html">Header
                                  </a>
                    <a class="item" href="timeline.html">Timeline
                                  </a>
                    <a class="item" href="message.html">Message
                                  </a>
                    <a class="item" href="price.html">Price
                                  </a>
                  </div>
              
                  <a class="item">
                    <b>Components</b>
                  </a>
              
                  <div class="title item">
                    <i class="dropdown icon"></i> UI-Kit
                  </div>
                  <div class="content">
                    <a class="item" href="accordion.html">Accordion
                                  </a>
                    <a class="item" href="breadcrumb.html">Breadcrumb
                                  </a>
                    <a class="item" href="button.html">Button
                                  </a>
                    <a class="item" href="divider.html">Divider
                                  </a>
                    <a class="item" href="dropdown.html">Dropdown
                                  </a>
                    <a class="item" href="flag.html">Flag
                                  </a>
                    <a class="item" href="icon.html">Icon
                                  </a>
                    <a class="item" href="image.html">Image
                                  </a>
                    <a class="item" href="label.html">Label
                                  </a>
                    <a class="item" href="list.html">List
                                  </a>
                    <a class="item" href="modal.html">Modal
                                  </a>
                    <a class="item" href="notification.html">Notification
                                  </a>
                    <a class="item" href="alert.html">Alert
                                  </a>
              
                    <a class="item" href="progress.html">Progress
                                  </a>
                    <a class="item" href="range-v1.html">Range Semantic
                                  </a>
                    <a class="item" href="range-v2.html">Range Material
                                  </a>
                    <a class="item" href="rating.html">Rating
                                  </a>
                    <a class="item" href="tab.html">Tab
                                  </a>
                    <a class="item" href="tooltip.html">Tooltip
                                  </a>
                    <a class="item" href="transition.html">Transition
                                  </a>
                  </div>
              
                  <div class="title item">
                    <i class="dropdown icon"></i> Pages
                  </div>
                  <div class="content">
                    <a class="item" href="profile.html">Profile
                                  </a>
              
                    <a class="item" href="settings.html">Settings
                                  </a>
              
                    <a class="item" href="blank.html">Blank
                                  </a>
                    <a class="item" href="signin.html">Sign In
                                  </a>
                    <a class="item" href="signup.html">Sign Up
                                  </a>
                    <a class="item" href="forgotpassword.html">Forgot Password
                                  </a>
                    <a class="item" href="lockme.html">Lock Me Screen
                                  </a>
                    <a class="item" href="404.html">Error 404
                                  </a>
                    <a class="item" href="comingsoon.html">Coming Soon
                                  </a>
                  </div>
              
                  <div class="title item">
                    <i class="dropdown icon"></i> Form
                  </div>
                  <div class="content">
                    <a class="item" href="formelements.html">Form Element
                                  </a>
                    <a class="item" href="input.html">Input
                                  </a>
                    <a class="item" href="formvalidation.html">Form Validation
                                  </a>
              
                    <a class="item" href="editor.html">Html Editor
                                  </a>
                  </div>
              
                  <div class="title item">
                    <i class="dropdown icon"></i> Tables
                  </div>
                  <div class="content">
                    <a class="item" href="table.html">Static Table
                                  </a>
                    <a class="item" href="datatable.html">Datatable
                                  </a>
                    <a class="item" href="editable.html">Editable
                                  </a>
                  </div>
                  <div class="title item">
                    <i class="dropdown icon"></i> Chart
                  </div>
                  <div class="content">
                    <a class="item" href="chart.html">Charts 1
                                  </a>
                    <a class="item" href="chart-2.html">Charts 2
                                  </a>
                    <a class="item" href="chart-3.html">Charts 3
                                  </a>
                  </div>
                </div>
                <div class="ui dropdown item displaynone">
                  <z>Dashboard</z>
                  <i class="icon demo-icon heart icon-heart"></i>
              
                  <div class="menu">
                    <div class="header">
                      Dashboard
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="dashboard.html">Dashboard
                                  </a>
                  </div>
                </div>
                <div class="ui dropdown item displaynone">
                  <z>Layout</z>
                  <i class="icon demo-icon world icon-globe"></i>
              
                  <div class="menu">
                    <div class="header">
                      Layout
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="inbox.html">Inbox
                                  </a>
                    <a class="item" href="mail.html">Mailbox
                                  </a>
                    <a class="item" href="chat.html">Chat
                                  </a>
                    <a class="item" href="contacts.html">Contacts
                                  </a>
                    <a class="item" href="photoeditor.html">Photo Editor
                                  </a>
                    <a class="item" href="calendar.html">Calendar
                                  </a>
                    <a class="item" href="filter.html">Filter
                                  </a>
                    <a class="item" href="todo.html">Todo
                                  </a>
                  </div>
                </div>
                <div class="ui dropdown item displaynone">
                  <z>Pages</z>
                  <i class="icon demo-icon  icon-params alarm"></i>
              
                  <div class="menu">
                    <div class="header">
                      Layouts
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="sidebar.html">Sidebar
                                  </a>
                    <a class="item" href="menu.html">Nav
                                  </a>
                    <a class="item" href="animatedicon.html">Animated Icon
                                  </a>
                    <a class="item" href="box.html">Box
                                  </a>
                    <a class="item" href="cards.html">Cards
                                  </a>
                    <a class="item" href="color.html">Colors
                                  </a>
                    <a class="item" href="comment.html">Comment
                                  </a>
                    <a class="item" href="embed.html">Embed
                                  </a>
                    <a class="item" href="faq.html">Faq
                                  </a>
                    <a class="item" href="feed.html">Feed
                                  </a>
                    <a class="item" href="gallery.html">Gallery
                                  </a>
                    <a class="item" href="grid.html">Grid
                                  </a>
                    <a class="item" href="header.html">Header
                                  </a>
                    <a class="item" href="timeline.html">Timeline
                                  </a>
                    <a class="item" href="message.html">Message
                                  </a>
                    <a class="item" href="price.html">Price
                                  </a>
                  </div>
                </div>
              </div>
              <div class="pusher">
                <div class="ui menu asd borderless" style="border-radius: 0!important; border: 0; margin-left: 260px; -webkit-transition-duration: 0.1s;">
                  <a class="item openbtn">
                    <i class="icon content"></i>
                  </a>
                  <a class="item" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                  </a>
                  <div class="right menu">
                    <ul class="navbar-nav ms-auto item">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif
            
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>
            
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>
            
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                    </ul>
                  </div>
                </div>
                <div class="asd " style="border-radius: 0!important; border: 0; margin-left: 260px;margin-right: 10px; -webkit-transition-duration: 0.1s;">
                    
                  @yield('content')
                </div>
                
              </div>
            {{-- <div class="asd w-100" style="border-radius: 0!important; border: 0; margin-left: 260px;margin-right: 260px; -webkit-transition-duration: 0.1s;">
                
            </div> --}}
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.js'></script>
    <script  src="{{ asset('js/owner.js')}}"></script>
</body>
</html>
