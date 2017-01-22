<?php
require 'vendor/autoload.php';

date_default_timezone_set('UTC');

use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\DynamoDb\Marshaler;

$sdk = new Aws\Sdk([
    'region'   => 'us-east-1',
    'version'  => 'latest'
]);

$dynamodb = $sdk->createDynamoDb();
$marshaler = new Marshaler();

$tableName = 'interviewQuestions';

// $year = 2015;
// $title = 'The Big New Movie';
$question = 'Describe your experiences with Java';

// $item = $marshaler->marshalJson('
//     {
//         "year": ' . $year . ',
//         "title": "' . $title . '",
//         "info": {
//             "plot": "Nothing happens at all.",
//             "rating": 0
//         }
//     }
// ');

$item = $marshaler->marshalJson('
    {
        "question": "' . $question . '"
    }
');

$params = [
    'TableName' => 'interviewQuestions',
    'Item' => $item
];


try {
    $result = $dynamodb->putItem($params);
    echo "Added item: $question\n";

} catch (DynamoDbException $e) {
    echo "Unable to add item:\n";
    echo $e->getMessage() . "\n";
}

?>
