<!DOCTYPE html>
<?php
    session_start();
    include "config.php";
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color:#ADD8E6">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"><img src="assets/pic/selogo.jpg" height="30px" width="30px">Software
                Engineering Club</a>
            <div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.html">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">SIGN UP
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item  active">
                        <a class="nav-link" href="login.php">LOG IN</a>
                    </li>
                </ul>
                <?php
                    if(isset($_POST["login"])){
                        $name = $_POST["name"];
                        $password = $_POST["password"];

                        try {
                            $query = "SELECT Pass FROM members WHERE UName = ?";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute([$name]);
                            $result = $stmt->fetch();
                        } catch (PDOException $e) {
                            throw new PDOException($e->getMessage(), (int)$e->getCode());
                        }
                        
                        if($result['Pass'] == $password) {
                            header("Location: ../seclub7/profile.php ");
                        } else {
                            header("Location: ../seclub7/login.php?error=wrongpass");
                        }
                    }
                ?>
            </div>
        </nav>
        <div class="jumbotron" style="background-color:#F0F8FF">
            <main>
                <div>
                    <h2>Please Sign In</h2>
                    <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>

                        <div class="form-group mb-2">
                            <label for="name">*Name:</label><br>
                            <input type="text" id="name" name="name" required class="col-2">
                            <?php
                                if(isset($_GET['error'])) {
                                    if($_GET['error']=='wronguser' || $_GET['error']=='wrongpassuser') {
                                        echo "Invalid username";
                                    }
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="pass">*Password:</label><br>
                            <input type="password" id="password" name="password" required class="col-2">
                            <?php
                                if(isset($_GET['error'])) {
                                    if($_GET['error']=='wrongpass' || $_GET['error']=='wrongpassuser') {
                                        echo "Invalid password";
                                    }
                                }
                            ?>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="login">Log In</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <div>
        <footer class="container text-center font-italic">
            <hr>Copyright &copy 2019 UM Software Engineering Club<br><a href="mailto:umseclub@um.edu.my">umseclub@um.edu.my</a></footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>