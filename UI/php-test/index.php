<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/output.css">
</head>

<body>
    <main>
        <div class="navbar bg-base-100">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl">daisyUI</a>
            </div>
            <div class="flex-none">
                <button class="btn btn-square btn-ghost">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="inline-block h-5 w-5 stroke-current">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <hr class="mb-5">

        <div class="w-full flex justify-center mb-5">
            <div role="tablist" class="w-[300px] tabs tabs-lifted">
                <a role="tab" class="tab tab-active">Home</a>
                <a role="tab" class="tab">Area</a>
                <a role="tab" class="tab">Exchange</a>
                <a role="tab" class="tab">Gallery</a>
            </div>
        </div>
    </main>
</body>

</html>