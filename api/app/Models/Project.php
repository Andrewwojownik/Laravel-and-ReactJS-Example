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
 * @property int $created_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Project extends Model
{
    use HasFactory;

    public function created_by()
    {
        return $this->belongsTo(User::class, 'id', 'created_by');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
