<?php 
// Creo la variabile title per dare il nome alla pagina
$title = 'Password Generator';

// Richiamo il file delle funzioni
include_once __DIR__ . '/includes/utils/functions.php';

// Recupero i dati inviati dal form
$password_length = $_GET['password_length'] ?? '';

// Creo un if per controllare se la variabile è vuota
if ($password_length) {

    // Starto la sessione
    session_start();
    
    $_SESSION['password'] = password_generator($password_length);

    var_dump($_SESSION['password']);

    header('Location: password.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Document'?></title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <h1 class="text-center my-4 text-uppercase fw-bold">Password Generator</h1>
        </div>
    </header>

    <!-- Main -->
    <main>

        <!-- Section Form -->
        <section id="section-form">
            <div class="container">
                <form action="" method="get" class="form">
                    <div class="mb-3 d-flex gap-4 align-items-center">
                        <label for="input-number" class="form-label">Lunghezza Password:</label>
                        <input type="number" class="form-control" id="input-number" min="1" name="password_length" value="<?= $password_length ?>">
                    </div>
                    <button class="btn btn-primary">Invia</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>