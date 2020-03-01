<?php

namespace App\Observers;

use App\Classroom;

class ClassroomObserver
{
    public function created(Classroom $classroom)
    {
        for ($date = $classroom->starts_at; $date->lte($classroom->course->ends_at); $date->addDays($classroom->frequency_days)) {
            if ($date->gte($classroom->course->starts_at)) {
                $classroom->lessons()->create([
                    'starts_at' => $date,
                    'ends_at'   => $date->copy()->addMinutes($classroom->duration_minutes),
                    'course_id' => $classroom->course_id
                ]);
            }
        }
    }
}
