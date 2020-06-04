<style media="screen">

body{
  font-family:lato;
  background: #eee;
  margin: 0;
  padding: 0;
}

.hidebar{
  display: none;
}

.showbar{
  display: flex;
}

.chart{
  display: flex;
  justify-content: center;
  flex-direction: column;
  position: fixed;
  top: 70px;
  right: 5px;
}

.breakdown{
  background: black;
  color: #fff;
  padding: 10px;
  border-radius:20px 6px 20px 6px;
  width: 150px;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  animation-name: magicslide;
  animation-fill-mode: forwards;
  animation-duration: 1s;
}

.breakdown ~ span{
  animation-name: magicslide;
  animation-fill-mode: forwards;
  animation-duration: 1s;
  animation-delay: 0.5s;
  opacity: 0;
  margin-bottom: 10px;
}

.chart-desc{
  position: relative;
  margin-left: 20px;
  margin-top: 5px;
  transform: translateY(20px);
}

.chart-desc::before{
  content: "";
  position: absolute;
  left: -20px;
  top: 1px;
  width: 15px;
  height: 15px;
  border-radius: 2px;
  background: black;
}

.bar-div + p.chart-desc::before{
  background: #24a824;
}

.bar-div + p.chart-desc + p.chart-desc::before{
  background: #e02727;
}



.titans{
  left: 0;
  right: 0;
  top: 0;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 5px;
  background-color: #000;
  /* background: linear-gradient(to right, rgb(0, 4, 40), rgb(0, 78, 146)); */
  color: #fff;
  font-size: 1.8rem;
  font-weight: bold;
  position: fixed;
  font-family: monospace;
    box-shadow:0 2px 5px #ddd;
    z-index: 10;
}

.titans p span:nth-of-type(1){
  color: blue;
  margin-left: 2px;
}

.titans p{
  width: 200px;
  position: relative;
  text-transform: uppercase;
}

.titans p::after{
  content: "";
  position: absolute;
  bottom: -5px;
  height: 4px;
  width: 50px;
  right: 45px;
  background-color: blue;
}

.container{
  display: flex;
  justify-content: space-between;
  flex-flow: row wrap-reverse;
  /* min-height: 100vh; */
  margin-bottom: 60px;
  margin-top: 60px;
}

.bar-div{
  width: 220px;
  height: 250px;
  display: flex;
  justify-content: space-between;
  text-align: center;
  position: relative;
  border-left: 2px solid #ccc;
  border-bottom: 2px solid #ccc;
  margin-right: 20px;
  /* margin-top: 50px; */
  background-image: url('https://i.ya-webdesign.com/images/graph-paper-background-png-4.png');
  background-position: center;
  /* background-repeat: no-repeat; */
  background-size: contain;
}

.bar-pass, .bar-fail{
  position: absolute;
  bottom: 0;
  width: 40px;
  color: black;
  font-size: 0.9rem;
  font-weight: bold;
  /* display: flex; */
  justify-content: center;
  align-items: flex-start;
  padding: 5px;
}

.bar-div p{
  transform: translate(-7px,-35px);
}


.bar-pass{
  border-top: 6px solid #9ff691;
  border-left: 16px solid #006800;
  background: #24a824;
  left: 35px;
  opacity: 0;
  animation-name: magicht;
  animation-fill-mode: forwards;
  animation-duration: 1s;
}

.bar-fail{
  border-top: 6px solid #f08c8c;
  border-left: 16px solid #9d0303;
  background: #e02727;
  left: 130px;
  opacity: 0;
  animation-name: magicht;
  animation-fill-mode: forwards;
  animation-duration: 1s;
  animation-delay: 0.5s;
  padding: 5px;
}

tr.divider td{
  height: 7px;
  padding: 0;
}
tr.whoiam{
   height: 50px;
   transition: all 0.5s ease-in 0.1s;
   color: #fff;
   opacity: 0;
   animation-name: magicrow;
   animation-fill-mode: forwards;
   animation-duration: 0.5s;
   /* border-top: 5px solid #eee; */
}
table{
  /* box-shadow:0 0 8px #ccc; */
  border-radius:6px;
  display: relative;
  background-color: #eee;
  width: 80vw;
  min-width: 80vw;
  padding: 10px;
}
tr.whoiam td{
  word-wrap: break-word;
}
tr td{
  border-radius:20px 6px 20px 6px;
  padding:15px;
}

tr.whoiam td:nth-of-type(2){
  width: 150px;
  max-width: 200px;
}

tr th:nth-of-type(1){
  border-radius: 5px 0 0 0;
}
tr th:nth-of-type(4){
  border-radius: 0 5px 0 0;
}


tr.whoiam:hover{
  transform: scale(1.005);
}
tr th{
  background-color: black;
  color: #fff;
  padding: 10px;
  font-size: 1.1rem;
}
.fail{
  background-color: #e02727c9;
}
tr.whoiam td{
  position: relative;
  font-size: 0.9rem;
  font-weight: bold;
}

.pass{
  background-color: #24a824c2;
}

.error-div{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;

}
.error, .error-num{
  color: #ccc;
}
.error{
  display: inline-block;
  margin-top: -200px;
  font-size: 1.5rem;
}
.error-num{
  font-size: 10.5rem;
  font-weight: 700;
}

tr.whoiam td:hover{
  /* background-color: #e91e63; */
  box-shadow:0 5px 15px #ccc;
}

