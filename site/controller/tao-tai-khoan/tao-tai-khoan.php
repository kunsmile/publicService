<?php
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require ('system/site.php');
//require SYSPATH.('database.php');
//db_connect();
    
load_header();
load_menubar('index');
load_leftbar('dangnhap');
load_content('tao-tai-khoan');
load_rightbar('blank');
//load_footer();
?>