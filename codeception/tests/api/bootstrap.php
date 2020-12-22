<?php

\Codeception\Util\JsonType::addCustomFilter('datetime_json', function ($value) {
    $dt = new \DateTime($value);

    return $dt !== false && !array_sum(\DateTime::getLastErrors());
});