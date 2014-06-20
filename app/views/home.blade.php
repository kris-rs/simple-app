@extends('layouts.loggedin ')

@section('title')
{{ 'Simple app - Home' }}
@stop

@extends('loggedin_nav')

@section('new_post_area')
<div id='new_post_area'>
    {{Form::open(array('autocomplete' => 'off'))}}
    <textarea name='text_new_post' placeholder="New post..." rows='6' cols='19'></textarea> <br/>
    <input type='submit' value='Post' id='message_post_submit'>
    {{Form::close()}}
</div>


<div id="posts_display_wrapper">
    <?php
    $postData = Posts::getPostData();

    ?>

    @foreach ($postData as $post)
    <div class="posts_display_whole_post">
        <div class="posts_display_text">
            {{$post['post']}}
        </div>
        <div class="posts_display_user_date_wrapper">

            By: {{$post["user"]}} <br/>
            Date: {{$post["date"]}}

        </div> {{-- Close post_display_user_date_wrapper --}}
    </div> {{-- Close posts_display_whole_post --}}
    @endforeach

</div> {{-- Close posts_wrapper --}}
@stop

