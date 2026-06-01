<?php


function meetup_day(int $year, int $month, string $which, string $weekday)
{
    $numDias = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    
    $diasMes = [];

    for($dia =1; $dia <= $numDias; $dia++){
        $diasMes[] = new DateTimeImmutable("$year-$month-$dia");
    }

    $diasDoWeekday = [];

    foreach ($diasMes as $data) {
    if ($data->format('l') === $weekday) {
        $diasDoWeekday[] = $data;
        }
    }

    switch ($which) {
    case 'first':
        return $diasDoWeekday[0];
    case 'second':
        return $diasDoWeekday[1];
    case 'third':
        return $diasDoWeekday[2];
    case 'fourth':
        return $diasDoWeekday[3];
    case 'last':
        return end($diasDoWeekday);
    case 'teenth':
        foreach ($diasDoWeekday as $d) {
            if ((int)$d->format('d') >= 13 && (int)$d->format('d') <= 19) {
                return $d;
            }
        }
    }
}