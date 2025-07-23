<div>
    <form method="POST" action="{{ route('kelas.store') }}">
        @csrf
      <!-- Section -->
      <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
        <label for="nama" class="inline-block text-sm font-medium">
            Nama Kelas
        </label>
        <div class="mt-1 mb-2 space-y-3">
          <input id="nama_kelas" name="nama_kelas" type="text" value="{{ old('nama_kelas') }}" class="py-1.5 sm:py-2 px-3 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Masukkan nama kelas" required>
          @error('nama_kelas')
            <div class="!mt-1 text-xs text-red-500"> kelas sudah terdaftar </div>
          @enderror
        </div>

        <label for="guru" class="inline-block text-sm font-medium">
            Wali Kelas
        </label>
        <div class="mt-1 space-y-3">
            <select name="id_guru" class="py-1.5 sm:py-2 px-3 pe-9 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            <option value="" disabled selected {{ old('id_guru') ? '' : 'selected' }}>Guru</option>
            @foreach ($guru as $item)
              <option value="{{ $item->id }}" {{ old('id_guru') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
            @endforeach
            </select>
            @error('id_guru')
                <div class="!mt-1 text-xs text-red-500"> Guru sudah terdaftar </div>
            @enderror
        </div>
      </div>
      <div class="mt-5 flex justify-end gap-x-2">
          <a href="{{ route('kelas.index') }}" class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
              Cancel
          </a>
          <button type="submit" class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
              Submit
          </button>
      </div>
      <!-- End Section -->
    </form>
</div>
