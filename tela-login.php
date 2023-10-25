<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="assets/css/estilo-t-login.css"/>
    <title>myProjectManager</title>
  </head>
  <body>
    <main>
      <div class="espaco-imagem">
        <div class="texto-imagem">
          <h1 class="h1-espaco-imagem">Bem-vindo de volta!!!</h1>
          <h2 class="h2-espaco-imagem">myProjectManager</h2>
          <img
            class="imagem-login"
            src="https://uxwing.com/wp-content/themes/uxwing/download/business-professional-services/project-manager-icon.png"
            alt="Ícone de gestor de projetos"
          />
          <p class="p-espaco-imagem">
            O melhor sistema para gerência de projetos!
          </p>
        </div>
      </div>
      <div class="form-login">
        <h2 class="h2-form-login">Entrar...</h2>
        <form method="post" enctype="multipart/form-data">
          <div class="txt-com-icone">
            <input
              class="text-field"
              type="email"
              placeholder="E-mail..."
              name="email"
              id="email"
            />
            <img
              class="icone-txt"
              src="https://cdn-icons-png.flaticon.com/512/542/542689.png"
              alt="Ícone de e-mail"
            />
          </div>
          <div class="txt-com-icone">
            <input
              class="text-field"
              type="password"
              placeholder="Senha..."
              name="senha"
              id="senha"
            />
            <img
              class="icone-txt"
              src="https://cdn1.iconfinder.com/data/icons/ios-11-glyphs/30/password-512.png"
              alt="Ícone de senha"
            />
          </div>
          <div>
            <p>
              Não possui conta? Clique <a href="tela-cadastro.html">aqui</a>...
            </p>
          </div>
          <button class="button" type="submit">Login</button>
        </form>
      </div>
    </main>
    <footer>
      <p>
        Projeto da disciplina de Gestão de Projetos, 04º semestre do ADS, no
        IFSP Capivari
      </p>
      <p>Integrantes: Cleiton Cunha, Meirilis M., João V., João V.</p>
    </footer>
  </body>
</html>
