<?php
//Authentication rest API magento2.Please change url accordingly your url
$adminUrl='https://ecommerce.sysnasser.net/index.php/rest/V1/integration/admin/token';
$ch = curl_init();
$data = array("username" => "dev1", "password" => "Sys2639");                                                                    
$data_string = json_encode($data);                       
$ch = curl_init($adminUrl); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type=> application/json',                                                                                
    'Content-Length=> ' . strlen($data_string))                                                                       
);       
$token = curl_exec($ch);
$token=  json_decode($token);
var_dump($token);die();
//Use above token into header
$headers = array("Authorization=> Bearer $token"); 

$requestUrl='https://ecommerce.sysnasser.net/index.php/rest/V1/products';
//Please note 24-MB01 is sku

$ch = curl_init();
$ch = curl_init($requestUrl); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
curl_setopt($ch, CURLOPT_POST, true);
$post ='{
  "product": {
    "sku": "MY_SKU",
    "name": "My Product",
    "attributeSetId": "4",
    "price": 20,
    "status": 1,
    "visibility": 4,
    "typeId": "virtual",
    "weight": 0,
    "extensionAttributes": {
      "stockItem": {
        "stockId": 1,
        "qty": 20,
        "isInStock": true,
        "isQtyDecimal": false,
        "useConfigMinQty": true,
        "minQty": 0,
        "useConfigMinSaleQty": 0,
        "minSaleQty": 0,
        "useConfigMaxSaleQty": true,
        "maxSaleQty": 0,
        "useConfigBackorders": false,
        "backorders": 0,
        "useConfigNotifyStockQty": true,
        "notifyStockQty": 20,
        "useConfigQtyIncrements": false,
        "qtyIncrements": 0,
        "useConfigEnableQtyInc": false,
        "enableQtyIncrements": false,
        "useConfigManageStock": true,
        "manageStock": true,
        "lowStockDate": "string",
        "isDecimalDivided": true,
        "stockStatusChangedAuto": 0,
        "extensionAttributes": {}
      }
    },
    "options": [],
    "tierPrices": [],
    "customAttributes": [
    ]
  },
  "saveOptions": true
}';

$options = array(
    CURLOPT_URL=>$toURL,
    CURLOPT_HTTPHEADER=>array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($post)),
    CURLOPT_VERBOSE=>0,
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
    CURLOPT_POST=>true,
    CURLOPT_POSTFIELDS=>$post,

);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
$result=  json_decode($result);
print_r($result);
