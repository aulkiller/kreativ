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
    <title>Alfva Co. | Home</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/CSSFolder/indexstyle.css')}}">
    
</head>

<body>
    <header>
        <a class="alfalogo" href="/"> <img src="assets/images/alfvalogo.svg" alt="icon"> </a>
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

    <!--ini ntar ditaro di main grid aja sekalian-->
    <div class="middle">
        <img src="assets/images/alfva kreativ.svg" alt="">
        <p class="middleCP">Bantu Bisnismu membuat <i>Online pressence</i> dan ROI yang efektif.</p>
        <a href="KreativMorePage/kreativ.html" class="btn">
            <p><span class="links">LEARN MORE ></span></p>
        </a>
    </div>

    <!-- Main Area -->
    <main class="grid homepage">
        <!-- Section A -->
        <section id="section-a" class="backgroundHomePage"> 
            <div class="content-wrap">
                <h2 class="content-title">Partners</h2>
                <p>Temukan talent dan usaha<br>yang berkerjasama dengan kami</p>
                <a href="../404.html" class="btn">
                    <p><span class="links">LEARN MORE ></span></p>
                </a>
                <br>
                <img src="assets/images/partner.svg" alt="partner">
            </div>  
        </section>
        
        <!-- Section B -->
        <section id="section-b" class="backgroundHomePage">
            <div class="content-wrap">
                <h2 class="content-title">Karir</h2>
                <p>Lakukan hal yang Epic<br>bersama kami</p>
                <a href="https://forms.gle/jDoLLciDcUGqdV6H8" class="btn">
                    <p><span class="links">LEARN MORE ></span></p>
                </a>
                <br>
                <img src="assets/images/karir.svg" alt="karir">
            </div>
        </section>

        <!-- Section C -->
        <section id="section-c" class="backgroundHomePage">
            <div class="content-wrap">
                <h2 class="content-title">Reach Us</h2>
                <p>Temukan bantuan yang bisa kami berikan<br>untuk bisnis anda</p>
                <a href="/reachus/create" class="btn">
                    <p><span class="links">LEARN MORE ></span></p>
                    <br>
                <img src="assets/images/reachus.svg" alt="reachus">
                </a>
        </section>
    </main>

    <footer>
        <div>
            <img id="icon_copyright" src="assets/images/logowhite.png" alt="Icon Kreativ">
        </div>
        <p class="region">Email: aul@kreativ.com | Kontak: +628888888 </p>
        <p class="copyright">
            2021 kreativcoooo. Hak Cipta Dilindungi oleh undang-undang</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/JSFolder/main.js') }}"></script>
    
</body>

</html>