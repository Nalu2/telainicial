<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assents/css/style_padrao.css">
    <title>Cadastro Pessoal</title>
    
    <!-- Barra de Navegação -->
    <?php
        include "../includes_padroes/navbar_cad.php";
        ?>
    <!-- Área do Formulário -->
    <div class="container">
        <div class="login">
            <!-- Título -->
            <div class="cadastro">
                <div id="cadastro">Cadastro Pessoal</div></div>
            <!-- Formulário -->
            <div class="form">
              <!-- LINHA 1 DO FORMULÁRIO -->
              <form action="../dependencies/userpessoal_cadastro.php" method="post">
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Nome completo:</label>
                    <input type="text" class="form-control" id="nome" name="nome" />
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">E-mail (institucional):</label>
                    <input type="email" class="form-control" id="e-mail" name="e-mail" />
                  </div>
                </div>

                <!-- LINHA 2 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Instituição da titulação:</label>
                    <div class="form-group">
                      <select id="seletores" class="form-select form-select-sm"  >
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Ano de conclusão:</label>
                    <input type="text" class="form-control" id="ano_conclusao" name="ano_conclusao" />
                  </div>
                </div>

                <!-- LINHA 3 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm-3">
                    <label for="">Estado:</label>
                    <select id="seletores" class="form-select form-select-sm" >
                      <option selected></option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <!-- 1ª Coluna -->
                  <div class="col-sm-3">
                    <label for="">Cidade:</label>
                    <select id="seletores" class="form-select form-select-sm" >
                      <option selected></option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <!-- 2ª Coluna  -->
                  <div class="col-sm">
                    <label for="">Instituição atual:</label>
                    <select id="seletores" class="form-select form-select-sm" >
                      <option selected></option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <!-- LINHA 4 DO FORMULÁRIO-->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Nível de escolaridade:</label>
                    <select id="seletores" class="form-select form-select-sm" >
                      <option selected></option>
                      <option value="1">Graduação</option>
                      <option value="2">Mestrado</option>
                      <option value="3">Doutorado</option>
                    </select>
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Função/cargo:</label>
                    <select id="seletores" class="form-select form-select-sm" >
                      <option selected></option>
                      <option value="1">Aluno</option>
                      <option value="2">Professor</option>
                      <option value="3">Direto</option>
                    </select>
                  </div>
                </div>

                <!-- LINHA 5 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                      <label for="">Senha:</label>
                      <input type="text" class="form-control" id="senha" name="senha" />
                    </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm" id="recaptcha">
                    <div class="recaptcha"></div>
                  </div>
                </div>
                
                <!-- LINHA 6 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Confirmar senha:</label>
                    <input type="text" class="form-control" id="confirmar_senha" name="confirmar_senha" />
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm" id="recaptcha">
                    <button type="button" class="btn btn-warning" id="voltar">Voltar</button>
                    <button type="submit" class="btn btn-info" id="registrar" name="submit">Registrar-se</button>
                  </div>
                </div>
              </form>
          </div>
      </div>
      <!-- Rodapé -->
    
    </div>
    <?php include "../includes_padroes/footer.php"?>
    
    
        
    

</body>
</html>