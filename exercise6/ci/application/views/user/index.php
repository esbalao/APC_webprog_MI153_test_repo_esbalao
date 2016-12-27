<table border="1" width="100%">
    <tr>
		<th>User Id</th>
		<th>Nickname</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Comment</th>
		<th>Cellphone</th>
		<th>Name</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users as $u){ ?>
    <tr>
		<td><?php echo $u['user_id']; ?></td>
		<td><?php echo $u['nickname']; ?></td>
		<td><?php echo $u['gender']; ?></td>
		<td><?php echo $u['email']; ?></td>
		<td><?php echo $u['comment']; ?></td>
		<td><?php echo $u['cellphone']; ?></td>
		<td><?php echo $u['name']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>