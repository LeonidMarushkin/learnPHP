<?php
$taskarray = [
    [
        'id' => 1,
        'name' => 'Задача 1',
        'parent_id' => null,
    ],
    [
        'id' => 2,
        'name' => 'Задача 2',
        'parent_id' => null,
    ],
    [
        'id' => 3,
        'name' => 'Задача 3',
        'parent_id' => null,
    ],
    [
        'id' => 4,
        'name' => 'Подзадача 1.1',
        'parent_id' => 1,
    ],
    [
        'id' => 5,
        'name' => 'Подзадача 1.2',
        'parent_id' => 1,
    ],
    [
        'id' => 6,
        'name' => 'Подзадача 1.3',
        'parent_id' => 1,
    ],
    [
        'id' => 7,
        'name' => 'Подзадача 2.2',
        'parent_id' => 2,
    ],
    [
        'id' => 8,
        'name' => 'Подзадача 2.3',
        'parent_id' => 2,
    ],
    [
        'id' => 9,
        'name' => 'Подзадача 3.1',
        'parent_id' => 3,
    ],
    [
        'id' => 10,
        'name' => 'Подзадача 1.1.1',
        'parent_id' => 4,
    ],
];

function makeTaskTree(array $tasks, ?int $parentid = null): void
{
    echo '<ul>' . PHP_EOL;
    foreach ($tasks as $task) {
        if ($parentid != $task['parent_id']) {
            continue;
        }
        echo '<li>';
        echo $task['name'];
        makeTaskTree($tasks, $task['id']);
        echo '</li>' . PHP_EOL;
    }
    echo '</ul>' . PHP_EOL;
};

makeTaskTree($taskarray);
?>