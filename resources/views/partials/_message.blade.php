@unless(session('message') === null)
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-0"
         x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         x-transition:leave.duration.1000ms
         xmlns:x-transition="http://www.w3.org/1999/xhtml">
        <div class="p-2"><i class="fa-solid fa-bell"></i>{{session('message')}}</div>
    </div>
@endunless
