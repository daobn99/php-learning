<?php
$t = date('H'); // múi giờ 0 làm chuẩn
echo $t;
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
