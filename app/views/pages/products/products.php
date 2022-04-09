<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="text-center py-8">
        <h1 class="text-center text-gray-800 text-4xl pb-8">Cafeteria Konecta</h1>
        <a href="<?php echo URL_PROJECT ?>products/register" class="px-8 py-4 bg-gray-400 rounded-lg">Crear producto</a>
    </div>
    <div class="relative overflow-x-auto shadow-md">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id del producto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre del producto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Referencía
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Peso en KG
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoría
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Vender</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Eliminar</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($params['products'] as $product) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <?php echo $product->id ?>
                        </th>
                        <td class="px-6 py-4">
                            <?php echo $product->name ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $product->reference ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $product->price ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $product->weight ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $product->category ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $product->stock ?>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="<?php echo URL_PROJECT . 'products/update/' . $product->id ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="<?php echo URL_PROJECT . 'products/order/' . $product->id ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Vender</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="<?php echo URL_PROJECT . 'products/delete/' . $product->id ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>