<div id="account-section" class="content-section hidden opacity-0 transition-all duration-500 account-details-wrapper mx-auto p-6 md:p-12">

        <div class="border-b border-gray-200 pb-2 mb-6">
                <h3 class="text-2xl font-bold font-Rotunda sm:text-3xl uppercase tracking-tight">ACCOUNT DETAILS</h3>
            </div>

        <form id="account-form" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="input-fname" class="block text-sm font-bold font-Nunito uppercase mb-1">First name *</label>
                    <input type="text" id="input-fname" required class="w-full p-3 border border-gray-300 rounded outline-none focus:border-blue-500 transition-all">
                </div>
                <div>
                    <label for="input-lname" class="block text-sm font-bold font-Nunito uppercase mb-1">Last name *</label>
                    <input type="text" id="input-lname" required class="w-full p-3 border border-gray-300 rounded outline-none focus:border-blue-500 transition-all" >
                </div>
            </div>
            <div>
                <label for="input-displayname" class="block text-sm font-bold font-Nunito uppercase mb-1">Display name *</label>
                <input type="text" id="input-displayname" required class="w-full p-3 border border-gray-300 rounded outline-none focus:border-blue-500 transition-all">
                <p class="text-sm italic text-gray-500 mt-1 tracking-tight">This will be how your name will be displayed in the account section</p>
            </div>

            <div>
                <label for="input-email" class="block text-sm font-bold font-Nunito uppercase mb-1">Email address *</label>
                <input type="email" id="input-email" required class="w-full placeholder:text-gray-600 p-3 border border-gray-300 rounded outline-none focus:border-blue-500 transition-all" placeholder="email@example.com">
            </div>

            <div>
                <button type="button" class="cursor-pointer hover:underline toggle-pw-btn flex items-center gap-2 text-sm font-bold uppercase text-blue-600 hover:text-blue-800 focus:outline-none transition-colors">
                    <span>Change Password</span>
                    <svg class="pw-icon w-4 h-4 transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="pw-fields-container max-h-0 overflow-hidden opacity-0 transition-all duration-500 ease-in-out">
                    <div class="space-y-6 pt-6 pb-2">                        
                        <div>
                            <label for="pw" class="block text-sm font-bold font-Nunito uppercase mb-1">Current password <span class="text-gray-500 text-[11px]">(leave blank to leave unchanged)</span></label>
                            <input id="pw" type="password" class="w-full p-3 border border-gray-300 rounded outline-none focus:border-blue-500 transition-all">
                        </div>
                            <div>
                                <label for="new-pw" class="block text-sm font-bold font-Nunito uppercase mb-1">New password <span class="text-gray-500 text-[11px]">(leave blank to leave unchanged)</span></label>
                                <input id="new-pw" type="password" class="w-full p-3 border border-gray-300 rounded outline-none focus:border-blue-500 transition-all">
                            </div>
                            <div>
                                <label for="confirm-new-pw" class="block text-sm font-bold font-Nunito uppercase mb-1">Confirm new password</label>
                                <input id="confirm-new-pw" type="password" class="w-full p-3 border border-gray-300 rounded outline-none focus:border-blue-500 transition-all">
                            </div>
                    </div>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-black text-white font-sans px-8 py-3 rounded font-bold uppercase text-sm tracking-wide hover:bg-gray-700 cursor-pointer active:scale-95 transition-all shadow-sm">
                    Save Changes
                </button>
            </div>
        </form>
    </div>