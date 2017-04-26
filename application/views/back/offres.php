<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Offres d'emploi</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <?= $output ?>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

    <?php
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>

        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>