<!-- Tambahkan link ke Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto p-6">
    <!-- Judul -->
    <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Edit Proyek</h1>
    
    <!-- Formulir -->
    <form action="<?php echo site_url('proyek/update/'.$proyek['id']); ?>" method="post" class="bg-white p-8 rounded-lg shadow-md max-w-4xl mx-auto">
        
        <!-- Nama Proyek -->
        <div class="mb-6">
            <label for="namaProyek" class="block text-gray-700 font-medium mb-2">Nama Proyek:</label>
            <input type="text" name="namaProyek" id="namaProyek" value="<?php echo $proyek['namaProyek']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Client -->
        <div class="mb-6">
            <label for="client" class="block text-gray-700 font-medium mb-2">Client:</label>
            <input type="text" name="client" id="client" value="<?php echo $proyek['client']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Tanggal Mulai -->
        <div class="mb-6">
            <label for="tglMulai" class="block text-gray-700 font-medium mb-2">Tanggal dan Waktu Mulai:</label>
            <input type="datetime-local" name="tglMulai" id="tglMulai" value="<?php echo $proyek['tglMulai']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Tanggal Selesai -->
        <div class="mb-6">
            <label for="tglSelesai" class="block text-gray-700 font-medium mb-2">Tanggal dan Waktu Selesai:</label>
            <input type="datetime-local" name="tglSelesai" id="tglSelesai" value="<?php echo $proyek['tglSelesai']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Pimpinan Proyek -->
        <div class="mb-6">
            <label for="pimpinanProyek" class="block text-gray-700 font-medium mb-2">Pimpinan Proyek:</label>
            <input type="text" name="pimpinanProyek" id="pimpinanProyek" value="<?php echo $proyek['pimpinanProyek']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Keterangan -->
        <div class="mb-6">
            <label for="keterangan" class="block text-gray-700 font-medium mb-2">Keterangan:</label>
            <input type="text" name="keterangan" id="keterangan" value="<?php echo $proyek['keterangan']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
            Update
        </button>
    </form>
</div>
