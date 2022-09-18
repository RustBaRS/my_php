<?php

namespace App\Models;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $fillable = [
        'Book_title',
        'First_Name_of_Author',
        'Last_Name_of_Author'
    ];
    
    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
}
