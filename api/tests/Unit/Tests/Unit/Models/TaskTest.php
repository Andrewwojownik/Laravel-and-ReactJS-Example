<?php

namespace Tests\Unit\Models;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function testCreate(): void
    {
        $project = new Task();

        $this->assertInstanceOf(Model::class, $project);
        $this->assertInstanceOf(Task::class, $project);
    }
}
