<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {
    public function getItems($per_page, $end_page){
        $this->db->limit($per_page, $end_page); 
        $query = $this->db->get('tblitem');
        return $query->result();
    }

    public function getAllItems(){
        $query = $this->db->get('tblitem');
        return $query->result();
    }


    public function deleteItem($id){
        $this->db->where('id',$id);
        $this->db->delete('tblitem');
    }
    public function insert($data){
        $this->db->insert('tblitem',$data);
    }

    public function get_item($id){
        $this->db->where('id',$id);
        $q = $this->db->get('tblitem');
        return $q->row();
    }

    public function num_rows(){
        $q = $this->db->get('tblitem');
        return $q->num_rows();
    }

    public function updateImg($id, $image){
        $this->db->set('image', $image);
        $this->db->where('id', $id);
        $this->db->update('tblitem');
    }

    public function update($id,$name,$description,$price,$category,$int_qty){
        $data = array(
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'categories' =>$category,
        'int_qty'=> $int_qty
        );
         $this->db->where('id', $id);
        $this->db->update('tblitem', $data);
    }

    public function getAllShirts(){
        $query = $this->db->get_where('tblitem', array('categories' => 'shirt'));
        return $query->result();
    }

    public function getAllJackets(){
        $query = $this->db->get_where('tblitem', array('categories' => 'jacket'));
        return $query->result();
    }

    public function getAllFootwear(){
        $query = $this->db->get_where('tblitem', array('categories' => 'footwear'));
        return $query->result();
    }

    public function colorStock(){


    }
    

    public function updatesizeStock($size,$int_qty,$id){
    
      
        $kindofSize = $size.'_qty';
        // $this->dd($kindofSize.$int_qty.$id);
        $this->db->set($kindofSize, $kindofSize . '+' .$int_qty, FALSE);
        $this->db->where('id', $id);
        $this->db->update('tblitem');

    }

    public function updatecolorStock($color,$int_qty,$id){
    
      
        $kindofColor = $color.'_qty';
        // $this->dd($kindofSize.$int_qty.$id);
        $this->db->set($kindofColor, $kindofColor . '+' .$int_qty, FALSE);
        $this->db->where('id', $id);
        $this->db->update('tblitem');

    }

    public function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }


}