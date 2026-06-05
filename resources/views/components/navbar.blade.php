<div id="HamBurger-Overlay" class="fixed hidden inset-0 bg-black/40 z-10"></div>

<div id="ham-burger" class="w-72 z-60 h-screen overflow-x-hidden fixed top-0 left-0 bg-white flex flex-col transform -translate-x-full transition-transform duration-500">

    <svg id="closeHamburger" class="absolute top-2 right-2 cursor-pointer" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24"width="28"height="28"fill="none"stroke="currentColor"stroke-width="1"stroke-linecap="round"stroke-linejoin="round">
        <path d="M18 6L6.00081 17.9992M17.9992 18L6 6.00085"/>
    </svg>

    <div class="flex justify-center mt-14 mb-3">
        <div class="border border-gray-200 flex w-60 h-8 self-center">
            <input id="service-input" class="w-full h-8 p-2 text-sm outline-none" type="text" placeholder="Search for any service...">

            <button class="h-8 w-10 flex items-center justify-center cursor-pointer bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"width="20"height="20"fill="none"stroke="black"stroke-width="1">
                    <path d="M17 17L21 21"/>
                    <path d="M19 11C19 6.58 15.41 3 11 3C6.58 3 3 6.58 3 11C3 15.41 6.58 19 11 19C15.41 19 19 15.41 19 11Z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="flex-1 overflow-y-auto overflow-x-hidden">

    <ul class="w-70 flex flex-col p-4 text-xs font-medium">

        <a href="/"><li class="py-3 border-b border-gray-300">HOME</li></a>
        <div class="flex justify-between items-center py-3 border-b border-gray-300 pr-1">
        <a href="/shop"><li id="Burger-Services">OUR SERVICES</li></a>
        <span>
            <svg id="servicesArrow" class="cursor-pointer transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="21" height="21" color="currentColor" fill="none" stroke="gray" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9" />
            </svg>
        </span>
        </div>
        <div id="services-menu" class="max-h-0 overflow-hidden transition-all duration-300">
        <ul>
            <div class="flex justify-between items-center py-3 border-b border-gray-300 pl-1.5 pr-1">
            <li>Website Development</li>
                <span>
                    <svg id="submenu-arrow" class="cursor-pointer transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="21" height="21" color="currentColor" fill="none" stroke="gray" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9" />
                    </svg>
                </span>
            </div>
            <div id="services-submenu" class="max-h-0 overflow-hidden transition-all duration-300">
            <ul>
                <li class="py-3 border-b border-gray-300 pl-2.5">Shopify</li>
                <li class="py-3 border-b border-gray-300 pl-2.5">Wordpress</li>
                <li class="py-3 border-b border-gray-300 pl-2.5">Custom Website</li>
            </ul>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-gray-300 pl-1.5 pr-1">
            <li>SEO</li>
                <span>
                    <svg id="submenu-arrow2" class="cursor-pointer transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="21" height="21" color="currentColor" fill="none" stroke="gray" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9" />
                    </svg>
                </span>
            </div>
            <div id="services-submenu2" class="max-h-0 overflow-hidden transition-all duration-300">
            <ul>
                <li class="py-3 border-b border-gray-300 pl-2.5">Off-Page SEO</li>
                <li class="py-3 border-b border-gray-300 pl-2.5">On-Page SEO</li>
                <li class="py-3 border-b border-gray-300 pl-2.5">Technical SEO</li>
                <li class="py-3 border-b border-gray-300 pl-2.5">Full SEO Package</li>
            </ul>
            </div>
            <li class="py-3 border-b border-gray-300 pl-1.5">Guest Posting</li>
            <li class="py-3 border-b border-gray-300 pl-1.5">GEO (Generative Engine Optimization)</li>
            <li class="py-3 border-b border-gray-300 pl-1.5">PPC Marketing</li>
            <li class="py-3 border-b border-gray-300 pl-1.5">Social Media Marketing</li>
            <li class="py-3 border-b border-gray-300 pl-1.5">E-Commerce Marketing</li>
            <li class="py-3 border-b border-gray-300 pl-1.5">Video Editing</li>
            <li class="py-3 border-b border-gray-300 pl-1.5">Graphics And Design</li>
            <li class="py-3 border-b border-gray-300 pl-1.5">logo Design</li>
        </ul>
        </div>
        <a href="/about-us"></a><li class="py-3 border-b border-gray-300">ABOUT US</li>
        <a href="/blogs"><li class="py-3 border-b border-gray-300">BLOG</li></a>
    </ul>
    </div>

