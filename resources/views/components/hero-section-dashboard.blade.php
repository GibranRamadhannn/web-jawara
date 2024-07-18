<div
    class="hero-section relative grid max-h-full min-h-full w-dvh bg-gradient-to-t from-sky-200 to-sky-300 rounded-t-3xl z-10">
    <div>
        {{-- Header --}}
        <div class="absolute rounded-t-3xl top-0 left-0 right-0 h-24 flex justify-between items-center">
            {{-- PROFILE --}}
            <div class="flex items-start space-x-2 text-gray-300 mx-10">
                {{-- Nama perusahaan --}}
                <div class="mt-5 ml-3">
                    <p class=" text-text2 text-2xl font-semibold">PT Indohadetama</p>
                </div>
                {{-- Nama perusahaan --}}
            </div>
            {{-- PROFILE --}}

            {{-- BREAD CRUMBS --}}
            <div class="mr-14 mt-5">
                <ul class="flex gap-2 items-end font-normal text-sm">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="{{ Request::routeIs('dashboard') ? 'text-text1' : 'text-gray-500 hover:text-text1' }} px-2 py-1">
                            Dashboard
                        </a>
                    </li>
                    <li class="h-4 border-r border-gray-600 -skew-x-12"></li>
                    <li>
                        <a href="{{ route('project-activity') }}"
                            class="{{ Request::routeIs('project-activity') ? 'text-text1' : 'text-gray-500 hover:text-text1' }} px-2 py-1">
                            Project Activity
                        </a>
                    </li>
                    <li class="h-4 border-r border-gray-600 -skew-x-12"></li>
                    <li>
                        <a href="{{ route('document') }}"
                            class="{{ Request::routeIs('document') ? 'text-text1' : 'text-gray-500 hover:text-text1' }} px-2 py-1">
                            Documents
                        </a>
                    </li>
                </ul>
            </div>
            {{-- BREAD CRUMBS --}}
        </div>
        {{-- Header --}}

        {{-- Dashboard Field --}}
        <x-dashboard-field></x-dashboard-field>


        <div class="flex gap-4 bg-transparent">
            {{-- Tabel Dashboard --}}
            <x-tabel-dashboard></x-tabel-dashboard>

            {{-- Recent Activity --}}
            <x-recent-activity></x-recent-activity>
        </div>
    </div>
</div>
