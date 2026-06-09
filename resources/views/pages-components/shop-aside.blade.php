<style>
    .slider-thumb::-webkit-slider-thumb {
        appearance: none;
        height: 16px;
        width: 16px;
        border-radius: 50%;
        background: #2563eb;
        cursor: pointer;
        pointer-events: auto;
        border: 2px solid white;
        box-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }
    .slider-thumb::-moz-range-thumb {
        height: 16px;
        width: 16px;
        border-radius: 50%;
        background: #2563eb;
        cursor: pointer;
        pointer-events: auto;
        border: 2px solid white;
    }
</style>


<button id="sidebarToggle" class="min-[1020px]:hidden fixed left-0 top-[55%] -translate-y-1/2 z-58 bg-blue-600 text-white p-3 rounded-r-xl shadow-2xl transition-all duration-300 active:scale-95">
    <svg id="burger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
    </svg>
</button>
<div id="overlay" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-40 hidden min-[1020px]:hidden transition-opacity duration-300"></div>

<aside id="sidebar" class="fixed inset-y-0 left-0 min-[1020px]:w-1/4 z-50 w-[85%] max-w-[320px] bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out min-[1020px]:relative min-[1020px]:translate-x-0 min-[1020px]:z-0 min-[1020px]:shadow-none min-[1020px]:bg-transparent overflow-y-auto custom-scrollbar p-4 pt-8 min-[1020px]:p-0 space-y-4">
    

        @include('pages-components.services-cat')

    <div class="bg-gray-100 rounded shadow-sm border border-gray-200 overflow-hidden">
    <button onclick="toggleSection('price-content', 'price-icon')" class="w-full flex items-center justify-between p-5 transition-colors">
        <span class="font-bold text-slate-700 tracking-tight">Filter By Price</span>
        <svg id="price-icon" class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
    </button>
    <div id="price-content" class="max-h-0 opacity-0 transition-all duration-500 ease-in-out px-5 overflow-hidden">
        <div class="pb-3 pt-2">
            <div class="relative h-1.5 w-full bg-gray-200 rounded-lg">
                <div id="slider-track" class="absolute h-full bg-blue-600 rounded-lg" style="left: 0%; right: 0%;"></div>
                <input type="range" id="minPrice" min="5" max="3600" value="5" 
                    class="absolute w-full h-1.5 appearance-none bg-transparent pointer-events-none z-20 slider-thumb"
                    oninput="updateDualPrice()">
                <input type="range" id="maxPrice" min="5" max="3600" value="3600" 
                    class="absolute w-full h-1.5 appearance-none bg-transparent pointer-events-none z-20 slider-thumb"
                    oninput="updateDualPrice()">
            </div>

            <div class="flex justify-between items-center  mt-6">
                <div class="flex">
                <span class="text-sm font-medium text-slate-500">Price: &nbsp;</span>
                <span class="text-sm font-bold text-slate-700">
                    $<span id="minValLabel">5</span> — $<span id="maxValLabel">3600</span>
                </span>
                </div>
            <button onclick="resetPriceFilter()" id="reset" class="text-sm font-bold uppercase cursor-pointer text-blue-700 hover:bg-blue-300 bg-blue-200 px-2 py-1 rounded transition-colors">
                Reset
            </button>
            </div>
        </div>
    </div>
</div>
    <div class="bg-gray-100 rounded shadow-sm border border-gray-200 overflow-hidden">
        <button onclick="toggleSection('rate-content', 'rate-icon')" class="w-full flex items-center justify-between p-5">
            <span class="font-bold text-slate-700 tracking-tight">Filter By Rating</span>
            <svg id="rate-icon" class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div id="rate-content" class="max-h-0 opacity-0 transition-all duration-500 ease-in-out px-5 overflow-hidden">
            <div class="pb-5 space-y-3">
                <label class="flex items-center space-x-3 cursor-pointer group">
                    <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                    <span class="text-yellow-400 text-sm">★★★★★</span>
                    <span class="text-xs text-slate-400">(227)</span>
                </label>
                <label class="flex items-center space-x-3 cursor-pointer group">
                    <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                    <span class="text-yellow-400 text-sm">★★★★<span class="text-gray-300">★</span></span>
                    <span class="text-xs text-slate-400">(87)</span>
                </label>
            </div>
        </div>
    </div>
</aside>