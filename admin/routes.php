<?php

if (resolve('/admin')){
    //echo "Administração Dashboard";
    render('home', 'admin');
}elseif (resolve('/admin/pages')) {
    //echo "Administração de Páginas";
    render('pages', 'admin');
}else{
    echo "Page Not Found!";
}