@keyframes  magicrow {
  0%{ opacity: 0; transform: scale(0.9);}
  50%{ opacity: 1; transform: scale(1.005);}
  100%{ opacity: 1; transform: scale(1);}
}

@keyframes  magicht {
  0%{ opacity: 0; height: 0;}
  50%{ opacity: 1; height: 10px;}
  100%{ opacity: 1;}
}


@keyframes  magicslide {
  0%{ opacity: 0; transform: translateX(30px);}
  50%{ opacity: 1;transform: translateX(10px);}
  100%{ opacity: 1; transform: translateX(0);}
}
</style>


<?php
  $dir = "./scripts/";

  $files = scandir($dir);
  $filesLength = count($files);

  $index = 2;

  $titans = array();

    $queries = $_SERVER['QUERY_STRING'];


  $pass = 0;
  $failed = 0;


  $error = "Query is not valid";
  $error_num = "404";
    if($queries !== "json" || $queries === "html"){

  echo "<div class='titans'> <p>Team<span>-</span>Titans</p> </div>";

  echo "<div class='container'>";
// echo round(25.22222222215,2);

  echo '<table class="main">';
    echo '<tr> <th>#</th> <th>Full Name</th> <th>Infomation</th> <th>Status</th> </tr>';
}
  while($index < $filesLength){

  if($queries !== "json" || $queries === "html"){
    echo "<tr class='divider'><td></td><td></td><td></td><td></td></tr>";
  }

  ob_flush();
  flush();
  // sleep(1);
    $array = explode('.', $dir.$files[$index]);
    $extension = end($array);


    switch ($extension) {
      case 'js':
      $output = exec('node '.$dir.$files[$index]);
        break;

      case 'php':
      $output = exec('php '.$dir.$files[$index]);
      break;

      case 'py':
      $output = exec('python '.$dir.$files[$index]);
      break;

      default:
        $output = "nothing do you jare";
        break;
    }

    $full_match=[];
    preg_match_all("/(?<=this is)(.*)(?=with)|(?<=ID)(.*)(?=and)|(?<=email)(.*)(?=using)|(?<=using)(.*)(?=for)/", $output, $matches);
    preg_match_all("/Hello World, this is(.*)with HNGi7 ID(.*)and email(.*)using(.*)for stage 2 task/",$output, $full_match);


    //
    // $newout =  str_replace(array( '[', ']' ), '', $output);
    //
    $withoutMial = preg_replace('/(and\semail\s\w+\.{0,1}\w+\@(gmail|yahoo|hotmail).com)/','',$output);

    // print_r($withoutMial);

    $status = "fail";


    //
    // $words = array("Hello World,", "this is", "with HNGi7 ID", "and email", "using", "for stage 2 task");
    //
    // $x = 0;
    // while ($x <= count($words)-1) {
    //   if(strpos(strtolower($output), strtolower($words[$x])) !== false){
    //     $status = "pass";
    //   }else{
    //     $status = "failed";
    //     break;
    //   }
    //   $x++;
    // }

    if(count($full_match[0]) == 1){
      // array_push($pass,"okay");
      $status = "pass";
      $pass++;
    }else{
      // array_push($failed,"failed");
      $status = "fail";
      $failed++;
    }


    $jsonForm = array(
      "file"=>trim($files[$index]),
      "output"=> trim($withoutMial),
      "name"=>trim($matches[0][0]),
      "id"=>trim($matches[0][1]),
      "email"=>trim($matches[0][2]),
      "language"=>trim($matches[0][3]),
      "status"=>trim($status)
    );
    array_push($titans, $jsonForm);


  // print_r($newout);

  $num = $index - 1;
  $anim = $num/(7).s;

    if($queries !== "json" || $queries === "html"){
      sleep(0.5);
      echo "<tr class='whoiam  $status' style='animation-delay: $anim'>";
      echo '<td>'. $num .'</td>';
      echo '<td>'. trim($matches[0][0]) .'</td>';
      echo '<td>'. trim($withoutMial) .'</td>';
      echo '<td>'. trim($status) .'</td>';
      echo '</tr>';
      // echo "<br/>";
    }

    $index++;

  }

  function hello(){
         echo "<br/>";
        echo "Hello";
        echo "<br/>";
      }


  $numfiles = $filesLength - 2;

  $failpercentage = round((($failed/$numfiles) * 100),2).'%';
  $passpercentage = round((($pass/$numfiles) * 100),2).'%';

  if($queries !== "json" || $queries === "html"){

  echo '</table>';

  echo "<div class='chart'>";
      echo "<p class='breakdown'>";
        echo "Total ".$numfiles;
      echo "</p>";
      echo "<span>";
        echo "Pass : ".$pass;
      echo "</span>";
      echo "<span>";
        echo "Failed :".$fail;
      echo "</span>";
    echo "<div class='bar-div'>";
        echo "<div class='bar-pass' style='height: $passpercentage'>";
           echo "<p>";
             echo $passpercentage;
           echo "</p>";
        echo "</div>";
        echo "<div class='bar-fail' style='height: $failpercentage'>";
            echo "<p>";
             echo $failpercentage;
           echo "</p>";
        echo "</div>";
    echo "</div>";

    echo "<p class='chart-desc'> Percentage of passes</p>";
    echo "<p class='chart-desc'> Percentage of fails</p>";
    echo "</div>";


  echo "</div>";


}


  if($queries === "json"){

    $fineJson = json_encode($titans, JSON_PRETTY_PRINT);
    ob_flush();
    flush();
    echo '<pre>'.$fineJson.'</pre>';
    return false;
  }



 ?>
