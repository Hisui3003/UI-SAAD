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

    <div class="fixed top-0 left-0 right-0 z-10">
        {{-- navbar --}}
        <div class=" bg-white py-5 px-5">
            <div class="flex justify-between items-center">
                <div class="flex-initial flex items-center">
                    <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-10">
                    <h1 class="text-black font-bold text-xl pl-3">ADMIN</h1>
                </div>

                <div class="flex-1 flex justify-center space-x-6">
                    <a href="{{ route('admin.admindash') }}" class="text-black hover:text-gray-300 uppercase font-semibold underline">Dashboard</a>
                    <a href="{{ route('admin.adminverification') }}" class="text-black hover:text-gray-300">Verification</a>
                    <a href="{{ route('admin.adminmanagement') }}" class="text-black hover:text-gray-300">Management</a>
                    <a href="{{ route('admin.adminproperties') }}" class="text-black hover:text-gray-300">Properties</a>
                </div>
                <div class="flex-initial">
                    <button class="text-black hover:text-gray-300 uppercase">Logout</button>
                </div>
            </div>
            <hr class="my-2 text-gray-400">
        </div>
    </div>

    <div class="mt-28 ">
        statistcs/graphs ganun ganun

        plus yung Generate Report bayun
    </div>

</body>
</html>
