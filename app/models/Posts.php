<?php

class Posts extends \Eloquent {

    protected $fillable = ['post, user_id']; 
    protected $primaryKey = 'post_id';
    
    /**
     *  Create a relationship -> each post belongs to a user.
     * @return type
     */
    public function user(){
        return $this->belongsTo('User');
    }

    /**
     *  Get all posts with their respective usernames and dates.
     * Time zone is not correctly set.
     * @return An array of posts with post body, username, date.
     */
    public static function getPostData(){
        $postData = array();
        // Get all posts from newest to oldest.
        $posts = Posts::orderBy('created_at', 'DESC')->get();
        
        foreach ($posts as $post){
            $postData[] = array(
                "user" => User::find($post->user_id)->name, 
                "post" => $post->post, 
                "date" => $post->created_at->toDateTimeString(),
                    );
        }
        return $postData;     
    }
}
    