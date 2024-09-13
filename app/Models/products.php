<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'product_type', 'product_amount', 'employee_id'];

    // กำหนดความสัมพันธ์ระหว่าง Product กับ User
    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
}