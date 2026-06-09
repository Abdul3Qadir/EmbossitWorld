<div id="progress-container" 
     class="fixed bottom-22 right-6 z-9999 flex h-14 w-14 items-center justify-center cursor-pointer transition-all duration-500 scale-0 opacity-0 translate-y-10 group"
     onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
    
    <div id="fill-btn" class="relative h-12 w-12 rounded-full shadow-lg overflow-hidden flex items-center justify-center bg-white transition-transform duration-300 active:scale-90">
        
        <div id="liquid-fill" 
             class="absolute bottom-0 left-0 w-full transition-all duration-300 ease-out bg-black"
             style="height: 0%;">
        </div>

        <svg id="scroll-icon" class="relative z-10 w-6 h-6 text-black transition-colors duration-300 group-hover:-translate-y-1" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </div>
</div>

<script>
    const container = document.getElementById('progress-container');
  const liquidFill = document.getElementById('liquid-fill');
  const scrollIcon = document.getElementById('scroll-icon');

  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercent = (scrollTop / docHeight) * 100;

    if (scrollPercent > 10) {
      container.classList.remove('scale-0', 'opacity-0', 'translate-y-10');
      container.classList.add('scale-100', 'opacity-100', 'translate-y-0');
    } else {
      container.classList.add('scale-0', 'opacity-0', 'translate-y-10');
      container.classList.remove('scale-100', 'opacity-100', 'translate-y-0');
    }
    liquidFill.style.height = `${scrollPercent}%`;

    if (scrollPercent > 50) {
        scrollIcon.classList.remove('text-black');
        scrollIcon.classList.add('text-white');
    } else {
        scrollIcon.classList.remove('text-white');
        scrollIcon.classList.add('text-black');
    }
  });
</script>