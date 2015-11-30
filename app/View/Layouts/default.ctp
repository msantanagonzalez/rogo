<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Rogo |- Ask and respond ');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	echo $this->Html->charset();
	echo $this->Html->meta(array('name' => 'author','content' => 'Marco Santana and Dario Mendez'));
	echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no')); //Doesn't allow zoom on mobile devicess
	echo $this->Html->meta('description','Ask,Respond,Interact');
	echo $this->Html->meta(array('name' => 'google', 'content' => 'notranslate')); //Avoids google automatic translate
	echo $this->Html->meta('keywords','ask, question, help, respond, pregunta, ayuda, respuesta');
	echo $this->Html->css(array('bootstrap', 'styles', 'customFonts','jquery-ui'));
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	//echo $this->Html->meta('Icono Rogo', 'img/rogo.ico', array('type' => 'icon'));
	echo $this->Html->meta('icon','img/rogo.ico');
	?>

	<title>
		<?php echo $cakeDescription.':'.$this->fetch('title'); ?>
	</title>
</head>
<body class="bodyNoise">
	<div id="container-fluid">
		<div id="row">
			<!-- Header -->
			<div class="col-xs-12 headContainer headerNoise">
				<div class="row">
					<?php echo $this->fetch('header'); ?>
				</div>
			</div>
			<!-- End of Header -->
			<!-- Content -->
			<div class="col-xs-12">
				<div class="row">
					<?php echo $this->Flash->render(); ?>

					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
			<!-- End of Content -->
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
<?php
	echo $this->Html->script('jquery');
	echo $this->Html->script('jquery-ui');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('bootstrap.min.one');
	echo $this->Html->script('main');
?>
</html>
