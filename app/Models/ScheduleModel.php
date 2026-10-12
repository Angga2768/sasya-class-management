<?php

namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table = 'schedules';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['course_name', 'lecturer_name', 'day_of_week', 'start_time', 'end_time', 'room_name', 'start_date', 'end_date', 'is_published', 'notes', 'created_by'];
}
