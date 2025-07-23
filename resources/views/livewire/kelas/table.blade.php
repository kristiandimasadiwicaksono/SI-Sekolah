<div>
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
            <div>
              <h2 class="text-xl font-semibold text-gray-800">
                Data Guru
              </h2>
              <p class="text-sm text-gray-600">
                Kelola data guru dengan mudah.
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <div class="hs-dropdown [--placement:bottom-right] relative inline-block" data-hs-dropdown-auto-close="inside">
                  <button id="hs-as-table-table-filter-dropdown" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none " aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M7 12h10"/><path d="M10 18h4"/></svg>
                    Filter
                    <span class="ps-2 text-xs font-semibold text-blue-600 border-s border-gray-200 dark:border-neutral-700 dark:text-blue-500">
                      1
                    </span>
                  </button>
                  <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-48 z-10 bg-white shadow-md rounded-lg mt-2" role="menu" aria-orientation="vertical" aria-labelledby="hs-as-table-table-filter-dropdown">
                    <div class="divide-y divide-gray-200 ">
                      <label for="hs-as-filters-dropdown-all" class="flex py-2.5 px-3">
                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-as-filters-dropdown-all" checked>
                        <span class="ms-3 text-sm text-gray-800 dark:text-neutral-200">All</span>
                      </label>
                      <label for="hs-as-filters-dropdown-published" class="flex py-2.5 px-3">
                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-as-filters-dropdown-published">
                        <span class="ms-3 text-sm text-gray-800 dark:text-neutral-200">Published</span>
                      </label>
                      <label for="hs-as-filters-dropdown-pending" class="flex py-2.5 px-3">
                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-as-filters-dropdown-pending">
                        <span class="ms-3 text-sm text-gray-800 dark:text-neutral-200">Pending</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{ route('kelas.create') }}">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                  Tambah
                </a>
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex justify-center items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase text-gray-800">
                        NO
                    </span>
                  </div>
                </th>
                
                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex justify-center items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase text-gray-800">
                        Nama Kelas
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex justify-center items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase text-gray-800">
                      Nama Wali Kelas
                    </span>
                  </div>
                </th>
                
                <th scope="col" class="px-1 py-3 text-start">
                  <div class="flex justify-center items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase text-gray-800">
                        Aksi
                    </span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              @foreach ($kelas as $item)
              <tr>
                <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                  {{ $loop->iteration }}
                </td>
                <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                  {{ $item->nama_kelas }}
                </td>
                <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                  {{ $item->guru->nama }}
                </td>
                <td class="items-center px-1 py-4 whitespace-nowrap text-sm text-gray-800">
                    <div class="flex flex-row justify-center text-center gap-x-2">
                      <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium" href="#">
                        Edit
                      </a>
                      <a class="inline-flex items-center gap-x-1 text-sm text-red-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium" href="#">
                        Hapus
                      </a>
                    </div>
                  </td>
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