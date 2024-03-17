<?php include("./template/header.php"); ?>
<?php include("./template/sidebar.php");
$employee_id=$_GET['employee_id'];
$sql="SELECT * FROM employees WHERE id=$employee_id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
?>
<section class="bg-gray-100 p-10 rounded-lg">
  <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
    <li
      class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200"
      aria-current="page"
    >
      Employee Info Update
    </li>
  </ol>
  <hr class="border-gray-300 my-4" />
  <form action="./employees-update-process.php" method="post">
    <div class="flex gap-2 flex-wrap mb-5">
        <input  type="hidden" value="<?= $row['id'] ?>" name="row_id" required>
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type="text"
        name="name"
        value="<?= $row['name'] ?>"
        placeholder="Employee Name"
        required
      />
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type="email"
        name="email"
        value="<?= $row['email'] ?>"
        placeholder="Email"
        required
      />
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type=""
        name="phone_num"
        placeholder="Phone Number"
        value="<?= $row['phone_num'] ?>"
        required
      />
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type="text"
        name="position"
        placeholder="Position"
        value="position"
        required
      />
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type="date"
        name="hired_date"
        placeholder="Hired_date"
        value="<?= $row['hired_date'] ?>"
        required
      />
      <button
        type="submit"
        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      >
        Update
      </button>
    </div>
  </form>
</section>
<?php include("./template/footer.php"); ?>
