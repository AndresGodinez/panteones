<div class="users form col-md-5">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Actualizar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username',array('class'=>'form-control', 'label'=>'Nombre Usuario', 'placeholder'=>'Nombre Usuario'));
		echo $this->Form->input('password',array('class'=>'form-control', 'label'=>'Password', 'placeholder'=>'Password'));
		echo $this->Form->input('role',array('class'=>'form-control', 'label'=>'Rol', 'placeholder'=>'Rol'));
		echo $this->Form->input('fullname',array('class'=>'form-control', 'label'=>'Nombre Completo', 'placeholder'=>'Nombre Completo'));
		echo $this->Form->input('telephone',array('class'=>'form-control', 'label'=>'Teléfono', 'placeholder'=>'Teléfono'));
		echo $this->Form->input('address',array('class'=>'form-control', 'label'=>'Dirección', 'placeholder'=>'Dirección'));
		echo $this->Form->input('comment',array('class'=>'form-control', 'label'=>'Comentario', 'placeholder'=>'Comentario'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('class'=>'btn btn-info', 'label'=>'Actualizar')); ?>
</div>

<div class="actions col-md-3">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Esta seguro de eliminar el usuario de '.$this->Form->value('User.fullname').'?', $this->Form->value('User.id'))); ?></li>
	<li><?php echo $this->Html->link(__('Lista Usuarios'), array('action' => 'index')); ?></li>
  </ul>
</div>
</div>
