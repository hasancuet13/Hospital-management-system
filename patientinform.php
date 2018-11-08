<html lang="en">
<?php
ob_start();
session_start();
?>

<?php
if(!isset($_SESSION['sessionusername']) and isset($_POST["submit"])){
	  //echo "<script type='text/javascript'>$.notify('You need to Login first...','warn')</script>";
	  $_SESSION["patientinfo"]="You need to Login first.....";
	  header('Refresh: 0; url=Home.php');

}
else{
	$_SESSION["patientinfo"]="";
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noindex, nofollow">


    <title>Patient information</title>

    
         <link rel="icon" type="image/x-icon" href="//www.formstack.com/favicon.ico" />
        
    
        <link rel="stylesheet" type="text/css" href="//static.formstack.com/forms/css/3/reset_53bc1bb20a.css" />
        <link rel="stylesheet" type="text/css" href="//static.formstack.com/forms/css/3/jquery-ui_e641deecbe.css" />
        <link rel="stylesheet" type="text/css" href="//static.formstack.com/forms/css/3/default-v4_b8694ab7f1.css" />
        <link rel="stylesheet" type="text/css" href="//static.formstack.com/forms/../common/css/uil-static.css" />
        <link rel="stylesheet" type="text/css" href="//static.formstack.com/forms/css/common/dialogs_68abb2e62a.css" />
		<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="jquery-3.1.1.js"></script>
		<script type="text/javascript" src="notify.js"></script>
		<script type="text/javascript" src="notify.min.js"></script>

    <style type="text/css">
  body {background-color: #ffffff;}.fsBody {
  font-family: 'Helvetica Neue', Arial, 'Lucida Grande', Tahoma, Verdana, sans-serif;
  color: #595d64;
  background-color: #1b994f;
 
}
.fsBody input {
  font-family: 'Helvetica Neue', Arial, 'Lucida Grande', Tahoma, Verdana, sans-serif;
}
.wf-active .fsBody, .wf-active .fsBody input {
  font-family: 'Lato', 'Helvetica Neue', Arial, 'Lucida Grande', Tahoma, Verdana, sans-serif;
}

.fsBody .fsForm {
  float: center;
  border: 0 solid transparent;
  background-color: #ffffff;
  background-color: rgba(255, 255, 255, 1);
}

#fsHeaderImage {
  text-align: center;
}
#fsHeaderImage img {
  width: 0;
  height: 0;
}

#fsFooterImage {
  text-align: center;
}
#fsFooterImage img {
  width: 0;
  height: 0;
}

.fsborderradius .fsBody .fsForm {
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
}

.fsBody {
  padding: 20px;
}

.fsBody .fsForm {
  margin: 20px auto;
  padding: 20px;
}

.fsBody .fsFieldRow {
  margin-bottom: 20px !important;
}

.fsBody .fsRowBody {
  margin-bottom: 20px !important;
}

.fsBody .fsSubField {
  margin-right: 10px;
}

@media (max-width: 40em) {
  .fsRow.fsFieldRow.fsLastRow {
    margin-bottom: 20px;
  }

  .fsSubFieldGroup .fsSubField:not(:last-child) {
    margin-bottom: 10px;
  }
}
.fsFieldFocused:not(.fsValidationError) {
  background-color: transparent;
  background-color: rgba(0, 0, 0, 0);
}
.fsFieldFocused:not(.fsValidationError).fsSpan100 {
  padding: 10px !important;
  margin: -10px -10px !important;
}
.fsFieldFocused:not(.fsValidationError).fsSpan75, .fsFieldFocused:not(.fsValidationError).fsSpan66, .fsFieldFocused:not(.fsValidationError).fsSpan50, .fsFieldFocused:not(.fsValidationError).fsSpan33, .fsFieldFocused:not(.fsValidationError).fsSpan25 {
  -moz-box-shadow: 0 0 0 10px transparent;
  -webkit-box-shadow: 0 0 0 10px transparent;
  box-shadow: 0 0 0 10px transparent;
  -moz-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
  -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
  box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
}

.fsRequiredMarker {
  margin-left: 2.5px !important;
  font-size: 16px;
  color: #595d64;
}

.fsValidationError {
  background-color: #fae9e9;
  -moz-box-shadow: 0 0 0 calc(5px - 1px) #fae9e9, 0 0 0 5px #ce5f6d;
  -webkit-box-shadow: 0 0 0 calc(5px - 1px) #fae9e9, 0 0 0 5px #ce5f6d;
  box-shadow: 0 0 0 calc(5px - 1px) #fae9e9, 0 0 0 5px #ce5f6d;
}

.fsForm input:focus,
.fsForm select:focus,
.fsForm textarea:focus,
.fsForm .ui-slider-handle:focus {
  border-color: #cfd4d8;
  -moz-box-shadow: 0 0 5px rgba(89, 93, 100, 0.75);
  -webkit-box-shadow: 0 0 5px rgba(89, 93, 100, 0.75);
  box-shadow: 0 0 5px rgba(89, 93, 100, 0.75);
}
.fsForm :-moz-focusring {
  text-shadow: 0 0 0 #595d64;
}

