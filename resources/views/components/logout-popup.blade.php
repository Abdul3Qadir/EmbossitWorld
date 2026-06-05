<div id="logout-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 backdrop-blur-[2px] p-8">
    
    <div class="bg-white rounded-xl shadow-2xl max-w-85 w-full p-5 transform transition-all scale-95 opacity-0 duration-200" id="modal-content">
        
        <div class="mb-6">
            <h3 class="text-xl font-bold font-Rotunda">Confirm Logout</h3>
            <p class="text-gray-600 mt-2 text-base">Are you sure you want to log out of your account?</p>
        </div>

        <div class="flex justify-end gap-2">
            <button id="cancel-logout" class="cursor-pointer px-4 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                No
            </button>
            <button id="confirm-logout" class="cursor-pointer px-5 py-2 text-sm font-semibold text-white bg-black hover:bg-gray-800 rounded-lg shadow-sm transition-all active:scale-95">
                Yes
            </button>
        </div>
    </div>
</div>