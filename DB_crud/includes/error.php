<div style="max-width:600px; margin: 30px auto;padding:30px;text-align:center; border:1px solid red;">
    <h2>Có lỗi xảy ra với cơ sở dữ liệu</h2>
    <div>
        <p>Message:<?php echo $e->getMessage()?></p>
        <p>File:<?php echo $e->getFile()?></p>
        <p>Line:<?php echo $e->getLine()?></p>

    </div>
</div>