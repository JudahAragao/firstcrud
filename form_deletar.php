<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style_select_delete.css">
    <title>Deletar Cadastro</title>
</head>
<body>
    
    <div class="container">

        <form action="deletar.php" method="POST">
                
            <input type="number" name="id_paciente" placeholder="Id do cadastro: "><br><br>
            <input type="submit" value="Excluir">
            <a href="index.php">Voltar</a>
            
        </form>

    </div>
    
</body>
</html>