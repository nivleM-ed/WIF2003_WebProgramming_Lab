<!DOCTYPE html>

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
                    <li class="nav-item active">
                        <a class="nav-link" href="signup.php">SIGN UP
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">LOG IN</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron" style="background-color:#F0F8FF">
            <main>
                <div>
                    <h2>Sign Up as SE Club Member</h2>
                    
                    <p>Please fill in this form to create an account. Required information is marked with an asterisk(*).</p>
                    <form method="POST" action="processSignup.php">

                        <div class="form-group mb-2">
                            <label for="name">*Name:</label><br>
                            <input type="text" id="name" name="name" required class="col-2">
                        </div>
                        <div class="form-group">
                            <label for="studid">*Student ID:</label><br>
                            <input type="text" id="studentid" name="studentid" required class="col-2">
                            <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == 'takenid' || $_GET['error'] == 'takenidemail') {
                                    echo "Student ID is already registered";
                                }
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="email">*E-mail:</label><br>
                            <input type="email" id="email" name="email" required class="col-2">
                            <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == 'takenemail' || $_GET['error'] == 'takenidemail') {
                                    echo "Email is already registered";
                                }
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="pass">*Password:</label><br>
                            <input type="password" id="password" name="password" required class="col-2">
                        </div>
                        <div class="form-group">
                            <label for="repeatpass">*Repeat Password:</label><br>
                            <input type="password" id="repeatpassword" name="repeatpassword" required class="col-2">
                            <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == 'rpass') {
                                    echo "Password is not the same";
                                }
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday:</label><br>
                            <input type="date" id="bday" name="bday" class="col-2">
                        </div>
                        <div class="form-group">
                            <label for="favevent">Select your most favourite event:</label><br>
                            <select id="favevent" name="favevent" class="form-control col-2">
                                <option value="Workshop">Workshop</option>
                                <option value="Talk">Talk</option>
                                <option value="SE Day">SE Day</option>
                                <option value="Competition">Competition</option>
                                <option value="Gathering with alumni">Gathering with alumni</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="signup">Submit</button>
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