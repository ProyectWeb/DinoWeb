 <?php
            
            $destinatario=$_POST["email"];
            $asunto=$_POST["asunto"];
            $texto_mail=$_POST["comentarios"];

            mail($destinatario,$asunto,$texto_mail);


            
            echo "Mensaje enviado con éxito";
            echo $destinatario;
?>