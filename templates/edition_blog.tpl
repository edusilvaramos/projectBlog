<html>
{include file="base_blog.tpl"}
<head>
  <title>{$titre}</title>
  <style>
    h1 {
      font-family: sans-serif;
      font-size: 20px;
      margin-bottom: 20px;
    }

    body,
    html {
      height: 100%;
      margin: 0;
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center mt-5 vh-100">
    <div class="container">
      <h1 class="text-center">Nouveau Billet</h1>
      <form method="post" action="editer_blog.php" class="shadow p-4 rounded bg-light w-75 mx-auto">
        <div class="mb-3">
          <label for="titre" class="form-label">Titre :</label>
          <input id="titre" name="titre" type="text" class="form-control" placeholder="Entrez le titre" required />
        </div>
        <div class="mb-3">
          <label for="contenu" class="form-label">Contenu :</label>
          <textarea id="contenu" name="contenu" rows="6" class="form-control" placeholder="Entrez le contenu"
            required></textarea>
        </div>
        <div class="mb-3">
          <label for="categorie" class="form-label">Catégorie :</label>

          <select id="categorie" class="form-select" name="categorie" required>
            <option disabled selected></option>
            <option value="technologie">⚙️ Technologie</option>
            <option value="voyages">🌍 Voyages</option>
            <option value="art-design">🎨 Art et Design</option>
            <option value="livres">📚 Livres et Littérature</option>
            <option value="jeux">🎮 Jeux</option>
            <option value="cuisine">🍳 Cuisine et Gastronomie</option>
            <option value="sante">🧘 Santé et Bien-être</option>
            <option value="fitness">🏋️‍♂️ Fitness</option>
            <option value="photographie">📸 Photographie</option>
            <option value="musique">🎶 Musique</option>
            <option value="developpement-web">🖥️ Développement Web</option>
            <option value="carriere">💼 Carrière et Entreprises</option>
            <option value="tutoriels">💡 Conseils et Tutoriels</option>
            <option value="programmation">👨‍💻 Programmation</option>
            <option value="diy">🛠️ DIY (Fait-Maison)</option>
            <option value="automobile">🚗 Automobile</option>
            <option value="cinema-series">🎥 Cinéma et Séries</option>
            <option value="animaux">🐾 Animaux et Nature</option>
            <option value="jardinage">🌱 Jardinage</option>
            <option value="reflexions">💬 Réflexions et Pensées</option>
          </select>
        </div>
        <div class="text-center">
          <button name="submit" type="submit" class="btn btn-primary">
            Poster
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>