</div>

<div id="searchOverlay" class="fixed inset-0 bg-black/40 hidden z-40"></div>

<div id="searchBar" class="fixed top-0 left-0 w-full h-40 bg-white flex justify-center items-center flex-col gap-6
transform -translate-y-full transition-transform duration-500 z-60 max-[550px]:h-30 max-[550px]:gap-3">

    <svg id="closeSearch" class="absolute top-3 right-3 cursor-pointer max-[550px]:w-6 max-[550px]:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
        <path d="M18 6L6.00081 17.9992M17.9992 18L6 6.00085"/>
    </svg>

    <h1 class="text-2xl max-[550px]:text-sm">What Are You Looking For ?</h1>

    <div class="flex w-[50%] max-[550px]:w-[70%] max-[390px]:text-sm max-[390px]:h-8">
        <input id="service-input2" class="border w-full h-10 p-4 outline-none" type="text" placeholder="Search for any service...">

        <button class="h-10 w-10 bg-black flex items-center justify-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="white" stroke-width="2">
                <path d="M17 17L21 21"/>
                <path d="M19 11C19 6.58 15.41 3 11 3C6.58 3 3 6.58 3 11C3 15.41 6.58 19 11 19C15.41 19 19 15.41 19 11Z"/>
            </svg>
        </button>
    </div>

</div>

<nav id="navbar"
  class="flex font-Nunito justify-between sticky top-0 bg-white items-center z-50 p-5 pl-6 pr-6 min-[1500px]:justify-around transition-all duration-300">
      <div id="logo">
        <a href="/" target="_blank"><img loading="lazy" src="/images/logo/logo.webp" alt="Embossitworld-Logo" class="w-50 max-[550px]:w-43 max-[390px]:w-38 max-[315px]:w-35"></a>
    </div>

    <div class="nav-pages max-[970px]:hidden">
        <ul class="ul flex gap-2 font-bold">

            <a href="/" target="_blank">
                <li class="p-2 pl-3 pr-3 rounded transition ease-in-out duration-300 cursor-pointer
                hover:bg-gray-100
                {{ request()->is('/') ? 'bg-gray-100' : '' }}">
                HOME
                </li>
            </a>

            <div class="relative group">
  <a href="/shop" target="_blank">
  <div class="flex gap-2 justify-center items-center p-2 pl-3 pr-3 rounded transition ease-in-out duration-300 cursor-pointer hover:bg-gray-100 {{ request()->is('shop') ? 'bg-gray-100' : '' }}">
    
    <li>OUR SERVICES</li>

    <img loading="lazy" src="/images/svgs/downarrow.svg" alt="Downarrow">
    
  </div>
</a>

<ul class="absolute left-0 mt-1 w-60 bg-white rounded border font-light text-gray-600 border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
  
  <li id="web-develop" class="relative group/seo flex justify-between pr-5 items-center px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">
    <span>Website Development</span>
    <svg id="rightarrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
      fill="none" stroke="#cecece" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <path d="M9 6C9 6 15 10.4189 15 12C15 13.5812 9 18 9 18" />
    </svg>

    <ul class="pt-1 pb-1 absolute bg-white top-0 left-full ml-1 w-50 text-center rounded border font-light text-gray-600 border-gray-100 opacity-0 invisible group-hover/seo:opacity-100 group-hover/seo:visible transition-all duration-200">
      <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Shopify</li>
      <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Wordpress Website</li>
      <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Custom Website</li>
    </ul>
  </li>

  <li id="SEO" class="relative group/seo flex justify-between pr-5 items-center px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">
    <span>SEO</span>
    <svg id="rightarrow2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
      fill="none" stroke="#cecece" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <path d="M9 6C9 6 15 10.4189 15 12C15 13.5812 9 18 9 18" />
    </svg>

    <ul class="pt-1 pb-1 absolute bg-white top-0 left-full ml-1 w-50 text-center rounded border font-light text-gray-600 border-gray-100 opacity-0 invisible group-hover/seo:opacity-100 group-hover/seo:visible transition-all duration-200">
      <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Off-Page SEO</li>
      <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">On-Page SEO</li>
      <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Technical SEO</li>
      <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Full SEO Package</li>
    </ul>
  </li>

  <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Guest Posting</li>
  <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">GEO (Generative Engine Optimization)</li>
  <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">PPC Marketing</li>
  <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Social Media Marketing</li>
  <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">E-Commerce Marketing</li>
  <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Video Editing</li>
  <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Graphics & Design</li>
  <li class="px-2 py-1 hover:bg-gray-100 hover:text-black cursor-pointer">Logo Design</li>

