<?php
// Models è una classe che ci consente di connetterci al singolo database
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// nome tabella movies
class Movie extends Model
{
    use HasFactory;
}
