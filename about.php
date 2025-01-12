<?php 
    
require 'controllers/database.php';

$pageData = fetchPageData('/about.php');
$heading = $pageData['heading'];
$content = $pageData['content'];

require 'layouts/main.layout.php';