window.addEventListener('load', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const sections = document.querySelectorAll('.content-section');

    if (tabButtons.length === 0) return;

    tabButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');

            // 1. Reset all buttons to gray (In-active)
            tabButtons.forEach(b => {
                b.classList.remove('text-blue-600', 'bg-blue-50', 'font-semibold');
                b.classList.add('text-gray-600');
            });

            // 2. Set clicked button to blue (Active)
            this.classList.add('text-blue-600', 'bg-blue-50', 'font-semibold');
            this.classList.remove('text-gray-600');

            // 3. Hide all content sections
            sections.forEach(s => {
                s.classList.add('hidden', 'opacity-0');
            });

            // 4. Show the targeted section
            const target = document.getElementById(targetId);
            if (target) {
                target.classList.remove('hidden');
                setTimeout(() => target.classList.remove('opacity-0'), 10);
            }
        });
    });
});