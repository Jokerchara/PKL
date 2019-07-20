    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container align-items-center">
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
                                                <li><a href="{{url('about')}}">About</a></li>
                                                <li><a href="{{url('contact')}}">Contact</a></li>
                                    {{-- s --}}
                                </ul>
                            </div>
                            <!-- Nav End -->
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
