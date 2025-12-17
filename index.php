<!DOCTYPE html>
<html>
<head>
    <title>Ma Première App sur Render</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        .container { max-width: 800px; margin: 0 auto; }
        .info { background: #f4f4f4; padding: 20px; border-radius: 10px; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ton application PHP est en ligne !</h1>
        
        <div class="info">
            <h2>Informations du serveur :</h2>
            <p><strong>Adresse IP :</strong> <?php echo $_SERVER['SERVER_ADDR']; ?></p>
            <p><strong>Nom du serveur :</strong> <?php echo $_SERVER['SERVER_NAME']; ?></p>
            <p><strong>PHP Version :</strong> <?php echo phpversion(); ?></p>
            <p><strong>Date/Heure :</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
        </div>
        
        <div class="info">
            <h3>Rendu dynamique :</h3>
            <?php
            $visites = isset($_COOKIE['visites']) ? $_COOKIE['visites'] + 1 : 1;
            setcookie('visites', $visites, time() + 3600*24*30);
            echo "<p>Cette page a été vue <strong>$visites fois</strong></p>";
            
            $couleurs = ['#FF6B6B', '#4ECDC4', '#45B7D1', '#96CEB4', '#FFEAA7'];
            $couleur_aleatoire = $couleurs[array_rand($couleurs)];
            echo "<p style='color: $couleur_aleatoire; font-weight: bold;'>Couleur du jour !</p>";
            ?>
        </div>
        
        <a href="contact.php" style="display: inline-block; background: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-top: 20px;">
            📞 Page Contact
        </a>
    </div>
</body>
</html>