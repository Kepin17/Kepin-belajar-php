<?php 
    include "../config/koneksi.php";
    $title = "Member List"; 
    ob_start();
    
?>

<section class="container mx-auto p-10">

    <div class="container h-[2rem] mb-10 flex justify-between items-center">
        <h3 class="text-lg font-semibold">
            Home
        </h3>

            <button class="h-10 px-5 border-2 flex items-center justify-center rounded-md bg-green-500 font-bold text-white hover:bg-green-600 transition duration-300" 
            onclick="supModalHandler()" id="cta-add-item"
            >
                Add Member
            </button>
    </div>

    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-3 px-4 border-b">ID</th>
                <th class="py-3 px-4 border-b">Member Name</th>
                <th class="py-3 px-4 border-b">Address</th>
                <th class="py-3 px-4 border-b">Phone Number</th>
            </tr>
        </thead>

        <tbody class="bg-gray-100">
            <?php 

            $data = mysqli_query($conn, "SELECT * FROM member");
            while($items = mysqli_fetch_array($data)) { ?>
            <tr class="hover:bg-gray-200 transition duration-300">
                <td class="py-3 px-4 text-center"><?=$items["id"]?></td>
                <td class="py-3 px-4"><?=$items["nama"]?></td>
                <td class="py-3 px-4"><?=$items["alamat"]?></td>
                <td class="py-3 px-4 text-center"><?=$items["phone"]?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
        include_once "./addMember.php"
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

