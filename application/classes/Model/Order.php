<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Order extends ORM
{
    protected $_table_name = 'orders';


    protected $_belongs_to = array(
        'user' => array(
            'model' => 'Orderuser'
        )
    );

    private function get_rows($id){
        return $this->where('site_id', '=', $id)->order_by('id', 'DESC')->find_all();
    }

    public function get_results($id){
        $results = array();

        $site = ORM::factory('Site',$id);
        $results["site"]["Counter"] = $site->YaCounter;

        $rows = $this->get_rows($id);
        foreach ($rows as $key => $row){
            $field_arr = $row->as_array();
            foreach ($field_arr as $field_name => $field_val){
                $results["items"][$key][$field_name] = $field_val;
            }

        }
        return $results;
    }

}