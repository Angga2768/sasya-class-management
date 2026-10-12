<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentAllocations extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'payment_transaction_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'bill_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'amount' => ['type' => 'INT', 'constraint' => 11],
            'allocated_at' => ['type' => 'DATETIME', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('payment_transaction_id');
        $this->forge->addKey('bill_id');
        $this->forge->addUniqueKey(['payment_transaction_id', 'bill_id'], 'uniq_payment_allocation');
        $this->forge->createTable('payment_allocations', true);
    }

    public function down()
    {
        $this->forge->dropTable('payment_allocations', true);
    }
}
