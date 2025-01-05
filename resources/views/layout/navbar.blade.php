 @include('cust.login.login')
 <header class="fixed scroll backdrop-blur-lg inset-x-0 top-0 z-50">
     <nav class="flex  items-center justify-between p-6">
         <div>
             <a href="#" class="text-blue-400 text-xl font-semibold">LOGO</a>
         </div>
         {{-- login Button --}}
         <div class="hidden md:flex">
             <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                 class=" px-6 py-2 border-2 border-blue-500 rounded-md bg-transparent hover:border-blue-800 hover:text-blue-800" type="button">
                <span class="font-bold text-blue-500  hover:border-blue-800 hover:text-blue-800">
                    LOGIN
                    </span>
             </button>
         </div>
         {{-- toogle menu --}}
         <div class="md:hidden flex items-center">
             <button id="menu-toggle" class="text-black">
                 <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                     </path>
                 </svg>
                 <span class="sr-only">Toggle menu</span>
             </button>
         </div>
     </nav>

     <!-- Mobile Menu -->
     <div id="mobile-menu" class="hidden absolute inset-x-0 top-16 bg-zinc-900 p-6">
         <a href="#" class="block text-white py-2">LOGIN</a>
     </div>

 </header>
 <div class="relative h-screen bg-cover bg-center " style="background-image: url('/images/bg2.jpg')">

     <div class="absolute inset-0 flex items-center justify-center">
         <h1 class="text-9xl md:text-9xl sm:text-3xl text-black text-center">NOBAR JAKSEL</h1>
     </div>
 </div>
