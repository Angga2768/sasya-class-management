<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWebhookEvents extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'provider' => ['type' => 'VARCHAR', 'constraint' => 50],
            'event_id' => ['type' => 'VARCHAR', 'constraint' => 120, 'unique' => true],
            'event_type' => ['type' => 'VARCHAR', 'constraint' => 80],
            'payload' => ['type' => 'JSON'],
            'signature' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'status' => ['type' => 'ENUM("received","processed","rejected")', 'default' => 'received'],
            'processed_at' => ['type' => 'DATETIME', 'null' => true],
            'error_message' => ['type' => 'TEXT', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('provider');
        $this->forge->addKey('event_type');
        $this->forge->createTable('webhook_events', true);
    }

    public function down()
    {
        $this->forge->dropTable('webhook_events', true);
    }
}
