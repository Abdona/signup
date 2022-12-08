<?php

namespace App\Form;

use App\Database\Database;
use App\Routing\Routing;
use App\Session;
use App\Validation\Validate;
use App\Validation\ValidationCollection;

class FormAction
{
    private Database $database;
    private Form $form;
    private Routing $routing;
    private Validate $validate;
    private ValidationCollection $validationCollection;

    public function __construct()
    {
        $this->database = new Database();
        $this->form = new Form();
        $this->routing = new Routing();
        $this->validationCollection = new ValidationCollection();
        $this->validate = new Validate($this->form,$this->validationCollection);
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
            $this->validationCollection = $this->validate->validate();
            $_SESSION['validation'] = $this->validationCollection;
            if (0 === $this->validationCollection->getMessageLength()) {
                $this->database->addNewUser($this->form);
                $this->routing->route('/signup_success');
                return;
            }
            $this->routing->route('/signup_failed');
        }
    }
}