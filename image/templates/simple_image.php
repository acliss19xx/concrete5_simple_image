<?php
defined('C5_EXECUTE') or die("Access Denied.");

if (is_object($f)) {
  echo '<img src = "' . $f->getRelativePath() . '" alt="' . h($altText) . '">';
}
?>