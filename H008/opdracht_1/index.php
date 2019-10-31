<?php

  include_once("lib/Programma.php");
  include_once("lib/Liedje.php");

$ditProgramma = new Programma("programma naam yeet", "een yeet programma");
$ditLiedje = new Liedje("liedje_1");

$ditProgramma->setNaam("yeet", "(:");
echo $ditProgramma->getNaam();
$ditLiedje->setLied("liedje_2");
echo $ditLiedje->getLied();
