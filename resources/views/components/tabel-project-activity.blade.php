<div class="flex ml-11 mt-24 w-11/12">
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