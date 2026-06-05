<div id="feedback-card" class="mb-13 p-8 rounded-[40px] border border-gray-200 bg-white shadow-sm relative overflow-hidden min-h-80 flex items-center justify-center transition-all duration-500">
    
    <div id="success-message" class="absolute inset-0 bg-white z-20 flex flex-col items-center justify-center text-center p-6 opacity-0 pointer-events-none transition-all duration-500 scale-95">
        <div class="w-16 h-16 bg-green-50 text-green-500 rounded-full flex items-center justify-center mb-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <h4 class="text-lg font-bold text-gray-900" style="font-family: 'Rotunda', serif;">Feedback Sent!</h4>
        <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-widest mb-6">Thank You, Your feedback is very important for us.</p>
        
        <button id="reset-feedback-btn" class="text-[10px] font-bold text-blue-600 uppercase tracking-[2px] border-b border-blue-600 pb-0.5 hover:text-blue-800 hover:border-blue-800 transition-all cursor-pointer">
            Send Another One
        </button>
    </div>

    <div id="feedback-form" class="w-full relative z-10 text-center transition-all duration-500">
        <h4 class="text-sm font-bold uppercase tracking-[3px] text-gray-800 mb-2" style="font-family: 'Rotunda', serif;">Your Feedback Matters</h4>
        <p class="text-[11px] text-gray-400 uppercase tracking-widest mb-8">How was your experience today?</p>

        <div class="flex justify-center gap-4 sm:gap-6 mb-8" id="emoji-container">
            <button type="button" data-val="Bad" class="emoji-btn group/emoji flex flex-col items-center gap-2 cursor-pointer outline-none transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-2xl group-hover/emoji:bg-gray-100 transition-all">😞</div>
                <span class="text-[9px] font-bold text-gray-400 uppercase">Bad</span>
            </button>
            <button type="button" data-val="Okay" class="emoji-btn group/emoji flex flex-col items-center gap-2 cursor-pointer outline-none transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-2xl group-hover/emoji:bg-gray-100 transition-all">😐</div>
                <span class="text-[9px] font-bold text-gray-400 uppercase">Okay</span>
            </button>
            <button type="button" data-val="Good" class="emoji-btn group/emoji flex flex-col items-center gap-2 cursor-pointer outline-none transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-2xl group-hover/emoji:bg-gray-100 transition-all">😊</div>
                <span class="text-[9px] font-bold text-gray-400 uppercase">Good</span>
            </button>
            <button type="button" data-val="Great" class="emoji-btn group/emoji flex flex-col items-center gap-2 cursor-pointer outline-none transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-2xl group-hover/emoji:bg-gray-100 transition-all">😍</div>
                <span class="text-[9px] font-bold text-gray-400 uppercase">Great</span>
            </button>
        </div>

        <div class="max-w-md mx-auto relative">
            <input type="text" id="feedback-note" placeholder="Write a quick note (optional)..." 
                   class="w-full bg-gray-50 border-2 border-transparent rounded-2xl py-3 px-5 text-xs text-gray-600 focus:bg-white focus:border-blue-100 outline-none transition-all">
            
            <button id="submit-feedback-btn" class="absolute right-2 top-1.5 p-1.5 bg-black text-white rounded-xl hover:bg-blue-600 active:scale-95 transition-all cursor-pointer flex items-center justify-center min-w-8 min-h-8">
                <svg id="btn-icon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                <svg id="btn-spinner" class="hidden animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>
        </div>
        <p id="validation-error" class="text-[10px] text-red-500 font-bold uppercase tracking-wider mt-4 opacity-0 transition-opacity"></p>
    </div>
</div>