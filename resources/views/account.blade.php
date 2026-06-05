<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>My Account - Emboss It World</title>
</head>
<body>
    
    <x-navbar />

    <div class="font-sans text-gray-800">
        
        <div class="max-w-7xl mx-auto px-4 md:px-6 py-10">
            
            <div class="flex justify-center mb-10 gap-3">
                <span class="flex items-center justify-center">
                    <svg class="w-8 h-8 text-gray-800 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.963-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
                <h1 class="text-xl md:text-2xl font-bold tracking-widest underline" style="font-family: 'Rotunda', serif;">
                    MY ACCOUNT
                </h1>
            </div>

            <div class="flex flex-col min-[800px]:flex-row gap-12">
                
                <aside class="w-full min-[800px]:w-72 shrink-0 lg:border-r border-gray-200 lg:pr-8">
                    <div class="mb-8 flex flex-col items-center lg:items-start text-center lg:text-left">
                        <div class="relative group mb-4">
                            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center overflow-hidden border border-gray-200">
                                <svg class="w-14 h-14 text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
                            </div>
                            <label class="absolute inset-0 flex items-center justify-center bg-black/40 text-white rounded-full opacity-0 group-hover:opacity-100 cursor-pointer transition-opacity text-[10px] font-bold uppercase tracking-tighter">
                                Change
                                <input type="file" class="hidden">
                            </label>
                        </div>
                        <h2 class="font-extrabold text-xl font-Nunito">Abdul Qadir</h2>
                        <p class="text-sm text-gray-500">silvora410@gmail.com</p>
                    </div>

                    <nav class="flex flex-col gap-1">
                        <button data-target="dash-section" class="tab-btn flex items-center gap-3 p-3 text-blue-600 bg-blue-50 rounded-md font-semibold cursor-pointer transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path></svg>
                            Dashboard
                        </button>
                        <button data-target="orders-section" class="tab-btn flex items-center gap-3 p-3 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-md transition cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            Orders
                        </button>
                        <button data-target="address-section" class="tab-btn flex items-center gap-3 p-3 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-md transition cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Addresses
                        </button>
                        <button data-target="account-section" class="tab-btn flex items-center gap-3 p-3 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-md transition cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            Account details
                        </button>
                        <button data-target="wishlist-section" class="tab-btn flex items-center gap-3 p-3 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-md transition cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            Wishlist
                        </button>
                        <button id="logout-btn" class="flex items-center gap-3 p-3 text-gray-600 hover:text-red-500 hover:bg-red-50 transition border-t border-gray-200 mt-2 cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            Log out
                        </button>
                    </nav>
                </aside>

                <main class="flex-1 min-w-0 overflow-hidden">
                    <x-dashboard />
                    <x-orders />
                    <x-address />
                    <x-acc-details />
                    <x-wishlist />
                    <x-logout-popup />
                    </main>

            </div>
        </div>
    </div>

    <x-cta />
    <x-footer />

</body>
</html>