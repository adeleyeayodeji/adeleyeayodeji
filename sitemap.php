<?php
header("Content-Type: application/xml; charset=utf-8");
$base_url = "https://adeleyeayodeji.com/";

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

$allsub = array(
    "ajaxgallery",
    "ecommerce",
    "email_token",
    "instagram",
    "notification",
    "result",
    "script",
    "selftest",
    "simpleapi"
);

for ($i = 0; $i < count($allsub); $i++) {
    echo '<url>' . PHP_EOL;
    echo '<loc>' . $base_url . $allsub[$i] . '</loc>' . PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;
    echo '</url>' . PHP_EOL;
}

echo '</urlset>' . PHP_EOL;
