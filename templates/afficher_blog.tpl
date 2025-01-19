  {include file="base_blog.tpl"}<html>
  <h1 class="mb-2"
    style="font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: bold; color: #bababa; text-align: center; text-transform: uppercase; letter-spacing: 2px; line-height: 1.2; margin-bottom: 4rem; margin-top: 3rem;">
    {$lastPost.titre}
  </h1>


  <img src="{$imageUrl}" alt="Descrição da Imagem" class="img-fluid d-none d-sm-block"
    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #111111; z-index: -1; filter: brightness(0.3);">

  <div class="container">
    <div class="card mx-auto" style="max-width: 50rem;">
      <div class="card-body text-white bg-dark">

        <div class="d-flex justify-content-between align-items-center ">
          <h1 class="mb-2">{$lastPost.titre}</h1>
          <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-trash "></i>
          </button>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content bg-secondary">
                <div class="modal-header">
                  <h5 class="modal-title text-white" id="exampleModalLabel">Vous voulez vraiment supprimer ce billet ?
                    les commentaires seront également supprimés
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-primary"
                    onclick="window.location.href='delete_blog.php?id={$lastPost.ID}';">oui</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <small class="date-billet">{$lastPost.date_billet}</small><br />
        <small>Categorie : {$lastPost.categorie}</small>
        <hr />
        <p class="lead">{$lastPost.contenu}</p>
      </div>
    </div>
    <div class="card mx-auto mt-4" style="font-family: 'Playfair Display', serif; max-width: 50rem">
      <div class="card-body text-white bg-dark" style="font-family: 'Playfair Display', serif;">
        <h2>Commentaires</h2>
        <hr />

        <ul class="list-group mb-4">
          {section name=comment loop=$comentsPost}
            <li class="list-group-item">
              <strong>{$comentsPost[comment].nom}</strong>
              (<em class="date-billet">{$comentsPost[comment].date_comment}</em>):
              <p class="mt-1">{$comentsPost[comment].comment}</p>
            </li>
          {/section}
        </ul>
        <hr />
        <p>
          <a href="javascript:void(0);" onclick="afficherFormulaire()" class="btn btn-link">Ajouter un commentaire</a>
        </p>
      </div>
    </div>

    <div id="formComent" class="card mx-auto p-4 mt-4 shadow bg-light"
      style="display: none; max-width: 600px; font-family: 'Playfair Display', serif;">
      <form method="POST" action="../php/commenter_blog.php">
        <input type="hidden" name="ID" value="{$lastPost.ID}" />
        <div class="mb-3">
          <label for="nom" class="form-label">Nom:</label>
          <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" required />
        </div>
        <div class="mb-3">
          <label for="comment" class="form-label">Commentaire:</label>
          <textarea name="comment" id="comment" class="form-control" rows="4" placeholder="Entrez votre commentaire"
            required></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    function formatDate(dateString) {
      const options = {
        day: "2-digit",
        month: "long",
        year: "numeric",
        hour: "2-digit",
        minute: "2-digit",
      };
      const date = new Date(dateString);
      return date.toLocaleDateString("fr-FR", options);
    }

    document.querySelectorAll(".date-billet").forEach((element) => {
      const originalDate = element.textContent.trim();
      if (originalDate) {
        const formattedDate = formatDate(originalDate);
        element.textContent = formattedDate;
      }
    })

    function afficherFormulaire() {
      document.getElementById("formComent").style.display = "block";
    }
  </script>
</body>