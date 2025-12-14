<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
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
            background: #3498db;
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
    <h2>Connexion</h2>

    <input type="email" name="email" placeholder="Email" required>

    <input type="password" name="password" placeholder="Mot de passe" required>

    <button type="submit">Se connecter</button>

    <a href="index.php?controller=user&action=register">
        Créer un compte
    </a>
</form>

</body>
</html>
