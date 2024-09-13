<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;

class LecturerController extends Controller
{
    // ฟังก์ชันเพื่อดึงข้อมูลอาจารย์ทั้งหมด
    public function index()
    {
        $lecturers = Lecturer::all(); // ดึงข้อมูลทั้งหมดจากตาราง lecturers
        return view('lecturer', ['lecturers' => $lecturers]); // ส่งข้อมูลไปยัง view
    }

    // ฟังก์ชันเพื่อเพิ่มข้อมูลอาจารย์ใหม่
    public function insert(Request $request)
    {
        $new_menu = new Lecturer;
        $new_menu->lec_name = $request->lec_name;
        $new_menu->email = $request->email;
        $new_menu->major = $request->major;
        $new_menu->save();

        // ส่งกลับไปยังหน้า /lecturers พร้อมกับข้อความสำเร็จ
        return redirect('/lecturers')->with('');
    }

    public function delete($lec_id)
{
    // ลบข้อมูลอาจารย์ด้วยการ Soft Delete
    $lecturer = Lecturer::find($lec_id);
    if ($lecturer) {
        $lecturer->delete();
        return redirect('/lecturer')->with('success', 'Lecturer deleted successfully');
    }
    return redirect('/lecturer')->with('error', 'Lecturer not found');
}

}


