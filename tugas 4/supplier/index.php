<?php 
    include "../config/koneksi.php";
    $title = "Supplier List"; 
    ob_start();
    
?>

<section class="container mx-auto p-10">

    <div class="container h-[2rem] mb-10 flex justify-between items-center">
        <h3 class="text-lg font-semibold">
            <a href="" class="text-blue-500 hover:underline">Home</a> / <span class="text-gray-700">Supplier</span>
        </h3>

        <div class="flex gap-2">
            <button class="h-10 px-5 border-2 flex items-center justify-center rounded-md bg-green-500 font-bold text-white hover:bg-green-600 transition duration-300" 
            onclick="supModalHandler()" id="cta-add-item"
            >
            Add Supplier
        </button>

        <a href="printSupplier.php" target="_blank">
            <button class="h-10 px-5 border-2 flex items-center justify-center rounded-md bg-slate-600 font-bold text-white hover:bg-slate-700 transition duration-300" 
            >
            Print Supplier
        </button>
      </a>
    </div>
    </div>

    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-3 px-4 border-b">ID</th>
                <th class="py-3 px-4 border-b">Supplier Name</th>
                <th class="py-3 px-4 border-b">Address</th>
                <th class="py-3 px-4 border-b">Phone Number</th>
                <th class="py-3 px-4 border-b">Action</th>
            </tr>
        </thead>

        <tbody class="bg-gray-100">
            <?php 

            $data = mysqli_query($conn, "SELECT * FROM supplier");
            while($items = mysqli_fetch_array($data)) { ?>
            <tr class="hover:bg-gray-200 transition duration-300">
                <td class="py-3 px-4 text-center"><?=$items["id_supplier"]?></td>
                <td class="py-3 px-4"><?=$items["nama"]?></td>
                <td class="py-3 px-4"><?=$items["alamat"]?></td>
                <td class="py-3 px-4 text-center"><?=$items["phone"]?></td>
                <td class="py-3 px-4 w-[20rem]">
                    <div class="flex gap-2 ">
                        <a href="editSupplier.php?id=<?=$items['id_supplier']?>" 
                           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">
                           <i class="fa-solid fa-pen-to-square"></i>
                            Edit
                        </a>
                        <a href="deleteSupplier.php?id=<?=$items['id_supplier']?>" 
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
        include_once "./addSupplier.php"
    ?>
</section>

<?php
    $content = ob_get_clean();
    include '../layouts/main.php';    
?>


<script>

    const supModalHandler = () => {
        const items_modal = document.getElementById('supModal');
        const ctaBtn = document.getElementById('cta-add-item');
        items_modal.classList.toggle('hidden');
        if(items_modal.classList.contains('hidden')) {
            ctaBtn.classList.add("block")
        } else {
            ctaBtn.classList.add("hidden")
        }
    } 


    const closeModal = () => {
        const items_modal = document.getElementById('supModal');
        const ctaBtn = document.getElementById('cta-add-item');
        items_modal.classList.add('hidden');
        ctaBtn.classList.remove("hidden")
    }
</script>

