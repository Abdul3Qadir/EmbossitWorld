<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Cart - Emboss It World</title>
</head>
    <body>
        <x-navbar />
        <x-cart-top-section />

        <div class="min-h-80 pt-10 pb-30 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-col lg:flex-row gap-8">
      
      <div class="lg:w-2/3 p-6 pt-0 rounded shadow-sm border border-gray-200">
        <div class="overflow-x-auto pb-4 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-transparent">
          <table class="w-full min-w-150 border-collapse">
            <thead>
              <tr class="border-b border-gray-200">
                <th class="py-3 text-base tracking-wider font-extrabold font-Nunito text-gray-600 text-left">Item</th>
                <th class="py-3 text-base tracking-wider font-extrabold font-Nunito text-gray-600 text-center">Price</th>
                <th class="py-3 text-base tracking-wider font-extrabold font-Nunito text-gray-600 text-center">Quantity</th>
                <th class="py-3 text-base tracking-wider font-extrabold font-Nunito text-gray-600 text-right">Subtotal</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
              <tr>
                <td class="py-4">
                  <div class="flex items-center gap-5">
                    <div class="w-20 h-20 shrink-0 flex">
                      <img loading="lazy" src="images/seo-post-9.jpg" alt="Service">     
                  </div>
                    <div class="w-40 sm:w-70">
                      <h4 class="font-semibold leading-tight mb-1 line-clamp-2">Directory Submission & Local Citations</h4>
                      <p class="text-xs text-gray-500">100 Directory Submission SEO Backlinks</p>
                    </div>
                    <button class="text-gray-300 cursor-pointer hover:text-red-500 mr-10 transition-colors">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18m-2 0v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6m3 0V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path></svg>
                    </button>
                  </div>
                </td>
                <td class="py-4 text-center text-base text-gray-600 font-medium">$40.00</td>
                <td class="py-4 text-center">
                  <div class="inline-flex items-center border border-gray-200 rounded">
                    <button class="px-3 py-1 cursor-pointer text-gray-400 hover:text-black">-</button>
                    <span class="px-3 py-1 text-sm font-bold border-x border-gray-100">1</span>
                    <button class="px-3 py-1 cursor-pointer text-gray-400 hover:text-black">+</button>
                  </div>
                </td>
                <td class="py-4 text-right text-base font-bold">$40.00</td>
              </tr>
              <tr>
                <td class="py-4">
                  <div class="flex items-center gap-5">
                    <div class="w-20 h-20 shrink-0 flex">
                      <img loading="lazy" src="images/seo-post-9.jpg" alt="Service">     
                  </div>
                    <div class="w-40 sm:w-70">
                      <h4 class="font-semibold leading-tight mb-1 line-clamp-2">Directory Submission & Local Citations</h4>
                      <p class="text-xs text-gray-500">100 Directory Submission SEO Backlinks</p>
                    </div>
                    <button class="text-gray-300 cursor-pointer hover:text-red-500 mr-10 transition-colors">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18m-2 0v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6m3 0V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path></svg>
                    </button>
                  </div>
                </td>
                <td class="py-4 text-center text-base text-gray-600 font-medium">$40.00</td>
                <td class="py-4 text-center">
                  <div class="inline-flex items-center border border-gray-200 rounded">
                    <button class="px-3 py-1 cursor-pointer text-gray-400 hover:text-black">-</button>
                    <span class="px-3 py-1 text-sm font-bold border-x border-gray-100">1</span>
                    <button class="px-3 py-1 cursor-pointer text-gray-400 hover:text-black">+</button>
                  </div>
                </td>
                <td class="py-4 text-right text-base font-bold">$40.00</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="mt-8 flex flex-col min-[500px]:flex-row justify-between items-center gap-4">
          <div class="flex w-full min-[500px]:w-auto border border-gray-200 rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-blue-500 transition-all">
            <input id="coupon-input" type="text" placeholder="Coupon code" class="px-4 py-2 text-sm w-full focus:outline-none">
            <button class="bg-blue-800 text-white px-6 py-2 text-sm font-bold hover:bg-blue-900 transition-colors">OK</button>
          </div>
          <button class="w-full cursor-pointer max-[550px]:text-xs min-[500px]:w-auto flex items-center justify-center gap-2 border-2 border-black px-6 py-2 rounded-lg font-bold text-sm hover:bg-black hover:text-white transition-all uppercase tracking-tight">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
            Clear Shopping Cart
          </button>
        </div>
      </div>

      <div class="lg:w-1/3">
        <div class="p-8 rounded-xl border-2 border-black">
          <h2 class="text-sm font-bold uppercase tracking-wide text-gray-700 underline mb-6">Cart Totals</h2>
          <div class="space-y-4 border-b pb-6">
            <div class="flex justify-between text-gray-600 font-medium">
              <span>Subtotal :-</span>
              <span>$40.00</span>
            </div>
          </div>
          <div class="py-6 flex justify-between items-center mb-4">
            <span class="text-2xl uppercase">Total :-</span>
            <span class="text-2xl font-semibold leading-none">$40.00</span>
          </div>

          <div class="space-y-3">
            <button class="w-full cursor-pointer text-xs bg-black text-white py-3 rounded-xl font-bold min-[350px]:text-sm uppercase tracking-widest hover:bg-gray-800 transition-all shadow-lg active:scale-[0.98]">
              Proceed To Checkout
            </button>
            <button class="w-full cursor-pointer text-xs bg-white text-black border-2 border-black py-3 rounded-xl font-bold min-[350px]:text-sm uppercase tracking-widest hover:bg-gray-50 transition-all active:scale-[0.98]">
              Continue Shopping
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
    
        <x-cta />
        <x-footer />
    </body>
</html>