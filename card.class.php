<?php

require_once 'base.php';

class Card extends Proto {
  public $id_card = '0';
  public $creation_date = '';
  public $modification_date = '';
  public $text = '';
  public $type = '';
  public $author = '';
  public $token = '';
  public $state = '';
  public $table_name = 'cards';
  public $id_name = 'id_card';

  function text_exist() {
    $text = san_utf8($this->text);
    $sql = "SELECT id_card FROM $this->table_name WHERE text = '$text' LIMIT 1";
    $r = result($sql, 'FIRST');
    return empty($r) ? false : $r != $this->id_card;
  }
}