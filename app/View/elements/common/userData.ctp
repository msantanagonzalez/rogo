<?php
$this->start('homeUserData');
?>
    <p>
        <?php
        $avatar = AuthComponent::user('logo');
        echo $this->Html->image('rogo/'.$avatar, array('alt' => 'User avatar', 'class' => 'img-thumbnail'));
        ?>
    </p>
    <h3>
        <?php echo AuthComponent::user('username'); ?>
    </h3>
    <p class="homeUserData"><?php echo "Name: ".AuthComponent::user('name'); ?></p>
    <p class="homeUserData"><?php echo "Email: ".AuthComponent::user('email'); ?></p>
    <p>
        <a class="btn btn-sm btn-default" href="" role="button">Edit</a>
        <a class="btn btn-sm btn-default" href="users/logout" role="button">Logout</a>
    </p>
<?php
$this->end();
?>