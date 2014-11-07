<?foreach( $posts as $post ):?>
<div class="span8">
    <h1><a href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>"><?=$post['post_subject']?></a></h1>
    <p><?=$post['post_text']?></p>
    <div>
        <span class="badge badge-success">Posted <?= $post['post_created']?></span>
        <div class="pull-right">
            <?foreach($tags[$post['post_id']] as $tag):?>
            <a href="tags/view/<?=$tag?>"><span class="label" style="background-color: #5bc0de"><?=$tag?></span></a><? endforeach?>
        </div>
    </div>
</div>
<hr/>
<?endforeach?>
<?php if ($auth->logged_in == true): ?>
    <h1>Add post</h1>
    <div  style="border-bottom: 1px solid; margin: 10px 0px 10px 0px;"></div>
    <form class="form-inline" method="post" role="form">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Subject" name="data[post_subject]"/>
        </div>
        <br>
        <textarea name="data[post_text]" style="width: 500px; height:150px; margin: 10px 0px 10px 0px; border-radius: 5px;" placeholder="Add your text here..."></textarea>
        <br>
        <div class="form-group">
            <button class="btn btn-default" type="submit">Add</button>
        </div>
    </form>
<?php endif; ?>