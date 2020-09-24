<?php

namespace App;
// QUESTO è UN MODEL
use Illuminate\Database\Eloquent\Model;
// mi tira dentro la tabella dal database
class Pagante extends Model
{
  // non mi da noia con nomi singolari e plurali
  protected $table = "Paganti";
}
