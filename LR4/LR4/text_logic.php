
<?php
require "presets.php";
error_reporting(0);

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);


if ($_GET["preset"]) {
    if ($_GET["preset"] == "1") {
        $text = $preset1;
    }
    elseif ($_GET["preset"] == "2") {
        $text = $preset0;
    }
    elseif ($_GET["preset"] == "3") {
        $text = $preset3;
    }
    else {
        $text = $_POST["text"];
    }
    $analyze = new TextAnalyze($text);

}
else {
    if ($_POST["text"]) {
        $text = $_POST["text"];
    }
    $analyze = new TextAnalyze($text);

}
class textAnalyze
{
    public $textBody;

    public function __construct($text)
    {
        $this->textBody = $text;
    }

    public function viewText()
    {
        echo $this->textBody;
    }

    //5           5  9  15  17
    //&ndash; -      &mdash; --
    function replacementTireAndDobleSpace($mainText)
    {
        $mainText = str_replace(" -- ", "&nbsp;&mdash; ", $mainText);
        $mainText = str_replace(" - ", " &ndash; ", $mainText);
        return $mainText;
    }

    //9
    function deleteExtraSpaces($mainText)
    {
        $mainText = preg_replace("/([^\s]?)\s?([.,?!:;-])\s?([^\s]?)/u", "\$1\$2 \$3", $mainText);
        $mainText = preg_replace("/\s+([\.|,|!|\?|-]+)/", '\\1', $mainText);
        $mainText = preg_replace("/(-)\s+/", '\\1', $mainText);
        return $mainText;
    }

    //15
    function subjectIndex($mainText)
    {
        $textArr = preg_match_all('/(\b\w+\b)/ui', strip_tags($mainText), $matches);
        $matches[0] = array_unique($matches[0]);
        $i = 0;
        $exept=array("и", "или", "да", "а", "но", "в", "к", "o", "с", "у", "от", "од", "до", "по", "под");
        foreach ($matches[0] as $elem) {
            if (!in_array(mb_strtolower($elem), $exept) && !is_numeric($elem)
            ) {
                $count = 0;
                $times[$elem] = preg_match_all("/(\b" . $elem . "\b)(?!=<\/r>)/ui", $mainText)  ;
                $stimes[preg_match_all("/(\b" . $elem . "\b)(?!=<\/r>)/ui", $mainText)] = $elem;
                //print "<div>$i. <a href='#part$i'>$elem</a> - $times[$i] раз</div>";
                $i++;
                if ($i == 100)
                    break;
            }

        }
        arsort($times);
        $i=1;$j=0;
        foreach ($times as $key => $item){
            if (!in_array(mb_strtolower($times[$key]), $exept) && !is_numeric($elem)
            ) {
                print "<div>$i. <a href='#part$i'>$key</a> - $times[$key] раз</div>";
                $i++;$j++;
                if ($i == 101)
                    break;
            }
        }

    }

    //17
    function highlightRepeatedWords($mainText)
    {
        //$mainText = preg_replace('/(\b[а-я]+\b)(?=.*\1)/ui', "-", $mainText);
        $cleanText = strip_tags($mainText);
        $textArr = preg_match_all('/(\b\w+\b)/ui', $cleanText, $matches);
        $matches[0] = array_unique($matches[0]);
        foreach ($matches[0] as $elem) {
            $count = 0;
            $mainText = preg_replace_callback("/(\b" . $elem . "\b)(?!=<\/r>)/ui", function ($item) use (&$count) {
                $count++;
                if ($count > 1) {
                    return "<r class='yellowBackground'>" . $item[0] . "</r>";
                } else {
                    return $item[0];
                }
            }, $mainText);
        }

        return $mainText;
    }



    //base
    function baseText($mainText)
    {
        $textArr = preg_match_all('/(\b\w+\b)/ui', $mainText, $matches);
        $matches[0] = array_unique($matches[0]);
        $i = 1;
        $exept=array("и", "или", "да", "а", "но", "в", "к", "o", "с", "у", "от", "од", "до", "по", "под");

        //$matches=array_diff($matches,["и", "или", "да", "а", "но", "в", "к", "o", "с", "у", "от", "од", "до", "по", "под"]);
        foreach ($matches[0] as $elem) {
            if (!in_array($elem, $exept) && !is_numeric($elem)
            ) {
                $mainText = preg_replace("/(\b" . $elem . "\b)(?!=<\/r>)/ui", "<r id='part$i'>$elem</r>", $mainText, 1);
                $i++;
                if ($i == 101)
                    break;
            }
        }
        return $mainText;
    }
}