<?php 
    
require 'utils/database.php';

$pageData = fetchPageData('/about.php');
$heading = $pageData['heading'];
$content = $pageData['content'];

require 'layouts/main.layout.php';