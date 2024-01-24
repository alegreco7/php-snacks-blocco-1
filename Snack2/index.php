<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Accesso</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Verifica se i parametri sono stati inviati
        if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];

            // Verifiche
            if (strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        } else {
            echo "Parametri mancanti";
        }
    }
    ?>

    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Nome:</label>
        <input type="text" name="name" required><br>

        <label for="mail">Email:</label>
        <input type="email" name="mail" required><br>

        <label for="age">Età:</label>
        <input type="text" name="age" required><br>

        <input type="submit" value="Verifica Accesso">
    </form>

</body>

</html>