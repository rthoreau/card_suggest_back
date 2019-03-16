<?php

require_once 'base.php';

class Card extends Proto {
  public $id_card = '0';
  public $creation_date = '';
  public $modification_date = '';
  public $text = '';
  public $type = '';
  public $author = '';
  public $table_name = 'card';
}