@media \0screen {
  .fsForm input:focus,
  .fsForm select:focus,
  .fsForm textarea:focus {
    filter: progid:DXImageTransform.Microsoft.Shadow(Color=#595d64, Strength=2, Direction=0) progid:DXImageTransform.Microsoft.Shadow(Color=#595d64, Strength=2, Direction=90) progid:DXImageTransform.Microsoft.Shadow(Color=#595d64, Strength=2, Direction=180) progid:DXImageTransform.Microsoft.Shadow(Color=#595d64, Strength=2, Direction=270);
  }
}
div.fsError {
  margin: 0 0 20px 0;
  padding: 10px;
  font-size: 14px;
}

.fsBody .showMobile {
  margin-top: 10px;
  font-size: 12px;
}

.fsBody .fsLabel,
.fsBody label {
  font-size: 16px;
  color: #595d64;
}

.fsLabelVertical .fsLabel {
  margin-bottom: 10px;
}

.fsBody .fsSupporting {
  font-size: 12px;
  font-weight: 400;
  font-style: normal;
  line-height: 12px;
  color: #595d64;
}

.fsFieldFocused div.fsSupporting {
  color: #595d64;
}

.fsBody .fsCounter {
  font-size: 12px;
  color: #595d64;
}

.fsForm .fsLabelHorizontal > label, .fsForm .fsLabelHorizontal > legend, .fsForm .fsLabelHorizontal > span.fsLabel, .fsForm .fsLabelHorizontal legend.fsLabelHorizontal {
  width: calc(25% - 10px);
  margin-right: 10px;
}

label.fsOptionLabel {
  font-size: 14px;
  line-height: 28px;
}

.fsBody .fieldset-content .fsOptionLabel.horizontal {
  margin-right: 20px;
}

@media all and (device-width: 768px) and (device-height: 1024px) and (orientation: portrait), all and (device-width: 768px) and (device-height: 1024px) and (orientation: landscape) {
  .fsOptionLabel {
    line-height: 32px !important;
  }
}
@media (max-width: 40em) {
  label.fsOptionLabel {
    border: 1px solid #cfd4d8;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    background-color: #edeff0;
  }
}
.fsBody .fsCalloutTop {
  border-color: transparent transparent #595d64 transparent;
}

.fsBody .fsCalloutBody {
  padding: 12px;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  font-size: 12px;
  line-height: 24px;
  color: #ffffff;
  background-color: #595d64;
}

.fsRowBody input[type="text"],
.fsRowBody input[type="email"],
.fsRowBody input[type="number"],
.fsRowBody input[type="tel"],
.fsForm textarea,
.fsSignature {
  border: 1px solid #cfd4d8;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  background-color: #ffffff;
  -moz-transition-property: color, background-color, border, border-color, box-shadow;
  -o-transition-property: color, background-color, border, border-color, box-shadow;
  -webkit-transition-property: color, background-color, border, border-color, box-shadow;
  transition-property: color, background-color, border, border-color, box-shadow;
  -moz-transition-duration: 0s;
  -o-transition-duration: 0s;
  -webkit-transition-duration: 0s;
  transition-duration: 0s;
  -moz-transition-timing-function: ease-in-out;
  -o-transition-timing-function: ease-in-out;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
}

.fsRowBody input[type="text"],
.fsRowBody input[type="email"],
.fsRowBody input[type="number"],
.fsRowBody input[type="tel"],
.fsForm select {
  height: 42px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.fsRowBody input[type="text"],
.fsRowBody input[type="email"],
.fsRowBody input[type="number"],
.fsRowBody input[type="tel"],
.fsForm select,
.fsForm textarea {
  padding: 7px;
  font-size: 14px;
  font-weight: 400;
  font-style: normal;
  line-height: 14px;
  color: #595d64;
}
.fsRowBody input[type="text"].fsRequired,
.fsRowBody input[type="email"].fsRequired,
.fsRowBody input[type="number"].fsRequired,
.fsRowBody input[type="tel"].fsRequired,
.fsForm select.fsRequired,
.fsForm textarea.fsRequired {
  border: 1px solid #cfd4d8;
  background-color: #ffffff;
}

.fsCell {
  -moz-transition-property: padding, box-shadow, background-color, margin-left, margin-right;
  -o-transition-property: padding, box-shadow, background-color, margin-left, margin-right;
  -webkit-transition-property: padding, box-shadow, background-color, margin-left, margin-right;
  transition-property: padding, box-shadow, background-color, margin-left, margin-right;
  -moz-transition-duration: 0s;
  -o-transition-duration: 0s;
  -webkit-transition-duration: 0s;
  transition-duration: 0s;
  -moz-transition-timing-function: ease-in-out;
  -o-transition-timing-function: ease-in-out;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
}

.fsRowBody input[type="radio"],
.fsRowBody input[type="checkbox"] {
  top: 7px;
  width: 14px;
  height: 14px;
}
.fsRowBody input[type="radio"]:before, .fsRowBody input[type="radio"]:checked:before,
.fsRowBody input[type="checkbox"]:before,
.fsRowBody input[type="checkbox"]:checked:before {
  width: 14px;
  height: 14px;
  margin-right: 7px;
  border: 1px solid #cfd4d8;
  background-color: #ffffff;
}

.fsRowBody input[type="radio"]:checked:before {
  border: 4px solid #595d64;
}

.fsRowBody input[type="checkbox"]:checked:before {
  border-color: #595d64;
  background-color: #595d64;
  background-image: url("data:image/svg+xml;utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20164%20122%22%3E%3Cpath%20class%3D%22st0%22%20fill%3D%22#ffffff%22%20d%3D%22M156.4%207.6c-7.6-10.2-22.7-10.2-30.3%200L63.4%2068.1%2038.1%2040.4c-7.6-10.2-22.7-10.2-30.3%200-10.1%207.6-10.1%2022.8.1%2030.3L45.7%20111l7.6%207.6s1.7%201.8%205%202.6c2.5.6%202.5.7%202.5.7%207.9.6%2013.5-2.2%2017.6-5.7l78-78.3c10.1-7.5%2010.1-22.7%200-30.3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
}

.fsForm select {
  padding-right: calc(14px);
  padding-left: calc(7px);
  border: 1px solid #cfd4d8;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  color: #595d64;
  background-color: #ffffff;
  -moz-transition-property: color, background-color, border, border-color;
  -o-transition-property: color, background-color, border, border-color;
  -webkit-transition-property: color, background-color, border, border-color;
  transition-property: color, background-color, border, border-color;
  -moz-transition-duration: 0s;
  -o-transition-duration: 0s;
  -webkit-transition-duration: 0s;
  transition-duration: 0s;
  -moz-transition-timing-function: ease-in-out;
  -o-transition-timing-function: ease-in-out;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
}
.fsForm select:not([multiple="multiple"]) {
  padding-right: calc(28px);
  background-image: url("data:image/svg+xml;utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2018%2030%22%3E%3Cpath%20fill%3D%22%23595d64%22%20d%3D%22M1%20.1h16c.9%200%201.1.9.7%201.4l-7.9%209c-.5.5-1.1.7-1.6.2l-7.9-9C-.1%201%20.1.1%201%20.1z%22%20transform%3D%22rotate%28180%209%2015%29%20translate%280%2019%29%22%3E%3C%2Fpath%3E%3Cpath%20fill%3D%22%23595d64%22%20d%3D%22M1%20.1h16c.9%200%201.1.9.7%201.4l-7.9%209c-.5.5-1.1.7-1.6.2l-7.9-9C-.1%201%20.1.1%201%20.1z%22%20transform%3D%22translate%280%2019%29%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
  background-position: right 7px top 50%;
}

@media screen\0 {
  .fsForm select {
    padding-right: calc(14px) !important;
  }
}
.fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(2).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(1).fsNameFirst {
  width: calc(50% - 10px);
}
.fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(3).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(2).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(1).fsNameFirst {
  width: calc(40% - 10px);
}
.fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(3).fsNamePrefix, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(3).fsNameInitial, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(3).fsNameMiddle, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(3).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(2).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(2).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(2).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(2).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(1).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(1).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(1).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(1).fsNameSuffix {
  width: calc(20% - 10px);
}
.fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(4).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(3).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(2).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(1).fsNameFirst {
  width: calc(35% - 10px);
}
.fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(4).fsNamePrefix, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(4).fsNameInitial, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(4).fsNameMiddle, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(4).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(3).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(3).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(3).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(3).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(2).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(2).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(2).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(2).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(1).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(1).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(1).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(1).fsNameSuffix {
  width: calc(15% - 10px);
}
.fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(5).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(4).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(3).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(2).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(1).fsNameFirst {
  width: calc(32% - 10px);
}
.fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(5).fsNamePrefix, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(5).fsNameInitial, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(5).fsNameMiddle, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(5).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(4).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(4).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(4).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(4).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(3).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(3).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(3).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(3).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(2).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(2).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(2).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(2).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(1).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(1).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(1).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(1).fsNameSuffix {
  width: calc(12% - 10px);
}
.fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(6).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(5).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(4).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(3).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(2).fsNameFirst,
.fsSubFieldGroup .fsSubField:nth-child(6):nth-last-child(1).fsNameFirst {
  width: calc(28% - 10px);
}
.fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(6).fsNamePrefix, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(6).fsNameInitial, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(6).fsNameMiddle, .fsSubFieldGroup .fsSubField:nth-child(1):nth-last-child(6).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(5).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(5).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(5).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(2):nth-last-child(5).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(4).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(4).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(4).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(3):nth-last-child(4).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(3).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(3).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(3).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(4):nth-last-child(3).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(2).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(2).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(2).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(5):nth-last-child(2).fsNameSuffix,
.fsSubFieldGroup .fsSubField:nth-child(6):nth-last-child(1).fsNamePrefix,
.fsSubFieldGroup .fsSubField:nth-child(6):nth-last-child(1).fsNameInitial,
.fsSubFieldGroup .fsSubField:nth-child(6):nth-last-child(1).fsNameMiddle,
.fsSubFieldGroup .fsSubField:nth-child(6):nth-last-child(1).fsNameSuffix {
  width: calc(11% - 10px);
}

.fsBody .fsSubField.fsFieldCity {
  width: calc(60% - 10px);
}
.fsBody .fsSubField.fsFieldState {
  width: calc(30% - 10px);
}

.fsBody .fsSubFieldGroup ~ select[name*='-country'] {
  margin-top: 10px !important;
}

.fsBody .fsFieldAddress,
.fsBody .fsFieldAddress2 {
  margin-bottom: 10px;
}

@media all and (max-width: 699px), all and (device-height: 1024px) and (device-width: 768px) and (orientation: portrait), all and (device-height: 1024px) and (device-width: 768px) and (orientation: landscape) {
  .fsBody .fsSubField.fsFieldCity {
    margin-bottom: 10px;
  }
  .fsBody .fsSubField.fsFieldState {
    width: calc(70% - 10px);
  }
}
@media (max-width: 40em) {
  div.fsSubField.fsFieldState {
    margin-right: 10px;
  }
}
div.fsSliderValue {
  padding: 7px 14px;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  font-size: 14px;
  line-height: 16px;
  color: #ffffff;
  background-color: #595d64;
}

.fsSliderDiv {
  font-size: 14px;
  background-color: #595d64;
}
.fsSliderDiv .ui-state-default,
.fsSliderDiv .ui-widget-content .ui-state-default {
  background-color: #595d64;
}
.fsSliderDiv .ui-state-active,
.fsSliderDiv .ui-widget-content .ui-state-active {
  background-color: #595d64;
}
.fsSliderDiv .ui-corner-all, .fsSliderDiv.ui-corner-all {
  -moz-border-radius-topleft: 0;
  -webkit-border-top-left-radius: 0;
  border-top-left-radius: 0;
  -moz-border-radius-topright: 0;
  -webkit-border-top-right-radius: 0;
  border-top-right-radius: 0;
  -moz-border-radius-bottomleft: 0;
  -webkit-border-bottom-left-radius: 0;
  border-bottom-left-radius: 0;
  -moz-border-radius-bottomright: 0;
  -webkit-border-bottom-right-radius: 0;
  border-bottom-right-radius: 0;
}
.fsSliderDiv.ui-widget-content {
  border: 1px solid #d4d4d4 !important;
}
.fsSliderDiv .ui-widget-header {
  background-color: #d4d4d4;
}

.fsCurrency {
  margin-right: 5px !important;
  font-size: 14px;
  line-height: 32px;
  color: #595d64;
}
.fsCurrency ~ input.fsField {
  width: calc(96% - 5px) !important;
}

.fsRowBody input[type="email"] ~ p {
  margin-top: 10px;
}

.fsProductField__fields__quantity {
  color: #595d64;
}

.fsProductField__fields__fixed-amount,
.fsProductField__fields__no-charge {
  font-size: 14px;
  color: #595d64;
}

.fsProductField__info__name {
  font-size: 16px;
  color: #595d64;
}

.fsProductField__info__description {
  margin-top: 5px;
  font-size: 12px;
  line-height: 12px;
  color: #595d64;
}

.fsProductField__fields__sold-out {
  font-size: 14px;
  color: #595d64;
}

.fsProductField__wait-list {
  margin-top: 10px;
}

@media (max-width: 40em) {
  .fsProductField__image {
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
  }

  .fsProductField__fields__fixed-amount,
  .fsProductField__fields__quantity {
    font-size: 14px;
  }
}
.fsMatrix {
  font-size: 12px;
  color: #595d64;
}
.fsMatrix th,
.fsMatrix td {
  border-top: 1px solid #cfd4d8;
  border-left: 1px solid #cfd4d8;
}
.fsMatrix th:nth-child(2) {
  -moz-border-radius: 0 0 0 0;
  -webkit-border-radius: 0;
  border-radius: 0 0 0 0;
}
.fsMatrix tr:first-child th:last-child {
  -moz-border-radius: 0 0 0 0;
  -webkit-border-radius: 0;
  border-radius: 0 0 0 0;
}
.fsMatrix tr:last-child td:last-child {
  -moz-border-radius: 0 0 0 0;
  -webkit-border-radius: 0;
  border-radius: 0 0 0 0;
}
.fsMatrix tr:last-child th {
  -moz-border-radius: 0 0 0 0;
  -webkit-border-radius: 0;
  border-radius: 0 0 0 0;
}
.fsMatrix tr:last-child th,
.fsMatrix tr:last-child td {
  border-bottom: 1px solid #cfd4d8;
}
.fsMatrix tr th:last-child,
.fsMatrix tr td:last-child {
  border-right: 1px solid #cfd4d8;
}
.fsMatrix th.fsMatrixLabelColumn {
  text-align: center;
}
.fsMatrix th.fsMatrixLabelRow {
  text-align: right;
}
.fsMatrix th.fsMatrixLabelColumn,
.fsMatrix th.fsMatrixLabelRow {
  padding: 6px;
}

.fsMatrixCol1 {
  background: #eaeaea;
  background: rgba(234, 234, 234, 0.2);
}

.fsMatrixCol2 {
  background: #d4d4d4;
  background: rgba(212, 212, 212, 0.2);
}

.fsForm input[type="file"]::-webkit-file-upload-button {
  height: 32px;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  font-size: 14px;
  color: #ffffff;
  background-color: #595d64;
}

.fsBody .fieldset-content .always-ltr {
  margin-top: 10px;
}
.fsBody .fieldset-content select span,
.fsBody .fieldset-content .always-ltr span {
  top: 8px;
}
.fsBody .fieldset-content select {
  margin-right: 10px;
}
.fsBody .fieldset-content span {
  right: 5px;
}

.fsBody .ui-datepicker-trigger {
  top: 8px;
  margin-left: 10px;
}

.fsSignatureClear {
  font-size: 12px;
  color: #595d64;
}

.fsSignature + div {
  margin-left: 10px;
  line-height: 12px;
}

img.fsCreditCardLogo {
  margin-top: 5px;
}

.fsBody .fsSectionHeader {
  background-color: #edeff0;
}

.fsBody .fsForm .fsSectionHeading {
  margin-bottom: 10px;
  text-align: center;
  font-size: 28px;
  font-weight: 400;
  font-style: normal;
  line-height: 28px;
  color: #000000;
}

.fsborderradius .fsBody .fsSectionHeader {
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
}

.fsborderradius .fsBody .fsSectionHeader {
  margin-bottom: 40px;
}

.fsBody .fsSectionHeader {
  padding: 20px;
}

.fsForm select[multiple="multiple"]::-webkit-scrollbar-thumb,
.fsForm textarea::-webkit-scrollbar-thumb {
  background-color: #cfd4d8;
}

.fsForm .fsSubmit {
  margin-top: 40px;
  padding: 20px 0;
}

.fsPreviousButton,
.fsSubmitButton,
.fsNextButton {
  padding: 10px 10px;
  border: 0 solid transparent;
  -moz-border-radius: 0 !important;
  -webkit-border-radius: 0;
  border-radius: 0 !important;
  font-size: 14px !important;
  font-weight: 400;
  font-style: normal;
  line-height: 14px;
  color: #ffffff !important;
  background-color: #595d64 !important;
}

div.fsProgress {
  margin-top: 20px;
}

div.fsProgressBarContainer {
  height: 14px;
  background-color: #eaeaea;
}

div.fsProgressText {
  margin-top: -14px;
  font-size: 7px;
  line-height: 14px;
  color: #595d64;
}

div.fsProgressBar {
  background-color: #d4d4d4;
}

div.fsSaveIncomplete {
  margin-bottom: 20px;
  padding: 10px 0;
  background-color: #eaeaea;
}
div.fsSaveIncomplete a {
  font-size: 14px;
  color: #595d64;
}
div.fsSaveIncomplete a:visited {
  color: #595d64;
}

@media all and (max-width: 699px), all and (device-height: 1024px) and (device-width: 768px) and (orientation: portrait), all and (device-height: 1024px) and (device-width: 768px) and (orientation: landscape) {
  .fsPagination .fsNextButton,
  .fsPagination .fsPreviousButton {
    background-color: #595d64;
  }
  .fsPagination .fsSubmitMultipage {
    margin-top: 20px !important;
  }
}
#fsSubmissionCheckmark {
  margin: 10px 0;
  background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("data:image/svg+xml;utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%22-67%20-7%20164%20164%22%3E%3Cpath%20fill%3D%22%23595d64%22%20d%3D%22M15-7c-45.3%200-82%2036.7-82%2082s36.7%2082%2082%2082%2082-36.7%2082-82S60.3-7%2015-7zm36.8%2073.4l-39.2%2039.2c-2.5%201.2-5%203.8-8.8%202.5H2.5c-1.2%200-2.5-1.3-2.5-1.3l-3.8-3.8-19-20.2c-5.1-3.8-5.1-11.4%200-15.2%203.8-5.1%2011.4-5.1%2015.2%200L5.1%2081.5l31.5-30.3c3.8-5.1%2011.4-5.1%2015.2%200%205.1%203.8%205.1%2011.4%200%2015.2z%22%2F%3E%3C%2Fsvg%3E");
}
#fsSubmissionCheckmark ~ .fsSectionHeading {
  margin-bottom: 10px;
}
#fsSubmissionCheckmark ~ .fsSectionText {
  text-align: center;
}

#recaptcha_area {
  margin-bottom: 20px;
}

