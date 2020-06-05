<style media="screen">

body{
  font-family:lato;
  background: #eee;
  margin: 0;
  padding: 0;
}

#scroll-to{
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 40px;
  height: 40px;
  background: blue;
  transition: all 0.5s linear;
}

#scroll-to span{
  display: inline-block;
  position: relative;
  width:100%;
  height: 100%;
}
#scroll-to span::before,
#scroll-to span::after
{
  content: "";
  position: absolute;

}

#scroll-to span::after{
  width: 2px;
  height: 20px;
  background: #fff;
  top: 12px;
  left: 19.5px;

}
#scroll-to span::before
{
  width: 7px;
  height: 7px;
  border-top: 2px solid #fff;
  border-left: 2px solid #fff;
  transform: rotate(45deg);
  left: 16px;
  top: 11px;
}
.show-scrollTo{
  opacity: 1;
  /* display: block; */
}

.hide-scrollTo{
  opacity: 0;
  /* display: none; */

}

#scroll-to:hover{
  transform: translateY(-5px);
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
  $dir = "scripts/";

  $files = scandir($dir,1);

  // print_r($files);
  //
  // return false;
  $filesLength = count($files) - 2;

  $index = 0;

  $titans = array();

    $queries = $_SERVER['QUERY_STRING'];


  $pass = 0;
  $failed = 0;


  $error = "Query is not valid";
  $error_num = "404";
    if($queries !== "json" || $queries === "html"){

  echo "<div class='titans'> <p>Team<span>-</span>Titans</p> </div>";

  echo "<div class='container' id='header'>";
// echo round(25.22222222215,2);

  echo '<table class="main">';
    echo '<tr> <th>#</th> <th>Full Name</th> <th>Infomation</th> <th>Status</th> </tr>';
}


  while($index < $filesLength){

  $valid = false;

  if($queries !== "json" || $queries === "html"){
    echo "<tr class='divider'><td></td><td></td><td></td><td></td></tr>";
  }

  // print_r($dir.$files[$index]);
  //
  // return false;

  ob_flush();
  flush();
  // sleep(1);
    $array = explode('.', $dir.$files[$index]);
    $extension = end($array);

    // print_r($extension);

    switch ($extension) {
      case 'js':
      $output = exec('node '.$dir.$files[$index]);
      $valid = true;
        break;

      case 'php':
        $output = exec('php '.$dir.$files[$index]);
        $valid = true;
      break;

      case 'py':
       $output = exec('python3 '.$dir.$files[$index]);
       $valid = true;
      break;
    }


    if ($valid === false) {
      $failed++;
      $index++;
    }

    // if($output == ""){
    //
    //   $filesLength--;
    //   array_splice($files,$index,1);
    //   $index--;
    // }



    $full_match=[];
    $full_match_x=[];
    // preg_match_all("/(?<=this is)(.*)(?=with)|(?<=ID)(.*)(?=and)|(?<=email)(.*)(?=using)|(?<=using)(.*)(?=for)/", $return, $matchex);
    preg_match_all("/(?<=this is)(.*)(?=with)|(?<=ID)(.*)(?=and)|(?<=email)(.*)(?=using)|(?<=using)(.*)(?=for)/", $output, $matches);
    preg_match_all("/^Hello World, this is (.*) with HNGi7 ID (.*) and email (.*) using (.*) for stage 2 task$/",$output, $full_match);

    preg_match("/Hello World,\s+this\s+is\s+(([a-zA-Z.-]{1,}\s{1}){2,})\s*with\s+HNGi7\s+ID\s+(HNG-[A-Z0-9]{5})\s+and\s+email\s+([a-zA-Z0-9_.]+@[a-zA-Z]{4,}.[a-zA-Z.]{3,})\s+using\s+([a-zA-Z0-9]{3,})\s+for\s+stage\s+2\s+task/",$output, $full_match_x);


    $withoutMial = preg_replace('/(and\semail\s[a-zA-Z0-9._]+@[a-zA-Z]+.[a-z.]{3,})/','',$output);


    // $withoutMial = preg_replace('/(and\semail\s\w+\.{0,1}\w+\@(gmail|yahoo|hotmail).(com|co.uk))/','',$output);




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

    if(count($full_match_x[0]) == 1){
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

  $num = $index + 1;
  $anim = $num/(7).s;

  // if(strlen($output) === 0 ){
  //   $num = $num - 1;
  //   // $index--;
  // }

  if($status === "fail"){
    $withoutMial = $output;
  }

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


  $numfiles = $filesLength;

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
        echo "Fail : ".$failed;
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

  echo "<div id='scroll-to' class='hide-scrollTo'><span></span></div>";


}


  if($queries === "json"){

    $fineJson = json_encode($titans, JSON_PRETTY_PRINT);
    ob_flush();
    flush();
    echo '<pre>'.$fineJson.'</pre>';
    return false;
  }



 ?>


 <script type="text/javascript">

  let scrollTo = document.getElementById('scroll-to');


  scrollTo.addEventListener('click',(e)=>{
    scrollToMe('header');
  });

 function scrollToMe(id){

         document.getElementById(id).scrollIntoView({
             behavior: 'smooth'
         });

 }

     window.onscroll = function() {myFunction()};
     window.onload = function() {myFunction()};

    function myFunction() {
      if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
        scrollTo.className = "show-scrollTo";
      } else {
      scrollTo.className = "hide-scrollTo";
      }
    }


 </script>
