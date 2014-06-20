<?php

use Illuminate\Support\ServiceProvider;

class FormValidatorServiceProvider extends ServiceProvider {

    public function register()
    {
        
    }

    public function boot()
    {
        $this->app->validator->resolver(function($translator, $data, $rules, $messages) {
            return new FormValidator($translator, $data, $rules, $messages);
        });
    }

}
