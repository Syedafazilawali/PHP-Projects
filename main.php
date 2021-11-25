<?php
$con=mysqli_connect('localhost','root','','ebook');

//...................................Contact..............................................
if($_REQUEST['method']=='contact'){

    extract($_REQUEST);
    
    $query=("insert into contact values(0,'$Name','$Email','$Sub','$Msg')");

    $result=$con->query($query);
    if($result){
echo('Thanks to contact us');
    }
    else{
        echo('Fail');
            }
}

//.......................................Book..............................................
if($_REQUEST['method']=='gatallbooks'){

    extract($_REQUEST);

    $q="select * from books ORDER BY ID desc";

    $result=$con->query($q);
    $arr=array();
    $i=0;

    while($row=mysqli_fetch_assoc($result)){

        $arr[$i]=$row;
        $i++;
    }
    echo(json_encode($arr));

}


//..........................................single book............................................


if($_REQUEST['method']=='singlebook'){

    extract($_REQUEST);


$sbq="select * from books where ID=".$B_ID;

$sbresult=$con->query($sbq);
$count= mysqli_num_rows($sbresult);

if($count!=0){

    $aarr=array();
    $i=0;

    while($roow=mysqli_fetch_assoc($sbresult)){
        $aarr[$i]=$roow;
        $i++;
    }

    echo(json_encode($aarr));


}

}


//.......................................Search Book..............................................
if($_REQUEST['method']=='searchbooks'){
extract($_REQUEST);

$q="select * from books where B_Name like '$Sname%'";

$resultt=$con->query($q);


$arr=array();
$i=0;

while($row=mysqli_fetch_assoc($resultt)){

    $arr[$i]=$row;
    $i++;
}
echo(json_encode($arr));

}

?>