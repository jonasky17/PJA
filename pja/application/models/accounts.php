<?php
Class accounts extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('account_id, username, password','type');
   $this -> db -> from('accounts');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 function view_items(){
  $this -> db -> select('inventory_id', 'name', 'description' ,'quantity');
  $this -> db -> from('inventory');
  $this -> db -> limit(1);

  $query = $this -> db -> get();

  if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>