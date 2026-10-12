<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBillingPeriods extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'start_date' => ['type' => 'DATE'],
            'end_date' => ['type' => 'DATE'],
            'standard_amount' => ['type' => 'INT', 'constraint' => 11],
            'status' => ['type' => 'ENUM("draft","active","closed")', 'default' => 'draft'],
            'notes' => ['type' => 'TEXT', 'null' => true],
            'created_by' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('created_by');
        $this->forge->addKey('start_date');
        $this->forge->createTable('billing_periods', true);
    }

    public function down()
    {
        $this->forge->dropTable('billing_periods', true);
    }
}
