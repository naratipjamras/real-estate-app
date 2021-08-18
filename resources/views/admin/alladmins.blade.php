<div class="column displaybox">
    @include('admin.navprofile')
    <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">แอดมิน</a></li>
            <li class="is-active"><a href="/profile">แอดมินทั้งหมด</a></li>
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
            <div class="subtitle has-text-black-bis">แอดมินทั้งหมด</div>
            <a href="/admin/admin/add" class="button is-dark nounnounderlinebtn is-pulled-right">เพิ่มแอดมินใหม่</a>
            <div class="column tableshow style=" overflow-x: auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ที่</th>
                            <th>รหัส</th>
                            <th>ชื่อแอดมิน</th>
                            <th>อิเมลล์</th>
                            <th>ซูเปอร์แอดมิน</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach ($admins as $key=>$admin)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$admin->id}}</td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            @if ($admin->issuper == 1)
                            <td>{{('Yes')}}</td>
                            @else
                            <td>{{('No')}}</td>
                            @endif

                            <td><a href="/admin/admin/{{$admin->id}}/edit" class="button is-warning nounnounderlinebtn"
                                    target="_blank"><i class="fa fa-edit"></i></a></td>
                            <td>
                                <form action="/admin/admin/{{$admin->id}}/delete" method="post">
                                    @csrf
                                    <button class="button is-danger nounnounderlinebtn" type="submit"
                                        onclick="deleteMe();"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
            text: "You won't be able to revert this!",
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
                    'Admin account is safe :)',
                    'info'
                )
            }
        });
    }
</script>
