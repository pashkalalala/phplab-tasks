<?php
/**
 * The $input variable contains text in snake case (i.e. hello_world or this_is_home_task)
 * Transform it into camel cased string and return (i.e. helloWorld or thisIsHomeTask)
 * @see http://xahlee.info/comp/camelCase_vs_snake_case.html
 *
 * @param  string  $input
 * @return string
 */
function snakeCaseToCamelCase(string $input)
{
    $upperCaseWords = ucwords($input, '_');
    $delSeparator = str_replace('_', '', $upperCaseWords);

    return lcfirst($delSeparator);
}

/**
 * The $input variable contains multibyte text like 'ФЫВА олдж'
 * Mirror each word individually and return transformed text (i.e. 'АВЫФ ждло')
 * !!! do not change words order
 *
 * @param  string  $input
 * @return string
 */
function mirrorMultibyteString(string $input)
{
    $pattern = '/./u';
    preg_match_all($pattern, $input, $pregArray);
    $implodeArray = implode('', array_reverse($pregArray[0]));
    $explodeArray = explode(' ', $implodeArray);

    return implode(' ', array_reverse($explodeArray ));
}

/**
 * My friend wants a new band name for her band.
 * She likes bands that use the formula: 'The' + a noun with first letter capitalized.
 * However, when a noun STARTS and ENDS with the same letter,
 * she likes to repeat the noun twice and connect them together with the first and last letter,
 * combined into one word like so (WITHOUT a 'The' in front):
 * dolphin -> The Dolphin
 * alaska -> Alaskalaska
 * europe -> Europeurope
 * Implement this logic.
 *
 * @param  string  $noun
 * @return string
 */
function getBrandName(string $noun)
{

    if (substr($noun, 0, 1) === substr($noun, -1)) {
        $newBrandName = ucwords($noun . substr($noun, 1));
    }
    else {
        $newBrandName = 'The ' . ucwords($noun);
    }
    return $newBrandName;

}