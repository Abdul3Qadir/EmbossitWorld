<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>CheckOut - Emboss It World</title>
</head>
<body>
    @include('pages-components.navbar')
    @include('pages-components.cart-top-section')
    
    <main class="max-w-7xl mx-auto px-4 py-10 font-Nunito">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
        
        <div class="lg:col-span-3 space-y-10">
            <div class="text-sm border border-dashed border-gray-300 p-4 rounded bg-gray-50">
                Have a coupon? <a href="#" class="text-blue-600 underline">Click here to enter your code</a>
            </div>

            <section>
                <h2 class="text-2xl font-bold mb-6" style="font-family: 'Rotunda', serif;">Required Details</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm mb-2">Please upload required files for your order work. *</label>
                        <input type="file" class="w-full p-2 border border-gray-300 rounded text-sm outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm mb-2">Fill required details for your order *</label>
                        <textarea rows="4" placeholder="required details..." class="w-full p-3 border border-gray-300 rounded text-sm outline-none focus:border-blue-500"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm mb-2">Fill other details for your order (optional)</label>
                        <textarea rows="4" placeholder="other details..." class="w-full p-3 border border-gray-300 rounded text-sm outline-none focus:border-blue-500"></textarea>
                    </div>
                </div>
            </section>

            <hr class="border-gray-100">

            <section>
                <h2 class="text-2xl font-bold mb-6" style="font-family: 'Rotunda', serif;">Billing Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    
                @include('pages-components.form')

        <div class="lg:col-span-2">
            <div class="border-2 border-gray-900 p-6 sticky top-6 bg-white">
                <h2 class="text-xl font-bold mb-6" style="font-family: 'Rotunda', serif;">Your Order</h2>
                <div class="space-y-4 text-sm">
                    <div class="flex justify-between items-start border-b border-gray-100 pb-4">
                        <div>
                            <p class="font-bold text-blue-600">Boost Your SEO with a Guest Post on Bhulekh Bhoomi – bhulekhbhoomi.com!</p>
                            <p class="text-gray-800 mt-1">2 × $60.00</p>
                            <p class="text-sm mt-2"><span class="font-bold">Guest Post Quantity:</span> Guest Post + Article On Bhulekh Bhoomi</p>
                            <p class="text-xs mt-2 text-gray-600">Subtotal: $120.00</p>
                        </div>
                    </div>
                    <div class="flex justify-between font-medium pt-2">
                        <span>Subtotal</span>
                        <span>$120.00</span>
                    </div>
                    <div class="flex justify-between text-lg font-black border-t border-gray-100 pt-4">
                        <span>TOTAL</span>
                        <span>$120.00</span>
                    </div>

                    <div class="mt-8 space-y-4">
                        <p class="font-bold text-base">Pay with PayPal</p>
                        <p class="text-sm text-gray-600 italic">Paypal Email: <span class="font-bold">dumdaarpoint@gmail.com</span></p>
                        <p class="text-xs leading-relaxed text-gray-500">
                            Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="/privacy-policy" target="_blank" class="underline">privacy policy</a>.
                        </p>
                        <label class="flex items-start space-x-2 text-xs cursor-pointer">
                            <input type="checkbox" class="mt-1">
                            <span>I have read and agree to the website terms and conditions *</span>
                        </label>
                        <button class="w-full bg-black cursor-pointer text-white py-4 font-bold uppercase tracking-widest hover:bg-gray-800 transition-colors">
                            Place Order
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

    @include('pages-components.cta')
    @include('pages-components.footer')
</body>
</html>