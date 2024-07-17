<?php
$getdatas = file_get_contents("l29studentdb.json");
echo $getdatas;
echo "<hr/>";

$datasde =json_decode($getdatas,true); //array
echo "<pre>".print_r($datasde,true)."</pre>";
echo "<hr/>";


$studentcount;

//READ
foreach($datasde as $datas){
    foreach($datas as $key => $data){
        echo $key ." = " .$data ."<br/>";

    }
    $studentcount++;
    echo "<hr/>";
}
echo "Total student count =".$studentcount;

//.........................................................
//CRETE
// $newdatas =[
//     [
//         "id"=>8,
//         "name"=>"lin lin",
//         "city"=>"mandalay",
//     ],
//     [
//         "id"=>9,
//         "name"=>"chi thu wai",
//         "city"=>"yangon",
//     ],
//     [
//         "id"=>10,
//         "name"=>"honey nway oo",
//         "city"=>"yangon",
//     ],
//     ];

// foreach($newdatas as $newdata ) {
//     array_push($datasde,$newdata);
//     file_put_contents("./l29.studentdb.json",json_encode($datasde));
//     # code...
// }
//.........................................................

// ==>Update

foreach ($datasde as $key => $datas) {
    # code...//
    //echo $datas
    //echo "<pre>".print_r($datasde,true)."</pre>";
    //echo $key ;// 0 to 9

     //echo "<pre>".print_r($datasde[key],true)."</pre>";
    //echo $key ;// 1 to 10

    if($datas["id"] == 9){
        //id number 9 = index 9
        // $datasde[$key][$name]="chit su wai";

        $datasde[8]["name"]="sandar";
    }

};

    file_put_contents("./l29.studentdb.json",json_encode($datasde));
//.........................................................

// ==>Delete
$idxs =[];
//select index to delete
foreach ($datasde as $key => $datas) {

    // echo "<pre>".print_r($datasde,true)."</pre>";
    if($datas['id']===10){
        $idxs[] = $key;//idex number 0

    }

};

//delete
foreach ($idxs as $idx) {
    unset($datasde[$idx]);
    # code...
}

//do save
file_put_contents("./l29.studentdb.json",json_encode($datasde));
?>