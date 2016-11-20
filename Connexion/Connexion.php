<?php

include_once("Session.php");
include_once("context.php");

class Connexion extends context
    {
        private $token;
        public  $context;

        public function __construct()
        {
            $this->context = (new context())->try_connect();
            $this->token = $this->get_token();
        }

        private function get_token()
        {
            if (!isset($_POST["token"]) || empty($_POST["token"]))
                $this->display_error();

            return htmlspecialchars($_POST["token"]);
        }

        private function display_error()
        {
            header("Location: ../#/error");
        }

        public function connect_user()
        {
            //$req = $this->context->prepare("SELECT * FROM users WHERE token = :token", [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
            //$req->execute([":token" => $this->token]);
            //$token = $req->fetchAll();
            $token = "123";
            if ($token != $this->token)
                $this->display_error();
            else
                $this->validate_conn();
        }

        private function validate_conn()
        {
            $data = Session::getInstance();
            $data->token = $this->token;
        }
    }

?>
