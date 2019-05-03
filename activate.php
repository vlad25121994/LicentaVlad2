<?php include 'includes/session.php'; ?>
<?php
	$output = '';
	if(!isset($_GET['code']) OR !isset($_GET['user'])){
		$output .= '
			<div class="alert alert-danger">
                <h4><i class="icon fa fa-warning"></i> Eroare!</h4>
                Codul de activare nu a fost gasit.
            </div>
            <h4><a href="signup.php">Inscrie-te</a> sau intoarce-te <a href="index.php">Acasa</a>.</h4>
		'; 
	}
	else{
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE activate_code=:code AND id=:id");
		$stmt->execute(['code'=>$_GET['code'], 'id'=>$_GET['user']]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			if($row['status']){
				$output .= '
					<div class="alert alert-danger">
		                <h4><i class="icon fa fa-warning"></i> Eroare!</h4>
		                Contul ar putea fi deja activat.
		            </div>
		            <h4><a href="login.php">Conecteaza-te</a> sau intoarce-te <a href="index.php">Acasa</a>.</h4>
				';
			}
			else{
				try{
					$stmt = $conn->prepare("UPDATE users SET status=:status WHERE id=:id");
					$stmt->execute(['status'=>1, 'id'=>$row['id']]);
					$output .= '
						<div class="alert alert-success">
			                <h4><i class="icon fa fa-check"></i> Succes!</h4>
			                Contul tau este activat - E-mail: <b>'.$row['email'].'</b>.
			            </div>
			            <h4><a href="login.php">Conecteaza-te</a> sau intoarce-te <a href="index.php">Acasa</a>.</h4>
					';
				}
				catch(PDOException $e){
					$output .= '
						<div class="alert alert-danger">
			                <h4><i class="icon fa fa-warning"></i> Eroare!</h4>
			                '.$e->getMessage().'
			            </div>
			            <h4><a href="signup.php">Inscrie-te</a> sau intoarce-te <a href="index.php">Acasa</a>.</h4>
					';
				}

			}
			
		}
		else{
			$output .= '
				<div class="alert alert-danger">
	                <h4><i class="icon fa fa-warning"></i> Eroare!</h4>
	                Nu se poate activa contul. Cod gresit.
	            </div>
	            <h4><a href="signup.php">Inscrie-te</a> sau intoarce-te <a href="index.php">Acasa</a>.</h4>
			';
		}

		$pdo->close();
	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php echo $output; ?>
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>