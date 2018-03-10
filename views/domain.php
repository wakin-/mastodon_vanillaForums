<?php if (!defined('APPLICATION')) exit();

echo '<div class="Connect">';
echo '<h1>', $this->data('Title'), '</h1>';

// Post this form back to our current location.
$path = htmlspecialchars(Gdn::request()->path());

echo $this->Form->open(['Action' => url($path), 'Method' => 'get']);
echo $this->Form->errors();

if ($this->data('Error')) {
    echo '<div class="padded alert alert-warning">';
    echo $this->data('Error');
    echo '</div>';
}

?>
    <div>
        <ul>
            <li>
                <?php
                echo $this->Form->label('Enter Your Mastodon Domain', 'domain');
                echo $this->Form->textBox('domain');
                ?>
            </li>
        </ul>
        <div class="Buttons">
            <?php
            echo $this->Form->button('Auth');
            echo $this->Form->hidden('target');
            ?>
        </div>
    </div>
<?php
echo $this->Form->close();
echo '</div>';
