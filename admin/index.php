<?php include_once "admin_includes/admin_meta.php"; ?>

<?php include_once "admin_includes/admin_navbar.php"; ?>

<?php include_once "admin_includes/admin_body.php"; ?>


    <div class="container ">
        
        <p class="content-top__head--headtitle">Most recent posts</p>

        <div class="content">

            <a href=<?php echo "'?page=the_post&postnumber='" ?>  class="post_container">
                <div class="post">
                    <figure class="post__figure">
                        <img src="../img/moose.jpg" alt="" class="post__image">
                    </figure>
                    <div class="post__text">
                        <h1 class="post__title">This a first post about myself and my work, welcome!</h1>
                        <p class="post__date">2019-01-03</p>
                        <p class="post__summary">This a first post about myself and my work, welcome!</p>
                    </div>
                </div>
            </a>

        </div>

        <div class="filler__medium">    </div>

        <p class="content-top__head--headtitle">Most recent cases</p>

        <div class="content">

            <a href=<?php echo "'?page=the_post&postnumber='" ?>  class="post_container">
                <div class="post">
                    <figure class="post__figure">
                        <img src="../img/moose.jpg" alt="" class="post__image">
                    </figure>
                    <div class="post__text">
                        <h1 class="post__title">This a first post about myself and my work, welcome!</h1>
                        <p class="post__date">2019-01-03</p>
                        <p class="post__summary">This a first post about myself and my work, welcome!</p>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <?php include_once "admin_includes/admin_footer.php"; ?>
