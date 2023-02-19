<?php 
    get_header( )
?>

		<article class="content px-3 py-5 p-md-5">

            <?php 
                if(have_posts(  )){
                    while(have_posts(  )){
						/*
                        the_post(  );
                        ?>
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                        <?php
						*/
						the_post();
						get_template_part( 'template-parts/content' ,'article');
                    }
                }

            ?>
       
	    </article>
	    
    
<?php 
    get_footer(  )

?>
