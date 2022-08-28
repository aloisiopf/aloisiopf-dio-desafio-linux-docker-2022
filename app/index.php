<!DOCTYPE html>
<html>
	<head>
		<title>Trabalhando com Containers - Docker</title>
		<meta name="viewport"content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css.css" media="screen" />
</head>
	<body>
		<?php
			ini_set("display_errors", 1);
			header('Content-Type: text/html; charset=iso-8859-1');

			$servername = "172.31.0.25";
			$username = "root";
			$password = "MyPassword123";
			$database = "toshiro";

			$link = new mysqli($servername, $username, $password, $database);

			if (mysqli_connect_errno()) {
			    printf("Connect failed: %s\n", mysqli_connect_error());
			    exit();
			}

			$descricao = strtoupper(substr(bin2hex(random_bytes(4)), 1));
			$preco = rand(1, 999);			
			$host_name = gethostname();

			$query = "INSERT INTO produtos (descricao, preco, host) VALUES ('$descricao' , '$preco', '$host_name')";

			if ($link->query($query) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $link->error;
			}
		?>
		<script>
		</script>
	</body>
</html>
