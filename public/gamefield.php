<?php
    class Gamefield {
        private $fields = array (
            array(' ',' ',' '),
            array(' ',' ',' '),
            array(' ',' ',' ')
        );
        
        public function gamefield(){
            
        }

        public function placeX($x,$y){
            if($this->fields[$x][$y]==' '){
                $this->fields[$x][$y]= 'X';
            }
        }
        public function placeO($x,$y){
            if($this->fields[$x][$y]==' '){
                $this->fields[$x][$y]= 'O';
            }
        }

        public function getField($x,$y){
            return $this->fields[$x][$y];
        }

        public function getFields(){
            return $this->fields;
        }
        //places O in a random empty position
        public function doEnemyTurn(){
            $i = true;
            $counter = 0;
            $fieldArray = array (
                array(true,true,true),
                array(true,true,true),
                array(true,true,true)
            );
            while($i){
                $x = rand(0,2);
                $y = rand(0,2);
                
                if($this->fields[$x][$y]==' '){
                    $this->placeO($x,$y);
                    $i =false;
                }
                if($fieldArray[$x][$y]){
                    $fieldArray[$x][$y]=false;
                    $counter++;
                }
                if($counter==9){
                    $i=false;
                }



            }

        }
        public function checkForWinX(){
            //check for a horizontal win
            if($this->fields[0][0]=='X'&&$this->fields[0][1]=='X'&&$this->fields[0][2]=='X'||$this->fields[1][0]=='X'&&$this->fields[1][1]=='X'&&$this->fields[1][2]=='X'||$this->fields[2][0]=='X'&&$this->fields[2][1]=='X'&&$this->fields[2][2]=='X'){
                return true;
            //check for a vertical win
            }elseif($this->fields[0][0]=='X'&&$this->fields[1][0]=='X'&&$this->fields[2][0]=='X'||$this->fields[0][1]=='X'&&$this->fields[1][1]=='X'&&$this->fields[2][1]=='X'||$this->fields[0][2]=='X'&&$this->fields[1][2]=='X'&&$this->fields[2][2]=='X'){
                return true;
            //check for a diagonal win
            }elseif($this->fields[0][0]=='X'&&$this->fields[1][1]=='X'&&$this->fields[2][2]=='X'||$this->fields[0][2]=='X'&&$this->fields[1][1]=='X'&&$this->fields[2][0]=='X'){
                return true;
            }else{
                return false;
            }
        }
        public function checkForWinO(){
            //check for a horizontal win
            if($this->fields[0][0]=='O'&&$this->fields[0][1]=='O'&&$this->fields[0][2]=='O'||$this->fields[1][0]=='O'&&$this->fields[1][1]=='O'&&$this->fields[1][2]=='O'||$this->fields[2][0]=='O'&&$this->fields[2][1]=='O'&&$this->fields[2][2]=='O'){
                return true;
            //check for a vertical win
            }elseif($this->fields[0][0]=='O'&&$this->fields[1][0]=='O'&&$this->fields[2][0]=='O'||$this->fields[0][1]=='O'&&$this->fields[1][1]=='O'&&$this->fields[2][1]=='O'||$this->fields[0][2]=='O'&&$this->fields[1][2]=='O'&&$this->fields[2][2]=='O'){
                return true;
            //check for a diagonal win
            }elseif($this->fields[0][0]=='O'&&$this->fields[1][1]=='O'&&$this->fields[2][2]=='O'||$this->fields[0][2]=='O'&&$this->fields[1][1]=='O'&&$this->fields[2][0]=='O'){
                return true;
            }else{
                return false;
            }
        }


    }
?>