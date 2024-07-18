    {{-- HERO --}}
    <div
        class="hero-section relative grid max-h-full min-h-full w-dvh bg-gradient-to-t from-sky-200 to-sky-300 rounded-t-3xl z-10">

        {{-- Profile --}}
        <div class="bg-white shadow-lg rounded-lg shadow-bg-button relative m-10 mx-10 my-10">

            <div class="flex items-start justify-between p-5 border-b rounded-t">
                <h3 class="text-xl font-bold flex gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    My Account
                </h3>
                {{-- <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-toggle="product-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button> --}}
            </div>

            <div class="p-6 space-y-6">

                <form action="#">
                    <div class="grid gap-3 justify-center">

                        <div class="w-96">
                            <label for="first-name"
                                class="text-sm font-medium mb-2 flex gap-2 items-center text-text1"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6 stroke-text1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                                </svg>
                                First
                                Name</label>
                            <input
                                class="bg-gray-50 text-zinc-600 font-mono ring-1 ring-zinc-400 focus:ring-2 focus:ring-bg-button outline-none duration-300 rounded-lg w-full p-2.5 shadow-md focus:shadow-lg focus:shadow-sky-400"
                                autocomplete="off" placeholder="" name="input-first-name" type="text" />
                        </div>

                        <div class="">
                            <label for="last-name"
                                class="text-sm font-medium mb-2 flex gap-2 items-center text-text1"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6 stroke-text1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                                </svg>
                                Last
                                Name</label>
                            <input
                                class="bg-gray-50 text-zinc-600 font-mono ring-1 ring-zinc-400 focus:ring-2 focus:ring-bg-button outline-none duration-300 rounded-lg w-full p-2.5 shadow-md focus:shadow-lg focus:shadow-sky-400"
                                autocomplete="off" placeholder="" name="input-last-name" type="text" />
                        </div>

                        <div class="">
                            <label for="photo"
                                class="text-sm font-medium text-gray-900 mb-2 flex items-center gap-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6 stroke-text1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                                Photo</label>
                            <button type="button" id="button-photo"
                                class="max-w-[140px] py-2 px-4 flex justify-center items-center hover:bg-sky-300 focus:ring-sky-400 focus:ring-offset-sky-200 text-text1 text-md w-full transition ease-in duration-300 text-center font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                </svg>
                                Upload
                            </button>
                        </div>

                        <div class=" ">
                            <label for="email"
                                class="text-sm font-medium text-gray-900 mb-2 flex items-center gap-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 stroke-text1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                                </svg>
                                User
                                E-Mail</label>
                            <input
                                class="bg-gray-50 text-zinc-600 font-mono ring-1 ring-zinc-400 focus:ring-2 focus:ring-bg-button outline-none duration-300 rounded-lg w-full p-2.5 shadow-md focus:shadow-lg focus:shadow-sky-400"
                                autocomplete="off" placeholder="example@domain.com" name="input-email" type="text" />
                        </div>

                        <div class="">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Language</label>
                            <div class="dropdown inline-block relative">
                                <button
                                    class="bg-white border-2 text-text1 font-semibold py-2 px-4 rounded-lg border-zinc-400 inline-flex items-center">
                                    <span class="mr-1 ml-1 font-medium text-sm text-text1">Choose Your Language</span>
                                    <svg class="fill-current h-4 w-5 stroke-text1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu absolute hidden text-text1 pt-1 z-30">
                                    <li class=""><a
                                            class="rounded-t bg-gray-200 hover:bg-gray-300 py-2 px-4 block whitespace-no-wrap"
                                            href="#">Indonesia</a></li>
                                    <li class=""><a
                                            class="bg-gray-200 hover:bg-gray-300 py-2 px-4 block whitespace-no-wrap"
                                            href="#">Malaysia</a></li>
                                    <li class=""><a
                                            class="rounded-b bg-gray-200 hover:bg-gray-300 py-2 px-4 block whitespace-no-wrap"
                                            href="#">English</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Company</label>
                            <div class="dropdown inline-block relative">
                                <button
                                    class="bg-white border-2 text-text1 font-semibold py-2 px-4 rounded-lg border-zinc-400 inline-flex items-center">
                                    <span class="mr-1 ml-1 font-medium text-sm">Choose Your Company</span>
                                    <svg class="fill-current h-4 w-5 stroke-text1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu absolute hidden text-text1 pt-1 z-30">
                                    <li class=""><a
                                            class="rounded-t bg-gray-200 hover:bg-gray-300 py-2 px-4 block whitespace-no-wrap"
                                            href="#">PT INDOHADETAMA</a></li>
                                    <li class=""><a
                                            class="bg-gray-200 hover:bg-gray-300 py-2 px-4 block whitespace-no-wrap"
                                            href="#">PT GSP</a></li>
                                    <li class=""><a
                                            class="rounded-b bg-gray-200 hover:bg-gray-300 py-2 px-4 block whitespace-no-wrap"
                                            href="#">HALEYORA POWER</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class=" my-2">
                            <label class="inline-flex items-center" for="indigoCheckBox">
                                <div class="relative inline-block">
                                    <input type="checkbox"
                                        class="peer h-6 w-12 cursor-pointer appearance-none rounded-full border border-zinc-400 bg-white checked:border-bg-button focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-bg-button focus-visible:ring-offset-2">
                                    <span
                                        class="pointer-events-none absolute left-1 top-1 block h-4 w-4 rounded-full bg-zinc-600 transition-all duration-300 peer-checked:left-7 peer-checked:bg-bg-button"></span>
                                </div>
                                <span class="ml-2">Disable Email Notifications</span>
                            </label>
                        </div>

                        <div class=" my-2">
                            <label class="inline-flex items-center" for="indigoCheckBox">
                                <div class="relative inline-block">
                                    <input type="checkbox"
                                        class="peer h-6 w-12 cursor-pointer appearance-none rounded-full border border-zinc-400 bg-white checked:border-bg-button focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-bg-button focus-visible:ring-offset-2">
                                    <span
                                        class="pointer-events-none absolute left-1 top-1 block h-4 w-4 rounded-full bg-zinc-600 transition-all duration-300 peer-checked:left-7 peer-checked:bg-bg-button"></span>
                                </div>
                                <span class="ml-2">Turn Off Internal Notification</span>
                            </label>
                        </div>

                        <div class=" my-2">
                            <label class="inline-flex items-center" for="indigoCheckBox">
                                <div class="relative inline-block">
                                    <input type="checkbox"
                                        class="peer h-6 w-12 cursor-pointer appearance-none rounded-full border border-zinc-400 bg-white checked:border-bg-button focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-bg-button focus-visible:ring-offset-2">
                                    <span
                                        class="pointer-events-none absolute left-1 top-1 block h-4 w-4 rounded-full bg-zinc-600 transition-all duration-300 peer-checked:left-7 peer-checked:bg-bg-button"></span>
                                </div>
                                <span class="ml-2">Disable the highlighting of unread</span>
                            </label>
                        </div>
                    </div>
                </form>

                <div class="justify-center flex">
                    <button
                        class="flex items-center bg-white border-2 rounded-lg gap-1 px-4 py-2 cursor-pointer text-text1 font-semibold tracking-widest hover:bg-bg-button duration-300 hover:gap-2 hover:translate-x-3 w-96">
                        Save All
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>

                    </button>

                </div>

            </div>
        </div>
        {{-- profile --}}

    </div>
    {{-- HERO --}}
