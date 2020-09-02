<?php

if (resolve('/')) {
    // echo "Página inicial!";
    render('home', 'site');
} elseif (resolve('/contato')) {
    //echo "Página de Contato!";
    render('contato', 'site');
} else {
    echo "Page not Found!";
}