<?php
require_once 'base.php';
headers();
$operation = p('operation');
$r = [];
if ($operation) {
  if ($operation === 'save_card') {
    $id = p('id', 0);
    $card = new Card($id);
    if ((!empty($card->token) && $card->token !== p('token')) || !empty($card->state)) {
      return;
    }
    $card->recover();
    $card->token = empty($card->token) ? token_gen(20) : $card->token;
    if ($card->text_exist()) {
      $r['message'] = 'Une carte existe deja avec ce texte !';
      echo json_encode($r);
      return;
    }
    $r['id'] = $card->save();
    $r['token'] = $card->token;
  }
  if ($operation === 'remove_card') {
    $id = p('id', 0);
    if (!check_id($id)) {
      return;
    }
    $token = p('token', 0);
    $card = new Card($id);
    if (empty($card->token) || $card->token !== $token) {
      return;
    }
    $card->state = 'deleted';
    $r['id'] = $card->save();
  }
}
if (empty($r)) {
  return;
}
echo json_encode($r);