<?php

if (resolve('/admin')){
    echo "Administração Dashboard";
}elseif (resolve('/admin/pages')) {
    echo "Administração de Páginas";
}else{
    echo "Page Not Found!";
}