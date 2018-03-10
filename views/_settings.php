<?php if (!defined('APPLICATION')) exit();
?>
    <h1><?php echo $this->data('Title'); ?></h1>

    <div class="padded alert alert-warning">
        <?php echo sprintf(t('You must register your application with %s for this plugin to work.'), t('Mastodon')); ?>
    </div>
    <div class="padded">
        <?php echo t('Mastodon Connect allows users to sign in using their Mastodon account.'); ?>
    </div>
<?php
echo $this->Form->open();
echo $this->Form->errors();
?>
    <ul>
        <li class="form-group">
            <?php
            echo $this->Form->labelWrap('Application Name', 'AppName');
            echo $this->Form->textBoxWrap('AppName');
            ?>
        </li>
        <li class="form-group">
            <div class="input-wrap no-label">
                <?php
                echo $this->Form->checkBox('SocialSignIn', 'Enable Social Sign In');
                ?>
            </div>
        </li>
    </ul>
<?php echo $this->Form->close('Save');
