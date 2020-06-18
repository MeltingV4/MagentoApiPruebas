<?php

$result = '{
  "id": 2079,
  "sku": "MS-Champ-S",
  "name": "Champ Tee Small",
  "attribute_set_id": 9,
  "price": 25,
  "status": 1,
  "visibility": 1,
  "type_id": "simple",
  "created_at": "2017-11-29 20:40:07",
  "updated_at": "2017-11-29 20:40:07",
  "weight": 0.5,
  "extension_attributes": {
      "website_ids": [
          1
      ],
      "category_links": [
          {
              "position": 0,
              "category_id": "11"
          },
          {
              "position": 1,
              "category_id": "12"
          },
          {
              "position": 2,
              "category_id": "16"
          }
      ],
      "stock_item": {
          "item_id": 2079,
          "product_id": 2079,
          "stock_id": 1,
          "qty": 10,
          "is_in_stock": true,
          "is_qty_decimal": false,
          "show_default_notification_message": false,
          "use_config_min_qty": true,
          "min_qty": 0,
          "use_config_min_sale_qty": 1,
          "min_sale_qty": 1,
          "use_config_max_sale_qty": true,
          "max_sale_qty": 10000,
          "use_config_backorders": true,
          "backorders": 0,
          "use_config_notify_stock_qty": true,
          "notify_stock_qty": 1,
          "use_config_qty_increments": true,
          "qty_increments": 0,
          "use_config_enable_qty_inc": true,
          "enable_qty_increments": false,
          "use_config_manage_stock": true,
          "manage_stock": true,
          "low_stock_date": null,
          "is_decimal_divided": false,
          "stock_status_changed_auto": 0
      }
  },
  "product_links": [],
  "options": [],
  "media_gallery_entries": [],
  "tier_prices": [],
  "custom_attributes": [
      {
          "attribute_code": "description",
          "value": "The Champ Tee keeps you cool and dry while you do your thing. Let everyone know who you are by adding your name on the back for only $10."
      },
      {
          "attribute_code": "color",
          "value": "52"
      },
      {
          "attribute_code": "category_ids",
          "value": [
              "11",
              "12",
              "16"
          ]
      },
      {
          "attribute_code": "options_container",
          "value": "container2"
      },
      {
          "attribute_code": "required_options",
          "value": "0"
      },
      {
          "attribute_code": "has_options",
          "value": "0"
      },
      {
          "attribute_code": "url_key",
          "value": "champ-tee-small"
      },
      {
          "attribute_code": "tax_class_id",
          "value": "2"
      },
      {
          "attribute_code": "material",
          "value": "148"
      },
      {
          "attribute_code": "size",
          "value": "168"
      },
      {
          "attribute_code": "pattern",
          "value": "196"
      }
  ]
}';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Content-Type: application/json; charset=utf8');
$response = ["status" => true, "message" => "", "log" => json_encode($result)];
echo json_encode($response, JSON_PRETTY_PRINT);
exit;


