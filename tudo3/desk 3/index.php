<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Jogos e Exercícios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="sidebar">
        <form method="GET" action="router.php">
            <button name="page" value="jogos" class="sidebar-button jogos">
                Jogos <img src="joy.png" alt="Icone Jogos" class="icon"> 
            </button>
            <button name="page" value="exercicios" class="sidebar-button exercicios">
                Exercícios  <img src="exer.png" alt="Icone Exercícios" class="icon"> 
            </button>
            <button name="page" value="pontuacao" class="sidebar-button pontuacao">
                Pontuação <img src="pont.png" alt="Icone Pontuação" class="icon"> 
            </button>
            <div class="sidebar_perfil">
                <button name="page" value="perfil" class="sidebar-button perfil">
                    Perfil<img src="perfil.png" alt="Icone Perfil" class="icon"> 
                </button>
            </div>
        </form>
    </div>
    <div class="options">
        <div class="option portugues">
            português <img src="lapis.png" alt="opt Português" class="opt">
        </div>
        <div class="option matematica">
            matemática <img src="matematica.png" alt="opt Matemática" class="opt">
        </div>
    </div>
    <div class="main-content">
        <div class="planet"></div>
    </div>
</body>
</html>
