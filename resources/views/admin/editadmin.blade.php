<div class="column displaybox">
    @include('admin.navprofile')
    <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">แอดมิน</a></li>
            <li class="is-active"><a href="/profile">แก้ไขแอดมิน</a></li>
        </ul>
    </nav>
    <div class="columns is-mobile is-centered">
        <div class="column is-half">
    @include('layouts.errors') @if(session()->has('message'))
            <div class="notification is-success">
                <button class="delete"></button>
                <h1 class="is-size-7"><b> {{ session()->get('message') }}</b></h1>
            </div>
            @endif
        </div>
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
    </div>
    <div class="card cardmargin">
        <div class="containerx" style="padding: 0 10% 0 10%;">
            <h1 class="title has-text-centered">แก้ไขแอดมิน</h1>
            <form action="/admin/admin/edit" method="post" enctype="multipart/form-data">
              @csrf
              <div class="field">
                <label class="label">ชื่อ</label>
                <p class="control has-icons-left">
                  <input type="hidden" value="{{$admin->id}}" name="id">
                  <input class="input" type="text" placeholder="ชื่อ" value="{{$admin->name}}" name="name">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                </p>
              </div>
              <div class="field">
                  <label class="label">อิเมลล์</label>
                <p class="control has-icons-left">
                  <input class="input" type="email" placeholder="อิเมลล์" value="{{$admin->email}}" name="email">
                  <span class="icon is-small is-left">
                    <i class="fas fa-at"></i>
                  </span>
                </p>
              </div>
              <div class="field">
                  <label class="label">เปลี่ยนรหัสผ่าน<span class="subtitle is-7"> (ปล่อยว่างเปล่าถ้าไม่ต้องการเปลี่ยนรหัสผ่าน)</span></label>
                <p class="control has-icons-left">
                  <input class="input" type="password" placeholder="เปลี่ยนรหัสผ่าน" name="password">
                  <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                  </span>
                </p>
              </div>
          <div class="field">
            <p class="control has-text-centered">
              <button type="submit" class="button is-success">
                    <span class="buttonspace">บันทึก</span>
              </button>
            </p>
          </div>
          </form>
        </div>
    </div>
</div>
<br>
<br>
</div>
