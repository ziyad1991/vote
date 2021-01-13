
<?php

include  "db.php"; 


 function insertvisit(){
if(isset($_POST['pic6'])){

   echo "i am here ";
}

 global $connection;
$user = $_SESSION['fullname'];
$verifyuser = "SELECT * FROM users WHERE fullname = '$user'";

$verifyusernow = mysqli_query($connection,$verifyuser);
while($row = mysqli_fetch_assoc($verifyusernow)){

                                         $id = $row['voted'];
                              
                                     }


if (isset($_POST['create_post'])) {
  if($id == '' || $_POST['1'] == '' || $_POST['2'] == '' || $_POST['3'] == '' || $_POST['4'] == '' || $_POST['5'] == '' || $_POST['6'] == '' || $_POST['7'] == '' || $_POST['8'] == '' || $_POST['9'] == '' || $_POST['10'] == '' || $_POST['11'] == '' || $_POST['12'] == '' || $_POST['13'] == '' || $_POST['14'] == '' || $_POST['15'] == '' || $_POST['16'] == '' || $_POST['17'] == '' || $_POST['18'] == '' || $_POST['19'] == '' || $_POST['20'] == '' || $_POST['21'] == '' || $_POST['22'] == '' || $_POST['23'] == '' || $_POST['24'] == '' || $_POST['25'] == '' || $_POST['26'] == '' || $_POST['27'] == '' || $_POST['28'] == '' || $_POST['29'] == '' || $_POST['30'] == '' || $_POST['31'] == '' || $_POST['32'] == '' || $_POST['33'] == '' || $_POST['34'] == '' || $_POST['60'] == '' || $_POST['35'] == '' || $_POST['36'] == '' || $_POST['37'] == '' || $_POST['38'] == '' || $_POST['39'] == '' || $_POST['40'] == '' || $_POST['41'] == '' || $_POST['42'] == '' || $_POST['43'] == '' || $_POST['44'] == '' || $_POST['45'] == '' || $_POST['46'] == '' || $_POST['47'] == '' || $_POST['48'] == '' || $_POST['49'] == '' || $_POST['50'] == '' || $_POST['51'] == '' || $_POST['52'] == '' || $_POST['53'] == '' || $_POST['54'] == '' || $_POST['55'] == '' || $_POST['56'] == '' || $_POST['57'] == '' || $_POST['58'] == '' || $_POST['59'] == '' ){















$d = mktime(11, 14, 54, 8, 12, 2014);
$nowdate = date("Y-m-d h:i:sa");
$user = $_SESSION['fullname'];
$query0 ="INSERT INTO polldata (user,dates)
VALUES ('{$user}','{$nowdate}')";

$submit = mysqli_query($connection,$query0);
$quest_id = mysqli_insert_id($connection);
 

$n = $_POST['1'];
$query1 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',1,'{$n}')";


$submit = mysqli_query($connection,$query1);

$n = $_POST['2'];
$query2 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',2,'{$n}')";


$submit = mysqli_query($connection,$query2);


$n = $_POST['3'];
$query3 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',3,'{$n}')";


$submit = mysqli_query($connection,$query3);


$n = $_POST['4'];
$query4 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',4,'{$n}')";


$submit = mysqli_query($connection,$query4);


$n = $_POST['5'];
$query5 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',5,'{$n}')";


$submit = mysqli_query($connection,$query5);



$n = $_POST['6'];
$query6 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',5,'{$n}')";


$submit = mysqli_query($connection,$query6);



$n = $_POST['7'];
$query7 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',7,'{$n}')";


$submit = mysqli_query($connection,$query7);


$n = $_POST['8'];
$query8 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',8,'{$n}')";


$submit = mysqli_query($connection,$query8);




$n = $_POST['9'];
$query9 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',9,'{$n}')";


$submit = mysqli_query($connection,$query9);




$n = $_POST['10'];
$query10 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',10,'{$n}')";


$submit = mysqli_query($connection,$query10);




$n = $_POST['11'];
$query11 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',11,'{$n}')";


$submit = mysqli_query($connection,$query11);




$n = $_POST['12'];
$query12 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',12,'{$n}')";


$submit = mysqli_query($connection,$query12);




$n = $_POST['13'];
$query13 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',13,'{$n}')";


$submit = mysqli_query($connection,$query13);




$n = $_POST['14'];
$query14 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',14,'{$n}')";


$submit = mysqli_query($connection,$query14);




$n = $_POST['15'];
$query15 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',15,'{$n}')";


$submit = mysqli_query($connection,$query15);




$n = $_POST['16'];
$query16 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',16,'{$n}')";


$submit = mysqli_query($connection,$query16);




$n = $_POST['17'];
$query17 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',17,'{$n}')";


$submit = mysqli_query($connection,$query17);




$n = $_POST['18'];
$query18 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',18,'{$n}')";


$submit = mysqli_query($connection,$query18);




$n = $_POST['19'];
$query19 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',19,'{$n}')";


$submit = mysqli_query($connection,$query19);


$n = $_POST['20'];
$query20 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',20,'{$n}')";


$submit = mysqli_query($connection,$query20);

$n = $_POST['21'];
$query21 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',21,'{$n}')";


$submit = mysqli_query($connection,$query21);

$n = $_POST['22'];
$query22 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',22,'{$n}')";


$submit = mysqli_query($connection,$query22);

$n = $_POST['23'];
$query23 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',23,'{$n}')";


$submit = mysqli_query($connection,$query23);

$n = $_POST['24'];
$query24 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',24,'{$n}')";
$submit = mysqli_query($connection,$query24);


$n = $_POST['25'];
$query25 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',25,'{$n}')";
$submit = mysqli_query($connection,$query25);


$n = $_POST['26'];
$query26 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',26,'{$n}')";
$submit = mysqli_query($connection,$query26);



$n = $_POST['27'];
$query27 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',27,'{$n}')";
$submit = mysqli_query($connection,$query27);



$n = $_POST['28'];
$query28 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',28,'{$n}')";
$submit = mysqli_query($connection,$query28);



$n = $_POST['29'];
$query29 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',29,'{$n}')";
$submit = mysqli_query($connection,$query29);


$n = $_POST['30'];
$query30 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',30,'{$n}')";
$submit = mysqli_query($connection,$query30);


$n = $_POST['31'];
$query31 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',31,'{$n}')";
$submit = mysqli_query($connection,$query31);


$n = $_POST['32'];
$query32 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',32,'{$n}')";
$submit = mysqli_query($connection,$query32);



$n = $_POST['33'];
$query33 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',33,'{$n}')";
$submit = mysqli_query($connection,$query33);


$n = $_POST['34'];
$query34 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',34,'{$n}')";
$submit = mysqli_query($connection,$query34);



$n = $_POST['35'];
$query35 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',35,'{$n}')";
$submit = mysqli_query($connection,$query35);


$n = $_POST['36'];
$query36 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',36,'{$n}')";
$submit = mysqli_query($connection,$query36);


$n = $_POST['37'];
$query37 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',37,'{$n}')";
$submit = mysqli_query($connection,$query37);



$n = $_POST['38'];
$query38 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',38,'{$n}')";
$submit = mysqli_query($connection,$query38);


$n = $_POST['39'];
$query39 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',39,'{$n}')";
$submit = mysqli_query($connection,$query39);


$n = $_POST['40'];
$query40 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',40,'{$n}')";
$submit = mysqli_query($connection,$query40);


$n = $_POST['41'];
$query41 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',41,'{$n}')";
$submit = mysqli_query($connection,$query41);



$n = $_POST['42'];
$query42 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',42,'{$n}')";
$submit = mysqli_query($connection,$query42);



$n = $_POST['43'];
$query43 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',43,'{$n}')";
$submit = mysqli_query($connection,$query43);


$n = $_POST['44'];
$query44 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',44,'{$n}')";
$submit = mysqli_query($connection,$query44);



$n = $_POST['45'];
$query45 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',45,'{$n}')";
$submit = mysqli_query($connection,$query45);


$n = $_POST['46'];
$query46 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',46,'{$n}')";
$submit = mysqli_query($connection,$query46);


$n = $_POST['47'];
$query47 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',47,'{$n}')";
$submit = mysqli_query($connection,$query47);


$n = $_POST['48'];
$query48 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',48,'{$n}')";
$submit = mysqli_query($connection,$query48);


$n = $_POST['49'];
$query49 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',49,'{$n}')";
$submit = mysqli_query($connection,$query49);



$n = $_POST['50'];
$query50 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',50,'{$n}')";
$submit = mysqli_query($connection,$query50);



$n = $_POST['51'];
$query51 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',51,'{$n}')";
$submit = mysqli_query($connection,$query51);


$n = $_POST['52'];
$query52 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',52,'{$n}')";
$submit = mysqli_query($connection,$query26);



$n = $_POST['53'];
$query53 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',53,'{$n}')";
$submit = mysqli_query($connection,$query53);


$n = $_POST['54'];
$query54 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',54,'{$n}')";
$submit = mysqli_query($connection,$query54);


$n = $_POST['55'];
$query55 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',55,'{$n}')";
$submit = mysqli_query($connection,$query55);



$n = $_POST['56'];
$query56 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',56,'{$n}')";
$submit = mysqli_query($connection,$query56);


$n = $_POST['57'];
$query57 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',57,'{$n}')";
$submit = mysqli_query($connection,$query57);

$n = $_POST['58'];
$query58 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',58,'{$n}')";
$submit = mysqli_query($connection,$query58);

$n = $_POST['59'];
$query59 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',59,'{$n}')";
$submit = mysqli_query($connection,$query59);

$n = $_POST['60'];
$query60 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',60,'{$n}')";
$submit = mysqli_query($connection,$query60);

$n = $_POST['61'];
$query61 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',61,'{$n}')";
$submit = mysqli_query($connection,$query61);

$n = $_POST['62'];
$query62 ="INSERT INTO answers (questid, questionid, answer)
VALUES ('{$quest_id}',62,'{$n}')";
$submit = mysqli_query($connection,$query62);




 }

 

 else {

  echo "";
 };

$user = $_SESSION['fullname'];

$query7878 ="UPDATE users SET voted = 'yes' WHERE fullname = '$user'";
$insertuser = mysqli_query($connection,$query7878);


}


}



