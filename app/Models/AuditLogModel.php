<?php

namespace App\Models;

use CodeIgniter\Model;

class AuditLogModel extends Model
{
    protected $table = 'audit_logs';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;
    protected $allowedFields = ['user_id', 'action', 'module', 'entity_type', 'entity_id', 'old_value', 'new_value', 'ip_address', 'user_agent', 'created_at'];
}
