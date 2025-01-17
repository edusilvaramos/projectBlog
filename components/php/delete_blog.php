<?php
require_once("../../config_blog.php");
$db = returnCnx();

$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if ($id !== null) {

    $req = $db->prepare('DELETE FROM billets_blog WHERE ID = ?');
    $req->execute([$id]);

    $coments = $db->prepare('DELETE FROM commentaires_blog WHERE ID = ?');
    $coments->execute([$id]);
}
header("Location: index_blog.php");
exit;
