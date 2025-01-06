<?php
include "../config/koneksi.php";
$title = "Edit Barang";
ob_start();

$barcode_id = $_GET['id'];
$getQuery = mysqli_query($conn, "SELECT * FROM barang WHERE barcode_id = '$barcode_id'");
$getData = mysqli_fetch_array($getQuery);
?>

<div class="container mx-auto p-10">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gray-800 text-white p-4">
                <h4 class="text-lg font-semibold">Edit Barang</h4>
            </div>
            <div class="p-6">
                <form method="post" action="update_pros.php" onsubmit="return validateForm()">
                    <div class="space-y-4">
                        <div>
                            <label for="barcode_id" class="block text-gray-700 text-sm font-bold mb-2">Barcode ID</label>
                            <input type="text" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-100" 
                                id="barcode_id" 
                                name="barcode_id" 
                                value="<?= $getData["barcode_id"] ?>" 
                                readonly>
                        </div>
                        <div>
                            <label for="product_name" class="block text-gray-700 text-sm font-bold mb-2">Product Name</label>
                            <input type="text" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="product_name" 
                                name="product_name" 
                                value="<?= $getData["product_name"] ?>" 
                                required>
                        </div>
                        <div>
                            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                            <input type="number" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="price" 
                                name="price" 
                                value="<?= $getData["price"] ?>" 
                                required>
                        </div>
                        <div>
                            <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Stock</label>
                            <input type="number" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="stock" 
                                name="stock" 
                                value="<?= $getData["stock"] ?>" 
                                required>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6 gap-3">
                        <a href="index.php" 
                           class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Kembali
                        </a>
                        <button type="submit" 
                                name="edit" 
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function validateForm() {
    const price = document.getElementById('price').value;
    const stock = document.getElementById('stock').value;
    
    if(price < 0 || stock < 0) {
        alert('Harga dan stok tidak boleh negatif!');
        return false;
    }
    return true;
}
</script>
<?php
$content = ob_get_clean();
include '../layouts/main.php';
?>
