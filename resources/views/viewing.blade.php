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

   <style>
        .image-zoom {
            transition: transform 0.3s ease-in-out;
            object-fit: cover;
        }

        .image-zoom:hover {
            transform: scale(3);
        }
    </style>

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
            <div class="flex items-center space-x-4">


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

{{-- viewing --}}
    <div class="container grid grid-cols-6 gap-6 pt-4 pb-16 items-start">
        {{-- product --}}
        <div class="col-span-4 bg-white px-4 py-6 rounded overflow-hidden">

            {{-- imagess --}}

            <div class="container border-b grid grid-cols-1 gap-6 pt-4 pb-3 items-start">
                <div class="gap-6">
                    <div>
                        <img class="w-full " src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/2134e42629d64f.webp" alt="">
                        <div class="grid grid-cols-5 gap-4 mt-4">
                            <img class="w-full h-auto object-cover image-zoom" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/0f2247470cb425.webp" alt="">
                            <img class="w-full h-auto object-cover image-zoom" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/59610ab9449d3a.webp" alt="">
                            <img class="w-full h-auto object-cover image-zoom" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/5237c4147ce4af.webp" alt="">
                            <img class="w-full h-auto object-cover image-zoom" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/f1b5cc7d970b7c.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="container border-b grid grid-cols-1 gap-6 pt-4 pb-3 items-start">
                <div class="gap-6">
                    <div>
                        <img id="mainImage" class="w-full" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/2134e42629d64f.webp" alt="">
                        <div class="grid grid-cols-5 gap-4 mt-4">
                            <img class="w-full cursor-pointer" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/0f2247470cb425.webp" alt="" onclick="swapImages(this)">
                            <img class="w-full cursor-pointer" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/59610ab9449d3a.webp" alt="" onclick="swapImages(this)">
                            <img class="w-full cursor-pointer" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/5237c4147ce4af.webp" alt="" onclick="swapImages(this)">
                            <img class="w-full cursor-pointer" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/f1b5cc7d970b7c.webp" alt="" onclick="swapImages(this)">
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function swapImages(element) {
                    var mainImage = document.getElementById('mainImage');
                    var tempSrc = mainImage.src;
                    mainImage.src = element.src;
                    element.src = tempSrc;
                }
            </script> --}}
            {{-- end of images --}}



            {{-- place title --}}
            <div class="grid grid-cols-1 gap-6 py-4 px-5 items-start">
                <h1 class="text-4xl font-bold text-primary">5 Bedroom Mckinley West Village For Rent Brand New House, Taguig City</h1>
            </div>

            {{-- place location/address --}}
            <div class="flex border-b items-center py-2 px-5">
                <i class="text-primary fa-solid fa-location-dot"></i>
                <h1 class="text-xl font-light text-primary px-5">FORT BONIFACIO, TAGUIG</h1>
            </div>

            {{-- Description --}}
            <div class="my-3">
                <h3 class="px-4 font-semibold">Description</h3>
                <div class="mt-4 flex rounded-xl bg-gray-50 shadow-md py-2 px-5">
                    <p class="font-thin">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                    </p>
                </div>
            </div>

            {{-- table/details --}}
            <div class="border-b">
                <table class="border rounded-lg overflow-hidden">
                    <tr class="border-b">
                      <th class="py-2 px-4 font-semibold text-left">Details</th>
                      <th class="py-2 px-4 font-semibold text-left">Amenities</th>
                      <th class="py-2 px-4 font-semibold text-left">Monthly Rate</th>
                    </tr>
                    <tr>
                      <td class="py-4 px-4 align-top">
                        McKinley West Village<br>
                        LA: 188 sq.m.<br>
                        FA: 515 sq.m.<br>
                        5 bedrooms<br>
                        6 T&B<br>
                        4 car garage<br>
                        Fully Finished<br>
                        High ceiling<br>
                        With terrace and balconies, AC, water heater.
                      </td>
                      <td class="py-4 px-4 align-top">
                        Air Conditioning<br>
                        Garage<br>
                        24-hours Security
                      </td>
                      <td class="py-4 px-4 align-top">
                        ₱30,000
                      </td>
                    </tr>
                </table>
            </div>

            {{-- Reviews & Feedback --}}
            {{-- <h2 class="my-3 px-4 font-semibold">Feedback & Reviews</h2>

            <div class="py-4 px-5">
            <div>
                <form class="space-y-4">
                    <div>
                        <label for="comment" class="block font-semibold">Review:</label>
                        <textarea id="comment" name="comment" rows="4" class="w-full border rounded-md"></textarea>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <label class="block font-semibold mr-2">Rating:</label>
                            <div id="star-rating" class="flex items-center">
                                <input type="hidden" name="rating" id="rating" value="0">
                                <label for="star1" class="cursor-pointer text-gray-400">
                                    <input type="radio" id="star1" name="star" value="1" class="hidden" />
                                    ★
                                </label>

                                <label for="star2" class="cursor-pointer text-gray-400">
                                    <input type="radio" id="star2" name="star" value="2" class="hidden" />
                                    ★
                                </label>

                                <label for="star3" class="cursor-pointer text-gray-400">
                                    <input type="radio" id="star3" name="star" value="3" class="hidden" />
                                    ★
                                </label>

                                <label for="star4" class="cursor-pointer text-gray-400">
                                    <input type="radio" id="star4" name="star" value="4" class="hidden" />
                                    ★
                                </label>

                                <label for="star5" class="cursor-pointer text-gray-400">
                                    <input type="radio" id="star5" name="star" value="5" class="hidden" />
                                    ★
                                </label>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="bg-gray-500 hover:bg-red-500 hover:border-red-500 text-white px-4 py-2 rounded-md">Submit</button>
                        </div>
                    </div>
                </form>

                <div id="submitted-feedback" class="mt-8 hidden">
                    <h2 class="text-xl font-semibold mb-2">Feedback:</h2>
                    <div id="feedback-content">
                        <!-- Feedback will be displayed here -->
                    </div>
                </div>
                </div>

                <script>
                // Function to generate star icons based on rating
                function generateStarRating(rating, colorClass) {
                  let stars = '';
                  for (let i = 0; i < rating; i++) {
                    stars += `<span class="${colorClass}">★</span>`;
                  }
                  return stars;
                }

                // Function to handle hover effect on stars
                function handleStarHover(starNum) {
                const stars = document.querySelectorAll('#star-rating label');
                stars.forEach((star, index) => {
                    if (index < starNum) {
                        star.classList.add('text-red-500'); // Changed to red-500
                    } else {
                        star.classList.remove('text-red-500'); // Changed to red-500
                    }
                    });
                }

                // Function to handle click event on stars
                function handleStarClick(starNum, colorClass) {
                  document.getElementById('rating').value = starNum;
                  handleStarHover(starNum, colorClass);
                }

                // Event listeners for hover and click events on stars
                document.querySelectorAll('#star-rating label').forEach((star, index) => {
                  star.addEventListener('mouseover', () => handleStarHover(index + 1, 'text-yellow-400'));
                  star.addEventListener('mouseout', () => handleStarHover(document.getElementById('rating').value, 'text-yellow-400'));
                  star.addEventListener('click', () => handleStarClick(index + 1, 'text-yellow-400'));
                });

                // Function to handle form submission
                document.querySelector('form').addEventListener('submit', function(e) {
                  e.preventDefault();

                  const comment = document.getElementById('comment').value;
                  const rating = document.getElementById('rating').value;
                  const userImage = 'https://www.svgrepo.com/show/525577/user-circle.svg';

                  const feedbackContent = document.getElementById('feedback-content');
                  feedbackContent.innerHTML = `
                    <div class="flex items-center">
                      <img src="${userImage}" class="w-20 h-auto rounded-full mr-4" alt="User Image">
                      <div>
                        <p class="font-semibold">User Name</p>
                        <p class="mr-3">${generateStarRating(rating, 'text-red-500')}</p>
                        <p class="mr-3">${comment}</p>
                      </div>
                    </div>
                  `;

                  document.getElementById('submitted-feedback').classList.remove('hidden');
                });
              </script>


            </div> --}}

            {{-- Reviews & Feedback --}}
{{-- <h2 class="my-3 px-4 font-semibold">Feedback & Reviews</h2>

<div class="py-4 px-5">
    <form class="space-y-4" action="submit_feedback.php" method="post">
        <div>
            <label for="comment" class="block font-semibold">Review:</label>
            <textarea id="comment" name="comment" rows="4" class="w-full border rounded-md"></textarea>
        </div>

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <label class="block font-semibold mr-2">Rating:</label>
                <div id="star-rating" class="flex items-center">
                    <input type="hidden" name="rating" id="rating" value="0">
                    ★★★★★
                </div>
            </div>

            <div>
                <button type="submit" class="bg-gray-500 hover:bg-red-500 hover:border-red-500 text-white px-4 py-2 rounded-md">Submit</button>
            </div>
        </div>
    </form>

    <div id="submitted-feedback" class="mt-8 hidden">
        <h2 class="text-xl font-semibold mb-2">Feedback:</h2>
        <div id="feedback-content">
            <!-- Feedback will be displayed here -->
        </div>
    </div>
</div> --}}

        </div>
        {{-- end of product --}}

        {{-- user info --}}
        <div class="col-span-2 bg-white px-4 pb-2 overflow-hidden">

            <div class="grid grid-cols-2 gap-6 pt-4 pb-2 items-start">

                {{-- image --}}
                <div class="col-span-1 bg-white px-2 pb-3 overflow-hidden">
                    <div class="flex items-center place-items-center justify-center">
                        <img src="https://www.svgrepo.com/show/507442/user-circle.svg" class="w-24" alt="">
                    </div>
                </div>

                {{-- landlord info --}}
                <div class="col-span-1 bg-white pb-3 overflow-hidden">
                    <div class="divide-y divide-gray-200 space-y-3">
                        <div class="pt-3">
                            {{-- name --}}
                            <h2 class="text-xl font-semibold">
                                Jhon Doe
                            </h2>

                            {{-- status --}}
                            <h4 class="text-sm">
                                Landlord
                            </h4>

                            {{-- number --}}
                            <h2 class="text-md font-semibold">
                                +63 123 456 7890
                            </h2>
                        </div>
                    </div>
                </div>

                {{-- send inquiry section --}}
                <div class="col-span-2 text-center px-2 pb-3 overflow-hidden">
                    {{-- etong link pre kukuhain nalang to dun sa list a property, mag lagay nalang ako dun
                        ng place kung saan nila pwede ilagay, tas dahil soc med to, pweding hindi sila mag
                        lagay, and yung only way to contact nlang sila is yung number  --}}
                    <a href="facebook link ni landlord" class=" bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-center">
                        <i class="fab fa-facebook-square mr-2"></i>
                        Facebook
                    </a>
                </div>

                {{-- <div class="col-span-2 text-center px-2 pb-3 overflow-hidden">
                    <form action="{{ route('inquire.post') }}" method="post">
                        @csrf
                        <input type="hidden" name="properties_id" value="{{ $property->id }}">
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded flex items-center justify-center">
                            <i class="fas fa-envelope mr-2"></i>
                            Inquire
                        </button>
                    </form>
                </div> --}}

                <div class="col-span-2 text-center px-2 pb-3 overflow-hidden">
                    <form action="{{ route('inquire.post') }}" method="post">
                        @csrf
                        <input type="hidden" name="properties_id" value="{{ $property->id }}">
                        <a id="download-docx" href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded flex items-center justify-center cursor-pointer">
                            <i class="fas fa-envelope mr-2"></i>
                            Inquire
                        </a>

                        <button id="upload-pdf" class="hidden border-b bg-white hover:bg-primary text-black hover:text-white font-bold py-2 px-4 w-full rounded mt-10">Upload PDF</button>
                        <input type="file" id="pdf-input" class="hidden" accept="application/pdf">
                    </form>
                </div>

                <script>
                    document.getElementById('download-docx').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent default action of the link

                        // Create a dummy link for downloading the DOCX file
                        var link = document.createElement('a');
                        link.href = 'path/to/your/docx/file.docx'; // Replace 'path/to/your/docx/file.docx' with the actual path to your DOCX file
                        link.download = 'file.docx';
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);

                        // Show the upload PDF button
                        document.getElementById('upload-pdf').classList.remove('hidden');
                    });

                    // Add event listener to the upload PDF button
                    document.getElementById('upload-pdf').addEventListener('click', function() {
                        document.getElementById('pdf-input').click();
                    });

                    // Optional: Add event listener to the PDF input to handle file selection
                    document.getElementById('pdf-input').addEventListener('change', function() {
                        var fileName = this.files[0].name;
                        alert('Selected PDF file: ' + fileName);
                        // Here you can perform additional actions with the selected PDF file
                    });
                </script>

                {{-- end of send inquiry section --}}

            </div>

        </div>
        {{-- end of user info --}}
    </div>
{{-- viewing ends --}}

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
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
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
