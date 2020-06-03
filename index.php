<?php
  class FileReader {
    public $interns = [];

    public function __construct()
    {
        $teamScripts = scandir('./scripts');
        $teamScripts = array_splice($teamScripts, 2);
        $result = '';

        foreach ($teamScripts as $teamScript) {
          $fileExtension = pathinfo($teamScript)['extension'];

          $teamScript = './scripts/' . $teamScript;
          switch ($fileExtension) {
            case 'php':
                $result = $this->executePhp($teamScript);
              break;
            case 'js':
                $result = $this->executeJavascript($teamScript);
              break;
            case 'py':
                $result = $this->executePython($teamScript);
              break;
            default:
              // Do Nothing.........
              break;
          }

          if ($result) {
            array_push($this->interns, $result);
          }

        }
    }

    public function executePhp($file)
    {
      $command = 'php -f ' . $file;

      exec($command, $output);

      return $this->validator($output[0]);
    }

    public function executeJavascript($file)
    {
      $command = 'node  ' . $file;

      exec($command, $output);

      return $this->validator($output[0]);
    }

    public function executePython($file)
    {
      $command = 'python3 ' . $file;

      exec($command, $output);

      return $this->validator($output[0]);
    }

    public function validator($data)
    {
      $pattern = "/Hello World, this is .* with HNGi7 ID .* using .* for stage 2 task/";
      if (preg_match($pattern, $data)) {
          $name = explode('is', $data);
          $name = array_splice($name, 2);
          $name = explode('with', $name[0]);
          $name = $name[0];
          return ucwords($name);
      }
      return false;
    }

    public function htmlResponse()
    {
      $forEach = function($interns) {
        $response = '';
        foreach ($interns as $intern) {
          $response .= "
          <div class='col-xs-12 col-sm-12 col-md-12 col-xl-4 col-lg-4'>
            <div class='card shadow-lg p-3 mb-5 bg-white rounded'>
              <div class='news_title'>
                <h3>Intern Name</h3>
              </div>
              <div class='news_body'>
                <p>{$intern}</p>
              </div>
            </div>
          </div>";
        }
        return $response;
      };

      $html = <<<HTML
          <!DOCTYPE html>
          <html lang="en"><head>
          <title>Team Titans | Task 2</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        </head>
        <body data-gr-c-s-loaded="true">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
              <a class="navbar-brand text-white" href="#">Team Titans</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-white" href="">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="?query">Interns JSON</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <section class="mt-4">
            <div class="container">
              <div class="row">
                {$forEach($this->interns)}
              </div>
            </div>
          </section>

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        </body>
      </html>
      HTML;
      return $html;
    }

  }

  $FileReader = new FileReader;
  if (isset($_GET['query'])) {
    if (count($FileReader->interns) > 0) {
      header("Content-Type: application/json;charset=utf-8");
      echo json_encode((Object) $FileReader->interns);
    } else {
      header("Content-Type: application/json;charset=utf-8");
      echo json_encode(new stdClass());
    }
  } else {
    if (count($FileReader->interns) > 0) {
      echo $FileReader->htmlResponse();
    } else {
      header("Content-Type: application/json;charset=utf-8");
      echo json_encode(new stdClass());
    }
  }
 ?>
