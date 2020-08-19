<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['fileup'],'/',$$_GET['id'];

    //echo $_GET['fileup'],'_2/',$_GET['id'];
    /* $filename  = $_FILES['uploaded_file']['name'];
     $typefile  = $_FILES['uploaded_file']['type'];
     $sizefile  = $_FILES['uploaded_file']['size'];*/
     //$tmpname   = $_FILES['fileup']['tmp_name'];
    //echo $tmpname,'_12';
    $target_file = basename($_FILES["fliecom"]["name"]);
    //echo $traget_file;
    //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    //echo $imageFileType,"4654";
    $filetrue = $_GET['id'].'-'.GeraHash(6).'_'.$target_file;
    //echo $_GET['id'];
    //move_uploaded_file($_FILES['fileup']['tmp_name'],"../fileproj/".$filetrue);
     if(move_uploaded_file($_FILES['fliecom']['tmp_name'],"../filecommit/".$filetrue)){
         //echo $filetrue;
                 $sql_upc ='INSERT INTO tbl_up_com (UpcID,UpcComID,UpcFile,UpcUserID,UpcDateUP) VALUES (NULL,"'.$_GET['id'].'" ,"'.$filetrue.'","'.$_SESSION['ssUserSname'].'",NOW() )';
                 $result_upc = mysql_query($sql_upc) or die(mysql_error());
                 //echo $filetrue,'/',$_GET['id'];
                 //echo $_GET['uploadpro2'],'/',$_GET['id'];
                 //echo $_GET['id'];
                 echo 'Y';
    } else {
     //   echo $filetrue,'7584581465/',$_GET['id'];
       // echo $_GET['uploadpro2'],'/',$_GET['id'];
         echo 'no';
     }
     //exit;

     function GeraHash($qtd){
        //Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
        $Caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $QuantidadeCaracteres = strlen($Caracteres);
        $QuantidadeCaracteres--;
        $Hash=NULL;
            for($x=1;$x<=$qtd;$x++){
                $Posicao = rand(0,$QuantidadeCaracteres);
                $Hash .= substr($Caracteres,$Posicao,1);
            }
        return $Hash;
        }

?>
