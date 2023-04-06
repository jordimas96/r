<?php
$redirects = array(
  "PDF_DAW_Montilivi" =>
  "https://www.institutmontilivi.cat/articles/oferta-formativa/cicles-formatius-grau-superior-bottom/D%C3%ADptics%202023/DAW_10_mar%C3%A7_2023.pdf",
  "PDF_DAM_Montilivi" =>
  "https://www.institutmontilivi.cat/articles/oferta-formativa/cicles-formatius-grau-superior-bottom/D%C3%ADptics%202023/DAM_10_mar%C3%A7_2023.pdf"
  
  
  
);

if (isset($_GET["url"]) && array_key_exists($_GET["url"], $redirects)) {
    header("Location: " . $redirects[$_GET["url"]]);
    exit;
} else {
    header("HTTP/1.0 404 Not Found");
    echo "La página solicitada no existe";
    exit;
}
?>
