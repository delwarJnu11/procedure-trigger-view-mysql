<div class="container mx-auto my-10">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl text-purple-500 font-medium">Products</h2>
        <a class="px-6 py-2 bg-purple-600 hover:bg-purple-700 text-white font-medium border-0 rounded-md" href="/create-product">Create Product</a>
    </div>
    <!-- Table  -->
     <div class="overflow-x-auto mt-8">
      <table class="min-w-full bg-white border border-gray-200 rounded-lg">
        <thead>
          <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">Product Name</th>
            <th class="py-3 px-6 text-left">Price</th>
            <th class="py-3 px-6 text-left">Manufacturer</th>
            <th class="py-3 px-6 text-left">Action</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 text-sm font-normal leading-normal">
          <?php foreach($products as $product) :?>
          <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left whitespace-nowrap"><?= $product['product_name'] ?></td>
            <td class="py-3 px-6 text-left"><?= $product['price'] ?></td>
            <td class="py-3 px-6 text-left"><?= $product['name'] ?></td>
            <td class="py-3 px-6 text-left">
              <a href="/products/product/edit?id=<?= $product['id'] ?>" class="px-4 py-2 mr-2 bg-purple-500 hover:bg-purple-600 text-white font-medium rounded-md">Edit</a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
</div>