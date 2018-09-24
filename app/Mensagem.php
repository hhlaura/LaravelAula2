<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Atividade;
class Mensagem extends Model
{
    protected $table = 'mensagem';
    public function atividade()
    {
        return $this->belongsTo(Atividade::class); //pertence a
    }
}