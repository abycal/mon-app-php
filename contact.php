<!DOCTYPE html>
<html>
<head>
    <title>Contact - Mon App Render</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; }
        form { background: #f9f9f9; padding: 20px; border-radius: 10px; }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        button { background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>📞 Page Contact</h1>
    <form method="POST">
        <input type="text" name="nom" placeholder="Votre nom" required>
        <input type="email" name="email" placeholder="Votre email" required>
        <textarea name="message" rows="5" placeholder="Votre message" required></textarea>
        <button type="submit">Envoyer</button>
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<div style='background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-top: 20px;'>";
        echo "<strong>Message envoyé !</strong><br>";
        echo "Nom : " . htmlspecialchars($_POST['nom']) . "<br>";
        echo "Email : " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Message : " . htmlspecialchars($_POST['message']);
        echo "</div>";
    }
    ?>
    
    <p><a href="index.php">← Retour à l'accueil</a></p>
</body>
</html>