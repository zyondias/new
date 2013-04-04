<h1>Faça aqui sua inscrição</h1>

<?php echo $this->Form->create('Inscricao', array('action'=>'inscrever')) ?>

<?php echo $this->Form->input('nome',  array('label'=>'Nome: ', 'placeholder'=>'ZAZA')) ?>
<?php echo $this->Form->input('email', array('label'=>'E-mail: ','placeholder'=>'zyon.dias@hotmail.com'))?>
<?php echo $this->Form->input('telefone', array('label'=>'Telefone: ','placeholder'=>'11 4444-5899'))?>
<?php echo $this->Form->input('endereco', array('label'=>'Endereço: ', 'placeholder'=>'Rua Xiquinho'))?>

<?php echo $this->Form->submit('Finalizar cadastro')?>

<?php echo $this->Form->end()?>