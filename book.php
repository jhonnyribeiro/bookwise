<?php
require('data.php');
$id = $_REQUEST['id'];

$filtered = array_filter($books, function ($book) use ($id) {
    return $book['id'] == $id;
});
$book = array_pop($filtered);
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookWise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900">

        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">BookWise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-cyan-600">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>

            <ul>
                <li><a href="/login.php" class="hover:underline">Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">Imagem</div>
                <div class="space-y-1">
                    <a href="/book.php?id=<?= $book['id'] ?>" class="font-semibold hover:underline"><?= $book['title'] ?></a>
                    <div class="text-xs italic"><?= $book['author'] ?></div>
                    <div class="text-xs italic">&#9733;&#9733;&#9733;&#9733;(3 Avaliações)</div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?= $book['description'] ?>
            </div>
        </div>
    </main>

</body>

</html>