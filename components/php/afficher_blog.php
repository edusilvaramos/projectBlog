<link rel="stylesheet" href="../style/bootstrap.min.css">
<?php
require_once("../../config_blog.php");
$db = returnCnx();

$id = $_GET['id'] ?? null;
// echo "ID: $id<br>";

if ($id == null) {
    $req = $db->query('SELECT ID, titre, date_billet, categorie, contenu FROM billets_blog ORDER BY ID DESC LIMIT 1');
    $lastPost = $req->fetch();
} else {

    $req = $db->query('SELECT ID, titre, date_billet, categorie, contenu FROM billets_blog WHERE ID = ' . $id);
    $lastPost = $req->fetch();
}

$postID = $lastPost['ID'];


$coments = $db->prepare('SELECT * FROM commentaires_blog WHERE ID = ? ORDER BY date_comment');
$coments->execute([$postID]);
$comentsPost = $coments->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($comentsPost);
// echo "</pre>";

// if (empty($comentsPost)) {
//     $comentsPost = ['rien' =>'Il semble qu’il n’y ait rien à voir ici pour le moment'];
// }

$images = $db->prepare('SELECT * FROM images_blog WHERE billet_id = ?');
$images->execute([$postID]);
$imagesPost = $images->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($imagesPost);
// echo "</pre>";

// --------------------------------------- imagens API --------------------------------

$apiKey = 'qdvkSFyvjpHK9nzYjLHP3GDYRzscJDB8uOjodvd_NH0'; // Substitua com sua chave do Unsplash

$categorie = $lastPost['categorie'];
$categorys = [
    "technologie" => "Technology",
    "voyages" => "Travel",
    "art-design" => "Art",
    "livres" => "Books",
    "jeux" => "Games",
    "cuisine" => "Gastronomy",
    "sante" => "Health",
    "fitness" => "Fitness",
    "photographie" => "Photography",
    "musique" => "Music",
    "developpement-web" => "Web",
    "carriere" => "Career",
    "tutoriels" => "Tutorials",
    "programmation" => "Programming",
    "diy" => "Yourself",
    "automobile" => "Automobile",
    "cinema-series" => "Cinema",
    "animaux" => "Animals",
    "jardinage" => "Gardening",
    "reflexions" => "Reflections"
];

foreach ($categorys as $key => $value) {
    if ($key == $categorie) {
        $tema = $value;
    }
}

$url = "https://api.unsplash.com/photos/random?query={$tema}&client_id={$apiKey}&count=1";


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

if ($response === false) {
    die('Erro ao conectar com a API do Unsplash');
}


$data = json_decode($response, true);

if (isset($data[0])) {
    $imageUrl = $data[0]['urls']['full'];
    $smarty->assign('imageUrl', $imageUrl);
} else {
    $smarty->assign('imageUrl', '../image/logo.png');
}
// echo "<pre>";
// print_r($imageUrl);
// echo "</pre>";
$roots = [
    'path' => '/classPHP/class/projectBlog/components/php/',
    'home' => '/classPHP/class/projectBlog/'
];

$smarty->assign('roots', $roots);
$smarty->assign('titre', 'ticket');
$smarty->assign('lastPost', $lastPost);
$smarty->assign('comentsPost', $comentsPost);
$smarty->assign('imagesPost', $imagesPost);
$smarty->display('afficher_blog.tpl');
