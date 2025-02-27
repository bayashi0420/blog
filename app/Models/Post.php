<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getBylimit(int $limit_count = 10)
    {
        return $this->orderby('updated_at', 'desc')->limit($limit_count)->get();
    }
}
