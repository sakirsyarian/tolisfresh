<nav class="w-full px-5 sm:px-24 py-3 md:py-5 top-0 z-30 bg-[#cfe8a9]">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="index">
            <img src="assets/img/logo-tolis.png" class="w-32">
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:bg-transparent uppercase">
                <li>
                    <a href="index" class="block font-bold py-2 pr-4 pl-3 text-green-700 md:hover:text-green-600 md:p-0" aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="product" class="block font-bold py-2 pr-4 pl-3 text-green-700 md:hover:bg-transparent md:border-0 md:hover:text-green-600 md:p-0">Produk</a>
                </li>
                <li>
                    <a href="order" class="block font-bold py-2 pr-4 pl-3 text-green-700 md:hover:bg-transparent md:border-0 md:hover:text-green-600 md:p-0">Pemesanan</a>
                </li>
                <!-- <li>
                    <a href="career" class="block font-bold py-2 pr-4 pl-3 text-green-700 md:hover:bg-transparent md:border-0 md:hover:text-green-600 md:p-0">Karir</a>
                </li> -->
                <li>
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="block uppercase font-bold py-2 pr-4 pl-3 text-green-700 md:hover:bg-transparent md:border-0 md:hover:text-green-600 md:p-0 inline-flex items-center" type="button">
                        Daftar
                        <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="hidden z-30 w-44 bg-white rounded divide-y divide-green-100 shadow" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 10.4px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="customer" class="block py-2 px-4 hover:bg-gray-100">Customer</a>
                            </li>
                            <li>
                                <a href="supplier" class="block py-2 px-4 hover:bg-gray-100">Supplier</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>