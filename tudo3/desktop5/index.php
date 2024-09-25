<?php
// Array com os dados dos cartões
$cards = [
    ["text" => "Partes De Mim", "color" => "verde", "icon" => "icone-game.png"],
    ["text" => "Colorindo Animais", "color" => "amarelo", "icon" => "icone-game.png"],
    ["text" => "Brincando Com Os Números", "color" => "azul-escuro", "icon" => "icone-game.png"],
    ["text" => "Qual É A Letra?", "color" => "vermelho", "icon" => "icone-game.png"],
    ["text" => "Brincando Com Anne", "color" => "azul", "icon" => "icone-game.png"]
];

// Array com os dados dos botões da barra lateral
$sidebar_buttons = [
    ["label" => "Jogos", "class" => "jogos", "icon" => "icone-jogos.png"],
    ["label" => "Exercícios", "class" => "exercicios", "icon" => "icone-exercicios.png"],
    ["label" => "Pontuação", "class" => "pontuacao", "icon" => "icone-pontuacao.png"],
    ["label" => "Perfil", "class" => "perfil", "icon" => "icone-perfil.png"]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface de Jogos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <?php foreach ($sidebar_buttons as $button): ?>
                <button class="sidebar-button <?php echo $button['class']; ?>" style="background-image: url('<?php echo $button['icon']; ?>');">
                    <?php echo $button['label']; ?>
                </button>
            <?php endforeach; ?>
        </div>
        <div class="content">
            <div class="cards-container">
                <?php foreach ($cards as $card): ?>
                    <div class="card">
                        <span class="card-text <?php echo $card['color']; ?>"><?php echo $card['text']; ?></span>
                        <span class="game-icon" style="background-image: url('<?php echo $card['icon']; ?>');"></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>
