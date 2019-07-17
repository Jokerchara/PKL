@extends('layouts.frontend.front')
@section('content')
                        <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

    <!-- ##### Breadcrumb Area Start ##### -->


    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Features</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-15 col-xl-8">
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                        <div class="blog-thumb mb-30">
                            <img src="{{ asset('assets/img/artikel/' .$artikel->foto)}}" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#">{{$artikel->created_at->format('d M Y')}}</a>
                                <a href="#">Penulis : {{$artikel->user->name}}</a>
                            </div>
                            <h4 class="post-title">{{ $artikel->judul }}</h4>
                            <!-- Post Meta -->
                            <div class="post-meta-2">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>

                            <p>{!! $artikel->konten !!}</p>
                            <div class="tag-widget post-tag-container mb-5 mt-5">
                                @foreach($artikel->tag as $data)
                                <div class="tagcloud">
                                    <a class="tag-cloud-link" href="/blog-tag/{{ $data->slug }}">
                                        #{{ $data->nama_tag }}
                                    </a>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>LEAVE A REPLY</h5>
                        </div>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                        <div id="disqus_thread"></div>
                                        <script>

                                            /**
                                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                            /*
                                            var disqus_config = function () {
                                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                            };
                                            */
                                            (function () { // DON'T EDIT BELOW THIS LINE
                                                var d = document, s = d.createElement('script');
                                                s.src = 'https://blog-family-friendly.disqus.com/embed.js';
                                                s.setAttribute('data-timestamp', +new Date());
                                                (d.head || d.body).appendChild(s);
                                            })();
                                        </script>
                                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
                                                Disqus.</a></noscript>
                                </div>
                            </form>
                    </div>
                </div>

@endsection
@push('script')
    <script>

         var url ='api'
            $.ajax({
                  url: url + '/videoolahraga',
                  datatype : 'json',
                  success:function(berhasil){
                       $.each(berhasil.data,function(key,value){
                       $(".berita-berita").append(
                         `
                <div class="single-blog-post d-flex ">
                        <div class="post-thumbnail">
                            <img src="assets/img/artikel/${value.foto}" alt="">
                        </div>
                        <div class="post-content">
                                <a href="${value.slug}" class="post-title">${value.judul}</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                            </div>
                        </div>
                        </div>
                        `
                        )
               })
          },
         error:function (gagal){
         console.log(gagal)
      }
})
    </script>
    <script>

         var url ='api'
            $.ajax({
                  url: url + '/videoterakhir',
                  datatype : 'json',
                  success:function(berhasil){
                       $.each(berhasil.data,function(key,value){
                       $(".videoterakhir").append(
                         `
                         <div class="single-blog-post d-flex ">
                            <div class="post-thumbnail">
                        <img src="assets/img/artikel/${value.foto}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="/single-post/${value.slug}" class="post-title">${value.judul}</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                    </div>
                        `
                        )
               })
          },
         error:function (gagal){
         console.log(gagal)
      }
})
    </script>
@endpush
