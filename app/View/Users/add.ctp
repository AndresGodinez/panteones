<div class="users form col-md-5 ">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Usuario'); ?></legend>
	<?php
		echo $this->Form->input('username',array('label'=>'Usuario', 'class'=>'form-control', 'placeholder'=>'Nombre Usuario'));
		echo $this->Form->input('password',array('label'=>'Password', 'class'=>'form-control', 'placeholder'=>'Password'));
		echo $this->Form->input('role',array('class'=>'form-control', 'label'=>'Rol', 'placeholder'=>'Rol'));
		echo $this->Form->input('fullname',array('class'=>'form-control', 'label'=>'Nombre Completo', 'placeholder'=>'Nombre completo'));
		echo $this->Form->input('telephone',array('class'=>'form-control', 'label'=>'Teléfono', 'placeholder'=>'Teléfono'));
		echo $this->Form->input('address',array('class'=>'form-control', 'label'=>'Dirección', 'placeholder'=>'direccion','rows'=>3));
		echo $this->Form->input('comment',array('class'=>'form-control', 'label'=>'Comentario', 'placeholder'=>'comentario','rows'=>3));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('class'=>'btn btn-info', 'label'=>'Alta Usuario')); ?>
</div>