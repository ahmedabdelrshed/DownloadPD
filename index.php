<?php 
require_once __DIR__ . '/pdf/autoload.php';
if(isset($_POST['text']) && isset($_POST['name'])){
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8']);
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
$texts = explode('.',$_POST['text']);
foreach($texts as $tr){
    $mpdf->WriteHTML($tr,\Mpdf\HTMLParserMode::HTML_BODY);
    $mpdf->WriteHTML("",\Mpdf\HTMLParserMode::HTML_BODY);
}

$mpdf->Output($_POST['name'],"I"); 
}
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>PDF</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    <script src="assets/js/script.js" defer></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            


            <div class="layout-page">
                <div class="my-container">
                    <div class="col-md-6">


                        <div class="card mb-4">
                            <h5 class="card-header">Enter The text to create pdf file : </h5>

                            
                            
                            <div class="card-body">
                                <div>

                                    <form method="POST" action="<?php $_SERVER['PHP_SELF']?>" ?>
                                        <style>
                                           
      textarea {
        resize: none; /* Disable resizing of the textarea */
      }
    </style>
    <script>
      function handleKeyPress(event) {
        if (event.keyCode === 13) {
          event.preventDefault(); // Prevent form submission
          var textarea = event.target;
          textarea.value += '\n'; // Append a new line character
        }
      }
    </script>
  </head>
  <body>
    <textarea name="text" onkeypress="handleKeyPress(event)" style = "font-size:18pt;height:420px;width:550px;" required></textarea>
  </body>
                                        <div class="mb-3">
                                          <label for="title">Name of the file : </label>
                                          <input type="text" name= 'name' required > 
                                        </div>
                                        <div class="form-actions">
                                            <div class="create">
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>    
                                            <button type="sumbit" class="btn rounded btn-success">DOWNLOAD</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- / Menu -->


    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <script src="assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>