<div class="container">
    <div class="is-centered">
        <a class="navbar-item is-centered is-horizontal-center" href="/">
            <img src="/img/logoblack.png"  width="112" height="28">
        </a>
        <div class="buttons is-centered">
        @guest
          <a class="button is-light is-centered nounnounderlinebtn" href="/login">
            เข้าสู่ระบบ
          </a>
        @if (Route::has('register'))
          <a class="button is-primary is-centered nounnounderlinebtn" href="/register">
              <strong>สมัครสมาชิก</strong>
          </a>
        @endif
        @else
        <a class="button is-primary is-centered nounderlinebtn" href="/profile">
            โปรไฟล์
          </a>
          <a class="button is-light is-centered nounderlinebtn" href="/logout">
              ออกจากระบบ
            </a>
        </div>
    </div>
</div>
  <nav class="navbar" role="navigation" class="is-centered" aria-label="main navigation">
    <div class="navbar-brand">
      <a role="button" class="navbar-burger burger button is-primary" aria-label="menu" aria-expanded="false" onclick="document.querySelector('.below').classList.toggle('is-active');" data-target="belownav">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="belownav" class="navbar-menu below is-centered navsearch">
      <div class="navbar-start">
            <a class="navbar-item menuitemnav" href="/house">
                บ้านมือสอง
            </a>
            <a class="navbar-item menuitemnav" href="/land">
                บ้านใหม่
            </a>
            <a class="navbar-item menuitemnav" href="/apartment">
                บ้านเช่า
            </a>
            <a class="navbar-item menuitemnav" href="/building">
                บ่านหลุดจำนอง
            </a>
            <a class="navbar-item menuitemnav" href="/warehouse">
                เครื่องคำนวณดอกเบี้ย & สินเชื่อ
            </a>
            <a class="navbar-item menuitemnav" href="/blog">
              ข่าวสาร
            </a>
            <a class="navbar-item menuitemnav" href="/about">
              เกี่ยวกับเรา
            </a>
            <a class="navbar-item menuitemnav" href="/contactus">
              ติดต่อเรา
            </a>
      </div>
      <div class="navbar-end">
      <div class="navbar-item">
      @endguest
      </div>
    </div>
    </div>
  </nav>
