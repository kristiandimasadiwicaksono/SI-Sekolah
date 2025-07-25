<div>
  <form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
      @csrf
      @method('PUT')
    <!-- Section -->
    <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
      <label for="nama" class="inline-block text-sm font-medium">
          Nama Lengkap
      </label>
      <div class="mt-1 mb-2 space-y-3">
        <input id="nama" name="nama" type="text" value="{{ old('nama', $siswa->nama) }}" class="py-1.5 sm:py-2 px-3 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Masukkan nama lengkap" required>
        @error('nama')
          <div class="!mt-1 text-xs text-red-500"> nama sudah terdaftar </div>
        @enderror
      </div>
      <label for="nis" class="inline-block text-sm font-medium">
          NIS
      </label>
      <div class="mt-1 mb-2 space-y-3">
        <input id="nis" name="nis" type="number" value="{{ old('nis', $siswa->nis) }}" class="no-spinner py-1.5 sm:py-2 px-3 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Masukkan NIS" required>
        @error('nis')
          <div class="!mt-1 text-xs text-red-500"> NIS sudah terdaftar </div>
        @enderror
      </div>
      <label for="kelas" class="inline-block text-sm font-medium">
          Kelas
      </label>
      <div class="mt-1 space-y-3">
          <select name="id_kelas" class="py-1.5 sm:py-2 px-3 pe-9 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
          <option value="{{ old('id_kelas', $siswa->id_kelas) ? '' : 'selected' }}" disabled selected>Kelas</option>
          @foreach ($kelas as $item)
            <option value="{{ $item->id }}" {{ old('id_kelas', $siswa->id_kelas) == $item->id ? 'selected' : '' }}>{{ $item->nama_kelas }}</option>
          @endforeach
          </select>
      </div>
    </div>
    <div class="mt-5 flex justify-end gap-x-2">
        <a href="{{ route('siswa.index') }}" class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
            Cancel
        </a>
        <button type="submit" class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Submit
        </button>
    </div>
    <!-- End Section -->
  </form>
</div>
