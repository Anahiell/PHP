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