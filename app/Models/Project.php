<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
   

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where('judul', 'like', '%' .$search . '%')->
            orWhere('prjleader', 'like', '%' .$search . '%')->
            orWhere('nama_klien', 'like', '%' .$search . '%');
        });
    }
}
