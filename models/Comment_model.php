<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Odonto_model');
        //load the employee model
        
          
    }


    function DBCommentInsert($id_medico,$id_paciente,$Comment, $ActionRealDate,$zona){

 
      $data = array(
        'id_medico' => $id_medico,
        'id_paciente' => $id_paciente,
        
        'Comment' => $Comment,
        'ActionRealDate'=>$ActionRealDate,
        'zona'=>$zona,
        );

       $this->db->insert('comment', $data);
      //$sql = "INSERT INTO comment (id_medico, id_paciente, DateTimeStamp, Comment, ActionRealDate)
      //VALUES ('$id_medico','$id_paciente','$DateTimeStamp','$Comment','$ActionRealDate')";

     

}

function DBLoadToSystemConsult($id_paciente){
        $info;
        $i=0;
        $query= "select persona.nombres AS DoctorN, persona.apellidos AS DoctorLN, comment.Comment AS Comment, comment.ActionRealDate AS ActionRealDate from persona, comment
          where comment.id_paciente = ".$id_paciente." and persona.id_persona IN (select comment.id_medico from comment where comment.id_paciente = ".$id_paciente.") ORDER BY comment.ActionRealDate  DESC";
          $result = $this->db->query($query);
       
        
    
        $num = $result->num_rows();
        
          if ($num > 0) 
          {

          // output data of each row
              foreach ($result->result() as $row) {
              //$info [$i] = array( $row ->ActionRealDate, $row ->Comment, $row ->id_medico);
                  $info [$i] = array( $row ->ActionRealDate, $row ->Comment, $row ->DoctorN, $row->DoctorLN);

              $i++;

            }
           
            //echo '<br><br><br><br><br>'.$info[1][2].'<br><br>';
         /*while($row = $result->fetch_assoc()) {
          $info [$i] = array( $row ->accion, $row ->posicionDiente, $row ->zonaDiente);

             echo '<br>'.$row["ActionRealDate"].'<br>'.$row["Comment"].'<br>'.$row["id_medico"].'<br><br>';
         }*/
          /*$this->db->select('id_medico');
        $this->db->select('id_paciente');
        $this->db->select('DateTimeStamp');
        $this->db->select('Comment');
        $this->db->select('ActionRealDate');
        $this->db->from('comment');
        $this->db->where('id_paciente', $id_paciente);
        
        $this->db->order_by("ActionRealDate", "desc");

        $result = $this->db->get();*/
        //$result = $query->result();
          return $info;
     }
  
    
   


}





    
}