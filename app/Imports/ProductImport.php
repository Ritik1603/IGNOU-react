<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class ProductImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $rows->skip(1)->each(function ($row) {

            [$level, $program, $code, $name, $session, $price] = $row;

            foreach ([
                'solved-assignments',
                'guess-papers',
                'previous-year-papers'
            ] as $type) {

                Product::firstOrCreate(
                    [
                        'subject_code' => $code,
                        'material_type' => $type,
                        'session' => $session,
                    ],
                    [
                        'title' => "{$code} ".str_replace('-', ' ', $type),
                        'slug' => Str::slug($code.'-'.$type),
                        'subject_name' => $name,
                        'level' => $level,
                        'program' => $program,
                        'price' => $price,
                        'status' => 0
                    ]
                );
            }
        });
    }
}
