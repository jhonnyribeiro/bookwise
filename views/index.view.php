<h1 class="mt-6 font-bold text-lg">Explorar</h1>
<form class="w-full flex space-x-2 mt-6">
    <input type="text" name="search" id="search" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" placeholder="Pesquisar...">
    <button type="submit">Pesquisar</button>
</form>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <!-- Lista de livros -->
    <?php foreach ($books as $book): ?>
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
    <?php endforeach; ?>
</div>