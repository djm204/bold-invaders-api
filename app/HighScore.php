<?php namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class HighScore extends Model
{
     
     protected $fillable = ['name', 'highscore'];
     
}
?>