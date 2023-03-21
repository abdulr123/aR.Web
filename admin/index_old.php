

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Mahasiswa</title>
    <link rel="stylesheet" href="./css-admin/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Optional theme -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

</head>

<body>

    <div class="wrapper">
        <nav class="navbar border-bottom">
            <div class="navbar-header" >  
                <a class="navbar-brand" href="index.php">aR.Web</a>
            </div>
        </nav>       
        <!-- Menu -->
        <div class="sidebar">
            <menu>
            <ul class="menu-content">
                <li><a href="index.php"> Home</a></li>
                <li><a href="mahasiswa.php"> <span>Data Mahasiswa</span></a>
                </li>
                <li><a href="logout.php"> <span>Logout</span></a></li>
            </ul>
            </menu>
        

        </div>

        <!-- Isi Kontent -->
        <section class="content">
            <div class="inner">
            <p>
                <h1> Selamat datang <?php echo $_SESSION['username']; ?> </h1>
            </p>

            </div>

</body>

</html>