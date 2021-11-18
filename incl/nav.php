<?php

    echo '
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
    '

?>