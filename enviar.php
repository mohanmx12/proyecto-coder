<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>
    <link rel="stylesheet" href="../SASS/style.css">
</head>
<body class="fondo">
                <?php
                          $myemail = 'milan.mohanna@gmail.com';
                          $name = $_POST['name'];
                          $name = $_POST['apellido'];
                          $email = $_POST['email'];
                          $name = $_POST['phone'];
                          $message = $_POST['message'];
                          $to = $myemail;
                          $email_subject = "Nuevo mensaje: $subject";
                          $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje:
                          $message";
                          $headers = "From: $email";
                          mail($to, $email_subject, $email_body, $headers);
                          echo "El mensaje se ha enviado correctamente";
                          ?>

                    <form class="form-horizontal" method="post" action="enviar.php">
                        <fieldset>
                         
                          
                            <legend class="text-center header">Contactanos!</legend>
                           
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="lname" name="apellido" type="text" placeholder="Apeliido" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Email"
                                     class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="message" type="text" name="message" placeholder="Escribi tu mensaje" rows="7"></textarea>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-lg">ENVIAR<imput type="submit" value="ENVIAR" ></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                
</body>
</html>