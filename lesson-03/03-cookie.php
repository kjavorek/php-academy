<html>
    <body>

    <h1>$_COOKIE</h1>
    <pre><?php

        var_dump($_COOKIE);

        if(!isset($_COOKIE['my-name'])) {
            setcookie('my-name', 'My name goes here');
        }
        //unsetcookie
        setcookie('my-name', 
                'My name goes here',
                time()-24*3600 //time()-dns
                );
    ?></pre>
</body>
</html>
