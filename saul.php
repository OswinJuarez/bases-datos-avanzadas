<?php


class XMLReader2 extends XMLReader
{
  function readString()
  {
        $depth = 1;
        $text = "";
        while ($this->read() && $depth != 0)
        {
            if (in_array($this->nodeType, array(XMLReader::TEXT, XMLReader::CDATA, XMLReader::WHITESPACE, XMLReader::SIGNIFICANT_WHITESPACE)))
                $text .= $this->value;
            if ($this->nodeType == XMLReader::ELEMENT) $depth++;
            if ($this->nodeType == XMLReader::END_ELEMENT) $depth--;
        }
        return $text;
    }
}

$url="ejemplo.xml";
$xmlreader = new XMLReader2();
$xmlreader->open($url, null, 1<<19);

$res = $xmlreader->readString();
echo $res;

$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");

$xml->nombre;
DOM Document

fwrite($fh, $res);
fclose($fh);
?>
