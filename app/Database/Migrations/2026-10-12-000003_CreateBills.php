<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBills extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'billing_period_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'amount' => ['type' => 'INT', 'constraint' => 11],
            'paid_amount' => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'remaining_amount' => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'status' => ['type' => 'ENUM("unpaid","partial","paid")', 'default' => 'unpaid'],
            'due_date' => ['type' => 'DATE', 'null' => true],
            'notes' => ['type' => 'TEXT', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('user_id');
        $this->forge->addKey('billing_period_id');
        $this->forge->addUniqueKey(['user_id', 'billing_period_id'], 'uniq_bill_user_period');
        $this->forge->createTable('bills', true);
    }

    public function down()
    {
        $this->forge->dropTable('bills', true);
    }
}
