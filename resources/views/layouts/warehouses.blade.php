<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RealProperty</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600" rel="stylesheet">
</head>
<body>

    <div class="column is-full is-mobile backgroundimg">
        <div class="container">
            <div class="column is-mobile is-centered">
                @include('layouts.navwarehouse');
            </div>
        </div>
        <div class="container">
            <div class="columns is-mobile is-centered">


{{--                --}}
{{--               <div class="column is-8 searchbox">--}}
{{--                   <h1 class="subtitle is-4 has-text-white searchboxtitletext">Search properties</h1>--}}
{{--                   <div class="tabs">--}}
{{--                    <ul>--}}
{{--                      <li class="deadtabitem">--}}
{{--                        <a href="/house">--}}
{{--                          <span class="has-text-white">Houses</span>--}}
{{--                        </a>--}}
{{--                      </li>--}}
{{--                      <li  class="deadtabitem">--}}
{{--                        <a href="/land">--}}
{{--                          <span class="has-text-white">Lands</span>--}}
{{--                        </a>--}}
{{--                      </li>--}}
{{--                      <li class="deadtabitem">--}}
{{--                        <a href="/apartment">--}}
{{--                          <span class="has-text-white">Apartments</span>--}}
{{--                        </a>--}}
{{--                      </li>--}}
{{--                      <li class="deadtabitem">--}}
{{--                        <a href="/building">--}}
{{--                          <span class="has-text-white">Buildings</span>--}}
{{--                        </a>--}}
{{--                      </li>--}}
{{--                      <li class="is-active has-background-primary tabitem">--}}
{{--                        <a href="/warehouse">--}}
{{--                          <span class="has-text-white">Warehouses</span>--}}
{{--                        </a>--}}
{{--                      </li>--}}
{{--                    </ul>--}}
{{--                  </div>--}}
{{--                  --}}
{{--                  --}}{{-- Search Box --}}
{{--                <form method="POST" action="/warehouse/search">--}}
{{--                  @csrf--}}
{{--                    <div class="field has-addons searchinput">--}}
{{--                        <p class="control has-icons-left is-expanded">--}}
{{--                          <input class="input is-large inputsearchbox" type="text" placeholder="Search by City,Postal Code" id="search" name="searchquery">--}}
{{--                          <span class="icon is-small is-left">--}}
{{--                            <i class="fas fa-search"></i>--}}
{{--                          </span>--}}
{{--                        </p>--}}
{{--                        <div class="control">--}}
{{--                            <button class="button inputsearchbox is-primary is-large"><p class="subtitle is-6 has-text-white">Search</p></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="is-hidden-touch">--}}
{{--                    <div class="field has-addons">--}}
{{--                        <div class="control has-icons-left">--}}
{{--                            <div class="select selectbox is-small">--}}
{{--                                <select name="minprice">--}}
{{--                                    <option value="0">Price(Min)</option>--}}
{{--                                    <option value="1000000">1 Million</option>--}}
{{--                                    <option value="2000000">2 Million</option>--}}
{{--                                    <option value="3000000">3 Million</option>--}}
{{--                                    <option value="4000000">4 Million</option>--}}
{{--                                    <option value="5000000">5 Million</option>--}}
{{--                                    <option value="6000000">6 Million</option>--}}
{{--                                    <option value="7000000">7 Million</option>--}}
{{--                                    <option value="8000000">8 Million</option>--}}
{{--                                    <option value="9000000">9 Million</option>--}}
{{--                                    <option value="10000000">10 Million</option>--}}
{{--                                    <option value="50000000">50 Million</option>--}}
{{--                                    <option value="100000000">100 Million</option>--}}
{{--                                    <option value="200000000">200 Million</option>--}}
{{--                                    <option value="1000000000">1 Billion</option>--}}
{{--                                    <option value="50000000000">50 Billion</option>--}}
{{--                                    <option value="100000000000">100 Billion</option>--}}
{{--                                    </select>--}}
{{--                            </div>--}}
{{--                            <span class="icon is-small is-left">--}}
{{--                              <i class="fas fa-dollar-sign"></i>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div class="control has-icons-left">--}}
{{--                          <div class="select selectbox is-small">--}}
{{--                              <select name="maxprice">--}}
{{--                                  <option value="9999999999999999999999999999999">Price(Max)</option>--}}
{{--                                  <option value="1000000">1 Million</option>--}}
{{--                                  <option value="2000000">2 Million</option>--}}
{{--                                  <option value="3000000">3 Million</option>--}}
{{--                                  <option value="4000000">4 Million</option>--}}
{{--                                  <option value="5000000">5 Million</option>--}}
{{--                                  <option value="6000000">6 Million</option>--}}
{{--                                  <option value="7000000">7 Million</option>--}}
{{--                                  <option value="8000000">8 Million</option>--}}
{{--                                  <option value="9000000">9 Million</option>--}}
{{--                                  <option value="10000000">10 Million</option>--}}
{{--                                  <option value="50000000">50 Million</option>--}}
{{--                                  <option value="100000000">100 Million</option>--}}
{{--                                  <option value="200000000">200 Million</option>--}}
{{--                                  <option value="1000000000">1 Billion</option>--}}
{{--                                  <option value="50000000000">50 Billion</option>--}}
{{--                                  <option value="100000000000">100 Billion</option>--}}
{{--                                </select>--}}
{{--                          </div>--}}
{{--                          <span class="icon is-small is-left">--}}
{{--                            <i class="fas fa-dollar-sign"></i>--}}
{{--                          </span>--}}
{{--                        </div>--}}
{{--                        <label class="checkbox checktext has-text-white">--}}
{{--                            <input type="checkbox" name="electricity">--}}
{{--                            3 Phase Electricity--}}
{{--                        </label>--}}
{{--                        <label class="checkbox checktext has-text-white">--}}
{{--                            <input type="checkbox" name="parkingarea">--}}
{{--                            Parking Area--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--               </div>--}}
{{--                --}}




                <table width="800" border="0" style="background-color: white">
                    <tr>
                        <td colspan="4"><strong>เครื่องคำนวณสินเชื่อ</strong></td>
                    </tr>
                    <tr>
                        <td width="167">อัตราดอกเบี้ยจากธนาคาร</td>
                        <td width="309">

                            <select name="bank" id="bank">
                                <option value="0">ไม่ระบุ</option>
                                <option value="5.75">Bankok Bank</option>
                                <option value="5.75">Bankok Bank</option>
                                <option value="6.05">Bank of Ayudhya</option>
                                <option value="7.35">CMIB THAI Bank</option>
                                <option value="7">Industrial and Commercial Bank of China (Thai)</option>
                                <option value="5.97">Kasikornbank</option>
                                <option value="6.65">Kiatnakin Bank</option>
                                <option value="6.22">Krung Thai Bank</option>
                                <option value="7.35">Land and Houses Bank</option>
                                <option value="8.125">Land and Houses Retail Bank</option>
                                <option value="0">Standard Chartered Bank (Thai)</option>
                                <option value="6.28">Thanachart Bank</option>
                                <option value="5.995">The Siam Commercial Bank</option>
                                <option value="8.8">The Thai Credit Retail Bank</option>
                                <option value="6.725">TISCO Bank</option>
                                <option value="6.28">TMB Bank</option>
                                <option value="7.35">United Overseas Bank (Thai) Company Ltd.</option>
                            </select>

                        </td>
                        <td width="65">&nbsp;</td>
                        <td width="241" rowspan="5">
                            <div class="circle" id="circles-1"></div>
                            <div>
                            ดอกเบี้ย <small id="v1" class="pl-3 form-text">-</small> บาท/เดือน<br />
                            เงินต้น <small id="v2" class="pl-3 form-text">-</small> บาท/เดือน
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>วงเงินกู้</td>
                        <td><input id="amount" type="text" placeholder="ระบุวงเงินกู้" value="" class="form-control" inputmode="numeric"></td>
                        <td>บาท</td>
                    </tr>
                    <tr>
                        <td>ระยะเวลากู้</td>
                        <td><input id="year" type="number" placeholder="ระบุระยะเวลากู้" value="" class="form-control"></td>
                        <td>ปี</td>
                    </tr>
                    <tr>
                        <td>ดอกเบี้ย</td>
                        <td><input id="interest" type="number" placeholder="ระบุจำนวนดอกเบี้ย" value="" class="form-control"></td>
                        <td>%</td>
                    </tr>
                    <tr>
                        <td>อัตราการผ่อน</td>
                        <td><small id="pmt" class="pl-3 form-text">-</small></td>
                        <td>บาท/เดือน</td>
                    </tr>
                    <tr>
                        <td colspan="4">** เป็นการคำนวณโดยการประมาณ อัตราจริงขึ้นอยู่กับเงื่อนไขของแต่ละธนาคาร</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><button id="btCal" type="button" class="mr-3 btn btn-primary btn-sm">คำนวณ</button>
                            <button id="btClear" type="button" class="btn btn-bn-g-secondary-2 btn-sm">ล้างข้อมูล</button>
                        </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>








            </div>
            <div class="has-text-centered indexicon">
                <span class="icon has-text-white is-large">
                  <i class="fas fa-home fa-5x"></i>
                </span>
                <h1 class="has-text-white">JOIN NOW!</h1>
                <h4 class="has-text-white">Find Your Dream House</h4>
            </div>
        </div>
    </div>

    {{-- Deatils Section  --}}
    <div class="columns is-mobile is-centered details">
      <div class="column"></div>
      <div class="column has-text-centered">
        <span class="is-centered has-text-primary">
          <i class="fas fa-home fa-5x"></i>
        </span>
        <br>
        <div class="subtitle has-text-dark marginten">
          Searching for?
        </div>
        Our fast searching algorithm selects what best for you
          <div class="marginten">
            <a href="/" class="has-text-info">Search Now</a>
          </div>
      </div>
      <div class="column has-text-centered">
        <span class="is-centered has-text-primary">
            <i class="far fa-thumbs-up fa-5x"></i>
        </span>
        <br>
        <div class="subtitle has-text-dark marginten">
          Prefect house tips!
        </div>
          Subscribe our blog to get prefect house tips
          <div class="marginten">
            <a href="/blog" class="has-text-info marginten">Visit Blog</a>
          </div>
      </div>
      <div class="column has-text-centered">
        <span class="is-centered has-text-primary">
            <i class="fas fa-hand-holding-usd fa-5x"></i>
        </span>
        <br>
        <div class="subtitle has-text-dark marginten">
          Sell Yours?
        </div>
        Register now, sell your house,land or apartments easily and free
        <div class="marginten">
            <a href="register" class="has-text-info marginten">Register Now</a>
        </div>
      </div>
      <div class="column"></div>
    </div>

    {{-- Photo Frame Section --}}
    <div class="columns">
      <div class="column image is-2by1 childrenimg">

      </div>
      <div class="column colorred">
        <h1 class="title is-1 has-text-white has-text-centered maketheir">Make Thier</h1>
        <h2 class="title is-2 has-text-white has-text-centered futurebetter">Future Better!</h2>
        <p class="control has-text-centered">
          <a class="button is-primary is-inverted has-text-centered is-outlined signbuttonbelow" href="register">
              <span>Join</span>
            </a>
          </p>
      </div>
    </div>

    {{-- Article Section --}}
    <div class="column">
        <h3 class="title is-3 has-text-grey-darker has-text-centered">Recent Blog Articles</h3>
      <div class="container">
          @foreach ($articles as $article)
            @include('layouts.article')
          @endforeach
      </div>
    </div>

    {{-- Footer --}}
    @include('layouts.footer')


    <style>


        table {
            border-collapse:separate;
            border:solid black 0px;
            border-radius:6px;
            -moz-border-radius:6px;
            border-spacing: 6px;
        }

        td, th {
            border-left:solid black 0px;
            border-top:solid black 0px;
        }

        th {
            background-color: blue;
            border-top: none;
        }

        td:first-child, th:first-child {
            border-left: none;
        }




        .circle {
            display: inline-block;
            margin: 1em;
        }

        .circles-decimals {
            font-size: .4em;
        }
    </style>

      {{-- JavaScript Files --}}
      <script src="/js/jquery-3.3.1.min.js"></script>
      <script src="/js/fontawesome.js"></script>
      <script src="/js/circles.js"></script>
      <script>
        Circles.create({
            id:           'circles-1',
            value:        0,
            radius:       60,
            width:        10,
            duration:     1,
            colors:       ['#D3B6C6', '#4B253A']
        });
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script>
          $('#bank').on('change', function() {
              //alert( this.value );
              $('#interest').val(this.value);
          });
          $( "#btCal" ).click(function() {


              //$("#divlbPremiumComPare").hide();
              var pv = $('#amount').val();
              var rate = $('#interest').val();
              var pmtFreq = $('#rate').val();
              var nper = $('#year').val();
              var fee = 0;
              var feeFreq = 0;
              var fv = 0;
              var type = 0;

              if ((nper == "0")||(nper == "")) {
                  alert('กรุณาเลือกเป้าหมายการกู้');
                  return;
              }
              if (pv == "" || pv == "จำนวนเงินที่ต้องการกู้" || pv == "0" || pv == "0.00") {
                  alert('กรุณากรอกจำนวนเงินที่ต้องการกู้');
                  return;
              }
              if (rate == "" || rate == "ระบุอัตราดอกเบี้ย (%)") {
                  alert('กรุณากรอกอัตราดอกเบี้ย');
                  return;
              }

              pv = pv.replace(/,/g, "");
              pv = parseFloat(pv);
              rate = (rate / 100) / 12;
              nper = parseInt(nper) * 12;

              var pmt = parseFloat(PMT(rate, nper, -pv, fv, type)); // + parseFloat(fee);
              //pmt = pmt + fee;
              $("#pmt").html((Math.ceil((pmt))));

              var totals = ((pmt * (nper * 12)) - pv).toFixed(0);
              var newRate = (pmt * parseFloat($('#rate').val())) / (100 + parseFloat($('#rate').val()));
              var pmtYear = pmt * nper;
              var rateNew = pmtYear - pv;
              var pmtAll = pmtYear + rateNew;

              $("#v1").html(parseInt(rateNew));
              $("#v2").html(parseInt(pv));

              Circles.create({
                  id:           'circles-1',
                  value:        Math.ceil(pmt),
                  radius:       60,
                  width:        10,
                  duration:     1,
                  colors:       ['#D3B6C6', '#768700']
              });
          });
          $( "#btClear" ).click(function() {
              $("#v1").html('-');
              $("#v2").html('-');
              $("#bank")[0].selectedIndex = 0;
              $('#amount').val('');
              $('#interest').val('');
              $('#rate').val('');
              $('#year').val('');
              Circles.create({
                  id:           'circles-1',
                  value:        0,
                  radius:       60,
                  width:        10,
                  duration:     1,
                  colors:       ['#D3B6C6', '#4B253A']
              });
          });

          function SetFormatCurrency(num) {
              //return parseFloat(num, 10).toFixed(0).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
              num = num.toString().replace(/\$|\,/g, '');
              if (isNaN(num))
                  num = "0";
              sign = (num == (num = Math.abs(num)));
              num = Math.floor(num * 100 + 0.50000000001);
              cents = num % 100;
              num = Math.floor(num / 100).toString();
              if (cents < 10)
                  cents = "0" + cents;
              for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
                  num = num.substring(0, num.length - (4 * i + 3)) + ',' +
                      num.substring(num.length - (4 * i + 3));
              if (num != "0")
                  return (((sign) ? '' : '-') + num);
              else
                  return (((sign) ? '' : '-') + "-");
          }

          function PMT(rate, nper, pv, fv, type) {
              var result;
              if (rate === 0) {
                  result = (pv + fv) / nper;
              } else {
                  var term = Math.pow(1 + rate, nper);
                  result = fv * rate / (term - 1) + pv * rate / (1 - 1 / term);
              }
              return -result;
          }

