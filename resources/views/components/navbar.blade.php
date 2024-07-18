<nav class="bg-white py-2 sticky" id="navbar">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">

        {{-- LOGO JAWARA2.0 --}}
        <div class="flex items-center">
            <span class="text-bg-button text-2xl font-bold subpixel-antialiased">JAWARA <span
                    class="text-yellow1">2.0</span></span>
        </div>
        {{-- LOGO JAWARA2.0 --}}

        {{-- NAVIGATION MENU --}}
        <div class="flex justify-center items-center space-x-8 mt-0 mb-0 ml-8">

            {{-- Dashboard --}}
            <a href="{{ route('dashboard') }}"
                class="{{ Request::routeIs('dashboard') ? 'text-bg-button underline underline-offset-15 decoration-bg-button decoration-5' : 'text-text3 hover:text-text2' }} px-3 py-1 text-md font-medium">Dashboard</a>

            {{-- Project Activity --}}
            <a href="{{ route('project-activity') }}"
                class="{{ Request::routeIs('project-activity') ? 'text-bg-button underline underline-offset-15 decoration-bg-button decoration-5' : 'text-text3 hover:text-text2' }} px-3 py-1 text-md font-medium">Project
                Activity</a>

            {{-- Document --}}
            <a href="{{ route('document') }}"
                class="{{ Request::routeIs('document') ? 'text-bg-button underline underline-offset-15 decoration-bg-button decoration-5' : 'text-text3 hover:text-text2' }} px-3 py-1 text-md font-medium">Document</a>
        </div>
        {{-- NAVIGATION MENU --}}

        {{-- RIGHT SECTION --}}
        <div class="flex items-center space-x-4">

            {{-- Notification --}}
            <div x-data="{ open: false }">
                <a href="#" @click.prevent="open = true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-6 hover:stroke-text2  ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </a>

                {{-- MODAL --}}
                <div x-show="open" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-end z-50">
                    <div class="bg-bg-forms p-2 rounded-lg shadow-xl mb-12 mr-10">
                        <div @click.away="open = false" class="w-auto h-96">

                            {{-- NOTIFICATION ITEMS --}}
                            <div>
                                {{-- Success --}}
                                <div id="toast-success" class="flex items-center w-full max-w-xs p-2 mb-2 text-gray-500"
                                    role="alert">
                                    <div
                                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 rounded-lg">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="sr-only">Check icon</span>
                                    </div>
                                    <div class="ml-3 text-sm font-normal text-text1">1 Document Was Approved</div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                        data-dismiss-target="#toast-success" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>

                                {{-- Success --}}
                                <div id="toast-success" class="flex items-center w-full max-w-xs p-2 mb-2 text-gray-500"
                                    role="alert">
                                    <div
                                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 rounded-lg">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="sr-only">Check icon</span>
                                    </div>
                                    <div class="ml-3 text-sm font-normal text-text1">10 PA Was Added by PTL FIRDA
                                    </div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                        data-dismiss-target="#toast-success" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>

                                {{-- Danger --}}
                                <div id="toast-danger" class="flex items-center w-full max-w-xs p-2 mb-2 text-gray-500"
                                    role="alert">
                                    <div
                                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 rounded-lg">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                                        </svg>
                                        <span class="sr-only">Error icon</span>
                                    </div>
                                    <div class="ml-3 text-sm font-normal text-text1">2 Documents Was Rejected</div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                        data-dismiss-target="#toast-danger" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>

                                {{-- Danger --}}
                                <div id="toast-danger"
                                    class="flex items-center w-full max-w-xs p-2 mb-2 text-gray-500" role="alert">
                                    <div
                                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 rounded-lg">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                                        </svg>
                                        <span class="sr-only">Error icon</span>
                                    </div>
                                    <div class="ml-3 text-sm font-normal text-text1">20 Documents Was Rejected by
                                        PTL</div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                        data-dismiss-target="#toast-danger" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>

                                {{-- Warning --}}
                                <div id="toast-warning" class="flex items-center w-full max-w-xs p-2 mb-2 text-text1"
                                    role="alert">
                                    <div
                                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 rounded-lg">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                                        </svg>
                                        <span class="sr-only">Warning icon</span>
                                    </div>
                                    <div class="ml-3 text-sm font-normal">3 Documents Need Approval PTL</div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                        data-dismiss-target="#toast-warning" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>

                                {{-- Warning --}}
                                <div id="toast-warning" class="flex items-center w-full max-w-xs p-2 mb-2 text-text1"
                                    role="alert">
                                    <div
                                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 rounded-lg">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                                        </svg>
                                        <span class="sr-only">Warning icon</span>
                                    </div>
                                    <div class="ml-3 text-sm font-normal">10 Documents Need Approval Asset</div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                        data-dismiss-target="#toast-warning" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>

                            </div>
                            {{-- NOTIFICATION ITEMS --}}

                        </div>
                    </div>
                </div>
                {{-- MODAL --}}

            </div>

            {{-- Profile --}}
            <div x-data="{ open: false }">
                <div class="flex items-center space-x-2 text-gray-300">
                    <a href="#" @click.prevent="open = true">
                        <div class="ml-2 mr-2 w-11 h-10 rounded-full overflow-hidden">
                            <img src="{{ asset('img/logo-profile.jfif') }}" alt="Profile Picture"
                                class="w-full h-full object-cover">
                        </div>
                    </a>

                    {{-- Nama perusahaan dan status --}}
                    <div>
                        <a href="{{ route('profile') }}">
                            <p class=" text-text1 text-sm font-normal hover:text-text2">PT Indohadetama</p>
                        </a>
                        <p class="text-sm font-normal">Mitra</p>
                    </div>
                </div>

                {{-- MODAL --}}
                <div x-show="open"
                    class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
                    <div class="bg-bg-forms p-3 rounded-lg shadow-xl">
                        <div class="w-80 h-80">
                            <img src="{{ asset('img/logo-profile.jfif') }}" alt="Profile Picture"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                        <button @click="open = false"
                            class="mt-5 bg-bg-button2 text-white px-4 py-2 rounded-lg">Close</button>
                    </div>
                </div>
                {{-- MODAL --}}

            </div>
            {{-- Profile --}}

        </div>
        {{-- RIGHT SECTION --}}

    </div>
</nav>
