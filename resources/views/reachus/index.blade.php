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
    <link rel="stylesheet" href="{{asset('assets/CSSFolder/kontak2.css')}}">
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

    <section id="section-b">
        <div class="content-wrap">
                @if(count($reachsus) > 0)
                <table class="table table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>Perusahaan</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Waktu</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>UBAH</th>
                        <th>HAPUS</th>
                    </tr>
                    @foreach ($reachsus as $reachus)
                        <tr>
                            <td>{{$reachus->name}}</td>
                            <td>{{$reachus->company}}</td>
                            <td>{{$reachus->phone}}</td>
                            <td>{{$reachus->email}}</td>
                            <td>{{$reachus->time}}</td>
                            <td>{{$reachus->date}}</td>
                            <td>{{$reachus->desc}}</td>
                            <td><a href="/reachus/{{$reachus->id_req}}/edit" class="btn btn-primary display-4">Ubah</a></td>
                            <td>
                                {!!Form::open(['action' => ['ReachusController@destroy', $reachus->id_req], 'method' => 'POST', 'class' => ''])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Hapus', ['class' => 'btn btn-danger display-4'])}}
                                {!!Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>

                @else
                <table class="table table-striped">
                    <tr>
                        <th>Tidak ada permintaan</th>
                </table>
                @endif
        </div>
    </section>


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