<?php
    require_once('../DataBase/Connection.php'); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 
        $nome = $_POST['nome'];
        $cpf = $_POST['CPF'];
        $celular = $_POST['Celular'] ?? null; // Campo opcional
        $endereco = $_POST['endereco'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
    
        try {

            $sql = "INSERT INTO clientes (email, SenhaHash, nome, cpf, celular, endereco, estado, cidade) 
                    VALUES (:email, :senha, :nome, :cpf, :celular, :endereco, :estado, :cidade)";
    

            $stmt = $pdo->prepare($sql);
    

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':celular', $celular);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':estado', $estado);
            $stmt->bindParam(':cidade', $cidade);
    
            // Executando a query
            $stmt->execute();
    

            echo "Cadastro realizado com sucesso!";
        } catch (PDOException $e) {
            // Tratando erros
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
    } else {
        echo "Método de requisição inválido.";
    }



?>
