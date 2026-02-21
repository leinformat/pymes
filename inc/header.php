
<?php
	require_once './services/session.php';
	header('Content-Type: text/html; charset=UTF-8');
	include './services/siteData.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $data["title"] ?></title>
	<meta name="description" content="<?php echo $data["metadescription"] ?>" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="./images/logo.ico" type="image/x-icon">
	<link href="./fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body id="root--<?php echo $data["root"] ?>">
	<!-- ====================================================
	header section -->
	<div class="pymes-repository">
		<header class="pymes-repository__header-container">
			<div class="pymes-repository__header">
				<a class="pymes-repository__logo-link" href="./index.php">
				<img  class="pymes-repository__logo" src="./images/logo.jpeg" alt="<?php echo $data["title"] ?>">
				</a>
				<div class="pymes-repository__title-container">
					<?php if (!empty($_SESSION["auth"])) : ?>
						<a href="./services/logout.php?logout=1"
						title="Cerrar sesión"
						style="display:inline-flex;align-items:center;background:#e63946;padding:6px;color:#fff;text-decoration:none;font-weight:500;border-radius:4px;">
						<!-- Icono de logout -->
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
							<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
							<polyline points="16 17 21 12 16 7"></polyline>
							<line x1="21" y1="12" x2="9" y2="12"></line>
						</svg>
						</a>
					<?php endif; ?>
					<h1 class="pymes-repository__title"><?php echo $data["title"] ?></h1>
				</div>
			</div>
		</header>
 