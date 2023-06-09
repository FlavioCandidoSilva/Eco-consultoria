<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Task extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $table = 'tasks';

    protected $fillable = [
        'task_name',
        'task_status',
        'priority',
        'task_description'
    ];

    protected $auditExclude = [
        'published',
    ];

}
