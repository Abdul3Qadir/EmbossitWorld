window.addEventListener('load',()=>{
    (() => {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const overlay = document.getElementById('overlay');
    const burgerIcon = document.getElementById('burger-icon');
    const closeIcon = document.getElementById('close-icon');

    const toggleMobileMenu = () => {
        if (!sidebar || !overlay) return;
        const isOpen = !sidebar.classList.contains('-translate-x-full');
        
        if (isOpen) {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            burgerIcon?.classList.remove('hidden');
            closeIcon?.classList.add('hidden');
            document.body.style.overflow = 'auto'; 
        } else {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            burgerIcon?.classList.add('hidden');
            closeIcon?.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; 
        }
    };

    if (toggleBtn) toggleBtn.addEventListener('click', toggleMobileMenu);
    if (overlay) overlay.addEventListener('click', toggleMobileMenu);

    window.toggleSection = (contentId, iconId) => {
        const content = document.getElementById(contentId);
        const icon = document.getElementById(iconId);
        if (!content || !icon) return;

        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            content.style.maxHeight = '0px';
            content.style.opacity = '0';
            icon.style.transform = "rotate(0deg)";
        } else {
            const limit = 300;
            content.style.maxHeight = content.scrollHeight > limit ? limit + 'px' : content.scrollHeight + 'px';
            content.style.opacity = '1';
            icon.style.transform = "rotate(180deg)";
            content.style.overflowY = content.scrollHeight > limit ? 'auto' : 'hidden';
        }
    };

        toggleSection('cat-content', 'cat-icon');

})();

    document.querySelectorAll('.heart-btn').forEach(button => {
  button.addEventListener('click', function(e) {
    this.classList.toggle('is-active');
    const svg = this.querySelector('svg');
    
    if (this.classList.contains('is-active')) {
      svg.setAttribute('fill', '#2482ee');
      svg.style.stroke = '#2482ee';
    } else {
      svg.setAttribute('fill', 'none');
      svg.style.stroke = 'currentColor';
    }

    for (let i = 0; i < 6; i++) {
      const particle = document.createElement('span');
      particle.classList.add('heart-particle');
      particle.innerHTML = '💙';

      const x = (Math.random() - 0.5) * 80; 
      const y = -(Math.random() * 60 + 40);  
      const r = (Math.random() - 0.5) * 60;  

      particle.style.setProperty('--x', `${x}px`);
      particle.style.setProperty('--y', `${y}px`);
      particle.style.setProperty('--r', `${r}deg`);

      this.appendChild(particle);

      particle.addEventListener('animationend', () => {
        particle.remove();
      });
    }
  });
});


})

