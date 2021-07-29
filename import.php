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

// (C) IMPORT ROW BY ROW

$stats = array();
$count = 0;
while (($row = fgetcsv($fh,1000,";")) !== false) {
    $count++;
    array_push($stats, $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);
    if ($count == 898){
        $arr = array_unique($stats);
        print_r(count($arr));
        // for($i=0; $i<count($arr); $i++){
        //     $test = array($arr[$i]);
        // //     try {
        //     $stmt = $pdo->prepare("INSERT INTO `stats`(`value`) VALUES (?)");
        //     $stmt->execute($test);
        //   } catch (Exception $ex) { echo $ex->getmessage(); }
        // }
    }
}
fclose($fh);



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

// while (($row = fgetcsv($fh,1000,";")) !== false) {

//             try {
//             $stmt = $pdo->prepare("INSERT INTO `infos`(`name`, `url`, `total`, `hp`, `attack`, `defense`, `special_attack`, `special_defense`, `speed`, `generations_id_generations`) VALUES (?,?,?,?,?,?,?,?,?,?)");
//             $stmt->execute([$row[0], $row[10], 2, 2, 2, 2, 2, 2, 2, 2]);
//           } catch (Exception $ex) { echo $ex->getmessage(); }
//         }
    

// fclose($fh);
// echo "DONE.";
?> 
