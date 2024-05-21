<?php

// Include Composer autoload file to load Resend SDK classes...
require_once 'C:\Users\alumno\Documents\proyecto\netflix\vendor\autoload.php';

// Assign a new Resend Client instance to $resend variable, which is automatically autoloaded...
$resend = Resend::client('re_TPPKWAXB_54DKvHzkZi2PArJyAabbQF4C');

try {
    $result = $resend->emails->send([
        'from' => 'Acme <onboarding@resend.dev>',
        'to' => ['ruizaviles.franciscojavier@loscerros.org'],
        'subject' => 'Hello world',
        'html' => '<strong>It works!</strong>',
    ]);
} catch (\Exception $e) {
    exit('Error: ' . $e->getMessage());
}

// Show the response of the sent email to be saved in a log...
echo $result->toJson();