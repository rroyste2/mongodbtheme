<?php

try {  

// open connection to MongoDB server  

//$conn = new Mongo('localhost');  

// access database  

$db = $conn->themeparks;  

// access collection  

$collection = $db->themeparks;  
// formulate AND query  

$criteria = array(  

'quantity' => 30,  

'price' => 0.5  

 );  

// retrieve only 'name' and 'price' keys  

$fields = array('name', 'price');  

// execute query  

$cursor = $park->find($name);  

// iterate through the result set  

// print each document  

echo $cursor->count() . ' document(s) found. <br/>';    

foreach ($cursor as $obj) {  

echo 'Name: ' . $obj['name'] . '<br/>';  

echo 'Price: ' . $obj['price'] . '<br/>';  
echo '<br/>';  

}  

// disconnect from server  

$conn->close();  

} catch (MongoConnectionException $e) {  

die('Error connecting to MongoDB server');  

} catch (MongoException $e) {  

die('Error: ' . $e->getMessage());  

}  

?> 
