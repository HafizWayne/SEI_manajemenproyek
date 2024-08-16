<!-- Tambahkan link ke Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="max-w-lg mx-auto my-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Tambah Proyek Baru</h1>
    <form action="<?php echo site_url('proyek/store'); ?>" method="post" class="bg-white p-8 rounded-lg shadow-lg">

        <div class="mb-6">
            <label for="namaProyek" class="block text-gray-700 font-semibold mb-2">Nama Proyek:</label>
            <input type="text" name="namaProyek" id="namaProyek" required 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="client" class="block text-gray-700 font-semibold mb-2">Client:</label>
            <input type="text" name="client" id="client" required 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="tglMulai" class="block text-gray-700 font-semibold mb-2">Tanggal dan Waktu Mulai:</label>
            <input type="datetime-local" name="tglMulai" id="tglMulai" required 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="tglSelesai" class="block text-gray-700 font-semibold mb-2">Tanggal dan Waktu Selesai:</label>
            <input type="datetime-local" name="tglSelesai" id="tglSelesai" required 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="pimpinanProyek" class="block text-gray-700 font-semibold mb-2">Pimpinan Proyek:</label>
            <input type="text" name="pimpinanProyek" id="pimpinanProyek" required 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="keterangan" class="block text-gray-700 font-semibold mb-2">Keterangan:</label>
            <input type="text" name="keterangan" id="keterangan" required 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Simpan
        </button>
    </form>
</div>
