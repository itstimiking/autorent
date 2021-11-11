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
                <h1 class="text-2xl font-bold m-3">
                    User Name
                </h1>

                <img src="/images/avatar.jpeg" class="w-full border" alt="User avatar">
            </div>

            <div class="sm:w-3/4 bg-white h-full p-20">
                <div class="flex mb-5">
                    <span class="w-40">
                        Email:
                    </span>
                    <span>
                        Useremail@email.com
                    </span>
                </div>

                <div class="flex mb-5">
                    <span class="w-40">
                        Phone Number:
                    </span>
                    <span>
                        08898776565
                    </span>
                </div>

                <div class="flex mb-5">
                    <span class="w-40">
                        Job Time:
                    </span>
                    <span>
                       13:00am (UTC)
                    </span>
                </div>

                <div class="flex mb-10">
                    <span class="w-40">
                        Address:
                    </span>
                    <span>
                        No 2038 Php drive <br>
                        Localhost<br>
                        Ip HOuse
                    </span>
                </div>
            </div>
        </div>

        <div class="w-5/6 shadow mx-auto p-2 m-10 shadow rounded-md flex justify-between flex-col">

            <h1 class="w-full text-2xl font-bold text-center"> Rent History </h1>

            <div class="flex w-full">

                <div class="my-5 sm:ml-5 sm:w-1/2 md:w-1/3 flex flex-col p-5 border">
                
                    <!-- Rented ad -->
        
                    <h1 class="text-center text-2xl font-bold">
                        Rented Username
                    </h1>
                    
                    <small class="mt-2 mb-4 text-gray-500 text-center">Rented</small>
                    <img src="/images/hiyunda.jpg" class="w-full rounded ring ring-offset-4 ring-gray-200" alt="car image">
        
                    <p class="text-xl text-center pt-3 mb-2 ">
                        Car Name
                    </p>
        
                    <div class="text-center">
                        <p>for 91km</p>
                        <p>on 7th Mar 2017, 07:36 PM</p>
                        <p>for $455</p>
                    </div>
        
                    <form class="text-white flex justify-around my-3">
        
                        <button class="bg-red-400 p-2 rounded w-28">
                            Cancel
                        </button>
        
                    </form>
                    
        
                </div>

                <div class="my-5 sm:ml-5 w-full sm:w-1/2 md:w-1/3 flex flex-col p-5 border">
                
                    <!-- Rented ad -->
        
                    <h1 class="text-center text-2xl font-bold">
                        Rented Username
                    </h1>
                    
                    <small class="mt-2 mb-4 text-gray-500 text-center">Rented</small>
                    <img src="/images/hiyunda.jpg" class="w-full rounded ring ring-offset-4 ring-gray-200" alt="car image">
        
                    <p class="text-xl text-center pt-3 mb-2 ">
                        Car Name
                    </p>
        
                    <div class="text-center">
                        <p>for 91km</p>
                        <p>on 7th Mar 2017, 07:36 PM</p>
                        <p>for $455</p>
                    </div>
        
                    <form class="text-white flex justify-around my-3">
        
                        <button class="bg-red-400 p-2 rounded w-28">
                            Cancel
                        </button>
        
                    </form>
                    
        
                </div>

                <div class="my-5 sm:ml-5 w-full sm:w-1/2 md:w-1/3 flex flex-col p-5 border">
                
                    <!-- Rented ad -->
        
                    <h1 class="text-center text-2xl font-bold">
                        Rented Username
                    </h1>
                    
                    <small class="mt-2 mb-4 text-gray-500 text-center">Rented</small>
                    <img src="/images/hiyunda.jpg" class="w-full rounded ring ring-offset-4 ring-gray-200" alt="car image">
        
                    <p class="text-xl text-center pt-3 mb-2 ">
                        Car Name
                    </p>
        
                    <div class="text-center">
                        <p>for 91km</p>
                        <p>on 7th Mar 2017, 07:36 PM</p>
                        <p>for $455</p>
                    </div>
        
                    <form class="text-white flex justify-around my-3">
        
                        <button class="bg-red-400 p-2 rounded w-28">
                            Cancel
                        </button>
        
                    </form>
                    
        
                </div>


                
                

            </div>
        </div>
    </main>
    
</body>
</html>