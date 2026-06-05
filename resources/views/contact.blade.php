<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Contact Us - Emboss It World</title>
</head>
<body>
    <x-navbar />

    <section class="min-h-screen bg-white flex items-center justify-center p-6">
    <div class="w-full max-w-8xl flex flex-col">
        
        <div class="bg-gray-200 border border-gray-500 rounded-3xl p-8 md:p-10 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Get in Touch</h2>
            <p class="text-gray-700 mb-8">We'd love to hear from you. Reach out via any of these channels.</p>

            <div class="flex flex-col md:flex-row justify-center gap-6 text-sm font-medium text-gray-800">
                <div class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>+44 7463 014916</span>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span>embossitworld@gmail.com</span>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    <span>London, UK</span>
                </div>
            </div>
        </div>
        <x-contact-section />
</section>
    <x-cta />
    <x-footer />
</body>
</html>