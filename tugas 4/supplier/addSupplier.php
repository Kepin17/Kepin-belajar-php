<?php
include "../config/koneksi.php";

// Generate new supplier ID
$query = mysqli_query($conn, "SELECT id_supplier FROM supplier ORDER BY id_supplier DESC LIMIT 1");
$data = mysqli_fetch_array($query);

if($data) {
    $lastId = substr($data['id_supplier'], 2);
    $nextId = intval($lastId) + 1;
    $newSupplierId = 'SP' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
} else {
    $newSupplierId = 'SP001';
}
?>
<div class="container mx-auto mt-5 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 hidden" id="supModal">
    <div class="flex justify-center">
        <div class="w-full max-w-lg">
            <div class="bg-gray-800 text-white p-4 rounded-t">
                <h4 class="text-lg font-semibold">Tambah Supplier Baru</h4>
            </div>
            <div class="bg-white p-6 rounded-b shadow-md">
                <form action="addSupplierProses.php" method="post">
                    <div class="mb-4">
                        <label for="supplier_id" class="block text-gray-700 text-sm font-bold mb-2">Supplier ID</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="supplier_id" name="supplier_id" value="<?php echo $newSupplierId; ?>" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Supplier</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" required>
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">No. Telepon</label>
                        <input type="tel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" required>
                    </div>
                    <div class="flex justify-end">
                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2"
                        onclick="closeModal()"
                        >Kembali</button>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

