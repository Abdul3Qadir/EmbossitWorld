document.addEventListener('DOMContentLoaded', () => {
        
        const qtyContainers = document.querySelectorAll('[data-quantity-container]');
        
        qtyContainers.forEach(container => {
            const input = container.querySelector('.qty-input');
            const incBtn = container.querySelector('[data-qty-btn="inc"]');
            const decBtn = container.querySelector('[data-qty-btn="dec"]');
            
            if (!input || !incBtn || !decBtn) return;

            incBtn.addEventListener('click', () => {
                let currentVal = parseInt(input.value) || 1;
                input.value = currentVal + 1;
            });

            decBtn.addEventListener('click', () => {
                let currentVal = parseInt(input.value) || 1;
                let minVal = parseInt(input.getAttribute('min')) || 1;
                if (currentVal > minVal) {
                    input.value = currentVal - 1;
                }
            });

            input.addEventListener('change', () => {
                let currentVal = parseInt(input.value);
                let minVal = parseInt(input.getAttribute('min')) || 1;
                if (isNaN(currentVal) || currentVal < minVal) {
                    input.value = minVal;
                }
            });
        });
        const tabComponents = document.querySelectorAll('[data-tabs-component]');
        
        tabComponents.forEach(component => {
            const buttons = component.querySelectorAll('[data-tab-target]');
            const contents = component.querySelectorAll('[data-tab-content]');
            
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const targetTab = button.getAttribute('data-tab-target');
                    
                    buttons.forEach(btn => {
                        btn.classList.remove('text-brand-blue', 'border-brand-blue');
                        btn.classList.add('text-gray-400', 'border-transparent', 'hover:text-gray-600', 'hover:border-gray-300');
                    });
                    
                    contents.forEach(content => content.classList.replace('block', 'hidden'));
                    
                    button.classList.add('text-brand-blue', 'border-brand-blue');
                    button.classList.remove('text-gray-400', 'border-transparent', 'hover:text-gray-600', 'hover:border-gray-300');
                    
                    const targetContent = component.querySelector(`[data-tab-content="${targetTab}"]`);
                    if (targetContent) targetContent.classList.replace('hidden', 'block');
                });
            });
        });

    });