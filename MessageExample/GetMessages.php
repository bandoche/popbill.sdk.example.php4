<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
		<link rel="stylesheet" type="text/css" href="/Example.css" media="screen" />
		<title>팝빌 SDK PHP 4.X Example.</title>
	</head>
<?php 
	include 'common.php';	

	$testCorpNum = '1234567890';			# 팝빌회원 사업자번호, '-'제외 10자리
	$testUserID = 'testkorea';				# 팝빌회원 아이디
	$ReceiptNum = '015021018000000002';		# 문자전송 요청 시 발급받은 접수번호(receiptNum)
	
	$Presponse = $MessagingService->GetMessages($testCorpNum, $ReceiptNum, $testUserID);
	
	if(is_a($Presponse,'PopbillException')){
		$code = $Presponse->code;
		$message = $Presponse->message;
	}
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>문자전송 내역 및 전송상태 확인 </legend>
				<ul>
					<?
						if(isset($code)) { 
					?>
							<li>Response.code : <? echo $code ?> </li>
							<li>Response.message : <? echo $message ?></li>

					<?
						}else{
							for ($i = 0; $i < Count($Presponse); $i++) { 
					?>
							<fieldset class="fieldset2"> 
								<legend> 문자전송내역 조회 결과 [<? echo $i+1 ?>/<? echo Count($Presponse)?>]</legend>
								<ul>
									<li> state : <? echo $Presponse[$i]->state; ?> </li>
									<li> subject : <? echo $Presponse[$i]->subject; ?> </li>
									<li> msgType : <? echo $Presponse[$i]->msgType; ?> </li>
									<li> content : <? echo $Presponse[$i]->content; ?> </li>
									<li> sendNum : <? echo $Presponse[$i]->sendNum; ?> </li>
									<li> receiveNum : <? echo $Presponse[$i]->receiveNum; ?> </li>
									<li> receiveName : <? echo $Presponse[$i]->receiveName; ?> </li>
									<li> reserveDT : <? echo $Presponse[$i]->reserveDT; ?> </li>
									<li> sendDT : <? echo $Presponse[$i]->sendDT; ?> </li>
									<li> resultDT : <? echo $Presponse[$i]->resultDT; ?> </li>
									<li> sendResult : <? echo $Presponse[$i]->sendResult; ?> </li>
								</ul>
							</fieldset>
					<?
							}
						}
					?>		
				</ul>
			</fieldset>
		 </div>
	</body>
</html>