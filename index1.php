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
    $output =[];
    switch(pathinfo($script)['extension']){
        case 'py':
             exec("python ".$script_location, $output);
        break; 
        case 'js':
            exec("node ".$script_location,  $output);
        case 'php':
            exec("php ".$script_location,  $output);
        break;
    }

    $full_match=[];
    preg_match_all("/(?<=this is)(.*)(?=with)|(?<=ID)(.*)(?=and)|(?<=email)(.*)(?=using)|(?<=using)(.*)(?=for)/", $output[0], $matches);
    preg_match_all("/Hello World, this is(.*)with HNGi7 ID(.*)and email(.*)using(.*)for stage 2 task/",$output[0], $full_match);
    $intern = new stdClass();
    
    $intern->file= $script;
    $intern->output = $output[0];
    $intern->name = $matches[0][0];
    $intern->id = $matches[0][1];
    $intern->email = $matches[0][2];
    $intern->language = $matches[0][3];
    array_push($out, $intern);
    if(count($full_match[0]) == 1 ){
        $intern->status= "pass";
    }
    else{
        $intern->status ="failed";
    }
    
}

// in the given task it was stated that the json will be gotten through index.php?json..hence the code below
if ($_SERVER['QUERY_STRING'] == "json") {
    //  return output in json format
    echo json_encode($out);
}

