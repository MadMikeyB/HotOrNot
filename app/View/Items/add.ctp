<?php
echo $this->Form->create();
echo $this->Form->input('title');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('image', array('placeholder' => 'http://'));
echo $this->Form->input('tags', array('placeholder' => 'tv shows, movies, modelling'));
echo $this->Form->end('Add Item');
?>