.recaptchatable img:hover {
  -moz-box-shadow: 0px 0px 0px 1px #595d64;
  -webkit-box-shadow: 0px 0px 0px 1px #595d64;
  box-shadow: 0px 0px 0px 1px #595d64;
}
    </style>

        <style type="text/css">
        .fsBody .fsForm .fsMatrix th, .fsBody .fsForm .fsMatrixLabel {text-align: center;}
    </style>
    </head>
<body id="fsLocal" class="fsBody">


<noscript><h4 class="warningNoJS"><strong>ERROR:</strong>JavaScript is not enabled. You must enable JavaScript in your browser to use this form</h4></noscript>
<form method="POST" enctype="multipart/form-data" action="patientinformdbconnect.php" class="fsForm fsSingleColumn fsMaxCol1" id="fsForm2534568">

<div class="fsPage" id="fsPage2534568-1">
  
        <div class="fsSection fs1Col" id="fsSection47550900">
                     
            <div class="fsSectionHeader">
            <h2 class="fsSectionHeading">Patient Information</h2>
        
    </div>

                              
        <div id="fsRow2534568-2" class="fsRow fsFieldRow fsLastRow">
       
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550901" lang="en">
					<span id="label47550901" class="fsLabel">Patient Name</span>

                <div class="fsSubFieldGroup">

    
