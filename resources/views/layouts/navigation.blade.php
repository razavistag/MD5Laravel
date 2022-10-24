<nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
       <div class="d-flex align-items-center brand" data-size="full" style="cursor: pointer">
            <i class="fas fa-bars mx-3 text-white"></i>
       </div>

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>

            <!-- Notifications -->
            <div class="dropdown">
                <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                    id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="https://raw.githubusercontent.com/Schweinepriester/github-profile-achievements/main/images/quickdraw-default.png"
                        class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="#"  onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                        </form> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Container wrapper -->

    <script type="module">
        $(function() {
            console.log('ready main-navbar')
        });

        $('.brand').click(function(){
            var state = toogle_sidebar_widget($(this).data('size'))
            $(this).data('size', state) 
        })

        function toogle_sidebar_widget(state){
           if(window.innerWidth <= 991) {
                toogle_widget(true)
                return 'full';
           }else{
                if (state == 'full') {
                    toogle_widget(false)
                    return 'min';
                } else {
                    toogle_widget(true)
                    return 'full';
                }
           }
        }

        function toogle_widget(state){
            if(state){
                $("#sidebar-menu a span").show();
                $("#sidebar-menu button span").show();
                $("#sidebar-menu sidebar-header span").show();

                $('.sidebar').css({ 'min-width': '240px', });
                $('#sidebar-menu .sidebar-header').css({ 'padding-left':'20px'});
                $('#main-navbar').css({ 'margin-left': '235px',  });
                $('main').css({'padding-left': '250px','transition-duration': '0.2s'});
            }else{
                $("#sidebar-menu a span").hide();
                $("#sidebar-menu button span").hide();
                $("#sidebar-menu sidebar-header span").hide();

                $('.sidebar').css({ 'min-width': '75px',  });
                $('#sidebar-menu .sidebar-header').css({ 'padding-left':'25px'});
                $('#main-navbar').css({ 'margin-left': '80px'});
                $('main').css({ 'padding-left': '90px','transition-duration': '0.2s' });
            }
        }
        
    </script>
</nav>
