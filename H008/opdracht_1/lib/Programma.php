<?php

/**
 * @author    Vinayak
 * @version   1.0
 */

class Programma {

  public $programName;
  public $description;

  /**
  * $programName and $description are Strings.
  */
  function __construct($programName, $description) {
    $this->programName = $programName;
    $this->description = $description;
  }

  /**
  * gives the programName and description a value (NOTE: value is in String).
  */
  function setNaam($programName, $description) {
    $this->programName = $programName;
    $this->description = $description;
  }

  /**
  * returns the value of programName and description.
  */
  function getNaam() {
    echo "<br>";
    echo $this->programName;
    echo "<br>";
    echo $this->description;
  }
}
