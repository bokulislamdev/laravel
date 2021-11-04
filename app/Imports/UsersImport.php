<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
class UsersImport implements ToModel
{

    public function model(array $row)
    {
        return new Student([
                'name'     => $row[0],
                'roll'    => $row[1], 
                'student_classes_id' => $row[2],
        ]);
    }
}
