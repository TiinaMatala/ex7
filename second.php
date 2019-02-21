
<h2>Second page</h2>
<p>
    This is the second page
</p>
<h3>PHP variables</h3>
<?php
$name='Garfield';
$age=5;
echo 'Name of the cat is <b>'.$name.'</b> and it is <b>'.$age.'</b> years old.';
?>
<h3>PHP array</h3>
<p>Names from the array</p>
<?php
$names=array('Jim', 'Lisa', 'Bob');
?>
<?php print_r($names); ?>
<br>
<?php echo 'Second name is: '.$names[1]; ?>
<h3>Associative array</h3>
<p>All persons:</p>
<?php
    $persons=array(
      array("fn"=>'Jim', "ln"=>'Smith'),
      array("fn"=>'Lisa', "ln"=>'Simpson'),
      array("fn"=>'Bob', "ln"=>'Jones')
    );
?>
<?php print_r($persons); ?>
<p>Lastnames:</p>
  <?php
  foreach ($persons as $row) {
    echo '<br>'.$row['ln'].'<br>';
  }
  ?>
