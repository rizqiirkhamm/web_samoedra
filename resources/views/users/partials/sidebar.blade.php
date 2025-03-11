<aside
    class="sidebar-wrapper fixed top-0 z-30 block h-full w-[308px] bg-white dark:bg-darkblack-600 sm:hidden xl:block">
    <div
        class="sidebar-header relative z-30 flex h-[108px] w-full items-center border-b border-r border-b-[#F7F7F7] border-r-[#F7F7F7] pl-[50px] dark:border-darkblack-400">
        <a href="index.html">
            <img src={{ asset("images/logo/logo-color.svg") }} class="block dark:hidden" alt="logo" />
            <img src={{ asset("./assetsimages/logo/logo-white.svg") }} class="hidden dark:block" alt="logo" />
        </a>
        <button type="button" class="drawer-btn absolute right-0 top-auto" title="Ctrl+b">
            <span>
                <svg width="16" height="40" viewBox="0 0 16 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z" fill="#22C55E" />
                    <path d="M10 15L6 20.0049L10 25.0098" stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </span>
        </button>
    </div>
    <div
        class="sidebar-body overflow-style-none relative z-30 h-screen w-full overflow-y-scroll pb-[200px] pl-[48px] pt-[14px]">
        <div class="nav-wrapper mb-[36px] pr-[50px]">
            <div class="item-wrapper mb-5">
                <h4
                    class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700 dark:border-darkblack-400 dark:text-bgray-50">
                    Menu
                </h4>
                <ul class="mt-2.5">

                    @php
                       $PermissionUser = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'User');
                        $PermissionRole = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Role');
                        $PermissionBermain = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Bermain');
                        $PermissionBimbel = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Bimbel');
                        $PermissionBerita = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Berita');
                    @endphp
                    <li class="item py-[12px] text-bgrayr-900 dark:text-white">
                        <a href="{{ url('/dashboard') }}" class=" @if (Request::segment(1) != 'dashboard') @endif">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">{{ _('Dashboard') }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @if(!empty($PermissionBermain))
                    <li class="item py-[12px] text-bgray-900 dark:text-white">
                        <a href="{{ url('/bermain') }}" class=" @if (Request::segment(1) != 'bermain') @endif">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">Bermain</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endif
                    @if(!empty($PermissionBimbel))
                    <li class="item py-[12px] text-bgray-900 dark:text-white">
                        <a href="{{ url('/bimbel') }}" class=" @if (Request::segment(1) != 'bimbel') @endif">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">Bimbel</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endif
                    @if(!empty($PermissionBerita))
                    <li class="item py-[12px] text-bgray-900 dark:text-white">
                        <a href="{{ url('/berita') }}" class=" @if (Request::segment(1) != 'berita') @endif">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">Berita</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endif
                    @if(!empty($PermissionUser))
                    <li class="item py-[12px] text-bgray-900 dark:text-white">
                        <a href="{{ url('/user') }}" class=" @if (Request::segment(1) != 'user') @endif">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">User</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endif
                    @if(!empty($PermissionRole))
                    <li class="item py-[12px] text-bgray-900 dark:text-white">
                        <a href="{{ Route('list') }}" class=" @if (Request::segment(1) != 'role') @endif">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                <span class="item-text text-lg font-medium leading-none">Role</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endif
                    @if(!empty($PermissionLayanan))
                    <li class="item py-[12px] text-bgray-900 dark:text-white">
                        <a href="{{ Route('list') }}" class=" @if (Request::segment(1) != 'layanan') @endif">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                <span class="item-text text-lg font-medium leading-none">Layanan</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                @endif

            </div>
        </div>
    </div>
</aside>

<div style="z-index: 25" class="aside-overlay fixed left-0 top-0 block h-full w-full bg-black bg-opacity-30 sm:hidden">
</div>

{{-- <aside class="relative hidden w-[96px] bg-white dark:bg-black sm:block">
    <div class="sidebar-wrapper-collapse relative top-0 z-30 w-full">
        <div
            class="sidebar-header sticky top-0 z-20 flex h-[108px] w-full items-center justify-center border-b border-r border-b-[#F7F7F7] border-r-[#F7F7F7] bg-white dark:border-darkblack-500 dark:bg-darkblack-600">
            <a href="index.html">
                <img src="{{asset('/images/logo/logo-short.svg')}}" class="block dark:hidden" alt="logo" />
                <img src="{{asset('/images/logo/logo-short-white.svg')}}" class="hidden dark:block" alt="logo" />
            </a>
        </div>
        <div class="sidebar-body w-full pt-[14px]">
            <div class="flex flex-col items-center">
                <div class="nav-wrapper mb-[36px]">
                    <div class="item-wrapper mb-5">
                        <ul class="mt-2.5 flex flex-col items-center justify-center">
                            <li class="item px-[43px] py-[11px]">
                                <a href="index.html">
                               <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li class="item px-[43px] py-[11px]">
                                <a href="index.html">
                               <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                    </div>
                </div>
            </div>

        </div>
    </div>
</aside> --}}
