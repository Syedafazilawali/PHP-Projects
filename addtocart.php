<?php
session_start();

$q=$_GET['quant'];




if(!empty($_SESSION['username']) ){
     $bid=$_GET['B_ID'];

      $con=mysqli_connect('localhost','root','','ebook');
      $q='select * from books where ID='.$bid;
      $result=$con->query($q);


    foreach($result as $value){
    $arr=array(
        'ID'=>$value['ID'],
		'b_name'=>$value['B_Name'],
        'prize'=>$value['Prize'],
        'b_image'=>$value['B_Image'],
        'quant'=>$_GET['quant']
        );

    }

//..................................................................................


     
          $counntt=($_SESSION['cart']);
            

           // $count=$_SESSION['ctn'];
		


            if(isset($_SESSION['cart'])){
	
                $check_ID=array_column($_SESSION['cart'],'ID');
                
                if(!in_array($bid,$check_ID)){
                $_SESSION['cart'][$counntt]=$arr;
                header('Location:showcart.php');
                
                    
                }
                else{
                    
                    echo "<script>alert('item alread exist');
                  window.location.href = 'books.php';
                    </script>";
                   
                  }
                }
                
                
            
                else{
                    $_SESSION['cart'][0]=$arr;
                    header('Location:showcart.php');
                
                    }


    

 }

else{
  
 
echo "<script>
alert('Login First'); 
window.location.href = 'Login/index.php';
                 
</script>";

}
?>