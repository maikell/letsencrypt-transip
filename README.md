### Read installation instructions 
https://github.com/roy-bongers/certbot-transip-dns-01-validator/blob/master/README.md  

### Initialization
* Step 1 create an API Token at Transip  
* Step 2 create a config.php. See example at Roy bongers  
* Step 3. create .env with DOMAIN= var  
* docker-compose up certbot-transip to request for the first time.  

### Renewal
* docker-compose up certbot-transip-renew for renewal.

