<div
    class="hero-section relative grid max-h-full min-h-screen w-dvh bg-gradient-to-t from-sky-200 to-sky-300 rounded-t-3xl z-10">
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

        {{-- MENU SECTION --}}
        <div class="grid grid-cols-1 gap-4 my-24 mx-12" x-data="{ openModal: false, selectedMenu: null }">

            {{-- INFO --}}
            <div class="flex flex-col" :class="{ 'mb-2': openModal && selectedMenu === 'info' }">
                <div class="flex rounded-2xl justify-between items-center bg-sky-400 h-12">
                    <div class="flex flex-col ml-8">
                        <label for="Info" class="font-semibold text-lg text-white">Info</label>
                    </div>
                    <div class="flex flex-col mr-4">
                        <a href="#" @click.prevent="selectedMenu = 'info'; openModal = !openModal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-7 stroke-white"
                                :class="{ 'rotate-180': openModal && selectedMenu === 'info' }">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5
                                8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Modal Content --}}
                <div x-show="openModal && selectedMenu === 'info'" class="mt-2 p-4 bg-white rounded-md shadow">
                    <div class="grid grid-cols-1 justify-start h-auto">
                        <div class="flex flex-col justify-items-start">
                            <h1>ID</h1>
                            <h1>Date Added</h1>
                            <h1>Date Updated</h1>
                            <h1>Created By</h1>
                            <h1>Nama Customer</h1>
                            <h1>Alamat</h1>
                            <br>
                            <h1>Mitra Aktivasi</h1>
                            <h1>Status</h1>
                            <br>
                            <h1>Doc Status</h1>
                            <h1>Doc Periksa</h1>
                            <h1>Doc Reupload</h1>
                        </div>
                    </div>
                </div>
            </div>

            {{-- DOKUMEN ATKIVASI --}}
            <div class="flex flex-col" :class="{ 'mb-2': openModal && selectedMenu === 'dokumen' }">
                <div class="flex rounded-2xl justify-between items-center bg-sky-400 h-12">
                    <div class="flex flex-col ml-8">
                        <label for="Dokumen" class="font-semibold text-lg text-white">Dokumen Aktivasi</label>
                    </div>
                    <div class="flex flex-col mr-4">
                        <a href="#" @click.prevent="selectedMenu = 'dokumen'; openModal = !openModal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-7 stroke-white"
                                :class="{ 'rotate-180': openModal && selectedMenu === 'dokumen' }">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Modal Content --}}
                <div x-show="openModal && selectedMenu === 'dokumen'" class="mt-2 p-4 bg-white rounded shadow">
                    <p>Informasi lebih lanjut tentang Dokumen Aktivasi...</p>
                    <button class="mt-4 px-4 py-2 bg-red-500 text-white rounded"
                        @click="openModal = false">Close</button>
                </div>
                <div x-show="openModal && selectedMenu === 'dokumen'" class="mt-2 p-4 bg-white rounded shadow">
                    <p>Informasi lebih lanjut tentang Dokumen Aktivasi...</p>
                    <button class="mt-4 px-4 py-2 bg-red-500 text-white rounded"
                        @click="openModal = false">Close</button>
                </div>
            </div>

            {{-- QUALITY CONTROL --}}
            <div class="flex flex-col" :class="{ 'mb-24': openModal && selectedMenu === 'qc' }">
                <div class="flex rounded-2xl justify-between items-center bg-sky-400 h-12">
                    <div class="flex flex-col ml-8">
                        <label for="Quality Control" class="font-semibold text-lg text-white">Quality Control
                            (QC)</label>
                    </div>
                    <div class="flex flex-col mr-4">
                        <a href="#" @click.prevent="selectedMenu = 'qc'; openModal = !openModal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-7 stroke-white"
                                :class="{ 'rotate-180': openModal && selectedMenu === 'qc' }">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Modal Content --}}
                <div x-show="openModal && selectedMenu === 'qc'" class="mt-4 p-4 bg-white rounded shadow">
                    <p>Informasi lebih lanjut tentang Quality Control...</p>
                    <button class="mt-4 px-4 py-2 bg-red-500 text-white rounded"
                        @click="openModal = false">Close</button>
                </div>
            </div>

            {{-- BAPS --}}
            <div class="flex flex-col" :class="{ 'mb-24': openModal && selectedMenu === 'baps' }">
                <div class="flex rounded-2xl justify-between items-center bg-sky-400 h-12">
                    <div class="flex flex-col ml-8">
                        <label for="BAPS" class="font-semibold text-lg text-white">BAPS</label>
                    </div>
                    <div class="flex flex-col mr-4">
                        <a href="#" @click.prevent="selectedMenu = 'baps'; openModal = !openModal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-7 stroke-white"
                                :class="{ 'rotate-180': openModal && selectedMenu === 'baps' }">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Modal Content --}}
                <div x-show="openModal && selectedMenu === 'baps'" class="mt-4 p-4 bg-white rounded shadow">
                    <p>Informasi lebih lanjut tentang BAPS...</p>
                    <button class="mt-4 px-4 py-2 bg-red-500 text-white rounded"
                        @click="openModal = false">Close</button>
                </div>
            </div>

        </div>
        {{-- MENU SECTION --}}

    </div>
</div>
