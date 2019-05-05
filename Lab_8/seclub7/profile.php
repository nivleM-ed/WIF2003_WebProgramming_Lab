<!DOCTYPE html>
<?php 
session_start();
include "config.php";
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>SE Club Events</title>
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
                        <a class="nav-link" href="events.html">EVENTS
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="profile.php">PROFILE</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron" style="background-color:#F0F8FF">
            <main>
                <div>
                    <h2>SE Club - Member Profile</h2>
                    <table class="table">
                        <?php
                            try {
                                $query = "SELECT * FROM members";
                                $stmt = $pdo->prepare($query);
                                $stmt->execute();
                                $result = $stmt->fetch();
                            } catch (PDOException $e) {
                                throw new PDOException($e->getMessage(), (int)$e->getCode());
                            }
                        ?>
                        <tr>
                            <td><strong>Name:</strong></td>
                            <td><?php echo $result['UName']?></td>
                        </tr>
                        <tr>
                            <td><strong>Student ID:</strong></td>
                            <td><?php echo $result['StudentID']?></td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td><?php echo $result['Email']?></td>
                        </tr>
                        <tr>
                            <td><strong>Birthday:</strong></td>
                            <td><?php echo $result['Bday']?></td>
                        </tr>
                        <tr>
                            <td><strong>Most favourite event:</strong></td>
                            <td><?php echo $result['favevent']?></td>
                        </tr>
                    </table>
                </div>
            </main>
        </div>
    </div>

    </div>
    <div>
        <footer class="container text-center font-italic">
            <hr>Copyright &copy 2019 UM Software Engineering Club<br><a href="mailto:umseclub@um.edu.my">umseclub@um.edu.my</a></footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>