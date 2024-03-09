<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Page1</title>


   <link rel="stylesheet" href="{{ asset('css/app.css') }}">


   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
{{-- ito yung header ng page 1 --}}
   <header class="py-1 shadow-sm bg-white">
       <div class="container flex items-center justify-between">
           {{-- logo --}}
           <a href="#">
               <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-16">
               <h1 class="text-gray-700 hover:text-primary transision">RentEase</h1>
           </a>


           {{-- search area --}}
           <div class="w-full max-w-xl relative flex">
               <span class="absolute left-4 top-3 text-lg text-gray-400">
                   <i class="fas fa-search"></i>
               </span>
               <input type="text" class="w-full border border-primary border-r-l-0 pl-12 py-3 pr-3 rounded-1-md focus:outline-none" placeholder="Search">
               <button class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
           </div>


           {{-- yung tatlong icons --}}
           <div class="flex items-center space-x-4">


               {{-- listing a property button --}}
               <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                   <div class="text-2xl">
                       <i class="fas fa-house-flag"></i>
                   </div>
                   <div class="text-sx leading-3">Property</div>
               </a>


               {{-- account button --}}
               <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                   <div class="text-2xl">
                       <i class="fas fa-user"></i>
                   </div>
                   <div class="text-sx leading-3">Account</div>
               </a>
           </div>
       </div>
   </header>

{{-- navbar (1) --}}
   <div class="bg-gray-700">
       <div class="container flex">

            {{-- Location (mga city sa ncr) --}}
            <div class="mr-5">
                <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                    <span class="text-white">
                        <i class="fas fa-map-location-dot"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">Location</span>

                    <div class="absolute w-max left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">
                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-circle-check"></i>
                            <span class="ml-6 text-gray-600 text-sm">Anywhere</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Municipality of Pateros</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Caloocan City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Caloocan City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Marikina City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Makati City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Mandaluyong City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Muntinlupa City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">City of Manila</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Navotas City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">City of Malabon</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Valenzuela City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Pasay City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Pasig City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Parañaque City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Quezon City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">City of San Juan</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Las Piñas City</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <span class="ml-6 text-gray-600 text-sm">Taguig City</span>
                        </a>
                    </div>
                </div>
            </div>

           {{-- Property --}}
           <div class="mr-5">
            <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                <span class="text-white">
                    <i class="fas fa-list"></i>
                </span>
                <span class="capitalize ml-2 text-white">Property Type</span>

                <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-circle-check"></i>
                        <span class="ml-6 text-gray-600 text-sm">Any</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-building"></i>
                        <span class="ml-6 text-gray-600 text-sm">Apartment</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-cube"></i>
                        <span class="ml-6 text-gray-600 text-sm">Condominium</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-house"></i>
                        <span class="ml-6 text-gray-600 text-sm">House</span>
                    </a>
                </div>
            </div>
           </div>

           {{-- Price --}}
           <div class="mr-5">
            <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                <span class="text-white">
                    <i class="fas fa-peso-sign"></i>
                </span>
                <span class="capitalize ml-2 text-white">Price</span>

                <div class="absolute w-max left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-circle-check"></i>
                        <span class="ml-6 text-gray-600 text-sm">Any Price</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fas fa-peso-sign"></i>
                        <span class="ml-6 text-gray-600 text-sm">10k - 30k</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fas fa-peso-sign"></i>
                        <span class="ml-6 text-gray-600 text-sm">30k - 60k</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fas fa-peso-sign"></i>
                        <span class="ml-6 text-gray-600 text-sm">60k - 80k</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fas fa-peso-sign"></i>
                        <span class="ml-6 text-gray-600 text-sm">80k - 100k</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fas fa-peso-sign"></i>
                        <span class="ml-6 text-gray-600 text-sm">100k - 200k</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fas fa-peso-sign"></i>
                        <span class="ml-6 text-gray-600 text-sm">200k and Above</span>
                    </a>
                </div>
            </div>
           </div>

           {{-- bedrooms --}}
           <div class="mr-5">
            <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                <span class="text-white">
                    <i class="fas fa-bed"></i>
                </span>
                <span class="capitalize ml-2 text-white">Bedrooms</span>

                <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-circle-check"></i>
                        <span class="ml-6 text-gray-600 text-sm">All</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">1</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">2</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">3</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">4</span>
                    </a>


                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">5+</span>
                    </a>
                </div>
            </div>
           </div>

           {{-- Login and Register --}}
           <div class="flex items-center hover:underline justify-between ml-32 flex-grow pl-12">

               <div class="flex items-center space-x-6 capitalize">
                   {{-- for spacing --}}
               </div>


               {{-- para dito talaga tong div na to--}}
               <a href="#" class="text-gray-200 hover:text-white transition">Login/Register</a>
           </div>
       </div>
   </div>

