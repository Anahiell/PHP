<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP: Hypertext PreProcessor</h1>
    <h2>Локальний (виртуальный) хостинг</h2>
    <p>Поздволяет работать с несколькими сайтами с одного веб-сервера,
        разделяя их за доменными именами (адресами)
    </p>
    <h3>Конфигурация сервера:</h3>
    <p>
    Файл: xampp\apache\conf\extra\httpd-vhost.conf</br/>
    Додаємо:<br/>
    <pre>
    ################# SPU-221.LOC ########################
&lt;VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot "C:/Projects/Step/PHP/SPU221/www"
    ServerName spu-221.loc
    ServerAlias www.spu-221.loc
    ErrorLog "C:/Projects/Step/PHP/SPU221/log/error.log"
    CustomLog "C:/Projects/Step/PHP/SPU221/log/access.log" common
	&lt;Directory "C:/Projects/Step/PHP/SPU221/www">
		AllowOverride All
		Require all granted
        &lt;/Directory>
&lt;/VirtualHost>
    </pre>

    <h3>local dns</h3>
    <p>
    <p>
        Локальна служба доменних імен - співставлення IP адрес та імен 
        (адрес) сайтів<br/>
        Файл: C:\Windows\System32\drivers\etc\hosts</br/>
    Додаємо:<br/>
    <pre>
127.0.0.1       spu-221.loc
::1             spu-221.loc
127.0.0.1       www.spu-221.loc
::1             www.spu-221.loc
    </pre>
    </p>
</body>
</html>