<?php
include_once ("Dancer.php");

$queue1 = new SplQueue();
$queue2 = new SplQueue();

$men1 = new Dancer("Hoang","nam");
$men2 = new Dancer("Hung","nam");
$men3 = new Dancer("Viet","nam");
$men4 = new Dancer("Son","nam");

$women1 = new Dancer("Lan","nu");
$women2 = new Dancer("Huong","nu");
$women3 = new Dancer("Hoa","nu");

$queue1->enqueue($men1);
$queue1->enqueue($men2);
$queue1->enqueue($men3);
$queue1->enqueue($men4);


$queue2->enqueue($women1);
$queue2->enqueue($women2);
$queue2->enqueue($women3);
function top($_queue1,$_queue2){

    if($_queue1->isEmpty() || $_queue2->isEmpty()) {
        echo "Co nguoi dang cho";
    } else {
        $newMan = $_queue1->pop();
        $newWoman = $_queue2->pop();
        return  $newMan->getName() ." - ". $newWoman->getName();
    }

}
echo  top($queue1,$queue2);
echo "<br>";
echo  top($queue1,$queue2);
echo "<br>";
echo  top($queue1,$queue2);
echo "<br>";
echo  top($queue1,$queue2);

$women4 = new Dancer("Trinh","nu");
$women5 = new Dancer("Hoai","nu");
$women6 = new Dancer("Lan","nu");

$queue2->enqueue($women4);
$queue2->enqueue($women5);
$queue2->enqueue($women6);
//echo count2($queue1,$queue2);
echo "<br>";
echo  top($queue1,$queue2);
//echo "<br>";

function count2($_queue1,$_queue2){
    return  "Số người: ". $_queue1->count() + $_queue2->count();
}
echo count2($queue1,$queue2);