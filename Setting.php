<?php

$error = array(
	"Host: v4.myipstack.com",
	"Connection: keep-alive",
	"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-G532G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36",
	"Origin: https://hide.me",
	"Referer: https://hide.me/",
	"Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"
	);

$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://v4.myipstack.com/");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $error);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$not_found = curl_exec($ch);

$ex_versi = "1.0";
$ex_server = "online";

$auto = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${ex_server}
${kuning}>${putih} versi ${ijo}${ex_versi}${putih} (${ijo}tinggal pake gak usah banyak bct${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$system_auto=true;

$lite_versi = "1.0";
$lite_server = "online";

$litecoin = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${lite_server}
${kuning}>${putih} versi ${ijo}${lite_versi}${putih} (${ijo}free litecoin${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$system_litecoin=true;

$faucet_versi = "1.0";
$faucet_server = "online";

$faucet = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${faucet_server}
${kuning}>${putih} versi ${ijo}${faucet_versi}${putih} (${ijo}faucet-dogecoin.xyz${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";

$system_faucet=true;

$beat_versi = "2.0";
$beat_server = "online";

$buzzbeat = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${beat_server}
${kuning}>${putih} versi ${ijo}${beat_versi}${putih} (${ijo}buzzbeat${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";

$system_beat=true;

$big_versi = "1.0";
$big_server = "online";

$big = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${big_server}
${kuning}>${putih} versi ${ijo}${big_versi}${putih} (${ijo}bigcash${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$system_big=true;

$view_versi = "1.0";
$view_server = "online";

$view = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${view_server}
${kuning}>${putih} versi ${ijo}${view_versi}${putih} (${ijo}gaskeun masih legit${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$view_get=true;

$cash_versi = "1.0";
$cash_server = "online";

$_error_ = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${cash_server}
${kuning}>${putih} versi ${ijo}${cash_versi}${putih} (${ijo}cash buddy${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$system_cash=true;

$wheel_versi = "1.0";
$wheel_server = "online";

$wheel = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${wheel_server}
${kuning}>${putih} versi ${ijo}${wheel_versi}${putih} (${ijo}Bitcoin Cash Wheel${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";

$wheel_stat=true;

$buzz_versi = "2.5";
$buzz_server = "online";

$system_error = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${buzz_server}
${kuning}>${putih} versi ${ijo}${buzz_versi}${putih} (${ijo}buzzbreak${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user
${ijo}
> please update script
> link script : https://pastelink.net/2pftl
";

$get_buzz=false;

$buzzbreak = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${buzz_server}
${kuning}>${putih} versi ${ijo}${buzz_versi}${putih} (${ijo}buzzbreak${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$new_bot=true;

$leme_versi = "1.0";
$leme_server = "online";

$leme = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${leme_server}
${kuning}>${putih} versi ${ijo}${leme_versi}${putih} (${ijo}please subscribe${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$get_leme=true;

$dm_versi = "1.0";
$dm_server = "online";

$diamond = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${dm_server}
${kuning}>${putih} versi ${ijo}${dm_versi}${putih} (${ijo}lanjutkan${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$get_diamond=true;

$clip_versi = "1.0";
$clip_server = "online";

$clipclaps = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${clip_server}
${kuning}>${putih} versi ${ijo}${clip_versi}${putih} (${ijo}clipclaps${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$clip_get=true;

$free_versi = "1.0";
$free_server = "online";

$free = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${free_server}
${kuning}>${putih} versi ${ijo}${free_versi}${putih} (${ijo}ndak bisa bhs inggris${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";
$free_get=true;





