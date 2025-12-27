<?php

namespace App\Imports;

use App\Models\Level;
use App\Models\Subject;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;

class MasterMaterialImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $rows->skip(1)->each(function ($row) {

            [
                $levelName,
                $levelSlug,
                $subjectCode,
                $subjectName,
                $subjectSlug,
                $metaTitle,
                $metaDescription,
                $sessions,
                $priceSolved,
                $discountSolved,
                $priceGuess,
                $discountGuess,
                $pricePyp,
                $discountPyp,
                $program,
                $format,
                $status
            ] = $row;

            /* ---------------- LEVEL ---------------- */
            $level = Level::firstOrCreate(
                ['slug' => strtolower($levelSlug)],
                ['name' => strtoupper($levelName)]
            );

            /* ---------------- SUBJECT ---------------- */
            $subject = Subject::updateOrCreate(
                [
                    'code'     => strtoupper($subjectCode),
                    'level_id' => $level->id,
                ],
                [
                    'name'              => $subjectName,
                    'slug'              => $subjectSlug,
                    'meta_title'        => $metaTitle,
                    'meta_description'  => $metaDescription,
                ]
            );

            /* ---------------- PRODUCTS ---------------- */
            $sessions = array_map('trim', explode(',', $sessions));

            $materials = [
                'solved-assignments' => [$priceSolved, $discountSolved],
                'guess-papers'      => [$priceGuess, $discountGuess],
                'previous-year-papers' => [$pricePyp, $discountPyp],
            ];

            foreach ($sessions as $session) {
                foreach ($materials as $type => [$price, $discount]) {

                    Product::updateOrCreate(
                        [
                            'subject_code' => $subject->code,
                            'material_type' => $type,
                            'session' => $session,
                        ],
                        [
                            'title'        => "{$subject->code} {$subject->name}",
                            'slug'         => Str::slug($subject->code.'-'.$type.'-'.$session),
                            'subject_name' => $subject->name,
                            'level'        => strtoupper($level->name),
                            'program'      => $program ?? 'IGNOU',
                            'format'       => $format ?? 'softcopy',
                            'price'        => (float) $price,
                            'discount_price' => $discount ?: null,
                            'status'       => (int) $status,
                        ]
                    );
                }
            }
        });
    }
}
