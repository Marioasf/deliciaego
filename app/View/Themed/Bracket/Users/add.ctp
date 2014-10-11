<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        echo $this->Form->input('password_confirm');
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name');
        echo $this->Form->input('country');
        echo $this->Form->input('about');
        echo $this->Form->input('title');
        echo $this->Form->input('company');
        echo $this->Form->input('phone');
        echo $this->Form->input('picture');
        echo $this->Form->input('website');
        echo $this->Form->input('facebook');
        echo $this->Form->input('google');
        echo $this->Form->input('twitter');
        //set user ip
        //echo $this->Form->input('ip');
		//set signup datetime
        //echo $this->Form->input('signup');
        //set last login datetime
        //echo $this->Form->input('lastlogin');
        //set notifications user check datetime
        //echo $this->Form->input('notescheck');
        //set if account is active
        //echo $this->Form->input('activated');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>