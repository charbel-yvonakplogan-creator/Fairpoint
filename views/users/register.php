<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        form {
            background: white;
            width: 300px;
            margin: 80px auto;
            padding: 20px;
            border-radius: 8px;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            background: #2ecc71;
            color: white;
            border: none;
            cursor: pointer;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<form method="POST">
    <h2>Inscription</h2>

    <input type="text" name="name" placeholder="Nom" required>

    <input type="email" name="email" placeholder="Email" required>

    <input type="password" name="password" placeholder="Mot de passe" required>

    <button type="submit">Créer le compte</button>

    <a href="index.php?controller=user&action=login">
        Déjà un compte ? Se connecter
    </a>
</form>

</body>
</html>
