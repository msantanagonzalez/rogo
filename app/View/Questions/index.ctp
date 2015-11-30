<?php
$this->start('header');
echo $this->element('homeTop');
?>
<!-- REGISTRO/USER DATA + CAROUSEL -->
<div class="col-xs-12">
	<div class="row">
		<?php
		if (AuthComponent::user('username')){
		?>
			<!-- USER INFO -->
			<div class="col-md-3 col-xs-12 userDataContainer text-center">
		<?php
			echo $this->Flash->render();
			echo $this->element('common/userData');
			echo $this->fetch('homeUserData');
		?>
			</div>
			<!-- End of USER INFO -->
		<?php
		}else{
		?>
			<!-- LOGIN/REGISTRO -->
			<div class="col-md-3 col-xs-12">
				<div class="row">
					<!-- REGISTRO -->
					<div class="col-xs-12 registroContainer">
						REGISTRO
						<?php
						echo $this->Flash->render();
						echo $this->Form->create('User',array(
								'url' => array('controller' => 'users','action' => 'add'),
								'class' => 'form-horizontal',
								'inputDefaults' => array('label' => false)
							)
						); ?>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<?php echo $this->Form->input(
									'name',
									array('class' => 'form-control','placeholder' => 'Nombre')
								);?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<?php echo $this->Form->input(
									'email',
									array('class' => 'form-control','placeholder' => 'Email')
								);?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<?php echo $this->Form->input(
									'username',
									array('class' => 'form-control','placeholder' => 'username')
								);?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<?php echo $this->Form->input(
									'password',
									array('class' => 'form-control','placeholder' => 'password','type' => 'password')
								);?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<?php echo $this->Form->input(
									'password_confirm',
									array('class' => 'form-control','placeholder' => 'repeat password','type' => 'password')
								);?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<?php
								echo $this->Form->submit('Registrarse',array('class' => 'btn btn-primary'));
								?>
							</div>
						</div>
						<?php echo $this->Form->end(); ?>
					</div>
					<!-- End of REGISTRO -->
					<!-- LOGIN -->
					<div class="col-xs-12 registroContainer">
						LOGIN
						<?php
						echo $this->Flash->render('auth');
						echo $this->Form->create('User',array(
								'url' => array('controller' => 'users','action' => 'login'),
								'class' => 'form-horizontal',
								'inputDefaults' => array('label' => false)
							)
						); ?>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<?php echo $this->Form->input(
									'username',
									array('class' => 'form-control','placeholder' => 'username')
								);?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<?php echo $this->Form->input(
									'password',
									array('class' => 'form-control','placeholder' => 'password','type' => 'password')
								);?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2">
								<?php echo $this->Form->submit('Login',array('class' => 'btn btn-primary')); ?>
							</div>
						</div>
						<?php echo $this->Form->end(); ?>
					</div>
					<!-- End of LOGIN -->
				</div>
			</div>
		<?php
		}
		?>
		<!-- CAROUSEL -->
		<div class="col-md-9 col-xs-12 carouselContainer">

			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0-" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<?php
						echo $this->Html->image('rogo/carouselProgramacion.png', array('alt' => 'Imagen carrousel', 'class' => 'carouselImageContainer'));
						?>
							<div class="carousel-caption">
								<h1>Programacion</h1>
								<p><?php echo $questionsCarousel['Programacion']['Question']['title']?></p>
								<?php echo $this->Html->link('Responder', 'view/'.$questionsCarousel['Programacion']['Question']['id'], array('class' => 'btn btn-lg btnCarousel')); ?>
							</div>

					</div>

					<div class="item">
						<?php echo $this->Html->image('rogo/carouselCiencia.png', array('alt' => 'Imagen carrousel', 'class' => 'carouselImageContainer')); ?>
						<div class="carousel-caption">
							<h1>Ciencia</h1>
							<p><?php echo $questionsCarousel['Ciencia']['Question']['title']?></p>
							<?php echo $this->Html->link('Responder', 'view/'.$questionsCarousel['Ciencia']['Question']['id'], array('class' => 'btn btn-lg btnCarousel')); ?>
						</div>
					</div>

					<div class="item">
						<?php echo $this->Html->image('rogo/carouselDeporte.png', array('alt' => 'Imagen carrousel', 'class' => 'carouselImageContainer')); ?>
						<div class="carousel-caption">
							<h1>Deporte</h1>
							<p><?php echo $questionsCarousel['Deporte']['Question']['title']?></p>
							<?php echo $this->Html->link('Responder', 'view/'.$questionsCarousel['Deporte']['Question']['id'], array('class' => 'btn btn-lg btnCarousel')); ?>
						</div>
					</div>

					<div class="item">
						<?php echo $this->Html->image('rogo/carouselArte.png', array('alt' => 'Imagen carrousel', 'class' => 'carouselImageContainer')); ?>
						<div class="carousel-caption">
							<h1>Arte</h1>
							<p><?php echo $questionsCarousel['Arte']['Question']['title']?></p>
							<?php echo $this->Html->link('Responder', 'view/'.$questionsCarousel['Arte']['Question']['id'], array('class' => 'btn btn-lg btnCarousel')); ?>
						</div>
					</div>

					<div class="item">
						<?php echo $this->Html->image('rogo/carouselTecnologia.png', array('alt' => 'Imagen carrousel', 'class' => 'carouselImageContainer')); ?>
						<div class="carousel-caption">
							<h1>Tecnologia</h1>
							<p><?php echo $questionsCarousel['Tecnologia']['Question']['title']?></p>
							<?php echo $this->Html->link('Responder', 'view/'.$questionsCarousel['Tecnologia']['Question']['id'], array('class' => 'btn btn-lg btnCarousel')); ?>
						</div>
					</div>

				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>
	</div>

