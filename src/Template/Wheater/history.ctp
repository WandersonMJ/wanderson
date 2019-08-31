<?= $this->Html->css('datatables.min.css') ?>

<div name ="total">
	<div id="pesquisas">
		<table id='historico' border="1">

	<thead>
		<th><b>IP: </b></th>
		<th><b>Local: </b></th>
		<th><b>Cidade: </b></th>
		<th><b>CEP: </b></th>
		<th><b>Temperatura: </b></th>
		<th><b>Tempo: </b></th>
		<th><b>Humidade: </b></th>
		<th><b>vento: </b></th>
	</thead>
	<?php foreach ($history as $key => $item):?>
	<tr>
		<td><?= $item['ip'] ?></td>
		<td><?= $item['local'] ?></td>
		<td><?= $item['cidade'] ?></td>
		<td><?= $item['cep'] ?></td>
		<td><?= $item['temperatura'] ?></td>
		<td><?= $item['tempo'] ?></td>
		<td><?= $item['humidade'] ?></td>
		<td><?= $item['vento'] ?></td>
	</tr>
	<?php endforeach ?>
</table>
	</div>
	<a href="/wheater"><strong> Voltar para Pesquisas </strong>
	<a href="/sair"><strong> deseja Sair ? </strong>
	
</div>
<?= $this->Html->script('datatables.min.js') ?>
<script>
$(document).ready( function () {
$('#historico').DataTable({
	language:{url:'/js/datatablesptbr.json'}
});} );
</script>