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

            <p class="text-2xl border-b w-full">Sign Up</p>

            <form class="w-full mt-10"> <!---------- Sign up Form  ---------------->

                <!---------- First name ---------------->

                <fieldset class="w-full md:flex sm:mt-5 sm:items-center">
                    <div class="flex w-full md:w-1/2">
                    <p class="w-2/6 text-xl text-gray-500">
                        <label for="firstname">Firstname</label>
                    </p>
                    <input 
                        type="text" 
                        name="firstname" 
                        placeholder="First name" id="firstname"
                        class="p-2 border-b rounded-lg bg-transparent w-full "
                    >
                    </div>
                    <div class="flex w-full md:w-1/2">

                        <!---------- Last name ---------------->

                        <p class="md:hidden w-3/6 -mb-2 text-xl text-gray-500">
                            <label for="lastname">Lastname</label>
                        </p>
                        
                        <input 
                            type="text" 
                            name="lastname" 
                            placeholder="Last name" id="lastname"
                            class="p-2 border-b rounded-lg bg-transparent w-full md:ml-10"
                        >
                        </div>
                </fieldset>

                <fieldset class="w-full flex mt-5 items-center">

                    <!---------- Email ---------------->

                    <p class="w-2/12 -mb-2 text-xl text-gray-500">
                        <label for="email">Email</label>
                    </p>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Enter email" id="email"
                        class="p-2 border-b rounded-lg bg-transparent w-full md:-ml-5"
                    >
                </fieldset>

                <fieldset class="w-full flex mt-5 items-center">

                    <!---------- User name ---------------->

                    <p class="w-2/12 -mb-2 text-xl text-gray-500">
                        <label for="username">Username</label>
                    </p>
                    <input 
                        type="text" 
                        name="username" 
                        placeholder="Enter username" id="username"
                        class="p-2 border-b rounded-lg bg-transparent w-full md:-ml-5"
                    >
                </fieldset>

                <fieldset class="w-full flex mt-5 items-center">
                    
                </fieldset>

    

                <fieldset class="w-full md:flex sm:mt-5 sm:items-center">

                    <!---------- Password ---------------->

                    <div class="flex w-full md:w-1/2">
                        <p class="w-2/6 -mb-2 text-xl text-gray-500">
                            <label for="password">Password</label>
                        </p>
                        <input 
                            type="password" 
                            name="password" 
                            placeholder="Enter password" id="password"
                            class="p-2 border-b rounded-lg bg-transparent w-full "
                        >
                    </div>
                    <div class="flex w-full md:w-1/2">
                        <p class="md:hidden w-3/6 -mb-2 text-xl text-gray-500">
                            <label for="confirm_password">Confirm Password</label>
                        </p>
                        <input 
                            type="password" 
                            name="confirm_password" 
                            placeholder="password" id="confirm_password"
                            class="p-2 border-b rounded-lg bg-transparent w-full md:ml-10 "
                        >
                    </div>
                </fieldset>

                <!-- Address -->

                <fieldset class="w-full md:flex sm:mt-5 sm:items-center">
                    <div class="flex w-full md:w-1/2">
                        <p class="w-2/6 text-xl text-gray-500">
                            <label for="address">Address</label>
                        </p>
                        <div class="w-full ">
                            <input 
                                type="text" 
                                name="street" 
                                placeholder="Street" id="address"
                                class="p-2 border-b rounded-lg bg-transparent w-full "
                            ><br>
                            <input 
                                type="text" 
                                name="state" 
                                placeholder="State" id="address"
                                class="p-2 border-b rounded-lg bg-transparent w-full "
                            >
                            <input 
                                type="phone" 
                                name="phone" 
                                placeholder="Phone Number" id="address"
                                class="p-2 border-b rounded-lg bg-transparent w-full "
                            >
                        </div>
                        
                    </div>
                    <div class="flex w-full md:w-1/2">

                        <p class="w-2/6 text-xl text-gray-500 md:hidden">
                        </p>
                        
                        <div class="w-full md:ml-10">
                            <input 
                                type="text" 
                                name="city" 
                                placeholder="City" id="address"
                                class="p-2 border-b rounded-lg bg-transparent w-full "
                            ><br>
                            <input 
                                type="text" 
                                name="country" 
                                placeholder="Country" id="address"
                                class="p-2 border-b rounded-lg bg-transparent w-full "
                            >
                            <input 
                                type="number" 
                                name="zip" 
                                placeholder="Zip code" id="address"
                                class="p-2 border-b rounded-lg bg-transparent w-full "
                            >
                        </div>

                    </div>
                </fieldset>

                <fieldset class="w-full md:flex sm:mt-5">
                    
                    <!-- Gender -->

                    <p class="w-2/6 md:w-2/12 text-xl text-gray-500">
                        <label for="gender">Gender</label>
                    </p>

                    <div class="w-full md:-ml-5 text-gray-400" id="gender">
                        <Input type="radio" name="gender" id="male" value="m"><label for="male"> Male</label> <br>
                        <Input type="radio" name="gender" id="female" value="f" ><label for="female"> Female</label> <br>
                        <Input type="radio" name="gender" id="unspecified" value="u"><label for="unspecified"> Unspecified</label> &emsp;
                    </div>

                </fieldset>

                <fieldset class="w-full flex mt-10 items-center">
                    <p class="w-2/12 -mb-2 text-xl text-gray-500">
                        
                    </p>
                    <input 
                        type="submit" 
                        name="submit" 
                        value="Login"
                        class="p-2 text-white rounded-md bg-blue-400 w-full md:-ml-5 "
                    >
                </fieldset>

            </form>
        </div>

    </main>
    
</body>
</html>