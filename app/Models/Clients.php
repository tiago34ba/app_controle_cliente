<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
                            'nm_cliente',
                            'cep',
                            'observaçoes',
                            'endereco',
                            'dt_cadastro',
                            'nu_telefone',
                            'nu_celular',
                            'ds_razao_social',
                            'ds_nome_fantasia',
                            'nu_documento',
                            'dt_cadastro_cerc',
                            'updated_at',
                            'email',
                        ];
}
