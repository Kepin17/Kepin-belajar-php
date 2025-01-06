<?php
include "../config/koneksi.php";
$title = "Edit Supplier";
ob_start();

$id_sup = $_GET['id'];
$getQuery = mysqli_query($conn, "SELECT * FROM supplier WHERE id_supplier = '$id_sup'");
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
                            <label for="id_supplier" class="block text-gray-700 text-sm font-bold mb-2">ID</label>
                            <input type="text" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-100" 
                                id="id_supplier" 
                                name="id_supplier" 
                                value="<?= $getData["id_supplier"] ?>" 
                                readonly>
                        </div>
                        <div>
                            <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="nama" 
                                name="nama" 
                                value="<?= $getData["nama"] ?>" 
                                required>
                        </div>
                        <div>
                            <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                            <input type="text" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="alamat" 
                                name="alamat" 
                                value="<?= $getData["alamat"] ?>" 
                                required>
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                            <input type="text" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="phone" 
                                name="phone" 
                                value="<?= $getData["phone"] ?>" 
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


<?php
$content = ob_get_clean();
include '../layouts/main.php';
?>
