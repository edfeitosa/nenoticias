<!-- cabeçalho -->
<?php get_header(); ?>

<!-- menu -->
<?php include ('includes/menu.php'); ?>

<!-- teste tempo -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        exibirTempo("06/05/2018 16:16:00", ".exibeHora");
    });
</script>

<div class="exibeHora"></div>

<!-- rodapé -->
<?php get_footer(); ?>