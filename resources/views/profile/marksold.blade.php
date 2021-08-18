<div class="column displaybox profileback">
    @include('profile.navprofile')
    <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">ข้อมูลโปรไฟล์</a></li>
            <li class="is-active"><a href="/profile">ขายแล้ว</a></li>
        </ul>
    </nav>
    <div class="column profileback tableshow">
        <div class="title is-5 has-text-success">ขายแล้ว</div>
        <div style="overflow-x: auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th>ที่</th>
                        <th>รหัสสินทรัพย์</th>
                        <th>ชื่อสินทรัพย์</th>
                        <th>ที่ตั้งสินทรัพย์</th>
                        <th>ประเภทสินทรัพย์</th>
                        <th>จำนวน</th>
                        <th>ขายแล้ว</th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                    @if(count($properties)) @foreach ($properties as $key=>$property)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$property->id}}</td>
                        <td>{{$property->name}}</td>
                        <td>{{$property->city}}</td>
                        <td>{{$property->type}}</td>
                        <td>{{number_format($property->amount,2)}}</td>
                        @if(strcmp($property->availability,"YES") == 0)
                            <td><a href="/profile/sold/{{$property->id}}/marksold" class="button is-danger nounnounderlinebtn">ขายแล้ว</a></td>
                        @else
                            <td><a href="/profile/sold/{{$property->id}}/markunsold" class="button is-success nounnounderlinebtn">ยังไม่ได้ขาย</a></td>
                        @endif
                    </tr>
                    @endforeach @else
                    <tr>
                        <td class="has-text-danger">-</td>
                        <td class="has-text-danger">-</td>
                        <td class="has-text-danger">-</td>
                        <td class="has-text-danger">-</td>
                        <td class="has-text-danger">-</td>
                        <td class="has-text-danger">-</td>
                        <td class="has-text-danger">-</td>
                        <td><a href="" class="button is-success disabled nounnounderlinebtn" disabled>ติดต่อเรา</a></td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        {{ $properties->links() }}
    </div>
</div>
