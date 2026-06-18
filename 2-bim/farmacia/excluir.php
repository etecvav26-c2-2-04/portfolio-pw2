
<?php
require_once("config/conexao.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

        $sql = "DELETE FROM produtos WHERE id = :id";
            $stmt = $pdo->prepare($sql);
                $stmt->execute([':id' => $id]);
                }

header("Location: index.php");
exit();
?>