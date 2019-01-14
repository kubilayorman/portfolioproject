<main class="main">

    <?php 
    // the below variable postnumber will be the number of the post in the database.
    // when you click on the link to the full post then that postnumber will be used to fetch the full post

    ?>

    <div class="content">
        <a href=<?php echo "'?page=the_post&postnumber='" ?>  class="post_container">
            <div class="post">
                <figure class="post__figure">
                    <img src="img/moose.jpg" alt="" class="post__image">
                </figure>
                <div class="post__text">
                    <h1 class="post__title">This a first post about myself and my work, welcome!</h1>
                    <p class="post__date">2019-01-03</p>
                    <p class="post__summary">This a first post about myself and my work, welcome!</p>
                </div>
            </div>
        </a>
    
    </div>

</main>