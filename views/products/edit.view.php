<div class="bg-gray-100 flex items-center justify-center my-10">
    <div class="w-full max-w-md bg-white shadow-md rounded px-8 py-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Update Product</h2>
            <form action="" method="POST">
                <input type="hidden" id="id" name="id" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" value="<?= $product->id ?>" required>
                <div class="mb-4">
                    <label for="productname" class="block text-gray-700 font-medium mb-2">Product Name</label>
                    <input type="text" id="productname" name="productname" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" value="<?= $product->product_name ?>" required>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-medium mb-2">Price</label>
                    <input type="text" id="price" name="price" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" value="<?= $product->price ?>" required>
                </div>
                <div class="mb-4">
                    <label for="manufacturer" class="block text-gray-700 font-medium mb-2">Manufacturer Name</label>
                    <select id="manufacturer" name="manufacturer_id" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        <option value="">Select Manufacturer</option>
                        <?php foreach($manufacturers as $manufacturer) : ?>
                        <option <?= $product->manufacturer_id === $manufacturer['id'] ? "selected": "";  ?> value="<?= $manufacturer['id'] ?>"><?= $manufacturer['name'] ?></option>
                        <?php endforeach ?>
                        
                    </select>
                </div>
                <button type="submit" class="w-full bg-purple-500 text-white font-medium py-2 rounded-md hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-400">Update Product</button>
            </form>
        </div>
    </div>