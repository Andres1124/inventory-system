<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Venta</title>
</head>

<body>

    <div class="px-8 pb-4">
        <a href="<?php echo URL_PROJECT ?>products/index" class="">volver </a>
        <h1 class="text-center text-gray-800 text-4xl pb-8 self-center">Vender producto</h1>
        <p class="text-center text-xl">Stock actual del producto: <?php echo $params['stock'] ?></p>
    </div>
    <form action="<?php echo URL_PROJECT . 'products/order/' . $params['product_id']  ?>" method="POST" class="flex flex-col p-8 dark:bg-gray-800 w-1/2 m-auto rounded-xl">
        <div class="flex flex-col w-full pb-4 rounded-lg">
            <label class="text-white pb-2" for="">Cantidad</label>
            <input type="number" name="quantity" placeholder="Cantidad" class="w-full py-3 rounded-lg px-2" required>
        </div>
        <div class="w-full rounded-lg">
            <button type="submit" class="bg-gray-500 w-full rounded-lg py-3 text-white fonr-semibold text-xl">Vender</button>
        </div>
    </form>
</body>

</html>