function visitstable(){


global $connection;


$query = "SELECT * FROM polldata";
$getvisits = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($getvisits)){


   $questid = $row['user'];
   $answer  = $row['dates']; 



 echo "<tr>";
 
echo "<td>$questid</td>";
 echo "<td>$answer</td>";


  echo "</tr>";
                  
               





}





}


function visitstable1(){
global $connection;
$yes1 = "SELECT * FROM  answers WHERE questionid = '1' AND answer = '1'";
$result = mysqli_query($connection,$yes1);
$rowcount11=mysqli_num_rows($result);
$no1 = "SELECT * FROM  answers WHERE questionid = '1' AND answer = '2'";
$result = mysqli_query($connection,$no1);
$rowcount12=mysqli_num_rows($result);
echo "<td>1</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable2(){
global $connection;
$yes2 = "SELECT * FROM  answers WHERE questionid = '2' AND answer = '1'";
$result = mysqli_query($connection,$yes2);
$rowcount11=mysqli_num_rows($result);
$no2 = "SELECT * FROM  answers WHERE questionid = '2' AND answer = '2'";
$result = mysqli_query($connection,$no2);
$rowcount12=mysqli_num_rows($result);
echo "<td>2</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable3(){
global $connection;
$yes3 = "SELECT * FROM  answers WHERE questionid = '3' AND answer = '1'";
$result = mysqli_query($connection,$yes3);
$rowcount11=mysqli_num_rows($result);
$no3 = "SELECT * FROM  answers WHERE questionid = '3' AND answer = '2'";
$result = mysqli_query($connection,$no3);
$rowcount12=mysqli_num_rows($result);
echo "<td>3</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable4(){
global $connection;
$yes4 = "SELECT * FROM  answers WHERE questionid = '4' AND answer = '1'";
$result = mysqli_query($connection,$yes4);
$rowcount11=mysqli_num_rows($result);
$no4 = "SELECT * FROM  answers WHERE questionid = '4' AND answer = '2'";
$result = mysqli_query($connection,$no4);
$rowcount12=mysqli_num_rows($result);
echo "<td>4</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable5(){
global $connection;
$yes5 = "SELECT * FROM  answers WHERE questionid = '5' AND answer = '1'";
$result = mysqli_query($connection,$yes5);
$rowcount11=mysqli_num_rows($result);
$no5 = "SELECT * FROM  answers WHERE questionid = '5' AND answer = '2'";
$result = mysqli_query($connection,$no5);
$rowcount12=mysqli_num_rows($result);
echo "<td>5</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable6(){
global $connection;
$yes6 = "SELECT * FROM  answers WHERE questionid = '6' AND answer = '1'";
$result = mysqli_query($connection,$yes6);
$rowcount11=mysqli_num_rows($result);
$no6 = "SELECT * FROM  answers WHERE questionid = '6' AND answer = '2'";
$result = mysqli_query($connection,$no6);
$rowcount12=mysqli_num_rows($result);
echo "<td>6</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable7(){
global $connection;
$yes7 = "SELECT * FROM  answers WHERE questionid = '7' AND answer = '1'";
$result = mysqli_query($connection,$yes7);
$rowcount11=mysqli_num_rows($result);
$no7 = "SELECT * FROM  answers WHERE questionid = '7' AND answer = '2'";
$result = mysqli_query($connection,$no7);
$rowcount12=mysqli_num_rows($result);
echo "<td>7</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable8(){
global $connection;
$yes8 = "SELECT * FROM  answers WHERE questionid = '8' AND answer = '1'";
$result = mysqli_query($connection,$yes8);
$rowcount11=mysqli_num_rows($result);
$no8 = "SELECT * FROM  answers WHERE questionid = '8' AND answer = '2'";
$result = mysqli_query($connection,$no8);
$rowcount12=mysqli_num_rows($result);
echo "<td>8</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable9(){
global $connection;
$yes9 = "SELECT * FROM  answers WHERE questionid = '9' AND answer = '1'";
$result = mysqli_query($connection,$yes9);
$rowcount11=mysqli_num_rows($result);
$no9 = "SELECT * FROM  answers WHERE questionid = '9' AND answer = '2'";
$result = mysqli_query($connection,$no9);
$rowcount12=mysqli_num_rows($result);
echo "<td>9</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable10(){
global $connection;
$yes10 = "SELECT * FROM  answers WHERE questionid = '10' AND answer = '1'";
$result = mysqli_query($connection,$yes10);
$rowcount11=mysqli_num_rows($result);
$no10 = "SELECT * FROM  answers WHERE questionid = '10' AND answer = '2'";
$result = mysqli_query($connection,$no10);
$rowcount12=mysqli_num_rows($result);
echo "<td>10</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable11(){
global $connection;
$yes11 = "SELECT * FROM  answers WHERE questionid = '11' AND answer = '1'";
$result = mysqli_query($connection,$yes11);
$rowcount11=mysqli_num_rows($result);
$no11 = "SELECT * FROM  answers WHERE questionid = '11' AND answer = '2'";
$result = mysqli_query($connection,$no11);
$rowcount12=mysqli_num_rows($result);
echo "<td>11</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable12(){
global $connection;
$yes12 = "SELECT * FROM  answers WHERE questionid = '12' AND answer = '1'";
$result = mysqli_query($connection,$yes12);
$rowcount11=mysqli_num_rows($result);
$no12 = "SELECT * FROM  answers WHERE questionid = '12' AND answer = '2'";
$result = mysqli_query($connection,$no12);
$rowcount12=mysqli_num_rows($result);
echo "<td>12</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable13(){
global $connection;
$yes13 = "SELECT * FROM  answers WHERE questionid = '13' AND answer = '1'";
$result = mysqli_query($connection,$yes13);
$rowcount11=mysqli_num_rows($result);
$no13 = "SELECT * FROM  answers WHERE questionid = '13' AND answer = '2'";
$result = mysqli_query($connection,$no13);
$rowcount12=mysqli_num_rows($result);
echo "<td>13</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable14(){
global $connection;
$yes14 = "SELECT * FROM  answers WHERE questionid = '14' AND answer = '1'";
$result = mysqli_query($connection,$yes14);
$rowcount11=mysqli_num_rows($result);
$no14 = "SELECT * FROM  answers WHERE questionid = '14' AND answer = '2'";
$result = mysqli_query($connection,$no14);
$rowcount12=mysqli_num_rows($result);
echo "<td>14</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable15(){
global $connection;
$yes15 = "SELECT * FROM  answers WHERE questionid = '15' AND answer = '1'";
$result = mysqli_query($connection,$yes15);
$rowcount11=mysqli_num_rows($result);
$no15 = "SELECT * FROM  answers WHERE questionid = '15' AND answer = '2'";
$result = mysqli_query($connection,$no15);
$rowcount12=mysqli_num_rows($result);
echo "<td>15</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable16(){
global $connection;
$yes16 = "SELECT * FROM  answers WHERE questionid = '16' AND answer = '1'";
$result = mysqli_query($connection,$yes16);
$rowcount11=mysqli_num_rows($result);
$no16 = "SELECT * FROM  answers WHERE questionid = '16' AND answer = '2'";
$result = mysqli_query($connection,$no16);
$rowcount12=mysqli_num_rows($result);
echo "<td>16</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable17(){
global $connection;
$yes17 = "SELECT * FROM  answers WHERE questionid = '17' AND answer = '1'";
$result = mysqli_query($connection,$yes17);
$rowcount11=mysqli_num_rows($result);
$no17 = "SELECT * FROM  answers WHERE questionid = '17' AND answer = '2'";
$result = mysqli_query($connection,$no17);
$rowcount12=mysqli_num_rows($result);
echo "<td>17</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable18(){
global $connection;
$yes18 = "SELECT * FROM  answers WHERE questionid = '18' AND answer = '1'";
$result = mysqli_query($connection,$yes18);
$rowcount11=mysqli_num_rows($result);
$no18 = "SELECT * FROM  answers WHERE questionid = '18' AND answer = '2'";
$result = mysqli_query($connection,$no18);
$rowcount12=mysqli_num_rows($result);
echo "<td>18</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable19(){
global $connection;
$yes19 = "SELECT * FROM  answers WHERE questionid = '19' AND answer = '1'";
$result = mysqli_query($connection,$yes19);
$rowcount11=mysqli_num_rows($result);
$no19 = "SELECT * FROM  answers WHERE questionid = '19' AND answer = '2'";
$result = mysqli_query($connection,$no19);
$rowcount12=mysqli_num_rows($result);
echo "<td>19</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}
function visitstable20(){
global $connection;
$yes20 = "SELECT * FROM  answers WHERE questionid = '20' AND answer = '1'";
$result = mysqli_query($connection,$yes20);
$rowcount11=mysqli_num_rows($result);
$no20 = "SELECT * FROM  answers WHERE questionid = '20' AND answer = '2'";
$result = mysqli_query($connection,$no20);
$rowcount12=mysqli_num_rows($result);
echo "<td>20</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable21(){
global $connection;
$yes21 = "SELECT * FROM  answers WHERE questionid = '21' AND answer = '1'";
$result = mysqli_query($connection,$yes21);
$rowcount11=mysqli_num_rows($result);
$no21 = "SELECT * FROM  answers WHERE questionid = '21' AND answer = '2'";
$result = mysqli_query($connection,$no21);
$rowcount12=mysqli_num_rows($result);
echo "<td>21</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable22(){
global $connection;
$yes22 = "SELECT * FROM  answers WHERE questionid = '22' AND answer = '1'";
$result = mysqli_query($connection,$yes22);
$rowcount11=mysqli_num_rows($result);
$no22 = "SELECT * FROM  answers WHERE questionid = '22' AND answer = '2'";
$result = mysqli_query($connection,$no22);
$rowcount12=mysqli_num_rows($result);
echo "<td>22</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable23(){
global $connection;
$yes23 = "SELECT * FROM  answers WHERE questionid = '23' AND answer = '1'";
$result = mysqli_query($connection,$yes23);
$rowcount11=mysqli_num_rows($result);
$no23 = "SELECT * FROM  answers WHERE questionid = '23' AND answer = '2'";
$result = mysqli_query($connection,$no23);
$rowcount12=mysqli_num_rows($result);
echo "<td>23</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable24(){
global $connection;
$yes24 = "SELECT * FROM  answers WHERE questionid = '24' AND answer = '1'";
$result = mysqli_query($connection,$yes24);
$rowcount11=mysqli_num_rows($result);
$no24 = "SELECT * FROM  answers WHERE questionid = '24' AND answer = '2'";
$result = mysqli_query($connection,$no24);
$rowcount12=mysqli_num_rows($result);
echo "<td>24</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable25(){
global $connection;
$yes25 = "SELECT * FROM  answers WHERE questionid = '25' AND answer = '1'";
$result = mysqli_query($connection,$yes25);
$rowcount11=mysqli_num_rows($result);
$no25 = "SELECT * FROM  answers WHERE questionid = '25' AND answer = '2'";
$result = mysqli_query($connection,$no25);
$rowcount12=mysqli_num_rows($result);
echo "<td>25</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable26(){
global $connection;
$yes26 = "SELECT * FROM  answers WHERE questionid = '26' AND answer = '1'";
$result = mysqli_query($connection,$yes26);
$rowcount11=mysqli_num_rows($result);
$no26 = "SELECT * FROM  answers WHERE questionid = '26' AND answer = '2'";
$result = mysqli_query($connection,$no26);
$rowcount12=mysqli_num_rows($result);
echo "<td>26</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable27(){
global $connection;
$yes27 = "SELECT * FROM  answers WHERE questionid = '27' AND answer = '1'";
$result = mysqli_query($connection,$yes27);
$rowcount11=mysqli_num_rows($result);
$no27 = "SELECT * FROM  answers WHERE questionid = '27' AND answer = '2'";
$result = mysqli_query($connection,$no27);
$rowcount12=mysqli_num_rows($result);
echo "<td>27</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable28(){
global $connection;
$yes28 = "SELECT * FROM  answers WHERE questionid = '28' AND answer = '1'";
$result = mysqli_query($connection,$yes28);
$rowcount11=mysqli_num_rows($result);
$no28 = "SELECT * FROM  answers WHERE questionid = '28' AND answer = '2'";
$result = mysqli_query($connection,$no28);
$rowcount12=mysqli_num_rows($result);
echo "<td>28</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable29(){
global $connection;
$yes29 = "SELECT * FROM  answers WHERE questionid = '29' AND answer = '1'";
$result = mysqli_query($connection,$yes29);
$rowcount11=mysqli_num_rows($result);
$no29 = "SELECT * FROM  answers WHERE questionid = '29' AND answer = '2'";
$result = mysqli_query($connection,$no29);
$rowcount12=mysqli_num_rows($result);
echo "<td>29</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable30(){
global $connection;
$yes30 = "SELECT * FROM  answers WHERE questionid = '30' AND answer = '1'";
$result = mysqli_query($connection,$yes30);
$rowcount11=mysqli_num_rows($result);
$no30 = "SELECT * FROM  answers WHERE questionid = '30' AND answer = '2'";
$result = mysqli_query($connection,$no30);
$rowcount12=mysqli_num_rows($result);
echo "<td>30</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable31(){
global $connection;
$yes31 = "SELECT * FROM  answers WHERE questionid = '31' AND answer = '1'";
$result = mysqli_query($connection,$yes31);
$rowcount11=mysqli_num_rows($result);
$no31 = "SELECT * FROM  answers WHERE questionid = '31' AND answer = '2'";
$result = mysqli_query($connection,$no31);
$rowcount12=mysqli_num_rows($result);
echo "<td>31</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable32(){
global $connection;
$yes32 = "SELECT * FROM  answers WHERE questionid = '32' AND answer = '1'";
$result = mysqli_query($connection,$yes32);
$rowcount11=mysqli_num_rows($result);
$no32 = "SELECT * FROM  answers WHERE questionid = '32' AND answer = '2'";
$result = mysqli_query($connection,$no32);
$rowcount12=mysqli_num_rows($result);
echo "<td>32</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable33(){
global $connection;
$yes33 = "SELECT * FROM  answers WHERE questionid = '33' AND answer = '1'";
$result = mysqli_query($connection,$yes33);
$rowcount11=mysqli_num_rows($result);
$no33 = "SELECT * FROM  answers WHERE questionid = '33' AND answer = '2'";
$result = mysqli_query($connection,$no33);
$rowcount12=mysqli_num_rows($result);
echo "<td>33</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable34(){
global $connection;
$yes34 = "SELECT * FROM  answers WHERE questionid = '34' AND answer = '1'";
$result = mysqli_query($connection,$yes34);
$rowcount11=mysqli_num_rows($result);
$no34 = "SELECT * FROM  answers WHERE questionid = '34' AND answer = '2'";
$result = mysqli_query($connection,$no34);
$rowcount12=mysqli_num_rows($result);
echo "<td>34</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable35(){
global $connection;
$yes35 = "SELECT * FROM  answers WHERE questionid = '35' AND answer = '1'";
$result = mysqli_query($connection,$yes35);
$rowcount11=mysqli_num_rows($result);
$no35 = "SELECT * FROM  answers WHERE questionid = '35' AND answer = '2'";
$result = mysqli_query($connection,$no35);
$rowcount12=mysqli_num_rows($result);
echo "<td>35</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable36(){
global $connection;
$yes36 = "SELECT * FROM  answers WHERE questionid = '36' AND answer = '1'";
$result = mysqli_query($connection,$yes36);
$rowcount11=mysqli_num_rows($result);
$no36 = "SELECT * FROM  answers WHERE questionid = '36' AND answer = '2'";
$result = mysqli_query($connection,$no36);
$rowcount12=mysqli_num_rows($result);
echo "<td>36</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable37(){
global $connection;
$yes37 = "SELECT * FROM  answers WHERE questionid = '37' AND answer = '1'";
$result = mysqli_query($connection,$yes37);
$rowcount11=mysqli_num_rows($result);
$no37 = "SELECT * FROM  answers WHERE questionid = '37' AND answer = '2'";
$result = mysqli_query($connection,$no37);
$rowcount12=mysqli_num_rows($result);
echo "<td>37</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable38(){
global $connection;
$yes38 = "SELECT * FROM  answers WHERE questionid = '38' AND answer = '1'";
$result = mysqli_query($connection,$yes38);
$rowcount11=mysqli_num_rows($result);
$no38 = "SELECT * FROM  answers WHERE questionid = '38' AND answer = '2'";
$result = mysqli_query($connection,$no38);
$rowcount12=mysqli_num_rows($result);
echo "<td>38</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable39(){
global $connection;
$yes39 = "SELECT * FROM  answers WHERE questionid = '39' AND answer = '1'";
$result = mysqli_query($connection,$yes39);
$rowcount11=mysqli_num_rows($result);
$no39 = "SELECT * FROM  answers WHERE questionid = '39' AND answer = '2'";
$result = mysqli_query($connection,$no39);
$rowcount12=mysqli_num_rows($result);
echo "<td>39</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable40(){
global $connection;
$yes40 = "SELECT * FROM  answers WHERE questionid = '40' AND answer = '1'";
$result = mysqli_query($connection,$yes40);
$rowcount11=mysqli_num_rows($result);
$no40 = "SELECT * FROM  answers WHERE questionid = '40' AND answer = '2'";
$result = mysqli_query($connection,$no40);
$rowcount12=mysqli_num_rows($result);
echo "<td>40</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable41(){
global $connection;
$yes41 = "SELECT * FROM  answers WHERE questionid = '41' AND answer = '1'";
$result = mysqli_query($connection,$yes41);
$rowcount11=mysqli_num_rows($result);
$no41 = "SELECT * FROM  answers WHERE questionid = '41' AND answer = '2'";
$result = mysqli_query($connection,$no41);
$rowcount12=mysqli_num_rows($result);
echo "<td>41</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable42(){
global $connection;
$yes42 = "SELECT * FROM  answers WHERE questionid = '42' AND answer = '1'";
$result = mysqli_query($connection,$yes42);
$rowcount11=mysqli_num_rows($result);
$no42 = "SELECT * FROM  answers WHERE questionid = '42' AND answer = '2'";
$result = mysqli_query($connection,$no42);
$rowcount12=mysqli_num_rows($result);
echo "<td>42</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable43(){
global $connection;
$yes43 = "SELECT * FROM  answers WHERE questionid = '43' AND answer = '1'";
$result = mysqli_query($connection,$yes43);
$rowcount11=mysqli_num_rows($result);
$no43 = "SELECT * FROM  answers WHERE questionid = '43' AND answer = '2'";
$result = mysqli_query($connection,$no43);
$rowcount12=mysqli_num_rows($result);
echo "<td>43</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable44(){
global $connection;
$yes44 = "SELECT * FROM  answers WHERE questionid = '44' AND answer = '1'";
$result = mysqli_query($connection,$yes44);
$rowcount11=mysqli_num_rows($result);
$no44 = "SELECT * FROM  answers WHERE questionid = '44' AND answer = '2'";
$result = mysqli_query($connection,$no44);
$rowcount12=mysqli_num_rows($result);
echo "<td>44</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable45(){
global $connection;
$yes45 = "SELECT * FROM  answers WHERE questionid = '45' AND answer = '1'";
$result = mysqli_query($connection,$yes45);
$rowcount11=mysqli_num_rows($result);
$no45 = "SELECT * FROM  answers WHERE questionid = '45' AND answer = '2'";
$result = mysqli_query($connection,$no45);
$rowcount12=mysqli_num_rows($result);
echo "<td>45</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable46(){
global $connection;
$yes46 = "SELECT * FROM  answers WHERE questionid = '46' AND answer = '1'";
$result = mysqli_query($connection,$yes46);
$rowcount11=mysqli_num_rows($result);
$no46 = "SELECT * FROM  answers WHERE questionid = '46' AND answer = '2'";
$result = mysqli_query($connection,$no46);
$rowcount12=mysqli_num_rows($result);
echo "<td>46</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable47(){
global $connection;
$yes47 = "SELECT * FROM  answers WHERE questionid = '47' AND answer = '1'";
$result = mysqli_query($connection,$yes47);
$rowcount11=mysqli_num_rows($result);
$no47 = "SELECT * FROM  answers WHERE questionid = '47' AND answer = '2'";
$result = mysqli_query($connection,$no47);
$rowcount12=mysqli_num_rows($result);
echo "<td>47</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable48(){
global $connection;
$yes48 = "SELECT * FROM  answers WHERE questionid = '48' AND answer = '1'";
$result = mysqli_query($connection,$yes48);
$rowcount11=mysqli_num_rows($result);
$no48 = "SELECT * FROM  answers WHERE questionid = '48' AND answer = '2'";
$result = mysqli_query($connection,$no48);
$rowcount12=mysqli_num_rows($result);
echo "<td>48</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable49(){
global $connection;
$yes49 = "SELECT * FROM  answers WHERE questionid = '49' AND answer = '1'";
$result = mysqli_query($connection,$yes49);
$rowcount11=mysqli_num_rows($result);
$no49 = "SELECT * FROM  answers WHERE questionid = '49' AND answer = '2'";
$result = mysqli_query($connection,$no49);
$rowcount12=mysqli_num_rows($result);
echo "<td>49</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable50(){
global $connection;
$yes50 = "SELECT * FROM  answers WHERE questionid = '50' AND answer = '1'";
$result = mysqli_query($connection,$yes50);
$rowcount11=mysqli_num_rows($result);
$no50 = "SELECT * FROM  answers WHERE questionid = '50' AND answer = '2'";
$result = mysqli_query($connection,$no50);
$rowcount12=mysqli_num_rows($result);
echo "<td>50</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}



function visitstable51(){
global $connection;
$yes51 = "SELECT * FROM  answers WHERE questionid = '51' AND answer = '1'";
$result = mysqli_query($connection,$yes51);
$rowcount11=mysqli_num_rows($result);
$no51 = "SELECT * FROM  answers WHERE questionid = '51' AND answer = '2'";
$result = mysqli_query($connection,$no51);
$rowcount12=mysqli_num_rows($result);
echo "<td>51</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}



function visitstable52(){
global $connection;
$yes52 = "SELECT * FROM  answers WHERE questionid = '52' AND answer = '1'";
$result = mysqli_query($connection,$yes52);
$rowcount11=mysqli_num_rows($result);
$no52 = "SELECT * FROM  answers WHERE questionid = '52' AND answer = '2'";
$result = mysqli_query($connection,$no52);
$rowcount12=mysqli_num_rows($result);
echo "<td>52</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}



function visitstable53(){
global $connection;
$yes53 = "SELECT * FROM  answers WHERE questionid = '53' AND answer = '1'";
$result = mysqli_query($connection,$yes53);
$rowcount11=mysqli_num_rows($result);
$no53 = "SELECT * FROM  answers WHERE questionid = '53' AND answer = '2'";
$result = mysqli_query($connection,$no53);
$rowcount12=mysqli_num_rows($result);
echo "<td>53</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}



function visitstable54(){
global $connection;
$yes54 = "SELECT * FROM  answers WHERE questionid = '54' AND answer = '1'";
$result = mysqli_query($connection,$yes54);
$rowcount11=mysqli_num_rows($result);
$no54 = "SELECT * FROM  answers WHERE questionid = '54' AND answer = '2'";
$result = mysqli_query($connection,$no54);
$rowcount12=mysqli_num_rows($result);
echo "<td>54</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}



function visitstable55(){
global $connection;
$yes55 = "SELECT * FROM  answers WHERE questionid = '55' AND answer = '1'";
$result = mysqli_query($connection,$yes55);
$rowcount11=mysqli_num_rows($result);
$no55 = "SELECT * FROM  answers WHERE questionid = '55' AND answer = '2'";
$result = mysqli_query($connection,$no55);
$rowcount12=mysqli_num_rows($result);
echo "<td>55</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}



function visitstable56(){
global $connection;
$yes56 = "SELECT * FROM  answers WHERE questionid = '56' AND answer = '1'";
$result = mysqli_query($connection,$yes56);
$rowcount11=mysqli_num_rows($result);
$no56 = "SELECT * FROM  answers WHERE questionid = '56' AND answer = '2'";
$result = mysqli_query($connection,$no56);
$rowcount12=mysqli_num_rows($result);
echo "<td>56</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}



function visitstable57(){
global $connection;
$yes57 = "SELECT * FROM  answers WHERE questionid = '57' AND answer = '1'";
$result = mysqli_query($connection,$yes57);
$rowcount11=mysqli_num_rows($result);
$no57 = "SELECT * FROM  answers WHERE questionid = '57' AND answer = '2'";
$result = mysqli_query($connection,$no57);
$rowcount12=mysqli_num_rows($result);
echo "<td>57</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable58(){
global $connection;
$yes58 = "SELECT * FROM  answers WHERE questionid = '58' AND answer = '1'";
$result = mysqli_query($connection,$yes58);
$rowcount11=mysqli_num_rows($result);
$no58 = "SELECT * FROM  answers WHERE questionid = '58' AND answer = '2'";
$result = mysqli_query($connection,$no58);
$rowcount12=mysqli_num_rows($result);
echo "<td>58</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}


function visitstable59(){
global $connection;
$yes59 = "SELECT * FROM  answers WHERE questionid = '59' AND answer = '1'";
$result = mysqli_query($connection,$yes59);
$rowcount11=mysqli_num_rows($result);
$no59 = "SELECT * FROM  answers WHERE questionid = '59' AND answer = '2'";
$result = mysqli_query($connection,$no59);
$rowcount12=mysqli_num_rows($result);
echo "<td>59</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable60(){
global $connection;
$yes60 = "SELECT * FROM  answers WHERE questionid = '60' AND answer = '1'";
$result = mysqli_query($connection,$yes60);
$rowcount11=mysqli_num_rows($result);
$no60 = "SELECT * FROM  answers WHERE questionid = '60' AND answer = '2'";
$result = mysqli_query($connection,$no60);
$rowcount12=mysqli_num_rows($result);
echo "<td>60</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}

function visitstable61(){
global $connection;
$yes61 = "SELECT * FROM  answers WHERE questionid = '61' AND answer = '1'";
$result = mysqli_query($connection,$yes59);
$rowcount11=mysqli_num_rows($result);
$no61 = "SELECT * FROM  answers WHERE questionid = '61' AND answer = '2'";
$result = mysqli_query($connection,$no59);
$rowcount12=mysqli_num_rows($result);
echo "<td>61</td>";
echo "<td>$rowcount11</td>";
echo "<td>$rowcount12</td>";}



function userstable(){


global $connection;


$query = "SELECT * FROM users";
$getusers = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($getusers)){


   $id = $row['user_id'];
   $branch = $row['name'];
   $score = $row['fullname'];
   $date = $row['password'];
   $auditor = $row['role'];




 echo "<tr>";
 echo "<td><a href='visitview.php?p=$id'>$id</td></a>";
 echo "<td>$branch</td>";
  echo "<td>$score</td>";
 echo "<td>$auditor</td>";
 echo "<td>$date</td>";


  echo "</tr>";
                  
               





}





}




function branchestable(){


global $connection;


$query = "SELECT * FROM    branches";
$getusers = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($getusers)){


   $id = $row['branch_id'];
   $branch = $row['branch_name'];




 echo "<tr>";
 echo "<td><a href='visitview.php?p=$id'>$id</td></a>";
 echo "<td>$branch</td>";


  echo "</tr>";
                  
               





}





}





function insert_categorise(){

    global $connection; 


  if(isset($_POST['submit'])){
                             $title = $_POST['cat_title'];
                                if($title == "" || empty($title)){
                                    echo "please fill the name it cannot be empty!";
                                }else{
                            $stmt= mysqli_prepare($connection ,"INSERT INTO poll(content) VALUE (?)");
                            mysqli_stmt_bind_param($stmt , 's', $title);
                            mysqli_execute($stmt);
                             }


                             mysqli_stmt_close($stmt);
                              }       


                          }
                          
 function findAllcateogrise(){
    global $connection; 
 $query= "SELECT * FROM poll";
                              $gettingcatagories = mysqli_query($connection,$query);
                                while($row = mysqli_fetch_assoc($gettingcatagories)){
                                    $id = $row['id'];
                                    $name = $row['content'];
                                    $active = $row['active'];
                                    echo "<tr>";

                                    echo "<td>{$id}</td>"; 

                                    echo "<td>{$name}</td>"; 
                  
                                    echo "<td><a class='btn btn-primary' href='categorize.php?delete={$id}'>Delete</a></td>"; 
                                    echo "<td><a class='btn btn-danger' href='categorize.php?edit={$id}'>Edit</a></td>"; 

                                    echo "<tr>";
                                 }


}




function deletecategrorize(){
    global $connection; 

      if(isset($_GET['delete'])){

                                    $the_cat_id = $_GET['delete'];
                                    $query = "DELETE FROM branches WHERE  cat_id = {$the_cat_id}";
                                    $delete_cat = mysqli_query($connection,$query);
                                    header("Location: branches.php");
                                 }else {


                                    echo "some thing is wroing dear fruend";
                                 }



} ;
?>