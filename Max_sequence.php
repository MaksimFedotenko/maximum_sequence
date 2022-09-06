<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "New ";?></title>
</head>
<body>
    <?php
        $length = 100;      // длина массива
        $high = 0;          // индекс последнего числа последовательности в массиве
        $max = 0;           // максимальное кол-во эл-ов возрастающей послед-ти
        $x = 0;
        $mass = [];         // массив, состоящий из последовательностей
        for ($i=0; $i<$length; $i++)
        {
            $arr[] = rand(0,10);        // задаем эл-ты массива от 0-10
        }

        for ($i=0; $i<$length; $i++)    // вывод массива из 100 эл-ов
        {
            echo $arr[$i];
            echo ' ';

        }
        print "<br>";
        echo 'Возрастающие последовательности: ';
        print "<br>";
        for ($i=1; $i<$length; $i++)
        {
            if ($arr[$i] > $arr[$i-1])      //если i-ый эл-нт больше предыдущего, то
            {
                $x++;
                if ($x > $max)             // ищем наиб-ую последовательность
                {
                    $max = $x;            // max - отвечает за кол-во эл-ов возрастающей послед-ти
                    $high = $i;          // индекс последнего эл-та возр. послед-ти
                }
            }
            else
                $x = 0;                 // обнуляем x и идём занова
        }

    for ($i=$high-$max; $i<$high+1;$i++)    // вывод макс. возрастающей последовательности
    {
        print $arr[$i];
        echo ' ';
    }

// частный случай, если в массиве имеется одинаковая длина возрастающих последовательностей
        for ($i=$high+1; $i<$length; $i++)
        {
            if ($arr[$i] > $arr[$i-1])
            {
                $x++;
                if ($x == $max)     //если есть одинаковые длинной возр. послед-ти
                {
                    $max = $x;
                    $high = $i;
                    print "<br>";
                    for ($r=$high-$max; $r<$high+1;$r++)
                    {
                        echo $arr[$r];
                        echo ' ';
                    }
                }
            }
            else
                $x = 0;
        }
    ?>



</body>
</html>