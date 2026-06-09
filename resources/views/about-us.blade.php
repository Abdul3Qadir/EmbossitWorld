<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>About Us - Emboss It World</title>
</head>
<body>
    @include('pages-components.navbar')
    <main class="bg-white font-Rotunda-Regular text-[#333]">
    <section class="relative mx-5 px-6 py-20 text-center bg-gray-100 rounded-3xl">
    
    <div class="relative z-10 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-bold text-[#0c2a58] mb-4">About Us</h1>        
        
        <h2 class="text-2xl md:text-3xl font-medium text-gray-800 mb-6 leading-tight">
            Welcome to <span class="font-bold max-[280px]:text-xl text-blue-700">EMBOSSITWORLD</span> - Your Digital Growth Partner
        </h2>
        
        <p class="text-gray-600 leading-relaxed text-lg">
            At EMBOSSITWORLD, we believe every business deserves a strong online presence. Since 2010, we've helped brands and individuals grow digitally through services like graphic design, logo design, video editing, web development, social media marketing, eCommerce marketing, and SEO. Our focus is on delivering creative, high-quality solutions that drive real results.
        </p>
    </div>
</section>

    <section class="max-w-7xl rounded-2xl mx-auto py-10">
        <div class=" px-6 mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h3 class="text-3xl font-Rotunda font-black">Who We Are</h3>
                <p class="text-gray-600">We are a passionate team of designers, developers, marketers, and creative experts who love what we do. Our mission is to help businesses grow and stand out online. Whether you need a stunning website, a powerful logo, engaging social media content, or strong SEO strategies, we have the skills and experience to make it happen.</p>
                <div class="bg-white p-6 rounded-xl border-l-4 border-blue-600 shadow-sm">
                    <p class="italic text-gray-700">"At <b>EMBOSSITWORLD</b> we focus on innovation, creativity, and results. We understand your business needs and provide customized solutions that deliver real success."</p>
                </div>
            </div>
            <div class="flex justify-center">
                <img loading="lazy" src="/images/about-imgs/team.png" alt="">
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-Rotunda font-black mb-4">Our Services - What We Offer</h2>
            <p class="text-gray-500">We provide a wide range of digital services to help businesses build their brand.</p>
        </div>

        <div class="grid grid-cols-1 min-[620px]:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="group p-8 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="mb-6 w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2.828 2.828 0 114 4L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div>
                <h4 class="text-xl font-Rotunda mb-4 text-gray-800">1. Graphic & Logo Designing</h4>
                <ul class="space-y-3">
                    <li class="flex items-center text-sm text-gray-600"><svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg> Unique & Memorable Logos</li>
                    <li class="flex items-center text-sm text-gray-600"><svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg> Business Cards & Brochures</li>
                </ul>
            </div>

            <div class="group p-8 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="mb-6 w-14 h-14 bg-red-50 text-red-600 rounded-2xl flex items-center justify-center group-hover:bg-red-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <h4 class="text-xl font-Rotunda mb-4 text-gray-800">2. Video Editing</h4>
                <p class="text-sm text-gray-500 mb-4">High-quality editing for YouTube, social media reels, and corporate videos.</p>
            </div>

            <div class="group p-8 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="mb-6 w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h4 class="text-xl font-Rotunda mb-4 text-gray-800">3. Web Development</h4>
                <ul class="space-y-3 text-sm text-gray-600">
                    <li>🌐 Custom Responsive Websites</li>
                    <li>🛒 eCommerce (Shopify, WooCommerce)</li>
                </ul>
            </div>
            <div class="group p-8 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="mb-6 w-14 h-14 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center group-hover:bg-green-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h4 class="text-xl font-Rotunda mb-4 text-gray-800">4. SEO Optimization</h4>
                <ul class="space-y-3">
                    <li class="flex items-center text-sm text-gray-600"><svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg> On-Page & Off-Page SEO</li>
                    <li class="flex items-center text-sm text-gray-600"><svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg> Technical SEO & Keyword Research</li>
                </ul>
            </div>

            <div class="group p-8 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="mb-6 w-14 h-14 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                </div>
                <h4 class="text-xl font-Rotunda mb-4 text-gray-800">5. Social Media Marketing</h4>
                <p class="text-sm text-gray-500 mb-4">Grow your brand presence and engage with customers on all major social platforms.</p>
            </div>

            <div class="group p-8 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="mb-6 w-14 h-14 bg-yellow-50 text-yellow-600 rounded-2xl flex items-center justify-center group-hover:bg-yellow-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h4 class="text-xl font-Rotunda mb-4 text-gray-800">6. E-commerce Marketing</h4>
                <ul class="space-y-3 text-sm text-gray-600">
                    <li>🎯 Targeted Product Ads</li>
                    <li>📈 Conversion Rate Optimization</li>
                </ul>
            </div>
            </div>
    </section>

    <section class="bg-white py-18 relative overflow-hidden border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-2xl md:text-4xl font-Rotunda font-bold text-[#000000] mb-4 italic">Why Choose <span class="text-blue-700">EMBOSSITWORLD?</span></h2>
            <div class="w-16 h-1 bg-blue-600 mx-auto rounded-full"></div>
            <p class="mt-4 text-gray-500 max-w-2xl mx-auto">We don't just provide services; we build digital legacies with a focus on quality and innovation.</p>
        </div>

        <div class="grid grid-cols-1 min-[620px]:grid-cols-2 lg:grid-cols-6 gap-8">
            
            <div class="lg:col-span-2 group p-8 bg-gray-50 border border-gray-100 rounded-3xl hover:bg-white hover:border-blue-200 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-[#1e3a8a] mb-3">Experienced Team</h3>
                <p class="text-gray-600 text-sm leading-relaxed">10+ years of deep-rooted expertise in the digital industry.</p>
            </div>

            <div class="lg:col-span-2 group p-8 bg-gray-50 border border-gray-100 rounded-3xl hover:bg-white hover:border-purple-200 transition-all duration-300">
                <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-purple-600 group-hover:text-white transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-[#1e3a8a] mb-3">Creative Solutions</h3>
                <p class="text-gray-600 text-sm leading-relaxed">No templates. Every project is customized for your brand identity.</p>
            </div>

            <div class="lg:col-span-2 group p-8 bg-gray-50 border border-gray-100 rounded-3xl hover:bg-white hover:border-green-200 transition-all duration-300">
                <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-[#1e3a8a] mb-3">Affordable Pricing</h3>
                <p class="text-gray-600 text-sm leading-relaxed">High-quality services at competitive rates for best value.</p>
            </div>

            <div class="hidden lg:block lg:col-span-1"></div>

            <div class="lg:col-span-2 group p-8 bg-gray-50 border border-gray-100 rounded-3xl hover:bg-white hover:border-orange-200 transition-all duration-300">
                <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-orange-600 group-hover:text-white transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-[#1e3a8a] mb-3">Proven Results</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Hundreds of success stories and satisfied clients worldwide.</p>
            </div>

            <div class="lg:col-span-2 group p-8 bg-gray-50 border border-gray-100 rounded-3xl hover:bg-white hover:border-red-200 transition-all duration-300">
                <div class="w-12 h-12 bg-red-100 text-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-red-600 group-hover:text-white transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-[#1e3a8a] mb-3">Customer-Centric</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Your success is our priority. We work as your partners.</p>
            </div>

            <div class="hidden lg:block lg:col-span-1"></div>
        </div>
    </div>
</section>

    <section class="max-w-5xl mx-auto px-6 pt-20 text-center">
        <h3 class="text-3xl font-Rotunda font-black mb-4">Our Mission & Vision</h3>
        <p class="text-gray-600 mb-8 leading-loose">
            Our vision is to become a leading digital agency, empowering businesses worldwide to achieve online success. We prioritize innovation, creativity, and results-driven strategies to deliver the best solutions.
        </p>
        <a href="/contact-us" class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition shadow-lg">
            Let's Grow Together! 
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </section>
</main>

    @include('pages-components.contact-section')

    @include('pages-components.cta')

    @include('pages-components.back-to-top')

    @include('pages-components.footer')
</body>
</html>