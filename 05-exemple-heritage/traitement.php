<?php
    session_start();
    require_once('./bdd.php');
    
    if(isset($_GET['form-bootstrap'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confim_password = $_POST['confirm-password'];
        $test_answer = $_POST['test'];
        if(isset($_POST['terms'])){
            $terms = $_POST['terms'];
        }
        
        if($username == ''){
            echo 'Veuillez saisir un nom d\'utilisateur.';
            echo '<br><a href="./index">Accueil</a>';
        } else{
            $req = $bdd->query('SELECT username FROM users WHERE username=\''.$username.'\'')->fetch();
            if($req['username'] !== null){
                echo 'Nom d\'utilisateur indisponible.';
                echo '<br><a href="./index">Accueil</a>';
            } else{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo 'Veuillez saisir une adresse email valide.';
                    echo '<br><a href="./index">Accueil</a>';
                } else{
                    $req = $bdd->query('SELECT email_adress FROM users WHERE email_adress=\''.$email.'\'')->fetch();
                    if($req['email_adress'] !== null){
                        echo 'Adresse email indisponible.';
                        echo '<br><a href="./index">Accueil</a>';
                    } else{
                        if($password == ''){
                            echo 'Veuillez saisir un mot de passe.';
                            echo '<br><a href="./index">Accueil</a>';
                        } else{
                            if($password != $confim_password){
                                echo 'Les mots de passe sont différents.';
                                echo '<br><a href="./index">Accueil</a>';
                            } else{
                                if($_POST['test'] == ''){
                                    echo 'Veuillez résoudre le calcul.';
                                } else{
                                    $test_sum = $_COOKIE['Random1'] * $_COOKIE['Random2'];
                                    if($test_sum != $test_answer){
                                        // var_dump($_POST);
                                        // var_dump($test_sum);
                                        echo '<img src="https://i.imgur.com/8R6InOD.jpg">';
                                        echo '<br><a href="./index">Accueil</a>';
                                    } else{
                                        if(!isset($terms)){
                                            // var_dump($_POST);
                                            echo 'Veuillez accepter les conditions d\'utilisation.';
                                            echo '<br><a href="./index">Accueil</a>';
                                        } else{
                                            $req = $bdd->prepare('INSERT INTO users (username, email_adress, passw, register_date) VALUES (:username, :email_adress, :passw, :register_date)');
        
                                            $req->bindParam(':username', $username, PDO::PARAM_STR);
                                            $req->bindParam(':email_adress', $email, PDO::PARAM_STR);
                                            $req->bindParam(':passw', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
                                            $req->bindParam(':register_date', date('Y-m-d H:i:s'), PDO::PARAM_STR);
        
        
                                            $req->execute();
        
                                            $_SESSION['notification'] = '<p class="fade-out">Félicitations&thinsp;! Vous n\'avez pas hacké le formulaire d\'inscription.</p>';
                                            header('Location: ./index.php?connexion');
                                        }
                                    }
                                }        
                            }
                        }
                    }
                }
            }
        }
    }

    else if(isset($_GET['connexion'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = $bdd->query('SELECT id, username, passw FROM users WHERE username=\''.$username.'\'')->fetch();

        if($username == '' || $password == ''){
            echo 'Veuillez remplir tous les champs.';
        } else{
            if(!$data['username']){
                echo 'Utilisateur non trouvé.';
                echo '<br><a href="index.php?connexion">Page de connexion</a>';
            } else{
                if(!password_verify($password, $data['passw'])){
                    echo 'Mot de passe incorrect.';
                    echo '<br><a href="index.php?connexion">Page de connexion</a>';
                } else{
                    $_SESSION['connected'] = true;
                    $_SESSION['notification'] = '<p class="fade-out">Bonjour, '.$data['username'].'</p>';
                    header('Location: ./index.php?profil='.$data['id']);
                }
            }
        }
    }

    else if(isset($_GET['deconnexion'])){
        session_unset();
        session_destroy();
        session_start();
        $_SESSION['notification'] = '<p class="fade-out">Vous avez bien été déconnecté.</p>';
        header('Location: index.php');
    }
?>