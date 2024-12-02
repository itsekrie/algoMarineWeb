<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievements;

class AchievementController extends Controller
{
    public function index(){
        $title = 'Achievements';

        $achive = Achievements::all();

        return view('Public.Achievement.index',compact('title','achive'));
    }

    public function show($Title){
        $achive = Achievements::where('Title', $Title)->first();

            // Mendapatkan path file
        $filePath = storage_path('app/public/Achievements/' . $achive->file_path);
        dd($filePath);
        // Pastikan file ada sebelum mengembalikan response
        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        // Kembalikan response file
        return response()->file($filePath);
    }
}
