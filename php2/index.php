<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 flex justify-center p-10">
    <div class="bg-gray-700 w-max p-10 rounded-md text-gray-300">

    <form action="" method="post" class="space-y-5">
        <section class="flex space-x-2">
            <div>
                <h1>x awal</h1>
                <input type="text" name="X" class="bg-gray-200 rounded-sm text-sm text-gray-800 p-1 px-3">
            </div>
            <div>   
                <h1>y awal</h1>
                <input type="text" name="Y" class="bg-gray-200 rounded-sm text-sm text-gray-800 p-1 px-3"> <br>
            </div>
        </section>
        <section class="flex space-x-2">
            <div>
                <h1>x akhir</h1>
                <input type="text" name="X2" class="bg-gray-200 rounded-sm text-sm text-gray-800 p-1 px-3"> 
            </div>
            <div>
                <h1>y akhir</h1>
                <input type="text" name="Y2" class="bg-gray-200 rounded-sm text-sm text-gray-800 p-1 px-3"> <br>
            </div>
        </section>

        <div class="w-full flex justify-center text-center">
            <div>
                <button class="bg-green-600 px-2 py-1 rounded-md hover:bg-green-500 duration-200 ease-linear hover:text-white hover:rounded-2xl shadow-md">submit</button
                <br>
                <h1 class="mt-5 text-white">Hasil</h1>
                <hr>
            </form>
            <div class="text-white text-lg">
                <?php
                    $x = isset($_POST['X']) ? $_POST['X'] : '';
                    $y = isset($_POST['Y']) ? $_POST['Y'] : '';
                    $x2 = isset($_POST['X2']) ? $_POST['X2'] : '';
                    $y2 = isset($_POST['Y2']) ? $_POST['Y2'] : '';

                    $hasilx = (int)$x - (int)$x2;
                    $hasily = (int)$y - (int)$y2;

                    if ($hasily > 0){
                        echo "<h1 class='text-red-300'>Mundur ",  abs($hasilx), " langkah</h1>";  
                    }else if( $hasily === 0){
                        echo "<h1>y diam</h1>";
                    }else{
                        echo "<h1 class='text-green-300'>Maju ", abs($hasilx), " langkah</h1>";
                    };
                    if ($hasilx > 0){
                        echo "<h1 class='text-red-300'>Kekiri ", abs($hasily), " langkah</h1>";
                    }else if( $hasilx === 0){
                        echo "<h1>x diam</h1>";
                    }else{
                        echo "<h1 class='text-green-300'>Kekanan ", abs($hasily), " langkah</h1>";
                    };
                ?>  
            </div>

            </div>
        </div>
    </div>
</body>
</html>