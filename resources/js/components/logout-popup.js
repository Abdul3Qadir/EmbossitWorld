window.addEventListener("load", () => {
   (function() {
    const elements = {
        btn: document.getElementById('logout-btn'),
        modal: document.getElementById('logout-modal'),
        content: document.getElementById('modal-content'),
        cancel: document.getElementById('cancel-logout'),
        confirm: document.getElementById('confirm-logout'),
        body: document.body
    };

    if (!elements.btn || !elements.modal) return;

    const openModal = () => {
        elements.modal.classList.replace('hidden', 'flex');
        
        elements.body.style.overflow = 'hidden'; 
        
        setTimeout(() => {
            elements.content.classList.remove('scale-95', 'opacity-0');
            elements.content.classList.add('scale-100', 'opacity-100');
        }, 10);
    };

    const closeModal = () => {
        elements.content.classList.replace('scale-100', 'opacity-100', 'scale-95', 'opacity-0');
        
        elements.body.style.overflow = ''; 

        elements.modal.classList.replace('flex', 'hidden');
        
    };

    elements.btn.onclick = (e) => {
        e.preventDefault();
        openModal();
    };

    elements.cancel.onclick = closeModal;

    elements.confirm.onclick = () => {
        closeModal();
    };

    elements.modal.onclick = (e) => {
        if (e.target === elements.modal) closeModal();
    };

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !elements.modal.classList.contains('hidden')) {
            closeModal();
        }
    });
})();
})