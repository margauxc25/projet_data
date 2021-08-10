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

// (C) IMPORT CSV ROW BY ROW


// while (($row = fgetcsv($fh,1000,";")) !== false) {
//   try {
   
//     $stmt = $pdo->prepare("INSERT INTO `csv` (`name`, `type1`, `type2`, `total`, `hp`,`attack`,`defense`, `special_attack`, `special_defense`, `speed`, `image`, `icon`, `id`, `generation`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
//     $stmt->execute([$row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13]]);
//   } catch (Exception $ex) { echo $ex->getmessage(); }
// }
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








// IMPORT TABLE INFOS




// // TOTAL


//             try {
//             $stmt = $pdo->prepare("SELECT csv.total, stats.id_stats FROM csv JOIN stats WHERE csv.total = stats.value");
//             $stmt->execute();
//             $result_total = $stmt->fetchAll(PDO::FETCH_NUM);
//           } catch (Exception $ex) { echo $ex->getmessage(); }
          


// // HP

//             try {
//             $stmt = $pdo->prepare("SELECT csv.hp, stats.id_stats FROM csv JOIN stats WHERE csv.hp = stats.value");
//             $stmt->execute();
//             $result_hp = $stmt->fetchAll(PDO::FETCH_NUM);
//           } catch (Exception $ex) { echo $ex->getmessage(); }
        


// // ATTACK

//             try {
//             $stmt = $pdo->prepare("SELECT csv.attack, stats.id_stats FROM csv JOIN stats WHERE csv.attack = stats.value");
//             $stmt->execute();
//             $result_attack = $stmt->fetchAll(PDO::FETCH_NUM);
//           } catch (Exception $ex) { echo $ex->getmessage(); }


// // DEFENSE


//             try {
//             $stmt = $pdo->prepare("SELECT csv.defense, stats.id_stats FROM csv JOIN stats WHERE csv.defense = stats.value");
//             $stmt->execute();
//             $result_defense = $stmt->fetchAll(PDO::FETCH_NUM);
//           } catch (Exception $ex) { echo $ex->getmessage(); }


// // SP_ATTACK

//             try {
//             $stmt = $pdo->prepare("SELECT csv.special_attack, stats.id_stats FROM csv JOIN stats WHERE csv.special_attack = stats.value");
//             $stmt->execute();
//             $result_special_attack = $stmt->fetchAll(PDO::FETCH_NUM);
//           } catch (Exception $ex) { echo $ex->getmessage(); }


// //special_defense


//             try {
//             $stmt = $pdo->prepare("SELECT csv.special_defense, stats.id_stats FROM csv JOIN stats WHERE csv.special_defense = stats.value");
//             $stmt->execute();
//             $result_special_defense = $stmt->fetchAll(PDO::FETCH_NUM);
//           } catch (Exception $ex) { echo $ex->getmessage(); }
        


// //SPEED


//             try {
//             $stmt = $pdo->prepare("SELECT csv.speed, stats.id_stats FROM csv JOIN stats WHERE csv.speed = stats.value");
//             $stmt->execute();
//             $result_speed = $stmt->fetchAll(PDO::FETCH_NUM);
//           } catch (Exception $ex) { echo $ex->getmessage(); }


// // GENERATIONS


          //   try {
          //   $stmt = $pdo->prepare("SELECT csv.generation, generations.id_generations FROM csv JOIN generations WHERE csv.generation = generations.generation");
          //   $stmt->execute();
          //   $result_generation = $stmt->fetchAll(PDO::FETCH_NUM);
          // } catch (Exception $ex) { echo $ex->getmessage(); }
          // var_dump($result_generation);

// // URL

//             try {
//             $stmt = $pdo->prepare("SELECT csv.image FROM csv");
//             $stmt->execute();
//             $result_url = $stmt->fetchAll(PDO::FETCH_NUM);
//           } catch (Exception $ex) { echo $ex->getmessage(); }


// // NAME

          //   try {
          //   $stmt = $pdo->prepare("SELECT csv.name FROM csv");
          //   $stmt->execute();
          //   $result_name = $stmt->fetchAll(PDO::FETCH_NUM);
          // } catch (Exception $ex) { echo $ex->getmessage(); }
          //           var_dump($result_name[1][0]);

// // INSERT 


//           for($i=0;$i<898;$i++){
//             $name = $result_name[$i][0];
//             $url = $result_url[$i][0];
//             $generations = $result_generation[$i][1];
//             $total = $result_total[$i][1];
//             $hp = $result_hp[$i][1];
//             $attack = $result_attack[$i][1];
//             $defense = $result_defense[$i][1];
//             $special_attack = $result_special_attack[$i][1];
//             $special_defense = $result_special_defense[$i][1];
//             $speed = $result_speed[$i][1];
//             // var_dump($result_generation);

//           try{
//               $stmt = $pdo->prepare("INSERT INTO infos (name, url, generations_id_generations, total, hp, attack, defense, special_attack, special_defense, speed) VALUES (?,?,?,?,?,?,?,?,?,?)");
//               $stmt->execute([$name, $url, $generations, $total, $hp, $attack, $defense, $special_attack, $special_defense, $speed]);
//             } catch (Exception $ex) { echo $ex->getmessage(); }
//           }


        
        
// fclose($fh);
// echo "DONE.";





// IMPORT TABLE TYPES_HAS_INFOS


          try {
            $stmt = $pdo->prepare("SELECT csv.id, types.id_type FROM csv JOIN types WHERE csv.type1 = types.type UNION SELECT csv.id, types.id_type FROM csv JOIN types WHERE csv.type2 = types.type");
            $stmt->execute();
            $result_types_has_infos = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }
          // var_dump($result_types_has_infos);


            
 for($i=0;$i<1342;$i++){
            $types_has_infos1 = $result_types_has_infos[$i][0];
            $types_has_infos2 = $result_types_has_infos[$i][1];
          try{
              $stmt = $pdo->prepare("INSERT INTO types_has_infos (types_id_type, infos_id_pokemon) VALUES (?,?)");
              $stmt->execute([$types_has_infos2, $types_has_infos1]);
            } catch (Exception $ex) { echo $ex->getmessage(); }
          }
fclose($fh);
echo "DONE.";


?>