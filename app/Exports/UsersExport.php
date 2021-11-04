<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class UsersExport implements FromView
{
    private $data = [];
    
    public function __construct($students)
    {
        $this->data = $students;
    }
    public function view(): View
    {
        return view('student.show-export', ['students'=> $this->data]);
    }
}
