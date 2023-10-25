<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/estilo-t-cadastro.css" />
    <title>myProjectManager</title>
  </head>
  <body>
    <main>
      <div class="form-cadastro">
        <div class="logo">
          <p>myProjectManager &copy;</p>
        </div>
        <h2>Realize seu cadastro...</h2>
        <form action="" method="post">
          <div class="text-field">
            <input
              class="input"
              type="text"
              id="nome"
              name="nome"
              placeholder="Nome..."
            />
            <img
              src="https://icon-library.com/images/name-icon-png/name-icon-png-3.jpg"
              alt="Ícone de pessoa"
              class="icone-text-field"
            />
          </div>

          <div class="text-field">
            <input
              class="input"
              type="email"
              id="email"
              name="e-mail"
              placeholder="E-mail..."
            />
            <img
              src="https://cdn-icons-png.flaticon.com/512/542/542689.png"
              alt="Ícone de e-mail"
              class="icone-text-field"
            />
          </div>

          <div class="text-field">
            <input
              class="input"
              type="password"
              id="senha"
              name="senha"
              placeholder="Senha..."
            />
            <img
              src="https://cdn1.iconfinder.com/data/icons/ios-11-glyphs/30/password-512.png"
              alt="Ícone de senha"
              class="icone-text-field"
            />
          </div>

          <div class="text-field">
            <input
              class="input"
              type="password"
              id="confirmaSenha"
              name="confirma-senha"
              placeholder="Confirmar senha..."
            />
            <img
              src="https://cdn1.iconfinder.com/data/icons/ios-11-glyphs/30/password-512.png"
              alt="Ícone de senha"
              class="icone-text-field"
            />
          </div>

          <button type="submit">Cadastrar</button>
        </form>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
