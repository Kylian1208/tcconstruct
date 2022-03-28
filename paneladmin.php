<?php 
    require("db/crudusertraitement.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/crudadmin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



    <title>Panel - Admin</title>
</head>

<body>

    <?php include("header.php"); ?>

    <!-- panel home admin -->

    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Home Admin</h3>
                        <p><a href="index.php">Admin</a> / Panel - BACK ADMIN </p>
                        <p><br>Admin </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- panel admin -->

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Panel <b>Users</b></h2>
                        </div>
                        <div class="success" name="msgsucces"></div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Ajouter User</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                    class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <!-- attribut des tables header du tableaux -->
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Action</th>
                            <th>ID Users</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Mail</th>
                            <th>phone</th>
                            <th>Adresse</th>
                            <th>Photo</th>
                            <th>Code postal</th>
                            <th>ville</th>
                            <th>Nom rôle</th>
                        </tr>
                    </thead>
                    <tbody>


                        <!-- données des table  -->
                        <?php while($alluser = $allusers->fetch()){?>
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td>
                                <a href="#editEmployeeModal<?php echo $alluser["id_users"] ?>" class="edit" data-toggle="modal">


                                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteEmployeeModalz" class="delete" data-toggle="modal"><i
                                        class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                            <td><?php echo $alluser["id_users"]?></td>
                            <td><?php echo $alluser["nom"]?></td>
                            <td><?php echo $alluser["prenom"]?></td>
                            <td><?php echo $alluser["mail"]?></td>
                            <td><?php echo $alluser["phone"]?></td>
                            <td><?php echo $alluser["adresse"]?></td>
                            <td><?php echo $alluser["photo"]?></td>
                            <td><?php echo $alluser["code_postal"]?></td>
                            <td><?php echo $alluser["ville"]?></td>
                            <td><?php echo $alluser["nom_role"]?></td>

                        </tr>
                        <!-- EDIT FORM -->
                        <div id="editEmployeeModal<?php echo $alluser["id_users"] ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Users</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" class="form-control" name="nom_edit"
                                                    required></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Prénom</label>
                                                <input type="text" class="form-control" name="prenom_edit"
                                                    required></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Mail</label>
                                                <input type="email" class="form-control" name="mail_edit"
                                                    required></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" class="form-control" name="mdp_edit"
                                                    required></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Confirmez votre Mot de passe</label>
                                                <input type="password" class="form-control" name="mdpconf_edit"
                                                    required></input>
                                            </div>

                                            <div class="form-group">
                                                <label>Adresse</label>
                                                <input type="text" class="form-control" name="adresse_edit"
                                                    required></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Photo</label>
                                                <input type="text" class="form-control" name="photo_edit"
                                                    required></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Code postal</label>
                                                <input type="text" class="form-control" name="postal_edit"
                                                    required></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Ville</label>
                                                <input type="text" class="form-control" name="ville_edit"
                                                    required></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Nom rôle</label>
                                                <input type="text" class="form-control" name="role_edit"
                                                    required></input>
                                            </div>
                                            <input type="hidden" id="idUserInput" name="id_users"
                                                value="<?php echo $alluser["id_users"] ?>">
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal"
                                                    value="Cancel">
                                                <input type="submit" class="btn btn-success" value="Add" name="adduser">
                                            </div>
                                        </div>

                                    </form>
                                    <!-- Delete Modal HTML -->
                                    <div id="deleteEmployeeModal" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form>
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Supprimer user</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>êtes vous sûre de vouloir supprimer ?</p>
                                                        <p class="text-warning"><small>Cette Action supprimera</small>
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="button" class="btn btn-default"
                                                            data-dismiss="modal" value="Cancel">
                                                        <input type="submit" class="btn btn-danger" value="Delete">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Modal HTML -->

    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">


                <form method="POST" action="db/adduser.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Add User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="erreur" name="msgnotif"></div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom_us" required>
                        </div>
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" class="form-control" name="prenom_us" required>
                        </div>
                        <div class="form-group">
                            <label>Mail</label>
                            <input type="email" class="form-control" name="mail_us" required>
                        </div>
                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" class="form-control" name="adresse_us" required>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="text" class="form-control" name="photo_us" required>
                        </div>
                        <div class="form-group">
                            <label>Code postal</label>
                            <input type="text" class="form-control" name="postal_us" required>
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="tel" name="phone_us" id="phone" placeholder="Format : 06 06 06 06 06"
                                pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>
                        </div>
                        <div class="form-group">
                            <label>Ville</label>
                            <input type="text" class="form-control" name="ville_us" required>
                        </div>
                        <div class="form-group">
                            <label>Nom rôle</label>
                            <input type="text" class="form-control" name="role_us" required>
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" name="mdp_us" required></input>
                        </div>

                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add" name="adduser">
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>



    <!-- contact_us_start  -->
    <?php include('footer.php'); ?>



    <!-- JS here -->
    <script src="js/modal.js"></script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>



    <!-- Modal -->
    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="serch_form">
                    <input type="text" placeholder="search">
                    <button type="submit">search</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }

        });
    </script>

</body>

</html>