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

        <div class="w-5/6 bg-gray-100 mx-auto p-10 m-10 shadow rounded-md flex flex-col">

            <p class="text-2xl border-b w-full">Sign In</p>

            <form class="w-full">
                <fieldset class="w-full flex mt-5 items-center">
                    <p class="w-2/12 -mb-2 text-xl text-gray-500">
                        <label for="username">Username</label>
                    </p>
                    <input 
                        type="text" 
                        name="username" 
                        placeholder="Enter username" id="username"
                        class="p-2 border-b rounded-lg bg-transparent w-full "
                    >
                </fieldset>

                <fieldset class="w-full flex mt-5 items-center">
                    <p class="w-2/12 -mb-2 text-xl text-gray-500">
                        <label for="password">Password</label>
                    </p>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Enter password" id="password"
                        class="p-2 border-b rounded-lg bg-transparent w-full "
                    >
                </fieldset>

                <fieldset class="w-full flex mt-5 items-center">
                    <p class="w-2/12 -mb-2 text-xl text-gray-500">
                        
                    </p>
                    <input 
                        type="submit" 
                        name="submit" 
                        value="Login"
                        class="p-2 text-white rounded-md bg-blue-400 w-full "
                    >
                </fieldset>

            </form>
        </div>

    </main>
    
</body>
</html>