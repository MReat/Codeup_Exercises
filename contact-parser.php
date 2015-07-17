<?php

function parseContacts($filename)
{

	$contacts = [];

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $initialContacts = explode(PHP_EOL, $contents);
    foreach($initialContacts as $key => $contact) {
	    $contactsArray = explode('|', $contact);

	    // Option 1
	    // $contacts[$key]['name'] = $contactsArray[0];
	    // $contacts[$key]['number'] = formatNumber($contactsArray[1]);

	    // Option 2
	    $contacts[] = array(
	    	'name' => $contactsArray[0],
	    	'number' => formatNumber($contactsArray[1])
    	);
	   
    	
    }
    // echo($nextContacts);
    fclose($handle);

    return $contacts;
}

function formatNumber ($number)
{
	return '(' . substr($number, 0, 3) . ') ' . substr($number, 3, 3) . '-' . substr($number, 6, 4);
}

var_dump(parseContacts('contacts.txt'));
