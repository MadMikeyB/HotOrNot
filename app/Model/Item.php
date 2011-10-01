<?php 
class Item extends AppModel {
    public $name = 'Item';
    public $validate = array(
        'title' => array(
            'rule' => array('minLength', '3'),
            'message' => 'Please enter a title longer than 3 characters.',
        ),
        'image' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Please enter a valid URL.'
        ),
        'tags' => array(
            'rule' => array('minLength', '3'),
            'message' => 'Please enter some tags.',
        )
    );
}