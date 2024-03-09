<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>FindFlat</title>


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
                <h1 class="text-gray-700 hover:text-red-500 transision">FindFlat</h1>
            </a>


            {{-- search area --}}
            <div class="w-full max-w-xl relative flex">
                <span class="absolute left-4 top-3 text-lg text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-1-md focus:outline-none" placeholder="Search">
                <button class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
            </div>


            {{-- yung icons --}}
            <div class="flex items-center space-x-5">


                {{-- listing a property button --}}
                <a href="listproperty" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fas fa-house-flag"></i>
                    </div>
                    <div class="text-sx leading-3">Property</div>
                </a>



                {{-- account button --}}
                <a href="user" class="text-center text-gray-700 hover:text-primary transition relative">

                    <div class="text-2xl">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="text-sx leading-3">Account</div>
                </a>

                {{-- Log out button --}}
                <a href="user" class="text-center text-gray-700 hover:text-primary transition relative">

                    <div class="text-2xl">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <div class="text-sx leading-3">Log Out</div>
                </a>

            </div>
        </div>
    </header>

{{-- navbar (1) --}}
   <div class="bg-gray-700">
       <div class="container flex">

            {{-- categories --}}
            <div class="mr-5">
                <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                    <span class="text-white">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">All Categories</span>

                    <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">

                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-map-location-dot w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Location</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-list w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Property Type</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-peso-sign w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Price</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-bed w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Bedrooms</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-calendar-days w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Short Term</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-bath w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Bathrooms</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-ruler-combined w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Floor Area</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-person-shelter w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Amenities</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- end of categories --}}

            {{-- navbar links --}}
            <div class="flex items-center justify-between flex-grow pl-12">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="index" class="text-gray-200 hover:underline hover:text-white transition">Home</a>
                    <a href="rentals" class="text-gray-200 hover:underline hover:text-white transition">Rent</a>
                    <a href="aboutus" class="text-gray-200 hover:underline hover:text-white transition">About Us</a>
                </div>
                {{-- login and register --}}
                <a href="login" class="text-gray-200 hover:underline hover:text-white transition">Login/Register</a>
                {{-- end of login and register --}}
            </div>
            {{-- end of navbar links --}}
       </div>
   </div>
{{-- end of navbar --}}

{{-- banner (do we need this ?)--}}
   <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('https://images.pexels.com/photos/5407074/pexels-photo-5407074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
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
   </div>
{{-- end of banner --}}

{{-- q&a ? --}}
<div class="bg-white pt-16 pb-12 border-t border-gray-100">
    <div class="container grid grdi-cols-1 py-4">
        <h3 class="text-black font-semibold text-xl py-5">House and Lot for Rent: A Smart Option Before Getting Your Forever Home</h3>
        <p class="text-gray-800 font-medium text-justify">
            The Philippine economy has been growing for more than ten years, and this trend is expected to continue.
            Some people now find it more sensible to rent a home due to the Philippines' increasing real estate property values.
            <br><br>
            Additionally, vacant lots are getting harder to come by, especially in metropolitan regions like Metro Manila.
            The trend is leading to an increase in the value of houses and lots.
            Even if price increases are a drawback, those looking for real estate might want to think about renting a home and land.
            Renters in the future will profit from owning a property without having to commit to anything financially or otherwise.
        </p>

        <h3 class="text-black font-semibold text-xl py-5">Average Rental Prices for Houses and Lots for Rent</h3>
        <p class="text-gray-800 font-medium text-justify">
            The most affordable house and lot for rent in the Philippines cost Php 4,000 monthly.
            If you are after luxury living in a progressive city, expect that the fee of a house and lot for rent can reach up to Php 2.6 million monthly.
        </p>

        <h3 class="text-black font-semibold text-xl py-5">Why Rent a House and Lot</h3>
        <p class="text-gray-800 font-medium text-justify">
            Renting a house and lot is one option to get well-built residences without having to pay a lot of money upfront.
            Renters can live in excellent residential projects that are close to institutions and establishments that provide a variety of goods, services, entertainment, and conveniences.
            <br><br>
            There are also rent-to-own residences and lots available.
            These are good for people who wish to buy a house but don't have the funds on hand to pay the entire price right now.
            Most property owners want a leasing period of at least six months to one year for people interested in renting to acquire a house and lot.
        </p>
    </div>
</div>
{{-- end of q&a ? --}}

{{--  --}}
<div class="container mx-auto py-8">
    <!-- Company Story Section -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Company Story</h2>
        <p class="text-gray-700">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan molestie felis, eget rutrum
            nisi vehicula quis. Phasellus at magna nec massa dapibus feugiat.
        </p>
    </section>

    <!-- Team Member Section -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Team Member</h2>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-2">John Doe</h3>
                    <p class="text-gray-700">Co-founder & CEO</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Jane Doe</h3>
                    <p class="text-gray-700">Co-founder & CEO</p>
                </div>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </section>

    <!-- Product or Service Information Section -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Product or Service Information</h2>
        <p class="text-gray-700">
            Our company offers a wide range of products/services to meet the needs of our customers. Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Duis accumsan molestie felis, eget rutrum nisi vehicula
            quis.
        </p>
    </section>

    <!-- Updates or News Section -->
    <section>
        <h2 class="text-2xl font-bold mb-4">Updates or News</h2>
        <div class="max-w-lg">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
                <h3 class="text-xl font-bold mb-2">New Product Launch</h3>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan
                    molestie felis, eget rutrum nisi vehicula quis.</p>
            </div>
            <!-- Add more updates or news items as needed -->
        </div>
    </section>
</div>
{{--  --}}

{{-- Footer --}}
<footer class="bg-white pt-16 pb-12 border-t border-gray-100">
    <div class="container grid grdi-cols-3">

        <div class="cons-span-1 space-y-8">
            <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-16">
            <p class="text-gray-500">
                What's up madlang people!!!
            </p>

            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-square-instagram"></i>
                </a>
            </div>
        </div>

        <div class="cons-span-2 grid grid-cols-2 gap-8">

        </div>

    </div>
</footer>
{{-- end of Footer --}}

</body>
</html>
