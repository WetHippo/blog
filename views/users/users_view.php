<table class="table table-bordered ">
    <h1>Edit user '<?=$user['username']?>'</h1>
    <tr>
        <th>Username</th>
        <td><?= $user['username'] ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?= $user['password'] ?></td>
    </tr>
    <tr>
        <th>Active</th>
        <td><?= $user['active'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= $user['email'] ?></td>
    </tr>
</table>
<form action="users/edit/ <?=$user['user_id']?>"><button class="btn btn-default">Edit <?=$user['username']?></button></form>