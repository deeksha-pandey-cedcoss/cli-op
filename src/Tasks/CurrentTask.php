<?php

declare(strict_types=1);

namespace MyApp\Tasks;

use Phalcon\Cli\Task;

class CurrentTask extends Task
{
    public function mainAction()
    {
        echo 'This is the default task and the default action' . PHP_EOL;
    }
    public function saleAction($start, $end)
    {
        $collection = $this->mongo->sales;

        $data = $collection->find(["date" => ['$gte' => $start, '$lte' => $end]]);
        foreach ($data as $value) {
            print_r($value);
        }
        die;
    }
}
