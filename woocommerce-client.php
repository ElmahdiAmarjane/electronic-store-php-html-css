<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

function getWoocommerceClient(){
   return $woocommerce = new Client(
        'http://localhost/project',
        'ck_e3c7da9473fae5767db3d9ecd4b683c6ba06b0d5',
        'cs_018071313be0deff349fccd5d6ff2f5b0eedf741',
        [
          'version' => 'wc/v3',
        ]
      );
      
        //print_r($woocommerce->get('products')); 
}

?>