<div class="bg-gray-100 flex items-center justify-center my-10">
    <div class="w-full max-w-md bg-white shadow-md rounded px-8 py-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Update Manufacturer</h2>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $manufacturer->id ?>">
                <div class="mb-4">
                    <label for="manufacturername" class="block text-gray-700 font-medium mb-2">Manufacturer Name</label>
                    <input type="text" id="manufacturername" name="manufacturername" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" value="<?= $manufacturer->name ?>" required>
                </div>
                <div class="mb-4">
                    <label for="contact" class="block text-gray-700 font-medium mb-2">Contact Number</label>
                    <input type="text" id="contact" name="contact" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" value="<?= $manufacturer->contact_no ?>" required>
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-medium mb-2">Address</label>
                    <input type="text" id="address" name="address" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" value="<?= $manufacturer->address ?>" required>
                </div>
                <button type="submit" class="w-full bg-purple-500 text-white font-medium py-2 rounded-md hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-400">Update Manufacturer</button>
            </form>
        </div>
    </div>