<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* searchform.php
    /* 
    /* searchform to be placed
    /* 
    /* ---------------------------------------------------------------------------------------------- */
?>



<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">

    <div class="searchform__content form-group">
        <span class="searchform__content__span"><i class="ion ion-search"></i></span>
        <input type="text" placeholder="<?php _e('Procure qualquer coisa', 'impacto'); ?>" class="searchform__content__input form-control" value="<?php the_search_query(); ?>">
    </div>

</form>
