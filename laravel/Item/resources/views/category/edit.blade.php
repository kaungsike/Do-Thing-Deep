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
                <div class="text-center mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-neutral-200">
                        Payment
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                        Manage your payment methods.
                    </p>
                </div>

                <form method="post" action="{{ route('category.update', $category->id) }}">

                    @csrf
                    @method('PUT')
                    <!-- Section -->
                    <div
                        class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                        <label for="name" class="inline-block text-sm font-medium dark:text-white">
                            Name
                        </label>

                        <div class="mt-2 space-y-3">
                            <input id="name" type="text" name="name" value="{{ $category->name ?? '' }}"
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
                                rows="6" placeholder="">{{ $category->description ?? '' }}</textarea>

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
