<?php
define('admin_site_name','project_one/project_one/public_html/admin');
define('site_name','project_one/project_one/public_html/');
define('admin_site_url', 'http://'.$_SERVER['HTTP_HOST'].admin_site_name);
define('site_url', 'http://'.$_SERVER['HTTP_HOST'].site_name);
define('doc_root',$_SERVER['DOCUMENT_ROOT'].admin_site_name);
define('main_doc_root',$_SERVER['DOCUMENT_ROOT'].site_name);
define('image_path',site_url."img/");
?>
