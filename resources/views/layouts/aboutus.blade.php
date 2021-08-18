<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - NARAAgency</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css"> {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600" rel="stylesheet">
</head>

<body>

    <div class="column is-full is-mobile backgroundimg">
        <div class="container">
            <div class="column is-mobile is-centered">
                @include('layouts.navabout');
            </div>
        </div>
        <div class="container">
            <div class="has-text-centered centertext">
                <span class="icon has-text-white is-large">
                    <i class="far fa-building fa-5x"></i>
                </span>
                <h1 class="has-text-white centertextword">เกี่ยวกับเรา</h1>
            </div>
        </div>
    </div>

    {{-- Deatils Section --}}
    <div class="columns is-mobile is-centered has-background-white">
        <div class="container has-text-centered aboutus has-text-dark">
            {{-- <img class="image face" src="/img/girl1.jpeg"> --}}
            <div class='equal-height'>
                <div class='is-flex is-horizontal-center'>
                    <figure class=''><img class="image face" src='/img/aom.jpg'></figure>
                </div>
            </div>
            <br>
            <p>ยินดีต้อนรับสู่ นาราเอเจนซี่ เรามีบ้านใหม่ บ้านมือสอง บ้านหลุดจำนอง ไว้สำหรับคุณด้วยความเที่ยงตรง รวดเร็ว เชื่อถือได้ และมีคุณภาพ
                <br>
                <p><i><b>คุณนราธิป จำรัส</b></i></p>
        </div>
    </div>

    {{-- Footer --}} @include('layouts.footer') {{-- JavaScript Files --}}
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
</body>

</html>
