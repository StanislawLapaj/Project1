<?php
  $text = <<<TEXT
      ZSŁ-Zespół
      Szkół
      Łączności<br>
TEXT;
echo $text;
echo nl2br($text);
$name="JaNuSZ<br>";
echo strtolower($name);
echo strtoupper($name);
$text="paWeł nOwAk";
echo "$text<br>";
echo ucfirst($text);
$lorem="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
echo "$lorem<br>";
echo wordwrap($lorem, 20, "<br>");
ob_clean();
?>