{{-- navbar (2) -TESTING- --}}
   <div class="bg-gray-700">
    <div class="container flex">

         {{-- term--}}
         <div class="mr-5">
             <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                 <span class="text-white">
                     <i class="fas fa-calendar-days"></i>
                 </span>
                 <span class="capitalize ml-2 text-white">Short Term</span>

                 <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">
                     <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                         <i class="fa-solid fa-circle-xmark"></i>
                         <span class="ml-6 text-gray-600 text-sm">Exlude</span>
                     </a>

                     <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-circle-check"></i>
                        <span class="ml-6 text-gray-600 text-sm">Inlcude</span>
                    </a>

                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-circle-minus"></i>
                        <span class="ml-6 text-gray-600 text-sm">Only</span>
                    </a>
                 </div>
             </div>
         </div>

        {{-- Property --}}
        <div class="mr-5">
         <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
             <span class="text-white">
                 <i class="fas fa-ruler-combined"></i>
             </span>
             <span class="capitalize ml-2 text-white">Floor Area</span>

             <div class="absolute w-max left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">
                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <i class="fas fa-ruler-combined"></i>
                    <span class="ml-6 text-gray-600 text-sm">Below 39sqm</span>
                 </a>

                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <i class="fas fa-ruler-combined"></i>
                    <span class="ml-6 text-gray-600 text-sm">40sqm - 161sqm</span>
                 </a>

                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <i class="fas fa-ruler-combined"></i>
                    <span class="ml-6 text-gray-600 text-sm">161sqm - 339sqm</span>
                 </a>

                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <i class="fas fa-ruler-combined"></i>
                    <span class="ml-6 text-gray-600 text-sm">340sqm - 1021sqm</span>
                 </a>

                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <i class="fas fa-ruler-combined"></i>
                    <span class="ml-6 text-gray-600 text-sm">1021sqm and Above</span>
                 </a>
             </div>
         </div>
        </div>

        {{-- bathrooms --}}
        <div class="mr-5">
         <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
             <span class="text-white">
                 <i class="fas fa-bath"></i>
             </span>
             <span class="capitalize ml-2 text-white">Bathrooms</span>

             <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">
                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                     <i class="fa-solid fa-circle-check"></i>
                     <span class="ml-6 text-gray-600 text-sm">All</span>
                 </a>


                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                     <span class="ml-6 text-gray-600 text-sm">1</span>
                 </a>


                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                     <span class="ml-6 text-gray-600 text-sm">2</span>
                 </a>


                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                     <span class="ml-6 text-gray-600 text-sm">3</span>
                 </a>


                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                     <span class="ml-6 text-gray-600 text-sm">4</span>
                 </a>


                 <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                     <span class="ml-6 text-gray-600 text-sm">5+</span>
                 </a>
             </div>
         </div>
        </div>

        {{-- amenities --}}
        <div class="mr-5">
            <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                <span class="text-white">
                    <i class="fas fa-person-shelter"></i>
                </span>
                <span class="capitalize ml-2 text-white">Amenities</span>

                <div class="absolute w-max left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-bars"></i>
                        <span class="ml-6 text-gray-600 text-sm">Balcony</span>
                    </a>

                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-person-swimming"></i>
                        <span class="ml-6 text-gray-600 text-sm">Swimming Pool</span>
                    </a>

                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-dumbbell"></i>
                        <span class="ml-6 text-gray-600 text-sm">Gym</span>
                    </a>

                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-person-military-pointing"></i>
                        <span class="ml-6 text-gray-600 text-sm">24/7 Security</span>
                    </a>

                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-square-parking"></i>
                        <span class="ml-6 text-gray-600 text-sm">Parking</span>
                    </a>

                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <i class="fa-solid fa-paw"></i>
                        <span class="ml-6 text-gray-600 text-sm">Pets Allowed</span>
                    </a>
                </div>
            </div>
           </div>
    </div>
