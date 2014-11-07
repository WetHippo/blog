<ul class="list-group">
    <? foreach ($users as $user): ?>
        <li class="list-group-item"><a href="users/view/<?= $user['user_id'] ?>/<?= $user['username'] ?>"><?=$user['username']?></a></li>
    <? endforeach ?>
</ul>

<form role="role" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="email" class="form-control" id="exampleInputUsername" placeholder="Enter username" name="data[username]">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="data[username]">
        </div>
        <button type="submit" class="btn btn-default">Add user</button>
</form>