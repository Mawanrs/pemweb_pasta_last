<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'bookings';

    public const CATEGORY_SELECT = [
        'Dibatalkan' => 'Dibatalkan',
        'Ter-Booking' => 'Ter-Booking',
        'Tidak_tersedia' => 'Tidak Tersedia',
    ];

    public const JENIS_TEMPAT = [
        'outdoor' => 'Out-Door',
        'indoor' => 'In-Door',
        'smoking_area' => 'Smoking Area',
    ];

    public const JENIS_TAMU = [
        'Regular' => 'Regular',
        'VIP' => 'VIP',
    ];

    protected $dates = [
        'start_book',
        'finish_book',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_pemesan',
        'jenis_tempat',
        'jenis_tamu',
        'jumlah_tamu',
        'start_book',
        'finish_book',
        'category',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getStartBookAttribute($value)
{
    return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d\TH:i') : null;
}

public function setStartBookAttribute($value)
{
    $this->attributes['start_book'] = $value ? Carbon::createFromFormat('Y-m-d\TH:i', $value)->format('Y-m-d H:i:s') : null;
}

public function getFinishBookAttribute($value)
{
    return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d\TH:i') : null;
}

public function setFinishBookAttribute($value)
{
    $this->attributes['finish_book'] = $value ? Carbon::createFromFormat('Y-m-d\TH:i', $value)->format('Y-m-d H:i:s') : null;
}

}
