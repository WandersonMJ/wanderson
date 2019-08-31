	<div name="total">
		<div id="corpo-form">
		<h1>ENTRAR</h1>
			<form class='styled-form' method="POST" action="/users/login">
				<input type="text" name="email" placeholder="e-mail">
				<input type="password" name="password" placeholder="Senha">
				<input name="_csrfToken" type="hidden" value="<?= $this->request->param('_csrfToken') ?>" autocomplete="off">
				<input type="submit" value="ACESSAR">	
				<a href="/cadastrar">Ainda não é inscrito ?<strong><?= $mensagem ?></strong></a>
			</form>
		</div>
	</div>
		
		