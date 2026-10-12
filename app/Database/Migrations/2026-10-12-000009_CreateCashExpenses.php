<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCashExpenses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title' => ['type' => 'VARCHAR', 'constraint' => 120],
            'description' => ['type' => 'TEXT', 'null' => true],
            'amount' => ['type' => 'INT', 'constraint' => 11],
            'expense_date' => ['type' => 'DATE'],
            'category' => ['type' => 'VARCHAR', 'constraint' => 80],
            'created_by' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'approved_by' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('expense_date');
        $this->forge->addKey('category');
        $this->forge->createTable('cash_expenses', true);
    }

    public function down()
    {
        $this->forge->dropTable('cash_expenses', true);
    }
}
