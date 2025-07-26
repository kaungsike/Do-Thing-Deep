<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- ... --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>

    <div>
        <!-- Card Section -->
        <div class="max-w-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-xs p-4 sm:p-7 dark:bg-neutral-900">

                <form method="post" action="{{ route('item.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Section -->
                    <div
                        class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                        <label for="name" class="inline-block text-sm font-medium dark:text-white">
                            Name
                        </label>

                        <div class="mt-2 space-y-3">
                            <input id="name" type="text" name="name"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="">
                        </div>
                    </div>
                    <div
                        class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                        <label for="price" class="inline-block text-sm font-medium dark:text-white">
                            Price
                        </label>

                        <div class="mt-2 space-y-3">
                            <input id="price" type="number" name="price"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="">
                        </div>
                    </div>
                    <div
                        class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                        <label for="stock" class="inline-block text-sm font-medium dark:text-white">
                            Stock
                        </label>

                        <div class="mt-2 space-y-3">
                            <input id="stock" type="number" name="stock"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="">
                        </div>
                    </div>
                    <div
                        class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                        <label for="description" class="inline-block text-sm font-medium dark:text-white">
                            Description
                        </label>

                        <div class="mt-2 space-y-3">
                            <textarea id="description" name="description"
                                class="py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="6" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="category_id" class="block text-sm font-medium mb-2">Select a category</label>
                        <select name="category_id" id="category_id"
                            class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            <option selected="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>



                    <div
                        class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                        <label for="image" class="inline-block mb-3 text-sm font-medium dark:text-white">
                            Image
                        </label>
                        <label for="image" class="sr-only">Choose file</label>
                        <input type="file" name="image" id="image"
                            class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
    file:bg-gray-50 file:border-0
    file:me-4
    file:py-3 file:px-4
   ">
                    </div>


                    <div class="flex flex-col gap-3">
                        <div class="flex">
                            <input type="radio" name="status"
                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="status" value="available">
                            <label for="status" class="text-sm text-gray-500 ms-2">Available</label>
                        </div>

                        <div class="flex">
                            <input type="radio" name="status"
                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="status" checked="" value="unavailable">
                            <label for="status" class="text-sm text-gray-500 ms-2">Unavailable</label>
                        </div>
                    </div>

                    <div class="mt-5 flex justify-end gap-x-2">
                        <button type="submit"
                            class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save
                        </button>
                    </div>
                    <!-- End Section -->
                </form>

            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->
    </div>

</body>

</html>
