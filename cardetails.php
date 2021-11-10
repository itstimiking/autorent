<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Service PHP capstone Project</title>

    <link href="/style/tailwind.css" rel="stylesheet">
</head>
<body>

    <header>

        <!------------- Nav section ---------->

        <nav class="w-full h-20 bg-blue-400">

            <div class="container mx-auto flex h-20 items-center justify-between">
                <div class="flex items-center">
                    <span class="text-3xl text-white font-bold">
                        AutoRent
                    </span>
                    <ul class="flex space-x-10 text-white ml-10">
                        <li>
                            <a href="index.php"> Home </a>
                        </li>
                        <li>
                            <a href="rentals.php"> Rentals </a>
                        </li>
                    </ul>
                </div>

                <div class="">

                    <button class="bg-white rounded-md p-2 w-24">
                        <a href="profile.php"> Profile </a>
                    </button>

                    <button class="bg-white rounded-md p-2 w-24 ml-2">
                        <a href="signin.php"> Logout </a>
                    </button>
                </div>
            </div>

        </nav>
    </header>

    <main class="container mx-auto"> <!---------- Body ---------------->

        <div class="w-5/6 bg-gray-100 mx-auto p-10 m-10 shadow rounded-md flex justify-between">

            <div class="w-full sm:w-1/4 p-5">
                <p class="m-3 text-justify text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, labore esse enim illum, sint quidem animi expedita maxime autem error vel deleniti aut eius amet natus exercitationem delectus dicta voluptatem!
                </p>

                <div>
                    <ul class="flex space-x-5 text-sm">
                        <li class="border-b-2 p-2">Per Hour</li>
                        <li class="border-b-2 p-2 border-blue-400">Per Day</li>
                        <li class="border-b-2 p-2">Per Km</li>
                    </ul>
        
                    <form class="text-white flex items-center flex-col my-3">

                        <p class="text-green-500 text-xl text-center pt-3 ">
                            Stock : 32 
                        </p>
        
                        <button class="bg-yellow-400 mt-4 p-2 rounded w-28">
                            <a href="rent.php"> Rent </a>
                        </button>
        
                    </form>
                </div>

            </div>

            <div class="sm:w-3/4 bg-white h-full p-10 flex flex flex-col">
                <h1 class="font-bold text-center w-full">
                    CAR NAME
                </h1>

                <img src="/images/toyotamatrix.jpg" class="w-full h-96" alt="car image">
            </div>
        </div>

    </main>
    
</body>
</html>