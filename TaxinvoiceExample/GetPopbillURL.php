<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
		<link rel="stylesheet" type="text/css" href="/Example.css" media="screen" />
		<title>팝빌 SDK PHP 4.X Example.</title>
	</head>
<?php
	include 'common.php';

	$testCorpNum = '1234567890';	# 팝빌 회원 사업자 번호, "-"제외 10자리
	$testUserID = 'testkorea';		# 팝빌 회원 아이디
	$TOGO = 'LOGIN';				# [LOGIN] : 팝빌 로그인URL, [CHRG] : 포인트충전 URL, [CERT] : 공인인증서 등록 URL 

	$Presponse = $TaxinvoiceService->GetPopbillURL($testCorpNum, $testUserID, $TOGO);

	if(is_a($Presponse, 'PopbillException')){
		$code = $Presponse->code;
		$message = $Presponse->message;
	}
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>팝빌 기본 URL 확인</legend>
				<ul>
					<?
						if(!isset($code)) { 
					?>
							<li>url : <? echo $Presponse ?></li>
					<?
						} else {
					?>
							<li>Response.code : <? echo $code ?> </li>
							<li>Response.message : <? echo $message ?></li>
					<?
						}
					?>		
				</ul>
			</fieldset>
		 </div>
	</body>
</html>