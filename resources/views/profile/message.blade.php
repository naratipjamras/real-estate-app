<div class="column displaybox">
    @include('profile.navprofile')
    <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">โปรไฟล์</a></li>
            <li class="is-active"><a href="/message">ข้อความ</a></li>
        </ul>
    </nav>
    <div class="containerx">
        <div class="title is-5 has-text-link">ข้อความที่ยังไม่ได้อ่าน</div>
        <div class="column">
                <div class="div" style="margin-bottom: 6%;">
                    <a href="/profile/message/all" class="button is-link nounnounderlinebtn is-pulled-right">ดูข้อความทั้งหมด</a>
                </div>
                @if($messages->count() > 0)
                @foreach ($messages as $message)
                    @include('profile.messagelayout')
                @endforeach
                @else
                    @include('profile.noresult')
                @endif
            </div>
            {{ $messages->links() }}
    </div>
</div>
