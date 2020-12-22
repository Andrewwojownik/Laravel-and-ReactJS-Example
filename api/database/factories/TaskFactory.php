<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**
         * @var User $lastUserId
         */
        $lastUserId = User::orderBy('id', 'desc')->first();

        /**
         * @var Project $lastProjectId
         */
        $lastProjectId = Project::orderBy('id', 'desc')->first();

        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'assigned_to' => rand(1, $lastUserId->id),
            'created_by' => 1,
            'project_id' => rand(1, $lastProjectId->id),
            'status' => 1,
        ];
    }
}
