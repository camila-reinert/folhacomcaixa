<?php

    // Vamos pegar os checkboxes que o usúario clicou:

    if ( isset($_POST["op1"]))
    {
        $op1 = "Selecionado";
    }
    else // Se não
    {
        $op1 = "Não Selecionado";
    }

    if ( isset($_POST["op2"]))
    {
        $op2 = "Selecionado";
    }
    else // Se não
    {
        $op2 = "Não Selecionado";
    }

    if ( isset($_POST["op3"]))
    {
        $op3 = "Selecionado";
    }
    else // Se não
    {
        $op3 = "Não Selecionado";
    }

    //Vamos mostrar na tela o que essas variáveis pegaram
    echo("$op1 <br>");
    echo("$op2 <br>");
    echo("$op3 <br>");

