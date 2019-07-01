<?php get_header(); ?>

<?php global $home_page;  ?>


<div class="" id="fullpage">
     <!--  H o m e -->
     <div class="home section" data-anchor="splash" <?php if ($home_page->splash->image): ?> style="background-image: url( <?= $home_page->splash->image->getImgSrc("full") ?> );" <?php endif; ?>  >

         <?php if (!empty($home_page->splash->title)): ?>
             <h2 class="home__title color-white"> <?= $home_page->splash->title  ?></h2>
         <?php endif; ?>
     </div>

     <!-- N o s o t r o s -->
     <?php include 'inc/templates/_nosotros.php';?>

     <!-- D e   a q u í -->
     <?php include 'inc/templates/_de-aqui.php';?>

     <!-- C o n t a c t o  -->
     <?php include 'inc/templates/_contacto.php';?>

     <!-- C o m u n i d a d  -->
     <?php include 'inc/templates/_comunidad.php';?>

     <!-- T i e n d a -->
     <?php //include 'inc/templates/_tienda.php';?>

     <!-- S e r v i c i o s  -->
     <?php include 'inc/templates/_servicios.php';?>

     <!-- S e r v i c i o s  -->
     <?php include 'inc/templates/_catering.php';?>


</div>


<?php get_footer(); ?>
