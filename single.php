<!-- cabeçalho -->
<?php get_header(); ?>

<!-- menu -->
<?php include ('includes/menu.php'); ?>

<!-- banner topo -->
<?php include ('includes/bannerTopo.php'); ?>

<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php $imagem = wp_get_attachment_image_src(get_post_thumbnail_id(), ''); ?>
        <div class="row">
            <div class="col-ex-1 margin-bottom-20 opacidade">ne</div>
            <div class="col-ex-10 margin-bottom-20">
                <h1><?php the_title(); ?></h1>
                <div class="painel-imagem">
                    <img src="<?php echo $imagem[0]; ?>" alt="" />
                </div>
            </div>
            <div class="col-ex-1 margin-bottom-20 opacidade">ne</div>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="col-ex-2 margin-bottom-20 opacidade">ne</div>
            <div class="col-ex-7 margin-bottom-20 padding-top-20 border-top">
                <!-- contagem de tempo -->
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        exibirTempo("<?php echo the_time('d/m/Y G:i:s'); ?>", "#tempo-principal");
                    });
                </script>
                <div class="margin-top-20 margin-bottom-20 header-content">
                    Por <b><?php echo get_field('autor'); ?></b>
                    <br />
                    <?php echo the_time('F d, Y'); ?> &bull; <span id="tempo-principal"></span>
                </div>
                <?php the_content(); ?>
            </div>            
            <div class="col-ex-3 margin-bottom-20">
                <h1>Referentes</h1>
            </div>
            <div class="clear"></div>
        </div>
    <?php endwhile; endif; ?>
            <?php /* endwhile; else: ?>
                <h1>Nada Encontrado</h1>
                <h2>Erro 404</h2>
                <div class="alerta">Lamentamos mas não foram encontrados artigos.</div>         
            <?php endif; ?>
        </div>
        <div class="col-ex-1 opacidade">ne</div>
        <div class="clear"></div>
    </div> */ ?>
</div>

<!-- rodapé -->
<?php get_footer(); ?>