<?php
    include "C:\wamp64\www\webb5\db_connect.php";

    global $connect;

    if(isset($_POST['view'])){
        if($_POST["view"] !=  ''){
             $update_query = $connect->query("UPDATE notification SET comment_status = ? WHERE comment_status = ?");
              $update_query->query(array(1, 0));
        }
         
         
        $query = $connect->query("SELECT * 
        FROM comments 
        ORDER BY comment_id DESC 
        LIMIT 5");
        $result = $query->execute;
        $output = '';
         
         
                    if($result->RowCount() > 0){
                        while($row = $result->fetch()){
                            $output  .=  '
                                <li>
                                    <a href="#">
                                        <strong>'.$row["comment_subject"].'</strong><br />
                                        <small><em>'.$row["comment_text"].'</em></small>
                                    </a>
                                </li>
                        ';
                        }
                    }else{
                        $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
                    }
         
         
                    $status_query = $con->prepare("SELECT * 
                        FROM comments 
                    WHERE comment_status = ?");
                    $result_query = $status_query->executre(array(0));
                    $count = $result_query->RowCount();
                    $data  =  array(
                        'notification'  =>  $output,
                        'unseen_notification'  =>  $count
                    );
                echo  json_encode($data);
            }
        
?>