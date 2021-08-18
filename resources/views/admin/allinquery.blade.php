<div class="column displaybox">
    @include('admin.navprofile')
    <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">แอดมิน</a></li>
            <li class="is-active"><a href="/profile">ข้อซักถามทั้งหมด</a></li>
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
        <div class="containerx">
            <div class="subtitle has-text-black-bis containerx">ข้อซักถามทั้งหมด</div>
            <div class="column tableshow containerx" style="overflow-x: auto">
                <p class="subtitle has-text-link is-7 is-pulled-right has-text-weight-bold is-uppercase">Count : {{$inquiries->count()}}</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ที่</th>
                            <th>ชื่อ</th>
                            <th>อิเมลล์</th>
                            <th>ประเภท</th>
                            <th>ข้อความ</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @if($inquiries->count() > 0) @foreach ($inquiries as $key=>$inquery)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$inquery->name}}</td>
                            <td>{{$inquery->email}}</td>
                            <td>{{$inquery->type}}</td>
                            <td>{{$inquery->message}}</td>
                            <td><a href="/admin/inquery/{{$inquery->id}}/reply" class="button is-link nounnounderlinebtn" target="_blank"><i class="far fa-comment-alt"></i></a></td>
                            <td>
                                <form action="/admin/inquery/{{$inquery->id}}/delete" method="post">
                                  @csrf
                                  <button class="button is-danger nounnounderlinebtn" type="submit" onclick="deleteMe();"><i class="far fa-trash-alt"></i></button>
                              </form>
                              </td>
                        </tr>
                        @endforeach @endif
                    </tbody>
                </table>
                {{ $inquiries->links() }}
            </div>
        </div>
    </div>
</div>
<br>
<br>
</div>
<script>
    function deleteMe() {
    event.preventDefault();
    var form = event.target.form;
    Swal.fire({
        title: 'Are you sure?',
        text: "Inquery will be deleted!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: "hsl(141, 71%, 48%)",
        cancelButtonColor: "hsl(348, 100%, 61%)",
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {

            form.submit();

        } else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
        ) {
            Swal.fire(
                'Cancelled',
                'Inquery is safe :)',
                'info'
            )
        }
    });
}
</script>
