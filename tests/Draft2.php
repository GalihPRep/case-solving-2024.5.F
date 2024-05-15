<?php # 8.2.7
$cases = [
    [
        "families" => 5,
        "members" => [1, 2, 4, 3, 3]
    ],
    [
        "families" => 8,
        "members" => [2, 3, 4, 4, 2, 1, 3, 1]
    ],
    [
        "families" => 5,
        "members" => [1, 5]
    ]
];
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
foreach ($cases as $n):
    echo count_buses($n["families"], $n["members"]) . "\n";
endforeach;