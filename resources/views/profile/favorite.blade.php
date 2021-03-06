<link rel="stylesheet" href="/css/bootstrap.css">
<div class="column displaybox">
    @include('profile.navprofile')
    <nav class="breadcrumb has-arrow-separator has-background-white" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">โปรไฟล์</a></li>
            <li class="is-active"><a href="/profile">รายการโปรด</a></li>
        </ul>
    </nav>
    <div class="containerx">
        <div class="grayme">
            <div class="row">
                    @if($favorites->count() > 0)
                    @foreach ($favorites as $favorite)
                        @include('profile.threadfavorite')
                    @endforeach
                    @else
                        @include('profile.noresult')
                    @endif
            </div>
            {{ $favorites->links() }}
        </div>

    </div>
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
                'Your favorites is safe :)',
                'info'
            )
        }
    });
}
</script>
