<!-- Tambahkan link ke Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<?php $this->load->view('templates/header'); ?>

<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Proyek</h1>
        <a href="<?php echo site_url('proyek/create'); ?>" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Proyek Baru</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Nama Proyek</th>
                    <th class="py-3 px-6 text-left">Client</th>
                    <th class="py-3 px-6 text-left">Tanggal Mulai</th>
                    <th class="py-3 px-6 text-left">Tanggal Selesai</th>
                    <th class="py-3 px-6 text-left">Pimpinan Proyek</th>
                    <th class="py-3 px-6 text-left">Keterangan</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <?php if (!empty($proyek)): ?>
                    <?php foreach ($proyek as $p): ?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap"><?php echo $p['id']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo $p['namaProyek']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo $p['client']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo date('d F Y, H:i', strtotime($p['tglMulai'])); ?></td>
                        <td class="py-3 px-6 text-left"><?php echo date('d F Y, H:i', strtotime($p['tglSelesai'])); ?></td>
                        <td class="py-3 px-6 text-left"><?php echo $p['pimpinanProyek']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo $p['keterangan']; ?></td>
                        <td class="py-3 px-6 text-center">
                            <a href="<?php echo site_url('proyek/edit/'.$p['id']); ?>" class="text-blue-500 hover:underline">Edit</a>
                            <a href="<?php echo site_url('proyek/delete/'.$p['id']); ?>" class="text-red-500 hover:underline ml-4">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="py-3 px-6 text-center">Tidak ada data proyek.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="flex justify-between items-center mt-8 mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Lokasi</h1>
        <a href="<?php echo site_url('lokasi/create'); ?>" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Tambah Lokasi Baru</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Nama Lokasi</th>
                    <th class="py-3 px-6 text-left">Negara</th>
                    <th class="py-3 px-6 text-left">Provinsi</th>
                    <th class="py-3 px-6 text-left">Kota</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <?php if (!empty($lokasi)): ?>
                    <?php foreach ($lokasi as $l): ?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap"><?php echo $l['id']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo $l['namaLokasi']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo $l['negara']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo $l['provinsi']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo $l['kota']; ?></td>
                        <td class="py-3 px-6 text-center">
                            <a href="<?php echo site_url('lokasi/edit/'.$l['id']); ?>" class="text-blue-500 hover:underline">Edit</a>
                            <a href="<?php echo site_url('lokasi/delete/'.$l['id']); ?>" class="text-red-500 hover:underline ml-4">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="py-3 px-6 text-center">Tidak ada data lokasi.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
