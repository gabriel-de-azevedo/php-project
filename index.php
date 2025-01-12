<?php 

require 'controllers/database.php';

$pageData = fetchPageData('/');
$heading = $pageData['heading'];
$content = $pageData['content'];

require 'layouts/main.layout.php';