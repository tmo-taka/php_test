<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<p>普通のpタグ</p>
<?php
    $num1 = 12;
    $num =& $num1;
    $num1 = 15;
    $num1 += 1;

    define ("MATH", 3);

    print "条件出し分けてすと" .gettype($num). "型</br>";
    if($num > 10){
        print '$numは'.$num.'のためこれは出ない';
    }else {
        print '$numは'.$num.'のためこれは出る';
    }

    echo $num1;

    function createInteger($num) {
        $result = $num * $num * MATH * MATH;
        return $result;
    }

    $result = createInteger($num1);
    echo $result.'<br />';

    switch($result % 7){
        case 0:
            print "あまり無し<br />";
            break;
        case 1:
            print "あまり1<br />";
            break;
        case 2:
            print "あまり2<br />";
            break;
        case 3:
            print "あまり3<br />";
            break;
        case 4:
            print "あまり4<br />";
            break;
        case 5:
            print "あまり5<br />";
            break;
        default:
            print "あまり6<br />";
    }

    //NOTE: キーの自動付与
    $nameList = array(6 => '健太','拓也','悠人');
    foreach($nameList as $name){
        $name = '俺'.$name;
    }

    // unset($name);

    foreach($nameList as $name){
        print $name.'<br />';
    }

    $nameList['13'] = '大和';
    $nameList[] = '山川';
    print_r($nameList);


    echo "テストですー","テストです","テストですー,<br/>";

    $now = new Direction();
    $now->printDirection();
    $now->setDirection("西");
    $now->getDirection();

    class Direction {
        private $azimuth;


        function __construct() {
            $this -> azimuth = "南";
        }

        function setDirection($azimuth) {
            $this->azimuth = $azimuth;
            $this->printDirection();
        }

        function getDirection() {
            print self::DEFAULT;
        }

        function printDirection() {
            print "あなたのいる方角は".$this->azimuth. "です";
        }
    }

?>
</body>

</html>