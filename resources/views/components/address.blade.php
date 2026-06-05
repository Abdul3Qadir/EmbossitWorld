<div id="address-section" class="content-section mt-12 hidden opacity-0 transition-all duration-500 mx-auto px-4">

    <div id="billing-display-view">
        <p class="text-gray-700 mb-8">
            The following addresses will be used on the checkout page by default.
        </p>

        <div class="space-y-4">
            <div class="border-b border-gray-200 pb-2">
                <h3 class="text-2xl font-bold font-Rotunda text-center sm:text-3xl uppercase tracking-tight">Billing Address</h3>
            </div>
            
            <button id="edit-billing-btn" class="text-sm font-sans cursor-pointer float-end text-blue-600 tracking-wide hover:text-blue-800 transition-colors">
                Edit Billing Address
            </button>

            <div id="billing-address-text" class=" sm:text-left text-sm text-gray-600 leading-relaxed space-y-2 pt-2">
           
                <div class="flex min-[500px]:gap-2 max-[500px]:flex-col min-[500px]:items-center">
                    <span class="text-sm max-[500px]:text-xs tracking-wide text-gray-500 font-medium">Full Name:</span>
                    <p class="font-medium text-lg max-[500px]:text-base" id="display-name"></p>
                </div>
                
                <div class="flex min-[500px]:gap-2 max-[500px]:flex-col min-[500px]:items-center">
                    <span class="text-sm max-[500px]:text-xs tracking-wide text-gray-500 font-medium">Company:</span>
                    <p id="display-company" class="font-medium text-lg max-[500px]:text-base"></p>
                </div>

                <div class="flex min-[500px]:gap-2 max-[500px]:flex-col min-[500px]:items-center">
                    <span class="text-sm max-[500px]:text-xs tracking-wide text-gray-500 font-medium">Address:</span>
                    <p class="font-medium text-lg max-[500px]:text-base" id="display-address"></p>
                </div>

                <div class="flex min-[500px]:gap-2 max-[500px]:flex-col min-[500px]:items-center">
                    <span class="text-sm max-[500px]:text-xs tracking-wide text-gray-500 font-medium">Location:</span>
                    <p class="font-medium text-lg max-[500px]:text-base" id="display-location"></p>
                </div>

                <div class="flex min-[500px]:gap-2 max-[500px]:flex-col min-[500px]:items-center">
                    <span class="text-sm max-[500px]:text-xs tracking-wide text-gray-500 font-medium">Country:</span>
                    <p id="display-country" class="font-medium text-lg max-[500px]:text-base"></p>
                </div>

                <div class="pt-4 not-italic mt-4 flex flex-col border-t border-gray-200">
                    <p class="text-base text-gray-600 mb-2 underline">CONTACT INFORMATION</p>
                    <p class="text-sm text-gray-500">Phone: <span id="display-phone" class="text-gray-800 text-base font-semibold"></span></p>
                    <p class="text-sm text-gray-500">Email: <span id="display-email" class="text-gray-800 text-base font-semibold"></span></p>
                </div>
            </div>
        </div>
    </div>

    <div id="billing-edit-view" class="hidden">
        <h3 class="text-2xl font-bold text-gray-900 uppercase mb-6 border-b pb-2 font-Rotunda">Billing Address</h3>
        
        <form id="billing-form" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="input-fname" class="block text-sm font-bold uppercase mb-1">First name *</label>
                    <input type="text" id="input-fname" required class="w-full placeholder:text-gray-600 p-3 border border-gray-300 rounded outline-none focus:border-blue-500"> 
                </div>
                <div>
                    <label for="input-lname" class="block text-sm font-bold uppercase mb-1">Last name *</label>
                    <input type="text" id="input-lname" required class="w-full placeholder:text-gray-600 p-3 border border-gray-300 rounded outline-none focus:border-blue-500" >
                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <label for="input-company" class="block text-sm font-bold uppercase mb-1">Company name (optional)</label>
                    <input type="text" id="input-company" class="w-full placeholder:text-gray-600 p-3 border border-gray-300 rounded outline-none focus:border-blue-500">
                </div>

                <div>
                    <label for="input-country" class="block text-sm font-bold uppercase mb-1">Country / Region *</label>
                    <select id="input-country" class="w-full p-3 border border-gray-300 rounded bg-white outline-none focus:border-blue-500">
                        <option value="US">United States (US)</option>
                        <option value="PK">Pakistan</option>
                    </select>
                </div>

                <input type="text" id="input-street" placeholder="Street address" required class="w-full placeholder:text-gray-600 p-3 border border-gray-300 rounded outline-none focus:border-blue-500">
                <input type="text" id="input-city" placeholder="Town / City" required class="w-full placeholder:text-gray-600 p-3 border border-gray-300 rounded outline-none focus:border-blue-500" >
                
                <select id="input-state" class="w-full p-3 border border-gray-300 rounded bg-white outline-none focus:border-blue-500">
                    <option>California</option>
                    <option>Sindh</option>
                    <option>Punjab</option>
                </select>
                
                <input type="text" id="input-postcode" placeholder="Postcode / ZIP" required class="w-full placeholder:text-gray-600 p-3 border border-gray-300 rounded outline-none focus:border-blue-500">
                
                <div>
                    <label for="input-phone" class="block text-sm font-bold uppercase mb-1">Phone *</label>
                    <input type="tel" id="input-phone" required class="w-full placeholder:text-gray-600 p-3 border border-gray-300 rounded outline-none focus:border-blue-500">
                </div>

                <div>
                    <label for="input-email" class="block text-sm font-bold uppercase mb-1">Email address *</label>
                    <input type="email" id="input-email" required class="w-full placeholder:text-gray-600 p-3 border border-gray-300 rounded outline-none focus:border-blue-500">
                </div>
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="bg-gray-900 text-white px-8 py-3 rounded font-bold text-sm tracking-wide cursor-pointer hover:bg-gray-600 transition">
                    SAVE ADDRESS
                </button>
                <button type="button" id="cancel-edit" class="text-gray-600 cursor-pointer font-bold text-sm tracking-wide hover:text-black">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>