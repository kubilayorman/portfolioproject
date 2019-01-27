<main class="main">

    <?php 
    // the below variable postnumber will be the number of the post in the database.
    // when you click on the link to the full post then that postnumber will be used to fetch the full post
    ?>

    <div class="content">

        <div class="content-background">
            <div class="content-top__head">
                <p class="content-top__head--headtitle">Here you'll find my selected work & feedback from clients.</p>
                <p class="content-top__head--subtitle">If something inspires you, don't hesitate to get in touch and we'll talk if it can be applied to your project.</p>
            </div>
        </div>
  
        <a href=<?php echo "'?page=the_portfolio&portfolionumber='" ?>  class="portfolio_container">
            <div class="portfolio">
                <figure class="portfolio__figure">
                    <img src="img/moose.jpg" alt="" class="portfolio__image">
                </figure>
                <div class="portfolio__text">
                    <h1 class="portfolio__title">This a first post about myself and my work, welcome!</h1>
                    <p class="portfolio__date">2019-01-03</p>
                    <p class="portfolio__summary">This a first post about myself and my work, welcome!</p>
                </div>
            </div>
        </a>
    
    </div>

</main>