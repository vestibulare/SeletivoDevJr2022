<html>
    <head>
        <title>Consultas BD</title>
        <style>
            h1{text-align: center; font-size: 50;}
            h3{text-align: center; font-size: 20;}
            h4{text-align: center; font-size: 12;}
            form{text-align: center;}
            input{width: 200; height: 40; text-align: center; font-size: 20; font-weight: bold;}
        </style>
    </head>
    <body>
        <h1>Consultas em PHP ao banco de dados</h1>
        <form action="index.php" method="post">
            <input type="submit" name="visualizar" value="Mostrar Lista" />
        </form>
        <h4>*Lista de usuários e a quantidade de telefones que cada um possui no banco de dados</h4>
        <?php 
            include "conexao.php";
            $visu = false;
            function visu_phones(){
                $scon = conect_server();

                create_tables($scon);
                load_data($scon);
                load_phones($scon);
            
                $scon->close();        
            }

            if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['visualizar'])){
                visu_phones();
            }

        ?>

    </body>
</html>

