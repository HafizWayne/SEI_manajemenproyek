<!-- Tambahkan link ke Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto p-6">
    <!-- Judul -->
    <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Edit Lokasi</h1>
    
    <!-- Formulir -->
    <form action="<?php echo site_url('lokasi/update/'.$lokasi['id']); ?>" method="post" class="bg-white p-8 rounded-lg shadow-md max-w-4xl mx-auto">
        
        <!-- Nama Lokasi -->
        <div class="mb-6">
            <label for="namaLokasi" class="block text-gray-700 font-medium mb-2">Nama Lokasi:</label>
            <input type="text" name="namaLokasi" id="namaLokasi" value="<?php echo $lokasi['namaLokasi']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Negara -->
        <div class="mb-6">
            <label for="negara" class="block text-gray-700 font-medium mb-2">Negara:</label>
            <input type="text" name="negara" id="negara" value="<?php echo $lokasi['negara']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Provinsi -->
        <div class="mb-6">
            <label for="provinsi" class="block text-gray-700 font-medium mb-2">Provinsi:</label>
            <input type="text" name="provinsi" id="provinsi" value="<?php echo $lokasi['provinsi']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Kota -->
        <div class="mb-6">
            <label for="kota" class="block text-gray-700 font-medium mb-2">Kota:</label>
            <input type="text" name="kota" id="kota" value="<?php echo $lokasi['kota']; ?>" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
            Update
        </button>
    </form>
</div>
