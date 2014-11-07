
<?php

class posts extends Controller{

    function index(){
        $this->posts = get_all("SELECT * FROM post");
        $this->users = get_all("SELECT * FROM user");
        $_tags = get_all("SELECT*FROM post_tags NATURAL JOIN tag");
        foreach ($_tags as $tag) {
            $this->tags[$tag['post_id']][] = $tag['tag_name'];
        }
    }

    function index_ajax(){
        echo "\$_POST:<br>";
        var_dump($_POST);
    }

    function index_post(){
        echo "\$_POST:<br>";
        var_dump($_POST);
        $data = $_POST['data'];
        $data['post_id'] = $this->params[0];
        $data['user_id'] = $_SESSION['user_id'];
        insert('post', $data);
    }
    function view() {
        $post_id=$this->params[0];
        $comment_id=$this->params[0];
        $this->post=get_first("SELECT*FROM post
                                NATURAL JOIN user
                                WHERE post_id='$post_id'");

        $this->tags = get_all("SELECT*FROM post_tags NATURAL JOIN tag WHERE post_id='$post_id'");
        $this->comments = get_all ("SELECT*FROM comment NATURAL JOIN post WHERE post_id='$post_id'");
    }
    function view_post() {
        $data = $_POST['data'];
        $data['post_id'] = $this->params[0];
        $data['comment_author']='Klaabu';
        insert('comment', $data);
    }
}