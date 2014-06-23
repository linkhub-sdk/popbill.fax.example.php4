<?php

include 'common.php';

echo '문자관련 URL(ex. 전송내역조회 팝업) 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $FaxService->GetURL('1231212312','userid','BOX');

var_dump($result);

echo chr(10);
?>
