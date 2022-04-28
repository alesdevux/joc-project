<?php

function getTimeOfDateTime($date) {
  return Carbon\Carbon::parse($date)->format('H:i');
}

function getDateOfDateTime($date) {
  return Carbon\Carbon::parse($date)->format('d/m');
}
?>