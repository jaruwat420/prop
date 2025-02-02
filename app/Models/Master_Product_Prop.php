<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Product_Prop extends Model
{
    use HasFactory;

    protected $table = 'Master_Product_prop';
    public $timestamps = false;

    protected $fillable = [
        'CustID', 'StatusID', 'StatusDes', 'Remark', 'ProductID',
        'ProductName', 'Target', 'Add', 'CurrentMonth','Recommend', 'Create_Date'
    ];

    protected $dates = ['Create_Date'];
}
