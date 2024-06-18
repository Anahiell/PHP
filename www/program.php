<?php 

$uri = $_SERVER['REQUEST_URI'];
//во первых проверяекм что это не запрос на явный файл
//НО для защиты от прямого доступа файлов ми проводим поиск
//только в директории wwwroot
$path ="./wwwroot{$uri}";
if(is_file($path) ){
    $ext = pathinfo($uri,PATHINFO_EXTENSION);
    switch($ext)
    {
        case 'jpg' : $ext = 'jpeg';
        case 'bmp' :
        case'png':
        case'jpeg':
                $content_type = "image/$ext";
                break;
                case 'js' : $ext = 'javascript';
                case 'txt':
                case 'html':
                case 'css':
                 $content_type = "text/$ext";
                 break;
    }
    if(empty($content_type))
    {
        http_response_code(403);
        echo "File forbiden" ;
        exit;
    }
    header("Content-Type:$content_type");
    readfile($path);
    exit;
}
$quest_position = strpos($uri,'?');
if($quest_position!==false)
{
    $uri = substr($uri,0, $quest_position);
}

$parts = explode('/',$uri);


$controller = empty($parts[1])? 'home':$parts[1];
$action = empty($parts[2])?  'index':$parts[2] ;
$id = empty($parts[3])?   false:$parts[3];


$controller_filename = "./controllers/{$controller}_controller.php";
if(is_readable($controller_filename))
{

include_once($controller_filename);

$controller_classname = ucfirst($controller) . "Controller";
if(class_exists($controller_classname))
{
    
    $controller_object = new $controller_classname();
    if(method_exists($controller_object, "serve"))
    {
      $controller_object->serve($action);
    }
    else{
        echo "$controller_classname has no 'serve' method" ;
    }
}
else
{
    echo $controller_classname, " not exists";
}
}
else{
    echo "404 иии";
}
