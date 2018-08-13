
<?php

$simonasAge = 24;
$genadisAge = 29;
$genadiTotal = $genadisAge;
$simonaTotal = $simonasAge;
if(isset($_POST['year'])){
    $year = $_POST['year'];
    if($year > 2018){
        $simonaTotal = ($year - 2018) + $simonasAge;
        $genadiTotal = ($year - 2018) + $genadisAge;
    }
    else {
        $simonaTotal = $simonasAge -(2018 - $year);
        $genadiTotal = $genadisAge -(2018 - $year);
    }
}

$month = 1;
$counter = 0;
echo "<h3>Genadi will be: $genadiTotal years old</h3>";
echo "<h3>Simona will be: $simonaTotal years old</h3>";
echo "<h3>The Year is: $year</h3>";
while($month <= 12){
    $counter++;
    $arrDays = ['','','','','','',''];
    $days = cal_days_in_month(CAL_GREGORIAN,$month,$year);
    $displayMonth = date('F',mktime(0,0,0,$month,1,0));
    $currentMonth = date('n',mktime(0,0,0,$month,1,$year));
    echo "<div class=\"box$counter\">";
    echo "<p>$displayMonth</p>
        <table>
        <tr>
    <th>По</th>
    <th>Вт</th>
    <th>Ср</th>
    <th>Че</th>
    <th>Пе</th>
    <th class=\"sunday\">Съ</th>
    <th class=\"sunday\">Не</th>
    </tr>";

    for($i = 1; $i <= $days; $i++){
        $newDate = mktime(0,0,0,$month,$i,$year);
        $getDayOfWeek = date('l',$newDate);
        
        switch($getDayOfWeek){
            case 'Monday':
                $arrDays[0] = $i;
                break;
                case 'Tuesday':
                $arrDays[1] = $i;
                break;
                case 'Wednesday':
                $arrDays[2] = $i;
                break;
                case 'Thursday':
                $arrDays[3] = $i;
                break;
                case 'Friday':
                $arrDays[4] = $i;
                break;
                case 'Saturday':
                $arrDays[5] = $i;
                break;
                case 'Sunday':
                $arrDays[6] = $i;
                break;
        }
        
        if($getDayOfWeek == 'Sunday' || $i == $days){
            echo "<tr>
            <td>".$arrDays[0]."</td>
            <td>".$arrDays[1]."</td>
            <td>".$arrDays[2]."</td>
            <td>".$arrDays[3]."</td>
            <td>".$arrDays[4]."</td>
            <td>".$arrDays[5]."</td>
            <td>".$arrDays[6]."</td>
            </tr>";
            $arrDays = ['','','','','','',''];
        }
    }

    echo "</table>";
    echo "</div>";
    $month++;
}
