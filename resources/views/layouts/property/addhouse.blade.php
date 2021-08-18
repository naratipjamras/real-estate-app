<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Property - NARAAgency</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/bootstrap.css"> {{-- Google Fonts --}}
    <link
        href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600"
        rel="stylesheet">
    <style>
        #map {
            height: 300px;
        }
    </style>
</head>

<body>
    @include('results.navresult')
    <br>
    <div class="title has-text-centered">เพิ่มข้อมูลบ้านมือสอง</div>
    <br>
    <div class="container">
        <div class="columns is-mobile is-centered">
            <div class="column is-8">
                {{-- @include('layouts.errors') --}}
                @if(session()->has('message'))
                <div class="notification is-success">
                    <button class="delete"></button>
                    <h1 class="is-size-4"><b> {{ session()->get('message') }}</b></h1>
                </div>
                @endif
            </div>
        </div>

        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <label for="name">ชื่อบ้าน</label>
                            <input class="input is-primary {{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">ประเภท</label>
                            <br>
                            <div class="select is-primary is-full {{ $errors->has('type') ? ' is-danger' : '' }}">
                                <select name="type">
                                    <option value="House">บ้านมือสอง</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">ราคา <strong>(บาท)</strong></label>
                            <input class="input is-primary {{ $errors->has('amount') ? ' is-danger' : '' }}" type="text" name="amount" value="{{ old('amount') }}">
                            @if ($errors->has('amount'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('amount') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">จังหวัด</label>
                            <br>
                            <div class="select is-primary is-full {{ $errors->has('city') ? ' is-danger' : '' }}">
                                <select name="city">
                                        <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                        <option value="กระบี่">กระบี่ </option>
                                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                        <option value="จันทบุรี">จันทบุรี</option>
                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                        <option value="ชัยนาท">ชัยนาท </option>
                                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                                        <option value="ชุมพร">ชุมพร </option>
                                        <option value="ชลบุรี">ชลบุรี </option>
                                        <option value="เชียงใหม่">เชียงใหม่ </option>
                                        <option value="เชียงราย">เชียงราย </option>
                                        <option value="ตรัง">ตรัง </option>
                                        <option value="ตราด">ตราด </option>
                                        <option value="ตาก">ตาก </option>
                                        <option value="นครนายก">นครนายก </option>
                                        <option value="นครปฐม">นครปฐม </option>
                                        <option value="นครพนม">นครพนม </option>
                                        <option value="นครราชสีมา">นครราชสีมา </option>
                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                        <option value="นครสวรรค์">นครสวรรค์ </option>
                                        <option value="นราธิวาส">นราธิวาส </option>
                                        <option value="น่าน">น่าน </option>
                                        <option value="นนทบุรี">นนทบุรี </option>
                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                        <option value="ปทุมธานี">ปทุมธานี </option>
                                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                        <option value="ปัตตานี">ปัตตานี </option>
                                        <option value="พะเยา">พะเยา </option>
                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                        <option value="พังงา">พังงา </option>
                                        <option value="พิจิตร">พิจิตร </option>
                                        <option value="พิษณุโลก">พิษณุโลก </option>
                                        <option value="เพชรบุรี">เพชรบุรี </option>
                                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                        <option value="แพร่">แพร่ </option>
                                        <option value="พัทลุง">พัทลุง </option>
                                        <option value="ภูเก็ต">ภูเก็ต </option>
                                        <option value="มหาสารคาม">มหาสารคาม </option>
                                        <option value="มุกดาหาร">มุกดาหาร </option>
                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                        <option value="ยโสธร">ยโสธร </option>
                                        <option value="ยะลา">ยะลา </option>
                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                        <option value="ระนอง">ระนอง </option>
                                        <option value="ระยอง">ระยอง </option>
                                        <option value="ราชบุรี">ราชบุรี</option>
                                        <option value="ลพบุรี">ลพบุรี </option>
                                        <option value="ลำปาง">ลำปาง </option>
                                        <option value="ลำพูน">ลำพูน </option>
                                        <option value="เลย">เลย </option>
                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option value="สกลนคร">สกลนคร</option>
                                        <option value="สงขลา">สงขลา </option>
                                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                        <option value="สระแก้ว">สระแก้ว </option>
                                        <option value="สระบุรี">สระบุรี </option>
                                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                                        <option value="สุโขทัย">สุโขทัย </option>
                                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                        <option value="สุรินทร์">สุรินทร์ </option>
                                        <option value="สตูล">สตูล </option>
                                        <option value="หนองคาย">หนองคาย </option>
                                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                        <option value="อุดรธานี">อุดรธานี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">รหัสไปรษณีย์</label>
                            <input class="input is-primary {{ $errors->has('postalcode') ? ' is-danger' : '' }}" type="text" name="postalcode" value="{{ old('postalcode') }}">
                            @if ($errors->has('postalcode'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('postalcode') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">ภาค</label>
                            <br>
                            <div class="select is-primary is-full {{ $errors->has('province') ? ' is-danger' : '' }}">
                                <select name="province">
                                    <option value="Central">กลาง</option>
                                    <option value="Eastern">ตะวันออก</option>
                                    <option value="Northern">เหนือ</option>
                                    <option value="Southern">ใต้</option>
                                    <option value="Western">ตะวันตก</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <label for="name">รายละเอียด</label>
                            <textarea name="description" class="textarea is-primary {{ $errors->has('description') ? ' is-danger' : '' }}" value="{{ old('description') }}"></textarea>
                            @if ($errors->has('description'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('description') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">เบอร์ติดต่อ</label>
                            <input class="input is-primary {{ $errors->has('contactno') ? ' is-danger' : '' }}" type="text" name="contactno" value="{{ old('contactno') }}">
                            @if ($errors->has('contactno'))
                            <span>
                                <strong class="has-text-danger">{{ $errors->first('contactno') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">อิเมลล์</label>
                            <input class="input is-primary {{ $errors->has('contactemail') ? ' is-danger' : '' }}" type="text" name="contactemail"
                                value="{{Auth::user()->email}}">
                                @if ($errors->has('contactemail'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('contactemail') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    {{-- Image Upload Section --}}
                    <div class="field">
                        <div class="control">
                            <label for="img">ภาพ <strong class="is-small">
                                    (Tip: อัพโหลดภาพขนาด [สูงสุด: 4MB])</strong></label>
                            <div class="input-group control-group increment">
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn">
                                    <button class="button is-success addmore" type="button"><i
                                            class="glyphicon glyphicon-plus"></i>มากกว่านั้น</button>
                                </div>
                            </div>

                            <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="filename[]" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="button is-danger" type="button"><i
                                                class="glyphicon glyphicon-remove"></i> นำออก</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('filename'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('filename') }}</strong>
                                </span> @endif
                    </div>
                    <div class="field">
                        <div class="control maphere">
                            <label for="name">ตั้งค่า: Google Maps</label>
                            <input class="input is-primary " type="text" id="searchmap">
                            <div id="map" class="column"></div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Latitude</label>
                            <input class="input is-primary {{ $errors->has('lat') ? ' is-danger' : '' }}" type="text" name="lat" id="lat" value="{{ old('lat') }}">
                            @if ($errors->has('lat'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('lat') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Longitude</label>
                            <input class="input is-primary {{ $errors->has('lng') ? ' is-danger' : '' }}" type="text" name="lng" id="lng" value="{{ old('lng') }}">
                            @if ($errors->has('lng'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('lng') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                </div>
                {{-- next column start here --}}
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <label for="name">จำนวนห้อง</label>
                            <input class="input is-primary {{ $errors->has('rooms') ? ' is-danger' : '' }}" type="number" name="rooms" value="{{ old('rooms') }}">
                            @if ($errors->has('rooms'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('rooms') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">จำนวนห้องครัว</label>
                            <input class="input is-primary {{ $errors->has('kitchen') ? ' is-danger' : '' }}" type="number" name="kitchen" value="{{ old('kitchen') }}">
                            @if ($errors->has('kitchen'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('kitchen') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">จำนวนชั้น</label>
                            <input class="input is-primary {{ $errors->has('floor') ? ' is-danger' : '' }}" type="number" name="floor" value="{{ old('floor') }}">
                            @if ($errors->has('floor'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('floor') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">จำนวนห้องซักล้าง</label>
                            <input class="input is-primary {{ $errors->has('washroom') ? ' is-danger' : '' }}" type="number" name="washroom" value="{{ old('washroom') }}">
                            @if ($errors->has('washroom'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('washroom') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">ขนาด (ตารางเมตร)</label>
                            <input class="input is-primary {{ $errors->has('size') ? ' is-danger' : '' }}" type="number" name="size" value="{{ old('size') }}">
                            @if ($errors->has('size'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('size') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">จำนวนสระว่ายน้ำ</label>
                            <br>
                            <div class="select is-primary {{ $errors->has('swimming') ? ' is-danger' : '' }}">
                                <select name="swimming">
                                    <option value="Available">มีอยู่</option>
                                    <option value="Not Available" selected>ไม่มีอยู่</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">พื้นที่สวน</label>
                            <br>
                            <div class="select is-primary {{ $errors->has('garden') ? ' is-danger' : '' }}">
                                <select name="garden">
                                    <option value="Available">มีอยู่</option>
                                    <option value="Not Available" selected>ไม่มีอยู่</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">โรงเรียนที่ใกล้ที่สุด</label>
                            <input class="input is-primary {{ $errors->has('nschool') ? ' is-danger' : '' }}" type="text" name="nschool" value="{{ old('nschool') }}">
                            @if ($errors->has('nschool'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('nschool') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">สถานีรถไฟที่ใกล้ที่สุด</label>
                            <input class="input is-primary {{ $errors->has('nrailway') ? ' is-danger' : '' }}" type="text" name="nrailway" value="{{ old('nrailway') }}">
                            @if ($errors->has('nrailway'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('nrailway') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">ป้ายรถเมย์ที่ใกล้ที่สุด</label>
                            <input class="input is-primary {{ $errors->has('nbus') ? ' is-danger' : '' }}" type="text" name="nbus" value="{{ old('nbus') }}">
                            @if ($errors->has('nbus'))
                                <span>
                                    <strong class="has-text-danger">{{ $errors->first('nbus') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control is-pulled-right">
                            <button type="submit" class="button is-primary">
                                เพิ่มบ้าน
                            </button>
                            <button type="reset" class="button is-warning">
                                ล้างข้อมูล
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <br>
    <br>
    </div>
    {{-- Footer --}}
    @include('layouts.footer') {{-- JavaScript Files --}}
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>s
    <script>
        tinymce.init({ selector:'textarea' });
    </script>
    <script>
        var map;
            function initAutocomplete() {
                map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 18.7943954,
                    lng: 98.8864368
                },
                zoom: 15
                });

                var marker = new google.maps.Marker({
                position: {
                    lat: 18.7943954,
                    lng: 98.8864368
                },
                map: map,
                draggable: true,
                });

                var input = document.getElementById('searchmap');
                var searchBox = new google.maps.places.SearchBox(input);
                //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                google.maps.event.addListener(searchBox,'places_changed',function(){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i, place;
                    for (i = 0; place=places[i]; i++) {
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);

                    }

                    map.fitBounds(bounds);
                    map.setZoom(30);
                });

                google.maps.event.addListener(marker,'position_changed',function(){
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat').val(lat);
                    $('#lng').val(lng);
                });
            }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initAutocomplete"></script>

{{--    <script--}}
{{--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&libraries=&v=weekly&channel=2&callback=initAutocomplete"--}}
{{--        async--}}
{{--    ></script>--}}


{{--    <script--}}
{{--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKNG_uMsCgUvpLc_Adr2n9nwo6BWOImoM&libraries=places&callback=initAutocomplete"--}}
{{--        async defer></script>--}}
    <script type="text/javascript">
        $(document).ready(function() {

          $(".addmore").click(function(){
              var html = $(".clone").html();
              $(".increment").after(html);
          });

          $("body").on("click",".is-danger",function(){
              $(this).parents(".control-group").remove();
          });

        });
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
