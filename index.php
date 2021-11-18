<?php

    require_once './scripts/dbconnect.php';

    $query = "SELECT * FROM cars";

    $cars = $autorentdb->query($query);
?>

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

        <main class="container mx-auto flex flex-wrap justify-between"> <!---------- Body ---------------->

            <?php while($car = $cars->fetch_assoc()):?>
                <div class="sm:my-10 sm:ml-5 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 flex flex-col p-5 border">
            
                    <!-- Car Advert Box when not rented yet -->
    
                    <h1 class="text-center text-2xl font-bold">
                        <?php echo $car['name'] ;?>
                    </h1>
    
                    <img src="<?php echo $car['pic'] ?>" class="w-full rounded" alt="car image">
    
                    <p class="text-green-500 text-xl text-center pt-3 ">
                        Stock : <?php echo $car['stock'] ;?>
                    </p>
    
                    <form class="text-white flex justify-around my-3" action="#">

                        <input type='hidden' name='carid' value="carid" >
    
                        <button class="bg-blue-400 p-2 rounded w-28" name='details' type="submit">
                            <!-- 
                                <a href="rent.php"> Details </a>
                            -->
                            Details
                        </button>
                        <button class="bg-green-400 p-2 rounded w-28" name='submit' type="submit">
                            <!-- 
                                <a href="rent.php"> Rent </a>
                            -->
                            Rent
                        </button>
    
                    </form>
                    
    
                </div>
                <?php endwhile ?>
        </main>
        
    </body>
</html>