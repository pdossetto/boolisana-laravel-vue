<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // valutare se ha senso fare una relazione 1-n
    // o se mantenere il tipo di pasta come proprietà stringa semplice
    public function shape() {
        return $this->belongsTo('App\Shape');
    }
}
