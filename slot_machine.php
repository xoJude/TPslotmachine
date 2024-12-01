<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Machine à Sous</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <?php include ROOT . '/templates/global.php'; ?>


    <main class="main-content">
        <div class="container">
            <h1>Machine à Sous</h1>
            <div class="slot-machine">
    <div class="reel" id="reel1">🍒</div>
    <div class="reel" id="reel2">🍋</div>
    <div class="reel" id="reel3">⭐️</div>

    <button id="spinButton">🎲Spin!</button>
    <p id="result"></p>
        
        </div>
    </main>

    <script src="/sources/js/slotmachine.js"></script>
</body>
</html>

