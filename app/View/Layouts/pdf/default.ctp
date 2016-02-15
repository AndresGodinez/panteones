<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->css('style');
	?>
</head>
<body>
	<div id="container">
		<div id="content">
			<div class="cabecera col-md-12">
				<div class="col-md-3">
				<?php echo $this->Html->image('logoNegro.png',array("alt" => "Logo", 'width'=>"100", 'height'=>"100")); echo '<h3>Secretaría de Servicios Publicos</h3>'; ?>
				<h3>Secretaría de Servicios Publicos</h3>		
				</div>
				<div class="col-md-4">
					
				</div>
			</div>

			<div class="col-md-12">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
	</div>
</body>
</html>