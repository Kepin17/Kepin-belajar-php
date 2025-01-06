<?php 
    include "../config/koneksi.php";
    $title = "Barang"; 
    ob_start();
    
?>

<section class="container mx-auto p-10">

    <div class="container h-[2rem] mb-10 flex justify-between items-center">
        <h3 class="text-lg font-semibold">
            <a href="" class="text-blue-500 hover:underline">Home</a> / <span class="text-gray-700">Items</span>
        </h3>

        <div class="flex gap-2">

            <button class="h-10 px-5 border-2 flex items-center justify-center rounded-md bg-green-500 font-bold text-white hover:bg-green-600 transition duration-300" 
            onclick="showAddItemsModal()" id="cta-add-item"
            >
            Add Product
        </button>
        <a href="printBarang.php" target="_blank">
            <button class="h-10 px-5 border-2 flex items-center justify-center rounded-md bg-slate-600 font-bold text-white hover:bg-slate-700 transition duration-300" 
            >
            Print Product
        </button>
    </a>
    </div>
    </div>

    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-3 px-4 border-b">ID</th>
                <th class="py-3 px-4 border-b">Nama Barang</th>
                <th class="py-3 px-4 border-b">Harga</th>
                <th class="py-3 px-4 border-b">Stok</th>
                <th class="py-3 px-4 border-b">Action</th>
            </tr>
        </thead>

        <tbody class="bg-gray-100">
            <?php 

            function formatRupiah($number) {
                return 'Rp ' . number_format($number, 0, ',', '.');
            }

            $data = mysqli_query($conn, "SELECT * FROM barang");
            while($items = mysqli_fetch_array($data)) { ?>
            <tr class="hover:bg-gray-200 transition duration-300">
                <td class="py-3 px-4 text-center"><?=$items["barcode_id"]?></td>
                <td class="py-3 px-4"><?=$items["product_name"]?></td>
                <td class="py-3 px-4"><?=formatRupiah($items["price"])?></td>
                <td class="py-3 px-4 text-center"><?=$items["stock"]?></td>
                <td class="py-3 px-4 w-[20rem]">
                    <div class="flex gap-2 ">
                        <a href="editBarang.php?id=<?=$items['barcode_id']?>" 
                           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">
                           <i class="fa-solid fa-pen-to-square"></i>
                            Edit
                        </a>
                        <a href="deleteBarang.php?id=<?=$items['barcode_id']?>" 
                           onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                           class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">
                           <i class="fa-solid fa-trash"></i>
                            Delete
                        </a>
                     
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
        include_once "./addBarang.php"
    ?>
</section>

<?php
    $content = ob_get_clean();
    include '../layouts/main.php';    
?>


<script>

    const showAddItemsModal = () => {
        const items_modal = document.getElementById('items_modal');
        const ctaBtn = document.getElementById('cta-add-item');
        items_modal.classList.toggle('hidden');
        if(items_modal.classList.contains('hidden')) {
            ctaBtn.classList.add("block")
        } else {
            ctaBtn.classList.add("hidden")
        }
    } 


    const closeModal = () => {
        const items_modal = document.getElementById('items_modal');
        const ctaBtn = document.getElementById('cta-add-item');
        items_modal.classList.add('hidden');
        ctaBtn.classList.remove("hidden")
    }
</script>

