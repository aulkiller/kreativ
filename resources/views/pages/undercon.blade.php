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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/CSSFolder/indexstyle.css')}}">

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

        <section id="section-a">
            <div class="content-wrap">
                <h2 class="content-title">Under Maintenance</h2>
                <p>Sepertinya Page yang akan dibuka sedang dalam perbaikan :(</p>
                <a href="/" class="btn">
                    <p><span class="links">Home ></span></p>
                </a>
            </div>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('assets/JSFolder/main.js') }}"></script>
    </body>

</html>