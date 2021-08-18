<div class="column displaybox profileback">
        @include('profile.navprofile')
        <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
            <ul>
                <li><a href="/profile">โปรไฟล์</a></li>
                <li class="is-active"><a href="/profile">ข้อเสนอของฉัน</a></li>
            </ul>
        </nav>
        <div class="column profileback tableshow">
          <div class="title is-5 has-text-success">ข้อเสนอของฉัน</div>
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
{{--                    <tr>--}}
{{--                        <th>No</th>--}}
{{--                        <th>Pro. ID</th>--}}
{{--                        <th>Pro. Name</th>--}}
{{--                        <th>Pro. Location</th>--}}
{{--                        <th>Pro. Type</th>--}}
{{--                        <th>Current Offer</th>--}}
{{--                        <th>Pro. Owner</th>--}}
{{--                        <th>Contact</th>--}}
{{--                    </tr>--}}
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
                          <td>{{$offer->property->user->name}}</td>
                          <td><a href="/profile/offers/{{$offer->id}}/contact/owner" class="button is-success nounnounderlinebtn">Contact</a></td>
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
                        <td><a href="" class="button is-success disabled nounnounderlinebtn" disabled>Contact</a></td>
                      </tr>
                    @endif
                  </tbody>
                </table>
          </div>
          {{ $offers->links() }}
        </div>
    </div>
