<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
	<title>MON Blog</title>
</head>
<body class="w-100">
{include file="base_blog.tpl"}
	<div class="row">
		<div class="col-4 w-25 p-5">
			<label for="categorie" class="form-label">
				Sélectionnez une catégorie
			</label>
			<ul class="menu-categorias">
				{foreach $categoryPost as $cat}
					<li>
						<a href="?categorie={$cat.categorie}">{$cat.categorie|capitalize}</a>
					</li>
				{/foreach}

			</ul>
			<a href="?categorie=all">Toutes les categories</a>
		</div>
		<div class="col mt-5">
			<div class="container mt-5">
				{section name=cardBllet loop=$postAll}
					<article class="card mx-auto mb-3" style="max-width: 900px">
						<div class="card-body" style="
							                cursor: pointer;
							                padding: 20px;
							                transition: background-color 0.3s;
							              " onmouseover="this.style.backgroundColor='#dcdcdc';"
							onmouseout="this.style.backgroundColor='#f0f0';"
							onclick="window.location.href='afficher_blog.php?id={$postAll[cardBllet].ID}';">
							<div class="d-flex justify-content-between align-items-center">
								<h3 class="card-title">
									<strong>{$postAll[cardBllet].titre}</strong>
								</h3>
								<h5 class="card-subtitle mb-2 text-muted date-billet"
									data-date="{$postAll[cardBllet].date_billet}"></h5>
							</div>

							<h5 class="card-subtitle mb-2 text-muted">
								Categorie : {$postAll[cardBllet].categorie}
							</h5>
							<p class="card-text mt-2">{$postAll[cardBllet].contenu}</p>

							{if isset($commentCounts[$postAll[cardBllet].ID])}
							{$commentCounts[$postAll[cardBllet].ID]} {else} 0
							{/if}
							<i class="bi bi-chat-left-dots"></i>
						</div>
					</article>
				{/section}
			</div>
		</div>
	</div>
	<script>
		function formatDate(dateString) {
			const options = {
				day: "2-digit",
				month: "long",
				year: "numeric",
				hour: "2-digit",
				minute: "2-digit"
			};
			const date = new Date(dateString);
			return date.toLocaleDateString("fr-FR", options);
		}

		document.querySelectorAll(".date-billet").forEach((element) => {
			const originalDate = element.getAttribute("data-date");
			if (originalDate) {
				element.textContent = formatDate(originalDate);
			}
		});
	</script>
</body>