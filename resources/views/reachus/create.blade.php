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
    <title>Alfva Co. | Kontak</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/CSSFolder/indexstyle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/CSSFolder/kontak.css')}}">
</head>

<body>
    <header>
        <a class="alfalogo" href="/"> <img src="../../assets/images/alfvalogo.svg" alt="icon"> </a>
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
                    <a class="btn" href="/reachus/create">Reach Us</a>
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
            <h1 class="content-title">Kontak Kami</h1>
            <p>lengkapi form di bawah ini untuk berbicara dengan kami via zoom call!</p>
        </div>
    </section>

    @include('pages.msg')

    <!-- Main Area -->
    <!-- <main class="grid kontak"> -->
    <!-- <form action="POST" data-netlify="true"> -->
    {!! Form::open(['action' => 'ReachusController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <section id="section-b">
            <div class="content-wrap">
                    <label>Nama</label>
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nama'])}}
            </div>
        </section>
        <section id="section-c">
            <div class="content-wrap">
                <label>Perusahaan/Organisasi (jika tidak ada, tulis “tidak ada”)</label>
                {{Form::text('company', '', ['class' => 'form-control', 'placeholder' => 'Perusahaan'])}}
            </div>
        </section>
        <section id="section-d">
            <div class="content-wrap">
                <label>No. Handphone</label>
                {{Form::tel('phone', '', ['class' => 'form-control', 'placeholder' => 'No. Handphone'])}}
            </div>
        </section>
        <section id="section-e">
            <div class="content-wrap">
                <label>Email</label>
                {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
        </section>
        <section id="section-f">
            <div class="content-wrap">
                <label>Waktu dan Tanggal (JM:MNT , dd/mm/year)</label>
                {{Form::time('time', '', ['class' => 'form-control', 'placeholder' => 'Waktu'])}}
                {{Form::date('date', '', ['class' => 'form-control', 'placeholder' => 'Tanggal'])}}
            </div>
        </section>
        <section id="section-g">
            <div class="content-wrap">
                <label>Deskripsi (apa yang membuat anda berbeda dari applicant lain?)</label>
                {{Form::textarea('desc', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
            </div>
        </section>
        <section id="section-h">
            <div class="content-wrap">
                {{Form::submit('Submit', ['class'=>'btn btn-primary display-4'])}}
            </div>
        </section>
    {!! Form::close() !!}    
    {{-- <form id="gform" method="POST" action="blm ada">
        <!-- Section B -->
        <section id="section-b">
            <div class="content-wrap">
                <label>Name</label>
                <input type="text" placeholder="Name" id= "name" name="name">
            </div>
        </section>

        <!-- Section C -->
        <section id="section-c">
            <div class="content-wrap">
                <label>Perusahaan/Organisasi (jika tidak ada, tulis “tidak ada”)</label>
                <input type="text" placeholder="Company" id= "company" name="company">
            </div>
        </section>

        <!-- Section D -->
        <section id="section-d">
            <div class="content-wrap">
                <label>No. Handphone</label>
                <input type="tel" placeholder="No. Handphone" id="phone" name="phone">
            </div>
        </section>

        <!-- Section E -->
        <section id="section-e">
            <div class="content-wrap">
                <label>Email</label>
                <input type="email" placeholder="Email" id="email" name="email">
            </div>
        </section>

        <!-- Section F -->
        <section id="section-f">
            <div class="content-wrap">
                <label>Waktu dan Tanggal (JM:MNT , dd/mm/year)</label>
                <input type="time" placeholder="Time" id="time" name="time">
                <input type="date" placeholder="Date" id="date" name="date">
            </div>
        </section>

        <!-- Section G -->
        <section id="section-g">
            <div class="content-wrap">
                <label>Deskripsi (apa yang membuat anda berbeda dari applicant lain?)</label>
                <textarea name="message" placeholder="Description about yourself" id="desc"></textarea></label>
            </div>
        </section>

        <!-- Section H -->
        <section id="section-h">
            <div class="content-wrap">
                <!-- gada tombol submit cuk? -->
                <button type="submit" id="sbmt" onclick="return validateForm();">Submit</button>
            </div>
        </section>
    </form> --}}
    <!-- Section I -->
    <section id="section-i">
        <div class="content-wrap">
            <h1>Butuh Bantuan? Kontak Kami Langsung di:</h1>
            <ul class="set">
                <li>
                <p><img src="../../assets/images/imel.svg" alt="email"> aul@kreativ.com</p>
                </li>
                <li>
                <p><img src="../../assets/images/ig.svg" alt="instagram"> @kreativcoooo</p>
                </li>
                <li>
                <p> <img src="../../assets/images/wa.svg" alt="whatsapp"> +628888888</p>
                </li>
            </ul>
        </div>
    </section>


    <!-- </main> -->

    <footer>
        <div>
            <img id="icon_copyright" src="../../assets/images/logowhite.png" alt="Icon Kreativ">
        </div>
        <p class="region">Email: aul@kreativ.com | Kontak: +628888888 </p>
        <p class="copyright">
            2021 kreativcoooo. Hak Cipta Dilindungi oleh undang-undang</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/JSFolder/main.js') }}"></script>
    <script src="{{ asset('assets/JSFolder/form.js') }}"></script>

</body>

</html>