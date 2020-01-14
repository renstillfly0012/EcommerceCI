<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_model extends CI_Model
{

    public function insert_order($id)
    {

        date_default_timezone_set('Asia/Manila'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

        $arr['int_user_id'] = $id;
        $arr['int_total'] = $this->cart->total();
        $arr['created_at'] = $now;
        $arr['status'] = 0;
        $this->db->insert('tbl_orders', $arr);

        $order_id = $this->db->insert_id();
        foreach ($this->cart->contents() as $items) {

            $arr2['int_user_id'] = $id;
            $arr2['int_order_id'] = $order_id;

            $ctr = 0;
            $cart_option = array();
            $whatKindofSize = '';
            $whatKindofColor = '';
            foreach ($items['options'] as $row => $value) {

                $cart_option[$ctr] = $value;

                $ctr++;
            }


            $arr2['size_id_fk'] = $cart_option[0];
            $arr2['color_id_fk'] = $cart_option[1];
            $arr2['int_item_id'] = $items['id'];
            $arr2['double_price'] = $items['price'];

            $arr2['int_qty'] = $items['qty'];
            $arr2['created_at'] = $now;
            $this->db->insert('tblorder_details', $arr2);

            $whatKindofSize = $cart_option[0] . '_qty';
            $whatKindofColor = $cart_option[1] . '_qty';

            //updating the size quantity stocks
            $this->db->set($whatKindofSize, $whatKindofSize . '-' . $items['qty'], FALSE);
            $this->db->where('id', $items['id']);
            $this->db->update('tblitem');

            //updating the color quantity stocks
            $this->db->set($whatKindofColor, $whatKindofColor . '-' . $items['qty'], FALSE);
            $this->db->where('id', $items['id']);
            $this->db->update('tblitem');
        }
    }


    public function fetch_all_orders()
    {
        $this->db->select('*');
        $this->db->where('int_user_id =' . $this->session->usr_id);
        $this->db->from('tbl_orders');
        return $this->db->get()->result();
    }


    public function fetch_all_order_details($id)
    {
        $this->db->select('tblorder_details.int_order_details_id, tblitem.name, tblitem.price, tblorder_details.int_qty,tblorder_details.size_id_fk, tblorder_details.color_id_fk,  tblorder_details.created_at');
        $this->db->from('tblorder_details');
        $this->db->join('tblitem', 'tblitem.id = tblorder_details.int_item_id');
        $this->db->where('int_order_id', $id);
        // SELECT * FROM tblorder_details WHERE tblorder_details.int_order_id = 5
        // $this->db->select('*');
        // $this->db->where('int_order_id', $id);
        // $this->db->from('tblorder_details');
        return $query =  $this->db->get()->result();
        // $this->dd($query);

    }


    public function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }
}
