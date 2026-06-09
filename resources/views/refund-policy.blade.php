<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Refund Policy - Emboss It World</title>
</head>
<body>
    @include('pages-components.navbar')
    
    <div class="bg-white text-gray-800 antialiased font-sans px-4 py-12">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="font-['Rotunda'] text-4xl md:text-5xl font-bold text-gray-900 mb-6">Refund Policy</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    At <span class="font-semibold text-gray-900">EmbossitWorld</span>, we want you to be happy with our services. Our Refund Policy ensures that if you are not satisfied, you may be eligible for a refund under the conditions below. Please read carefully to understand our refund process.
                </p>
            </div>

            <div class="space-y-16">
                
                <section>
                    <div class="flex items-center gap-3 mb-6 border-b pb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>
                        <h2 class="font-['Rotunda'] text-2xl font-bold text-gray-900">1. General Refund Terms</h2>
                    </div>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex gap-3 p-4 bg-gray-50 rounded-xl border border-gray-100">
                            <span class="text-blue-500 font-bold">•</span>
                            <p>Refunds are only available if we do not deliver the service as promised.</p>
                        </li>
                        <li class="flex gap-3 p-4 bg-gray-50 rounded-xl border border-gray-100">
                            <span class="text-blue-500 font-bold">•</span>
                            <p>You must request a refund within <span class="font-bold">7 days</span> of receiving the final work.</p>
                        </li>
                        <li class="flex gap-3 p-4 bg-gray-50 rounded-xl border border-gray-100">
                            <span class="text-blue-500 font-bold">•</span>
                            <p>Refunds are not given if you simply change your mind after the work has started.</p>
                        </li>
                        <li class="flex gap-3 p-4 bg-gray-50 rounded-xl border border-gray-100">
                            <span class="text-blue-500 font-bold">•</span>
                            <p>If you approve the final work, no refund will be provided.</p>
                        </li>
                    </ul>
                </section>

                <section>
                    <div class="flex items-center gap-3 mb-8 border-b pb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/><circle cx="12" cy="4" r="2"/></svg>
                        <h2 class="font-['Rotunda'] text-2xl font-bold text-gray-900">2. Refund Policy for Each Service</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="p-6 border border-gray-200 rounded-2xl hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-Rotunda font-bold mb-3 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                                Logo & Graphic Designing
                            </h3>
                            <p class="text-gray-600 mb-2">If you do not like the initial designs, you can request up to <span class="font-bold text-gray-800">two free changes</span> before asking for a refund.</p>
                            <p class="text-gray-600 italic text-sm">Note: Once final files are received, no refund is possible.</p>
                        </div>

                        <div class="p-6 border border-gray-200 rounded-2xl hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-Rotunda font-bold mb-3 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                                Web Development
                            </h3>
                            <p class="text-gray-600">If we do not complete the website as per the agreed plan, you may receive a partial refund. Once finished and live, no refunds will be given.</p>
                        </div>

                        <div class="p-6 border border-gray-200 rounded-2xl hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-Rotunda font-bold mb-3 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                SEO & Marketing Services
                            </h3>
                            <p class="text-gray-600">SEO results depend on external factors. We cannot guarantee specific rankings; no refunds will be given once work starts.</p>
                        </div>

                        <div class="p-6 border border-gray-200 rounded-2xl hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-Rotunda font-bold mb-3 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                                E-commerce Marketing
                            </h3>
                            <p class="text-gray-600">Partial refunds may be issued if agreed promotional activities aren't completed. No refunds for paid ads or completed promotions.</p>
                        </div>
                    </div>
                </section>

                <section class="bg-blue-50 p-8 rounded-3xl">
                    <div class="flex items-center gap-3 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/></svg>
                        <h2 class="font-['Rotunda'] text-2xl font-bold text-gray-900">3. How to Request a Refund</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div>
                            <span class="text-3xl font-bold text-blue-200 block mb-2">01</span>
                            <p class="text-gray-700">Send an email to our support with your request.</p>
                        </div>
                        <div>
                            <span class="text-3xl font-bold text-blue-200 block mb-2">02</span>
                            <p class="text-gray-700">Explain why you want a refund and include proof.</p>
                        </div>
                        <div>
                            <span class="text-3xl font-bold text-blue-200 block mb-2">03</span>
                            <p class="text-gray-700">We will review your request within 7 business days.</p>
                        </div>
                        <div>
                            <span class="text-3xl font-bold text-blue-200 block mb-2">04</span>
                            <p class="text-gray-700">If approved, processed within 10 business days.</p>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="flex items-center gap-3 mb-6 border-b pb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                        <h2 class="font-['Rotunda'] text-2xl font-bold text-gray-900">4. Situations Where Refunds Are Not Given</h2>
                    </div>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start gap-3">
                            <span class="mt-1.5 h-2 w-2 rounded-full bg-red-400 shrink-0"></span>
                            <span>If you <span class="font-bold text-gray-800">approved</span> the work and received the final files.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1.5 h-2 w-2 rounded-full bg-red-400 shrink-0"></span>
                            <span>If delays were caused by you (late responses or missing information).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1.5 h-2 w-2 rounded-full bg-red-400 shrink-0"></span>
                            <span>If your expectations were <span class="font-bold text-gray-800">not realistic</span> or changed after the work started.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1.5 h-2 w-2 rounded-full bg-red-400 shrink-0"></span>
                            <span>If the service was completed and <span class="font-bold text-gray-800">already used</span>.</span>
                        </li>
                    </ul>
                </section>

                <section class="bg-gray-200 text-black p-10 rounded-3xl text-center">
                    <h2 class="font-['Rotunda'] text-3xl font-bold mb-4">Questions?</h2>
                    <p class="text-gray-700 mb-8">If you have any questions about refunds, please contact us at:</p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <p><strong>Email:</strong> embossitworld@gmail.com</p>
                    <p><strong>Phone:</strong> +92 313 3855347</p>
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