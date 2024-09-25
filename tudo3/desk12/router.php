<?php
$page = $_GET['page'] ?? 'home'; // Se nenhuma página for passada, vai para 'home'

switch ($page) {
    case 'jogos':
        include('jogos.php');
        break;
    case 'exercicios':
        include('exercicios.php');
        break;
    case 'pontuacao':
        include('pontuacao.php');
        break;
    case 'perfil':
        include('perfil.php');
        break;
    default:
        include('home.php');
        break;
}
?>
