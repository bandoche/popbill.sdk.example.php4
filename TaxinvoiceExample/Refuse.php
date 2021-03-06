<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
		<link rel="stylesheet" type="text/css" href="/Example.css" media="screen" />
		<title>팝빌 SDK PHP 4.X Example.</title>
	</head>
<?php 
	include 'common.php';

	$testCorpNum = '1234567890';			# 팝빌 회원 사업자번호, '-' 제외 10자리
	$testUserID = 'testkorea';				# 팝빌 회원 아이디
	$mgtKeyType = MgtKeyType_SELL;			# 발행유형, MgtKeyType_SELL:매출, MgtKeyType_BUY:매입, MgtKeyType_TURSEE:위수탁
	$mgtKey = '20150204-01';				# 문서관리번호
	$memo = '역)발행 요청 거부메모입니다';	# 메모

	$Presponse = $TaxinvoiceService->Refuse($testCorpNum, $mgtKeyType, $mgtKey, $memo, $testUserID);
	$code = $Presponse->code;
	$message = $Presponse->message;
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>역)발행 요청 거부</legend>
				<ul>
					<li>Response.code : <? echo $code ?></li>
					<li>Response.message : <? echo $message ?></li>
				</ul>
			</fieldset>
		 </div>
	</body>
</html>