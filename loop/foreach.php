<ul>
<?php
$students=['sa','sb','sc'];
//foreach($array as $value)

foreach ($students as $student){
    echo '<li>'.$student.'</li>';
}


?>
</ul>

<ul>
    <?php
    $salaries=[
        2000,
        3000,
        10000,
        5000
    ];
    //foreach($array as $value)

    foreach ($salaries as $salary){
        echo 'salary: '.$salary.'<br>';
    }
    echo '<br>';
   $items=[
           'item1'=>'mobile',
       'item2'=>'charge',
       'item3'=>'cable'
   ];
   echo '<ol>';
    foreach ($items as $item){
        echo '<li>'.$item .'</li>';
    }
    echo '</ol>';
    echo '<br>';
    $names=[
        'firstname'=>'Jhon',
        'lastname'=>'doe',
        'middlename'=>'Bray'
    ];
    foreach ($names as $key=>$name){
        echo "<li>{$key}:-{$name}</li>";
    }
    echo '<br>';

    //nested array
    $cars=array(
            array(
                    "name"=>"volvo",
                    "stock"=>20,
                    "sold"=>18
            ),
        array(
            "name"=>"BMW",
            "stock"=>20,
            "sold"=>18
        ),
            array(
                "name"=>"Land Rover",
                "stock"=>20,
                "sold"=>18
            ),
    );
    foreach ($cars as $car){
        foreach ($car as $key=>$value){
            echo "$key :-$value";
            echo '<br>';

        }
    }

    ?>
</ul>
