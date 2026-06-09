<div class="w-full overflow-hidden max-w-8xl mx-auto bg-white py-12">
    <div id="infinite-carousel" class="flex gap-8 overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden scroll-smooth px-4 [scroll-snap-type:x_mandatory]">
        
        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/4k-video-editing.webp" alt="4k Video Editing" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">4K Video Editing Services</p>
        </div>

        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/Ad-Copywriting-Text-Ads-Creation.webp" alt="Ad Copywriting" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">Ad Copywriting & Text Ads</p>
        </div>

        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/Custom-Websites.webp" alt="Custom Website" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">Custom Website Services</p>
        </div>

        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/E-commerce-Content-Marketing-cirlce.webp" alt="E-commerce Marketing" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">E-Commerce Marketing Services</p>
        </div>

        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/Generative-Engine-Optimization-Services.webp" alt="GEO" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">Generative Engine Optimization</p>
        </div>

        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/guest-posting.webp" alt="Guest Posting" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">Guest Posting Outreach</p>
        </div>

        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/illustration.webp" alt="Graphic Design" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">Graphic Design Services</p>
        </div>

        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/logo-design.webp" alt="Logo Design" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">Logo Design Services</p>
        </div>

        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/Off-Page-SEO.webp" alt="SEO" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">SEO Services</p>
        </div>

        <div class="flex-none w-35 flex flex-col cursor-pointer items-center text-center scroll-mx-4 snap-start">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-sm border border-gray-100 mb-4">
                <img src="images/service-cat-imgs/Social-Media-Campaign-managnment.webp" alt="Social Media" class="w-full h-full object-cover">
            </div>
            <p class="text-sm font-medium hover:underline leading-tight">Social Media Marketing</p>
        </div>

    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const carousel = document.getElementById("infinite-carousel");
    if (!carousel) return;

    const items = Array.from(carousel.children);
    const speed = 1500; 

    // Infinite effect k liye items duplicate ho rhe hain
    items.forEach(item => {
        const clone = item.cloneNode(true);
        carousel.appendChild(clone);
    });

    let autoScrollInterval;

    const startAutoScroll = () => {
        autoScrollInterval = setInterval(() => {
            // Ab itemWidth absolute `180px + 32px gap` perfect read karega
            const itemWidth = items[0].offsetWidth + 26; 
            const maxScroll = carousel.scrollWidth / 2;

            if (carousel.scrollLeft >= maxScroll) {
                carousel.classList.remove("scroll-smooth");
                carousel.scrollLeft = 0;
                carousel.offsetHeight; 
                carousel.classList.add("scroll-smooth");
            }

            carousel.scrollLeft += itemWidth;
        }, speed);
    };

    carousel.addEventListener("scroll", () => {
        const maxScroll = carousel.scrollWidth / 2;
        if (carousel.scrollLeft >= maxScroll) {
            carousel.classList.remove("scroll-smooth");
            carousel.scrollLeft = carousel.scrollLeft - maxScroll;
            carousel.offsetHeight;
            carousel.classList.add("scroll-smooth");
        }
    });

    carousel.addEventListener("mouseenter", () => clearInterval(autoScrollInterval));
    carousel.addEventListener("mouseleave", startAutoScroll);
    carousel.addEventListener("touchstart", () => clearInterval(autoScrollInterval), { passive: true });
    carousel.addEventListener("touchend", startAutoScroll);

    startAutoScroll();
});
</script>