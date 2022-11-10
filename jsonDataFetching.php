<?php

$ch = curl_init();

$url = "https://dummyjson.com/products/search?q=Laptop";
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$resp = curl_exec($ch);
// print_r(($resp)."\n");
// echo"<pre>";
// print_r(gettype($resp));
// print_r($resp);
// echo"**********************************************************************************"."<br>";
if($e =  curl_error($ch)){
    echo $e;
}
else{
    $decode = json_decode($resp);
    $pro = $decode->products;
    $array = json_decode(json_encode($pro),true);

    // echo "<pre>";
    // print_r($array);
  
    // CSV file name => geeks.csv
    $csv = 'laptop.csv';
       
    // File pointer in writable mode
    $file_pointer = fopen($csv, 'w');
       
    // Traverse through the associative
    // array using for each loop
    $csv_header = array("Title","Price","Brand");
    fputcsv($file_pointer,$csv_header);
    foreach($array as $i){
          $csv_data = array(
            "Title" => $i["title"],
            "Price"  => $i["price"],
            "Brand"  => $i["brand"]
          );
        // Write the data to the CSV file
        fputcsv($file_pointer, $csv_data);
    }
    // Close the file pointer.
    fclose($file_pointer);
      
}
curl_close($ch);
?>