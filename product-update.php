
<?php include("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<section class=" bg-gray-100 p-10 rounded-lg">
    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                Product
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Update Product
        </li>
    </ol>
    <hr class="  border-gray-300 my-4">
    <?php 
    $id=$_GET["row_id"];
        $sql="SELECT * FROM products WHERE id= $id";
        $query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($query);
        ?>
    <form action="product-update-process.php" method="post">
        <div class="flex gap-2 mb-5">
        <input  type="hidden" value="<?= $row['id'] ?>" name="row_id" required>
        <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" type="text" value="<?= $row['name'] ?>" name="name" placeholder="Product Name" required>
        <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" type="text" value="<?= $row['price'] ?>" name="price" placeholder="Product Price" required>
        <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" type="number" value="<?= $row['stock'] ?>" name="stock" placeholder="Product Stock" required>
        <button class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="submit">Update</button>
        </div>
    </form>
</body>
</html>