<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plongée - Accueil</title>
</head>
<body>
    <?php 
    require_once(dirname(__DIR__,2).'./assets/php/components/header.php') ;
    
    ?>
    <main class="container mx-auto p-5">
        <h1 class="text-center text-2xl font-bold">Poissons</h1>
        <section class="grid grid-cols-5">
            <article class="card rounded-xl overflow-hidden shadow-xl hover:shadow-2xl">
                
                <img class="w-full" src="./assets/images/castagnole.webp" alt="castagnole" />
                <div class="px-6 py-4">
                    <h2 class="text-xl mb-2">castagnole</h2>
                    <p class="text-gray-700">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet et molestiae aliquid quam, ad labore, nulla illum voluptas fuga iste quibusdam provident modi rem, eum illo architecto exercitationem ab nemo!
                    </p>
                </div>
                <div class="px-6 py-4">
                    <a href="#" class="px-3 py-4 bg-gray-200 rounded-2xl">En savoir plus</a>
                </div>
            </article>
        </section>
    </main>
</body>
</html>