<div class="fsSubField fsNameFirst">
        <input type="text" id="field47550901-first" name="fname" size="50" value="" class="fsField fsFieldName" required>
        <label class="fsSupporting" for="field47550901-first">First Name</label>
</div>  
<div class="fsSubField fsNameLast">
        <input type="text" id="field47550901-last" name="lname" size="50" value="" class="fsField fsFieldName" required>
        <label class="fsSupporting" for="field47550901-last">Last Name</label>
    </div>  
</div>
<div class="clear"></div>       
    </div>
</div>
            
                                  
  <div id="fsRow2534568-3" class="fsRow fsFieldRow fsLastRow">

 <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550902" lang="en">
 
<label id="label47550902" class="fsLabel" for="field47550902">User ID</label>

<input type="text" name="userid" required><br>

<label id="label47550902" class="fsLabel" for="field47550902">Address </label>

<input type="text" id="field47550902-address2" name="address" size="50" value="" style="margin-top:5px;" class="fsField fsFieldAddress2" required>

<div class="fsSubFieldGroup">

    <div class="fsSubField fsFieldCity">
        <input type="text" id="field47550902-city" name="district" size="15" value="" class="fsField fsFieldCity" required>
        <label class="fsSupporting" for="field47550902-city">District</label>
    </div>

    <div class="fsSubField fsFieldState">
                    <select id="field47550902-state" name="division" class="fsField fsFieldState">
                <option value="">&nbsp;</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Mymensingh">Mymensingh</option>
                            </select>
            <label class="fsSupporting" for="field47550902-state">Division</label>
            </div>

