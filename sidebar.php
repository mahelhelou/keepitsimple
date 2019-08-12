<div id="sidebar" class="four columns">
   <?php 
      if (is_active_sidebar('main-sidebar')) {
         dynamic_sidebar('main-sidebar');
      } else {
         echo 'No widgets founded';
      }
   ?>
   			
</div> <!-- end sidebar -->