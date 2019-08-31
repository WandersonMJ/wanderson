<div id="centro">
      <div id="total">
    	<div id="cep">
		<h1>Digite o Seu Cep: </h1>
		<form class="styled-form" method="POST" action="/wheater">
			<input name="_csrfToken" type="hidden" value="<?= $this->request->param('_csrfToken') ?>" autocomplete="off">
			<input type="text" name="cep" placeholder="--CEP--" value="<?= !empty($cep) ? $cep : '' ?>">
			<p><b> Local: </b><?= !empty($logradouro) ? $logradouro : '' ?></p>
			<p><b> Cidade: </b><?= !empty($localidade) ? $localidade : '' ?></p>
			<p><b> cep: </b><?= !empty($cep) ? $cep : '' ?></p>
			<p><b> temperatura: </b><?= !empty($temperatura) ? $temperatura : '' ?></p>
			<p><b> tempo: </b><?= !empty($tempo) ? $tempo : '' ?></p>
			<p><b> humidade: </b><?= !empty($humidade) ? $humidade : '' ?></p>
			<p><b> vento: </b><?= !empty($vento) ? $vento : '' ?></p>
			<input type="submit" value="Pesquisar" /> 
			<a href="/historico"><strong>histórico</strong></a>
	  </div>
			<a href="/sair"><strong> deseja Sair ? </strong>
			

		</div>

</div>