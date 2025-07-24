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
        <!-- Table Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div
                            class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
                            <!-- Header -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                                <div>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">

                                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                            href="item/create">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                                <path d="M12 5v14" />
                                            </svg>
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Header -->

                            <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead class="bg-gray-50 dark:bg-neutral-900">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    ID
                                                </span>
                                                <div class="hs-tooltip">
                                                    <div class="hs-tooltip-toggle">
                                                        <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <circle cx="12" cy="12" r="10" />
                                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                                            <path d="M12 17h.01" />
                                                        </svg>
                                                        <span
                                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700"
                                                            role="tooltip">
                                                            Invoice number related popup
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Name
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Price
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Stock
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Description
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Status
                                                </span>
                                            </div>
                                        </th>


                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Category
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                                    Action
                                                </span>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach ($items as $item)
                                        <tr
                                            class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800">
                                            <td class="size-px whitespace-nowrap">
                                                <button type="button" class="block">
                                                    <span class="block px-6 py-2">
                                                        <span
                                                            class="font-mono text-sm text-blue-600 dark:text-blue-500">{{ $item->id }}</span>
                                                    </span>
                                                </button>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <button type="button" class="block">
                                                    <span class="block px-6 py-2">
                                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                                            {{ $item->name }}</span>
                                                    </span>
                                                </button>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <button type="button" class="block">
                                                    <span class="block px-6 py-2">
                                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                                            {{ $item->price }}</span>
                                                    </span>
                                                </button>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <button type="button" class="block">
                                                    <span class="block px-6 py-2">
                                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                                            {{ $item->stock }}</span>
                                                    </span>
                                                </button>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <button type="button" class="block">
                                                    <span class="block px-6 py-2">
                                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                                            {{ $item->description }}</span>
                                                    </span>
                                                </button>
                                            </td>

                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <button type="button" class="block">
                                                    <span class="block px-6 py-2">
                                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                                            {{ $item->status }}</span>
                                                    </span>
                                                </button>
                                            </td>

                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <button type="button" class="block">
                                                    <span class="block px-6 py-2">
                                                        <span class="text-sm text-gray-600 dark:text-neutral-400">
                                                            {{ $item->category->name }}</span>
                                                    </span>
                                                </button>
                                            </td>


                                            <td class="size-px whitespace-nowrap">
                                                <div class="inline-flex rounded-md gap-1 shadow-sm">
                                                    <div>
                                                        <a href="{{ route('item.edit', $item->id) }}"
                                                            class="py-1 px-2 text-xs inline-flex justify-center items-center gap-1 -ms-px first:rounded-s-md first:ms-0 last:rounded-e-md font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-xs hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <form action="{{ route('item.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="py-1 px-2 text-xs inline-flex justify-center items-center gap-1 -ms-px first:rounded-s-md first:ms-0 last:rounded-e-md font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-xs hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table -->
                           <div class="px-5 py-3">
                             {{ $items->links('pagination::tailwind') }}
                           </div>


                            <!-- Footer -->
                            {{-- <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                                <div>
                                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                                        <span class="font-semibold text-gray-800 dark:text-neutral-200">{{count($items)}}</span>
                                        results
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <button type="button"
                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="size-3" width="16" height="16" viewBox="0 0 16 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.506 1.64001L4.85953 7.28646C4.66427 7.48172 4.66427 7.79831 4.85953 7.99357L10.506 13.64"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            Prev
                                        </button>

                                        <button type="button"
                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            Next
                                            <svg class="size-3" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.50598 2L10.1524 7.64645C10.3477 7.84171 10.3477 8.15829 10.1524 8.35355L4.50598 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- End Footer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Table Section -->
    </div>

</body>

</html>
