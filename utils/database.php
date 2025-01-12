<?php

function fetchPageData($pagePath) {
    $pdo = new PDO('sqlite:sqlite.db');

    $selectQuery = "SELECT heading, content FROM pages WHERE \"path\" = '$pagePath'";

    $homePageData = $pdo->query($selectQuery)->fetch(PDO::FETCH_ASSOC);

    $pdo = null;

    return $homePageData;
}