<?php get_header(); ?>

<div id="page-home" class="content-site">
    <div class="container">
<!--        <div class="row">-->
<!--            <div class="col-sm-12 text-center">-->
<!--                <h1>Página Inicial</h1>-->
<!--                <h2>Aqui vai carregar varios blocos com imagens dos produtos</h2>-->
<!---->
<!--                --><?php //the_content(); ?>
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->

        <?php for($x = 0; $x < 2; $x++){ ?>

          <ul class="row list-inline list-products">
              <?php
              $args = array(
                  'post_type' => 'product',
                  'stock' => 1,
                  'posts_per_page' => 8,
                  'orderby' =>'rand',
                  'order' => 'rand' );
              $loop = new WP_Query( $args );

              while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                  <li class="product-item list-inline-item col-12 col-sm-6 col-md-4 col-lg-3 zoom-img">
                      <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>"
                         title="<?php the_title(); ?>" class="product-img">
                          <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); ?>
                          <span class="title-product">
                            <h3 class=""><?php the_title(); ?></h3>
                        </span>
                          <span class="price"><?php echo $product->get_price_html(); ?></span>
                      </a>
                      <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                  </li><!-- /span3 -->
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
          </ul>

        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>
