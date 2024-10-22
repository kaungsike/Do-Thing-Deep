<?php include("./template/header.php") ?>

<?php include("./template/side-bar.php") ?>

<section class=" rounded-lg">
    <div class="flex justify-end mb-5">
        <a href="./product-create.php" type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
            Create Product
        </a>
    </div>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 w-[170px] py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Product Image</th>
                                <th scope="col" class="py-3 w-[170px] text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Product Name</th>
                                <th scope="col" class=" py-3  w-[170px] text-xs text-end font-medium text-gray-500 uppercase dark:text-neutral-500">Price</th>
                                <th scope="col" class="py-3 w-[170px]  text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Rating</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">

                            <?php
                            $datas = array_filter(scandir('product'), fn($el) => $el != '.' && $el != '..');

                            $product = 'product';

                            echo "<pre>"
                            ?>

                            <?php foreach ($datas as $key => $data) :
                                $json = json_decode(file_get_contents($product . '/' . $data));

                            ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        <img class="w-[70px]" src="./product-photo/<?= $json->product_photo ?>" alt="">
                                    </td>
                                    <td class=" py-4 whitespace-nowrap text-sm font-medium text-end text-gray-800 dark:text-neutral-200"><?= $json->productName ?></td>
                                    <td class="py-4 text-end whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><?=$json->productPrice ?></td>
                                    <td class=" py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200 text-end"><?=$json->productRating ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a href="./product-delete.php?file_name=<?=$data ?>" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include("./template/footer.php") ?>