<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Embossitworld-Digital Marketing Agency</title>
</head>
<body class="selection:bg-[#6ca0f0]">
  @include('pages-components.navbar')
  <div class="m-3 mt-0 max-[990px]:m-4 max-[990px]:mt-0">
  <main rel="preload" as="image" style="background-image: url('/images/home-imgs/hero-banner.jpg')" class="flex flex-col justify-center items-center gap-4 font-Rotunda w-full 
             rounded-3xl bg-center bg-cover bg-no-repeat py-8 px-4
             aspect-4/3 md:aspect-auto md:min-h-[70vh]">
      <p class="text-center text-white text-5xl leading-16 max-[830px]:text-4xl max-[830px]:leading-14 max-[630px]:leading-11 max-[630px]:text-3xl max-[570px]:text-2xl max-[570px]:leading-8">
        Expand Your <br class="hidden max-[420px]:flex">Business <br> Capabilities with <br class="hidden max-[570px]:flex">EmbossitWorld
      </p>
      <div id="input" class="relative flex justify-center w-[55%] max-[900px]:w-[70%] max-[600px]:w-[65%] max-[400px]:w-[75%]">
  <input id="hero-sec-input" type="text" 
         class="outline-none w-full h-12 sm:h-13 bg-white px-5 text-[17px] font-sans rounded-[10px] placeholder-gray-600 max-[400px]:text-[15px] max-[400px]:h-11 max-[400px]:text-base placeholder:text-[13px] sm:placeholder:text-[15px] max-[315px]:placeholder:text-[12px]" 
         placeholder="Search for any service...">

  <button class="absolute right-0 top-1/2 -translate-y-1/2 h-full w-11.25 sm:w-12.5 bg-gray-100 flex items-center justify-center rounded-tr-[10px] rounded-br-[10px] cursor-pointer hover:bg-[#910048] transition duration-200">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="white" stroke-width="2">
      <path d="M17 17L21 21"/>
      <path d="M19 11C19 6.58 15.41 3 11 3C6.58 3 3 6.58 3 11C3 15.41 6.58 19 11 19C15.41 19 19 15.41 19 11Z"/>
    </svg>
  </button>
</div>
  </main>
  </div>

  @include('pages-components.carousel')

  
<section id="Commitment-Section" class="py-12 md:py-15 px-4">
  <div class="max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center justify-between gap-10">
    
    <div class="w-full lg:w-1/2 flex flex-col gap-6 text-left">
      <h2 class="font-Rotunda text-3xl md:text-[35px] text-gray-900 leading-tight max-w-2xl">
        Commitment to Quality and Security for Our Customers
      </h2>
      
      <div class="space-y-4">
        <div class="flex gap-4 items-start">
          <div class="shrink-0 mt-1">
            <img loading="lazy" src="images/svgs/check-mark.svg" alt="check" class="w-5 h-5">
          </div>
          <p class="text-gray-700 text-base md:text-lg">Our team is available 24/7 to assist with any questions or concerns.</p>
        </div>

        <div class="flex gap-4 items-start">
          <div class="shrink-0 mt-1">
            <img loading="lazy" src="images/svgs/check-mark.svg" alt="check" class="w-5 h-5">
          </div>
          <p class="text-gray-700 text-base md:text-lg">We offer a money-back guarantee for peace of mind.</p>
        </div>

        <div class="flex gap-4 items-start">
          <div class="shrink-0 mt-1">
            <img loading="lazy" src="images/svgs/check-mark.svg" alt="check" class="w-5 h-5">
          </div>
          <p class="text-gray-700 text-base md:text-lg">Robust anti-fraud protection ensures a secure experience.</p>
        </div>

        <div class="flex gap-4 items-start">
          <div class="shrink-0 mt-1">
            <img loading="lazy" src="images/svgs/check-mark.svg" alt="check" class="w-5 h-5">
          </div>
          <p class="text-gray-700 text-base md:text-lg">Quick response times to handle any urgent needs.</p>
        </div>
      </div>
    </div>

    <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
      <img 
        loading="lazy" 
        src="images/home-imgs/Commitment-for-our-Customers.png" 
        alt="Commitment for our Customers"
        class="w-full max-w-125 lg:max-w-full h-auto object-contain"
      >
    </div>

  </div>
</section>

@include('pages-components.service-carousel')

@include('pages-components.solution-section')

@include('pages-components.unique-in-market-section')

@include('pages-components.top-selling-products')

@include('pages-components.since-2010')

@include('pages-components.testimonials')

@include('pages-components.contact-section')

@include('pages-components.cta')

@include('pages-components.back-to-top')

  @include('pages-components.footer')
</body>
</html>