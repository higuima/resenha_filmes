<?php
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];
        $comentario=$_POST["comentario"];

        require("phpmailer/src/PHPMailer.php");
        require("phpmailer/src/SMTP.php");
        require ("phpmailer/src/Exception.php");

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP(); // Não modifique
        $mail->Host       = '...';  // SEU HOST (HOSPEDAGEM)
        $mail->SMTPAuth   = true;                        // Manter em true
        $mail->Username   = '...';   //SEU USUÁRIO DE EMAIL
        $mail->Password   = '...';                   //SUA SENHA DO EMAIL SMTP password
        $mail->SMTPSecure = 'ssl';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
        $mail->Port       = 465;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
        $mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO

        $mail->setFrom('email@seudominio.com.br', 'Site');  //DEVE SER O MESMO EMAIL DO USERNAME
        $mail->addAddress('receptor@seudominio.com.br');     // QUAL EMAIL RECEBERÁ A MENSAGEM!

        if(!$mail->Send()) {
            echo "<script>alert('Erro ao enviar o E-Mail');window.location.assign('index.php');</script>";
         }else{
            echo "<script>alert('E-Mail enviado com sucesso!');window.location.assign('index.php');</script>";
         }
         die
?>