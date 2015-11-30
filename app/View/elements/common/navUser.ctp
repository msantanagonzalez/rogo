<div class="row">
    <div class="col-xs-4 singleIconContainer">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        <a href="#"><?php echo AuthComponent::user('username'); ?></a>
    </div>
    <div class="col-xs-4 singleIconContainer">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        <a href="#">Configuracion</a>
    </div>
    <div class="col-xs-4 singleIconContainer">
        <span class="icon-exit" aria-hidden="true"></span>
        <a href="/users/logout">Logout</a>
    </div>
</div>