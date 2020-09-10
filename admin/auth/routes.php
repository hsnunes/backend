<?php

if (resolve('/admin/auth/?')) {
    render('auth/login', 'admin');
}