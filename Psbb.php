<?php # 8.2.7
$families = readline("Input the number of families : ");
$members_0 = readline("Input the number of members in the family (separated by a space) : ");
if ($members_0 == false) $members = [];
else $members = explode(" ", $members_0);
function count_buses(int $families, array $members) {
    if ($families != count($members)):
        return "Input must be equal with count of family";
    endif;
    $counts = [0];
    foreach ($members as $n):
        $min_index = array_search(min($counts), $counts);
        if ($counts[$min_index] + $n <= 4) $counts[$min_index] += $n;
        else $counts[] = $n;
    endforeach;
    return count($counts);
}
$result = count_buses($families, $members);
switch (gettype(count_buses($families, $members))):
    case "string": echo $result . "\n"; break;
    default: echo "Minimum bus required is : " . $result . "\n";
endswitch;