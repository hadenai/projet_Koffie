<?php


namespace App\Controller;

use App\Model\AddContactManager;

class AddContactController extends AbstractController
{
    public function index()
    {
        $error = false;
        $firstNameError = null;
        $lastNameError = null;
        $emailError = null;
        $yourMessageError = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
            if (empty($_POST['firstname'])) {
                $error = true;
                $firstNameError = 'First name is empty';
            }
            if (empty($_POST['lastname'])) {
                $error = true;
                $lastNameError = 'Last name is empty';
            }
            if (empty($_POST['email'])|| !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error = true;
                $emailError = 'Email is empty or invalid';
            }
            if (empty($_POST['yourmessage'])) {
                $error = true;
                $yourMessageError = 'Your message is empty';
            }
            if ($error === false) {
                $addContactManager = new AddContactManager();
                $contact = [
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'yourmessage' => $_POST['yourmessage'],
                ];
                $id = $addContactManager->insert($contact);
                header('Location:/');
            }
        }
        return $this->twig->render('Home/addcontact.html.twig', [
            'firstNameError'=>$firstNameError,
            'lastNameError'=>$lastNameError,
            'emailError'=>$emailError,
            'yourMessageError'=>$yourMessageError,

        ]);
    }
}
