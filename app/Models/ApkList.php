<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApkList extends Model
{

    protected $table = 'apk_list';
    protected $primaryKey = 'id';

    public $incrementing = false;
    protected $fillable = [
        'id',
        'apk_name',
        'apk_package',
        'apk_status',
        'apk_icon',

        'redirect_status',
        'redirect_to',
        
        'ads_type',
        // fan
        'fan_inter',
        'fan_banner',
        'fan_native',
        // admob
        'admob_inter',
        'admob_banner',
        'admob_native',
        'onesignal_api',
        'onesignal_secret',

        'notice_status',
        'notice_title',
        'notice_desc',
        'notice_url',
        // button
        'button_detail_status',
        'button_download_status',


    ];
}
