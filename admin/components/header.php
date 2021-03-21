<?php
session_start();
if (!isset($_SESSION['username'])){
	header("location: index");
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index");
}
?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:url" content="https://voteonline.com.ng/"/>
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Vote Online&trade; :: Nigeria's First Online Voting Platform" />
	<meta property="og:description" content="Create an online contest with Vote Online, Own and run an online photo contest for your Peagents, Award Shows, Club Elections etc, for free or paid with our easy to use online voting platform."/>
    <meta name="keywords" content="ThankGodOkoro.codes,ThankGod Okoro,Vote Online,VoteOnline,online voting,beauty pageant,software,voting,election,online contest,contest,award shows,award,shows,online election,digital voting,event ticket management,event voting,fashion award,headies awards,amvca,Africa Magic Viewers' Choice Awards,branding">
    <meta property="og:image" content="https://i.imgur.com/3Vygtkm.png"/>
    <meta name="author" content="ThankGod Okoro is a Software developer/programmer, Web + App Developer, UI/UX Designer, Brand Strategist & Product/Graphic Designer.">
    <!-- Favicon -->
    <link rel=icon href="https://i.imgur.com/kVguEsz.png" type=image/png>

	<title>Dashboard :: Vote Online&trade;</title>

	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="js/settings.js"></script>
	</head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>