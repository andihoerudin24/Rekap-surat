<?php
function cmb_dinamis($name,$table,$field,$pk,$selected=NULL,$extra=NULL){
    $ci= &get_instance();
    $cmb ="<select name='$name' class='form-control' $extra>";
    $data=$ci->db->get($table)->result();
    foreach ($data as $row){
        $cmb   .="<option value='".$row->$pk."'";
        $cmb   .=$selected==$row->$pk?'selected':'';   
        $cmb   .=">".$row->$field."</option>";
    }
    $cmb .="</select>";
    return $cmb;
    
  //  function get_tahun_akademik_aktif($field){
    //    $ci= &get_instance();
      //  $ci->db->where('is_aktif','y');
       // $tahun=$ci->db->get('tbl_tahun_akademik')->row_array();
       // return $tahun($field);
    //}
}   




    
  function chek_akses_module(){
      $ci= &get_instance();
      $controller= $ci->uri->segment(2);
      $method    = $ci->uri->segment(3);
      if (empty($method)){
          $url =$controller;
      }else{
          $url =$controller.'/'.$method; 
      }
      //chek id menu
      $menu       = $ci->db->get_where('tbl_menu',array('link'=>$url))->row_array();      
      $level_user = $ci->session->userdata('id_level_user');
      
      if (!empty($level_user)){
        $chek=$ci->db->get_where('tbl_user_rule',array('id_level_user'=>$level_user,'id_menu'=>$menu['id']));
         if ($chek->num_rows()<1 and $method!='index' and $method!='data' and $method!='donwload' and $method!='ubah_status' and $method!='ajukan' and $method!='upload' and $method!='add' and $method!='edit' and $method!='rule' and $method!='hapus' and $method!='modul' and $method!='check_akses' and $method!='add_rule' and $method!='add_rule' and $method!='loaddata' and $method!='upload_surat' and $method!='cetak'    ) {
             redirect('Admin/Auth');
             //redirect('Admin/Auth');
             die;
        }       
      } else {
          redirect('Admin/Auth');    
      }
      
      
      //cehk login
        
  }

function Terbilang($x) {
        $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        if ($x < 12)
            return " " . $abil[$x];
        elseif ($x < 20)
            return Terbilang($x - 10) . "belas";
        elseif ($x < 100)
            return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
        elseif ($x < 200)
            return " seratus" . Terbilang($x - 100);
        elseif ($x < 1000)
            return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
        elseif ($x < 2000)
            return " seribu" . Terbilang($x - 1000);
        elseif ($x < 1000000)
            return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
        elseif ($x < 1000000000)
            return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
    }

?>