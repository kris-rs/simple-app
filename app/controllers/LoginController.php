<?php

class LoginController extends Controller {

    public function getIndex()
    {
        return View::make('login');
    }

    public function postData()
    {
        Input::merge(array_map('trim', Input::all()));                                             // trim data
        $formValidator = new FormValidator(Input::all());                               // pass the user input to FormValidator
        return $formValidator->validateUserInputLogin(Input::all());         // redirect
    }

}
