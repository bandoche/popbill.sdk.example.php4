<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
		<link rel="stylesheet" type="text/css" href="/Example.css" media="screen" />
		
		<title>팝빌 SDK PHP 4.X Example.</title>
	</head>
	<body>
		<div id="content">
			
			<p class="heading1">팝빌 전자명세서 SDK PHP 4.X Example.</p>

			<br/>

			<fieldset class="fieldset1">
				<legend>팝빌 기본 API</legend>

				<fieldset class="fieldset2">
					<legend>회원정보</legend>
					<ul>
						<li><a href="CheckIsMember.php">checkIsMember</a> - 연동회원 가입 여부 확인</li>
						<li><a href="JoinMember.php">joinMember</a> - 연동회원 가입 요청</li>
						<li><a href="GetBalance.php">getBalance</a> - 연동회원 잔여포인트 확인</li>
						<li><a href="GetPartnerBalance.php">getPartnerBalance</a> - 파트너 잔여포인트 확인</li>
						<li><a href="GetPopbillURL.php">getPopbillURL</a> - 팝빌 SSO URL 요청</li>
					</ul>
				</fieldset>

			</fieldset>
			
			<br />
			
			<fieldset class="fieldset1">
				<legend>전자명세서 관련 API</legend>
				
				<fieldset class="fieldset2">
					<legend>등록/수정/발행/삭제</legend>
					<ul>
						<li><a href="CheckMgtKeyInUse.php">checkMgtKeyInUse</a> - 문서관리번호 사용여부 확인</li>
						<li><a href="Register.php">register</a> - 전자명세서 임시저장</li>
						<li><a href="Update.php">update</a> - 전자명세서 수정</li>
						<li><a href="Issue.php">issue</a> - 전자명세서 발행</li>
						<li><a href="CancelIssue.php">cancelIssue</a> - 전자명세서발행취소</li>
						<li><a href="Delete.php">delete</a> - 전자명세서 삭제</li>
						<li><a href="AttachFile.php">attachFile</a> - 전자명세서 첨부파일 추가</li>
						<li><a href="GetFiles.php">getFiles</a> - 전자명세서 첨부파일 목록확인</li>
						<li><a href="DeleteFile.php">deleteFile</a> - 전자명세서 첨부파일 1개 삭제</li>
					</ul>
				</fieldset>
				
				<fieldset class="fieldset2">
					<legend>정보 확인</legend>
					<ul>
						<li><a href="GetInfo.php">getInfo</a> - 전자명세서 상태확인</li>
						<li><a href="GetInfos.php">getInfos</a> - 전자명세서 상태 대량 확인</li>
						<li><a href="GetLogs.php">getLogs</a> - 전자명세서 이력 확인</li>
						<li><a href="GetDetailInfo.php">getDetailInfo</a> - 전자명세서 상세정보 확인</li>
					</ul>
				</fieldset>
				
				<fieldset class="fieldset2">
					<legend>부가기능</legend>
					<ul>
						<li><a href="SendEmail.php">sendEmail</a> - 알림메일 재전송</li>
						<li><a href="SendSMS.php">sendSMS</a> - 알림문자 재전송</li>
						<li><a href="SendFAX.php">sendFAX</a> - 전자명세서 팩스 전송</li>
					</ul>
				</fieldset>
				
				<fieldset class="fieldset2">
					<legend>팝빌 전자명세서 SSO URL 기능</legend>
					<ul>
						<li><a href="GetURL.php">getURL</a> - 전자명세서 관련 SSO URL 확인</li>
						<li><a href="GetPopUpURL.php">getPopUpURL</a> - 해당 전자명세서의 팝빌 화면을 표시하는 URL 확인</li>
						<li><a href="GetPrintURL.php">getPrintURL</a> - 해당 전자명세서의 팝빌 인쇄 화면을 표시하는 URL 확인</li>
						<li><a href="GetEPrintURL.php">getEPrintURL</a> - 해당 전자명세서의 팝빌 인쇄 화면을 표시하는 URL 확인</li>
						<li><a href="GetMassPrintURL.php">getMassPrintURL</a> - 다량(최대100건)의 전자명세서 인쇄 화면을 표시하는 URL 확인 </li>
						<li><a href="GetMailURL.php">getMailURL</a> - 해당 전자명세서의 전송메일상의 "보기" 버튼에 해당하는 URL 확인 </li>
					</ul>
				</fieldset>
				<fieldset class="fieldset2">
					<legend>기타</legend>
					<ul>
						<li><a href="GetUnitCost.php">getUnitCost</a> - 전자명세서 발행단가 확인</li>
					</ul>
				</fieldset>

			</fieldset>
		 </div>
	</body>
</html>