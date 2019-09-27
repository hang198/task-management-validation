<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->title = 'How do you feel';
        $task->content = 'I feel good';
        $task->image = 'hang.jpg';
        $task->due_date = '17-11-2020';
        $task->save();
    }
}
