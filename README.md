# Catch Challenge Test

Using Laravel 5.4 Framework, build with PHP 7.2.5.

# LIVE URL

http://saptawarna.com/catch/

# Feature

  - Sychronizing data from input file (https://s3-ap-southeast-2.amazonaws.com/catch-code-challenge/challenge-1-in.jsonl) every time access the landing page, to convert as json data using PHP Natively
  - Showing Order and enable to export to CSV with apropriate Format
  - Relation data with display menu for each data refference such a Customer, Shipping Address, Product, Product Brand 
  - Enabe to return as Json Format (REST)
  - Enable to return as JSONL file
  - Show data in the map for shipping address (please check Data Master > Shipping Address), using registerd Postal Code as Geolocation
  

URL JSON (REST) :
  - Customer Data : [site_url]/api/customer
  - Shipping Address Data : [site_url]/api/shipping_address
  - Product Data : [site_url]/api/product
  - Product Brand Data : [site_url]/api/brand

URL TO DOWNLOAD JSONL FILES :
  - Customer Data : [site_url]/api/customer/jsonln
  - Shipping Address Data : [site_url]/api/shipping_address/jsonln
  - Product Data : [site_url]/api/product/jsonln
  - Product Brand Data : [site_url]/api/brand/jsonln
