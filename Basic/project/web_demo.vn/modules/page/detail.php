<section class="container" style="min-height: 600px;">
    <?php
    $id = (int)$_GET['id'];
    if (isset($id)) :
        if ($id == 1) :
            echo '<h3>Chung toi la cong ty da quoc gia ve cac linh vuc cong nghe hang dau cua khu vuc </h3 >';
        elseif ($id == 2) :
            echo '<ul>
            <li>CTY THHH LOGITECH</li>
            <li>Dia chi: 132 Ho Tung Mau, Nam Tu Liem, Ha Noi</li>
            <li>SDT: 03934924242</li>
            </ul>';

        endif;
    endif;
    ?>
</section>