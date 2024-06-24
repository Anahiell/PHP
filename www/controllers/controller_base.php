<?php


class BaseController{
    private $db ;
    private $view_path;
    public function __construct(){
        $this->db = null; 
    }


    public Function serve( $action )
    {
        $this->action = $action;
        $this->view_data = [
            'title'=>'PHP-221',
        ];
        $method = 'do_' . strtolower( $_SERVER['REQUEST_METHOD']);
        if(method_exists($this,$method)){
            $this->$method();
        }
        else{
            $this->send_error('method not implemented',405);
        }
    }

    public function send_error($message = 'Bad request', $code = 400){
            echo json_encode([
                'status'=>'error',
                'code'=>$code,
                'message'=>$message
            ]);
            exit;
    }
    public function goto_view() {
       
            $class_name = get_class($this);
            $controller_name = strtolower(
                substr($class_name, 0, strpos($class_name, 'Controller'))
            );
            if ($controller_name === 'api') {
                global $action;
                switch ($action) {
                    case 'shop':
                        $action = 'shop';
                        break;
                    case 'user':
                        $controller_name = 'user';
                        break;
                    default:
                        echo "No view result!!! 'Unknown action for api: $action'";
                        return;
                         
                }
                $view_path = "./views/{$controller_name}/{$this->action}/index.php";
            }
            else{
            $view_path = "./views/{$controller_name}/{$this->action}.php";}
        if (is_readable($view_path)) {
            include "./views/_shared/_layout.php";
        } else {
            echo "No view result!!! '$view_path'";
        }
    }
    public function get_db()
    {
        if($this->db===null)
        {
            @include 'db_config.php'; //@-тихий режим без ошибок
            if(!isset($db_config))
            {
             $this->log_error('Configuration is not connect');
             return null;
            }
            try{
                $this->db = new PDO(
                    "{$db_config['dbms']}:host={$db_config['host']};dbname={$db_config['name']}",
                 $db_config['user'],
                  $db_config['pass'],
                  [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                  ]
                
                );
            }
            catch(PDOException $ex){
                $this->log_error( "Error of connection:" . $ex->getMessage());
            }
        }
        return $this->db;
    }
    public function get_db_or_exit()
    {
        $db = $this->get_db();
        if($db===null){
            $this->send_json(null,503,'internal error.See server logs');
        }
        return $db;
    }
    public function log_error($message){
        file_put_contents(
            '../log/php.log', 
            date('Y-m-d h:i:s') ." | ". $message . "\r\n", 
            FILE_APPEND | LOCK_EX
        );
    }
    public function send_json($data,$status=200,$message="OK"){
        http_response_code($status);
        header('Content-Type: application/json');
        $arr =[
         'status' =>$status,
         'message'=>$message,
         'data'=>$data,
        ];
        echo json_encode($arr);
        exit;
    }
    
}