 <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 30K <span>Fans</span></a>
                    <!-- Twitter -->
                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 29,7K <span>Followers</span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 2,5Jt <span>Subscribers</span></a>
                    <!-- Google -->
                    <a href="#" class="instagram-followers"><i class="fa fa-instagram"></i> 30,4K <span>Followers</span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Tag</h5>
                </div>
                <ul class="catagory widget tag">
                    </ul>

                <!-- Catagory Widget -->
                {{-- <ul class="catagory-widgets">
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gaya Hidup</span> </a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Makanan</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Bola</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Acara Tv</span></a></li>
                </ul> --}}
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="assets/frontend/img/core-img/logo1.png" alt=""></a>
            </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="assets/frontend/img/core-img/footer.png" alt=""></a>
                        <p>(Informtion for you News) I4UN adalah sebuah website buatan anak SMK Assalaam ,yang bertujuan untuk mengumpulkan beberapa berita terikini. </p>
                        <div class="footer-social-info">
                            <a href="www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="www.gmail.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Kategori</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gaya Hidup</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Teknologi</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Musik</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Makanan</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Bola</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Olahraga</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Acara TV</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-20 col-sm-10 col-lg-6">
                    <div class="footer-widget">
                        <h6 class="widget-title">Saluran</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Fashionista</a></li>
                            <li><a href="#">Musik</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">BERITA</a></li>
                            <li><a href="#">TRENDING</a></li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">GAME</a></li>
                            <li><a href="#">Olahraga</a></li>
                            <li><a href="#">Gaya Hidup</a></li>
                            <li><a href="#">Makanan</a></li>
                            <li><a href="#">Acara TV</a></li>
                            <li><a href="#">Video Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
     @push('script')
    <script>

         var url ='api'
            $.ajax({
                  url: url + '/tag',
                  datatype : 'json',
                  success:function(berhasil){
                       $.each(berhasil.data,function(key,value){
                       $(".tag").append(
                         `
                             <li><a href="/blog-tag/${value.slug}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>${value.nama_tag}</span> </a></li>
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
    <!-- ##### Footer Area End ##### -->
