<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Blogs - Emboss It World</title>
</head>
<body>
    @include('pages-components.navbar')

<div class="bg-white min-h-screen py-12 px-4 md:px-10">
    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-10">
        
        <main class="w-full lg:w-3/4 space-y-10">

        @include('pages-components.articles')
            <div class="flex justify-center items-center gap-2 pt-8 font-sans">
                <button class="px-4 py-2 border border-gray-200 text-gray-500 rounded hover:bg-gray-200 text-sm transition-colors cursor-pointer">Previous</button>
                <button class="w-10 h-10 flex items-center justify-center bg-blue-600 text-white rounded text-sm cursor-pointer">1</button>
                <button class="w-10 h-10 flex items-center justify-center border border-gray-200 text-gray-600 rounded text-sm hover:bg-gray-50 transition-colors cursor-pointer">2</button>
                <button class="w-10 h-10 flex items-center justify-center border border-gray-200 text-gray-600 rounded text-sm hover:bg-gray-50 transition-colors cursor-pointer">3</button>
                <button class="px-4 py-2 border border-gray-200 text-gray-600 rounded hover:bg-gray-200 text-sm transition-colors cursor-pointer">Next</button>
            </div>
        </main>

        <aside class="w-full lg:w-1/4">
            <div class="sticky top-25">
                <h3 class="text-lg font-bold mb-6 uppercase tracking-wider border-b-2 border-blue-600 inline-block font-sans">All Categories</h3>
                <ul class="space-y-4 text-gray-600 font-sans text-sm">
                    <li class="flex justify-between hover:text-blue-600 cursor-pointer transition-colors border-b border-gray-50 pb-2">
                        <span>Artificial Intelligence</span>
                        <span class="text-gray-400">05</span>
                    </li>
                    <li class="flex justify-between hover:text-blue-600 cursor-pointer transition-colors border-b border-gray-50 pb-2">
                        <span>Cyber Security</span>
                        <span class="text-gray-400">03</span>
                    </li>
                    <li class="flex justify-between hover:text-blue-600 cursor-pointer transition-colors border-b border-gray-50 pb-2">
                        <span>Graphics Design</span>
                        <span class="text-gray-400">08</span>
                    </li>
                    <li class="flex justify-between hover:text-blue-600 cursor-pointer transition-colors border-b border-gray-50 pb-2">
                        <span>iPhone</span>
                        <span class="text-gray-400">12</span>
                    </li>
                    <li class="flex justify-between hover:text-blue-600 cursor-pointer transition-colors border-b border-gray-50 pb-2">
                        <span>Web Development</span>
                        <span class="text-gray-400">20</span>
                    </li>
                </ul>
            </div>
        </aside>

    </div>
</div>
    
    @include('pages-components.cta')
    @include('pages-components.back-to-top')
    @include('pages-components.footer')
</body>
</html>