</div>

<div class="clear"></div>
  
            </div>
 </div>
                                 
 <div id="fsRow2534568-5" class="fsRow fsFieldRow fsLastRow">
             
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550903" lang="en">
                                                    <fieldset id="label47550903">

                        <legend class="fsLabel fsLabelVertical"><span>Date of Birth</span></legend>
                        <div class="fieldset-content">         
                
                    <!-- Used to pull in url for jquery -->
    <span style="display:none;" id="fsCalendar47550903ImageUrl">https://cuet.formstack.com/forms/images/2/calendar.png</span>

        
        
    
   
    
      <div class="hidden"><label for="field47550903M">Month</label></div>
        <select id="field47550903M" name="month" class="fsField" type="text">
                    <option value=""> </option>
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="Jul">Jul</option>
                    <option value="Aug">Aug</option>
                    <option value="Sep">Sep</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
             <div class="hidden"><label for="field47550903D">Day</label></div>
        <select id="field47550903D" name="day" class="fsField" type="text">
                    <option value=""> </option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
             <div class="hidden"><label for="field47550903Y">Year</label></div>
        <select id="field47550903Y" name="year" class="fsField" type="text">
                    <option value=""> </option>
					<option value="1981">1981</option>
					<option value="1982">1982</option>
					<option value="1983">1983</option>					
					<option value="1984">1984</option>
					<option value="1985">1985</option>
					<option value="1986">1986</option>
					
					<option value="1987">1987</option>
					<option value="1988">1988</option>
					<option value="1989">1989</option>
					
					<option value="1990">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
					<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
    
    
        
    <input type="text" id="fsCalendar47550903Link" class="fsCalendarPickerLink" style="display:none;" />
    
    <div id="fsCalendar47550903" class="fsCalendar" style=" position:absolute"></div>
          </div></fieldset>
    
            </div>

    </div>
	
	
<div class="fsSubField fsFieldZip">
<label class="fsSupporting" for="field47550902-zip" style="font-size:18">Age</label><br>
   <input type="text" id="field47550902-zip" name="age" size="6" value="" style="width:100px;height:40px;"/>
   
</div>
<br><br><br><br><br>                    
<div id="fsRow2534568-6" class="fsRow fsFieldRow fsLastRow">
 <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550904" lang="en">
  <label id="label47550904" class="fsLabel" for="field47550904">Email Address                    </label>

   <input type="email" id="field47550904" name="email" size="50" value="" class="fsField fsFormatEmail" required>
    
            </div>

              </div>
                                  
                <div id="fsRow2534568-7" class="fsRow fsFieldRow fsLastRow">
            
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550905" lang="en">
                                                                        <label id="label47550905" class="fsLabel" for="field47550905">Cell Phone                    </label>
                                    
                
                
                <input type="tel" id="field47550905" name="cellphone" size="20" value="" class="fsField fsFormatPhoneUS " data-country="BD" data-format="national" required>
    
            </div>

                  </div>
                                            
                <div id="fsRow2534568-8" class="fsRow fsFieldRow fsLastRow">
            
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550906" lang="en">
  <label id="label47550906" class="fsLabel" for="field47550906">Home Phone                    </label>

                <input type="tel" id="field47550906" name="homephone" size="20" value="" class="fsField fsFormatPhoneUS " data-country="BD" data-format="national" />
    
            </div>

               </div>
                              
                <div id="fsRow2534568-9" class="fsRow fsFieldRow fsLastRow">


  </div>
              
 <div id="fsRow2534568-10" class="fsRow fsFieldRow fsLastRow">
      
  <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550908" lang="en">
  <label id="label47550908" class="fsLabel" for="field47550908">Preferred Method of Contact</label>
                                                  
<select id="field47550908" name="contactmethod" size="1" class="fsField">

        <option value="Mail">Mail</option>
        <option value="Cell Phone">Cell Phone</option>
        <option value="Work Phone">Work Phone</option>
        <option value="Home Phone">Home Phone</option>

