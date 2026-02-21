<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>

    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="login-card">
        <h2>Acceso Privado</h2>

        <?php if (!empty($error)) : ?>
        <div class="error">
            <?= htmlspecialchars($error) ?>
        </div>
        <?php endif; ?>

        <a class="logout-icon" href="./services/logout.php?logout=1" title="Cerrar sesión"
            style="display:inline-flex;align-items:center;background:#e63946;padding:6px;color:#fff;text-decoration:none;font-weight:500;border-radius:4px;">
            <!-- Icono de logout -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
            </svg>
        </a>

        <form method="POST">
            <div class="input-group">
                <input type="password" name="clave" placeholder="Introduce la clave" required>
            </div>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>

</html>