<?php

require 'vendor/autoload.php';

$client = new Nebula\GraphClient("10.100.50.91", 9669);

$client->authenticate("root", "123456");

$create = "CREATE SPACE IF NOT EXISTS dianzichaoshinebula(vid_type=FIXED_STRING(100));";
$create .= "USE dianzichaoshinebula;";
$create .= "CREATE TAG IF NOT EXISTS one_catalog_name (name string);";
$create .= "CREATE TAG IF NOT EXISTS two_catalog_name (name string);";
$create .= "CREATE TAG IF NOT EXISTS three_catalog_name (name string);";
$create .= "CREATE TAG IF NOT EXISTS keywords (name string);";
$create .= "CREATE TAG IF NOT EXISTS brand_name (name string);";
$create .= "CREATE EDGE IF NOT EXISTS one_two_cate(onetwolink int);";
$create .= "CREATE EDGE IF NOT EXISTS two_three_cate(twothreelink int);";
$create .= "CREATE EDGE IF NOT EXISTS three_keywords(threekeywordslink int);";
$create .= "CREATE EDGE IF NOT EXISTS brand_keywords(brandkeywordslink int);";
$client->execute($create);

sleep(1);