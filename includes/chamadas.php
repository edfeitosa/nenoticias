<div class="container">
    <?php query_posts('category_name=agora&orderby=date&posts_per_page=1&order=DESC');
    if (have_posts()) {
        $i = 1;
        while (have_posts()) {
            the_post();
            if ($i == 1) { ?>
                <!-- contagem de tempo -->
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        exibirTempo("<?php echo the_time('d/m/Y G:i:s'); ?>", "#tempo-principal");
                    });
                </script>
                <div class="row">
                    <div class="col-ex-12 margin-bottom-20 tempo">
                        <?php echo the_time('F d, Y'); ?> &bull; <span id="tempo-principal"></span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row">
                    <!-- título -->
                    <div class="col-ex-12 margin-bottom-20">
                        <h1>
                            <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                        </h1>
                    </div>
                    <!-- resumo da chamada -->
                    <div class="col-ex-6 margin-bottom-20">
                        <?php if (has_excerpt()) {
                            the_excerpt();
                        } ?>
                    </div>
                    <div class="clear"></div>
                </div>
            <?php } else if ($i >= 2) { ?>
                <div class="row">
                    <div class="col-ex-12">
                        <h2><?php echo the_title(); ?></h2>
                    </div>
                </div>
            <?php }
            $i++;
        }
    } else {
        echo '<div class="alerta">Ainda não existe nenhuma informação cadastrada</div>';
    } ?>
</div>