<?php

namespace App;
// QUESTO è UN MODEL = controparte in php di una tabella del database
use Illuminate\Database\Eloquent\Model;
// mi tira dentro la tabella dal database
class Pagante extends Model
{
  // non mi da noia con nomi singolari e plurali perchè laravel ragiona così
  protected $table = "Paganti";
}
