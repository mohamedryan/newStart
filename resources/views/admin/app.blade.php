<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Adminlize</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
    <link rel="stylesheet" href="/admin/css/vendor.css">
    <link rel="stylesheet" href="/admin/css/main.css">
  </head>
  <body class="window__unloaded">
    <header>
      <div class="preloading">
        <div id="window__preloader">
          <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div>
              <div class="gap-patch">
                <div class="circle"></div>
              </div>
              <div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="ajax__preloader" class="indeterminate">
          <div class="progress">
            <div class="indeterminate"></div>
          </div>
        </div>
        <div id="content__preloader">
          <div class="wrapper">
            <p>Getting your content ...</p>
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="notification" class="dropdown-content">
        <div class="dropdown-wrapper scrollbar-macosx">
          <ul class="chips">
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
            <li class="chip"><a href="#!" class="waves-effect waves-default">
                <div class="chip-img"><img src="" alt=""></div>
                <div class="chip-content">
                  <h5 class="chip-title">adam smith</h5>
                  <p class="chip-subtitle">can't wait to see you :) </p>
                  <time class="chip-timestamp">5:07 pm</time>
                </div></a></li>
          </ul>
        </div>
      </div>
      <nav>
        <div class="nav-wrapper"><a href="{{url('/dashboard')}}" class="brand-logo hide-on-search-mode">Logo</a><a href="#" data-activates="slide-out" class="menu left button-collapse hide-on-large-only">
            <div class="menu-btn"><span></span></div></a>
          <ul id="nav-mobile" class="right hide-on-search-mode">
            <li class="notifications icon"><a href="#" data-activates="notification" data-constrainwidth="false" data-animation="material" class="dropdown-button"><i class="material-icons">notifications</i></a></li>
            <li class="fullscreen icon waves-effect waves-light"><a href="#"><i class="material-icons">fullscreen</i></a></li>
            <li class="icon search"><a href="#"><i class="material-icons">search</i></a></li>
          </ul>
          <form method="" action="" class="show-on-search-mode">
            <div class="input-field">
              <input type="search" placeholder="" class="main-search">
            </div>
          </form>
        </div>
      </nav>
      <div id="slide-out" class="side-nav fixed">
        <div class="side-header">
          <div class="avatar-img"><img src="" alt=""></div>
          <p class="avatar-name">john doe</p><i id="avatar-options" class="material-icons right">chevron_left</i>
        </div>
        <div class="side-body">
          <ul class="list">
            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect waves-blue">contact<i class="material-icons">&#xE311;</i></a>
                  <div class="collapsible-body">
                    <ul>
                      <li><a href="{{url('/dashboard/contact')}}" class="waves-effect waves-blue">Information<i class="material-icons left">&#xE88E;</i></a></li>
                      <li><a href="{{url('/dashboard/themes/contact')}}" class="waves-effect waves-blue">Theme<i class="material-icons left">&#xE41D;</i></a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><a id="sidenav-initiate" href="#" data-activates="slide-out" class="hide"></a>
    </header>
    <main>
      <div id="wrapper" class="hide-on-search-mode">
      @yield('content')
      </div>
    </main>
    <footer>
    </footer>
    <script src="/admin/js/vendor.js"></script>
    <script src="/admin/js/main.js"></script>
    <div id="scripts">
      @yield('scripts')
    </div>
  </body>
</html>