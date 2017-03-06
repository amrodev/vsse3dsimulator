<?php
  
  require_once('database.php');
   
  class Questions{
  	public $con_state;
  	public $data = array();
    public $table_name   = 'questions';
    public $table_name_cats   = 'cats';
    public $table_name_subCats   = 'subcat';
    


  	public function Check_Connection(){
  		$db = new Database();
  		$this->con_state = $db->connect();
       // return 1 if ture 0 of false
      //mysql_query("SET NAMES 'utf8'", $this->con);
  		return $this->con_state;
  	}

  	public function get_all()
  	{
  		$this->con_state = $this->Check_Connection();
  		if ($this->con_state) {
  			$db = new Database();
  		    $r= $db->get_all($this->table_name);  		    
  		}
      return $r;
  	}

    public function get_allCats()
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name_cats);          
      }
      return $r;
    }

    public function get_allSubCats()
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name_subCats);          
      }
      return $r;
    }

   

   

    public function get_questionData($search_by,$value)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_one_record($this->table_name,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }

   
    public function search($searchword)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->search($this->table_name,$searchword);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }
    
    
  	public function get_by($username,$select)
  	{
  		$ar1 = array();
  		$this->con_state = $this->Check_Connection();
  		if ($this->con_state) {
  			$db = new Database();
  		    $value = $db->get_by($this->table_name,$username,$select);  
  		}

  		return $value;

  	}

    public function get_by_round($round)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $q = "SELECT * FROM ".$this->table_name." WHERE $round !=''";
          $userdata= $db->get_by_query($q);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }

    public function get_AllSubcatsWhere($search_by,$value)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->Get_all_ByWhere($this->table_name_subCats,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }
    
    public function check_login($username,$password)
    {
      $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
             $db = new Database();
             echo $_exist = $db->check_user($this->tablename,$username,$password);
             return $_exist;                       
        }
    }

    public function check_loginST($username,$password)
    {
      $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
             $db = new Database();
             echo $_exist = $db->check_user($this->tablenameST,$username,$password);
             return $_exist;                       
        }
    }

    public function check_loginPA($username,$password)
    {
      $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
             $db = new Database();
             echo $_exist = $db->check_user($this->tablenamePA,$username,$password);
             return $_exist;                       
        }
    }

    public function check_loginTE($username,$password)
    {
      $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
             $db = new Database();
             echo $_exist = $db->check_user($this->tablenameTE,$username,$password);
             return $_exist;                       
        }
    }

    public function save($id,$question,$catname,$round1,$round2,$round3,$round4,$round5,$round6,$round7,$round8,$round9,$round10 ,$round11,$round12,$round13,$round14,$round15,$subcat,$round16,$round17,$round18,$round19,$round20)
  	{
        $message ='';
  	    $this->con_state = $this->Check_Connection();
  		  if ($this->con_state) {
  			$db = new Database();
  		    if($id == NULL){ // Insert
              $fields = "(question,questionType,question_subtitle,round1,round2,round3,round4,round5,round6,round7,round8,round9,round10,round11,round12,round13,round14,round15,subcat,round16,round17,round18,round19,round20)";
  		    	  $values = "( '".$question."' , '".$catname."' ,  '".$subcat."' , '".$round1."' , '".$round2."' , '".$round3."' , '".$round4."' , '".$round5."', '".$round6."', '".$round7."', '".$round8."', '".$round9."', '".$round10."', '".$round11."', '".$round12."'  , '".$round13."'  , '".$round14."'  , '".$round15."' , '".$subcat."' , '".$round16."' , '".$round17."' , '".$round18."' , '".$round19."' , '".$round20."' )";
              $db->insert($this->table_name , $fields , $values );
              $message = 'Question added Successful';
  		    } 
  		   	    
  		}
      return $message;  		
  	}

    public function save_cat($id,$catname)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
        $db = new Database();
          if($id == NULL){ // Insert
              $fields = "(catname)";
              $values = "( '".$catname."' )";
              $db->insert($this->table_name_cats , $fields , $values );
              $message = 'Question added Successful';
          } 
              
      }
      return $message;      
    }


    public function save_subcat($id,$catname,$subcat)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
        $db = new Database();
          if($id == NULL){ // Insert
              $fields = "(catname,subcatname)";
              $values = "( '".$catname."' , '".$subcat."' )";
              $db->insert($this->table_name_subCats , $fields , $values );
              $message = 'Question added Successful';
          } 
              
      }
      return $message;      
    }

    public function SaveSTU($StudentID,$Level,$Password,$ActiveFlag,$FirstName,$MiddleName,$LastName,$FirstNameAR,$MiddleNameAR,$LastNameAR,$GenderCode,$BirthDate,$CityName,$CityNameAR,$CountryCode,$GPA,$SchoolID,$JoiningDate,$StudentCode,$GenderID,$ReligionID,$nationalityID,$ParentID,$Username,$Email,$StudentPIC,$ClassID)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
        $db = new Database();
          if($StudentID == NULL){ // Insert
              $fields = "(StudentID,Level,Password,ActiveFlag,FirstName,MiddleName,LastName,FirstNameAR,MiddleNameAR,LastNameAR,GenderCode,BirthDate,CityName,CityNameAR,CountryCode,GPA,SchoolID,JoiningDate,StudentCode,GenderID,ReligionID,nationalityID,ParentID,Username,Email,StudentPIC,ClassID)";
              $values = "( '".$StudentID."' , '".$Level."' , '".$Password."' , '".$ActiveFlag."' , '".$FirstName."' , '".$LastName."'   , '".$FirstNameAR."' , '".$MiddleNameAR."' , '".$LastNameAR."' , '".$GenderCode."' , '".$BirthDate."'  , '".$CityName."' , '".$CityNameAR."' , '".$CountryCode."' , '".$GPA."' , '".$SchoolID."'   , '".$JoiningDate."' , '".$StudentCode."' , '".$GenderID."' , '".$ReligionID."' , '".$nationalityID."'  , '".$ParentID."' , '".$Username."' , '".$Email."' , '".$StudentPIC."' , '".$ClassID."'   , '".$Level."' , '".$Level."' , '".$Level."' , '".$Level."' , '".$Level."' )";
              $db->insert($this->table_nameST , $fields , $values );
              $message = 'User added Successful';
          } 
              
      }
      return $message;      
    }    


    public function update($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_name,$fileds,$values,$counter,$select,$id);
        } 
         
        return $message;      
    }

    public function update_userST($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_nameST,$fileds,$values,$counter,$select,$id);
        } 
         
        return $message;      
    }

    public function update_userPA($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_namePA,$fileds,$values,$counter,$select,$id);
        } 
         
        return $message;      
    }

    public function update_userTE($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_nameST,$fileds,$values,$counter,$select,$id);
        } 
         
        return $message;      
    }

  	public function delete($id){
  	      $this->con_state = $this->Check_Connection();
  		 if ($this->con_state) {
  		 	$db = new Database();
        //$where = ' WHERE admin_id ="'.$id.'"';
        $where_select = 'id';
        $where_value = $id;
  		 	$db-> delete($this->table_name ,$where_select ,$where_value);
  		 }
  		 else{echo 'Connectio Lost';}  		
  	}

    public function deleteCat($id){
          $this->con_state = $this->Check_Connection();
       if ($this->con_state) {
        $db = new Database();
        //$where = ' WHERE admin_id ="'.$id.'"';
        $where_select = 'catname';
        $where_value = $id;
        $db->delete($this->table_name_cats ,$where_select ,$where_value);
       }
       else{echo 'Connectio Lost';}     
    }

  	public function is_user($username)
  	{
      echo $username;
  		$this->con_state = $this->Check_Connection();
  		if ($this->con_state) {
  			$db = new Database();
  		  $_is = $db->is_admin($this->table_name,$username);
  		  if($_is == 1){
  		    	return true;

  		  }
  		  else{
  		    	return false;
  		  }  		    
  		}
  		else{
  			echo 'Connection Lost';
  		}
  		return $_is;
  	}

    public function is_username($username)
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
        $_is = $db->is_admin($this->table_name,$username);
        echo  $_is;     
      }
      else{
        echo 'Connection Lost';
      }
      return $_is;
    }

    public function is_student($username)
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
        $_is = $db->is_user($this->table_nameST,$username);
        echo  $_is;     
      }
      else{
        echo 'Connection Lost';
      }
      return $_is;
    }

    public function is_parent($username)
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
        $_is = $db->is_admin($this->table_namePA,$username);
        echo  $_is;     
      }
      else{
        echo 'Connection Lost';
      }
      return $_is;
    }

    public function is_teacher($username)
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
        $_is = $db->is_user($this->table_nameTE,$username);
        echo  $_is;     
      }
      else{
        echo 'Connection Lost';
      }
      return $_is;
    }


    public function is_exist($search_by , $value)
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
        $_is = $db->is_exist($this->table_name, $search_by , $value);
        if($_is == 1){
            //echo 'welccome ';
        }
        else{
            //echo 'tru again ';
        }         
      }
      else{
        echo 'Connection Lost';
      }
      return $_is;
    }


  } 
?>