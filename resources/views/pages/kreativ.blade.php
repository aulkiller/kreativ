<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175348060-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-175348060-1');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfva Co. | Kreativ</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/CSSFolder/indexstyle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/CSSFolder/kreativ.css')}}">
</head>

<body>
    <header>
       <a class="alfalogo" href="/"> <img src="../assets/images/alfvalogo.svg" alt="icon"> </a>
        <nav>
            <ul class="nav-items">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/KreativMorePage/">Kreativ</a>
                </li>
                <li>
                    <a href="/Undercon/">Partners</a>
                </li>
                <li>
                    <a href="/Karir/">Karir</a>
                </li>
                <li>
                    <a class="btn" href="/reachus/create/">Reach Us</a>
                </li>
            </ul>
            <div class="menu-btn">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <!--test background image-->
    <div class="bg1 grid headergrid">
        <div id="section-b">
            <img class="aset" src="../assets/images/KreativPartOneCustomImage.svg" alt="Picture">
        </div>
        <div id="section-a">
            <div class="white">
                <div class="middlerpart1">
                <h1>
                    Bisnis anda kami kembangkan secara efisien.
                </h1>
                <br>
                    <h5>
                        Inilah saatnya anda mengeksekusi strategi yang efisien pada bisnis anda!
                    </h5>
                </div>
            </div>
        </div>
        <div  id="section-c">
                <div class=" middler roundbutton" style="padding-top: 80px;">
                    <a href="/reachus/create">
                    <div class="bluebutton">
                        <p class="white P1">
                            Bicara Dengan Kami
                        </p>
                        <p class="white P2">
                            Lakukan Appointment Dengan kami
                        </p>  
                    </div>
                    </a>
                </div>
        </div>    
    </div>
    <div class="threefocustext">
        <p class="blue"><strong>Strategize. Establishing. Paid Advertising.</strong></p>
    </div>
    <!-- section diganti sm ikon2 dan rencananya bikin bbrp grid buat desktop view -->
    <main>
        <div class="grid kreativPage ThreePillar">
            <!-- Section A -->
            <section id="section-a">
                    <img class="aset" src="../assets/images/strategize.svg" alt="Kuda_Kreativ">
            </section>
            <!-- Section B -->
            <section id="section-b">
                    <img class="aset" src="../assets/images/establish.svg" alt="globe_Kreativ">
            </section>
            <!-- Section C -->
            <section id="section-c">
                    <img class="aset" src="../assets/images/paidads.svg" alt="ads_Kreativ">
            </section>
            <section id="section-d">
                <div class="content-wrap">
                    <p>
                        Tiga fokus ini memastikan kami untuk melakukan hal yang esensial untuk mendirikan online presence yang sukses dan mendorong penjualan produk anda. Karenanya, kami hanya mengambil langkah-langkah yang utama.
                    </p>
                    <br>
                    <p>
                        Hanya dengan 2 klik kontak, langsung dapatkan <i>breakdown</i> keuntungan yang akan anda dapatkan. Kami disini untuk anda.
                    </p>
                </div>
            </section>
            
    </main>

    <!-- sama kan? -->
    <footer>
        <div>
            <img id="icon_copyright" src="../assets/images/logowhite.png" alt="Icon Kreativ">
        </div>
        <p class="region">Email: aul@kreativ.com | Kontak: +628888888 </p>
        <p class="copyright">
            2021 kreativcoooo. Hak Cipta Dilindungi oleh undang-undang</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/JSFolder/main.js') }}"></script>

</body>

</html>