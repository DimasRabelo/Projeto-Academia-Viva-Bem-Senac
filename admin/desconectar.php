<?php

// Início da Sessão:
session_start();

// Limpar Todas as Sessões Ativas:
session_unset();

// Destruir a Sessão:
session_destroy();

header("location:http://localhost/Projeto-Academia-Viva-Bem-Senac/");

exit;
