    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="{{url('/')}}" class="nav-brand"><img src="{{asset('assets/frontend/img/core-img/logo1.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav kategori">
                                <ul>
                                    <li class="active"><a href="{{url('/')}}">Home<i class="ti-home" aria-hidden="true"></i></a></li>
                                                <li><a href="{{url('archived')}}">Archive</a></li>
                                                <li><a href="{{url('about')}}">About</a></li>
                                                <li><a href="{{url('contact')}}">Contact</a></li>
                                    {{-- s --}}
                                     <li><a href="#">Menu<i class="ti-menu-alt" aria-hidden="true"></i></a>
                                        <div class="dropdown">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{url('archived')}}">Archive</a></li>
                                                <li><a href="{{url('video-post')}}">Single Video Post</a></li>
                                                <li><a href="{{url('single-post')}}">Single Post</a></li>
                                                <li><a href="{{url('log')}}">Login</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="{{url('/')}}" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="{{url('log')}}" class="login-btn">LogIn</a>
                            <!-- Submit Video -->
                            <a href="{{url('submit-video')}}" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Video</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    {{-- @push('script')
    <script>

         var url ='api'
            $.ajax({
                  url: url + '/kategori',
                  datatype : 'json',
                  success:function(berhasil){
                       $.each(berhasil.data,function(key,value){
                       $(".kategori").append(
                         `
                         <ul class="catagory widget">
                             <li class="active"><a href="{{url('/')}}">${value.nama_catagory}<i class="" aria-hidden="true"></i></a></li>
                         </ul>
                        `
                        )
               })
          },
         error:function (gagal){
         console.log(gagal)
      }
})
    </script>
@endpush --}}
    <!-- ##### Header Area End ##### -->
