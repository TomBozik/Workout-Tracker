<?php

namespace App\Exports;

use App\Set;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class SetExport implements FromCollection, WithHeadings
{
    protected $userId;

    function __construct($userId) {
            $this->userId = $userId;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('sets')
                ->join('exercises', 'sets.exercise_id', '=', 'exercises.id')
                ->where('sets.user_id', '=', $this->userId)
                ->select('exercises.name','sets.reps','sets.weight', 'sets.created_at')
                ->get();
    }

    public function headings() : array
    {
        return ['name', 'reps', 'weight', 'date'];
    }
}
