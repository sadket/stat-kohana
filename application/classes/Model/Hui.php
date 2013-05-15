<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Hui extends ORM
{
    protected $_table_name = 'huis';

    protected $_has_many = array(
        'posts' => array(
            'model' => 'Post',
            'foreign_key' => 'hui_id'
        )
    );
}