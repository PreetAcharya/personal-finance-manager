<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class debit extends Model
{
    protected $table = 'debits';
    protected $primaryKey = 'debitId';


    protected $fillable = [
        'debitUserId', 'debitName', 'debitCategoryId','debitAmount','debitDate'
    ];

    public function debitUserId()
    {
        return $this->hasOne('App\User');
    }

    public function debitCategoryId()
    {
        return $this->hasOne('App\Category');
    }
}
