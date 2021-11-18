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