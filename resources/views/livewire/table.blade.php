<div>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden">

                <!-- Table -->
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex justify-center items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase text-gray-800">
                                Nama
                            </span>
                        </div>
                        </th>
                        
                        <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex justify-center items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase text-gray-800">
                                NIS
                            </span>
                        </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex justify-center items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase text-gray-800">
                                Kelas
                            </span>
                        </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex justify-center items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase text-gray-800">
                                Wali Kelas
                            </span>
                        </div>
                        </th>
                        
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($data as $item)
                        <tr>
                            <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $item->nama_siswa }}
                            </td>
                            <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $item->nis }}
                            </td>
                            <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $item->nama_kelas }}
                            </td>
                            <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $item->nama_guru }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table -->

                <!-- Footer -->
                <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                    <div>
                    <p class="text-sm text-gray-600">
                        <span class="font-semibold text-gray-800">12</span> results
                    </p>
                    </div>

                    <div>
                    <div class="inline-flex gap-x-2">
                        <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                        Prev
                        </button>

                        <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50">
                        Next
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </button>
                    </div>
                    </div>
                </div>
                <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
</div>
