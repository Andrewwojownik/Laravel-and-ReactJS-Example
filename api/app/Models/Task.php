<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $assigned_to
 * @property int $created_by
 * @property int $project_id
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Task extends Model
{
    use HasFactory;

    public function created_by()
    {
        return $this->belongsTo(User::class, 'id', 'created_by');
    }

    public function assigned_to()
    {
        return $this->belongsTo(User::class, 'id', 'assigned_to');
    }

    public function project_id()
    {
        return $this->belongsTo(Project::class);
    }
}
