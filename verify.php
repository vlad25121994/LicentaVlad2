<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				if($row['status']){
					if(password_verify($password, $row['password'])){
						if($row['type']){
							$_SESSION['admin'] = $row['id'];
						}
						else{
							$_SESSION['user'] = $row['id'];
						}
					}
					else{
						$_SESSION['error'] = 'Parola incorecta.';
					}
				}
				else{
					$_SESSION['error'] = 'Contul nu a fost activat.';
				}
			}
			else{
				$_SESSION['error'] = 'E-mail-ul nu a fost gasit.';
			}
		}
		catch(PDOException $e){
			echo "Sunt probleme in conexiune: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Introduceti mai intai acreditarile de conectare';
	}

	$pdo->close();

	header('location: login.php');

?>