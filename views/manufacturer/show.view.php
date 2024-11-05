<div class="container mx-auto my-10">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl text-purple-500 font-medium">Manufacturers</h2>
        <a class="px-6 py-2 bg-purple-600 hover:bg-purple-700 text-white font-medium border-0 rounded-md" href="/create-manufacturer">Create Manufacturer</a>
    </div>
    <!-- Table  -->
    <div class="overflow-x-auto mt-8">
        <table class="w-full bg-white border border-gray-200 rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Manufacturer Name</th>
                    <th class="py-3 px-6 text-left">Contact Number</th>
                    <th class="py-3 px-6 text-left">Address</th>
                    <th class="py-3 px-6 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm font-normal leading-normal">
                <?php foreach($manufactruers as $manufactruer) : ?>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap"><?= $manufactruer['id'] ?></td>
                    <td class="py-3 px-6 text-left"><?= $manufactruer['name'] ?></td>
                    <td class="py-3 px-6 text-left"><?= $manufactruer['contact_no'] ?></td>
                    <td class="py-3 px-6 text-left"><?= $manufactruer['address'] ?></td>
                    <td class="py-3 px-6 text-left">
                        <a href="/manufacturers/manufacturer/edit?id=<?= $manufactruer['id'] ?>" class="px-4 py-2 mr-2 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-md">Edit</a>
                        <a href="/manufacturers/manufacturer/delete?id=<?= $manufactruer['id'] ?>" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-medium rounded-md">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
