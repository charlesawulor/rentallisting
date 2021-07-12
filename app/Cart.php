<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null ;
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($oldCart)
      {
    if ($oldCart) {
    $this->items = $oldCart->items;
    $this->totalQty = $oldCart->totalQty;
    $this->totalPrice = $oldCart->totalPrice;
    }
   }

   
    public function add($item, $id){
    $storedItem = ['qty' => 0, 'price' => $item->inspection_cost, 'item' =>    $item ];
    if ($this->items){
          if (array_key_exists($id, $this->items)){
        $storedItem = $this->items[$id];
      }
    }
 
    $storedItem['qty']++;
    $storedItem['price'] = $item->inspection_cost * $storedItem['qty'];
    $this->items[$id] = $storedItem;
    $this->totalQty++;
    $this->totalPrice += $item->inspection_cost;


 }
 

    
    public function reduceByOne($id) {
       $this->items[$id]['qty']--;
       $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
       $this->totalQty--;
       $this->totalPrice -= $this->items[$id]['item']['inspection_cost'];
       if($this->items[$id]['qty'] <=0) {
       unset($this->items[$id]);
       }

    }

    public function removeItem($id) {
      $this->totalQty -= $this->items[$id]['qty'];
      $this->totalPrice -= $this->items[$id]['item']['inspection_cost'];
      unset($this->items[$id]);
    }

}
