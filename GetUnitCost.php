<?php

include 'common.php';

echo '전송 단가 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $FaxService->GetUnitCost('1231212312');

var_dump($result);

echo chr(10);
?>
