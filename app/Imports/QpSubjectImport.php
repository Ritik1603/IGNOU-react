<?php

namespace App\Imports;

use App\Models\QuestionPaper\QpLevel;
use App\Models\QuestionPaper\QpSubject;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class QpSubjectImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $rows->shift(); // remove header

        foreach ($rows as $row) {

            if (!isset($row[0])) {
                continue;
            }

            // LEVEL
            $level = QpLevel::firstOrCreate(
                ['slug' => Str::slug($row[0])],
                [
                    'name' => strtoupper($row[0]),
                    'status' => true
                ]
            );

            // SUBJECT
            QpSubject::updateOrCreate(
                ['slug' => $row[3]],
                [
                    'qp_level_id' => $level->id,
                    'subject_code' => $row[1],
                    'subject_name' => $row[2],
                    'seo_title' => $row[4] ?? null,
                    'seo_description' => $row[5] ?? null,
                    'status' => true
                ]
            );
        }
    }
}
