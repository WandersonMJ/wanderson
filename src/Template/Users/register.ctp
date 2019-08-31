<body>
<div name="total">
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">     
      <div id="cadastro">
        <form class="styled-form" method="post" action="/users/register"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label class="input-label"  for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="name" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label class="input-label" for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email" required="required" type="email" placeholder="contato@provedor.com"/> 
          </p>
           
          <p> 
            <label class="input-label" for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="password" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="/"> Ir para Login </a>
            <input name="_csrfToken" type="hidden" value="<?= $this->request->param('_csrfToken') ?>" autocomplete="off">
          </p>
        </form>
      </div>
    </div>
  </div>
</div>  
</body>