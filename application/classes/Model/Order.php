<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Order extends ORM
{
    protected $_table_name = 'orders';
    /*protected $_belongs_to = array(
        'site' => array(
            'model' => 'Site',
            'foreign_key' => 'site_id'
        ),
    );*/
    protected $_belongs_to = array(
        'user' => array(
            'model' => 'Orderuser'
        )
    );
}