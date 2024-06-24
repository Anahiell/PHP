<?php

include_once "controller_base.php";

class ApiController extends BaseController {

    public function do_get() {
        global $action, $id;
        switch ($action) {
            case 'shop':
                switch ($id) {
                    case 'install':
                        $view_path = "./views/shop/index.php";
                        return $this->shop_install();
                }
                break;
            case 'user':
                switch ($id) {
                    case 'registration':
                        return $this->user_registration();
                }
                break;
            default:
                $this->send_json(null, 404, 'path not released');
        }
    }

    private function shop_install() {
        $db = $this->get_db();
        if ($db === null) {
            $this->send_json(null, 503, 'Internal error. See server logs');
        }
        $query = "CREATE TABLE IF NOT EXISTS `shop_products` (
            `id` CHAR(36) PRIMARY KEY DEFAULT(UUID()),
            `name` TEXT NOT NULL,
            `description` TEXT NOT NULL,
            `price` DECIMAL(10,2) NOT NULL,
            `img_url` TEXT
        ) ENGINE = InnoDB, DEFAULT CHARSET = utf8mb4";
        try {
            $db->query($query);
        } catch (PDOException $ex) {
            $this->log_error(__CLASS__ . '  ' . __LINE__ . '  ' . $ex->getMessage() . '\r\n' . $query);
            $this->send_json(null, 503, 'Internal error. See server logs');
        }
        $this->view_data['title'] = 'Shop Installation';
        $this->goto_view();
        $this->send_json('Table `shop_products` installed');
    }

    private function user_registration() {
        $db = $this->get_db();
        if ($db === null) {
            $this->send_json(null, 503, 'Internal error. See server logs');
        }
        $this->send_json('user_registration()');
    }
}
