
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Repository</title>
<style type="text/css">

body {
	display: block;
	float: left;
	margin: 20px;
	font-family:Verdana,sans-serif;
	font-size: 12px;
	line-height:18px; 
	color:#cccccc;
	-webkit-text-size-adjust: none;
}

a { 
	text-decoration: none; 
	display: inline-block; 
}

a:link, a:active, a:visited { 
	color: #000000; 
}

a:hover { 
	color: #5d5d5d; 
}

td,th {
	color: #000000;
	padding-left: 15px;
}

.container { 
	float: left; 
	display: block; 
}

.header { float: left;
	display: block;
	clear: both;
	margin-bottom: 25px;
	color: #000000;
	font-size: 125%;
}

.row {
	float: left;
	display: block;
	clear: both;
	margin-bottom: 5px;
}

.item {
	float: left;
	display: block;
}

.icon {
	margin-right: 5px;
	margin-bottom: -5px;
}

.footer {
	float: left;
	display: block;
	clear: both;
	margin-top: 21px;
}

</style>
</head>

<body><div class="container">
<?php

$file_img = '<img class="icon" alt="" src="data:image/png;base64,
	iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAq9JREFU
	WIXll01LG0EYx/+zm9DtElSMEXzJrigtEhA8KUgimiAIAfFr9GIuPfXkqR7bfgjPXnIQPXkTb3oI
	pVSxe5EFhcWuC2ZmZ3pKutlOMmsTW2j/8PDMy+4zv9mdZ3YH+N9FunUYhmHm8/lXAIgQAkIIAECr
	HDfGGHVd9zPnPOwbIJ1Ov6jX642JiYlZSimSmOu6zt7eXnF9ff3twcFBLSmAJmucnJy0LcuafcpM
	WlpbW9vZ2tr61BcAIaTrq0mi1dXVnWq1+vG3AQahYrFY29zcVEI8GwAArKys1DY2NnpCDAwglUq9
	fHx8/B4EgRdtX15erpXL5Q9d71MFPj8/x/HxcUcaxr2maSiXy7lSqfRmd3fXSqfTZvw6QogmhOBP
	BhgeHoZt2+CcQwgBznmHRQbA9vb2+0ql8s73fZ9SCsYYWn5/f7/ked7XJwPMzMxgamoq0V4AAIZh
	ZHRdz7Tams0mKKUghOiy+EoA3/fhOA7CMARjTOo55xgdHVWFkkoJcHFxgaOjI2WgarX6PACLi4sY
	Hx/vmHXUWk9A13Vw/ssa6x/ANE3Ytp14DQwc4PLyEqenp+0MUPloeWxsDKZp9gcQBAFub28B/PwU
	R8u96owxVXg1wMLCAubn5xO9Apk1m83+ADjneHh4aG8oUS9ri/YlkRLg7OwMh4eHiYLFNT09jWw2
	2x/A3NwcKpUKwjBsG+dcWo7XM5mMElIJkMvlMDIy8vfWgOu6aDQaHbOTPQFZ39DQEFKp3kMoAa6v
	r3FycqK6TKp8Pq/8RigBlpaWUCgUOlZ3t0yI1znnymxQAhBCYBgGKKXQNK3DCCFti0sIkSgVpb9k
	orWd/QFJAW5ubhzHca4GNYjneVf39/ffZH09j2aWZb1G5GgWN6D7US1i4u7u7gtjLBjUhP4t/QDS
	2+MEGxY8ZQAAAABJRU5ErkJggg==" />';
