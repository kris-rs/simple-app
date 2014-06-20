<?php

class SignUpController extends Controller {

    // TODO find how to create helper classes


    public function getIndex()
    {
        return View::make('sign_up');
    }

    /**
     *  Controller for sending SignUpData.
     * @return type
     */
    public function postData()
    {
        Input::merge(array_map('trim', Input::all()));                          // Used to perform the trim function on all of the input.
        $formValidator = new FormValidator(Input::all());            // pass the user input to FormValidator
        return $formValidator->validateUserInputSignUp();       // redirect
    }

}
