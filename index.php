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
        <h1 class="mt-6 font-bold text-lg">Explorar</h1>
        <form class="w-full flex space-x-2 mt-6">
            <input type="text" name="search" id="search" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" placeholder="Pesquisar...">
            <button type="submit">Pesquisar</button>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Lista de livros -->
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/book.php?" class="font-semibold hover:underline">Título</a>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">&#9733;&#9733;&#9733;&#9733;(3 Avaliações)</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/book.php?" class="font-semibold hover:underline">Título</a>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">&#9733;&#9733;&#9733;&#9733;(3 Avaliações)</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/book.php?" class="font-semibold hover:underline">Título</a>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">&#9733;&#9733;&#9733;&#9733;(3 Avaliações)</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/book.php?" class="font-semibold hover:underline">Título</a>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">&#9733;&#9733;&#9733;&#9733;(3 Avaliações)</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/book.php?" class="font-semibold hover:underline">Título</a>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">&#9733;&#9733;&#9733;&#9733;(3 Avaliações)</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/book.php?" class="font-semibold hover:underline">Título</a>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">&#9733;&#9733;&#9733;&#9733;(3 Avaliações)</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <a href="/book.php?" class="font-semibold hover:underline">Título</a>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">&#9733;&#9733;&#9733;&#9733;(3 Avaliações)</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>
        </div>
    </main>

</body>

</html>