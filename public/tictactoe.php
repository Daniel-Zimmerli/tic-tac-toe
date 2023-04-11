<?php
require("gamefield.php");
$winMessage='';
session_start();

if(isset($_POST['reset'])) {
    deleteGamefield(); 
}
if(isset($_SESSION['gamefield'])==false){
    $gamefield = new Gamefield();
    $_SESSION['gamefield'] =serialize($gamefield);
 
}
$gamefield = unserialize($_SESSION['gamefield']);

if(isset($_POST['field1'])) {
    $gamefield->placeX(0,0);
    $gamefield->doEnemyTurn();
    $winMessage=checkForWin($gamefield);
    saveGamefield($gamefield);
}
if(isset($_POST['field2'])) {
    $gamefield->placeX(0,1);
    $gamefield->doEnemyTurn();
    $winMessage=checkForWin($gamefield);
    saveGamefield($gamefield);
}
if(isset($_POST['field3'])) {
    $gamefield->placeX(0,2);
    $gamefield->doEnemyTurn();
    $winMessage=checkForWin($gamefield);
    saveGamefield($gamefield);
}
if(isset($_POST['field4'])) {
    $gamefield->placeX(1,0);
    $gamefield->doEnemyTurn();
    $winMessage=checkForWin($gamefield);
    saveGamefield($gamefield);
}
if(isset($_POST['field5'])) {
    $gamefield->placeX(1,1);
    $gamefield->doEnemyTurn();
    $winMessage=checkForWin($gamefield);
    saveGamefield($gamefield);
}
if(isset($_POST['field6'])) {
    $gamefield->placeX(1,2);
    $gamefield->doEnemyTurn();
    $winMessage=checkForWin($gamefield);
    saveGamefield($gamefield);
}
if(isset($_POST['field7'])) {
    $gamefield->placeX(2,0);
    $gamefield->doEnemyTurn();
    $winMessage=checkForWin($gamefield);
    saveGamefield($gamefield);
}
if(isset($_POST['field8'])) {
    $gamefield->placeX(2,1);
    $gamefield->doEnemyTurn();
    $winMessage=checkForWin($gamefield);
    saveGamefield($gamefield);
}
if(isset($_POST['field9'])) {
    $gamefield->placeX(2,2);
    $gamefield->doEnemyTurn();
    $winMessage=checkForWin($gamefield);
    saveGamefield($gamefield);
}
function saveGamefield($gamefield){
    $_SESSION['gamefield'] =serialize($gamefield);
}

function deleteGamefield(){
    unset($_SESSION['gamefield']);
}
function checkForWin($gamefield){
    if($gamefield->checkForWinX()){
        $winMessage = 'X Wins!';
    }elseif($gamefield->checkForWinO()){
        $winMessage = 'O Wins!';
    }else{
        $winMessage = '';
    }
    return $winMessage;
}

?>
<html>
<head>
    <title>Tic Tac Toe</title>
    <style>
        .box{
            width: 100px;
            height: 100px;
            background-color: white;
            font-size: 50px;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Tic Tac Toe</h1>
    <form name ="tictactoe" method="post">
        <input type="submit" name="field1" class="box" value="<?php echo $gamefield->getField(0,0)?>"/>
        <input type="submit" name="field2" class="box" value="<?php echo $gamefield->getField(0,1)?>"/>
        <input type="submit" name="field3" class="box" value="<?php echo $gamefield->getField(0,2)?>"/>
        <br>
        <input type="submit" name="field4" class="box" value="<?php echo $gamefield->getField(1,0)?>"/>
        <input type="submit" name="field5" class="box" value="<?php echo $gamefield->getField(1,1)?>"/>
        <input type="submit" name="field6" class="box" value="<?php echo $gamefield->getField(1,2)?>"/>
        <br>
        <input type="submit" name="field7" class="box" value="<?php echo $gamefield->getField(2,0)?>"/>
        <input type="submit" name="field8" class="box" value="<?php echo $gamefield->getField(2,1)?>"/>
        <input type="submit" name="field9" class="box" value="<?php echo $gamefield->getField(2,2)?>"/>
        <br>
        <input type="submit" name="reset" value="Reset"/>
        <br>
        <?php echo $winMessage?>
    </form>
</body>

</html>
