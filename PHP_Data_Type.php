<?php
function setHeight($minheight = 50)
{
    echo "The height is : $minheight <br>";
}

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);

    $cars = array("Volvo", "BMW", "Toyota");
    echo "<br>" . "I like" . $cars[0];
    $l = count($cars);
    echo $l;

    $age = array(
        "Peter"=>"35",
        "Ben"=>"37",
        "Joe"=>"34"
    );
    echo "<br>" . $age["Peter"] . "<br>";
    showResult($age);
		ksort($age); #sort by key
		# asort($age); sort by value
		echo "<br>";
		showResult($age);

    function showResult($age)
    {
        foreach ($age as $x => $x_value) {
					
        	echo "Key = " . $x . ", Value = " . $x_value;
          echo "<br>";
        }
    }
