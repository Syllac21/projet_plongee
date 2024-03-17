<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plongée - Accueil</title>
</head>
<body class="bg-fixed bg-cover bg-center h-screen bg-no-repeat" style="background-image: url('../../assets/images/fonds-marins.webp'); ">
    <?php 
    require_once(dirname(__DIR__,2).'./assets/php/components/header.php') ;
    
    ?>
    <main class="container mx-auto p-5">
        <h1 class="text-center text-2xl font-bold">Poissons</h1>
        <section class="md:grid grid-cols-5 xl:grid grid-col3 gap-5">
            <?php foreach ($fishs as $fish) : ?>
                <article class="card rounded-xl overflow-hidden shadow-xl hover:shadow-2xl">
                    
                    <img class="w-full" src="../../assets/.<?php echo($fish['image']); ?>" alt="<?php echo $fish['fish_name'] ?>" />
                    
                    <div class="px-6 py-4">
                        <h2 class="text-xl mb-2"><?php echo $fish['fish_name']; ?> </h2>
                        <p class="text-gray-700">
                            Taille moyenne :
                        <?php echo $fish['average_size'];?>
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        <a href="/pages/about/about_fish.php?id=<?php echo($fish['id']); ?> " class="px-3 py-4 bg-gray-200 rounded-2xl">En savoir plus</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>