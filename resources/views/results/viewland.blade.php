<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$land->property->name}} - NARAAgency</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/flickity.css"> {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600"
        rel="stylesheet">

    <style>
        #map {
            height: 300px;
        }
    </style>

</head>

<body>
    @include('results.navresult')

    <div class="viewsection">

        <div class="column profileback">
            <div class="containerx">
                <div class="carousel carousel-main" data-flickity='{"pageDots": false }'>
                    @foreach (json_decode($land->property->images) as $image)
                    <div class="carousel-cell"><img src="/uploads/property/land/{{$image}}" /></div>
                    @endforeach

                </div>

                <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
                    @foreach (json_decode($land->property->images) as $image)
                    <div class="carousel-cell"><img src="/uploads/property/land/{{$image}}" /></div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="containerx detailssection">
            <div class="columns is-flex-mobile">
                <div class="column is-two-thirds is-flex-mobile">
                    <div class="containerx">
                        <a href="/land/{{$land->id}}/favorite" class="button is-danger is-pulled-right"><span><i class="far fa-heart"></i></span></a>
                        <div class="is-pulled-left">
                            <div class="title">
                                {{$land->property->name}}
                            </div>
                            <div class="subtitle">
                                {{$land->property->city}}, {{$land->property->postalCode}}
                            </div>
                            <hr class="hrline">
                            <div class="subtitle has-text-weight-semibold">
                                รายละเอียด
                            </div>
                            <div class="columns">
                                <div class="column detailscolumn">
                                    <p>ประเภท: <span class="has-text-weight-semibold">{{$land->property->type}}</span></p>
                                    <p>น้ำประปา: <span class="has-text-weight-semibold">{{$land->tapwater}}</span></p>
                                    <p>ระบบไฟฟ้า: <span class="has-text-weight-semibold">{{$land->electricity}}</span></p>
                                    <p>ขนาดพื้นที่ (ตารางเมตร): <span class="has-text-weight-semibold">{{$land->size}}</span></p>
                                </div>
                                <div class="column">
                                    <p>โรงเรียนที่ไกล้ที่สุด: <span class="has-text-weight-semibold">{{$land->nearestSchool}}</span></p>
                                    <p>ป้ายรถเมย์ที่ใกล้ที่สุด: <span class="has-text-weight-semibold">{{$land->nearestRailway}}</span></p>
                                    <p>สถานีรถไฟที่ใกล้ที่สุด: <span class="has-text-weight-semibold">{{$land->nearestBusStop}}</span></p>
                                    <p>ความพร้อมอยู่: @if(strcmp($land->property->availability,"YES") == 0)
                                        <span class="has-text-weight-semibold has-text-success">
                                            {{$land->property->availability}}
                                        </span> @else
                                        <span class="has-text-weight-semibold has-text-danger">
                                                {{$land->property->availability}}
                                        </span> @endif
                                    </p>
                                </div>

                                {{-- Mobile/Tablet Section --}}
                                <div class="column is-hidden-desktop">
                                    <div class='is-flex is-horizontal-center'>
                                        <figure class="image is-128x128">
                                            <img class="is-rounded is-horizontal-center" src="/uploads/avatars/{{$land->property->user->avatar}}">
                                        </figure>
                                    </div>
                                    <div class="subtitle has-text-centered"><span>@</span>{{$land->property->user->name}}</div>
                                    <div class="has-text-centered">
                                        <button class="button is-success" onclick="showPnox()">แสดงเบอร์ติดต่อ</button>
                                        <p class="has-text-dark customerpno" id="pnox"><a href="tel:{{$land->property->contactNo}}" class="nounnounderlinelink">{{$land->property->contactNo}}</a></p>
                                        <hr>
                                        <p class="owneramount">ราคา: <span class="has-text-success has-text-weight-bold">{{number_format($land->property->amount,2)}}</span>                                            บาท</p>
                                        <p class="bidamount">ราคาสูงสุด: <span class="has-text-danger has-text-weight-bold">
                                                @if ($land->offers->count() > 0)
                                                    {{number_format($land->offers->sortBy('offerAmount')->last()->offerAmount,2)}}
                                                @else
                                                    0.00
                                                @endif
                                            </span> บาท</p>
                                        <div id="myBtnM"><button class="button is-link">เสนอราคา</button></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-hidden-touch">
                    <div class='is-flex is-horizontal-center'>
                        <figure class="image is-128x128">
                            <img class="is-rounded is-horizontal-center" src="/uploads/avatars/{{$land->property->user->avatar}}">
                        </figure>
                    </div>
                    <div class="subtitle has-text-centered"><span>@</span>{{$land->property->user->name}}</div>
                    <div class="has-text-centered">
                        <button class="button is-dark" onclick="location.href='#contactbox'">อิเมลล์ติดต่อ</button>
                        <button class="button is-success" onclick="showPno()">โทรติดต่อ</button>
                        <p class="has-text-dark customerpno" id="pno"><a href="tel:{{$land->property->contactNo}}" class="nounnounderlinelink">{{$land->property->contactNo}}</a></p>
                        <hr>
                        <p class="owneramount">ราคา: <span class="has-text-success has-text-weight-bold">{{number_format($land->property->amount,2)}}</span>                            บาท</p>
                        <p class="bidamount">ราคาสูงสุด: <span class="has-text-danger has-text-weight-bold">
                                @if ($land->offers->count() > 0)
                                    {{number_format($land->offers->sortBy('offerAmount')->last()->offerAmount,2)}}
                                @else
                                    0.00
                                @endif
                            </span> บาท</p>
                            <div id="myBtn"><button class="button is-link">ทำการเสนอ</button></div>
                            <br>
                            @include('results.offeralerts')
                        </div>
                    </div>
                </div>
            <hr>
            <div class="subtitle has-text-weight-semibold">
                Google Map
            </div> {{-- Google Map Here --}} {{--
            <div class=" is-flex-mobile"> --}}
                <div class="column maps is-flex-mobile">

                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <div id="map"></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    /* height: 678px; */
                                    width: 790px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none!important;
                                    /* /* height: 678px; */
                                    width: 790px;
                                }
                            </style>
                        </div>
                        <br>

                    </div>
                </div>
                <a class="button is-info nounnounderlinebtn" href="http://www.google.com/maps/place/{{$land->property->latitude}},{{$land->property->longitude}}"
                    target="_blank">ดูแผนที่</a>
                {{-- </div> --}}
            <hr>
            <div class="subtitle has-text-weight-semibold">รายละเอียด</div>
            <div class="column is-flex-mobile">
                <p class="content">
                    {!! $land->property->description !!}
                </p>
            </div>
            <hr>
            {{-- Contact Owner Email Box Start Here --}}
            <hr>
            <div class="subtitle has-text-weight-semibold" id="contactbox">ติดต่อ</div>
            <div class="column is-flex-mobile">
                <form action="/land/{{$land->id}}/contactowner" method="post">
                    @csrf
                    <div class="field">
                            <div class="control">
                            <input class="input" type="hidden" name="owner" value="{{$land->property->user->id}}">
                            <input class="input" type="hidden" name="path" value="{{Request::path()}}">

                            @if(Auth::check())
                                <input class="input" type="hidden" name="sender" value="{{auth()->user()->id}}">
                            @else
                                <input class="input" type="hidden" name="sender" value="0" hidden>
                            @endif
                            </div>
                        </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">ชื่อ</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left">
                                    <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" placeholder="ชื่อ" name="name">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    {!! $errors->first('name', '<p class="help-block has-text-danger">:message</p>') !!}
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">อิเมลล์</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left">
                                    <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" placeholder="อิเมลล์" name="email">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                      </span>
                                      {!! $errors->first('email', '<p class="help-block has-text-danger">:message</p>') !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">เบอร์โทร</label>
                        </div>
                        <div class="field-body">
                            <div class="field is-expanded">
                                <div class="field has-addons">
                                    <p class="control">
                                        <a class="button is-static">
                                          +66
                                        </a>
                                    </p>
                                    <p class="control is-expanded">
                                        <input class="input {{ $errors->has('pno') ? ' is-danger' : '' }}" type="tel" placeholder="เบอร์โทร" name="pno">
                                    </p>
                                </div>
                                {!! $errors->first('pno', '<p class="help-block has-text-danger">:message</p>') !!}
                                <p class="help has-text-link">อย่าใส่เลข 0 นำ</p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">เรื่อง</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input class="input {{ $errors->has('subject') ? ' is-danger' : '' }}" type="text" placeholder="เรื่อง" name="subject">
                                    {!! $errors->first('subject', '<p class="help-block has-text-danger">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">ข้อความ</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea {{ $errors->has('message') ? ' is-danger' : '' }}" placeholder="รายละเอียด" name="message"></textarea>
                                    {!! $errors->first('message', '<p class="help-block has-text-danger">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary" type="submit">
                                        ส่งข้อความ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <br>

            </div>
            {{-- Contact Owner Emaik --}}
{{--            <div class="notification is-danger">--}}
{{--                <button class="delete"></button>--}}
{{--                <strong>Important information:</strong> This ad has been posted on NARAAgency by the above mentioned--}}
{{--                advertiser. NARAAgency does not have any connection with this advertiser, nor do we vet the advertisers,--}}
{{--                guarantee their services, responsible for the accuracy of the ad's content or are responsible for services--}}
{{--                provided by the advertisers. NARAAgency does not provide any service other than list the advertisements--}}
{{--                posted by advertisers. You will be contacting the advertiser (owner/agent) of this property directly. We--}}
{{--                advise you to take precaution when making any payments or signing any agreements and be alert of any possible--}}
{{--                scams. If making any payments we recommend that you have two permanent & verified methods of contact of the--}}
{{--                payment receiver such as their landline number and home/business address.--}}
{{--            </div>--}}
            <a class="is-pulled-right link reportad" id="report"><span><i class="far fa-flag"></i></span><span class="has-text-balck"> Report Advertisement</span></a>
            <br>

        </div>

    </div>
    </div>
    {{-- Footer --}}
    @include('layouts.footer')
    @include('layouts.offerland')
    @include('layouts.reportland')
    {{-- JavaScript Files --}}
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/flickity.pkgd.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    @include('sweet::alert')
    <script>
        var map;
        var lat = {{$land->property->latitude}}
        var lng = {{$land->property->longitude}}
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: lat, lng: lng},
          zoom: 15
        });

        var marker = new google.maps.Marker({
          position: {lat: lat, lng: lng},
          map: map,
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&callback=initMap"></script>
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKNG_uMsCgUvpLc_Adr2n9nwo6BWOImoM&libraries=places&callback=initMap"--}}
{{--        async defer></script>--}}

    <script>
        function showPno() {
            var x = document.getElementById("pno");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function showPnox() {
            var x = document.getElementById("pnox");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                $notification = $delete.parentNode;
                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>

</body>

</html>
