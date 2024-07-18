<div
    class="hero-section relative grid max-h-full min-h-full w-dvh bg-gradient-to-t from-sky-200 to-sky-300 rounded-t-3xl z-10">

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

    {{-- Here where your codes begin! --}}

    <div class="relative flex flex-col justify-start mt-20 mb-0">
        {{-- SEARCH BUTTON --}}
        <form class="form relative flex flex-col w-52 mx-12 my-3">
            <button class="absolute left-2 -translate-y-1/2 top-1/2 p-1">
                <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-labelledby="search" class="w-5 h-5 text-gray-700">
                    <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                        stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </button>
            <input
                class="input rounded-3xl px-8 py-2 border-2 border-transparent focus:outline-none focus:border-bg-button placeholder-gray-300 transition-all duration-300 shadow-md"
                placeholder="Search..." required="" type="text" />
            <button type="reset" class="absolute right-3 -translate-y-1/2 top-1/2 p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </form>
        {{-- SEARCH BUTTON --}}
    </div>

    {{-- Tabel --}}
    <div class="flex ml-11 mt-4 w-11/12">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-transparent rounded-xl">
                <thead>
                    <tr>
                        <th
                            class="border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            No</th>
                        <th
                            class=" border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            Action</th>
                        <th
                            class=" border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            ID</th>
                        <th
                            class=" border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            No PA</th>
                        <th
                            class=" border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            Nama Customer</th>
                        <th
                            class=" border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            Mitra Aktivasi</th>
                        <th
                            class=" border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            Doc Status</th>
                        <th
                            class=" border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            Doc Periksa</th>
                        <th
                            class=" border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            Column 9</th>
                        <th
                            class=" border-black border-b-2 px-6 py-4 text-left text-sm font-medium text-black uppercase tracking-wider">
                            Column 10</th>
                    </tr>
                </thead>
                <tbody class="">
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs">Data
                                {{ $i + 1 }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    {{-- Tabel --}}
</div>
