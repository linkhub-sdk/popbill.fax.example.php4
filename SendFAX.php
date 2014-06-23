<?php

include 'common.php';

echo '팩스전송 테스트'.chr(10).'처리결과 : ' ;

	
$Receivers = array();
	
$Receivers[] = array(
	'rcv' => '11112222',	//수신번호
	'rcvnm' => '수신자성명'	//수신자 명칭
);
	
//동보전송을 위해 1000건까지 반복가능.
$Receivers[] = array(
	'rcv' => '11112222',	//수신번호
	'rcvnm' => '수신자성명'	//수신자 명칭
);
	
//해당파일에 읽기 권한이 설정되어 있어야 함. 최대 5개.
$Files = array('./uploadtest.jpg','./uploadtest2.jpg');
	
$ReserveDT = null; //예약전송시 예약시간 yyyyMMddHHmmss 형식
$UserID = 'userid'; //팝빌 사용자 아이디
	
$result = $FaxService->SendFAX('1231212312','07075106766',$Receivers,$Files,$ReserveDT,$UserID);

var_dump($result);

echo chr(10);

?>
