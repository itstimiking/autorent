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

            <div class="sm:my-10 sm:ml-5 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 flex flex-col p-5 border">
                
                <!-- Car Advert Box when not rented yet -->

                <h1 class="text-center text-2xl font-bold">
                    Car Name
                </h1>

                <img src="/images/hiyunda.jpg" class="w-full rounded" alt="car image">

                <p class="text-green-500 text-xl text-center pt-3 ">
                    Stock : 32 
                </p>

                <form class="text-white flex justify-around my-3">

                    <button class="bg-blue-400 p-2 rounded w-28">
                        <a href="cardetails.php"> Details </a>
                    </button>
                    <button class="bg-green-400 p-2 rounded w-28">
                        <a href="rent.php"> Rent </a>
                    </button>

                </form>
                

            </div>
        </main>
        
    </body>
</html>