</select>
   
            </div>

 </div>
                              

                                   
 <div id="fsRow2534568-12" class="fsRow fsFieldRow fsLastRow">

            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550910" lang="en">
                     <label id="label47550910" class="fsLabel" for="field47550910">NID Number</label>

                <input type="text" id="field47550910" name="nid" size="50" value="" class="fsField" />
   
            </div>
 </div>
 <div id="fsRow2534568-13" class="fsRow fsFieldRow fsLastRow">
 <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550911" lang="en">
 <fieldset id="label47550911">

 <legend class="fsLabel fsLabelVertical"><span>Marital Status</span></legend>
 <div class="fieldset-content">
  <label class="fsOptionLabel horizontal" for="field47550911_1"><input type="radio" id="field47550911_1" name="maritalstatus" value="Single" class="fsField horizontal" />Single</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="field47550911_2"><input type="radio" id="field47550911_2" name="maritalstatus" value="Married" class="fsField horizontal" />Married</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="field47550911_3"><input type="radio" id="field47550911_3" name="maritalstatus" value="Divorced" class="fsField horizontal" />Divorced</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="field47550911_4"><input type="radio" id="field47550911_4" name="maritalstatus" value="Widowed" class="fsField horizontal" />Widowed</label>
                

     </div></fieldset>
                
                
            </div>

      </div>
                          
                <div id="fsRow2534568-14" class="fsRow fsFieldRow fsLastRow">
    
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550912" lang="en">
                                                    <fieldset id="label47550912">

                        <legend class="fsLabel fsLabelVertical" ><span>Employment</span></legend>
<div class="fieldset-content">
                
                
        <label class="fsOptionLabel horizontal" for="field47550912_1"><input type="radio" id="field47550912_1" name="employment" value="Employed" class="fsField horizontal" />Employed</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="field47550912_2"><input type="radio" id="field47550912_2" name="employment" value="Unemployed" class="fsField horizontal" />Unemployed</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="field47550912_3"><input type="radio" id="field47550912_3" name="employment" value="Disabled" class="fsField horizontal" />Disabled</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="field47550912_4"><input type="radio" id="field47550912_4" name="employment" value="Retired" class="fsField horizontal" />Retired</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="field47550912_5"><input type="radio" id="field47550912_5" name="employment" value="Student" class="fsField horizontal" />Student</label>
                
          </div></fieldset>

            </div>

        </div>
                                    
                <div id="fsRow2534568-15" class="fsRow fsFieldRow fsLastRow fsHidden">
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsHidden fsSpan100" id="fsCell47550913" lang="en">
 <label id="label47550913" class="fsLabel" for="field47550913">Current Employer</label>
 <input type="text" id="field47550913" name="currentemployer" size="50" value="" class="fsField" disabled="disabled" />
   
            </div>

</div>
                                
