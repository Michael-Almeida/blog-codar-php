<?php

include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {


        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque incidunt error, sint recusandae omnis est aspernatur id? Est, necessitatibus dolor! Eaque aliquid natus quos dolorum. Illum reiciendis vel ut dolor?
            Accusamus error quaerat sequi natus repellendus voluptatem perspiciatis nemo beatae eum a voluptas eaque similique, quia esse libero tempora quos culpa maxime numquam? Inventore possimus aliquam distinctio recusandae eum ex.
            Est quibusdam molestiae deleniti ipsum sequi dolorum nulla ratione debitis? Quasi laboriosam assumenda reiciendis, odio, ipsa numquam provident dolores perferendis impedit unde iure tempore cum saepe blanditiis necessitatibus non autem!
            Ullam similique porro ab inventore ea quasi perspiciatis illum dolores consequuntur tempore dolorum molestiae excepturi quae aliquam quidem provident blanditiis animi placeat, omnis laudantium molestias deserunt ipsa! Repudiandae, velit possimus!
            Soluta tempore, aspernatur fugit ut molestias ipsa necessitatibus eligendi, repudiandae omnis non, praesentium magnam in nemo reiciendis doloribus. Odit reiciendis praesentium placeat tenetur explicabo repellat animi fugit deserunt itaque tempora.</p>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque incidunt error, sint recusandae omnis est aspernatur id? Est, necessitatibus dolor! Eaque aliquid natus quos dolorum. Illum reiciendis vel ut dolor?
            Accusamus error quaerat sequi natus repellendus voluptatem perspiciatis nemo beatae eum a voluptas eaque similique, quia esse libero tempora quos culpa maxime numquam? Inventore possimus aliquam distinctio recusandae eum ex.
            Est quibusdam molestiae deleniti ipsum sequi dolorum nulla ratione debitis? Quasi laboriosam assumenda reiciendis, odio, ipsa numquam provident dolores perferendis impedit unde iure tempore cum saepe blanditiis necessitatibus non autem!
            Ullam similique porro ab inventore ea quasi perspiciatis illum dolores consequuntur tempore dolorum molestiae excepturi quae aliquam quidem provident blanditiis animi placeat, omnis laudantium molestias deserunt ipsa! Repudiandae, velit possimus!
            Soluta tempore, aspernatur fugit ut molestias ipsa necessitatibus eligendi, repudiandae omnis non, praesentium magnam in nemo reiciendis doloribus. Odit reiciendis praesentium placeat tenetur explicabo repellat animi fugit deserunt itaque tempora.</p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li> <a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>

        <h3 id="categories-title">Categorias</h3>

        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li> <a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>


<?php
include_once("templates/footer.php");
?>