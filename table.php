<?php

class myTable {

    public $name;

    public function __construct($name = "default table") {
        $this->name = $name;
    }

    public function awesomefunction() {
        echo 19+20;
    }

    public static function make_table($filename) {
        try {
            if (!file_exists($filename)) {
                throw new Exception();
            }

            $data = file_get_contents($filename);
            $lines = explode("\n", trim($data)); 
            $lines = array_reverse($lines);         ?>

            <table>
                <?php    foreach($lines as $line) {
                            list($name, $fruit) = explode(",", trim($line)); ?>
                            <tr> 
                                <td> <?= $name ?> </td> 
                                <td> <?= $fruit ?> </td> 
                            </tr>
                <?php } ?>
            </table>
        <?php
        } catch (Exception $e) {
            echo $filename . " does not exist";
        }
        
    }
}

?>