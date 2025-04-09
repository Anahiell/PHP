config in fail hosts:
 127.0.0.2 hmw-php.loc
 ::1        hmw-php.loc
127.0.0.2 www.hmw-php.loc
::1         www.hmw-php.loc

config in fail httpd-vhosts.conf:
<VirtualHost *:80>
    ServerAdmin webmaster@dummy-host.example.com
    DocumentRoot "C:/web/HMWPHP/www"
    ServerName hmw-php.loc
    ServerAlias www.hmw-php.loc
    ErrorLog "C:/web/HMWPHP/log/error.log"
    CustomLog "C:/web/HMWPHP/log/access.log" common
    <Directory "C:/web/HMWPHP/www">
		AllowOverride All
		Require all granted
     </Directory>
</VirtualHost>



http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=my_project&table=shop_products
# 🛍️ PHP Mini Shop (Apache + MySQL)

This is a simple PHP web project created during web development training.  
It simulates the structure of a small online store using raw PHP, Apache, and MySQL.

## 🛠 Technologies
- PHP
- Apache (localhost virtual host)
- MySQL (phpMyAdmin)
- HTML / CSS

## 🧱 Features
- Manual setup with httpd-vhosts.conf
- Database: `my_project`, table: `shop_products`
- Basic frontend layout
- Educational purpose

## 💡 Local Setup
```ini
127.0.0.2    hmw-php.loc
::1          hmw-php.loc
