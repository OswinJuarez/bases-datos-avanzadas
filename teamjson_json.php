<?php

  foreach ($namespaces as $prefix => $namespace) {
          foreach ($xml->attributes($namespace) as $attributeName => $attribute) {
              //replace characters in attribute name
              if ($options['keySearch']) $attributeName =
                      str_replace($options['keySearch'], $options['keyReplace'], $attributeName);
              $attributeKey = $options['attributePrefix']
                      . ($prefix ? $prefix . $options['namespaceSeparator'] : '')
                      . $attributeName;
              $attributesArray[$attributeKey] = (string)$attribute;
          }
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JSON</title>
</head>
<body background="http://cdn.wonderfulengineering.com/wp-content/uploads/2013/11/apple-wallpaper-background-2.jpg">

	<h1>XML a JSON</h1>
	<h2>Aun no convierte desde un archivo XML</h2>
  <p>Perdone la espera</p>
	
	
</body>
</html>