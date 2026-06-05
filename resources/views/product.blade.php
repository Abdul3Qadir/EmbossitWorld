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
    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-12 antialiased">
    <!-- Main Card Container with premium vertical layout -->
    <div class="flex flex-col bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-100/50 overflow-hidden">

        <!-- TOP SECTION: IMAGE & MAIN CONTENT ROW (Optimized for same-height appearance) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 p-6 sm:p-10 md:p-14 items-start">
            
            <!-- LEFT COLUMN: IMAGE (Takes 4 of 12 Columns on Desktop) -->
            <div class="lg:col-span-4 flex justify-center lg:justify-start">
                <div class="relative group overflow-hidden rounded-2xl bg-slate-50 border border-slate-100 shadow-inner aspect-[3/4] w-full max-w-[320px] lg:max-w-none">
                    <!-- Modern Image Showcase with smooth hover scale -->
                    <img src="images/seo-post-9.jpg" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" alt="SEO Guest Post on Anoboy">
                    
                    <!-- Zoom Floating Icon -->
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-md p-2.5 rounded-xl shadow-md text-slate-600 cursor-pointer hover:bg-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: MAIN PRODUCT INFO (Takes 8 of 12 Columns, content fits image height) -->
            <div class="lg:col-span-8 flex flex-col justify-between h-full space-y-8 lg:pl-6">
                
                <!-- Title & Domain Branding Stack -->
                <div class="space-y-4">
                    <div class="space-y-1">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                            Boost Your SEO with a Guest Post on Anoboy
                        </h1>
                        <div class="inline-flex items-center text-blue-600 font-semibold text-lg md:text-xl tracking-wide bg-blue-50/60 px-3 py-1 rounded-xl border border-blue-100/50">
                            anoboy.baby
                        </div>
                    </div>
                    
                    <!-- Ratings and Reviews Row -->
                    <div class="flex flex-wrap items-center gap-y-3 gap-x-5 text-sm pt-1">
                        <div class="flex items-center text-amber-500 bg-amber-50 px-3 py-1.5 rounded-xl border border-amber-200/60 space-x-1.5 shadow-sm">
                            <div class="flex space-x-0.5">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            </div>
                            <span class="text-amber-950 font-black text-xs tracking-wider">5.0</span>
                        </div>
                        <span class="text-slate-500 font-semibold tracking-tight">(3 customer reviews)</span>
                        
                        <div class="h-4 w-px bg-slate-200 hidden sm:block"></div>
                        
                        <button class="inline-flex items-center space-x-2 text-slate-400 hover:text-rose-500 transition-colors font-semibold group">
                            <svg class="w-4 h-4 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            <span class="text-slate-500 group-hover:text-rose-600 transition-colors">Add To Wishlist</span>
                        </button>
                    </div>

                    <!-- Price Breakdown and Live Counter row -->
                    <div class="flex flex-wrap items-center gap-6 pt-2">
                        <span class="text-4xl md:text-5xl font-black text-slate-950 tracking-tight">$40.00 – $60.00</span>
                        <div class="inline-flex items-center space-x-3 text-xs text-rose-800 bg-rose-50/60 border border-rose-100 rounded-xl px-3 py-1.5 shadow-sm">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-500"></span>
                            </span>
                            <p class="font-medium tracking-wide">16 buyers evaluating now</p>
                        </div>
                    </div>
                </div>

                <!-- Action Block (Configuration, Quantity & Cart) -->
                <div class="space-y-6 pt-8 border-t border-slate-100 mt-auto">
                    <!-- Dropdown Form Configuration -->
                    <div class="space-y-3 max-w-xl">
                        <label class="block text-xs uppercase font-bold tracking-widest text-slate-400">Configure Guest Post Package</label>
                        <div class="relative">
                            <select class="block w-full rounded-2xl border border-slate-200 bg-slate-50/50 px-5 py-4 text-base font-semibold text-slate-800 shadow-sm focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-4 focus:ring-blue-600/10 appearance-none transition duration-200 cursor-pointer">
                                <option>Only Guest Post On Anoboy</option>
                                <option>Guest Post + Content Creation</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 text-slate-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Quantity & Cart Buttons CTA Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-4">
                        <div data-quantity-container class="sm:col-span-3 flex items-center border border-slate-200 rounded-2xl bg-slate-50 p-1.5 min-h-14.5 justify-between shadow-inner max-w-40">
    <button type="button" data-qty-btn="dec" class="w-10 h-10 flex items-center justify-center rounded-xl hover:bg-white text-slate-700 transition active:scale-95 font-bold text-xl select-none">-</button>
    
    <input type="number" value="1" min="1" class="qty-input w-12 text-center border-none bg-transparent focus:outline-none focus:ring-0 font-black text-slate-900 text-base [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
    
    <button type="button" data-qty-btn="inc" class="w-10 h-10 flex items-center justify-center rounded-xl hover:bg-white text-slate-700 transition active:scale-95 font-bold text-xl select-none">+</button>
</div>
                        
                        <button class="sm:col-span-9 bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 rounded-2xl shadow-xl shadow-blue-600/10 hover:shadow-blue-600/20 transition-all duration-300 transform active:scale-[0.99] flex items-center justify-center space-x-3 min-h-[58px] text-base">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <span>Add To Cart</span>
                        </button>
                    </div>
                    
                    <button class="w-full bg-slate-900 hover:bg-slate-950 text-white font-black py-4.5 px-8 rounded-2xl shadow-xl shadow-slate-950/10 hover:shadow-slate-950/20 transition-all duration-300 transform active:scale-[0.99] text-center tracking-wider text-sm uppercase">
                        Proceed To Instant Checkout
                    </button>
                </div>
            </div>
        </div>

        <!-- BOTTOM FOOTER SECTION: SKU, CATEGORIES & CONTACT (Full width, moved down) -->
        <div class="bg-slate-50 border-t border-slate-100 p-6 sm:p-10 md:px-14 md:py-8 mt-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                
                <!-- Left: SKU & Categories -->
                <div class="space-y-3 text-sm text-slate-500 font-medium">
                    <div class="flex items-center gap-3">
                        <span class="font-bold text-slate-400 uppercase tracking-wider text-xs">SKU:</span> 
                        <span class="bg-white border border-slate-200 text-slate-800 px-3 py-1 rounded-full font-mono font-bold text-xs shadow-sm">GPAB01</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-bold text-slate-400 uppercase tracking-wider text-xs">Category:</span> 
                        <span class="text-blue-600 hover:underline cursor-pointer">Guest Posting Outreach</span>
                    </div>
                </div>

                <!-- Right: Help & Contact Box -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center bg-white p-5 rounded-2xl border border-slate-100 gap-4 shadow-sm">
                    <div class="space-y-0.5">
                        <p class="font-bold text-slate-800 text-sm">Need help with custom volumes?</p>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-bold text-xs inline-flex items-center group">
                            Connect with an SEO Expert
                            <svg class="w-3.5 h-3.5 ml-1.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                    
                    <!-- Social Channels Link -->
                    <div class="flex space-x-2.5 w-full sm:w-auto justify-end">
                        <a href="#" class="p-2.5 bg-white rounded-xl border border-slate-200 text-slate-400 hover:text-blue-600 hover:border-blue-200 transition shadow-sm" aria-label="Share via Facebook">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </a>
                        <a href="#" class="p-2.5 bg-white rounded-xl border border-slate-200 text-slate-400 hover:text-pink-600 hover:border-pink-200 transition shadow-sm" aria-label="Share via Instagram">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 0zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>

<x-reviews />
    <x-related-products />
    <x-cta />
</body>
</html>