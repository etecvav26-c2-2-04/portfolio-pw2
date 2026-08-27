<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<body>
     <form class="row g-3 m-5" action="/CRUD/cadastro.php">

        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="MariaAntonieta1792@gmail.com" required>
        </div>

        <div class="col-md-6">
            <label for="inputPassword" class="form-label">Senha</label>
            <input name="senha" type="password" class="form-control" id="inputPassword" required>
        </div>

        <div class="col-md-4">
            <label for="inputName" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id="inputName" required>
        </div>

        <div class="col-md-4">
            <label for="inputCPF" class="form-label">CPF</label>
            <input name="CPF" type="text" class="form-control" id="inputCPF" placeholder="584.404.728-11" required>
        </div>

        <div class="col-md-4">
            <label for="inputCelular" class="form-label">Celular (opcional)</label>
            <input name="Celular" type="tel" class="form-control" id="inputCelular" placeholder="(11) 92876-8977">
        </div>

        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input name="endereco" type="text" class="form-control" id="inputAddress" placeholder="Rua dos bobos Nº0" required>
        </div>

        <div class="col-md-3">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" class="form-select" required>
                <option value="" selected disabled hidden>Escolha...</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select>
        </div>
        
        <div class="col-md-3">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="inputCity" required>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                    Aceito os termos e condições
                </label>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

    </form>
</body>
</html>
