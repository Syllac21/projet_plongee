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
        <section class="grid grid-cols-5 gap-5">
            <?php foreach ($fishs as $fish) : ?>
                <article class="card rounded-xl overflow-hidden shadow-xl hover:shadow-2xl">
                    
                    <img class="w-full" src="../../assets/.<?php echo($fish['image']); ?>" alt="<?php echo $fish['fish_name'] ?>" />
                    
                    <div class="px-6 py-4">
                        <h2 class="text-xl mb-2"><?php echo $fish['fish_name']; ?> </h2>
                        <p class="text-gray-700">
                        <?php echo $fish['about'];?>
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        <a href="#" class="px-3 py-4 bg-gray-200 rounded-2xl">En savoir plus</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>