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

            <h1 class="text-2xl border-b w-full">Car Name</h1>

            <div class="w-full h-96 overflow-hidden mt-5">
                <img src="/images/hiyunda.jpg" class="w-full" alt="car image">
            </div>
            <form class="w-full mt-10">

                <p class="text-green-500 text-xl text-center ">
                    Stock : 32 
                </p>

                <fieldset class="w-full md:flex sm:mt-5">
                        
                    <!-- Gender -->

                    <p class="w-2/6 md:w-2/12 text-xl text-gray-500">
                        <label for="mode">Mode</label>
                    </p>

                    <div class="w-full md:-ml-5 text-gray-400" id="mode">
                        <Input type="radio" name="mode" id="per_hour" value="rent_per_hour"><label for="per_hour"> Per Hour</label> &emsp;
                        <Input type="radio" name="mode" id="per_day" value="rent_per_day" ><label for="per_day"> Per Day</label> &emsp;
                        <Input type="radio" name="mode" id="per_km" value="rent_per_km"><label for="per_km"> Per Km</label> &emsp;
                    </div>

                </fieldset>

                <fieldset class="w-full md:flex sm:mt-5">
                        
                    <!-- Gender -->

                    <p class="w-2/6 md:w-2/12 text-xl text-gray-500">
                        <label for="rent">Rent</label>
                    </p>

                    <div class=" flex justify-between w-full md:-ml-5 text-gray-400" id="rent">
                        <Input type="text" name="price" id="price" disabled placeholder="$1298" class="w-1/4 border-b-2 bg-transparent">
                        <Input type="number" name="time" id="time" placeholder="21" class="w-1/4 p-1" >
                        <Input type="text" name="total" id="total" disabled placeholder="$879272" class="w-1/4 border-b-2 bg-transparent" >
                    </div>

                </fieldset>

                <fieldset class="w-full flex mt-10 items-center">
                    <p class="w-2/12 -mb-2 text-xl text-gray-500">
                        
                    </p>

                    <div class="w-full">

                        <input 
                            type="reset" 
                            name="reset" 
                            value="cancel"
                            class="p-2 text-white rounded-md bg-gray-400 w-28"
                        >
                        <input 
                            type="submit" 
                            name="submit" 
                            value="Rent"
                            class="p-2 text-white rounded-md bg-green-400 w-28"
                        >

                    </div>
                </fieldset>

            </form>
        </div>

    </main>
    
</body>
</html>