<?php # 8.2.7
$input = readline("Input one line of words (S) : ");
function vowels_and_consonants(string $text) {
    $is_letter = fn($n) => ctype_alpha($n);
    $is_vowel = fn($n) => in_array($n, ["a", "e", "i", "o", "u"]);
    $is_consonant = fn($n) => in_array($n, [
        "b", "c", "d", "f", "g", "h", "j", 
        "k", "l", "m", "n", "p", "q", "r", 
        "s", "t", "v", "w", "x", "y", "z"
    ]);
    $letters = array_filter(str_split(strtolower($text)), $is_letter);
    $vowels_0 = [];
    $consonants_0 = [];
    foreach ($letters as $n):
        if ($is_vowel($n)) $vowels_0[$n][] = $n;
        if ($is_consonant($n)) $consonants_0[$n][] = $n;
    endforeach;
    foreach ($vowels_0 as $n) foreach ($n as $o) $vowels_1[] = $o;
    foreach ($consonants_0 as $n) foreach ($n as $o) $consonants_1[] = $o;
    return [
        "vowels" => implode("", $vowels_1),
        "consonants" => implode("", $consonants_1)
    ];
}
$results = vowels_and_consonants($input);
echo "Vowel Characters : \n" . $results["vowels"] . "\n";
echo "Consonant Characters : \n" . $results["consonants"] . "\n";