$dir_img = '<img class="icon" alt="" src="data:image/png;base64,
	iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAA4BJREFU
	WIXtlr1v5EQYxp8Z29ndsBdxoYgooUEKTSSKoyGKxD9ATUNDgahS0qbKf0GLIiGKk+iiQyDqgNIg
	pCTNSUdCsh8ku/Z8vB8UXlu72XUCyUpQ3CO9a4/Hnuc3r1/PLPBa/7FMdbK1tfXlxsbG1n0PqKqe
	nJw8Pzs7+36pAPv7+zfb29vdoiggInWoan2sdHR0dL23t7euqvxYgLQ6iTH6fr/fvbi4ADODmSEi
	YOYZCFXF2tra2vr6+vu9Xu94aQBFUXhjDKqYVmVcBRFhc3Pz89P	T02+r/iZdXV39EmO8aeqvnXZ
	3d093dnbePT8/BxHVWagyMf06jDEgInS7XbTb7Rloa+1M++	Dg4JvDw8NP/0kGnPceeZ7fC1DJe1
	/OwhhYa+tIkgRJkiBNU6yurr7dmJ5pAOecrwyJGURliDCYKwCBqAKqUC3zZzB5bVZKc2thRZGIQh
	QwSdoxxmaVj5YP08IMVGk77j1F6613kLRsI/ni165Tv6WefvjBs8+efRGq9uCm0Bdff/XxzR+//X
	A7A46IQETIo8UnH72Hi6GvB7pVl3Na2G1mG1li8Op8YF5M4dcA3nsfQkBRFFCbIURBfxSwTKWJwb
	gIiMX1n9W1Osfee1cVW9bqIHLzp/UQMSugQF5EkLu+XAgAlBWdtToglkXjPEgiiiIw0sRinDsmP+
	7NARCRDyEgEmOl1V5aBkQUeWAogJXU4nrY70O1nl0NEGN0zjmMHGO1ky0lA8SC3HNdcllq8Newfz
	l9T12EROSICEESrLYyeHo4AIsikIBuZdEag+th/6oJwIsICCtYyVLEBgCdLEKi5UJTzq40Ei3Nm7
	YGBe4EcDFGeEmQZWlNrxMjYgVLGQ+V84RQ3PSmr80AeO/hqQObWLAoIgsiN8/o3yp3EeQaAJjZEx
	EiMpAaOEczD88x3AHV1DXKA8iPFgOIiFNVsGkhMuY/Q73Ts77pLlAXmgESETFEBEIGT0Ck2aHmt5
	kFPvcQjvMAdmMHIAHAFYAB8EREshACxLbLhWPBYI8thXERQWEkANYADAFoinIxWhERDppB22/iEY
	XeKBHFoN/3bvDqJYBs4sspAAHgB4PBz4e/Xj43nR+fnB2b5j8CD5GqqlC8+v2n78iPzgH4iW+9Y1
	sAbwDoAmhPES5LAiBOjEeTmAGoZFEWSLKg7zFSlEXHlfFr/W/0N4mIoDxynPvxAAAAAElFTkSuQm
	CC" />';
$up_img = '<img class="icon" alt="" src="data:image/png;base64,
	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" />';

function human_filesize($bytes, $decimals = 2) {
	$sz = array('B','kB','MB','GB','TB','PB'); // 'BKMGTP';
	$factor = floor((strlen($bytes) - 1) / 3);
	return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . @$sz[$factor];
}

$path = '.';
$header = '<div class="header">Index of: /' . substr(realpath($path),strpos(realpath($path),'repository')) . '</div>';
$dirs = glob("*", GLOB_ONLYDIR);
$files = array_filter(glob("*"), 'is_file');
foreach ($files as $file) {
	if (substr(strrchr($file, "."), 1) != "php") {
		$filterred_files[] = $file;
	}
}

$item_list = array(array());
if(basename(realpath($path)) != 'repository') { 
	$item_list[] = array(
                        '<a href="..">' . $up_img . '</a>',
                        '<a href="..">..</a>',
                        '&nbsp', 
                        '&nbsp'
        );
}
foreach($dirs as $item) {
	$row = array(
			'<a href="' . $item . '">' . $dir_img . '</a>',
			'<a href="' . $item . '">' . $item . '</a>',
			date("Y-m-d H:i:s", filectime($item)),
			'---'
	 );
	$item_list[] = $row;
}
foreach($filterred_files as $item) {
	$row = array(
			'<a download="" href="' . $item . '">' . $file_img . '</a>',
			'<a download="" href="' . $item . '">' . $item . '</a>',
			date("Y-m-d H:i:s", filectime($item)),
			human_filesize(filesize($item))
			);
	$item_list[] = $row;
}

$table_header = array('&nbsp', 'Name', 'Last modified', 'Size');
$out = '';
$out .= '<div><table>';
$out .= '<tr>';
foreach($table_header as $subelement) {
	$out .= '<th>' . $subelement . '</th>';
}
$out .= '</tr>';
foreach($item_list as $element) {
	$out .= '<tr>';
	foreach($element as $subelement) {
		$out .= '<td>' . $subelement . '</td>';
	}
	$out .= '</tr>';
}
$out .= '</table></div>';

echo $header;
echo $out;

?>


</div>
</body>
</html>
