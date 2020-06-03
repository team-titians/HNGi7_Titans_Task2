<?php

// get al files from scirpts folder
$scripts_init = scandir("scripts/");
$scripts = array_splice($scripts_init, 2); // the first two index contain "." and ".." which is not needed
$out = [];

//loop through all files in directory and run based on file extension
foreach($scripts as $script){
    $matches = [];
    $script_location ="scripts/".$script;
    $temp_value="";
    switch(pathinfo($script)['extension']){
        case 'py':
             $temp_value = exec("python ".$script_location);
        break; 
        case 'js':
            $temp_value = exec("node ".$script_location, $output);
        case 'php':
            $temp_value = exec("php ".$script_location, $output);
        break;
    }
    // get an array of detail for a user using regular expression 
    preg_match_all("/\[(.*?)\]/", $temp_value, $matches);
    $intern = new stdClass();
    $intern->name = $matches[0][0]; 
    $intern->id = $matches[0][1] ; 
    $intern->language = $matches[0][2] ; 
    array_push($out, $intern);

}


// in the given task it was stated that the json will be gotten through index.php?json..hence the code below
if ($_SERVER['QUERY_STRING'] == "json") {
    //  return output in json format
    echo json_encode($out);
}

