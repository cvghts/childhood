<?php
    get_header();
?>

<div class="container toys">
    <div class="error">
        <div class="error__content">
            <h1 class="title">Страница не найдена 404</h1>
            <p>К сожалению, такой страницы не существует или она была перемещена.</p>
            <h2 class="subtitle"><a href="<?php echo get_home_url(); ?>" class="error__subtitle">Вернуться на главную?</a></h2>
        </div>
        <img class="error__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/error.png" alt="Медведь">
    </div>
</div>

<?php
    get_footer();
?>