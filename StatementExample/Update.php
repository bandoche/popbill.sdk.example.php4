<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
		<link rel="stylesheet" type="text/css" href="/Example.css" media="screen" />
		<title>팝빌 SDK PHP 4.X Example.</title>
	</head>
<?php 
	include 'common.php';

	$testCorpNum = '1234567890';				# 팝빌 회원 사업자번호, '-' 제외 10자리
	$mgtKey = '20150210-01';					# 문서관리번호
	$testUserID = 'testkorea';					# 팝빌 회원 아이디
	$itemCode = '121';							# 명세서 코드 - 121(거래명세서), 122(청구서), 123(견적서) 124(발주서), 125(입금표), 126(영수증)

	$Statement = new Statement();				
	$Statement->writeDate = '20150205';         # [필수] 기재상 작성일자   
	$Statement->purposeType = '영수';			# [필수] (영수, 청구) 중 기재
	$Statement->taxType = '과세';				# [필수] (과세, 영세, 면세) 중 기재
	$Statement->formCode = '';					# 맞춤양식코드 (기본값 '') 

	$Statement->itemCode = $itemCode;           # 명세서 코드  
	$Statement->mgtKey = $mgtKey;				# 연동관리번호

	$Statement->senderCorpNum = $testCorpNum;   
	$Statement->senderTaxRegID = '';						# 종사업장 식별번호. 필요시 기재. 형식은 숫자 4자리
	$Statement->senderCorpName = '공급자 상호';					
	$Statement->senderCEOName = '공급자 대표자 성명_수정';      
	$Statement->senderAddr = ' 공급자 주소';         
	$Statement->senderBizClass = '공급자 업종';     
	$Statement->senderBizType = '공급자 업태';      
	$Statement->senderContactName = '공급자 담당자명';  
	$Statement->senderTEL = '070-7070-0707';          
	$Statement->senderHP = '010-000-2222';           
	$Statement->senderEmail = 'test@test.com';        

	$Statement->receiverCorpNum = '8888888888';
	$Statement->receiverTaxRegID = '';						# 공급받는자 종사업장 식별번호, 필요시 기재. 형식은 숫자 4자리
	$Statement->receiverCorpName = '공급받는자 대표자 성명';
	$Statement->receiverCEOName = '공급받는자 대표자 성명';
	$Statement->receiverAddr = '공급받는자 주소';
	$Statement->receiverBizClass = '공급받는자 업종';
	$Statement->receiverBizType = '공급받는자 업태';    
	$Statement->receiverContactName = '공급받는자 담당자명';
	$Statement->receiverTEL = '010-0000-1111';
	$Statement->receiverHP = '010-1111-2222';
	$Statement->receiverEmail = 'test@test.com';

	$Statement->supplyCostTotal = '200000';					# [필수] 공급가액 합계
	$Statement->taxTotal = '20000';							# [필수] 세액 합계
	$Statement->totalAmount = '220000';						# [필수] 합계금액 (공급가액 합계+세액합계)

	$Statement->serialNum = '123';							# 기재상 일련번호 항목
	$Statement->remark1 = '비고1';							
	$Statement->remark2 = '비고2';            
	$Statement->remark3 = '비고3';            

	$Statement->businessLicenseYN = False;					#사업자등록증 첨부 여부
	$Statement->bankBookYN = False;							#통장사본 첨부 여부
	$Statement->smssendYN = False;							#발행시 안내문자 전송여부

	$Statement->detailList = array();				

	$Statement->detailList[] = new StatementDetail();

    $Statement->detailList[0]->serialNum = '1';					#품목 일련번호 1부터 순차 기재
    $Statement->detailList[0]->purchaseDT = '20150205';			#거래일자 yyyyMMdd
    $Statement->detailList[0]->itemName = '품명';
    $Statement->detailList[0]->spec = '규격';
	$Statement->detailList[0]->unit = '단위';
    $Statement->detailList[0]->qty = '1';						#수량
    $Statement->detailList[0]->unitCost = '100000';
    $Statement->detailList[0]->supplyCost = '100000';
    $Statement->detailList[0]->tax = '10000';
    $Statement->detailList[0]->remark = '비고';
    $Statement->detailList[0]->spare1 = 'spare1';
    $Statement->detailList[0]->spare2 = 'spare2';
    $Statement->detailList[0]->spare3 = 'spare3';
    $Statement->detailList[0]->spare4 = 'spare4';
    $Statement->detailList[0]->spare5 = 'spare5';

    $Statement->detailList[1]->serialNum = '2';					#품목 일련번호 순차기재
    $Statement->detailList[1]->purchaseDT = '20150205';			#거래일자 yyyyMMdd
    $Statement->detailList[1]->itemName = '품명';
    $Statement->detailList[1]->spec = '규격';
	$Statement->detailList[1]->unit = '단위';
    $Statement->detailList[1]->qty = '1';						
    $Statement->detailList[1]->unitCost = '100000';
    $Statement->detailList[1]->supplyCost = '100000';
    $Statement->detailList[1]->tax = '10000';
    $Statement->detailList[1]->remark = '비고';
    $Statement->detailList[1]->spare1 = 'spare1';
    $Statement->detailList[1]->spare2 = 'spare2';
    $Statement->detailList[1]->spare3 = 'spare3';
    $Statement->detailList[1]->spare4 = 'spare4';
    $Statement->detailList[1]->spare5 = 'spare5';				

	#추가속성, 자세한사항은 전자명세서 API 연동매뉴얼 [5.부록>5.2 기본양식 추가속성 테이블] 참조.
	$Statement->propertyBag = array(
			'Balance' => '150000',			# 전잔액 항목
			'CBalance' => '50000',			# 현잔액 항목
	);


	$Presponse = $StatementService->Update($testCorpNum, $itemCode, $mgtKey, $Statement, $testUserID);
	$code = $Presponse->code;
	$message = $Presponse->message;
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>전자명세서 수정</legend>
				<ul>
					<li>Response.code : <? echo $code ?></li>
					<li>Response.message : <? echo $message ?></li>
				</ul>
			</fieldset>
		 </div>
	</body>
</html>