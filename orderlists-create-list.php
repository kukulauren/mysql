<?php include("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<section class="bg-gray-100 p-10 rounded-lg">
  <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
    <li
      class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200"
      aria-current="page"
    >
      Order Lists
    </li>
  </ol>
  <hr class="border-gray-300 my-4" />
  <form action="orderlists-save.php" method="post">
    <div class="flex gap-2 mb-5">
      
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type="text"
        name="customer_name"
        placeholder="Customer Name"
        required
      />
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type="text"
        name="product_name"
        placeholder="Product Name"
        required
      />
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type="number"
        name="amount"
        placeholder="Amount"
        required
      />
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type="number"
        name="stock"
        placeholder="Stock"
        required
      />
      <input
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        type="datetime-local"
        name="order_date"
        placeholder="Order Date"
        required
      />
      <button
        type="submit"
        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      >
        Add
      </button>
    </div>
  </form>
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
          <table
            class="min-w-full divide-y divide-gray-200 dark:divide-gray-700"
          >
            <thead>
              <tr>
                <th
                  scope="col"
                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase"
                >
                  #
                </th>

                <th
                  scope="col"
                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase"
                >
                  Customer Name
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase"
                >
                  Product Name
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase"
                >
                  Amount
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase"
                >
                  Stock
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase"
                >
                  Order Date
                </th>

                <th
                  scope="col"
                  class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase"
                >
                  Action
                </th>
              </tr>
            </thead>
            <?php 
            $sql="SELECT * FROM orderlists";
            $query=mysqli_query($conn,$sql);
            ?>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <?php while($row=mysqli_fetch_assoc($query)): ?>
              <tr>
                <td
                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"
                >
                  <?= $row['id'] ?>
                </td>
                <td
                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"
                >
                   <?= $row['customer_name'] ?>
                </td>
                <td
                  class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"
                >
                   <?= $row['product_name'] ?>
                </td>
                <td
                  class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 text-center"
                >
                   <?= $row['amount'] ?>
                </td>
                <td
                  class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 text-center"
                >
                   <?= $row['stock'] ?>
                </td>
                <td
                  class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 text-end"
                >
                   <?= $row['order_date'] ?>
                </td>
                <td
                  class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium"
                >
                  <a
                    href="./orderlists-update.php?orderlists_id=<?= $row['id'] ?>"
                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"
                      />
                    </svg>
                  </a>
                  <a
                    href="./orderlists-delete.php?orderlists_id=<?= $row['id'] ?>"
                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"
                      />
                    </svg>
                  </a>
                </td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include("./template/footer.php"); ?>
