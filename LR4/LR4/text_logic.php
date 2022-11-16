
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
}
else {
    if ($_POST["text"]) {
        $text = $_POST["text"];
    }
}
    //5           5  9  15  17
    //&ndash; -      &mdash; --
    function replacementTireAndDobleSpace($mainText){
        $mainText = str_replace(" -- ","&nbsp;&mdash; ",$mainText);
        $mainText = str_replace(" - "," &ndash; ",$mainText);
        return $mainText;
    }
    //9
    function deleteExtraSpaces($mainText){
        $mainText = preg_replace("/([^\s]?)\s?([.,?!:;-])\s?([^\s]?)/u", "\$1\$2 \$3" ,$mainText);
        $mainText = preg_replace("/\s+([\.|,|!|\?|-]+)/", '\\1',$mainText);
        $mainText = preg_replace("/(-)\s+/", '\\1',$mainText);
        return $mainText;
    }
    //15
    function subjectIndex($mainText){
        $textArr = preg_match_all('/(\b\w+\b)/ui',$mainText, $matches);
        $matches[0] = array_unique($matches[0]);
        $i = 1;
        //$matches=array_diff($matches,["и", "или", "да", "а", "но", "в", "к", "o", "с", "у", "от", "од", "до", "по", "под"]);
        foreach($matches[0] as $elem) {
            if(mb_strtolower($elem)!="и" && mb_strtolower($elem)!='а' && mb_strtolower($elem)!='но'
                &&mb_strtolower($elem)!='или' && mb_strtolower($elem)!='да' && mb_strtolower($elem)!='не'
                &&mb_strtolower($elem)!='ни' && mb_strtolower($elem)!='у' && mb_strtolower($elem)!='о'
                && mb_strtolower($elem)!='к' && mb_strtolower($elem)!='в' && mb_strtolower($elem)!='до'
                &&mb_strtolower($elem)!='с' && mb_strtolower($elem)!='от' && mb_strtolower($elem)!='об'
                &&mb_strtolower($elem)!='по' && mb_strtolower($elem)!='под' && mb_strtolower($elem)!='без' && !is_numeric($elem)
            ){
                $count = 0;
                $times[$i] = preg_match_all("/(\b" . $elem . "\b)(?!=<\/r>)/ui", $mainText);
                print "<div>$i. <a href='#part$i'>$elem</a> - $times[$i] раз</div>";
                $i++;
                if ($i == 101)
                    break;
            }

        }

    }
    //17
/*function highlightRepeatedWords($mainText){

    //  $mainText = preg_replace('/(\b[а-я]+\b)(?=.*\1)/ui',"-",$mainText);
    $textArr = preg_match_all('/(\b\w+\b)/ui',strip_tags($mainText), $matches);
    $matches[0] = array_unique($matches[0]);
    foreach($matches[0] as $elem){
        $count = 0;
        $mainText= preg_replace_callback("/(\b".$elem."\b)(?!=<\/r>)/ui", function($item) use(&$count){
            $count++;
            if($count > 1){
                return "<r class='yellowBackground'>".$item[0]."</r>";
            }else{
                return $item[0];
            }
        },$mainText);
    }

    return $mainText;
}*/
function highlightRepeatedWords($text){
    $cleanedtext = strip_tags($text);
    $count = array();
    $words = preg_split('/([^\w+]+|\bно\b|\bв\b|\bесли\b|\bи\b|\bпо\b|\bа\b|\bже\b|\d+|\b\w{1,3}\b)/ui',mb_strtolower($cleanedtext));
    foreach($words as $word){
        if(empty($word))
            continue;
        if(!isset($count[$word])){
            $count[$word]=1;continue;
        }
        if($count[$word]==1){
            $text = preg_replace('/\b('.$word.')\b/ui','<my-yellow>'.$word.'</my-yellow>',$text);
            $text = preg_replace('/<my-yellow>'.$word.'</my-yellow>/ui',$word,$text,1);
            $count[$word]=2;
        }
    }
    return $text;
}

    //base
    function baseText($mainText){
        $textArr = preg_match_all('/(\b\w+\b)/ui',$mainText, $matches);
        $matches[0] = array_unique($matches[0]);
        $i = 1;
        //$matches=array_diff($matches,["и", "или", "да", "а", "но", "в", "к", "o", "с", "у", "от", "од", "до", "по", "под"]);
        foreach($matches[0] as $elem) {
            if (mb_strtolower($elem) != "и" && mb_strtolower($elem) != 'а' && mb_strtolower($elem) != 'но'
                && mb_strtolower($elem) != 'или' && mb_strtolower($elem) != 'да' && mb_strtolower($elem) != 'не'
                && mb_strtolower($elem) != 'ни' && mb_strtolower($elem) != 'у' && mb_strtolower($elem) != 'о'
                && mb_strtolower($elem) != 'к' && mb_strtolower($elem) != 'в' && mb_strtolower($elem) != 'до'
                && mb_strtolower($elem) != 'с' && mb_strtolower($elem) != 'от' && mb_strtolower($elem) != 'об'
                && mb_strtolower($elem) != 'по' && mb_strtolower($elem) != 'под' && mb_strtolower($elem) != 'без'
            ) {
                    $mainText=preg_replace("/(\b".$elem."\b)(?!=<\/r>)/ui","<r id='part$i'>$elem</r>",$mainText,1);
                    $i++;
                    if($i==101)
                        break;
            }
        }
        return $mainText;
    }