<?php

use aventri\Multiprocessing\StreamEventCommand;
include realpath(__DIR__ . "/../../vendor") . "/autoload.php";

(new class extends StreamEventCommand {
    public function consume($data)
    {
        $this->write($data);
    }
})->listen();


