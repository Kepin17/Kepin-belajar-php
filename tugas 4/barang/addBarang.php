<?php
include "../config/koneksi.php";

// Generate new barcode ID
$query = mysqli_query($conn, "SELECT barcode_id FROM barang ORDER BY barcode_id DESC LIMIT 1");
$data = mysqli_fetch_array($query);

if($data) {
    $lastId = substr($data['barcode_id'], 2);
    $nextId = intval($lastId) + 1;
    $newBarcodeId = 'BR' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
} else {
    $newBarcodeId = 'BR001';
}
?>
<div class="container mx-auto mt-5 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 hidden" id="items_modal">
    <div class="flex justify-center">
        <div class="w-full max-w-lg">
            <div class="bg-gray-800 text-white p-4 rounded-t">
                <h4 class="text-lg font-semibold">Tambah Barang Baru</h4>
            </div>
            <div class="bg-white p-6 rounded-b shadow-md">
                <form action="addBarangProses.php" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="barcode_id" class="block text-gray-700 text-sm font-bold mb-2">Barcode ID</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="barcode_id" name="barcode_id" value="<?php echo $newBarcodeId; ?>" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="product_name" class="block text-gray-700 text-sm font-bold mb-2">Product Name</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_name" name="product_name" required>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" required>
                    </div>
                    <div class="mb-4">
                        <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Stock</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="stock" name="stock" required>
                    </div>
                    <div class="flex justify-end">
                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2" onclick="closeModal()">Kembali</button>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
