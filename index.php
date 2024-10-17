<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        * {
            font-family: sans-serif;
            text-decoration: none;
            list-style: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: cornflowerblue;
            overflow-x: hidden;
        }

    
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 283px;
            height: 100%;
            background: #252525;
            padding: 5% 30px;
            text-align: center;
        }

        .profile h2 {
            font-size: 30px;
            color: #fff;
        }

        .profile p {
            font-size: 18px;
            color: #eee;
        }

        .header .nav {
            width: 18px;
            margin-top: 30px;
            
        }

        .nav ul li a {
            display: block;
            padding: 10px;
            margin: 15px 0;
            background: #333;
            border-radius: 50px;
            color: #fffaff;
            font-size: 18px;
            transition: 0.5s;
            width: 220px;
            height: 35px;
            
        }

        .nav ul li a:hover {
            background: #a4a4a4;
                     
        }

        .main {
            position: relative;
            height: 100vh;
            width: calc(100%-350px);
            left: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #fff;
            padding: 10%    ;
        }

        .main h3{
            font-size: 30px;
            font-weight: 500;
            color: #eee;
        }

        .main h1{
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .main p{
            width: 100%;
            max-width: 600px;
        }
    </style>
    </head>
<body>
    <header class="header">
        <div class="profile">
            <h2> Menu </h2>
        </div>
        <nav class="nav sidebar">
            <ul>
                <li><a href="index.php"> Home</a></li>
                <li><a href="about.php"> About</a></li>
                <li><a href="contact.php"> Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="main">
        <h3> Halo! </h3>
        <p>Ini adalah tampilan awal dari halaman home. </p>
    </section>
</body>
</html>