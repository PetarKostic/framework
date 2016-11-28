<div class="col-md-6">
    <div class="page-header" id="lista">
        <nav class="navbar navbar-default"  role="navigation">
            <div class="navbar-header">
                <ul class="nav navbar-nav" id="lista">
                    <li> <a href="index.php" class="navbar-brand"><b>Brandovi</b></a></li>
                    <?php foreach ($brendovi as $brend): ?>
                        <li> <a href="brands/<?= $brend->brand_id;?>" class="navbar-brand"><?php echo $brend->brand_title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="col-md-6">
    <div class="page-header" id="lista">
        <nav class="navbar navbar-default"  role="navigation">
            <div class="navbar-header">
                <ul class="nav navbar-nav" id="lista">
                    <li> <a href="index.php" class="navbar-brand"><b>Kategorije</b></a></li>
                    <?php foreach ($kategorije as $kat): ?>
                        <li> <a href="cat/<?= $kat->cat_id;?>" class="navbar-brand"><?php echo $kat->cat_title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </div>
</div>   