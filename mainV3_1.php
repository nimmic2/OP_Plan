<?php
	require('DBConn2.php');
	
	//echo database;
	//@ $ConnString = new mysqli(server, username, password, database);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="en-au" http-equiv="Content-Language" />
	<title>Operational Planning System</title>
	<link rel="stylesheet" type="text/css" href="mainV3.css" />
    <script type="text/javascript" src="main.js"></script>
</head>

<body>
<div class="wrap">
	<form id="frmMain">
    	<span class="mainStyle">
        	School/Unit: <label id="lblUnit" value = ""/>
            <br /><br />
        	Operational Plan 2012 - 2016 
            <br /><br />
        	Year of Operation 1 - 2012
            <br /><br />
        </span>
    </form>
    
    <form id="frmBudget">
   	<div id="budgetWrap">
    	<span class="subTitle1">Plan Summary and Introduction:</span>
        <br /><br />
        <textarea id="txtPlanSum" class="txtArea"></textarea>
        <br /><br /><br /><br />
        <span class="subTitle1">
        	The main strategic directions for the School\Office to develop Specific Operational Objectives (KPI) are:
        </span>
        <br /><br />
        <textarea id="txtMainStrag" class="txtArea"></textarea>
        <br /><br /><br /><br /><br /><br />
        
        <span class="subTitle1">Buget Performance <span>(all funds)</span></span>
        <hr />
        <table border="1">
        	<tr>
            	<th width="187px"><span class="tblBold">$m</span></th>
                <th width="177px"><span class="tblBold">2011 <br /><br />Budget</span></th>
                <th width="177px"><span class="tblBold">2010 <br /><br />Actual</span></th>
                <th width="177px"><span class="tblBold">2009 <br /><br />Actual</span></th>
                <th width="177px"><span class="tblBold">2008 <br /><br />Actual</span></th>
            </tr>
            
            <tr>
            	<td><span class="tblBold">Revenue</span></td>
                <td><input class="tbox" type="text" id="bPerform11Revenue" /></td>
                <td><input class="tbox" type="text" id="bPerform10Revenue" /></td>
                <td><input class="tbox" type="text" id="bPerform09Revenue" /></td>
                <td><input class="tbox" type="text" id="bPerform08Revenue" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">Expenses</span></td>
                <td><input class="tbox" type="text" id="bPerform11Expenses" /></td>
                <td><input class="tbox" type="text" id="bPerform10Expenses" /></td>
                <td><input class="tbox" type="text" id="bPerform09Expenses" /></td>
                <td><input class="tbox" type="text" id="bPerform08Expenses" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">Net Surplus/(Deficit)</span></td>
                <td><input class="tbox" type="text" id="bPerform11Net" /></td>
                <td><input class="tbox" type="text" id="bPerform10Net" /></td>
                <td><input class="tbox" type="text" id="bPerform09Net" /></td>
                <td><input class="tbox" type="text" id="bPerform08Net" /></td>
            </tr>
        </table>
        <br /><br />
        
        <hr />
        <span class="subTitle">Staff FTE</span>
        <hr />
        <table border="1">
        	<tr>
            	<th width="187px"><span class="tblBold">No.</span></th>
                <th width="177px"><span class="tblBold">2011 <br /><br />Budget</span></th>
                <th width="177px"><span class="tblBold">2010 <br /><br />Actual</span></th>
                <th width="177px"><span class="tblBold">2009 <br /><br />Actual</span></th>
                <th width="177px"><span class="tblBold">2008 <br /><br />Actual</span></th>
            </tr>
            
            <tr>
            	<td><span class="tblBold">Academic</span></td>
                <td><input class="tbox" type="text" id="staff11Academic" /></td>
                <td><input class="tbox" type="text" id="staff10Academic" /></td>
                <td><input class="tbox" type="text" id="staff09Academic" /></td>
                <td><input class="tbox" type="text" id="staff08Academic" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">General</span></td>
                <td><input class="tbox" type="text" id="staff11General" /></td>
                <td><input class="tbox" type="text" id="staff10General" /></td>
                <td><input class="tbox" type="text" id="staff09General" /></td>
                <td><input class="tbox" type="text" id="staff08General" /></td>
            </tr>
        </table>
        <br /><br />
        
        <hr />
        <span class="subTitle1">Taught Load (where applicable)</span>
        <hr />
        <table border="1">
        	<tr>
            	<th width="187px"><span class="tblBold">No. EFTSL</span></th>
                <th width="177px"><span class="tblBold">2011 <br /><br />Budget</span></th>
                <th width="177px"><span class="tblBold">2010 <br /><br />Actual</span></th>
                <th width="177px"><span class="tblBold">2009 <br /><br />Actual</span></th>
                <th width="177px"><span class="tblBold">2008 <br /><br />Actual</span></th>
            </tr>
            
            <tr>
            	<td><span class="tblBold">CGS</span></td>
                <td><input class="tbox" type="text" id="taught11CGS" /></td>
                <td><input class="tbox" type="text" id="taught10CGS" /></td>
                <td><input class="tbox" type="text" id="taught09CGS" /></td>
                <td><input class="tbox" type="text" id="taught08CGS" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">International onshore</span></td>
                <td><input class="tbox" type="text" id="taught11Onshore" /></td>
                <td><input class="tbox" type="text" id="taught10Onshore" /></td>
                <td><input class="tbox" type="text" id="taught09Onshore" /></td>
                <td><input class="tbox" type="text" id="taught08Onshore" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">International offshore</span></td>
                <td><input class="tbox" type="text" id="taught11Offshore" /></td>
                <td><input class="tbox" type="text" id="taught10Offshore" /></td>
                <td><input class="tbox" type="text" id="taught09Offshore" /></td>
                <td><input class="tbox" type="text" id="taught08Offshore" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">Domestic Postgraduate Coursework</span></td>
                <td><input class="tbox" type="text" id="taught11Domestic" /></td>
                <td><input class="tbox" type="text" id="taught10Domestic" /></td>
                <td><input class="tbox" type="text" id="taught09Domestic" /></td>
                <td><input class="tbox" type="text" id="taught08Domestic" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">HDR</span></td>
                <td><input class="tbox" type="text" id="taught11HDR" /></td>
                <td><input class="tbox" type="text" id="taught10HDR" /></td>
                <td><input class="tbox" type="text" id="taught09HDR" /></td>
                <td><input class="tbox" type="text" id="taught08HDR" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">Total</span></td>
                <td><input class="tbox" type="text" id="taught11Total" /></td>
                <td><input class="tbox" type="text" id="taught10Total" /></td>
                <td><input class="tbox" type="text" id="taught09Total" /></td>
                <td><input class="tbox" type="text" id="taught08Total" /></td>
            </tr>
        </table>
        <br /><br />
        
        <hr />
        <span class="subTitle1">Admit Load (where applicable)</span>
        <hr />
        <table border="1">
        	<tr>
            	<th width="187px"><span class="tblBold">No. EFTSL</span></th>
                <th width="177px"><span class="tblBold">2011 <br /><br />Budget</span></th>
                <th width="177px"><span class="tblBold">2010 <br /><br />Actual</span></th>
                <th width="177px"><span class="tblBold">2009 <br /><br />Actual</span></th>
                <th width="177px"><span class="tblBold">2008 <br /><br />Actual</span></th>
            </tr>
            
            <tr>
            	<td><span class="tblBold">CGS</span></td>
                <td><input class="tbox" type="text" id="admit11CGS" /></td>
                <td><input class="tbox" type="text" id="admit10CGS" /></td>
                <td><input class="tbox" type="text" id="admit09CGS" /></td>
                <td><input class="tbox" type="text" id="admit08CGS" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">International onshore</span></td>
                <td><input class="tbox" type="text" id="admit11Onshore" /></td>
                <td><input class="tbox" type="text" id="admit10Onshore" /></td>
                <td><input class="tbox" type="text" id="admit09Onshore" /></td>
                <td><input class="tbox" type="text" id="admit08Onshore" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">International offshore</span></td>
                <td><input class="tbox" type="text" id="admit11Offshore" /></td>
                <td><input class="tbox" type="text" id="admit10Offshore" /></td>
                <td><input class="tbox" type="text" id="admit09Offshore" /></td>
                <td><input class="tbox" type="text" id="admit08Offshore" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">Domestic Postgraduate Coursework</span></td>
                <td><input class="tbox" type="text" id="admit11Domestic" /></td>
                <td><input class="tbox" type="text" id="admit10Domestic" /></td>
                <td><input class="tbox" type="text" id="admit09Domestic" /></td>
                <td><input class="tbox" type="text" id="admit08Domestic" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">HDR</span></td>
                <td><input class="tbox" type="text" id="admit11HDR" /></td>
                <td><input class="tbox" type="text" id="admit10HDR" /></td>
                <td><input class="tbox" type="text" id="admit09HDR" /></td>
                <td><input class="tbox" type="text" id="admit08HDR" /></td>
            </tr>
            
            <tr>
            	<td><span class="tblBold">Total</span></td>
                <td><input class="tbox" type="text" id="admit11Total" /></td>
                <td><input class="tbox" type="text" id="admit10Total" /></td>
                <td><input class="tbox" type="text" id="admit09Total" /></td>
                <td><input class="tbox" type="text" id="admit08Total" /></td>
            </tr>
        </table>
        <br /><br />
    </div>
    </form>
    
    <form id="frmCenterSupport">
    <div id="agreementWrap">
    	<table border="1">
        	<tr>
            	<td colspan="2">
                	<span class="subTitle">Service Level Agreement (for Central Support Offices only)</span>
                </td>
            </tr>
            
            <tr>
            	<td colspan="2">
                	<table>
                    	<tr>
                        	<td>
                            	<span class="tblBold">(a) Outline the key service areas for which the Central Support Office is responsible.</span>
                                <br /><br />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	<textarea id="outlineService" class="txtArea"></textarea>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
            	<td colspan="2">
                	<span class="tblBold">
                    	(b) For each of the key service areas provide the agreed service standard that customers can expect for that particular activity
                    </span>
                </td>
            </tr>
            
            <tr>
            	<td>
                	<span class="tblBold">Key Service Area</span>
                </td>
                <td>
                	<span class="tblBold">Agreed Service Standard</span>
                </td>
            </tr>
            
            <tr>
            	<td>
                	<textarea id="keyService" class="txtAreaSmall"></textarea>
                </td>
                <td>
                	<textarea id="agreedService" class="txtAreaSmall"></textarea>
                </td>
            </tr>
        </table>
        <br /><br /><br />
    </div>
    </form>
    
    <form id="frmOP">
    <div id="OPWrap">
    	<table border="1">
        	<tr>
            	<td colspan="11">
            		<span class="OPHead1">Murdoch University Strategic Plan 2010 - 2015</span><br />
                	<span class="OPHead2"><label id="lblSchoolUnit" value="" />Operational Plan 2012 - 2016</span>
                </td>
            </tr>
            
            <tr>
            	<td colspan="2" rowspan="2">
                	<span class="mainStyle">OPERATIONAL OBJECTIVES (KPIs)</span>
                </td>
                <td rowspan="2">
                	<span class="mainRotate">Baseline at start of Op. Plan</span>
                </td>
                <td rowspan="2">
                	<span class="mainStyle">ACTIONS</span><br /><br />
                    <span>[Include responsibility and allocation to budget.]</span>
                </td>
                <td rowspan="2">
                	<span class="mainRotate">2010-15 Strategic Plan Reference</span>
                </td>
                <td colspan="5">
                	<span class="mainStyle">PLANNED TARGET</span><br /><br />
                    <span>
                    	[3- year rolling planning cycle. Timeline may be used to indicate either year planned to achieve target, or the stepwise 
                        achievement of target. Each year targets are reviewed against actuals and future targets revised.]
                    </span>
                </td>
                <td rowspan="2">
                	<span class="mainStyle">REPORTING OUTCOME</span><br />
                    <span>[6 monthly]</span>
                </td>
            </tr>
            
            <tr bgcolor="#66CCCC">
            	<td>
                	<span>Year 1 - 2012</span>
                </td>
                <td>
                	<span>Year 2 - 2013</span>
                </td>
                <td>
                	<span>Year 3 - 2014</span>
                </td>
                <td>
                	<span>Year 4 - 2015</span>
                </td>
                <td>
                	<span>Year 5 - 2016</span>
                </td>
            </tr>
            
            <tr bgcolor="#9999FF">
            	<td rowspan="25" nowrap="nowrap" bgcolor="#FFFFFF">
                	<span class="rotateWord">Long term, beyond current Strategic Plan</span>
                </td>
                <td>
                	<span class="subTitle2">Base</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
        </tr>
            
            <tr>
                <td>
                	<span class="subTitle2">Budget</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
            	<td>
                	<span class="subTitle3">Budget for Operating Funds ($'000);[Target: Achieve a 0% or positive variance to budget]</span>
                </td>
                <td>
                	<textarea id="OPFundsBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="OPFundsActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="OPFundsReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="OPFundsY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="OPFundsY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="OPFundsY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="OPFundsY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="OPFundsY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="OPFundsReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
            	<td>
                	<span class="subTitle3">2.1 Budget for Non-operating Fund types ($'000); [Target: Achieve a 0% or positive variance to budget]</span>
                </td>
                <td>
                	<textarea id="NOPFundsBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPFundsActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPFundsReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPFundsY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPFundsY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPFundsY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPFundsY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPFundsY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPFundsReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
            	<td>
                	<span class="subTitle3">2.2 All non-operating Projects submit income/expenditure information into Budget templates annually [Target: 100%]</span>
                </td>
                <td>
                	<textarea id="NOPIncomeBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPIncomeActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPIncomeReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPIncomeY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPIncomeY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPIncomeY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPIncomeY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPIncomeY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NOPIncomeReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2">Staff Engagement</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Reported 2012, 2014 and 2016</td>
            </tr>
            
            <tr>
            	<td>
                	<span class="subTitle3">School/CSA % favourable score for the Passion/Engagement index in the VOICE survey [Target: Previous Score or better]</span>
                </td>
                <td>
                	<textarea id="EngagementBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="EngagementActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="EngagementReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="EngagementY1" class="tbox"></textarea>
                </td>
                <td>
                </td>
                <td>
                	<textarea id="EngagementY3" class="tbox"></textarea>
                </td>
                <td>
                </td>
                <td>
                	<textarea id="EngagementY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="EngagementReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2">Diversity, Safety and Wellbeing</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Reported 2012, 2014 and 2016</td>
            </tr>
            
            <tr>
            	<td>
                	<span class="subTitle3">School/CSA % favourable score for the Diversity, Safety and Wellbeing index in the VOICE survey [Target: Previous Score or better]</span>
                </td>
                <td>
                	<textarea id="BaseDiversity" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="DiversityActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="DiversityReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="DiversityY1" class="tbox"></textarea>
                </td>
                <td>
                </td>
                <td>
                	<textarea id="DiversityY3" class="tbox"></textarea>
                </td>
                <td>
                </td>
                <td>
                	<textarea id="DiversityY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="DiversityReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr bgcolor="#9999FF">
                <td>
                	<span class="subTitle2">Generic-School</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2">Teaching quality</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle3">1. Number of Student Appeals upheld in School [Target: Maintain or improve]</span>
                </td>
                <td>
                	<textarea id="StudentAppealsBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentAppealsActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentAppealsReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentAppealsY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentAppealsY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentAppealsY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentAppealsY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentAppealsY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentAppealsReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle3">2.1 Proportion of Annual Survey units in School that fall below the benchmark mean of 4.0 for student satisfaction [Target: Decrease]</span>
                </td>
                <td>
                	<textarea id="StudentSatisfactionBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentSatisfactionActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentSatisfactionReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentSatisfactionY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentSatisfactionY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentSatisfactionY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentSatisfactionY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentSatisfactionY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="StudentSatisfactionReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle3">2.2 Proportion of annual surveyed units in School with a response rate less than 50% [Target: 0%]</span>
                </td>
                <td>
                	<textarea id="ResponseRateBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResponseRateActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResponseRateReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResponseRateY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResponseRateY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResponseRateY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResponseRateY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResponseRateY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResponseRateReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle3">3.School's "University Retention Rate" [Target: maintain or Improve]</span>
                </td>
                <td>
                	<textarea id="RetentionRateBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="RetentionRateActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="RetentionRateReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="RetentionRateY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="RetentionRateY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="RetentionRateY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="RetentionRateY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="RetentionRateY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="RetentionRateReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2">Research activity/quality</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle3">1. Category 1 Research Income in University Areas of Strength or Emerging Strength / Academic Research Active FTE ($'000). [Target: Maintain or Improve]</span>
                </td>
                <td>
                	<textarea id="ResearchIncomeBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchIncomeActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchIncomeReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchIncomeY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchIncomeY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchIncomeY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchIncomeY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchIncomeY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchIncomeReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle3">2. HDR Completions/HDR Load for School. [Target: Maintain or Improve]</span>
                </td>
                <td>
                	<textarea id="HDRLoadBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="HDRLoadActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="HDRLoadReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="HDRLoadY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="HDRLoadY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="HDRLoadY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="HDRLoadY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="HDRLoadY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="HDRLoadReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle3">3. Total Publications meeting the HERDC or ERA Guidelines) Academic Research Active FTE [Target; Maintain or Improve]</span>
                </td>
                <td>
                	<textarea id="TotalPublicationsBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="TotalPublicationsActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="TotalPublicationsReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="TotalPublicationsY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="TotalPublicationsY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="TotalPublicationsY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="TotalPublicationsY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="TotalPublicationsY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="TotalPublicationsReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle3">4. Proportion of School's Academic Research Active FTE contributing to a defined or emerging area of research strength [Target: Maintain or Improve]</span>
                </td>
                <td>
                	<textarea id="ResearchStrengthBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchStrengthActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchStrengthReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchStrengthY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchStrengthY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchStrengthY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchStrengthY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchStrengthY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="ResearchStrengthReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2">Income generation</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2">% of non-CGS operating income to total income [Target: Maintain or increase]</span>
                </td>
                <td>
                	<textarea id="NCGSIncomeBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NCGSIncomeActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NCGSIncomeReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NCGSIncomeY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NCGSIncomeY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NCGSIncomeY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NCGSIncomeY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NCGSIncomeY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="NCGSIncomeReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr bgcolor="#9999FF">
                <td>
                	<span class="subTitle2">Generic-CSA</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2">Customer Satisfaction</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle3">Satisfaction rates as measured by appropriate instrument. Target: Maintain or improve</span>
                </td>
                <td>
                	<textarea id="SatisfactionRatesBase" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="SatisfactionRatesActions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="SatisfactionRatesReference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="SatisfactionRatesY1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="SatisfactionRatesY2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="SatisfactionRatesY3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="SatisfactionRatesY4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="SatisfactionRatesY5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="SatisfactionRatesReport" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr bgcolor="#9999FF">
            	<td rowspan="5" nowrap="nowrap" bgcolor="#FFFFFF">
                	<span class="rotateWord">Linked to Strat. Plan</span>
                </td>
                <td>
                	<span class="subTitle2">Specific</span>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2"><input type="text" id="specific1" class="tbox" /></span>
                </td>
                <td>
                	<textarea id="Specific1Base" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific1Actions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific1Reference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific1Y1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific1Y2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific1Y3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific1Y4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific1Y5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific1Report" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2"><input type="text" id="specific2" class="tbox" /></span>
                </td>
                <td>
                	<textarea id="Specific2Base" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific2Actions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific2Reference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific2Y1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific2Y2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific2Y3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific2Y4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific2Y5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific2Report" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2"><input type="text" id="specific3" class="tbox" /></span>
                </td>
                <td>
                	<textarea id="Specific3Base" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific3Actions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific3Reference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific3Y1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific3Y2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific3Y3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific3Y4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific3Y5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific3Report" class="tbox"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                	<span class="subTitle2"><input type="text" id="specific4" class="tbox" /></span>
                </td>
                <td>
                	<textarea id="Specific4Base" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific4Actions" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific4Reference" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific4Y1" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific4Y2" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific4Y3" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific4Y4" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific4Y5" class="tbox"></textarea>
                </td>
                <td>
                	<textarea id="Specific4Report" class="tbox"></textarea>
                </td>
            </tr>
        </table>
    </div>
    </form>
</div>
</body>
</html>
