<ul class="list-group">
    <? foreach ($posts as $post): ?>
        <li class="list-group-item"><a href="posts/view/<?= $post['post_id'] ?>"><?=$post['post_subject']?></a></li>
    <? endforeach ?>
</ul>