/*
DDLYearLoan จำนวนปีของการกู้ยืม
txtRate อัตราดอกเบี้ยเงินกู้ต่อปี (%)
txtAmountLoanจำนวนเงินที่ต้องการกู้ (บาท)
DDLLoadObjective เป้าหมายการกู้

bank อัตราดอกเบี้ยจากธนาคาร
amount วงเงินกู้
year ระยะเวลากู้
interest ดอกเบี้ย
rate อัตราการผ่อน

 function calculatePMTNew() {
        $("#divlbPremiumComPare").hide();
        var pv = $('#txtAmountLoan').val();

        var rate = $('#txtRate').val();
        var pmtFreq = $('#pmtFreq').val();
        var nper = $('#DDLYearLoan').val();
        var fee = 0;
        var feeFreq = 0;
        var fv = 0;
        var type = 0;

        if ($('#DDLLoadObjective').val() == "0") {
           // alert('');
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณาเลือกเป้าหมายการกู้</div>" });

            MsBox('กรุณาเลือกเป้าหมายการกู้');
            return;
        }
        if (pv == "" || pv == "จำนวนเงินที่ต้องการกู้" || pv == "0" || pv == "0.00") {
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณากรอกจำนวนเงินที่ต้องการกู้</div>" });
            MsBox('กรุณากรอกจำนวนเงินที่ต้องการกู้');
            return;
        }
        if (rate == "" || rate == "ระบุอัตราดอกเบี้ย (%)") {
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณากรอกอัตราดอกเบี้ย</div>" });
            MsBox('กรุณากรอกอัตราดอกเบี้ย');
            return;
        }

        if (document.getElementById("txtFee").value != "") {
            fee = document.getElementById("txtFee").value;
        }
        pv = pv.replace(/,/g, "");
        pv = parseFloat(pv);
        rate = (rate / 100) / 12;
        nper = parseInt(nper) * 12;

        var pmt = parseFloat(PMT(rate, nper, -pv, fv, type)) + parseFloat(fee);
        //pmt = pmt + fee;

        //alert(fee);
        // alert(PMT(rate, nper, -pv, fv, type) + " pmt = " + pmt + " pv = " + pv + " rate = " + rate + " year = " + nper);

        //var totals = ((pmt * (nper * 12)) - pv).toFixed(0);
        //var newRate = (pmt * parseFloat($('#txtRate').val())) / (100 + parseFloat($('#txtRate').val()));

        $("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_lbPremium").html(SetFormatCurrency(pmt.toFixed(0)));

        if ($("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_lbPremium").html() != "" && $("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_lbPremium").html() != "-") {
            $("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_lbUnitTab1").show();
        }
        else {
            $("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_lbUnitTab1").hide();
        }


        $("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_hdValueSavePMT").val((pmt).toFixed(0));

        $("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_LabelRate").html($('#txtRate').val());

        //if (rate != "0" && rate != "" && rate != null) {
        //    pmt = pmt - parseFloat(newRate.toFixed(0));
        //}

        var pmtYear = pmt * nper;
        //var rateYear = newRate * nper;
        var rateNew = pmtYear - pv;
        var pmtAll = pmtYear + rateNew;

        $("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_hdValueSave1").val(rateNew.toFixed(0));
        $("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_hdValueSave2").val(pmtAll.toFixed(0));

        $("#txtValue1").val(pv.toFixed(0));
        $("#txtValue2").val(rateNew.toFixed(0));
        //pmt.toFixed(0)
        //   CallGraph1(parseFloat(pv.toFixed(0)), parseFloat(rateNew.toFixed(0)));
        CallGraph2(parseFloat(pv.toFixed(0)), parseFloat(rateNew.toFixed(0)), parseFloat(0), parseFloat(0));
    }

    function SetFormatCurrency(num) {
        //return parseFloat(num, 10).toFixed(0).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
        num = num.toString().replace(/\$|\,/g, '');
        if (isNaN(num))
            num = "0";
        sign = (num == (num = Math.abs(num)));
        num = Math.floor(num * 100 + 0.50000000001);
        cents = num % 100;
        num = Math.floor(num / 100).toString();
        if (cents < 10)
            cents = "0" + cents;
        for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
            num = num.substring(0, num.length - (4 * i + 3)) + ',' +
    num.substring(num.length - (4 * i + 3));
        if (num != "0")
            return (((sign) ? '' : '-') + num);
        else
            return (((sign) ? '' : '-') + "-");
    }

    function ComparePMT() {
        var pv = $('#txtCompare').val();
        if (pv == null || pv == "" || pv == "ระบุจำนวนเงินกู้ที่ต้องการเปรียบเทียบ") {
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณากรอกจำนวนเงินกู้ที่ต้องการเปรียบเทียบ</div>" });
            MsBox('กรุณากรอกจำนวนเงินกู้ที่ต้องการเปรียบเทียบ');
            return;
        }
        if (pv == "0" || pv == "0.00") {
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณากรอกจำนวนกู้เงินให้มากกว่า 0 </div>" });
            MsBox('กรุณากรอกจำนวนกู้เงินให้มากกว่า 0');
            return;
        }
        var value1 = $("#txtValue1").val();
        var value2 = $("#txtValue2").val();

        if (value1 == null || value1 == "") {
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณาทำการคำนวณก่อนทำการเปรียบเทียบค่ะ</div>" });
            MsBox('กรุณาทำการคำนวณก่อนทำการเปรียบเทียบค่ะ');
            return;
        }
        if (value2 == null || value2 == "") {
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณาทำการคำนวณก่อนทำการเปรียบเทียบค่ะ</div>" });
            MsBox('กรุณาทำการคำนวณก่อนทำการเปรียบเทียบค่ะ');
            return;
        }
        var rate = $('#txtRate').val();
        var pmtFreq = $('#pmtFreq').val();
        var nper = $('#DDLYearLoan').val();
        var fee = 0;
        var feeFreq = 0;
        var fv = 0;
        var type = 0;

        if ($('#DDLLoadObjective').val() == "0") {
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณาเลือกเป้าหมายการกู้</div>" });
            MsBox('กรุณาเลือกเป้าหมายการกู้');
            return;
        }
        if (pv == "" || pv == "จำนวนเงินที่ต้องการกู้" || pv == "0" || pv == "0.00") {
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณากรอกจำนวนเงินที่ต้องการกู้</div>" });
            MsBox('กรุณากรอกจำนวนเงินที่ต้องการกู้');
            return;
        }
        if (rate == "" || rate == "ระบุอัตราดอกเบี้ย (%)") {
            //$.colorbox({ inline: true, width: "25%", href: "<div class='lightbox-alert' style='padding:20px 30px'>กรุณากรอกอัตราดอกเบี้ย</div>" });
            MsBox('กรุณากรอกอัตราดอกเบี้ย');
            return;
        }
        if (document.getElementById("txtFee").value != "") {
            fee = document.getElementById("txtFee").value;
        }
        pv = pv.replace(/,/g, "");
        pv = parseFloat(pv);
        rate = (rate / 100) / 12;
        nper = parseInt(nper) * 12;

        var pmt = parseFloat(PMT(rate, nper, -pv, fv, type)) + parseFloat(fee);

        var totals = ((pmt * (nper * 12)) - pv).toFixed(0);
        var newRate = (pmt * parseFloat($('#txtRate').val())) / (100 + parseFloat($('#txtRate').val()));
        $("#divlbPremiumComPare").show();
        $("#ctl00_ctl56_g_bc917917_5be6_4d69_bba3_04201a80cee0_lbPremiumComPare").html(SetFormatCurrency(pmt.toFixed(0)) + " บาท");

        var pmtYear = pmt * nper;
        var rateNew = pmtYear - pv;
        var pmtAll = pmtYear + rateNew;

        CallGraph2(parseFloat(value1), parseFloat(value2), parseFloat(pv.toFixed(0)), parseFloat(rateNew.toFixed(0)));

    }
    function PMT(rate, nper, pv, fv, type) {
        var result;
        if (rate === 0) {
            result = (pv + fv) / nper;
        } else {
            var term = Math.pow(1 + rate, nper);
            result = fv * rate / (term - 1) + pv * rate / (1 - 1 / term);
        }
        return -result;
    }


          */


      </script>
</body>
</html>
