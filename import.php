<?php
// (A) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbHost = 'localhost';
$dbName = 'mydb';
$dbChar = 'utf8';
$dbUser = 'root';
$dbPass = 'Wormhole.9';
try {
  $pdo = new PDO(
    "mysql:host=".$dbHost.";dbname=".$dbName.";charset=".$dbChar,
    $dbUser, $dbPass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }
 
// (B) READ UPLOADED CSV


$fh = fopen("pokemon_datanewnew.csv", "r");
if ($fh === false) { exit("Failed to open uploaded CSV file"); }

// (C) IMPORT  ROW BY ROW

// $stats = array();
// $count = 0;
// while (($row = fgetcsv($fh,1000,";")) !== false) {
//     $count++;
//     array_push($stats, $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);
//     if ($count == 898){
//         $arr = array_unique($stats);
//         print_r(count($arr));
//         for($i=0; $i<6286; $i++){
//             $test = array($arr[$i]);
//             try {
//             $stmt = $pdo->prepare("INSERT INTO `stats`(`value`) VALUES (?)");
//             $stmt->execute($test);
//           } catch (Exception $ex) { echo $ex->getmessage(); }
//         }
//     }
//   }
// fclose($fh);

// echo "DONE.";




// IMPORT TABLE TYPE

// $types = array();
// $count = 0;
// while (($row = fgetcsv($fh,1000,";")) !== false) {
//     $count++;
//     if ($row[1] != "" && $row[2] != ""){
    
//         array_push($types, $row[1], $row[2]);
//         if ($count == 898){
//             $arr = array_unique($types);
//             print_r(array_unique($types));
//             for($i=0; $i<1796; $i++){
//                 $test = array($arr[$i]);
//                 try {
//                 $stmt = $pdo->prepare("INSERT INTO `types`(`type`) VALUES (?)");
//                 $stmt->execute($test);
//               } catch (Exception $ex) { echo $ex->getmessage(); }
//             }
//         }
//     }
// }
// fclose($fh);
// echo "DONE.";

// IMPORT TABLE GENERATIONS


// $generations = array();
// $count = 0;
// while (($row = fgetcsv($fh,1000,";")) !== false) {
//     $count++;
//     array_push($generations, $row[13]);
//     if ($count == 898){
//         $arr = array_unique($generations);
//         print_r(array_unique($generations));
//         for($i=0; $i<898; $i++){
//             $test = array($arr[$i]);
//             try {
//             $stmt = $pdo->prepare("INSERT INTO `generations`(`generation`) VALUES (?)");
//             $stmt->execute($test);
//           } catch (Exception $ex) { echo $ex->getmessage(); }
//         }
//     }
// }
// fclose($fh);
// echo "DONE.";


// TEST IMPORT NAME & IMAGE/URL

// while (($row = fgetcsv($fh,1000,";")) !== false) {

//             try {
//             $stmt = $pdo->prepare("INSERT INTO `infos`(`name`, `url`) VALUES (?,?)");
//             $stmt->execute([$row[0], $row[10]]);
//           } catch (Exception $ex) { echo $ex->getmessage(); }
        
//         }


// fclose($fh);
// echo "DONE.";







// IMPORT TABLE INFOS


// TEST
// while (($row = fgetcsv($fh,1000,";")) !== false) {
//   $test = [];
//   array_push($test, $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[13]);


// TOTAL


            try {
            $stmt = $pdo->prepare("SELECT csv.total, stats.id_stats FROM csv JOIN stats WHERE csv.total = stats.value");
            $stmt->execute();
            $result_total = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }
          
//URL        
          
          try {
            $stmt = $pdo->prepare("SELECT csv.image, stats.id_stats FROM csv JOIN stats WHERE csv.total = stats.value");
            $stmt->execute();
            $result_total = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }
          
        

// HP

            try {
            $stmt = $pdo->prepare("SELECT csv.hp, stats.id_stats FROM csv JOIN stats WHERE csv.hp = stats.value");
            $stmt->execute();
            $result_hp = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }
        


// ATTACK

            try {
            $stmt = $pdo->prepare("SELECT csv.attack, stats.id_stats FROM csv JOIN stats WHERE csv.attack = stats.value");
            $stmt->execute();
            $result_attack = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }


// DEFENSE


            try {
            $stmt = $pdo->prepare("SELECT csv.defense, stats.id_stats FROM csv JOIN stats WHERE csv.defense = stats.value");
            $stmt->execute();
            $result_defense = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }


// SP_ATTACK

            try {
            $stmt = $pdo->prepare("SELECT csv.special_attack, stats.id_stats FROM csv JOIN stats WHERE csv.special_attack = stats.value");
            $stmt->execute();
            $result_special_attack = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }


//special_defense


            try {
            $stmt = $pdo->prepare("SELECT csv.special_defense, stats.id_stats FROM csv JOIN stats WHERE csv.special_defense = stats.value");
            $stmt->execute();
            $result_special_defense = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }
        


//SPEED


            try {
            $stmt = $pdo->prepare("SELECT csv.speed, stats.id_stats FROM csv JOIN stats WHERE csv.speed = stats.value");
            $stmt->execute();
            $result_speed = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }


// GENERATIONS


            try {
            $stmt = $pdo->prepare("SELECT csv.generation, generations.id_generations FROM csv JOIN generations WHERE csv.generation = generations.generation");
            $stmt->execute();
            $result_generation = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }
          // var_dump($result_generation);


// INSERT 


          for($i=0;$i<count($result_generation);$i++){
            $generations = $result_generation[$i][1];
            $total = $result_total[$i][1];
            $hp = $result_hp[$i][1];
            $attack = $result_attack[$i][1];
            $defense = $result_defense[$i][1];
            $special_attack = $result_special_attack[$i][1];
            $special_defense = $result_special_defense[$i][1];
            $speed = $result_speed[$i][1];
            // var_dump($result_generation);

          try{
              $stmt = $pdo->prepare("INSERT INTO infos (generations_id_generations, total, hp, attack, defense, special_attack, special_defense, speed) VALUES (?,?,?,?,?,?,?,?)");
              $stmt->execute([$generations, $total, $hp, $attack, $defense, $special_attack, $special_defense, $speed]);
            } catch (Exception $ex) { echo $ex->getmessage(); }
          }


        // }
fclose($fh);
echo "DONE.";




?>