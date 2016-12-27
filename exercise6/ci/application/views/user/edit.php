<?php echo validation_errors(); ?>

<?php echo form_open('user/edit/'.$user['user_id']); ?>

	<div>Nickname : <input type="text" name="nickname" value="<?php echo ($this->input->post('nickname') ? $this->input->post('nickname') : $user['nickname']); ?>" /></div>
	<div>Gender : <input type="text" name="gender" value="<?php echo ($this->input->post('gender') ? $this->input->post('gender') : $user['gender']); ?>" /></div>
	<div>Email : <input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" /></div>
	<div>Comment : <input type="text" name="comment" value="<?php echo ($this->input->post('comment') ? $this->input->post('comment') : $user['comment']); ?>" /></div>
	<div>Cellphone : <input type="text" name="cellphone" value="<?php echo ($this->input->post('cellphone') ? $this->input->post('cellphone') : $user['cellphone']); ?>" /></div>
	<div>Name : <input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $user['name']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>