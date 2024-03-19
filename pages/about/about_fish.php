<?php session_start();
require_once(__DIR__.'../../../assets/php/middleware/db_connect.php');
require_once(__DIR__.'../../../assets/php/controllers/variables.php'); 
$getData=$_GET;

// on vérifie les données dans GET
if(
    !isset($getData['id']) ||
    !is_numeric($getData['id'])
){
    echo('le poisson que vous cherchez s\'est échappé');
    return;
}

//requête pour récupérer les données du poisson
$retrieveFishs = $mysqlClient->prepare('SELECT * FROM fishs WHERE id=:id');
$retrieveFishs->execute([
    'id'=>(int)$getData['id'],
]);
$detailsfish=$retrieveFishs->fetchAll(PDO::FETCH_ASSOC);

// vérification du résultat de la requette
if($detailsfish===[]){
    echo('le poisson est décroché');
    return;
}
$fish=[
    'id'=>$detailsfish[0]['id'],
    'fish_name'=>$detailsfish[0]['fish_name'],
    'average_size'=>$detailsfish[0]['average_size'],
    'about'=>$detailsfish[0]['about'],
    'image'=>$detailsfish[0]['image'],
];

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom du poisson</title>
    <link rel="stylesheet" href="/build/output.css">
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('../../assets/images/fonds-marins.webp'); ">
    <?php require_once(dirname(__DIR__,2).'./assets/php/components/header.php' ); ?>
    <main class="container mx-auto p-5">
        
        <section class="grid grid-cols-2 gap-3">
            <div>
                <h3 class="text-xl font-semibold mb-5 text-gray-300"> <?php echo $fish['fish_name']; ?> </h3>
                <p class="mb-3 text-gray-300"><?php echo $fish['about']; ?> </p>
                <p class="text-gray-300 italic">Taille moyenne :<?php echo $fish['average_size']; ?> </p>
            </div>
            <div class="mx-auto">
                <img class="rounded-xl" src="../../assets/.<?php echo $fish['image']; ?>" alt="<?php echo $fish['fish_name']; ?> ">
            </div>
        </section>
        <div class="w-full flex justify-center">
		<a  href="/pages/about/modify_fish.php?id=<?php echo($fish['id']); ?>" @endif
			class="flex text-gray-100 justify-center transition duration-200 ease-in-out transform px-4 py-2 w-48 border-b-4 border-gray-500 hover:border-b-2 bg-gradient-to-t from-gray-400  via-gray-600 to-gray-200 rounded-2xl hover:translate-y-px "

			style="-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 8px rgba(0,0,0,0); 
			box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);">
            Modifier
		</a>
	</div>
    </main>
</body>
</html>