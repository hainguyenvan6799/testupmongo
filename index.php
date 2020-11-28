<?php 
	require_once "./vendor/autoload.php";
$client = new MongoDB\Client(
    'mongodb+srv://hainguyenvan6799:FpStNIkhVebgmica@cluster0.kyvzw.mongodb.net/phongtrodb?retryWrites=true&w=majority');

$db = $client->phongtrodb;
	// print_r($db->test);
	$testde = $db->test->find();
	foreach($testde as $t)
	{
		echo $t->ab;
	}
// echo "acb";
	// $insertOneResult = $collection->insertOne([
	// 		"user_name" => "admin02",
	// 		"email" => "cde@gmail.com",
	// 		"password" => "admin",
	// 		"favorite" => [
	// 			"sport" => "swimming",
	// 			"food" => "chicken"
	// 		]
	// 	]);

	// $document = $collection->findOne(
	// 	[
	// 		"user_name" => "admin02"
	// 	],
	// 	[
	// 		"projection" => ["_id" => 0]
	// 	]
	// );
	// // echo $document->favorite->sport;
	// // echo $document->_id;

	// // sort and limit
	// $cursor = $collection->find(["user_name" => "admin02"], [
	// 	"limit" => 2,
	// 	"sort" => ['email' => 1] // ['email' => -1] đối với -1 là giảm dần
	// ]);

	// // regular expressions:
	// $regex = $collection->find([
	// 	'user_name' => ['$regex' => '^admin', '$options' => 'i']
	// ]);

	// $aggregate = $collection->aggregate([
	// 	['$group' => ['_id'=> '$user_name', 'count' => ['$sum' => 1]]]
	// ]);	

	// // updateMany, updateOne
	// // $update = $collection->updateMany(
	// // 	['user_name' => 'admin02'],
	// // 	['$set' => ['password' => 'admin123456']]
	// // );

	// // update with upserted option
	// // $replace = $collection->updateOne(
	// // 	['user_name' => 'hai_admin123456'],
	// // 	['$set' => ["email" => 'qakhudaubuon12@gmail.com']],
	// // 	['upsert' => true]
	// // );
	// // printf('Matched %d document', $replace->getMatchedCount());
	// // printf('Updated %d document', $replace->getModifiedCount());
	// // printf('Upserted %d document', $replace->getUpsertedCount());
	// // echo '<hr>';

	// $replace = $collection->replaceOne(
	// 	['user_name' => 'hai_admin123456'],
	// 	['email' => 'hainguyenvan6799@gmail.com', 'user_name' => 'hai_administrator']
	// );

	// printf("Matched %d document", $replace->getMatchedCount());
	// printf("Updated %d document", $replace->getModifiedCount());

	// echo '<hr>';

	// foreach($cursor as $c)
	// {
	// 	echo $c->user_name . '<br>';
	// 	echo $c->password . '<br>';
	// }
	// echo '<hr>';
	// foreach($regex as $r)
	// {
	// 	echo $r->user_name . '<br>';
	// }
	// echo '<hr>';
	// foreach($aggregate as $a)
	// {
	// 	echo $a["_id"] . '<br>';
	// 	echo $a["count"];
	// }
 ?>