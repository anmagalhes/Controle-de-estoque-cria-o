<?php  

             require  ('./Upload.php');

 try {



            $upload = new Upload;

            if (isset($_FILES['XML']) && !empty($_FILES['XML']) && $_FILES['XML']['error'] != 4) {

                $upload->set()
                        
                        ->xml()
                  
                        ->path("uploads/")
                        ->moveFile('XML');

                if (!$upload->getErros()) {
                $xml =simplexml_load_file('./Uploads/'.$upload->getNamemoveFile());
              
                } else {
                    echo $upload->getErros();
                }
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }

?>




<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8">

	<title>CONTROLE DE ESTOQUE</title>

 <!– CASO VENHA PRECISAR UMA VISAÕ MOBILE FICAR REPROSIVO A VISÃO –>

  <meta name="http-equi =X-ua-compatili" content="width=device-width, initial-scale=1">

	<meta name="viewport" content="width=device-width, initial-scale=1">

 <!– Ultilização do Bootstrap css - https://getbootstrap.com/docs/4.5/getting-started/introduction/ –>

<!– Formato para intregar online –>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="css/login.css" >

</head>

<body>


<div CLASS = "CONTANIER" >

 <div Class = "Mt-4" >


  <form enctype="multipart/form-data" method="post" action="">
    <input type="file" name="XML[]" multiple="">
    <input type="submit" value="Fazer Upload">
</form>

 <div Class = "ROW">

<div>

<div>

<body>

</html>