<div id="fsRow2534568-16" class="fsRow fsFieldRow fsLastRow fsHidden">
      
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsHidden fsSpan100" id="fsCell47550914" lang="en">
                   <label id="label47550914" class="fsLabel" for="field47550914">Current University/College                    </label>
                                    
                <input type="text" id="field47550914" name="field47550914" size="50" value="" class="fsField" disabled="disabled" />
   
            </div>

         </div>
                                             
                <div id="fsRow2534568-17" class="fsRow fsFieldRow fsLastRow">
      
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550917" lang="en">
                     <label id="label47550917" class="fsLabel" for="field47550917">Preferred Pharmacy </label>
                                    
                <input type="text" id="field47550917" name="preferredpharmacy" size="50" value="" class="fsField" required>


            </div>

          </div>
                                   
        <div id="fsRow2534568-18" class="fsRow fsFieldRow fsLastRow">
         
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550918" lang="en">
          <label id="label47550918" class="fsLabel" for="field47550918">Preferred Pharmacy Phone</label>
                                    
                <input type="tel" id="field47550918" name="preferredpharmacyphone" size="20" value="" class="fsField fsFormatPhoneUS " data-country="BD" data-format="national" required>
   
            </div>

         </div>
                               
                <div id="fsRow2534568-19" class="fsRow fsFieldRow fsLastRow">
           
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550919" lang="en">
             <label id="label47550919" class="fsLabel" for="field47550919">Preferred Pharmacy Address </label>

                <label for="field47550919-address" class="hidden">Address Line 1</label>
		<input type="text" id="field47550919-address" name="pharmacyaddress" size="50" value="" class="fsField fsFieldAddress" />

	<div class="clear"></div>
     
            </div>

   </div>
                  
       </div>
                           
            <div class="fsSection fs1Col" id="fsSection47550920">
                          
            <div class="fsSectionHeader">
            <h2 class="fsSectionHeading">Symptoms</h2>
        
    </div>
                                
                <div id="fsRow2534568-21" class="fsRow fsFieldRow fsLastRow">
       
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550921" aria-describedby="fsSupporting47550921" lang="en">
 <fieldset id="label47550921">

                        <div class="fieldset-content">
        
                                <label class="fsOptionLabel horizontal" for="field47550921_2"><input type="checkbox" id="field47550921_2" name="symptom" value="Allergies" class="fsField horizontal">Allergies</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_3"><input type="checkbox" id="field47550921_3" name="symptom" value="Gastric" class="fsField horizontal" >Gastric</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_4"><input type="checkbox" id="field47550921_4" name="symptom" value="Diarrhoea" class="fsField horizontal" />Diarrhoea</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_5"><input type="checkbox" id="field47550921_5" name="symptom" value="Anxiety" class="fsField horizontal" />Anxiety</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_6"><input type="checkbox" id="field47550921_6" name="symptom" value="Arthritis" class="fsField horizontal" />Arthritis</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_7"><input type="checkbox" id="field47550921_7" name="symptom" value="Asthma" class="fsField horizontal" />Asthma</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_8"><input type="checkbox" id="field47550921_8" name="symptom" value="Pneumonia" class="fsField horizontal" />Pneumonia</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_9"><input type="checkbox" id="field47550921_9" name="symptom" value="Benign Prostatic Hypertrophy" class="fsField horizontal" />Dysentery</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_10"><input type="checkbox" id="field47550921_10" name="symptom" value="Blood Clots" class="fsField horizontal" />Blood Clots</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_11"><input type="checkbox" id="field47550921_11" name="symptom" value="Cancer-Type" class="fsField horizontal" />Cancer - Type</label>
								
								<label class="fsOptionLabel horizontal" for="field47550921_15"><input type="checkbox" id="field47550921_15" name="symptom" value="Fever" class="fsField horizontal" />Fever</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_12"><input type="checkbox" id="field47550921_12" name="symptom" value="Cerebrovascular Accident" class="fsField horizontal" />Cerebrovascular Accident</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_13"><input type="checkbox" id="field47550921_13" name="symptom" value="Cronary Artery Disease" class="fsField horizontal" />Cronary Artery Disease</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_14"><input type="checkbox" id="field47550921_14" name="symptom" value="COPD(Emphysema)" class="fsField horizontal" />COPD (Emphysema)</label>
        
                                
        
                                <label class="fsOptionLabel horizontal" for="field47550921_16"><input type="checkbox" id="field47550921_16" name="symptom" value="Depression" class="fsField horizontal" />Depression</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_17"><input type="checkbox" id="field47550921_17" name="symptom" value="Diabetes" class="fsField horizontal" />Diabetes</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_18"><input type="checkbox" id="field47550921_18" name="symptom" value="Gallbladder Disease" class="fsField horizontal" />Gallbladder Disease</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_19"><input type="checkbox" id="field47550921_19" name="symptom" value="Eye" class="fsField horizontal" />Eye disorder</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_20"><input type="checkbox" id="field47550921_20" name="symptom" value="Hepatitis B" class="fsField horizontal" />Hepatitis B</label>
        
                                
        
                                <label class="fsOptionLabel horizontal" for="field47550921_22"><input type="checkbox" id="field47550921_22" name="symptom" value="Hypertension" class="fsField horizontal" />Hypertension</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_23"><input type="checkbox" id="field47550921_23" name="symptom" value="Ear,Nose,Throad" class="fsField horizontal" />Ear,Nose,Throad</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_24"><input type="checkbox" id="field47550921_24" name="symptom" value="Liver Disease" class="fsField horizontal" />Liver Disease</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_25"><input type="checkbox" id="field47550921_25" name="symptom" value="Migraine Headaches" class="fsField horizontal" />Migraine Headaches</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_26"><input type="checkbox" id="field47550921_26" name="symptom" value="Myocardial Infarction" class="fsField horizontal" />Myocardial Infarction</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_27"><input type="checkbox" id="field47550921_27" name="symptom" value="Osteoarthritis" class="fsField horizontal" />Osteoarthritis</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_28"><input type="checkbox" id="field47550921_28" name="symptom" value="Osteoporosis" class="fsField horizontal" />Osteoporosis</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_29"><input type="checkbox" id="field47550921_29" name="symptom" value="Peptic Ulcer Disease" class="fsField horizontal" />Peptic Ulcer Disease</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_30"><input type="checkbox" id="field47550921_30" name="symptom" value="Renal Disease" class="fsField horizontal" />Renal Disease</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_31"><input type="checkbox" id="field47550921_31" name="symptom" value="Seizure Disorder" class="fsField horizontal" />Seizure Disorder</label>
        
                                <label class="fsOptionLabel horizontal" for="field47550921_32"><input type="checkbox" id="field47550921_32" name="symptom" value="Thyroid Disease" class="fsField horizontal" />Thyroid Disease</label>
        


    <div id="fsSupporting47550921" class="fsSupporting">Check any past/current patient problems</div>
                                                            
                
         </div></fieldset>
                
            </div>

  </div>
                               
                <div id="fsRow2534568-22" class="fsRow fsFieldRow fsLastRow">
         
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550922" lang="en">
                                                    <fieldset id="label47550922">

                        <legend class="fsLabel fsLabelVertical"><span>Any bone fractures?</span></legend>
                        <div class="fieldset-content">

                
        <label class="fsOptionLabel horizontal" for="field47550922_1"><input type="radio" id="field47550922_1" name="bonefractures" value="Yes" class="fsField horizontal" />Yes</label>
 
        <label class="fsOptionLabel horizontal" for="field47550922_2"><input type="radio" id="field47550922_2" name="bonefractures" value="No" class="fsField horizontal" />No</label>

     </div></fieldset>

            </div>

     </div>
                                        
  <div id="fsRow2534568-23" class="fsRow fsFieldRow fsLastRow fsHidden">

       
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsHidden fsSpan100" id="fsCell47550923" lang="en">
        <label id="label47550923" class="fsLabel" for="field47550923">What fractures have you experienced?                    </label>

                <textarea id="field47550923" name="yourexperienced" rows="4" cols="50" class="fsField" disabled="disabled"></textarea>
  
                
            </div>
 </div>
                                           
 <div id="fsRow2534568-24" class="fsRow fsFieldRow fsLastRow">
        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550924" lang="en">
         <fieldset id="label47550924">

            <legend class="fsLabel fsLabelVertical"><span>Exercise Activity</span></legend>
        <div class="fieldset-content">

        <label class="fsOptionLabel horizontal" for="exerciseactivity_1"><input type="radio" id="exerciseactivity_1" name="exerciseactivity" value="Moderate" class="fsField horizontal" />Moderate</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="exerciseactivity_2"><input type="radio" id="exerciseactivity_2" name="exerciseactivity" value="Vigorous" class="fsField horizontal" />Vigorous</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="exerciseactivity_3"><input type="radio" id="exerciseactivity_3" name="exerciseactivity" value="Sedentary" class="fsField horizontal" />Sedentary</label>
                
            
  </div></fieldset>
    
            </div>
   </div>
                                                         
  <div id="fsRow2534568-25" class="fsRow fsFieldRow fsLastRow">

        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550925" lang="en">
     <label id="label47550925" class="fsLabel" for="field47550925">Exercise days/week:</label>
    
    <input type="number" step="any" id="field47550925" name="exercisedays"  class="fsField fsFormatNumber fsNumberDecimals-0" />
   
            </div>

 </div>
                                
     <div id="fsRow2534568-26" class="fsRow fsFieldRow fsLastRow">
      
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550926" lang="en">
     <fieldset id="label47550926">

          <legend class="fsLabel fsLabelVertical"><span>Tobacco Use</span></legend>
     <div class="fieldset-content">

        <label class="fsOptionLabel horizontal" for="tobaccouse_1"><input type="radio" id="tobaccouse_1" name="tobaccouse" value="No" class="fsField horizontal" />No</label>
    
        <label class="fsOptionLabel horizontal" for="tobaccouse_2"><input type="radio" id="tobaccouse_2" name="tobaccouse" value="Daily" class="fsField horizontal" />Daily</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="tobaccouse_3"><input type="radio" id="tobaccouse_3" name="tobaccouse" value="Weekly" class="fsField horizontal" />Weekly</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="tobaccouse_4"><input type="radio" id="tobaccouse_4" name="tobaccouse" value="Less" class="fsField horizontal" />Less</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="tobaccouse_5"><input type="radio" id="tobaccouse_5" name="tobaccouse" value="Former User" class="fsField horizontal" />Former User</label>
                
 </div>
 </fieldset>
      
            </div>
 </div>
                                           
 <div id="fsRow2534568-27" class="fsRow fsFieldRow fsLastRow">
          
    <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550927" lang="en">
    <fieldset id="label47550927">
