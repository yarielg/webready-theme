
<?php get_header(); 
 global $sb_theme_options;

//first get the current category ID
$cat_id = get_query_var('cat');
//then i get the data from the database
$cat_data = get_option("category_".$cat_id);
//and then i just display my category image if it exists
if (isset($cat_data['img']) && isset($cat_data['background_color']) && isset($cat_data['font_color'])){
    $cat_img=$cat_data['img'];
    $cat_bg_color = $cat_data['background_color'];
    $cat_font_color = $cat_data['font_color'];
}else{
    $cat_bg_color ='#000';
    $cat_font_color = '#FFF';
}
?>

<section id="jumbotron">
        <div class="container jumbotron jumbotron-fluid mb-0" style="background: <?php echo $cat_bg_color ?>; max-width: 100%;background-size: cover;color:<?php echo $cat_font_color ?> !important">
        
          <div class="container">
            <div class="row">
                <div class="col-md-6">
                    
                    <img src="<?php echo $cat_img ?>" class="img-fluid" alt="Category Image">
                </div>
                <div class="col-md-6 ">
                    <h2 class="text-center"><?php echo get_cat_name($cat_id); ?></h2>
                    <p  class="d-none d-md-block d-lg-block  d-xl-block" style="color:<?php echo $cat_font_color ?> !important"><?php echo category_description(); ?></p>
                </div>
            </div>
          </div>
        </div>
</section>
<section>
    <!-- Secondary Column -->
                  <nav id="category-navbar" class="navbar navbar-expand-md navbar-light bg-light">
                    <div class="container">
                    <a class="navbar-brand" href="#">Categorías</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                    <?php
                    $args = array(
                      'orderby' => 'name',
                      
                      );
                    $categories = get_categories( $args );
                    foreach ( $categories as $category ) {
                         $args = array(
                            'category_name'    => $category->name,
                            'orderby'          => 'date',
                            'order'            => 'DESC',
                            'post_type'        => 'post',
                        );
                        $posts_array = get_posts( $args );
                        $category_id = get_cat_ID( $category->name );
                        $category_url = get_category_link( $category_id );
                         ?>
                        <?php if( get_cat_name($cat_id)==$category->name ){
                            echo '<li class="nav-item active"><a class="nav-link" href="'.$category_url.'">'.$category->name .'</a></li>';
                        }else{
                            echo '<li class="nav-item"><a class="nav-link" href="'.$category_url.'">'.$category->name .'</a></li>';
                        }
                    }
                    ?>
                        </ul>
                    </div>
                </div>
                    </nav>
    
</section>
 <div class="container blog">
    
    <div class="row px-md-5">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="col-12 col-sm-6 col-lg-4">
            <a href="<?php the_permalink(); ?>">
                <div class="card post"> 
                <div class="author_post">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?> 
                </div>
                  <img class="img_post"  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Card image cap">
                  <div class="card-body">
                    <p class="category"> <?php the_category( ', ' ); ?></p>
                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="card-text"><?php echo strip_tags( get_the_excerpt() ); ?></p>
                    <p class="post_date mb-0 text-right text-muted"><?php the_time('d/m/Y'); ?> </p>
                  </div>
                </div>
            </a>
        </article>
        <?php endwhile; ?>
        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
        <?php endif; ?>
    </div>
</div>

<?php  get_footer(); ?>