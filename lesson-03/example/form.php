<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
    <style>
        input, textarea { display: block; }
    </style>
</head>
<body>
    <?php 
        $name = $email = $smjer = $godina = "";
    ?>
<header>
    <ul>
        <li><a href="index.php">Naslovnica</a></li>
        <li><a href="form.php">Prijavi se</a></li>
        <li>Login (za admine)</li>
    </ul>
</header>

<main>

    <h1>Prijavnica za PHP akademiju</h1>

    <p>Prijavnica za prvo osječko izdanje PHP akademije koju Inchoo pokreće u suradnji s FERITom.</p>
    <p>Prijave traju do 10.10., pa požuri i svoje mjesto rezerviraj već sad.</p>
    <p>Više informacija na:
        <a href="http://inchoo.hr/php-akademija-2016/" target="_blank">http://inchoo.hr/php-akademija-2016/</a>
    </p>

    <!-- fix form -->
    <form method="post" action="post">
        Customer Name: <?php echo $name; ?><br />
        
        <label>Ime i prezime</label>
        <input name="name" type="text" index="name" required/>
        
        <label>Mail adresa</label>
        <input name="email" type="email" required/>

        <label>Smjer</label>
        <input name="smjer" type="text" required/>

        <label>Godina studija</label>
        <input name="godina" type="radio" value="1"/>1
        <input name="godina" type="radio" value="2"/>2
        <input name="godina" type="radio" value="3"/>3
        <input name="godina" type="radio" value="4"/>4
        <input name="godina" type="radio" value="5"/>5
        <br>
        <label>Što te motiviralo da se prijaviš?</label>
        <textarea type="text" name="opis" rows="7" cols="40" style="resize:none"></textarea>
    
        <label>Imaš li predznanje vezano uz web development?</label>
        <textarea type="text" name="predznanja" rows="7" cols="40" style="resize:none"></textarea>

        <label>U kojim jezicima si do sada programirao?</label>
        <textarea type="text" name="jezici" rows="7" cols="40" style="resize:none"></textarea>

        <label>Uploadaj primjer svoga koda:</label>
        <input type="file" name="file"> //$_FILES
        <br>
        <input type="submit" name="submit" value="Submit">  
    </form>
    <?php 
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['smjer']) && isset($_POST['godina'])) {
        $name=$_POST['name']; 
        $email=$_POST['email']; 
        $smjer=$_POST['smjer']; 
        $godina=$_POST['godina'];
        }
    ?>
</main>

<footer>
    <p>&copy; PHP Akademija, 2016</p>
</footer>

</body>
</html>