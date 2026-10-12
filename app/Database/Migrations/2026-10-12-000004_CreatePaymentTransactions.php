<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentTransactions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'invoice_code' => ['type' => 'VARCHAR', 'constraint' => 100, 'unique' => true],
            'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'bill_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'amount' => ['type' => 'INT', 'constraint' => 11],
            'payment_method' => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => 'qris'],
            'provider' => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => 'sandbox'],
            'status' => ['type' => 'ENUM("pending","paid","failed","expired","refunded")', 'default' => 'pending'],
            'payment_channel' => ['type' => 'VARCHAR', 'constraint' => 80, 'null' => true],
            'gateway_reference' => ['type' => 'VARCHAR', 'constraint' => 120, 'null' => true],
            'expires_at' => ['type' => 'DATETIME', 'null' => true],
            'paid_at' => ['type' => 'DATETIME', 'null' => true],
            'webhook_event_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('user_id');
        $this->forge->addKey('bill_id');
        $this->forge->addKey('status');
        $this->forge->createTable('payment_transactions', true);
    }

    public function down()
    {
        $this->forge->dropTable('payment_transactions', true);
    }
}
