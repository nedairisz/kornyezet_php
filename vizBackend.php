<?php 
    if (isset($_POST['szamol'])){
        $V=$_POST['sebesseg'];
        $A=$_POST['keresztMetszet'];
        $w = $A *$V;
        echo "<p>Az adott keresztmetszeten átáramló folyadék térfogata: $w m3.</p>";
    }
?>