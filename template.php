<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>FairCount</title>
    <style>
        /* Reset simple */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 15px 20px;
        }

        header h1 {
            font-size: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #3498db;
            color: white;
        }

        button, input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover, input[type="submit"]:hover {
            background-color: #2980b9;
        }

        form input, form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

<header>
    <h1>FairCount</h1>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="index.php?controller=depense&action=index">Dépenses</a>
        <a href="index.php?controller=category&action=index">Catégories</a>
        <a href="index.php?controller=remboursement&action=index">Remboursements</a>
        <a href="index.php?controller=user&action=logout">Déconnexion</a>
    </nav>
</header>

<main>
    <!-- Ici tu inclus le contenu spécifique de chaque vue -->
    <?php if (isset($content)) echo $content; ?>
</main>

<footer>
    &copy; <?= date('Y') ?> FairCount - Tous droits réservés
</footer>

</body>
</html>
