<div class="column displaybox profileback">
        @include('profile.navprofile')
        <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
            <ul>
                <li><a href="/profile">โปรไฟล์</a></li>
                <li class="is-active"><a href="/profile">แดชบอร์ด</a></li>
            </ul>
        </nav>
        @if($user->NIC==null || $user->description==null || $user->address==null || $user->city==null || $user->gender==null || $user->NIC==null || $user->birthday==null || $user->phoneNo==null)
        <div class="columns is-mobile is-centered content">
            <div class="column is-half">
                <div class="notification is-warning">
                    <button class="delete"></button> {{ __('กรุณากรอกข้อมูลโปรไฟล์ให้ครบ,')
                    }} <a href="/profile/editaccount">คลิกเพื่อกรอกข้อมูล</a></div>

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
      @endif
        <div class="columns dashboxes profileback">
            <div class="column has-text-centered selecticon" onclick="location.href='/add'">
              <span class="icon has-text-centered is-large">
                <i class="fas fa-home fa-4x"></i>
              </span>
              <h6 class="is-uppercase has-text-weight-bold">ขายบ้านของท่าน</h6>
            </div>
            <div class="column has-text-centered selecticon" onclick="location.href='/profile/myfavorite'">
              <span class="icon has-text-centered is-large">
                <i class="fas fa-heart fa-4x"></i>
              </span>
              <h6 class="is-uppercase has-text-weight-bold">บ้านที่โปรด</h6>
            </div>
            <div class="column has-text-centered selecticon" onclick="location.href='/profile/message'">
              <span class="icon has-text-centered is-large">
                <i class="fas fa-comments fa-4x"></i>
              </span>
              <h6 class="is-uppercase has-text-weight-bold">กล่องข้อความ</h6>
            </div>
            <div class="column has-text-centered selecticon" onclick="location.href='/profile/editaccount'">
              <span class="icon has-text-centered is-large">
                <i class="fas fa-edit fa-4x"></i>
              </span>
              <h6 class="is-uppercase has-text-weight-bold">แก้ไขโปรไฟล์</h6>
            </div>
            <div class="column has-text-centered selecticon" onclick="location.href='/profile/sold'">
              <span class="iicon has-text-centered is-large">
                <i class="far fa-check-circle fa-4x"></i>
              </span>
              <h6 class="is-uppercase has-text-weight-bold">บ้านที่ขายแล้ว</h6>
            </div>
            <div class="column has-text-centered selecticon" onclick="location.href='/'">
              <span class="icon has-text-centered is-large">
                <i class="fas fa-search fa-4x"></i>
              </span>
              <h6 class="is-uppercase has-text-weight-bold">ค้นหา</h6>
            </div>
        </div>
        <div class="column profileback tableshow">
          <div class="title is-5 has-text-success">เสนอล่าสุด</div>
          <div style="overflow-x: auto;">
          <table class="table">
            <thead>
              <tr>
                <th>ที่</th>
                <th>รหัสสินทรัพย์</th>
                <th>ชื่อสินทรัพย์</th>
                <th>ที่ตั้งสินทรัพย์</th>
                <th>ประเภทสินทรัพย์</th>
                <th>ผู้เสนอ</th>
                <th>ชื่อผู้ใช้ที่เสนอ</th>
                <th>ติดต่อ</th>
              </tr>
            </thead>
            <tfoot>
{{--              <tr>--}}
{{--                  <th>No</th>--}}
{{--                  <th>Pro. ID</th>--}}
{{--                  <th>Pro. Name</th>--}}
{{--                  <th>Pro. Location</th>--}}
{{--                  <th>Pro. Type</th>--}}
{{--                  <th>Current Offer</th>--}}
{{--                  <th>Offered User</th>--}}
{{--                  <th>Contact</th>--}}
{{--              </tr>--}}
            </tfoot>
            <tbody>
              @if(count($offers))
                  @foreach ($offers as $key=>$offer)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$offer->property_id}}</td>
                    <td>{{$offer->property->name}}</td>
                    <td>{{$offer->property->city}}</td>
                    <td>{{$offer->property->type}}</td>
                    <td>{{number_format($offer->offerAmount,2)}}</td>
                    <td>{{userNameById($offer->offeredUser)}}</td>
                    <td><a href="/profile/offers/{{$offer->id}}/contact" class="button is-success nounnounderlinebtn">ติดต่อ</a></td>
                  </tr>
                @endforeach
              @else
              <tr>
                  <td class="has-text-danger">-</td>
                  <td class="has-text-danger">-</td>
                  <td class="has-text-danger">-</td>
                  <td class="has-text-danger">-</td>
                  <td class="has-text-danger">-</td>
                  <td class="has-text-danger">-</td>
                  <td class="has-text-danger">-</td>
                  <td><a href="" class="button is-success disabled nounnounderlinebtn" disabled>ติดต่อ</a></td>
                </tr>
              @endif
            </tbody>
          </table>
          </div>
          <a href="/profile/alloffers" class="button is-link nounnounderlinebtn is-pulled-right">ดูบ้านที่เสนอทั้งหมด</a>
        </div>
    </div>