</ul>

                    </div>
        

            <a href="/about-us" target="_blank">
                <li class="p-2 pl-3 pr-3 rounded transition ease-in-out duration-300 cursor-pointer
                hover:bg-gray-100
                {{ request()->is('about-us') ? 'bg-gray-100' : '' }}">
                ABOUT US
                </li>
            </a>

            <a href="/blogs" target="_blank">
                <li class="p-2 pl-3 pr-3 rounded transition ease-in-out duration-300 cursor-pointer
                hover:bg-gray-100
                {{ request()->is('blogs') ? 'bg-gray-100' : '' }}">
                BLOG
                </li>
            </a>

        </ul>
    </div>

    <div class="nav-end flex gap-4 items-center justify-center max-[610px]:gap-3 max-[550px]:gap-2 max-[390px]:gap-1">

        <svg id="Menu" class="cursor-pointer hidden hover:stroke-blue-800 max-[970px]:flex max-[610px]:w-6.25 max-[390px]:w-5.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" color="#000000" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
    <path d="M4 5L20 5" /><path d="M4 12L20 12" /><path d="M4 19L20 19" />
        </svg>

        <svg id="openSearch" class="hover:stroke-blue-800 cursor-pointer max-[610px]:w-6.25 max-[390px]:w-5.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" color="#000000" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 17L21 21" />
            <path d="M19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C15.4183 19 19 15.4183 19 11Z" />
        </svg>

        <a href="/my-account" target="_blank">
            <svg class="hover:stroke-blue-800 max-[610px]:w-6.25 max-[390px]:w-5.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#141B34" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 8.5C17 5.73858 14.7614 3.5 12 3.5C9.23858 3.5 7 5.73858 7 8.5C7 11.2614 9.23858 13.5 12 13.5C14.7614 13.5 17 11.2614 17 8.5Z" />
                <path d="M19 20.5C19 16.634 15.866 13.5 12 13.5C8.13401 13.5 5 16.634 5 20.5" />
            </svg>
        </a>

        <a href="/cart" target="_blank">
            <div id="cart-div" class="group border flex items-center gap-3 p-1.5 rounded hover:bg-blue-900 hover:text-white hover:border-blue-900 transition ease-in-out duration-300 max-[610px]:border-none">
                <div class="relative">
                    <svg id="cart" class="max-[610px]:w-6.25 max-[390px]:w-5.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="27" height="27" color="currentColor" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M8 7H16C17.8856 7 18.8284 7 19.4142 7.58579C20 8.17157 20 9.11438 20 11V15C20 18.2998 20 19.9497 18.9749 20.9749C17.9497 22 16.2998 22 13 22H11C7.70017 22 6.05025 22 5.02513 20.9749C4 19.9497 4 18.2998 4 15V11C4 9.11438 4 8.17157 4.58579 7.58579C5.17157 7 6.11438 7 8 7Z" />
    <path d="M16 9.5C16 5.63401 14.2091 2 12 2C9.79086 2 8 5.63401 8 9.5" />
        </svg>
                    <span id="item-no" class="transition absolute -top-1 -right-1 bg-blue-800 text-white text-xs w-4 h-4 flex item-center justify-center rounded-full group-hover:bg-blue-100 group-hover:text-black max-[550px]:w-3 max-[550px]:h-3 max-[550px]:text-[10px] max-[550px]:top-0 max-[550px]:right-0">
                        0
                    </span>
                </div>
                <span class="max-[610px]:hidden">$0.00</span>
            </div>
        </a>

    </div>
</nav>