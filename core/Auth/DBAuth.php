<?php

namespace Core\Auth;

use Core\Database\Database;

class DBAuth
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getUserId()
    {
        if ($this->logged()) {
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($username, $password)
    {
        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$username], null, true);
        if ($user) {
            if (password_verify($password, $user->password)) {
                $_SESSION['auth'] = $user->id;
                return true;
            }
        }
        return false;
    }

    public function userExist($username)
    {
        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$username], null, true);
        if ($user) {
            if ($user->username === $username) {
                return true;
            }
        }
        return false;
    }

    public function isAdmin()
    {
        $userId = $this->getUserId();
        $user = $this->db->prepare('SELECT * FROM users WHERE id = ?', [$userId], null, true);
        if ($user) {
            if ($user->permission === '0') {
                return false;
            } elseif ($user->permission === '1') {
                return true;
            }
        }
        return false;
    }

    public function isConnected()
    {
        if ($this->logged()) {
            return true;
        } else {
            return false;
        }
    }

    public function getUsername()
    {
        $userId = $this->getUserId();
        $user = $this->db->prepare('SELECT * FROM users WHERE id = ?', [$userId], null, true);
        if ($user) {
            if ($this->logged()) {
                return $user->username;
            }
        }
    }

    public function logged()
    {
        return isset($_SESSION['auth']);
    }
}
