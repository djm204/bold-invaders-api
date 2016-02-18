<?php
  
namespace App\Http\Controllers;
  
use App\HighScore;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class HighScoreController extends Controller{
  
    public function index(){
        $HighScores = HighScore::all();
        
        return response()->json($HighScores);
    }
    
    public function getHighScore($id){
        $HighScore = HighScore::find($id);
        
        return response()->json($HighScore);
    }
    
    public function createHighScore(Request $request){
        $HighScore = HighScore::create($request->all());
        
        return response()->json($HighScore);
    }
    
    public function deleteHighScore($id){
        $HighScore = HighScore::find($id);
        $HighScore->delete;
        
        return response()->json("deleted.");
    }
 
}
?>