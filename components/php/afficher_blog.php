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

// Tema desejado
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



// URL da API para buscar imagens no tema
$url = "https://api.unsplash.com/photos/random?query={$tema}&client_id={$apiKey}&count=1";

// Usando cURL para fazer a requisição
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

// Verifique se houve erro na requisição
if ($response === false) {
    die('Erro ao conectar com a API do Unsplash');
}

// Decodificar a resposta JSON
$data = json_decode($response, true);

// Verifique se a resposta contém imagens
if (isset($data[0])) {
    // Obter o link da imagem
    $imageUrl = $data[0]['urls']['regular'];

    // Atribuir a URL da imagem ao template Smarty
    $smarty->assign('imageUrl', $imageUrl);

    // Exibir o template

} else {
    // Caso não haja imagem, você pode definir uma imagem padrão ou mostrar uma mensagem de erro
    $smarty->assign('imageUrl', 'url_da_imagem_padrao');
}

// echo "<pre>";
// print_r($imageUrl);
// echo "</pre>";


$smarty->assign('lastPost', $lastPost);
$smarty->assign('comentsPost', $comentsPost);
$smarty->assign('imagesPost', $imagesPost);
$smarty->display('afficher_blog.tpl');
