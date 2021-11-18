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

        <?php include './incl/nav.php' ?>

    </header>

    <main class="container mx-auto flex flex-wrap justify-around"> <!---------- Body ---------------->

        <div class="sm:my-10 sm:ml-5 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 flex flex-col p-5 border">
            
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
            </p>

            <form class="text-white flex justify-around my-3">

                <button class="bg-red-400 p-2 rounded w-28">
                    Cancel
                </button>

            </form>
            

        </div>
    </main>
    
</body>
</html>