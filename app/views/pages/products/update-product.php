<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar producto</title>
</head>

<body>

    <div class="px-8">
        <a href="<?php echo URL_PROJECT ?>products/index" class="">volver </a>
        <h1 class="text-center text-gray-800 text-4xl pb-8 self-center">Editar producto</h1>
    </div>
    <form action="<?php echo URL_PROJECT . 'products/update/' . $params['product_id'] ?>" method="POST" class="flex flex-col p-8 dark:bg-gray-800 w-1/2 m-auto rounded-xl">
        <div class="flex flex-col w-full pb-4 rounded-lg">
            <label class="text-white pb-2" for="">Nombre del producto</label>
            <input type="text" name="name" placeholder="Nombre del producto" class="w-full py-3 rounded-lg px-2" value="<?php echo $params['name'] ?>" required>
        </div>
        <div class="flex flex-col w-full pb-4 rounded-lg">
            <label class="text-white pb-2" for="">Referencia</label>
            <input type="text" name="reference" placeholder="Referencia" class="w-full py-3 rounded-lg px-2" value="<?php echo $params['reference'] ?>" required>
        </div>
        <div class="flex flex-col w-full pb-4 rounded-lg">
            <label class="text-white pb-2" for="">Precio</label>
            <input type="number" name="price" placeholder="Precio" class="w-full py-3 rounded-lg px-2" value="<?php echo $params['price'] ?>" required>
        </div>
        <div class="flex flex-col w-full pb-4 rounded-lg">
            <label class="text-white pb-2" for="">Peso en KG</label>
            <input type="text" name="weight" placeholder="Peso" class="w-full py-3 rounded-lg px-2" value="<?php echo $params['weight'] ?>" required>
        </div>
        <div class="flex flex-col w-full pb-4 rounded-lg">
            <label class="text-white pb-2" for="">Categoría</label>
            <input type="text" name="category" placeholder="Category" class="w-full py-3 rounded-lg px-2" value="<?php echo $params['category'] ?>" required>
        </div>
        <div class="flex flex-col w-full pb-4 rounded-lg">
            <label class="text-white pb-2" for="">Stock</label>
            <input type="number" name="stock" placeholder="Stock" class="w-full py-3 rounded-lg px-2" value="<?php echo $params['stock'] ?>" required>
        </div>
        <div class="w-full rounded-lg">
            <button type="submit" class="bg-gray-500 w-full rounded-lg py-3 text-white fonr-semibold text-xl">Editar</button>
        </div>
    </form>
</body>

</html>