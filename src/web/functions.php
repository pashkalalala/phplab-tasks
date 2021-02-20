<?php
/**
 * The $airports variable contains array of arrays of airports (see airports.php)
 * What can be put instead of placeholder so that function returns the unique first letter of each airport name
 * in alphabetical order
 *
 * Create a PhpUnit test (GetUniqueFirstLettersTest) which will check this behavior
 *
 * @param  array  $airports
 * @return string[]
 */
function getUniqueFirstLetters(array $airports)
{
    // put your logic here
    $firstLetters = [];
    foreach ($airports as $airport) {
        $firstLetters[] = $airport['name'][0];
    }

    $uniqueFirstLetters = array_unique($firstLetters);
    sort($uniqueFirstLetters);

    return $uniqueFirstLetters;
}

function filteringByFirstLetter($airports, $letter)
{
    $newArr = [];
    foreach ($airports as $air) {
        if ($air['name'][0] === $letter) {
            $newArr[] = $air;
        }
    }

    return $newArr;
}

function filteringByState($airports, $state)
{
    return array_filter($airports, function ($k) use ($state) {
        return $k['state'] == $state;
    });
}

function sortInfoByColumn($airports, $column)
{
    $stateColumn = array_column($airports, $column);
    array_multisort($stateColumn, SORT_ASC, $airports);

    return $airports;
}
