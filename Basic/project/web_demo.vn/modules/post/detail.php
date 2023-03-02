<section class="container" style="min-height: 600px;">
    <?php
    $cat_id = (int)$_GET['cat_id'];
    if (isset($cat_id)) :
        if ($cat_id  == 1) :
            echo '<h3>Lap top </h3 >';
        elseif ($cat_id  == 2) :
            echo '<h3>Telephone</h3 >';
        endif;
    endif;
    ?>
</section>