<?php

require_once(__DIR__ . '/crest.php');

/**
 * $_REQUEST['message_id'] in  handler.php
 */
$messageId = '520108d3dabbe6e98586549f467cab8d';

/**
 * sms status: delivered, undelivered, failed
 */
$status = 'delivered';

$result = CRest::call(
	'messageservice.message.status.update',
	[
		'CODE' => 'fastsms',
		'message_id' => $messageId,
		'status' => $status,
	]
);

echo "<pre>";
print_r($result);
echo "</pre>";

if (isset($result['error']))
{
	// print error
}