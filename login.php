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

        <form method="POST">
            <div class="input-group">
                <input type="password" name="clave" placeholder="Introduce la clave" required>
            </div>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>

</html>