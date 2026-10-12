<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSchedules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'course_name' => ['type' => 'VARCHAR', 'constraint' => 120],
            'lecturer_name' => ['type' => 'VARCHAR', 'constraint' => 120],
            'day_of_week' => ['type' => 'ENUM("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu")'],
            'start_time' => ['type' => 'TIME'],
            'end_time' => ['type' => 'TIME'],
            'room_name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'start_date' => ['type' => 'DATE'],
            'end_date' => ['type' => 'DATE', 'null' => true],
            'is_published' => ['type' => 'BOOLEAN', 'default' => 1],
            'notes' => ['type' => 'TEXT', 'null' => true],
            'created_by' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('is_published');
        $this->forge->addKey('created_by');
        $this->forge->createTable('schedules', true);
    }

    public function down()
    {
        $this->forge->dropTable('schedules', true);
    }
}
