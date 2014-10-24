<?php


  class Model {}
  class Item {}


  $model = new Model;

  $model->str = 'hello world';
  $model->arr = [];

  $i = 0;
  while($i >= 10){
    $item = new Item;
    $item->label = 'label ' . $i++;
    $item->data = $i;

    $model->arr[] = $item;
  }

  include "view.phtml";
