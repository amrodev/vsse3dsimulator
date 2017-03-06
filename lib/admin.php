<?php
  
  require_once('database.php');
   
  class Admin{
  	public $con_state;
  	public $data = array();
    public $table_name   = 'admin';
    public $table_nameST = 'students';
    public $table_nameST_Classes = 'classes';
    public $table_namePA = 'parents';
    public $table_nameTE = 'teacherstable';


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

    public function select_x_stTable($items,$where)
    {
      
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
          if ($where == "") {
            echo $q = "SELECT ".$items." FROM ".$this->table_nameST;
            $r= $db->get_by_query($q); 
          }
          else{
            echo $q = "SELECT ".$items." FROM ".$this->table_nameST." WHERE ".$where;
            $r= $db->get_by_query($q); 
          }
                   
      }
      return $r;
    }

    public function get_allST()
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_nameST);          
      }
      return $r;
    }

    public function get_allPA()
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_namePA);          
      }
      return $r;
    }

    public function get_allTE()
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_nameTE);          
      }
      return $r;
    }

    public function get_random_user($num_users)
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
          $n_records = $num_users;
          $r= $db->get_random_record($this->table_name,$n_records);          
      }
      return $r;
    }

    public function get_numbers_of_users($number,$order_by)
    {
        //$order_by = ' food_id DESC '; // ASC
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
            $db = new Database();
            $r= $db->get_number_records($this->table_name,$number,$order_by);            
        }
      return $r;
    }

    public function get_userdata($search_by,$value)
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

    public function getStClass($search_by,$value)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_one_record($this->table_nameST_Classes,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }

    public function get_userdataST($search_by,$value)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_one_record($this->table_nameST,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }

    public function get_userdataPA($search_by,$value)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_one_record($this->table_namePA,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }

    public function get_userdataTE($search_by,$value)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_one_record($this->table_nameTE,$search_by,$value);
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

    public function get_by_where($select,$where)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_by_where($this->table_name,$select,$where);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }

    public function get_by_whereTE($search_by,$value)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->Get_all_ByWhere($this->table_nameTE,$search_by,$value);
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

    public function save($id,$username,$english_name,$arabic_name,$password1,$email,$level)
  	{
        $message ='';
  	    $this->con_state = $this->Check_Connection();
  		  if ($this->con_state) {
  			$db = new Database();
  		    if($id == NULL){ // Insert
              $fields = "(admin_username,admin_password,admin_email,arabic_name,level,english_name)";
  		    	  $values = "( '".$username."' , '".$password1."' , '".$email."' , '".$arabic_name."' , '".$level."' , '".$english_name."' )";
              $db->insert($this->table_name , $fields , $values );
              $message = 'User added Successful';
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


    public function update_user($fileds,$values,$counter,$select,$id)
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
        $where_select = 'admin_id';
        $where_value = $id;
  		 	$db-> delete($this->table_name ,$where_select ,$where_value);
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