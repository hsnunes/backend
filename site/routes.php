<?php

if (resolve('/')) {
    echo "Página inicial!";
} elseif (resolve('/contato')) {
    echo "Página de Contato!";
} else {
    echo "Page not Found!";
}