<legend class="fsLabel fsLabelVertical"><span>Alcohol Use</span></legend>
   <div class="fieldset-content">
   
        <label class="fsOptionLabel horizontal" for="alcoholuse_1"><input type="radio" id="alcoholuse_1" name="alcoholuse" value="No" class="fsField horizontal" />No</label>
    
        <label class="fsOptionLabel horizontal" for="alcoholuse_2"><input type="radio" id="alcoholuse_2" name="alcoholuse" value="Daily" class="fsField horizontal" />Daily</label>
    
        <label class="fsOptionLabel horizontal" for="alcoholuse_3"><input type="radio" id="alcoholuse_3" name="alcoholuse" value="Weekly" class="fsField horizontal" />Weekly</label>
   
        <label class="fsOptionLabel horizontal" for="alcoholuse_4"><input type="radio" id="alcoholuse_4" name="alcoholuse" value="Less" class="fsField horizontal" />Less</label>
   
        <label class="fsOptionLabel horizontal" for="alcoholuse_5"><input type="radio" id="alcoholuse_5" name="alcoholuse" value="Former User" class="fsField horizontal" />Former User</label>

     </div></fieldset>

</div>
 </div>
                               
<div id="fsRow2534568-28" class="fsRow fsFieldRow fsLastRow">
       
 <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550928" lang="en">
 <fieldset id="label47550928">
 <legend class="fsLabel fsLabelVertical"><span>Caffeine Use</span></legend>
 <div class="fieldset-content">

        <label class="fsOptionLabel horizontal" for="caffeineuse_1"><input type="radio" id="caffeineuse_1" name="caffeineuse" value="No" class="fsField horizontal" />No</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="caffeineuse_2"><input type="radio" id="caffeineuse_2" name="caffeineuse" value="Daily" class="fsField horizontal" />Daily</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="caffeineuse_3"><input type="radio" id="caffeineuse_3" name="caffeineuse" value="Weekly" class="fsField horizontal" />Weekly</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="caffeineuse_4"><input type="radio" id="caffeineuse_4" name="caffeineuse" value="Less" class="fsField horizontal" />Less</label>
                
            
                
        <label class="fsOptionLabel horizontal" for="caffeineuse_5"><input type="radio" id="caffeineuse_5" name="caffeineuse" value="Former User" class="fsField horizontal" />Former User</label>

  </div></fieldset>
    
            </div>

 </div>
                                
 <div id="fsRow2534568-29" class="fsRow fsFieldRow fsLastRow">
   
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550929" lang="en">
                             <fieldset id="label47550929">

                        <legend class="fsLabel fsLabelVertical"><span>Are you currently taking supplements or prescription medication?</span></legend>
                        <div class="fieldset-content">
   
        <label class="fsOptionLabel horizontal" for="field47550929_1"><input type="radio" id="field47550929_1" name="prescriptionmedication" value="Yes, I am." class="fsField horizontal" />Yes, I am.</label>
                
      
        <label class="fsOptionLabel horizontal" for="field47550929_2"><input type="radio" id="field47550929_2" name="prescriptionmedication" value="I do not take any medications." class="fsField horizontal" />I do not take any medications.</label>

     </div></fieldset>
     
            </div>

 </div>
                
 <div id="fsRow2534568-30" class="fsRow fsFieldRow fsLastRow">
        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell47550931" lang="en">
  <fieldset id="label47550931">

    <legend class="fsLabel fsLabelVertical"><span>Do you suffer from any known allergies?</span></legend>
    <div class="fieldset-content">

 <label class="fsOptionLabel horizontal" for="field47550931_1"><input type="radio" id="field47550931_1" name="allergies" value="Yes" class="fsField horizontal" />Yes</label>
   
 <label class="fsOptionLabel horizontal" for="field47550931_2"><input type="radio" id="field47550931_2" name="allergies" value="No" class="fsField horizontal" />No</label>

 </div></fieldset>
 
 </div>

      </div>
                                           
    <div id="fsRow2534568-31" class="fsRow fsFieldRow fsLastRow fsHidden">

       
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsHidden fsSpan100" id="fsCell47550932" lang="en">
       <fieldset id="label47550932">

                        <legend class="fsLabel fsLabelVertical"><span>What causes you allergic reactions?</span></legend>
                        <div class="fieldset-content">

                    <label class="fsOptionLabel vertical" for="field47550932_1"><input type="checkbox" id="field47550932_1" name="field47550932[]" value="Food" class="fsField vertical" disabled="disabled" />Food</label>
        
                                <label class="fsOptionLabel vertical" for="field47550932_2"><input type="checkbox" id="field47550932_2" name="field47550932[]" value="Pollen" class="fsField vertical" disabled="disabled" />Pollen</label>
        
                                <label class="fsOptionLabel vertical" for="field47550932_3"><input type="checkbox" id="field47550932_3" name="field47550932[]" value="Animals" class="fsField vertical" disabled="disabled" />Animals</label>
        
                                <label class="fsOptionLabel vertical" for="field47550932_4"><input type="checkbox" id="field47550932_4" name="field47550932[]" value="Medication" class="fsField vertical" disabled="disabled" />Medication</label>
	<div class="vertical fs-clear">
    
	    <label class="fsOptionLabel vertical" style="margin-right: 5px;" for="field47550932_other"><input type="checkbox" id="field47550932_other" name="field47550932[]" value="Other" class="fsField" disabled="disabled" />Other:</label>
	    
	    <input type="text" id="field47550932_othervalue" name="field47550932_other" size="15" class="fsOtherField"	    /><label class="hidden" for="field47550932_othervalue">Other Value</label>

    </div>

 </div></fieldset>
    
     </div>

 </div>
               
  </div>
  
</div>

<button id="fsSubmitButton2534568" class="fsSubmitButton" style="display: block;" type="submit" name="submit">Submit</button>

</form>
   
  </body>

}
</html>
