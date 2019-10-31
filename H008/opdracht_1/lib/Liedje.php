<?php

/**
 * @author    Vinayak
 * @version   1.0
 */

class Liedje {

  public $songs = array();

  /**
  * $songs is een array vol met strings.
  */
  function __construct($songs) {
    array_push($this->songs, $songs);
  }

  /**
  * gives the songs[] a value (NOTE: value is in String Array).
  */
  function setLied($songs) {
    array_push($this->songs, $songs);
  }

  /**
  * returns the value of songs[].
  */
  function getLied() {
    echo "<br>";
    foreach ($this->songs as $song) {
      echo "<br>$song";
    }
  }
}
