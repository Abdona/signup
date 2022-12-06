<?php

namespace App\Form;

use App\Database\Database;
use App\Routing\Routing;

class FormAction
{
    private Database $database;
    private Form $form;
    private Routing $routing;

    public function __construct()
    {
        $this->database = new Database();
        $this->form = new Form();
        $this->routing = new Routing();
    }

    public function __invoke(): void
    {
        $requestType = $_REQUEST['requestType'];

        if ('loggin'===$requestType) {
            $dataBaseResponse = $this->database->getUser($_POST['username'], $_POST['password']);
            ($dataBaseResponse)?$this->routing->route('/login_successfully'):$this->routing->route('/login_failed');
        }elseif ("signup" === $requestType){
            $this->form->setForm(
                $_REQUEST['user_name'],
                $_REQUEST['first_name'],
                $_REQUEST['last_name'],
                $_REQUEST['nationality'],
                $_REQUEST['email'],
                $_REQUEST['mobile'],
                $_REQUEST['password'],
                $_REQUEST['birth_date'],
                $_REQUEST['address']
            );
            $this->database->addNewUser($this->form);
            $this->routing->route('/signup_success');
        }
    }
}