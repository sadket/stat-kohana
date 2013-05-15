<?php

class Model_Post extends ORM
{
    protected $_table_name = 'posts';

    protected  $_belongs_to = array(
        'hui'           => array(
            'model'         => 'Hui',
            'foreign_key'   => 'hui_id',
        )
    );
}