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
<body class="bg-gray-700">

    <div class="fixed top-0 left-0 right-0 z-10">
        {{-- navbar --}}
        <div class=" bg-white py-5 px-5">
            <div class="flex justify-between items-center">
                <div class="flex-initial flex items-center">
                    <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-10">
                    <h1 class="text-black font-bold text-xl pl-3">ADMIN</h1>
                </div>

                <div class="flex-1 flex justify-center space-x-6">
                    <a href="{{ route('admin.admindash') }}" class="text-black hover:text-gray-300">Dashboard</a>
                    <a href="{{ route('admin.adminverification') }}" class="text-black hover:text-gray-300">Verification</a>
                    <a href="{{ route('admin.adminmanagement') }}" class="text-black hover:text-gray-300 uppercase font-semibold underline">Management</a>
                    <a href="{{ route('admin.adminproperties') }}" class="text-black hover:text-gray-300">Properties</a>
                </div>
                <div class="flex-initial">
                    <button class="text-black hover:text-gray-300 uppercase">Logout</button>
                </div>
            </div>
            <hr class="my-2 text-gray-400">
        </div>
    </div>

    {{-- SA LOOB NITO YUNG MAIN PAGE --}}
    <div class="content flex-grow p-4 ml-0 bg-transparent pt-20">

        {{-- manage wrapper --}}
            <div class="container p-6 mt-10">

                <div class="grid grid-cols-5 gap-4">

                    <div class="col-span-5 bg-transparent rounded-lg shadow-sm">

                        {{-- list nto --}}
                        <div class="px-4 pb-2 overflow-hidden my-3 rounded-2xl">
                            <div class="px-4 pb-2 bg-white rounded-2xl overflow-hidden">
                                <div class="mr-14 flex items-center">
                                    <h3 class="text-xl mt-5 font-semibold">
                                        Landlord
                                    </h3>
                                </div>
                                <hr class="my-2 text-black bg-black rounded-lg border h-2">
                            </div>

                            <div class="overflow-x-auto my-3 bg-white rounded-lg max-h-[500px] relative">
                                <table class="table-auto w-full border-transparent">
                                    <thead class="sticky top-0 bg-white">
                                        <tr>
                                            <th class="px-4 py-2 text-gray-800 border-b border-r border-gray-400 bg-gray-300">ID</th>
                                            <th class="px-4 py-2 text-gray-800 border-b border-r border-gray-400 bg-gray-300">Name</th>
                                            <th class="px-4 py-2 text-gray-800 border-b border-r border-gray-400 bg-gray-300">Email</th>
                                            <th class="py-2 text-gray-800 border-b border-gray-400 bg-gray-300">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">1</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">2</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">3</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">4</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">5</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">6</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">7</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">8</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">9</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">10</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">11</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">12</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- renters list --}}
                        <div class="px-4 pb-2 overflow-hidden my-3 mt-20 rounded-2xl">
                            <div class="px-4 pb-2 bg-white rounded-2xl overflow-hidden">
                                <div class="mr-14 flex items-center">
                                    <h3 class="text-xl mt-5 font-semibold">
                                        Renters
                                    </h3>
                                </div>
                                <hr class="my-2 text-black bg-black rounded-lg border h-2">
                            </div>

                            <div class="overflow-x-auto my-3 bg-white rounded-lg max-h-[500px] relative">
                                <table class="table-auto w-full border-transparent">
                                    <thead class="sticky top-0 bg-white">
                                        <tr>
                                            <th class="px-4 py-2 text-gray-800 border-b border-r border-gray-400 bg-gray-300">ID</th>
                                            <th class="px-4 py-2 text-gray-800 border-b border-r border-gray-400 bg-gray-300">Name</th>
                                            <th class="px-4 py-2 text-gray-800 border-b border-r border-gray-400 bg-gray-300">Email</th>
                                            <th class="py-2 text-gray-800 border-b border-gray-400 bg-gray-300">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">1</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">2</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">3</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">4</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">5</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">6</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">7</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">8</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">9</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">10</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">11</td>
                                            <td class="px-4 py-2 border-b border-gray-400">John Doe</td>
                                            <td class="px-4 py-2 border-b border-gray-400">john@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border-b border-gray-400">12</td>
                                            <td class="px-4 py-2 border-b border-gray-400">Jane Smith</td>
                                            <td class="px-4 py-2 border-b border-gray-400">jane@example.com</td>
                                            <td class="px-4 py-2 border-b border-gray-400 text-center"><button class="bg-transparent rounded-md px-5 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold"><i class="fa-solid fa-x"></i></button></td>
                                        </tr>

                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{--  --}}
                        <div class="container mt-8 mx-auto">

                        </div>
                    </div>
                </div>
        {{-- manage wrapper --}}
    </div>
</body>
</html>
