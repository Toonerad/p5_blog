<?php

use Core\Config;
use \Core\Database\MysqlDatabase;

class App
{
    public $title = "Lukadev | Blog personnel";
    private $db_instance;
    private static $_instance;

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load()
    {
        session_start();
        require 'Autoloader.php';
        App\Autoloader::register();
        require '../core/Autoloader.php';
        Core\Autoloader::register();
    }

    public function isConnected()
    {
        $auth = new \Core\Auth\DBAuth($this->getDb());
        return $auth->isConnected();
    }

    public function isAdmin()
    {
        $auth = new \Core\Auth\DBAuth($this->getDb());
        return $auth->isAdmin();
    }

    public function getUsername()
    {
        $auth = new \Core\Auth\DBAuth($this->getDb());
        return $auth->getUsername();
    }

    public function getTable($name)
    {
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    public function getDb()
    {
        $config = Config::getInstance(ROOT . '/config/config.php');
        if (is_null($this->db_instance)) {
            $this->db_instance =  new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }
}
