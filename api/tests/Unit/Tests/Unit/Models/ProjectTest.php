<?php

namespace Tests\Unit\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function testCreate(): void
    {
        $project = new Project();

        $this->assertInstanceOf(Model::class, $project);
        $this->assertInstanceOf(Project::class, $project);
    }
}
