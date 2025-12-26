<?php

namespace App\Imports;

use App\Models\Level;
use App\Models\Subject;
use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Str;

class SubjectImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $rows->skip(1)->each(function ($row) {

            if (count($row) < 4) {
                return;
            }

            [$levelName, $code, $name, $description] = $row;

            // 1️⃣ Create / Get Level
            $level = Level::firstOrCreate(
                ['slug' => strtolower($levelName)],
                ['name' => strtoupper($levelName)]
            );

            // 2️⃣ Create / Get Subject
            $subject = Subject::firstOrCreate(
                [
                    'code' => strtoupper(trim($code)),
                    'level_id' => $level->id,
                ],
                [
                    'name' => $name,
                    'description' => $description,
                ]
            );

            // 3️⃣ AUTO-CREATE PRODUCTS (CRITICAL FIX)
            foreach ([
                'solved-assignments',
                'guess-papers',
                'previous-year-papers'
            ] as $type) {

                Product::firstOrCreate(
                    [
                        'subject_code' => $subject->code,
                        'material_type' => $type,
                        'level' => strtolower($level->name),
                    ],
                    [
                        'title' => "{$subject->code} " . ucwords(str_replace('-', ' ', $type)),
                        'slug' => Str::slug($subject->code . '-' . $type),
                        'subject_name' => $subject->name,
                        'program' => 'IGNOU',
                        'session' => 'June 2025',
                        'price' => 0,
                        'status' => 0, // inactive by default
                    ]
                );
            }
        });
    }
}
