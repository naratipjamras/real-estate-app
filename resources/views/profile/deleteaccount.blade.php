<div class="column displaybox">
    @include('profile.navprofile')
    <nav class="breadcrumb has-arrow-separator has-background-white" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">โปรไฟล์</a></li>
            <li class="is-active"><a href="/profile">ลบบัญชี</a></li>
        </ul>
    </nav>
    <div class="card cardmargin">
        <div class="containerx">
            <h1 class="title has-text-centered">ลบบัญชี</h1>
            <div class="centerinputbox has-text-centered">
                <div class="subtitle">คุณต้องการลบบัญชี ซึ่งบัญชีของคุณจะไม่สามารถกู้กลับคืนได้</div>
                <div class="subtitle is-6 has-text-link has-text-weight-bold"></div>
                <form action="/profile/user/{{auth()->user()->id}}/delete" method="post">
                    @csrf
                    <button class="button is-danger" type="submit" onclick="deleteMe();">ลบบัญชี</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteMe() {
    event.preventDefault();
    var form = event.target.form;
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this",
        footer: "Improtant: Your all properties will also be deteled!",
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
                'Your account is safe :)',
                'info'
            )
        }
    });
}
</script>
