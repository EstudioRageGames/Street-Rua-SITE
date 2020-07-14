			<?php
			require_once('mail/PHPMailer.php');
			require_once('mail/SMTP.php');
			require_once('mail/Exception.php');

			$nome	= $_POST["nome"];
			$sobrenome = $_POST["sobrenome"];
			$email	= $_POST["email"];
			$assunto = 'Seja bem vindo';
			$corpo = 'Olá , <b>'.$nome.' '.$sobrenome.'. </b><br> Obrigado por se cadastrar ao Beta do <b> Street Rua </b>. <br> Seja Bem vindo!<br> lets rock.';
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;
			use PHPMailer\PHPMailer\Exception;
				$mail = new PHPMailer(true);
				

					try {
						$mail->SMTPDebug = SMTP::DEBUG_SERVER;
						$mail->isSMTP();
						$mail->Host = 'smtp.gmail.com';
						$mail->SMTPDebug = 0;	
						$mail->SMTPAuth = true;
						$mail->SMTPSecure = 'ssl';
						$mail->Username = 'fatecragegames@gmail.com';
						$mail->Password = 'jogosfatec';
						$mail->Port = 465;
						$mail->setFrom('fatecragegames@gmail.com');
						$mail->addAddress($email);
						$mail->isHTML(true);
						$mail->Subject = $assunto;
						$mail->Body = $corpo;
						if ($mail->send()) {
						echo "<p>Confirmação de cadastro enviado para o seu E-mail! Obrigado por se cadastrar</p>";
						} else {
						echo "<p>email não enviado</p>";
						}
					} catch (Exception $e) {
					echo "<p>Erro ao enviar mensagem: {$mail->ErrorInfo}</p>";
					
					}
			
			
			?>