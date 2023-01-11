<?php
class Course{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getCourse()
    {
        $sql = "SELECT * FROM users order by firstname asc";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

     public function getCourseDetail($id)
    {
        $sql = "SELECT * FROM sci_cs where cs_id = ".$id;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

    // public function getCoursePro($pro_id)
    // {
    //     $sql = "SELECT * FROM agency WHERE `agency_pro_id` = '". $pro_id ."'";
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }

    // public function getAgencyID($a_id)
    // {
    //     $sql = "SELECT * FROM agency where agency_id=".$a_id;
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetch(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }

    public function addCourse($data_course)
    {
        $sql = "INSERT INTO `sci_cs` (`cs_id`, `cs_name`, `cs_img`, `cs_date`, `cs_wallet`)";
        $sql .= " VALUES ('', :cs_name, :cs_img, :cs_date, :cs_wallet);";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data_course)){
            return true;
        }else {
            return false;
        }
    }

    public function delCourse($k_id)
    {
        $sql = "DELETE FROM `agency` WHERE `agency_id`='".$k_id."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function editCourse($a_id, $a_name, $a_context, $a_pic, $a_location)
    {
        $sql = "UPDATE `agency` SET `agency_name` = '". $a_name ."', `agency_context` = '". $a_context ."', `agency_pic` = '". $a_pic ."', `agency_location` = '". $a_location ."' WHERE `agency_id` = '". $a_id ."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }
	
}
?>