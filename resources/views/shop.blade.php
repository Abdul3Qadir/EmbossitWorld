<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Our Services - Emboss It World</title>
</head>
<body>
    @include('pages-components.navbar')
    @include('pages-components.service-cat-carousel')
<div class="min-h-screen p-4 md:p-8 font-sans text-slate-800">
    <div class="max-w-7xl mx-auto flex flex-row gap-8">
    @include('pages-components.shop-aside')
        <section class="w-full min-[1020px]:w-3/4">
            <div class="flex flex-row justify-between items-center pb-5 border-gray-200 border-b m mb-5 gap-4">
                <div class="flex bg-white p-2 rounded border border-gray-200">
                    <select class="bg-transparent border-none text-sm font-semibold text-slate-600 pr-4 cursor-pointer">
                        <option>Default sorting</option>
                        <option>Sort by Price</option>
                        <option>Sort by Rating</option>
                    </select>
                </div>
                <div class="flex items-center gap-3">
                    <p class="text-base text-gray-700 font-medium max-[320px]:hidden">Show</p>
                <div class="flex bg-white p-1 rounded border border-gray-200">
                    <select class="bg-transparent border-none text-sm font-semibold text-slate-600 pr-2 cursor-pointer">
                        <option>8</option>
                        <option>12</option>
                        <option>16</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="grid grid-cols-1 min-[320px]:grid-cols-2 min-[580px]:grid-cols-3 min-[800px]:grid-cols-4 min-[1020px]:grid-cols-3 min-[1200px]:grid-cols-4 gap-4">
                
                @include('pages-components.service-card')
                @include('pages-components.service-card')
                @include('pages-components.service-card')
                @include('pages-components.service-card')
                @include('pages-components.service-card')
                @include('pages-components.service-card')
                @include('pages-components.service-card')
                @include('pages-components.service-card')

            </div>

            <div class="my-10 text-center max-w-75 mx-auto px-4">
                <p class="text-sm tracking-wide text-gray-600 font-Poppins mb-3">
                    Showing <span>8</span> of <span>315</span> items
                </p>
                
                <div class="w-full h-0.75 bg-gray-200 rounded-full mb-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 h-full bg-black rounded-full transition-all duration-500 ease-out" style="width: 2.54%;"></div>
                </div>

                <button class="cursor-pointer gap-2 border border-black px-6 py-2 rounded-lg font-bold text-sm hover:bg-black hover:text-white transition-all tracking-tight">
                    VIEW MORE SERVICES
                </button>
            </div>
        </section>
    </div>
</div>


@include('pages-components.cta')
@include('pages-components.back-to-top')
@include('pages-components.footer')


</body>
</html>