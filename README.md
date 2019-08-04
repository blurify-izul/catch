# Catch Challenge Test

Using Laravel 5.4 Framework, build with PHP 7.2.5.

# LIVE URL

http://saptawarna.com/catch/

# Feature

  - Synchronizing data from input file (https://s3-ap-southeast-2.amazonaws.com/catch-code-challenge/challenge-1-in.jsonl) every time access the landing page, to convert as json data using PHP Natively
  - Showing Order and enable to export to CSV with apropriate Format
  - Relation data with display menu for each data refference such a Customer, Shipping Address, Product, Product Brand 
  - Enabe to return as Json Format (REST)
  - Enable to return as JSONL file
  - Show data in the map for shipping address (please check Data Master > Shipping Address), using registerd Postal Code as Geolocation
  

URL JSON (REST) :
  - Customer Data : [site_url]/api/customer, e.g: http://saptawarna.com/catch/api/customer
  - Shipping Address Data : [site_url]/api/shipping_address, e.g: http://saptawarna.com/catch/api/shipping_address
  - Product Data : [site_url]/api/product, e.g: http://saptawarna.com/catch/api/product
  - Product Brand Data : [site_url]/api/brand, e.g: http://saptawarna.com/catch/api/brand

URL TO DOWNLOAD JSONL FILES :
  - Customer Data : [site_url]/api/customer/jsonln, e.g: http://saptawarna.com/catch/api/customer/jsonl
  - Shipping Address Data : [site_url]/api/shipping_address/jsonln, e.g: http://saptawarna.com/catch/api/shipping_address/jsonl
  - Product Data : [site_url]/api/product/jsonln, e.g: http://saptawarna.com/catch/api/product/jsonl
  - Product Brand Data : [site_url]/api/brand/jsonln, e.g: http://saptawarna.com/catch/api/brand/jsonl
  
# Data Relation

Please restore the sql dump file (catch.sql) for testing purpose  
  
# Input File Streaming

To synchronize, use Helper/Stream,
```
App\Helpers\Stream
```
it called in the landing page like below 

```
Stream::dataSync("https://s3-ap-southeast-2.amazonaws.com/catch-code-challenge/challenge-1-in.jsonl");
```

this Helper use to saving data from input file and stored into table relations as well. 

