<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curs extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    // protected $primaryKey = 'id';
    // protected $incrementing = true;
    // protected $keyType;
    public $timestamps = false;

    /**
     * Get the cicle that owns the Curs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cicle()
    {
        return $this->belongsTo(Cicle::class, 'cicles_id');
    }
}
