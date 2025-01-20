{include file="base_blog.tpl"}
<style>
    .container-father {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-container {
        display: grid;
        align-items: center;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 1fr);
        width: 700px;
        grid-gap: 0.5rem;
    }

    .image-container .image {
        position: relative;
        padding-bottom: 100%;
    }

    .image-container .image img {
        height: 100%;
        width: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        left: 0;
        position: absolute;
        top: 0;
    }

    .image-container .image img:nth-of-type(1) {
        filter: grayscale(1) brightness(40%);
    }

    .image-container .image img:nth-of-type(2) {
        -webkit-clip-path: var(--clip-start);
        clip-path: var(--clip-start);
        transition: -webkit-clip-path 0.5s;
        transition: clip-path 0.5s;
        transition: clip-path 0.5s, -webkit-clip-path 0.5s;
    }

    .image-container .image:hover img:nth-of-type(2) {
        -webkit-clip-path: var(--clip-end);
        clip-path: var(--clip-end);
    }
</style>
<div class="container-father">
    <div class="image-container">
        {section name=image loop=$imagePost}
            <div class="image" style="--clip-start: ellipse(0 0 at 0 0); --clip-end: ellipse(150% 150% at 0 0);">
                <img src="{$roots.photoPath}{$imagePost[image].image_path}"
                    onclick="window.location.href='{$roots.path}afficher_blog.php?id={$postAll[image].ID}';" /><img
                    src="{$roots.photoPath}{$imagePost[image].image_path}"
                    onclick="window.location.href='{$roots.path}afficher_blog.php?id={$postAll[image].ID}';" />
            </div>
        {/section}
    </div>
</div>
</body>
</html>

