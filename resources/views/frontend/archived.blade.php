@extends('layouts.frontend.front')
@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Feature</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Archive by Category “Blog - Tag”</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
<!-- Single Catagory Post -->
                        @foreach ($artikel as $data)
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry" data-aos-delay="200">
                            <a href="/blog/{{$data->slug}}" class="block-20" >
                                <img class="img-fluid background-image"
                                src="{{asset('assets/img/artikel/' .$data->foto)}}">
                            </a>
                            <div class="text p-4">
                                <div class="meta mb-3 ">
                                <div><a href="#">{{$data->created_at->format('d M Y')}},</a></div>
                                <div><a href="#">{{$data->user->name}}</a></div>
                                </div>
                                <h3 class="heading"><a href="/blog/{{$data->slug}}">
                                {{$data->judul}}</a></h3>
                                <div class="single-widget tags-widget">
                                        @foreach($data->tag as $key)
                                            <div class="tagcloud">
                                                <a class="tag-cloud-link" href="/blog-tag/{{ $key->slug }}">
                                                #{{ $key->nama_tag }}
                                                </a>
                                            </div>
                                        @endforeach

                                </div>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        {{$artikel->links()}}
                        <!-- Pagination -->
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
@endsection
