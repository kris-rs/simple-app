<?php

/**
 * Class responsible for validating user data.
 */
class FormValidator {

    private $postData = null;

    /**
     *  Get post data in the form of an array.
     * @param type $postData
     */
    public function __construct($postData)
    {
        $this->postData = $postData;
    }

    /**
     *  Validate user sign up information.
     * @return type
     */
    public function validateUserInputSignUp()
    {
        // Validation rules to be passed to the Validator instance.
        $rules = array(
            'login_username' => 'required|min:3|unique:users,name', // Check for unique user name
            'login_password' => 'required|min:5|confirmed', // check for matching password confirmation
            'login_password_confirmation' => 'required|min:5');

        $validator = Validator::make($this->postData, $rules);

        if ($validator->fails())
        {
            return Redirect::route('sign_up')->withErrors($validator);
        }

        // If everything goes all right write to database but escape html entitites 
        $user = new User();
        $user->addUser(
                e($this->postData['login_username']), e($this->postData['login_password'])
        );

        // attach a true cookie; used to display sign up success message
        return Redirect::route('login')->with('success', true);
    }

    /**
     *     Validate user input on login.
     * @return type
     */
    public function validateUserInputLogin()
    {
        $rules = array(
            'login_username' => 'required',
            'login_password' => 'required');

        $validator = Validator::make($this->postData, $rules);

        if ($validator->fails())
        {

            return Redirect::route('login')->withErrors($validator);
        }
        // Authentication escape entities
        $auth = Auth::attempt(array(
                    'name' => e($this->postData['login_username']),
                    'password' => e($this->postData['login_password'])
                        ), false);

        if (!$auth)
        {
            return Redirect::route('login')->withErrors('Problem with username or password.');
        }

        return Redirect::route('home');
    }

}
