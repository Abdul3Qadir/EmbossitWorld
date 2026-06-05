window.addEventListener("load", () => {
    document.querySelectorAll('.toggle-pw-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const wrapper = this.closest('.account-details-wrapper');
                const fields = wrapper.querySelector('.pw-fields-container');
                const icon = this.querySelector('.pw-icon');

                const isHidden = fields.classList.contains('max-h-0');

                if (isHidden) {
                    fields.classList.remove('max-h-0', 'opacity-0');
                    fields.classList.add('max-h-[600px]', 'opacity-100');
                    if (icon) icon.classList.add('rotate-180');
                } else {
                    fields.classList.add('max-h-0', 'opacity-0');
                    fields.classList.remove('max-h-[600px]', 'opacity-100');
                    if (icon) icon.classList.remove('rotate-180');
                }
            });
        });
})