</div>
<!-- End of REGISTRO/USER DATA + CAROUSEL -->
<?php
$this->end();
?>
<!-- SEPARADOR -->
<div class="col-xs-12 separator">
</div>
<!-- Fin Separador-->
<!-- Main content -->
<div class="col-xs-12">
	<div class="row">
		<!-- Principio Historial -->
		<div class="col-xs-12 col-sm-8 text-center">
			<h3 class="indexFecha"><?php echo $date;?></h3>
			<div class="row">

				<?php
				if(empty($questionsProgramacion) && empty($questionsCiencia) && empty($questionsDeportes)&& empty($questionsArte) && empty($questionsTecnologia)){
				?>
					<div class="col-md-9 col-md-offset-2 col-xs-12 alert alert-noQuestion" role="alert">
						<span class="glyphicon glyphicon-info-sign menuIconosCategoria"></span>
						<h2><?php echo __('There are no questions'); ?></h2>
					</div>
				<?php
				}
				if(!empty($questionsProgramacion)){
				?>
					<!-- Programacion -->
					<div class="col-xs-12 text-center">
						<h1 class="indexCategoria"><span class="icon-terminal indexIconosCategoria"></span><a href="#">Programacion</a></h1>
						<!-- PreguntasProgramacion -->
						<?php
						foreach($questionsProgramacion as $data){
							?>
							<div class="col-md-9 col-md-offset-1 col-xs-12 indexPreguntaContainer">
								<div class="row">
									<!-- Encabezado pregunta -->
									<div class="col-xs-12 encabezadoContainer">
										<p>
											<?php echo $this->Html->link($data['Question']['title'], 'view/'.$data['Question']['id']); ?>
										</p>
									</div>
									<!-- Fin Encabezado pregunta -->
									<!-- Cuerpo pregunta -->
									<div class="col-xs-12">
										<p class="textoPregunta"><?php echo $data['Question']['description']; ?></p>
									</div>
									<!-- Fin Cuerpo pregunta -->
									<!-- footer pregunta -->
									<div class="col-xs-12 indexVoto text-left">
										<div class="row">
											<div class="col-xs-6 text-left">
												<?php echo $this->Html->link("Responder", 'view/'.$data['Question']['id'],array('class' => 'btn btn-lg btnPregunta')); ?>
											</div>
											<div class="col-xs-6 text-center">
												<?php
													echo $this->Html->link(
														$this->Html->tag('span',$data['VoteQuestion'].' Votes',array('class' => 'puntuacion')),
														'view/'.$data['Question']['id'],
														array('escape' => FALSE)
													);
												?>
											</div>
											<div class="col-xs-12 col-md-8 col-md-offset-4 text-right avatarContainer">
												<a href="/users/view/<?php echo $data['User']['id']; ?>">
													<?php echo $this->Html->image('rogo/'.$data['User']['logo'], array('alt' => 'avatar usuario','class' => 'img-rounded avatarPregunta')); ?>
													<span><?php echo $data['User']['username']; ?></span>
												</a>
											</div>
										</div>
										<!-- Fin footer pregunta -->
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<!-- Fin Programacion -->
				<?php
				}

				if(!empty($questionsCiencia)){
					?>
					<!-- Ciencia -->
					<div class="col-xs-12 text-center">
						<h1 class="indexCategoria"><span class="icon-atomIcon indexIconosCategoria"></span><a href="#">Ciencia</a></h1>
						<!-- PreguntasCiencia -->
						<?php
						foreach($questionsCiencia as $data){
							?>
							<div class="col-md-9 col-md-offset-1 col-xs-12 indexPreguntaContainer">
								<div class="row">
									<!-- Encabezado pregunta -->
									<div class="col-xs-12 encabezadoContainer">
										<p><a href="/questions/view/<?php echo $data['Question']['id']; ?>"><?php echo $data['Question']['title']; ?></a></p>
									</div>
									<!-- Fin Encabezado pregunta -->
									<!-- Cuerpo pregunta -->
									<div class="col-xs-12">
										<p class="textoPregunta"><?php echo $data['Question']['description']; ?></p>
									</div>
									<!-- Fin Cuerpo pregunta -->
									<!-- footer pregunta -->
									<div class="col-xs-12 indexVoto text-left">
										<div class="row">
											<div class="col-xs-6 text-left">
												<a class="btn btn-lg btnPregunta" href="/questions/view/<?php echo $data['Question']['id']; ?>" role="button">Responder &raquo;</a>
											</div>
											<div class="col-xs-6 text-center">
												<a href="/questions/view/<?php echo $data['Question']['id']; ?>"><span class="puntuacion"><?php echo $data['VoteQuestion']; ?> votes</span></a>
											</div>
											<div class="col-xs-12 col-md-8 col-md-offset-4 text-right avatarContainer">
												<a href="/users/view/<?php echo $data['User']['id']; ?>">
													<?php echo $this->Html->image('rogo/'.$data['User']['logo'], array('alt' => 'avatar usuario','class' => 'img-rounded avatarPregunta')); ?>
													<span><?php echo $data['User']['username']; ?></span>
												</a>
											</div>
										</div>
										<!-- Fin footer pregunta -->
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<!-- Fin Ciencia -->
					<?php
				}

				if(!empty($questionsDeporte)){
					?>
					<!-- Deporte -->
					<div class="col-xs-12 text-center">
						<h1 class="indexCategoria"><span class="icon-trophyIcon2 indexIconosCategoria"></span><a href="#">Deporte</a></h1>
						<!-- PreguntasDeporte -->
						<?php
						foreach($questionsDeporte as $data){
							?>
							<div class="col-md-9 col-md-offset-1 col-xs-12 indexPreguntaContainer">
								<div class="row">
									<!-- Encabezado pregunta -->
									<div class="col-xs-12 encabezadoContainer">
										<p><a href="/questions/view/<?php echo $data['Question']['id']; ?>"><?php echo $data['Question']['title']; ?></a></p>
									</div>
									<!-- Fin Encabezado pregunta -->
									<!-- Cuerpo pregunta -->
									<div class="col-xs-12">
										<p class="textoPregunta"><?php echo $data['Question']['description']; ?></p>
									</div>
									<!-- Fin Cuerpo pregunta -->
									<!-- footer pregunta -->
									<div class="col-xs-12 indexVoto text-left">
										<div class="row">
											<div class="col-xs-6 text-left">
												<a class="btn btn-lg btnPregunta" href="/questions/view/<?php echo $data['Question']['id']; ?>" role="button">Responder &raquo;</a>
											</div>
											<div class="col-xs-6 text-center">
												<a href="/questions/view/<?php echo $data['Question']['id']; ?>"><span class="puntuacion"><?php echo $data['VoteQuestion']; ?> votes</span></a>
											</div>
											<div class="col-xs-12 col-md-8 col-md-offset-4 text-right avatarContainer">
												<a href="/users/view/<?php echo $data['User']['id']; ?>">
													<?php echo $this->Html->image('rogo/'.$data['User']['logo'], array('alt' => 'avatar usuario','class' => 'img-rounded avatarPregunta')); ?>
													<span><?php echo $data['User']['username']; ?></span>
												</a>
											</div>
										</div>
										<!-- Fin footer pregunta -->
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<!-- Fin Deporte -->
					<?php
				}

				if(!empty($questionsArte)){
					?>
					<!-- Arte -->
					<div class="col-xs-12 text-center">
						<h1 class="indexCategoria"><span class="icon-paletteIcon1 indexIconosCategoria"></span><a href="#">Arte</a></h1>
						<!-- PreguntasArte -->
						<?php
						foreach($questionsArte as $data){
							?>
							<div class="col-md-9 col-md-offset-1 col-xs-12 indexPreguntaContainer">
								<div class="row">
									<!-- Encabezado pregunta -->
									<div class="col-xs-12 encabezadoContainer">
										<p><a href="/questions/view/<?php echo $data['Question']['id']; ?>"><?php echo $data['Question']['title']; ?></a></p>
									</div>
									<!-- Fin Encabezado pregunta -->
									<!-- Cuerpo pregunta -->
									<div class="col-xs-12">
										<p class="textoPregunta"><?php echo $data['Question']['description']; ?></p>
									</div>
									<!-- Fin Cuerpo pregunta -->
									<!-- footer pregunta -->
									<div class="col-xs-12 indexVoto text-left">
										<div class="row">
											<div class="col-xs-6 text-left">
												<a class="btn btn-lg btnPregunta" href="/questions/view/<?php echo $data['Question']['id']; ?>" role="button">Responder &raquo;</a>
											</div>
											<div class="col-xs-6 text-center">
												<a href="/questions/view/<?php echo $data['Question']['id']; ?>"><span class="puntuacion"><?php echo $data['VoteQuestion']; ?> votes</span></a>
											</div>
											<div class="col-xs-12 col-md-8 col-md-offset-4 text-right avatarContainer">
												<a href="/users/view/<?php echo $data['User']['id']; ?>">
													<?php echo $this->Html->image('rogo/'.$data['User']['logo'], array('alt' => 'avatar usuario','class' => 'img-rounded avatarPregunta')); ?>
													<span><?php echo $data['User']['username']; ?></span>
												</a>
											</div>
										</div>
										<!-- Fin footer pregunta -->
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<!-- Fin Arte -->
					<?php
				}

				if(!empty($questionsTecnologia)){
					?>
					<!-- Tecnologia -->
					<div class="col-xs-12 text-center">
						<h1 class="indexCategoria"><span class="icon-chipIcon indexIconosCategoria"></span><a href="#">Tecnologia</a></h1>
						<!-- PreguntasTecnologia -->
						<?php
						foreach($questionsTecnologia as $data){
							?>
							<div class="col-md-9 col-md-offset-1 col-xs-12 indexPreguntaContainer">
								<div class="row">
									<!-- Encabezado pregunta -->
									<div class="col-xs-12 encabezadoContainer">
										<p><a href="/questions/view/<?php echo $data['Question']['id']; ?>"><?php echo $data['Question']['title']; ?></a></p>
									</div>
									<!-- Fin Encabezado pregunta -->
									<!-- Cuerpo pregunta -->
									<div class="col-xs-12">
										<p class="textoPregunta"><?php echo $data['Question']['description']; ?></p>
									</div>
									<!-- Fin Cuerpo pregunta -->
									<!-- footer pregunta -->
									<div class="col-xs-12 indexVoto text-left">
										<div class="row">
											<div class="col-xs-6 text-left">
												<a class="btn btn-lg btnPregunta" href="/questions/view/<?php echo $data['Question']['id']; ?>" role="button">Responder &raquo;</a>
											</div>
											<div class="col-xs-6 text-center">
												<a href="/questions/view/<?php echo $data['Question']['id']; ?>"><span class="puntuacion"><?php echo $data['VoteQuestion']; ?> votes</span></a>
											</div>
											<div class="col-xs-12 col-md-8 col-md-offset-4 text-right avatarContainer">
												<a href="/users/view/<?php echo $data['User']['id']; ?>">
													<?php echo $this->Html->image('rogo/'.$data['User']['logo'], array('alt' => 'avatar usuario','class' => 'img-rounded avatarPregunta')); ?>
													<span><?php echo $data['User']['username']; ?></span>
												</a>
											</div>
										</div>
										<!-- Fin footer pregunta -->
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<!-- Fin Tecnologia -->
					<?php
				}
				?>

			</div>
		</div>
		<!-- Fin Historial -->
		<!-- Sidebar -->
		<div class="col-xs-12 col-sm-4">
			<div class="row">
				<div class="indexCategoriaContainer col-xs-12">
					<a href="#" class="list-group-item"><span class="icon-terminal menuIconosCategoria" aria-hidden="true"></span>Programacion</a>
					<a href="#" class="list-group-item "><span class="icon-atomIcon menuIconosCategoria"></span>Ciencia</a>
					<a href="#" class="list-group-item "><span class="icon-trophyIcon2 menuIconosCategoria"></span>Deporte</a>
					<a href="#" class="list-group-item "><span class="icon-paletteIcon1 menuIconosCategoria"></span>Arte</a>
					<a href="#" class="list-group-item "><span class="icon-chipIcon menuIconosCategoria"></span>Tecnologia</a>
				</div>

				<input hidden id="inputDate" name="inputDate" value="<?php echo $date;?>">
				<div id="datepicker" class="col-xs-12">
				</div>
			</div>
		</div>
		<!-- End of Sidebar -->
	</div>
</div>
<!-- End of Main content-->
