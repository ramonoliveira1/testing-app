<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'developer_id',
        'project_id',
    ];

    public function color(string $status): string
    {
        return match ($status) {
            'cancelled' => 'red',
            'in progress' => 'blue',
            'completed' => 'green',
            default => 'yellow',
        };
    }

    public function developer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'developer_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