</div>

{{-- banner (do we need this ?)--}}
   {{-- <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('https://images.pexels.com/photos/5407074/pexels-photo-5407074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
        <div class="container">
            <h1 class="text-4xl text-white font-medium mb-4">
                RenEase
            </h1>
            <p class="text-xl text-white font-medium mb-4">
                Renting a place to stay is like unlocking a door to possibilities, <br>
                where every key moment becomes a chapter in the story of your life.
            </p>
            <div class="mt-12">
                <a href="#" class="bg-red-800 text-white px-8 py-3 font-medium rounded-md border border-red-800 hover:border-primary hover:bg-transparent hover:text-white">Rent Now</a>
            </div>
        </div>
   </div> --}}

{{-- feature (do we need this also??)--}}
   {{-- <div class="container py-16">
        <div class="w-10/12 grid grid-cols-3 gap-6 mx-auto justify-center">
            <div class="border border-primary rounded-md px-3 py-6 flex justify-center items-center gap-5">
                <img src="https://www.svgrepo.com/show/533055/star-exclamation.svg" alt="1f" class="w-auto h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Browse to your hearts content</h4>
                    <p class="text-gray-500 text-sm">FOR FREE</p>
                </div>
            </div>

            <div class="border border-primary rounded-md px-3 py-6 flex justify-center items-center gap-5">
                <img src="https://www.svgrepo.com/show/533055/star-exclamation.svg" alt="1f" class="w-auto h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Browse to your hearts content</h4>
                    <p class="text-gray-500 text-sm">FOR FREE</p>
                </div>
            </div>

            <div class="border border-primary rounded-md px-3 py-6 flex justify-center items-center gap-5">
                <img src="https://www.svgrepo.com/show/533055/star-exclamation.svg" alt="1f" class="w-auto h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Browse to your hearts content</h4>
                    <p class="text-gray-500 text-sm">FOR FREE</p>
                </div>
            </div>
        </div>
   </div> --}}

{{-- browing by categories?? --}}
   <div class="container py-16">
        <h2 class="text-3xl font-medium text-gray-800 mb-6">Shop by Category</h2>

            <div class="grid grid-cols-4 gap-4">
                {{-- 1 --}}
                <div class="relative rounded-sm overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1518835633655-f1e358a1d685?q=80&w=1650&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                        <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Location</a>
                </div>
                {{-- 2 --}}
                <div class="relative rounded-sm overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1546&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                        <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Property Type</a>
                </div>
                {{-- 3 --}}
                <div class="relative rounded-sm overflow-hidden group">
                        <img src="https://plus.unsplash.com/premium_photo-1680942933207-44c205c2e803?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                        <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Price</a>
                </div>
                {{-- 4 --}}
                <div class="relative rounded-sm overflow-hidden group">
                        <img src="https://plus.unsplash.com/premium_photo-1670076505419-99468d952c61?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                        <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Bedrooms</a>
                </div>
                {{-- 5 --}}
                <div class="relative rounded-sm overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1434082033009-b81d41d32e1c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                        <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Short Term</a>
                </div>
                {{-- 6 --}}
                <div class="relative rounded-sm overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1620626011761-996317b8d101?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                        <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Bathrooms</a>
                </div>
                {{-- 7 --}}
                <div class="relative rounded-sm overflow-hidden group">
                        <img src="https://plus.unsplash.com/premium_photo-1676823547757-f00b51e17eff?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                        <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Floor Area</a>
                </div>
                {{-- 8 --}}
                <div class="relative rounded-sm overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1668911128602-9c03cf73df99?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-cover">
                        <a href="#" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Amenities</a>
                </div>
            </div>
   </div>


</body>
</html>



