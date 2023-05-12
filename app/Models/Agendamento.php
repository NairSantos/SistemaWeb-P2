<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agendamento
 *
 * @package App\Models
 *
 * @property int    $id
 * @property string $nome
 * @property string $telefone
 * @property string $origem
 * @property string $data_contato
 * @property string $observacao
 * @property string $created_at
 * @property string $updated_at
 */
class Agendamento extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'telefone',
        'origem',
        'data_contato',
        'observacao',
    ];

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        return 'agendamentos';
    }
}