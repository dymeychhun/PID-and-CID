<?php

if (isset($_POST['submit'])) {

    $keycheck = $_POST['key'];

    $url = "https://kichhoat24h.com/user-api/check-key?keys=$keycheck&token=VLbuvBpvUW1XZUJaay8vbDBiMGc3Yzg3Q1AvSWlCeGkrQmF3MGZsMUdkRVNieTFKaz0&mode=0";
  
    // Set up stream context options to handle CORS
    $options = [
      'http' => [
        'method' => 'GET',
        'header' => "Origin: *" // Replace with your frontend domain
      ]
    ];
  
    $context = stream_context_create($options);
    
    try {
      $data = file_get_contents($url, false, $context);
  
     echo($data);
  
      // You can now work with the fetched data here
    //   $jsonData = json_decode($data, true);
    //   print_r($jsonData);
  
      // Do whatever you need to do with the fetched data
    } catch (Exception $e) {
      echo "An error occurred: " . $e->getMessage();
    }
}
?>
