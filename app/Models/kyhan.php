<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kyhan extends Model
{
    use HasFactory;
    //don vi tinh la ngay
    protected $table = 'kyhan';
    const CREATED_AT = 'ngaytao';
    const UPDATED_AT = 'ngaycapnhat';

    protected $fillable = ['makyhan', 'tenkyhan', 'thoigiannhanlai', 'laisuat'];
    
    const dskyhan = [
        1 => [
            'makyhan' => "Khongkyhan",
            'tenkyhan' => "Gửi không kỳ hạn",
            'thoigiannhanlai' => 1,
            'laisuat' => 0.005,
        ],
        2 => [
            'makyhan' => "3thang",
            'tenkyhan' => "Kỳ hạn 3 tháng",
            'thoigiannhanlai' => 90,
            'laisuat' => 0.05,
        ],
        3 => [
            'makyhan' => "6thang",
            'tenkyhan' => "Kỳ hạn 6 tháng",
            'thoigiannhanlai' => 180,
            'laisuat' => 0.055,
        ],
    ];
}
