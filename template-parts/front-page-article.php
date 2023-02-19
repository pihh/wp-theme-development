<div class='container'>
    <p class="mt-3 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php if (have_posts()) {
                $post_idx = 1;
                while ($post_idx < 4) {

                   
                    ?>
                    <div class="carousel-item <?php if ($post_idx == 1) { ?> active <?php } ?>">
                       
                        <img src="https://place-hold.it/800x450?text=<?= $post_idx; ?>&fontsize=23" class="d-block w-100" alt="">
                        
                    </div>
                    <?php
                    $post_idx++;
                }
            } ?>


            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section class="theme-bg-dark py-5 mt-4 text-center">

        <?php get_template_part('template-parts/front-page', 'newsletter'); ?>
    </section>
    <div class="row row-cols-1 mt-4 row-cols-md-2">
        <?php get_template_part('template-parts/front-page', 'card'); ?>
        <?php get_template_part('template-parts/front-page', 'card'); ?>

    </div>
</div>