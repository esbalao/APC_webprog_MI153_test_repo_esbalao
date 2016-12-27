<?php echo validation_errors(); ?>

<?php echo form_open('user/add'); ?>

	<div>Nickname : <input type="text" name="nickname" value="<?php echo $this->input->post('nickname'); ?>" /></div>
	<div>Gender : <input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" /></div>
	<div>Email : <input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" /></div>
	<div>Comment : <input type="text" name="comment" value="<?php echo $this->input->post('comment'); ?>" /></div>
	<div>Cellphone : <input type="text" name="cellphone" value="<?php echo $this->input->post('cellphone'); ?>" /></div>
	<div>Name : <input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>