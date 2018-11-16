<?php

namespace ReaderMarkdown;

use Omeka\Api\Representation\MediaRepresentation;
use Omeka\Media\FileRenderer\RendererInterface;
use Zend\View\Renderer\PhpRenderer;

class ReaderMD implements RendererInterface
{
    public function render(PhpRenderer $view, MediaRepresentation $media, array $options = [])
    {
        $chaine = "";
        $fh = fopen($view->escapeHtml($media->originalUrl()), 'r');
        // Remplace pour chaque ligne Markdown son équivalent en HTML
        while ($line = fgets($fh)) {
          if (preg_match('/^######(.*)/', $line, $matches)) {
              $chaine = $chaine . "<br />". "<h6>" . trim($matches[1]) . "</h6>";
          } elseif (preg_match('/^#####(.*)/', $line, $matches)) {
              $chaine = $chaine . "<br />" . "<h5>" . trim($matches[1]) . "</h5>";
          } elseif (preg_match('/^####(.*)/', $line, $matches)) {
              $chaine = $chaine . "<br />" . "<h4>" . trim($matches[1]) . "</h4>";
          } elseif (preg_match('/^###(.*)/', $line, $matches)) {
              $chaine = $chaine . "<br />" . "<h3>" . trim($matches[1]) . "</h3>";
          } elseif (preg_match('/^##(.*)/', $line, $matches)) {
              $chaine = $chaine . "<br />" . "<h2>" . trim($matches[1]) . "</h2>";
          } elseif (preg_match('/^#(.*)/', $line, $matches)) {
              $chaine = $chaine . "<br />" . "<h1>" . trim($matches[1]) . "</h1>";
          //} elseif (preg_match('/`(.*?)`/', $line, $matches)) {             // buggé
            //$chaine = $chaine . "<br />" . "<code>" . trim($matches[1]) . "</code>";
          } elseif (preg_match('/(\*\*|__)(.*?)\1/', $line, $matches)) {
              $chaine = $chaine . "<br />" . "<strong>" . trim($matches[1]) . "</strong>";
          } elseif (preg_match('/\:\"(.*?)\"\:/', $line, $matches)) {
              $chaine = $chaine . "<br />" . "<q>" . trim($matches[1]) . "</q>";
          //} elseif (preg_match('/(\*|_)(.*?)\1/', $line, $matches)) {       // buggé
          //  $chaine = $chaine . "<br />" . "<em>" . trim($matches[1]) . "</em>";
          } else if( preg_match('/\[([^\[]+)\]\(([^\)]+)\)/', $line, $matches)) {
              $chaine = $chaine . preg_replace("/\[(.*?)\]\((.*?)\)/", "<a style='color:red' href='$2'>$1</a>", $line);
          } else if (preg_match('/\n\*(.*)/', $line, $matches)) {             // doesn't work
              $chaine = $chaine . "<br />" . "<ul><li>" . trim($matches[1]) . "</li></ul>";
          } else {
              $chaine = $chaine . "<br />" . $line; // <... Do your work with the line ...>
          }
        }
        fclose($fh);
        return sprintf(
            '<html><head></head><body>%s</body></html>',
            $chaine
        );
    }
}
?>
