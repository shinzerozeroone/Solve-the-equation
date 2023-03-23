<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solve the equation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="header">
            <a href="https://mospolytech.ru/">
                <img class="header__logo" src="images/0b6dd8bb96f9fc0544405b04019e34b7.png">
            </a>
            <p class="header__desc">4.1. Домашняя работа: Solve the equation.</p>

        </div>
    </header>

    <main>
        <h2>Введите уравнение по примеру - "x - 2 = 4"</h2>

        <form method="post" action="#">
            <input name="equation" type="text" class="equation">
            <br>
            <input type="submit" class="submit" value="Считать">
            <br>
            <textarea class="answer" name="answer" readonly>
            
            <?php
            
            if(isset($_POST)){
                $data = $_POST['equation'];
                $equation = explode(" ", $data);
            }else{
                echo '???';
            }

            $op1 = $equation[0];
            $sign = $equation[1];
            $op2 = $equation[2];
            $equal = $equation[3];
            $res = $equation[4];           

            if ($sign == '+'){
                if ($op1 == 'x'){
                    $result = $res - $op2;
                    echo $result;
                }elseif ($op1 !== 'x'){
                    $result = ($res - $op1);
                    echo $result;
                }
            }
            
            if($sign == '-'){
                if ($op1 == 'x'){
                    $result = $res + $op2;
                    echo $result;
                }elseif ($op1 !== 'x'){
                    $result = ($res + $op1);
                    echo $result;
                }
            }

            if ($sign == '*'){
                if ($op1 == 'x'){
                    $result = $res / $op2;
                    echo $result;
                }elseif ($op1 !== 'x'){
                    $result = $res / $op1;
                    echo $result;
                }
            }

            if ($sign == '/'){
                if ($op1 == 'x'){
                    $result = $op2 * $res;
                    echo $result;
                }elseif ($op1 !== 'x'){
                    $result = $op1 / $res;
                    echo $result;
                }
            }


            ?>
        
            </textarea>
        </form>

        <div class="log_pic"> 
                <img src="images/diagram.png" class="diagram">
        </div>
            
    </main>

    <footer>
        <div class="footer">
 
            <p>
                
                 Студент группы 221-322 Леушин Александр Александрович
    
            </p>
        

        </div>
    </footer>
</body>

</html>