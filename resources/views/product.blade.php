<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Title</title>
</head>
<body>
    <x-navbar />
    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 p-6 md:p-8">
            
            <div class="relative group flex flex-col justify-between">
                <img src="images/seo-post-9.jpg" alt="">                
                <div class="absolute top-4 left-4 bg-white/80 backdrop-blur-sm p-2 rounded-full shadow-sm text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path></svg>
                </div>
            </div>

            <div class="flex flex-col justify-between space-y-6">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 leading-tight">
                        Boost Your SEO with a Guest Post on Anoboy – anoboy.baby!
                    </h1>
                    
                    <div class="flex flex-wrap items-center space-x-4 mt-3 text-sm">
                        <div class="flex items-center text-amber-500 space-x-0.5">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-gray-500">(3 customer reviews)</span>
                        <button class="inline-flex items-center space-x-1 text-gray-400 hover:text-red-500 transition ml-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            <span class="text-xs">Add To Wishlist</span>
                        </button>
                    </div>

                    <div class="mt-3 flex items-center space-x-2 text-sm text-gray-600 bg-amber-50 border border-amber-200/60 rounded-lg p-2.5 w-max">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                        </span>
                        <p>16 people are viewing this product right now</p>
                    </div>

                    <div class="mt-5">
                        <span class="text-3xl font-bold text-gray-900">$40.00 – $60.00</span>
                    </div>

                    <div class="mt-6 space-y-2">
                        <label class="block text-xs uppercase font-semibold tracking-wider text-gray-500">Guest Post Quantity</label>
                        <div class="relative max-w-sm">
                            <select class="block w-full rounded-xl border border-gray-300 bg-white px-4 py-3 pr-10 text-sm shadow-sm focus:border-brand-blue focus:outline-none focus:ring-1 focus:ring-brand-blue appearance-none transition">
                                <option>Only Guest Post On Anoboy</option>
                                <option>Guest Post + Content Creation</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                        <button class="text-xs text-red-500 font-medium hover:underline mt-1 block">Clear</button>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-gray-100">
                    <div class="text-2xl font-bold text-gray-800">$40.00</div>
                    <div class="flex items-center space-x-2 text-emerald-600 font-medium text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                        <span>100000 in stock</span>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <div class="flex items-center border border-gray-300 rounded-xl bg-white overflow-hidden max-w-max">
                            <button onclick="decrementQty()" class="px-3 py-3 hover:bg-gray-100 transition font-bold">-</button>
                            <input id="quantity" type="number" value="1" min="1" class="w-12 text-center border-none bg-transparent focus:outline-none focus:ring-0 font-medium text-sm">
                            <button onclick="incrementQty()" class="px-3 py-3 hover:bg-gray-100 transition font-bold">+</button>
                        </div>
                        
                        <button class="flex-1 bg-brand-blue hover:bg-blue-800 text-white font-semibold py-3 px-6 rounded-xl shadow-md transition-all transform active:scale-95 flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <span>Add To Cart</span>
                        </button>
                    </div>

                    <button class="w-full bg-brand-dark hover:bg-black text-white font-bold py-3.5 px-6 rounded-xl shadow-lg transition-all transform active:scale-95 text-center block">
                        Buy Now
                    </button>
                </div>

                <div class="pt-4 text-xs space-y-1 text-gray-500 border-t border-gray-100">
                    <div><span class="font-semibold text-gray-700">SKU:</span> GPAB01</div>
                    <div><span class="font-semibold text-gray-700">Categories:</span> Guest Posting Outreach</div>
                </div>

                <div class="flex justify-between items-center bg-gray-50 p-3.5 rounded-xl border border-gray-100 text-sm">
                    <div>
                        <p class="font-medium text-gray-700">Have any Questions?</p>
                        <a href="#" class="text-brand-blue hover:underline text-xs">Feel free to Get in touch</a>
                    </div>
                    <div class="flex space-x-1.5">
                        <a href="#" class="p-2 bg-white rounded-full border border-gray-200 text-gray-500 hover:text-brand-blue transition shadow-sm">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </a>
                        <a href="#" class="p-2 bg-white rounded-full border border-gray-200 text-gray-500 hover:text-pink-600 transition shadow-sm">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 mb-16">
        <div class="border-b border-gray-200">
            <nav class="flex space-x-8" aria-label="Tabs">
                <button onclick="switchTab('description')" id="tab-description" class="tab-btn border-b-2 border-brand-blue py-4 px-1 text-sm font-semibold text-brand-blue transition focus:outline-none">
                    Description
                </button>
                <button onclick="switchTab('reviews')" id="tab-reviews" class="tab-btn border-b-2 border-transparent py-4 px-1 text-sm font-semibold text-gray-500 hover:text-gray-700 hover:border-gray-300 transition focus:outline-none">
                    Reviews (3)
                </button>
                <button onclick="switchTab('detail')" id="tab-detail" class="tab-btn border-b-2 border-transparent py-4 px-1 text-sm font-semibold text-gray-500 hover:text-gray-700 hover:border-gray-300 transition focus:outline-none">
                    Detail Required
                </button>
            </nav>
        </div>

        <div class="mt-6 bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm min-h-62.5">
            
            <div id="content-description" class="tab-content block space-y-4 fade-in">
                <h3 class="text-lg font-bold text-gray-900">Product High-Quality SEO Performance Blueprint</h3>
                <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                    Enhance your system search footprint globally using authoritative context backlinks. This optimized operational approach embeds backlink equity directly via structural indexing frameworks on premium properties.
                </p>
                <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                    Every deployment utilizes optimized delivery standards ensuring permanent placement stability, clean index performance metrics, and organic integration profiles that shield domain growth vectors elegantly.
                </p>
            </div>

            <div id="content-reviews" class="tab-content hidden space-y-6 fade-in">
                <div class="space-y-4 divide-y divide-gray-100">
                    <div class="pt-2">
                        <div class="flex items-center space-x-2">
                            <span class="font-bold text-sm text-gray-800">Alex M.</span>
                            <div class="flex text-amber-500 text-xs"><span class="fill-current">★★★★★</span></div>
                        </div>
                        <p class="text-xs text-gray-400">Verified Buyer &bull; 2 days ago</p>
                        <p class="text-gray-600 text-sm mt-1">Excellent index speed and fantastic boost in organic rank tracking matrices within weeks!</p>
                    </div>
                    <div class="pt-4">
                        <div class="flex items-center space-x-2">
                            <span class="font-bold text-sm text-gray-800">Sarah K.</span>
                            <div class="flex text-amber-500 text-xs"><span>★★★★★</span></div>
                        </div>
                        <p class="text-xs text-gray-400">Verified Buyer &bull; 1 week ago</p>
                        <p class="text-gray-600 text-sm mt-1">Perfect white-hat operational footprint. Domain metrics shifted positively from DA 25 to 34 seamlessly.</p>
                    </div>
                </div>
            </div>

            <div id="content-detail" class="tab-content hidden fade-in">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Detail Required:</h3>
                <form class="space-y-4 max-w-xl text-sm" onsubmit="event.preventDefault();">
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Your Website ( URL ) <span class="text-red-500">*</span></label>
                        <input type="url" placeholder="https://example.com" class="w-full rounded-xl border border-gray-300 p-3 bg-gray-50 focus:bg-white focus:ring-1 focus:ring-brand-blue focus:outline-none transition shadow-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Your Website ( Keywords ) <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="SEO Experts, Web Development Services" class="w-full rounded-xl border border-gray-300 p-3 bg-gray-50 focus:bg-white focus:ring-1 focus:ring-brand-blue focus:outline-none transition shadow-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Your Website ( Category ) <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Technology, Business, Finance" class="w-full rounded-xl border border-gray-300 p-3 bg-gray-50 focus:bg-white focus:ring-1 focus:ring-brand-blue focus:outline-none transition shadow-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Your Article <span class="text-gray-400 font-normal">( Optional )</span></label>
                        <textarea rows="4" placeholder="Paste your pre-written article here if applicable..." class="w-full rounded-xl border border-gray-300 p-3 bg-gray-50 focus:bg-white focus:ring-1 focus:ring-brand-blue focus:outline-none transition shadow-sm"></textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Your Images <span class="text-gray-400 font-normal">( Optional )</span></label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6 text-gray-400">
                                    <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                    <p class="text-xs"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input type="file" class="hidden" />
                            </label>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-24">
        <h2 class="text-xl font-bold text-gray-900 mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-1.5 after:left-0 after:w-12 after:h-1 after:bg-brand-blue">
            Related products
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 group flex flex-col justify-between hover:shadow-md transition duration-300">
                <div class="relative bg-linear-to-b from-brand-blue to-blue-900 aspect-square p-4 text-white flex flex-col justify-between">
                    <div class="text-[9px] uppercase tracking-wider text-center font-bold space-y-1">
                        <span class="block bg-black/20 rounded py-0.5">Guest Post On</span>
                        <span class="block text-brand-orange">High Traffic & DA</span>
                    </div>
                    <div class="mx-auto text-white/20 group-hover:scale-110 transition duration-300">
                        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-.778.099-1.533.284-2.253"></path></svg>
                    </div>
                    <div class="h-1 bg-brand-orange absolute bottom-0 left-0 right-0"></div>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <h4 class="text-xs font-semibold text-gray-800 line-clamp-2 group-hover:text-brand-blue transition">
                        Boost Your SEO with a Guest Post on Green Record – greenrecord.co.uk!
                    </h4>
                    <div>
                        <div class="text-[10px] text-amber-400">★★★★★</div>
                        <div class="text-xs font-bold text-gray-900 mt-1">$50.00 – $70.00</div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 group flex flex-col justify-between hover:shadow-md transition duration-300">
                <div class="relative bg-linear-to-b from-brand-blue to-blue-900 aspect-square p-4 text-white flex flex-col justify-between">
                    <div class="text-[9px] uppercase tracking-wider text-center font-bold space-y-1">
                        <span class="block bg-black/20 rounded py-0.5">London Daily</span>
                    </div>
                    <div class="mx-auto text-white/20 group-hover:scale-110 transition duration-300">
                        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0V11m0 5H9m11-3h-2m0-4h2m-2 0h-5m0 0V3m0 8h3"></path></svg>
                    </div>
                    <div class="h-1 bg-brand-orange absolute bottom-0 left-0 right-0"></div>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <h4 class="text-xs font-semibold text-gray-800 line-clamp-2 group-hover:text-brand-blue transition">
                        We Will Provide Guest Post on londondaily.news – London Daily
                    </h4>
                    <div>
                        <div class="text-[10px] text-amber-400">★★★★★</div>
                        <div class="text-xs font-bold text-gray-900 mt-1">$45.00 – $65.00</div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 group flex flex-col justify-between hover:shadow-md transition duration-300">
                <div class="relative bg-linear-to-b from-brand-blue to-blue-900 aspect-square p-4 text-white flex flex-col justify-between">
                    <div class="text-[9px] uppercase tracking-wider text-center font-bold space-y-1">
                        <span class="block bg-black/20 rounded py-0.5">SEO Services</span>
                    </div>
                    <div class="mx-auto text-white/20 group-hover:scale-110 transition duration-300">
                        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="h-1 bg-brand-orange absolute bottom-0 left-0 right-0"></div>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <h4 class="text-xs font-semibold text-gray-800 line-clamp-2 group-hover:text-brand-blue transition">
                        We Will Provide High Authority Guest Post SEO Backlinks Service
                    </h4>
                    <div>
                        <div class="text-[10px] text-amber-400">★★★★★</div>
                        <div class="text-xs font-bold text-gray-900 mt-1">$50.00 – $500.00</div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 group flex flex-col justify-between hover:shadow-md transition duration-300">
                <div class="relative bg-linear-to-b from-brand-blue to-blue-900 aspect-square p-4 text-white flex flex-col justify-between">
                    <div class="text-[9px] uppercase tracking-wider text-center font-bold space-y-1">
                        <span class="block bg-black/20 rounded py-0.5">DA 30 Site</span>
                    </div>
                    <div class="mx-auto text-white/20 group-hover:scale-110 transition duration-300">
                        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
                    </div>
                    <div class="h-1 bg-brand-orange absolute bottom-0 left-0 right-0"></div>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <h4 class="text-xs font-semibold text-gray-800 line-clamp-2 group-hover:text-brand-blue transition">
                        We Will Provide Guest Post on 1word4pics.com – DA 30 Website
                    </h4>
                    <div>
                        <div class="text-[10px] text-amber-400">★★★★★</div>
                        <div class="text-xs font-bold text-gray-900 mt-1">$40.00 – $60.00</div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 group flex flex-col justify-between hover:shadow-md transition duration-300">
                <div class="relative bg-linear-to-b from-brand-blue to-blue-900 aspect-square p-4 text-white flex flex-col justify-between">
                    <div class="text-[9px] uppercase tracking-wider text-center font-bold space-y-1">
                        <span class="block bg-black/20 rounded py-0.5">Google News Site</span>
                    </div>
                    <div class="mx-auto text-white/20 group-hover:scale-110 transition duration-300">
                        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    </div>
                    <div class="h-1 bg-brand-orange absolute bottom-0 left-0 right-0"></div>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <h4 class="text-xs font-semibold text-gray-800 line-clamp-2 group-hover:text-brand-blue transition">
                        We Will Provide Guest Post on entrepreneursbreak.com – Google News Site
                    </h4>
                    <div>
                        <div class="text-[10px] text-amber-400">★★★★★</div>
                        <div class="text-xs font-bold text-gray-900 mt-1">$45.00 – $65.00</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <a href="https://wa.me/#" target="_blank" class="fixed bottom-6 right-6 bg-[#25D366] hover:bg-[#20ba5a] text-white p-3.5 rounded-full shadow-2xl transition-all transform hover:scale-110 z-50 flex items-center justify-center">
        <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.513 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.713-1.457L0 24zm6.59-4.846c1.66.986 3.288 1.498 4.86 1.499 5.542 0 10.051-4.48 10.054-10.003.002-2.674-1.034-5.188-2.918-7.074C16.49 1.691 14.02 .65 11.4 1.018 11.4 1.017 6.31 5.498 6.307 11.021c-.001 1.635.432 3.232 1.254 4.674l-.993 3.627 3.73-.974z"/></svg>
    </a>

    <script>
        // Quantity Controls Logic
        const qtyInput = document.getElementById('quantity');
        
        function incrementQty() {
            qtyInput.value = parseInt(qtyInput.value) + 1;
        }
        
        function decrementQty() {
            if (parseInt(qtyInput.value) > 1) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
            }
        }

        // Tab Switching Application Logic
        function switchTab(tabId) {
            // Hide all tab text contents
            const contents = document.querySelectorAll('.tab-content');
            contents.forEach(content => content.classList.replace('block', 'hidden'));
            
            // Reset state borders of all layout buttons
            const buttons = document.querySelectorAll('.tab-btn');
            buttons.forEach(btn => {
                btn.classList.remove('text-brand-blue', 'border-brand-blue');
                btn.classList.add('text-gray-500', 'border-transparent', 'hover:text-gray-700', 'hover:border-gray-300');
            });
            
            // Activate selected tab pane container
            document.getElementById(`content-${tabId}`).classList.replace('hidden', 'block');
            
            // Apply distinctive dynamic border active color markers
            const activeBtn = document.getElementById(`tab-${tabId}`);
            activeBtn.classList.add('text-brand-blue', 'border-brand-blue');
            activeBtn.classList.remove('text-gray-500', 'border-transparent', 'hover:text-gray-700', 'hover:border-gray-300');
        }
    </script>

    <style>
        .fade-in {
            animation: fadeIn 0.4s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(4px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</body>
</html>