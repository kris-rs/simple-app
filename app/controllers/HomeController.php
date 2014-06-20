<?php

class HomeController extends BaseController {

    public function getIndex()
    {
        return View::make('home');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('login');
    }

    /**
     *  Method to add a post to a database and the user_id of the currently logged user.
     * @return type
     */
    public function postPost()
    {
        $data = Input::all();
        $uid = Auth::user()->getAuthIdentifier();

        $post = new Posts();
        $post->post = e($data['text_new_post']); // escape entities
        $post->user_id = $uid;
        $post->save();

        return Redirect::route('home');
    }

}
