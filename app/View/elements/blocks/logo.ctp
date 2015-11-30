<?php
$this->start('homeLogo');
?>
<!-- LOGO Home -->
<div class="indexCircle visible-lg visible-md">
</div>
<div class="col-md-3 indexLogoContainer text-right visible-lg visible-md">
    <a href="index.php">
        <?php echo $this->Html->image('rogo/logo1.png', array('alt' => 'Site logo')); ?>
    </a>
</div>
<!-- Fin Logo-->
<?php
$this->end();
?>
<?php
$this->start('mainLogo');
?>
<!-- LOGO -->
<div class="circle visible-lg visible-md">
</div>
<div class="col-md-3 logoContainer text-center visible-lg visible-md">
    <a href="index.php">
        <?php echo $this->Html->image('rogo/logo1.png', array('alt' => 'Site logo', 'class' => 'logo')); ?>
    </a>
</div>
<!-- Fin logo y circulo-->
<?php
$this->end();
?>
