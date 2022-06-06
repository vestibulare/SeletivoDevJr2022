<?php
    function  conect_server(){
        $hostname = "localhost";
        $bancodedados = "bd_question";
        $usuario = "root";
        $senha = "";

        $mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);

        if(mysqli_connect_errno()){
            echo "<h3>Problemas para conectar no banco. Verifique os dados! \n</h3>";
        }else{
            // echo "Conexão realizada com sucesso. \n";
        }

        return $mysqli;
    }

    function create_tables($con){

        $query_1 = "DROP TABLE telefones;";
        $query_2 = "DROP TABLE usuarios;";
        $con->query($query_1);
        $con->query($query_2);
        
        $query_1 = "
        CREATE OR REPLACE TABLE usuarios (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(255) NOT NULL
        );
        ";
        $query_2 = "
        CREATE OR REPLACE TABLE telefones (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            id_usuario INT NOT NULL,	
            numero VARCHAR(16) NOT NULL,
            FOREIGN KEY (id_usuario) REFERENCES usuarios(id) ON DELETE CASCADE,
            CONSTRAINT unicidade_do_telefone UNIQUE (numero)
        );
        ";

        try {
            $con->query($query_1);
        } catch (\Throwable $th) {
            echo "<h3>Deu erro na query 1: </h3>" . $th;
        }

        try {
            $con->query($query_2);
        } catch (\Throwable $th) {
            echo "<h3>Deu erro na query 2: </h3>" . $th;
        }
        
    }

    function load_data($con){

        if (file_exists("dados/nomes.txt")) {
            $lista = file_get_contents("dados/nomes.txt");
            $lista_array = explode("\n", $lista);
            foreach($lista_array as $lista_item) {
                $query = "INSERT INTO usuarios(nome) VALUES ('$lista_item');";
                $con->query($query);
            }
        } else {
            echo '<h3>Arquivo de nomes não existe!!</h3>';
            $lista = null;
        }

        if (file_exists("dados/telefones.txt")) {
            $lista = file_get_contents("dados/telefones.txt");
            $lista_array = explode("\n", $lista);
            foreach($lista_array as $lista_item) {
                $id_name = explode(",", $lista_item);
                $query = "INSERT INTO telefones(id_usuario,numero) VALUES ('$id_name[0]','$id_name[1]');";
                $con->query($query);
            }
        } else {
            echo '<h3>Arquivo de telefones não existe!!</h3>';
            $lista = null;
        }
        
    }

    function load_phones($con){
        $query = "SELECT usuarios.nome as Nome, COUNT(telefones.numero) as Quantidade FROM usuarios INNER JOIN telefones ON usuarios.id=telefones.id_usuario GROUP BY usuarios.nome;";
        $result = $con -> query($query);

        $text_result = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo nl2br("<h3> Nome: " . substr($row['Nome'],0,-1) . " - Quantidade: " . $row['Quantidade'] . "\n");
            }
          } else {
            echo "<h3>Sem resultados!!!</h3>";
          }
        return $text_result;
    }
?>
