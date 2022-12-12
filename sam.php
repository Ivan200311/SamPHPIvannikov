<pre>
<?php
// 1 задание
$elem = 10;
$min = 35;
$max = 42;
for ($i = 0; $i < $elem; $i++) {
    $arrRandom[] = rand($min, $max);
}
print_r($arrRandom);

// 2 задание
$stroka = join(';', $arrRandom);
print_r($stroka);

//3 задание
print_r(array_unique($arrRandom));
echo (count(array_unique($arrRandom)));

//4 задание
for($i=0; $i<count($arrRandom); $i++){
    $ymno3[$i] = $arrRandom[$i] * 3;
    }
    print_r($ymno3);
//5 задание
$arrRange = range(-50, 50, 8);
shuffle($arrRange);
print_r($arrRange);
//6 задание 
$arr1 = array_filter($arrRange, function ($item) {
    if ($item >= 0 && $item % 2 == 0)
        return $item;
});
$sum = array_sum($arr1);
print_r($sum);

//7 задание
$arr2 = array_filter($arrRange, function ($item) {
    if ($item % 5 == 0 || $item % 3 == 0)
        return $item;
});
$sum1 = array_product($arr2);

//8 задание

//1 способ
$arr3 = array_merge($arrRandom, $arrRange);
print_r($arr3);

//2 способ
$arr4 = [...$arrRandom, ...$arrRange];
print_r($arr4);

//9 задание

//10 задание
array_splice($arrRandom, 5, 2, [1000, 2000, 3000]);

//11 задание
$stroka2 = "А роза упала на лапу Азора";
$arr6 = explode(' ', $stroka2);
print_r($arr6);

//12 задание
array_pop($arrRandom);

//14 задание
$arr7 = [
    "white" => "белый",
    "yellow" => "желтый",
    "red" => "красный",
    "green" => "зеленый",
];
['yellow'=>$arrYel, 
'green'=>$arrGre
]=$arr7;

$arrWh = $arr7['green'];
print_r($arrWh);

//15 задание
$arr8 = [
    [
        "berry" => "виноград", 
        "color" => "зеленый", 
        "weight" => 1.5
    ],
    [
        "berry" => "земляника",
        "color" => "красный", 
        "weight" => 0.7
    ],
    [
        "berry" => "blueberry", 
        "color" => "фиолетовый", 
        "weight" => 0.3
    ],
];
function cmd($a, $b){
    if($a['weight']<$b['weight']) return 1;
    if($a['weight']==$b['weight']) return 0;
    if($a['weight']>$b['weight']) return -1;
};
uasort($arr8, 'cmd');
print_r($arr8);


?>
</pre>