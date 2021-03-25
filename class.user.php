<?php
require_once 'dbconfig.php';

class USER
{
    private $conn;
    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }
    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
    public function lasdID()
    {
        $stmt = $this->conn->lastInsertId();
        return $stmt;
    } 
 




    public function register($uname, $email, $upass, $code, $mobile, $lastname, $profilecreatedby, $contactno, $city, $state, $country, $dob,$dom,$doy,$maritialstatusid, $gender, $religionid, $subreligionid,$educationid, $subeducationid, $district)
    {
        try
        {
            $password = md5($upass);
            $stmt = $this->conn->prepare("INSERT INTO customer(userName,userEmail,userPass,tokenCode,mobile, lastname,profilecreatedby,contactno,city,state,country, dob,dom,doy,maritialstatusid,gender,religionid,subreligionid,educationid,subeducationid, district) VALUES (:user_name,:user_mail,:user_pass,:active_code,:mobile,:lastname,:profilecreatedby,:contactno,:city,:state,:country, :dob,:dom,:doy,:maritialstatusid,:gender,:religionid,:subreligionid,:educationid,:subeducationid,:district)");
            $stmt->bindparam(":user_name", $uname);
            $stmt->bindparam(":user_mail", $email);
            $stmt->bindparam(":user_pass", $password);
            $stmt->bindparam(":active_code", $code);
            $stmt->bindparam(":mobile", $mobile);
            $stmt->bindparam(":lastname", $lastname);
            $stmt->bindparam(":profilecreatedby", $profilecreatedby);
            $stmt->bindparam(":contactno", $contactno);
            $stmt->bindparam(":city", $city);
            $stmt->bindparam(":state", $state);
            $stmt->bindparam(":country", $country);
            $stmt->bindparam(":dob", $dob);
            $stmt->bindparam(":dom", $dom);
            $stmt->bindparam(":doy", $doy);
            $stmt->bindparam(":maritialstatusid", $maritialstatusid);
            $stmt->bindparam(":gender", $gender);
            $stmt->bindparam(":religionid", $religionid);
            $stmt->bindparam(":subreligionid", $subreligionid);
            $stmt->bindparam(":educationid", $educationid);
            $stmt->bindparam(":subeducationid", $subeducationid);
            $stmt->bindparam(":district", $district);

            if ($stmt->execute()) {
                session_unset();
                session_destroy();
                session_start();
                $_SESSION['userSession'] = $this->conn->lastInsertId();
                return true;
            } else {
                return false;
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function login($email, $upass)
    {
        try
        { 

            $stmt = $this->conn->prepare("SELECT * FROM customer WHERE mobile=:email_id or userEmail = :email_id");
            $stmt->execute(array(":email_id" => $email));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt->rowCount() == 1) {
                if ($userRow['userStatus'] == "Y") {
                    if ($userRow['userPass'] == md5($upass)) {
                        $_SESSION['userSession'] = $userRow['userID'];
                        //lastlogincode
                        $idd = $userRow['userID'];
                        $stmtt = $this->conn->prepare("INSERT INTO customerlogin (customerid) VALUES ($idd)");
                        $stmtt->execute();
                        //lastlogincode end            

                        return true;
                    } else {
                        header("Location: login.php?error");
                        exit;
                    }
                } else {
                    header("Location: login.php?inactive");
                    exit;
                }
            } else {
                header("Location: login.php?error");
                exit;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function is_logged_in()
    {
        if (isset($_SESSION['userSession'])) {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function logout()
    {
        session_destroy();
        $_SESSION['userSession'] = false;
    }

    public function send_mail($email, $message, $subject)
    {
        require_once 'mailer/class.phpmailer.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = false;
        $mail->SMTPSecure = "none";
        $mail->Host = "relay-hosting.secureserver.net";
        $mail->Port = 25;
        $mail->AddAddress($email);

        $mail->Username = "info@grocerpoint.in";
        $mail->Password = "";
        $mail->SetFrom('info@grocerpoint.in', 'Grocer Point');
        $mail->AddReplyTo("info@grocerpoint.in", "Grocer Point");
        $mail->Subject = "Please confirm your email | Grocer Point";
        $mail->MsgHTML($message);
        $mail->Send();
    }
}
