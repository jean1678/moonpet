<?php
/** */
    session_start();
    $serve_file = $_SERVER['DOCUMENT_ROOT']."/moonpetback/";
    session_save_path($serve_file.'cache/temp');
    
    include_once('conexao.php');

    $n = $_POST['usuario'];
    $s = $_POST['senha'];

    /**mysqli_query = executa um comando dentro de um banco de dados
     * você deverá informar dois parâmetros, conexão com banco e comando sql
     */
    $query = "SELECT * from cadastro where email = '$n' and senha = '$s'"; // Ajuste para o nome correto da tabela "Cidade"
    $result = $pdo->query($query);

    /** se row >0 significa que um resultado foi encontrado */
    if($row > 0){
        /**mysqli_fetch_assoc = cria um array(vetor) associativo com os nomes das colunas
         * do banco de dados e traz apenas um resultado por vez
         */
        while($row2 = mysqli_fetch_assoc($result)){
            $nome = $row2['nome'];
            $id = $row2['idCadastro'];
            $email = $row2['email'];


            echo $nome;
           
           
        }
    header('Location: ../adocao.php');
   }
   else{
    echo "<script>alert('Você não tem acesso!');window.location.href='http://localhost/moonpetback/login.php';</script>";
}
    
