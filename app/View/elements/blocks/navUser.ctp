<?php
$this->start('homeBar');
?>
<!-- USUARIO Home-->
<div class="col-md-5 col-xs-12 headerIconsContainer">
    <?php
    if (AuthComponent::user('username')) {
        echo $this->element('common/navUser');
    }
    ?>
</div>
<!-- Fin Usuario-->
<?php
$this->end();

$this->start('mainBar');
?>
<!-- USUARIO Main-->
<div class="col-md-5 col-xs-12 iconsContainer">
    <?php
    if (AuthComponent::user('username')) {
        echo $this->element('common/navUser');
    }
    ?>
</div>
<!-- Fin Usuario-->
<?php
$this->end();
?>