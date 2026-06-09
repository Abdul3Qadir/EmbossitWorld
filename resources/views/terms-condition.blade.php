<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Terms & Conditions - Emboss It World</title>
</head>
<body class="bg-white text-gray-800 antialiased font-sans">
    @include('pages-components.navbar')
    
    <div class="px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <div class="mb-16 bg-gray-200 p-6 rounded-2xl">
                <h1 class="font-['Rotunda'] text-4xl md:text-5xl font-bold text-gray-900 text-center mb-6">Terms & Conditions</h1>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Welcome to <span class="font-semibold text-gray-900">Embossitworld</span>. We explain our Terms & Conditions to show how we provide our services. By using our website and services, you agree to these terms.
                </p>
            </div>

            <div class="space-y-12">
                
                <section>
                    <div class="flex items-center gap-3 mb-4 border-b pb-2">
                        <h2 class="font-Rotunda text-3xl font-bold">1. About Us</h2>
                    </div>
                    <p class="text-lg text-gray-600 mb-4">Embossitworld has been providing digital services since 2010. We specialize in Logo Designing, Graphic Designing, Video Editing, Web Development, SEO, Social Media Marketing, and E-commerce Marketing.</p>
                </section>

                <section class="space-y-10">
                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                            <h3 class="text-2xl font-bold font-Rotunda">2. Logo Designing</h3>
                        </div>
                        <ul class="text-lg text-gray-600 space-y-2 list-disc pl-5">
                            <li>Provide original logo designs based on client requirements.</li>
                            <li>Initial concepts and revisions will be discussed before the final design is approved.</li>
                            <li>Once the logo is finalized, additional changes may cost extra.</li>
                            <li>We provide files in different formats (PNG, JPEG, AI, etc).</li>
                        </ul>
                    </div>

                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                            <h3 class="text-2xl font-bold font-Rotunda">3. Graphic Designing</h3>
                        </div>
                        <ul class="text-lg text-gray-600 space-y-2 list-disc pl-5">
                            <li>Our graphic design services include posters, banners, social media posts, and more.</li>
                            <li>Clients must provide clear instructions and requirements before the project begins.</li>
                            <li>Standard packages include a fixed number of revisions. Extra revisions will be charged separately.</li>
                            <li>Final designs will be delivered in high-resolution formats.</li>
                        </ul>
                    </div>

                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.934a.5.5 0 0 0-.777-.416L16 11"/><rect x="2" y="6" width="14" height="12" rx="2"/></svg>
                            <h3 class="text-2xl font-bold font-Rotunda">4. Video Editing</h3>
                        </div>
                        <ul class="text-lg text-gray-600 space-y-2 list-disc pl-5">
                            <li>We edit videos based on client scripts and requirements.</li>
                            <li>Raw footage should be provided in high quality.</li>
                            <li>Revisions are allowed within the agreed package; extra revisions may be charged.</li>
                            <li>Final videos will be delivered in preferred formats like MP4, MOV, etc.</li>
                        </ul>
                    </div>

                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                            <h3 class="text-2xl font-bold font-Rotunda">5. Web Development</h3>
                        </div>
                        <ul class="text-lg text-gray-600 space-y-2 list-disc pl-5">
                            <li>We create modern websites based on client needs.</li>
                            <li>The project timeline and cost depend on website complexity.</li>
                            <li>Clients must provide content, images, and other necessary details.</li>
                            <li>Additional features beyond the agreed scope will be charged separately.</li>
                        </ul>
                    </div>

                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                            <h3 class="text-2xl font-bold font-Rotunda">6. SEO (Search Engine Optimization)</h3>
                        </div>
                        <p class="text-lg text-gray-600">We improve website ranking through various SEO strategies. SEO results take time and are not guaranteed within a specific period.</p>
                    </div>
                </section>

                <section class="space-y-10">
                    <div>
                        <div class="flex items-center gap-3 mb-4 border-b pb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><rect x="2" y="4" width="20" height="16" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                            <h2 class="text-2xl font-bold text-gray-900">9. Payments & Refunds</h2>
                        </div>
                        <p class="text-lg text-gray-600">Prices for each service will be discussed before starting the project. Payments are required in advance or as per the agreed milestones. Refunds are only applicable if we fail to deliver the agreed service.</p>
                    </div>

                    <div>
                        <div class="flex items-center gap-3 mb-4 border-b pb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                            <h2 class="text-2xl font-bold text-gray-900">10. Revisions & Modifications</h2>
                        </div>
                        <p class="text-lg text-gray-600">Each service includes a set number of free revisions. Additional revisions will be charged based on complexity.</p>
                    </div>

                    <div>
                        <div class="flex items-center gap-3 mb-4 border-b pb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                            <h2 class="text-2xl font-bold text-gray-900">11. Confidentiality & Data Protection</h2>
                        </div>
                        <p class="text-lg text-gray-600">We respect client privacy and will not share information without consent. Clients must not disclose confidential details about our business processes.</p>
                    </div>
                </section>

                <section class="mt-20 pt-12 border-t border-gray-100">
                    <div class="flex items-center gap-3 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                        <h2 class="font-['Rotunda'] text-3xl font-bold text-gray-900">12. Contact Us</h2>
                    </div>
                    <p class="text-lg text-gray-600 mb-8">If you have any questions, contact us at:</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <span class="text-lg font-medium text-gray-900">+92 313 3858347</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <span class="text-lg font-medium text-gray-900">embossitworld@gmail.com</span>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    @include('pages-components.back-to-top')
    @include('pages-components.cta')
    @include('pages-components.footer')
</body>
</html>