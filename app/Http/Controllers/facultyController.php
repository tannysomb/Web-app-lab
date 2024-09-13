
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class facultyController extends Controller
{
    public function index()
    {
        
        $faculties = DB::table('faculties')->get();

        
        return view('faculty', compact('faculties'));
    }
}
