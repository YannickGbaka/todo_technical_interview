<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // defining the fillable fields 
    protected $fillable = [
        'task',
        'priority',
        'state',
    ];

    // Defining some constants for each value of the priority of a particular task;

    const HIGH_PRIORITY = 1;
    const MEDIUM_PRIORITY = 2;
    const LOW_PRIORITY = 3;

    // Function to retrieve the string associated to the priority of the task
    public function getPriorityAttribute()
    {
        switch ($this->priority) {
            case Self::HIGH_PRIORITY:
                return 'Elévé';
            case Self::MEDIUM_PRIORITY:
                return 'Normale';
            case Self::LOW_PRIORITY:
                return 'Faible';
        }
    }
}