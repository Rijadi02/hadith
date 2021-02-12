<?php

function hadith_split($hadith, $class)
{
    if (substr_count($hadith, '<p>') > 1) {
        $hadith = str_replace_first(
            '<p>',
            "<p class=\"$class\" id=\"$class\">",
            $hadith
        );
    }
    return $hadith;
}

function DOMRemove(DOMNode $from)
{
    $sibling = $from->firstChild;
    do {
        $next = $sibling->nextSibling;
        $from->parentNode->insertBefore($sibling, $from);
    } while ($sibling = $next);
    $from->parentNode->removeChild($from);
}

function al_hadith_split($hadith, $class)
{
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $hadith);
    $xpath = new DOMXpath($dom);
    $node = $xpath->query('//span[@narrator="narrator"]')->item(0);
    $text = $dom->saveHTML($node);

    $hadith = str_replace(
        "narrator='narrator'",
        'narrator="narrator"',
        $hadith
    );

    $hadith = str_replace($text, '', $hadith);

    //$list = ["transmeton se", "tha:", "tregon se", "transmeton:", "tregon:", "rrëfen:"];
    $list = ['transmeton se ', ': ', 'tregon se ', 'tregon se,', 'transmeton se,', 'rrëfen se ', 'rrëfen se,', 'rrëfen'];

    $mylist = [];

    foreach ($list as $del) {
        $data = explode($del, $hadith);
        $mylist[$del] = strlen($data[0]);
    }

    $del = array_keys($mylist, min($mylist))[0];

    if (substr($hadith, 0, 3) == '<p>') {
        $hadith = str_replace_first('<p>', "<p class=\"$class\" id=\"$class\"> ", $hadith);
        $narrator = explode($del, $hadith)[0] . $del;
        $narrator_div =
            substr($narrator, -2) == ': '
                ? $narrator . '</p>'
                : substr($narrator, 0, -1) . ':</p>';
    } else {
        $narrator = explode($del, $hadith)[0] . $del;
        $narrator_div = "<p class=\"$class\" id=\"$class\">" . ucfirst($narrator) . '</p>';
    }
    $return_str = str_replace_first($narrator, $narrator_div, $hadith);
    // echo "<script>console.log('$return_str')</script>";

    return $return_str;
}

function ar_hadith_split($hadith, $class)
{
    $return_str = "<p class=\"$class\" id=\"$class\">";

    $hadith = explode('</span>', $hadith)[1];

    //$list = ["transmeton se", "tha:", "tregon se", "transmeton:", "tregon:", "rrëfen:"];
    $list = [':'];

    $mylist = [];

    foreach ($list as $del) {
        $data = explode($del, $hadith);
        $mylist[$del] = strlen($data[0]);
    }

    $del = array_keys($mylist, min($mylist))[0];

    $return_str .= str_replace_first($del, $del . ' </p> <p>', $hadith);

    return $return_str;
}
