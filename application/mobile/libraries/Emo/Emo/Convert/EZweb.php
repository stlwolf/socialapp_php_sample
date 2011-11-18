<?php
require_once(dirname(__FILE__) . "/Core.php");

// {{{ Emo_Convert_EZweb

/**
 * EZweb絵文字コード変換クラス
 */
class Emo_Convert_EZweb extends Emo_Convert_Core
{
	// {{{ properties
	
	/**#@+
	 * @access private
	 */
	
	/**
	 * コード集
	 */
	var $_conv = array(
"E481" => array("docomo"=>"E737", "SoftBank"=>"E252"),
"E482" => array("docomo"=>"E702", "SoftBank"=>"E021"),
"E483" => array("docomo"=>"?", "SoftBank"=>"E020"),
"E52C" => array("docomo"=>"E6E1", "SoftBank"=>"[Q]"),
"E52D" => array("docomo"=>"<", "SoftBank"=>"E23B"),
"E52E" => array("docomo"=>">", "SoftBank"=>"E23A"),
"E52F" => array("docomo"=>"<<", "SoftBank"=>"E23D"),
"E530" => array("docomo"=>">>", "SoftBank"=>"E23C"),
"E531" => array("docomo"=>"■", "SoftBank"=>"E21B"),
"E532" => array("docomo"=>"■", "SoftBank"=>"E21A"),
"E533" => array("docomo"=>"[i]", "SoftBank"=>"[i]"),
"E4C1" => array("docomo"=>"E6CC", "SoftBank"=>"E044"),
"E511" => array("docomo"=>"[ｽﾋﾟｰｶ]", "SoftBank"=>"E141"),
"E579" => array("docomo"=>"E715", "SoftBank"=>"E12F"),
"E486" => array("docomo"=>"E69F", "SoftBank"=>"E04C"),
"E487" => array("docomo"=>"E642", "SoftBank"=>"E13D"),
"E534" => array("docomo"=>"■", "SoftBank"=>"E21B"),
"E535" => array("docomo"=>"■", "SoftBank"=>"E21A"),
"E536" => array("docomo"=>"◆", "SoftBank"=>"E21B"),
"E537" => array("docomo"=>"◆", "SoftBank"=>"E21B"),
"E538" => array("docomo"=>"■", "SoftBank"=>"E21B"),
"E539" => array("docomo"=>"■", "SoftBank"=>"E21A"),
"E53A" => array("docomo"=>"E69C", "SoftBank"=>"E219"),
"E53B" => array("docomo"=>"E69C", "SoftBank"=>"E219"),
"E57A" => array("docomo"=>"E71F", "SoftBank"=>"[腕時計]"),
"E53C" => array("docomo"=>"+", "SoftBank"=>"+"),
"E53D" => array("docomo"=>"-", "SoftBank"=>"-"),
"E53E" => array("docomo"=>"*", "SoftBank"=>"*"),
"E53F" => array("docomo"=>"↑", "SoftBank"=>"E232"),
"E540" => array("docomo"=>"↓", "SoftBank"=>"E233"),
"E541" => array("docomo"=>"E738", "SoftBank"=>"[禁止]"),
"E542" => array("docomo"=>"▼", "SoftBank"=>"▼"),
"E543" => array("docomo"=>"▲", "SoftBank"=>"▲"),
"E544" => array("docomo"=>"▼", "SoftBank"=>"▼"),
"E545" => array("docomo"=>"▲", "SoftBank"=>"▲"),
"E546" => array("docomo"=>"◆", "SoftBank"=>"E21B"),
"E547" => array("docomo"=>"◆", "SoftBank"=>"E21B"),
"E548" => array("docomo"=>"■", "SoftBank"=>"E21B"),
"E549" => array("docomo"=>"■", "SoftBank"=>"E21A"),
"E54A" => array("docomo"=>"E69C", "SoftBank"=>"E219"),
"E54B" => array("docomo"=>"E69C", "SoftBank"=>"E219"),
"E54C" => array("docomo"=>"E697", "SoftBank"=>"E237"),
"E54D" => array("docomo"=>"E696", "SoftBank"=>"E238"),
"E488" => array("docomo"=>"E63E", "SoftBank"=>"E04A"),
"E4BA" => array("docomo"=>"E653", "SoftBank"=>"E016"),
"E594" => array("docomo"=>"E6BA", "SoftBank"=>"E02D"),
"E489" => array("docomo"=>"E69E", "SoftBank"=>"E04C"),
"E512" => array("docomo"=>"E713", "SoftBank"=>"E325"),
"E560" => array("docomo"=>"φ", "SoftBank"=>"φ"),
"E4FA" => array("docomo"=>"E6F0", "SoftBank"=>"E002"),
"E595" => array("docomo"=>"E6EC", "SoftBank"=>"E022"),
"E4C2" => array("docomo"=>"E671", "SoftBank"=>"E044"),
"E513" => array("docomo"=>"E741", "SoftBank"=>"E110"),
"E54E" => array("docomo"=>"E732", "SoftBank"=>"E537"),
"E54F" => array("docomo"=>"×", "SoftBank"=>"E333"),
"E561" => array("docomo"=>"E689", "SoftBank"=>"E301"),
"E57B" => array("docomo"=>"E71C", "SoftBank"=>"[砂時計]"),
"E47C" => array("docomo"=>"E71C", "SoftBank"=>"[砂時計]"),
"E562" => array("docomo"=>"[ﾌﾛｯﾋﾟｰ]", "SoftBank"=>"E316"),
"E48A" => array("docomo"=>"[雪結晶]", "SoftBank"=>"[雪結晶]"),
"E550" => array("docomo"=>"×", "SoftBank"=>"E333"),
"E551" => array("docomo"=>"×", "SoftBank"=>"E333"),
"E552" => array("docomo"=>"→", "SoftBank"=>"E234"),
"E553" => array("docomo"=>"←", "SoftBank"=>"E235"),
"E4C3" => array("docomo"=>"E672", "SoftBank"=>"E047"),
"E554" => array("docomo"=>"÷", "SoftBank"=>"÷"),
"E563" => array("docomo"=>"[ｶﾚﾝﾀﾞｰ]", "SoftBank"=>"[ｶﾚﾝﾀﾞｰ]"),
"E4FB" => array("docomo"=>"E6F0", "SoftBank"=>"E056"),
"E48B" => array("docomo"=>"☆", "SoftBank"=>"E32F"),
"E555" => array("docomo"=>"E678", "SoftBank"=>"E236"),
"E556" => array("docomo"=>"E6A5", "SoftBank"=>"E239"),
"E514" => array("docomo"=>"E71B", "SoftBank"=>"E034"),
"E557" => array("docomo"=>"[ﾁｪｯｸﾏｰｸ]", "SoftBank"=>"[ﾁｪｯｸﾏｰｸ]"),
"E4DF" => array("docomo"=>"E6A1", "SoftBank"=>"E052"),
"E468" => array("docomo"=>"☆彡", "SoftBank"=>"☆彡"),
"E46C" => array("docomo"=>"E6FA", "SoftBank"=>"E32E"),
"E476" => array("docomo"=>"E6FB", "SoftBank"=>"E10F"),
"E4E0" => array("docomo"=>"E74F", "SoftBank"=>"E523"),
"E58F" => array("docomo"=>"[ﾌｫﾙﾀﾞ]", "SoftBank"=>"[ﾌｫﾙﾀﾞ]"),
"E4FC" => array("docomo"=>"E6F0", "SoftBank"=>"E001"),
"E558" => array("docomo"=>"E731", "SoftBank"=>"E24E"),
"E559" => array("docomo"=>"E736", "SoftBank"=>"E24F"),
"E49C" => array("docomo"=>"E682", "SoftBank"=>"E323"),
"E590" => array("docomo"=>"[ﾌｫﾙﾀﾞ]", "SoftBank"=>"[ﾌｫﾙﾀﾞ]"),
"E596" => array("docomo"=>"E687", "SoftBank"=>"E009"),
"E4FD" => array("docomo"=>"[ﾌｷﾀﾞｼ]", "SoftBank"=>"[ﾌｷﾀﾞｼ]"),
"E57C" => array("docomo"=>"[ｶｰﾄﾞ]", "SoftBank"=>"[ｶｰﾄﾞ]"),
"E55A" => array("docomo"=>"▲", "SoftBank"=>"▲"),
"E55B" => array("docomo"=>"▼", "SoftBank"=>"▼"),
"E573" => array("docomo"=>"[USA]", "SoftBank"=>"E50C"),
"E49D" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E564" => array("docomo"=>"E689", "SoftBank"=>"E301"),
"E597" => array("docomo"=>"E670", "SoftBank"=>"E045"),
"E515" => array("docomo"=>"E681", "SoftBank"=>"E008"),
"E48C" => array("docomo"=>"E640", "SoftBank"=>"E04B"),
"E4BB" => array("docomo"=>"[ﾌｯﾄﾎﾞｰﾙ]", "SoftBank"=>"E42B"),
"E565" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E484" => array("docomo"=>"E72F", "SoftBank"=>"E137"),
"E46A" => array("docomo"=>"E66D", "SoftBank"=>"E14E"),
"E566" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E567" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E568" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E569" => array("docomo"=>"E689", "SoftBank"=>"E301"),
"E516" => array("docomo"=>"E675", "SoftBank"=>"E313"),
"E56A" => array("docomo"=>"[ｶﾚﾝﾀﾞｰ]", "SoftBank"=>"[ｶﾚﾝﾀﾞｰ]"),
"E49E" => array("docomo"=>"E67E", "SoftBank"=>"E125"),
"E48D" => array("docomo"=>"E63F", "SoftBank"=>"E049"),
"E521" => array("docomo"=>"E6D3", "SoftBank"=>"E103"),
"E57D" => array("docomo"=>"E6D6", "SoftBank"=>"￥"),
"E517" => array("docomo"=>"E677", "SoftBank"=>"E03D"),
"E57E" => array("docomo"=>"E677", "SoftBank"=>"E03D"),
"E4AB" => array("docomo"=>"E663", "SoftBank"=>"E036"),
"E4E4" => array("docomo"=>"E743", "SoftBank"=>"E304"),
"E57F" => array("docomo"=>"[包丁]", "SoftBank"=>"[包丁]"),
"E580" => array("docomo"=>"[ﾋﾞﾃﾞｵ]", "SoftBank"=>"E129"),
"E4FE" => array("docomo"=>"E69A", "SoftBank"=>"[ﾒｶﾞﾈ]"),
"E55C" => array("docomo"=>"└→", "SoftBank"=>"└→"),
"E55D" => array("docomo"=>"E6DA", "SoftBank"=>"←┘"),
"E518" => array("docomo"=>"E6DC", "SoftBank"=>"E114"),
"E519" => array("docomo"=>"E6D9", "SoftBank"=>"E03F"),
"E56B" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E49F" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E581" => array("docomo"=>"[ﾈｼﾞ]", "SoftBank"=>"[ﾈｼﾞ]"),
"E51A" => array("docomo"=>"E674", "SoftBank"=>"E13E"),
"E4B1" => array("docomo"=>"E65E", "SoftBank"=>"E01B"),
"E582" => array("docomo"=>"[ﾌﾛｯﾋﾟｰ]", "SoftBank"=>"E316"),
"E574" => array("docomo"=>"[ｸﾞﾗﾌ]", "SoftBank"=>"E14A"),
"E575" => array("docomo"=>"[ｸﾞﾗﾌ]", "SoftBank"=>"E14A"),
"E51B" => array("docomo"=>"E665", "SoftBank"=>"E101"),
"E583" => array("docomo"=>"E6FB", "SoftBank"=>"[懐中電灯]"),
"E56C" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E55E" => array("docomo"=>"[ﾁｪｯｸﾏｰｸ]", "SoftBank"=>"[ﾁｪｯｸﾏｰｸ]"),
"E4CE" => array("docomo"=>"E747", "SoftBank"=>"E118"),
"E4E1" => array("docomo"=>"E6A1", "SoftBank"=>"E052"),
"E584" => array("docomo"=>"[電池]", "SoftBank"=>"[電池]"),
"E55F" => array("docomo"=>"E70A", "SoftBank"=>"[ｽｸﾛｰﾙ]"),
"E56D" => array("docomo"=>"[画びょう]", "SoftBank"=>"[画びょう]"),
"E51C" => array("docomo"=>"E6D9", "SoftBank"=>"E144"),
"E585" => array("docomo"=>"E715", "SoftBank"=>"E12F"),
"E4FF" => array("docomo"=>"←", "SoftBank"=>"E230"),
"E500" => array("docomo"=>"→", "SoftBank"=>"E231"),
"E56E" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E4A0" => array("docomo"=>"E730", "SoftBank"=>"[ｸﾘｯﾌﾟ]"),
"E4CF" => array("docomo"=>"E685", "SoftBank"=>"E112"),
"E51D" => array("docomo"=>"[名札]", "SoftBank"=>"[名札]"),
"E4AC" => array("docomo"=>"E66F", "SoftBank"=>"E043"),
"E56F" => array("docomo"=>"E683", "SoftBank"=>"E148"),
"E4B2" => array("docomo"=>"[ﾄﾗｯｸ]", "SoftBank"=>"E42F"),
"E4A1" => array("docomo"=>"E719", "SoftBank"=>"E301"),
"E586" => array("docomo"=>"[PDC]", "SoftBank"=>"[PDC]"),
"E591" => array("docomo"=>"E6CF", "SoftBank"=>"E103"),
"E587" => array("docomo"=>"E718", "SoftBank"=>"[ﾚﾝﾁ]"),
"E592" => array("docomo"=>"[送信BOX]", "SoftBank"=>"[送信BOX]"),
"E593" => array("docomo"=>"[受信BOX]", "SoftBank"=>"[受信BOX]"),
"E51E" => array("docomo"=>"E687", "SoftBank"=>"E009"),
"E4AD" => array("docomo"=>"E664", "SoftBank"=>"E038"),
"E570" => array("docomo"=>"[定規]", "SoftBank"=>"[定規]"),
"E4A2" => array("docomo"=>"[三角定規]", "SoftBank"=>"[三角定規]"),
"E576" => array("docomo"=>"[ｸﾞﾗﾌ]", "SoftBank"=>"[ｸﾞﾗﾌ]"),
"E4C4" => array("docomo"=>"[肉]", "SoftBank"=>"[肉]"),
"E588" => array("docomo"=>"E688", "SoftBank"=>"E00A"),
"E589" => array("docomo"=>"[ｺﾝｾﾝﾄ]", "SoftBank"=>"[ｺﾝｾﾝﾄ]"),
"E501" => array("docomo"=>"[家族]", "SoftBank"=>"[家族]"),
"E58A" => array("docomo"=>"[ﾘﾝｸ]", "SoftBank"=>"[ﾘﾝｸ]"),
"E51F" => array("docomo"=>"E685", "SoftBank"=>"E112"),
"E520" => array("docomo"=>"E6D0", "SoftBank"=>"E00B"),
"E48E" => array("docomo"=>"E63E|E63F", "SoftBank"=>"E04A|E049"),
"E4B3" => array("docomo"=>"E662", "SoftBank"=>"E01D"),
"E4B4" => array("docomo"=>"E6A3", "SoftBank"=>"E01C"),
"E4C8" => array("docomo"=>"[ｻｲｺﾛ]", "SoftBank"=>"[ｻｲｺﾛ]"),
"E58B" => array("docomo"=>"[新聞]", "SoftBank"=>"[新聞]"),
"E4B5" => array("docomo"=>"E65B", "SoftBank"=>"E01E"),
"E58C" => array("docomo"=>" ", "SoftBank"=>" "),
"E58D" => array("docomo"=>"[]", "SoftBank"=>"[]"),
"E58E" => array("docomo"=>"[]", "SoftBank"=>"[]"),
"E47D" => array("docomo"=>"E67F", "SoftBank"=>"E30E"),
"E47E" => array("docomo"=>"E680", "SoftBank"=>"E208"),
"E47F" => array("docomo"=>"E69B", "SoftBank"=>"E20A"),
"E480" => array("docomo"=>"[若葉ﾏｰｸ]", "SoftBank"=>"E209"),
"E522" => array("docomo"=>"E6E2", "SoftBank"=>"E21C"),
"E523" => array("docomo"=>"E6E3", "SoftBank"=>"E21D"),
"E524" => array("docomo"=>"E6E4", "SoftBank"=>"E21E"),
"E525" => array("docomo"=>"E6E5", "SoftBank"=>"E21F"),
"E526" => array("docomo"=>"E6E6", "SoftBank"=>"E220"),
"E527" => array("docomo"=>"E6E7", "SoftBank"=>"E221"),
"E528" => array("docomo"=>"E6E8", "SoftBank"=>"E222"),
"E529" => array("docomo"=>"E6E9", "SoftBank"=>"E223"),
"E52A" => array("docomo"=>"E6EA", "SoftBank"=>"E224"),
"E52B" => array("docomo"=>"[10]", "SoftBank"=>"[10]"),
"E469" => array("docomo"=>"E643", "SoftBank"=>"E443"),
"E485" => array("docomo"=>"E641", "SoftBank"=>"E048"),
"E48F" => array("docomo"=>"E646", "SoftBank"=>"E23F"),
"E490" => array("docomo"=>"E647", "SoftBank"=>"E240"),
"E491" => array("docomo"=>"E648", "SoftBank"=>"E241"),
"E492" => array("docomo"=>"E649", "SoftBank"=>"E242"),
"E493" => array("docomo"=>"E64A", "SoftBank"=>"E243"),
"E494" => array("docomo"=>"E64B", "SoftBank"=>"E244"),
"E495" => array("docomo"=>"E64C", "SoftBank"=>"E245"),
"E496" => array("docomo"=>"E64D", "SoftBank"=>"E246"),
"E497" => array("docomo"=>"E64E", "SoftBank"=>"E247"),
"E498" => array("docomo"=>"E64F", "SoftBank"=>"E248"),
"E499" => array("docomo"=>"E650", "SoftBank"=>"E249"),
"E49A" => array("docomo"=>"E651", "SoftBank"=>"E24A"),
"E49B" => array("docomo"=>"[蛇使座]", "SoftBank"=>"E24B"),
"E4A3" => array("docomo"=>"E668", "SoftBank"=>"E154"),
"E4A4" => array("docomo"=>"E66A", "SoftBank"=>"E156"),
"E4A5" => array("docomo"=>"E66E", "SoftBank"=>"E151"),
"E4A6" => array("docomo"=>"E66C", "SoftBank"=>"E14F"),
"E4A7" => array("docomo"=>"[ﾊﾞｽ停]", "SoftBank"=>"E150"),
"E4A8" => array("docomo"=>"[ｱﾝﾃﾅ]", "SoftBank"=>"E14B"),
"E4A9" => array("docomo"=>"E661", "SoftBank"=>"E202"),
"E4AA" => array("docomo"=>"E667", "SoftBank"=>"E14D"),
"E571" => array("docomo"=>"E66B", "SoftBank"=>"E03A"),
"E572" => array("docomo"=>"[地図]", "SoftBank"=>"[地図]"),
"E4AE" => array("docomo"=>"E71D", "SoftBank"=>"E136"),
"E4AF" => array("docomo"=>"E660", "SoftBank"=>"E159"),
"E4B0" => array("docomo"=>"E65D", "SoftBank"=>"E01F"),
"E46B" => array("docomo"=>"E733", "SoftBank"=>"E115"),
"E4B6" => array("docomo"=>"E656", "SoftBank"=>"E018"),
"E4B7" => array("docomo"=>"E655", "SoftBank"=>"E015"),
"E4B8" => array("docomo"=>"E712", "SoftBank"=>"[ｽﾉﾎﾞ]"),
"E4B9" => array("docomo"=>"E659", "SoftBank"=>"E132"),
"E46D" => array("docomo"=>"[観覧車]", "SoftBank"=>"E124"),
"E4BC" => array("docomo"=>"E6F7", "SoftBank"=>"E123"),
"E4BD" => array("docomo"=>"E74B", "SoftBank"=>"E30B"),
"E4BE" => array("docomo"=>"E6AC", "SoftBank"=>"E324"),
"E4BF" => array("docomo"=>"E6B3", "SoftBank"=>"E44B"),
"E4C0" => array("docomo"=>"[東京ﾀﾜｰ]", "SoftBank"=>"E509"),
"E46E" => array("docomo"=>"[777]", "SoftBank"=>"E133"),
"E46F" => array("docomo"=>"[ｵﾒﾃﾞﾄｳ]", "SoftBank"=>"[ｵﾒﾃﾞﾄｳ]"),
"E4C5" => array("docomo"=>"[的中]", "SoftBank"=>"E130"),
"E4C6" => array("docomo"=>"E68B", "SoftBank"=>"[ｹﾞｰﾑ]"),
"E4C7" => array("docomo"=>"E715", "SoftBank"=>"E12F"),
"E4C9" => array("docomo"=>"E6A4", "SoftBank"=>"E033"),
"E4CA" => array("docomo"=>"E748", "SoftBank"=>"E030"),
"E4CB" => array("docomo"=>"[お化け]", "SoftBank"=>"E11B"),
"E4CC" => array("docomo"=>"[日の丸]", "SoftBank"=>"E50B"),
"E4CD" => array("docomo"=>"[ｽｲｶ]", "SoftBank"=>"E348"),
"E4D0" => array("docomo"=>"E74A", "SoftBank"=>"E046"),
"E4D1" => array("docomo"=>"[ﾌﾗｲﾊﾟﾝ]", "SoftBank"=>"E147"),
"E4D2" => array("docomo"=>"E742", "SoftBank"=>"[さくらんぼ]"),
"E4D3" => array("docomo"=>"E751", "SoftBank"=>"E019"),
"E4D4" => array("docomo"=>"[ｲﾁｺﾞ]", "SoftBank"=>"E347"),
"E4D5" => array("docomo"=>"E749", "SoftBank"=>"E342"),
"E4D6" => array("docomo"=>"E673", "SoftBank"=>"E120"),
"E470" => array("docomo"=>"[ｸｼﾞﾗ]", "SoftBank"=>"E054"),
"E4D7" => array("docomo"=>"[ｳｻｷﾞ]", "SoftBank"=>"E52C"),
"E4D8" => array("docomo"=>"E6CC", "SoftBank"=>"E01A"),
"E4D9" => array("docomo"=>"[ｻﾙ]", "SoftBank"=>"E109"),
"E4DA" => array("docomo"=>"[ｶｴﾙ]", "SoftBank"=>"E531"),
"E4DB" => array("docomo"=>"E6A2", "SoftBank"=>"E04F"),
"E4DC" => array("docomo"=>"E750", "SoftBank"=>"E055"),
"E4DD" => array("docomo"=>"[ｱﾘ]", "SoftBank"=>"[ｱﾘ]"),
"E4DE" => array("docomo"=>"E6CC", "SoftBank"=>"E10B"),
"E4E2" => array("docomo"=>"[ﾋﾞｰﾁ]", "SoftBank"=>"E307"),
"E4E3" => array("docomo"=>"[ひまわり]", "SoftBank"=>"E305"),
"E471" => array("docomo"=>"E6F0", "SoftBank"=>"E057"),
"E472" => array("docomo"=>"E6F1", "SoftBank"=>"E059"),
"E473" => array("docomo"=>"E72D", "SoftBank"=>"E411"),
"E474" => array("docomo"=>"E72B", "SoftBank"=>"E406"),
"E475" => array("docomo"=>"E701", "SoftBank"=>"E13C"),
"E4E5" => array("docomo"=>"E6FC", "SoftBank"=>"E334"),
"E4E6" => array("docomo"=>"E707", "SoftBank"=>"E331"),
"E4E7" => array("docomo"=>"E728", "SoftBank"=>"E105"),
"E477" => array("docomo"=>"E6EE", "SoftBank"=>"E023"),
"E478" => array("docomo"=>"E6EF", "SoftBank"=>"E327"),
"E479" => array("docomo"=>"E6FA", "SoftBank"=>"E32E"),
"E47A" => array("docomo"=>"E6FE", "SoftBank"=>"E311"),
"E47B" => array("docomo"=>"[炎]", "SoftBank"=>"E11D"),
"E4E8" => array("docomo"=>"[SOS]", "SoftBank"=>"[SOS]"),
"E4E9" => array("docomo"=>"[力こぶ]", "SoftBank"=>"E14C"),
"E4EA" => array("docomo"=>"E6EC", "SoftBank"=>"E329"),
"E4EB" => array("docomo"=>"E6F9", "SoftBank"=>"E003"),
"E4EC" => array("docomo"=>"[宇宙人]", "SoftBank"=>"E10C"),
"E4ED" => array("docomo"=>"E643", "SoftBank"=>"[なると]"),
"E4EE" => array("docomo"=>"E698", "SoftBank"=>"E536"),
"E4EF" => array("docomo"=>"[ｱｸﾏ]", "SoftBank"=>"E11A"),
"E4F0" => array("docomo"=>"[花丸]", "SoftBank"=>"[花丸]"),
"E4F1" => array("docomo"=>"E734", "SoftBank"=>"E315"),
"E4F2" => array("docomo"=>"[100点]", "SoftBank"=>"[100点]"),
"E4F3" => array("docomo"=>"E6FD", "SoftBank"=>"E00D"),
"E4F4" => array("docomo"=>"E708", "SoftBank"=>"E330"),
"E4F5" => array("docomo"=>"[ｳﾝﾁ]", "SoftBank"=>"E05A"),
"E4F6" => array("docomo"=>"[人差し指]", "SoftBank"=>"E00F"),
"E4F7" => array("docomo"=>"[得]", "SoftBank"=>"E226"),
"E4F8" => array("docomo"=>"[ﾄﾞｸﾛ]", "SoftBank"=>"E11C"),
"E4F9" => array("docomo"=>"E727", "SoftBank"=>"E00E"),
"E502" => array("docomo"=>"E68A", "SoftBank"=>"E12A"),
"E503" => array("docomo"=>"E676", "SoftBank"=>"E03C"),
"E504" => array("docomo"=>"E70F", "SoftBank"=>"[財布]"),
"E505" => array("docomo"=>"E6FF", "SoftBank"=>"E326"),
"E506" => array("docomo"=>"[ｷﾞﾀｰ]", "SoftBank"=>"E041"),
"E507" => array("docomo"=>"[ﾊﾞｲｵﾘﾝ]", "SoftBank"=>"[ﾊﾞｲｵﾘﾝ]"),
"E508" => array("docomo"=>"E67A", "SoftBank"=>"E30A"),
"E509" => array("docomo"=>"E710", "SoftBank"=>"E31C"),
"E50A" => array("docomo"=>"[ﾋﾟｽﾄﾙ]", "SoftBank"=>"E113"),
"E50B" => array("docomo"=>"[ｴｽﾃ]", "SoftBank"=>"E31E"),
"E577" => array("docomo"=>"[EZ]", "SoftBank"=>"[EZ]"),
"E578" => array("docomo"=>"E6D7", "SoftBank"=>"[FREE]"),
"E50C" => array("docomo"=>"E68C", "SoftBank"=>"E126"),
"E50D" => array("docomo"=>"E70E", "SoftBank"=>"E006"),
"E50E" => array("docomo"=>"[UFO]", "SoftBank"=>"E10C"),
"E50F" => array("docomo"=>"[UP!]", "SoftBank"=>"E213"),
"E510" => array("docomo"=>"[注射]", "SoftBank"=>"E13B"),
"E598" => array("docomo"=>"E644", "SoftBank"=>"[霧]"),
"E599" => array("docomo"=>"E654", "SoftBank"=>"E014"),
"E59A" => array("docomo"=>"E658", "SoftBank"=>"E42A"),
"E59B" => array("docomo"=>"E65A", "SoftBank"=>"[ﾎﾟｹﾍﾞﾙ]"),
"E59C" => array("docomo"=>"E67B", "SoftBank"=>"E502"),
"E59D" => array("docomo"=>"[演劇]", "SoftBank"=>"E503"),
"E59E" => array("docomo"=>"E67D", "SoftBank"=>"[ｲﾍﾞﾝﾄ]"),
"E59F" => array("docomo"=>"E684", "SoftBank"=>"E314"),
"E5A0" => array("docomo"=>"E686", "SoftBank"=>"E34B"),
"E5A1" => array("docomo"=>"E68E", "SoftBank"=>"E20E"),
"E5A2" => array("docomo"=>"E68F", "SoftBank"=>"E20D"),
"E5A3" => array("docomo"=>"E690", "SoftBank"=>"E20F"),
"E5A4" => array("docomo"=>"E691", "SoftBank"=>"E419"),
"E5A5" => array("docomo"=>"E692", "SoftBank"=>"E41B"),
"E5A6" => array("docomo"=>"E694", "SoftBank"=>"E011"),
"E5A7" => array("docomo"=>"E695", "SoftBank"=>"E012"),
"E5A8" => array("docomo"=>"E69C", "SoftBank"=>"●"),
"E5A9" => array("docomo"=>"E69D", "SoftBank"=>"E04C"),
"E5AA" => array("docomo"=>"E69E", "SoftBank"=>"E04C"),
"E5AB" => array("docomo"=>"E6DB", "SoftBank"=>"[CL]"),
"E5AC" => array("docomo"=>"E6EB", "SoftBank"=>"E225"),
"E5AD" => array("docomo"=>"E70B", "SoftBank"=>"E24D"),
"E5AE" => array("docomo"=>"E6F4", "SoftBank"=>"E406"),
"E5AF" => array("docomo"=>"E6ED", "SoftBank"=>"E327"),
"E5B0" => array("docomo"=>"E705", "SoftBank"=>"[ﾄﾞﾝｯ]"),
"E5B1" => array("docomo"=>"E706", "SoftBank"=>"E331"),
"E5B2" => array("docomo"=>"[ezplus]", "SoftBank"=>"[ezplus]"),
"E5B3" => array("docomo"=>"[地球]", "SoftBank"=>"[地球]"),
"E5B4" => array("docomo"=>"E74C", "SoftBank"=>"E340"),
"E5B5" => array("docomo"=>"E6DD", "SoftBank"=>"E212"),
"E5B6" => array("docomo"=>"E70E", "SoftBank"=>"E006"),
"E5B7" => array("docomo"=>"E699", "SoftBank"=>"E007"),
"E5B8" => array("docomo"=>"E716", "SoftBank"=>"E00C"),
"E5B9" => array("docomo"=>"[ﾗｼﾞｵ]", "SoftBank"=>"E128"),
"E5BA" => array("docomo"=>"[ﾊﾞﾗ]", "SoftBank"=>"E032"),
"E5BB" => array("docomo"=>"[教会]", "SoftBank"=>"E037"),
"E5BC" => array("docomo"=>"E65C", "SoftBank"=>"E434"),
"E5BD" => array("docomo"=>"E740", "SoftBank"=>"E03B"),
"E5BE" => array("docomo"=>"E6F6", "SoftBank"=>"E03E"),
"E5BF" => array("docomo"=>"[天使]", "SoftBank"=>"E04E"),
"E5C0" => array("docomo"=>"[ﾄﾗ]", "SoftBank"=>"E050"),
"E5C1" => array("docomo"=>"[ｸﾏ]", "SoftBank"=>"E051"),
"E5C2" => array("docomo"=>"[ﾈｽﾞﾐ]", "SoftBank"=>"E053"),
"E5C3" => array("docomo"=>"E729", "SoftBank"=>"E405"),
"E5C4" => array("docomo"=>"E726", "SoftBank"=>"E106"),
"E5C5" => array("docomo"=>"E6CC", "SoftBank"=>"E410"),
"E5C6" => array("docomo"=>"E723", "SoftBank"=>"E108"),
"E5C7" => array("docomo"=>"[ﾀｺ]", "SoftBank"=>"E10A"),
"E5C8" => array("docomo"=>"[ﾛｹｯﾄ]", "SoftBank"=>"E10D"),
"E5C9" => array("docomo"=>"E71A", "SoftBank"=>"E10E"),
"E5CA" => array("docomo"=>"E6F9", "SoftBank"=>"E111"),
"E5CB" => array("docomo"=>"[ﾊﾝﾏｰ]", "SoftBank"=>"E116"),
"E5CC" => array("docomo"=>"[花火]", "SoftBank"=>"E117"),
"E5CD" => array("docomo"=>"E747", "SoftBank"=>"E119"),
"E5CE" => array("docomo"=>"E682", "SoftBank"=>"E11E"),
"E5CF" => array("docomo"=>"[噴水]", "SoftBank"=>"E121"),
"E5D0" => array("docomo"=>"[ｷｬﾝﾌﾟ]", "SoftBank"=>"E122"),
"E5D1" => array("docomo"=>"[麻雀]", "SoftBank"=>"E12D"),
"E5D2" => array("docomo"=>"[VS]", "SoftBank"=>"E12E"),
"E5D3" => array("docomo"=>"[ﾄﾛﾌｨｰ]", "SoftBank"=>"E131"),
"E5D4" => array("docomo"=>"[ｶﾒ]", "SoftBank"=>"[ｶﾒ]"),
"E5D5" => array("docomo"=>"[ｽﾍﾟｲﾝ]", "SoftBank"=>"E511"),
"E5D6" => array("docomo"=>"[ﾛｼｱ]", "SoftBank"=>"E512"),
"E5D7" => array("docomo"=>"[工事中]", "SoftBank"=>"E137"),
"E5D8" => array("docomo"=>"E6F7", "SoftBank"=>"E13F"),
"E5D9" => array("docomo"=>"[祝日]", "SoftBank"=>"E143"),
"E5DA" => array("docomo"=>"[夕焼け]", "SoftBank"=>"E146"),
"E5DB" => array("docomo"=>"E74F", "SoftBank"=>"E523"),
"E5DC" => array("docomo"=>"[株価]", "SoftBank"=>"E14A"),
"E5DD" => array("docomo"=>"[警官]", "SoftBank"=>"E152"),
"E5DE" => array("docomo"=>"E665", "SoftBank"=>"E153"),
"E5DF" => array("docomo"=>"E666", "SoftBank"=>"E155"),
"EA80" => array("docomo"=>"E73E", "SoftBank"=>"E157"),
"EA81" => array("docomo"=>"E669", "SoftBank"=>"E158"),
"EA82" => array("docomo"=>"E661", "SoftBank"=>"E202"),
"EA83" => array("docomo"=>"[18禁]", "SoftBank"=>"E207"),
"EA84" => array("docomo"=>"[ﾊﾞﾘ3]", "SoftBank"=>"E20B"),
"EA85" => array("docomo"=>"[COOL]", "SoftBank"=>"E214"),
"EA86" => array("docomo"=>"[割]", "SoftBank"=>"E227"),
"EA87" => array("docomo"=>"[ｻｰﾋﾞｽ]", "SoftBank"=>"E228"),
"EA88" => array("docomo"=>"E6D8", "SoftBank"=>"E229"),
"EA89" => array("docomo"=>"E73B", "SoftBank"=>"E22A"),
"EA8A" => array("docomo"=>"E739", "SoftBank"=>"E22B"),
"EA8B" => array("docomo"=>"[指]", "SoftBank"=>"E22C"),
"EA8C" => array("docomo"=>"[営]", "SoftBank"=>"E22D"),
"EA8D" => array("docomo"=>"↑", "SoftBank"=>"E22E"),
"EA8E" => array("docomo"=>"↓", "SoftBank"=>"E22F"),
"EA8F" => array("docomo"=>"[占い]", "SoftBank"=>"E23E"),
"EA90" => array("docomo"=>"[ﾏﾅｰﾓｰﾄﾞ]", "SoftBank"=>"E250"),
"EA91" => array("docomo"=>"[ｹｰﾀｲOFF]", "SoftBank"=>"E251"),
"EA92" => array("docomo"=>"E689", "SoftBank"=>"E301"),
"EA93" => array("docomo"=>"[ﾈｸﾀｲ]", "SoftBank"=>"E302"),
"EA94" => array("docomo"=>"[ﾊｲﾋﾞｽｶｽ]", "SoftBank"=>"E303"),
"EA95" => array("docomo"=>"[花束]", "SoftBank"=>"E306"),
"EA96" => array("docomo"=>"[ｻﾎﾞﾃﾝ]", "SoftBank"=>"E308"),
"EA97" => array("docomo"=>"E74B", "SoftBank"=>"E30B"),
"EA98" => array("docomo"=>"E672", "SoftBank"=>"E30C"),
"EA99" => array("docomo"=>"[祝]", "SoftBank"=>"E30D"),
"EA9A" => array("docomo"=>"[薬]", "SoftBank"=>"E30F"),
"EA9B" => array("docomo"=>"[風船]", "SoftBank"=>"E310"),
"EA9C" => array("docomo"=>"[ｸﾗｯｶｰ]", "SoftBank"=>"E312"),
"EA9D" => array("docomo"=>"[EZﾅﾋﾞ]", "SoftBank"=>"[EZﾅﾋﾞ]"),
"EA9E" => array("docomo"=>"[帽子]", "SoftBank"=>"E318"),
"EA9F" => array("docomo"=>"[ﾌﾞｰﾂ]", "SoftBank"=>"E31B"),
"EAA0" => array("docomo"=>"[ﾏﾆｷｭｱ]", "SoftBank"=>"E31D"),
"EAA1" => array("docomo"=>"[美容院]", "SoftBank"=>"E31F"),
"EAA2" => array("docomo"=>"[床屋]", "SoftBank"=>"E320"),
"EAA3" => array("docomo"=>"[着物]", "SoftBank"=>"E321"),
"EAA4" => array("docomo"=>"[ﾋﾞｷﾆ]", "SoftBank"=>"E322"),
"EAA5" => array("docomo"=>"E68D", "SoftBank"=>"E20C"),
"EAA6" => array("docomo"=>"E6EC", "SoftBank"=>"E327"),
"EAA7" => array("docomo"=>"E6EC", "SoftBank"=>"E32A"),
"EAA8" => array("docomo"=>"E6EC", "SoftBank"=>"E32B"),
"EAA9" => array("docomo"=>"E6EC", "SoftBank"=>"E32C"),
"EAAA" => array("docomo"=>"E6EC", "SoftBank"=>"E32D"),
"EAAB" => array("docomo"=>"E6FA", "SoftBank"=>"E32E"),
"EAAC" => array("docomo"=>"E657", "SoftBank"=>"E013"),
"EAAD" => array("docomo"=>"E6A0", "SoftBank"=>"E332"),
"EAAE" => array("docomo"=>"E71E", "SoftBank"=>"E338"),
"EAAF" => array("docomo"=>"E74D", "SoftBank"=>"E339"),
"EAB0" => array("docomo"=>"[ｿﾌﾄｸﾘｰﾑ]", "SoftBank"=>"E33A"),
"EAB1" => array("docomo"=>"[ﾎﾟﾃﾄ]", "SoftBank"=>"E33B"),
"EAB2" => array("docomo"=>"[だんご]", "SoftBank"=>"E33C"),
"EAB3" => array("docomo"=>"[せんべい]", "SoftBank"=>"E33D"),
"EAB4" => array("docomo"=>"E74C", "SoftBank"=>"E33E"),
"EAB5" => array("docomo"=>"[ﾊﾟｽﾀ]", "SoftBank"=>"E33F"),
"EAB6" => array("docomo"=>"[ｶﾚｰ]", "SoftBank"=>"E341"),
"EAB7" => array("docomo"=>"[おでん]", "SoftBank"=>"E343"),
"EAB8" => array("docomo"=>"[すし]", "SoftBank"=>"E344"),
"EAB9" => array("docomo"=>"E745", "SoftBank"=>"E345"),
"EABA" => array("docomo"=>"[みかん]", "SoftBank"=>"E346"),
"EABB" => array("docomo"=>"[ﾄﾏﾄ]", "SoftBank"=>"E349"),
"EABC" => array("docomo"=>"[ﾅｽ]", "SoftBank"=>"E34A"),
"EABD" => array("docomo"=>"[弁当]", "SoftBank"=>"E34C"),
"EABE" => array("docomo"=>"[鍋]", "SoftBank"=>"E34D"),
"EABF" => array("docomo"=>"E72C", "SoftBank"=>"E402"),
"EAC0" => array("docomo"=>"E720", "SoftBank"=>"E403"),
"EAC1" => array("docomo"=>"E6CC", "SoftBank"=>"E404"),
"EAC2" => array("docomo"=>"E72B", "SoftBank"=>"E406"),
"EAC3" => array("docomo"=>"E6F3", "SoftBank"=>"E407"),
"EAC4" => array("docomo"=>"E701", "SoftBank"=>"E408"),
"EAC5" => array("docomo"=>"E721", "SoftBank"=>"E40A"),
"EAC6" => array("docomo"=>"E6CC", "SoftBank"=>"E40B"),
"EAC7" => array("docomo"=>"[風邪ひき]", "SoftBank"=>"E40C"),
"EAC8" => array("docomo"=>"[熱]", "SoftBank"=>"E40D"),
"EAC9" => array("docomo"=>"E725", "SoftBank"=>"E40E"),
"EACA" => array("docomo"=>"E6F4", "SoftBank"=>"E410"),
"EACB" => array("docomo"=>"E723", "SoftBank"=>"E40F"),
"EACC" => array("docomo"=>"E6FF", "SoftBank"=>"E326"),
"EACD" => array("docomo"=>"E6F0", "SoftBank"=>"E056"),
"EACE" => array("docomo"=>"(>3<)", "SoftBank"=>"E417"),
"EACF" => array("docomo"=>"(´3`)", "SoftBank"=>"E418"),
"EAD0" => array("docomo"=>"[鼻]", "SoftBank"=>"E41A"),
"EAD1" => array("docomo"=>"E6F9", "SoftBank"=>"E41C"),
"EAD2" => array("docomo"=>"(>人<)", "SoftBank"=>"E41D"),
"EAD3" => array("docomo"=>"[拍手]", "SoftBank"=>"E41F"),
"EAD4" => array("docomo"=>"E70B", "SoftBank"=>"E420"),
"EAD5" => array("docomo"=>"E700", "SoftBank"=>"E421"),
"EAD6" => array("docomo"=>"E695", "SoftBank"=>"E41E"),
"EAD7" => array("docomo"=>"E72F", "SoftBank"=>"E423"),
"EAD8" => array("docomo"=>"E70B", "SoftBank"=>"E424"),
"EAD9" => array("docomo"=>"m(_ _)m", "SoftBank"=>"E426"),
"EADA" => array("docomo"=>"E6ED", "SoftBank"=>"E425"),
"EADB" => array("docomo"=>"[ﾊﾞﾆｰ]", "SoftBank"=>"E429"),
"EADC" => array("docomo"=>"[ﾄﾗﾝﾍﾟｯﾄ]", "SoftBank"=>"E042"),
"EADD" => array("docomo"=>"[ﾋﾞﾘﾔｰﾄﾞ]", "SoftBank"=>"E42C"),
"EADE" => array("docomo"=>"[水泳]", "SoftBank"=>"E42D"),
"EADF" => array("docomo"=>"[消防車]", "SoftBank"=>"E430"),
"EAE0" => array("docomo"=>"[救急車]", "SoftBank"=>"E431"),
"EAE1" => array("docomo"=>"[ﾊﾟﾄｶｰ]", "SoftBank"=>"E432"),
"EAE2" => array("docomo"=>"[ｼﾞｪｯﾄｺｰｽﾀｰ]", "SoftBank"=>"E433"),
"EAE3" => array("docomo"=>"[門松]", "SoftBank"=>"E436"),
"EAE4" => array("docomo"=>"[ひな祭り]", "SoftBank"=>"E438"),
"EAE5" => array("docomo"=>"[卒業式]", "SoftBank"=>"E439"),
"EAE6" => array("docomo"=>"[ﾗﾝﾄﾞｾﾙ]", "SoftBank"=>"E43A"),
"EAE7" => array("docomo"=>"[こいのぼり]", "SoftBank"=>"E43B"),
"EAE8" => array("docomo"=>"E645", "SoftBank"=>"E43C"),
"EAE9" => array("docomo"=>"[花嫁]", "SoftBank"=>"[花嫁]"),
"EAEA" => array("docomo"=>"[ｶｷ氷]", "SoftBank"=>"E43F"),
"EAEB" => array("docomo"=>"[線香花火]", "SoftBank"=>"E440"),
"EAEC" => array("docomo"=>"[巻貝]", "SoftBank"=>"E441"),
"EAED" => array("docomo"=>"[風鈴]", "SoftBank"=>"E442"),
"EAEE" => array("docomo"=>"[ﾊﾛｳｨﾝ]", "SoftBank"=>"E445"),
"EAEF" => array("docomo"=>"[お月見]", "SoftBank"=>"E446"),
"EAF0" => array("docomo"=>"[ｻﾝﾀ]", "SoftBank"=>"E448"),
"EAF1" => array("docomo"=>"E6B3", "SoftBank"=>"E44B"),
"EAF2" => array("docomo"=>"[虹]", "SoftBank"=>"E44C"),
"EAF3" => array("docomo"=>"E669|E6EF", "SoftBank"=>"E501"),
"EAF4" => array("docomo"=>"E63E", "SoftBank"=>"E449"),
"EAF5" => array("docomo"=>"E67C", "SoftBank"=>"E503"),
"EAF6" => array("docomo"=>"[ﾃﾞﾊﾟｰﾄ]", "SoftBank"=>"E504"),
"EAF7" => array("docomo"=>"[城]", "SoftBank"=>"E505"),
"EAF8" => array("docomo"=>"[城]", "SoftBank"=>"E506"),
"EAF9" => array("docomo"=>"[工場]", "SoftBank"=>"E508"),
"EAFA" => array("docomo"=>"[ﾌﾗﾝｽ]", "SoftBank"=>"E50D"),
"EAFB" => array("docomo"=>"[ｵｰﾌﾟﾝｳｪﾌﾞ]", "SoftBank"=>"[ｵｰﾌﾟﾝｳｪﾌﾞ]"),
"EAFC" => array("docomo"=>"[ｶｷﾞ]", "SoftBank"=>"E144"),
"EAFD" => array("docomo"=>"[ABCD]", "SoftBank"=>"[ABCD]"),
"EAFE" => array("docomo"=>"[abcd]", "SoftBank"=>"[abcd]"),
"EAFF" => array("docomo"=>"[1234]", "SoftBank"=>"[1234]"),
"EB00" => array("docomo"=>"[記号]", "SoftBank"=>"[記号]"),
"EB01" => array("docomo"=>"[可]", "SoftBank"=>"[可]"),
"EB02" => array("docomo"=>"[ﾁｪｯｸﾏｰｸ]", "SoftBank"=>"[ﾁｪｯｸﾏｰｸ]"),
"EB03" => array("docomo"=>"E6AE", "SoftBank"=>"[ﾍﾟﾝ]"),
"EB04" => array("docomo"=>"[ﾗｼﾞｵﾎﾞﾀﾝ]", "SoftBank"=>"[ﾗｼﾞｵﾎﾞﾀﾝ]"),
"EB05" => array("docomo"=>"E6DC", "SoftBank"=>"E114"),
"EB06" => array("docomo"=>"[←BACK]", "SoftBank"=>"E235"),
"EB07" => array("docomo"=>"[ﾌﾞｯｸﾏｰｸ]", "SoftBank"=>"[ﾌﾞｯｸﾏｰｸ]"),
"EB08" => array("docomo"=>"E6CE", "SoftBank"=>"E104"),
"EB09" => array("docomo"=>"E663", "SoftBank"=>"E036"),
"EB0A" => array("docomo"=>"E665", "SoftBank"=>"E101"),
"EB0B" => array("docomo"=>"E689", "SoftBank"=>"E301"),
"EB0C" => array("docomo"=>"E6D9", "SoftBank"=>"E144"),
"EB0D" => array("docomo"=>"E735", "SoftBank"=>"↑↓"),
"EB0E" => array("docomo"=>"[ﾄﾞｲﾂ]", "SoftBank"=>"E50E"),
"EB0F" => array("docomo"=>"[ｲﾀﾘｱ]", "SoftBank"=>"E50F"),
"EB10" => array("docomo"=>"[ｲｷﾞﾘｽ]", "SoftBank"=>"E510"),
"EB11" => array("docomo"=>"[中国]", "SoftBank"=>"E513"),
"EB12" => array("docomo"=>"[韓国]", "SoftBank"=>"E514"),
"EB13" => array("docomo"=>"[白人]", "SoftBank"=>"E515"),
"EB14" => array("docomo"=>"[中国人]", "SoftBank"=>"E516"),
"EB15" => array("docomo"=>"[ｲﾝﾄﾞ人]", "SoftBank"=>"E517"),
"EB16" => array("docomo"=>"[おじいさん]", "SoftBank"=>"E518"),
"EB17" => array("docomo"=>"[おばあさん]", "SoftBank"=>"E519"),
"EB18" => array("docomo"=>"[赤ちゃん]", "SoftBank"=>"E51A"),
"EB19" => array("docomo"=>"[工事現場の人]", "SoftBank"=>"E51B"),
"EB1A" => array("docomo"=>"[お姫様]", "SoftBank"=>"E51C"),
"EB1B" => array("docomo"=>"[ｲﾙｶ]", "SoftBank"=>"E520"),
"EB1C" => array("docomo"=>"[ﾀﾞﾝｽ]", "SoftBank"=>"E51F"),
"EB1D" => array("docomo"=>"E751", "SoftBank"=>"E522"),
"EB1E" => array("docomo"=>"[ｹﾞｼﾞｹﾞｼﾞ]", "SoftBank"=>"E525"),
"EB1F" => array("docomo"=>"[ｿﾞｳ]", "SoftBank"=>"E526"),
"EB20" => array("docomo"=>"[ｺｱﾗ]", "SoftBank"=>"E527"),
"EB21" => array("docomo"=>"[牛]", "SoftBank"=>"E52B"),
"EB22" => array("docomo"=>"[ﾍﾋﾞ]", "SoftBank"=>"E52D"),
"EB23" => array("docomo"=>"[ﾆﾜﾄﾘ]", "SoftBank"=>"E52E"),
"EB24" => array("docomo"=>"[ｲﾉｼｼ]", "SoftBank"=>"E52F"),
"EB25" => array("docomo"=>"[ﾗｸﾀﾞ]", "SoftBank"=>"E530"),
"EB26" => array("docomo"=>"[A]", "SoftBank"=>"E532"),
"EB27" => array("docomo"=>"[B]", "SoftBank"=>"E533"),
"EB28" => array("docomo"=>"[O]", "SoftBank"=>"E535"),
"EB29" => array("docomo"=>"[AB]", "SoftBank"=>"E534"),
"EB2A" => array("docomo"=>"E698", "SoftBank"=>"E536"),
"EB2B" => array("docomo"=>"E699", "SoftBank"=>"E007"),
"EB2C" => array("docomo"=>"E6DE", "SoftBank"=>"[旗]"),
"EB2D" => array("docomo"=>"E6F5", "SoftBank"=>"E236"),
"EB2E" => array("docomo"=>"E700", "SoftBank"=>"E238"),
"EB2F" => array("docomo"=>"E703", "SoftBank"=>"!?"),
"EB30" => array("docomo"=>"E704", "SoftBank"=>"!!"),
"EB31" => array("docomo"=>"E70A", "SoftBank"=>"~"),
"EB32" => array("docomo"=>"[ﾒﾛﾝ]", "SoftBank"=>"[ﾒﾛﾝ]"),
"EB33" => array("docomo"=>"[ﾊﾟｲﾅｯﾌﾟﾙ]", "SoftBank"=>"[ﾊﾟｲﾅｯﾌﾟﾙ]"),
"EB34" => array("docomo"=>"[ﾌﾞﾄﾞｳ]", "SoftBank"=>"[ﾌﾞﾄﾞｳ]"),
"EB35" => array("docomo"=>"E744", "SoftBank"=>"[ﾊﾞﾅﾅ]"),
"EB36" => array("docomo"=>"[とうもろこし]", "SoftBank"=>"[とうもろこし]"),
"EB37" => array("docomo"=>"[ｷﾉｺ]", "SoftBank"=>"[ｷﾉｺ]"),
"EB38" => array("docomo"=>"[栗]", "SoftBank"=>"[栗]"),
"EB39" => array("docomo"=>"[ﾓﾓ]", "SoftBank"=>"[ﾓﾓ]"),
"EB3A" => array("docomo"=>"[やきいも]", "SoftBank"=>"[やきいも]"),
"EB3B" => array("docomo"=>"[ﾋﾟｻﾞ]", "SoftBank"=>"[ﾋﾟｻﾞ]"),
"EB3C" => array("docomo"=>"[ﾁｷﾝ]", "SoftBank"=>"[ﾁｷﾝ]"),
"EB3D" => array("docomo"=>"[七夕]", "SoftBank"=>"[七夕]"),
"EB3E" => array("docomo"=>"E671", "SoftBank"=>"E044"),
"EB3F" => array("docomo"=>"[辰]", "SoftBank"=>"[辰]"),
"EB40" => array("docomo"=>"[ﾋﾟｱﾉ]", "SoftBank"=>"[ﾋﾟｱﾉ]"),
"EB41" => array("docomo"=>"E712", "SoftBank"=>"E017"),
"EB42" => array("docomo"=>"E751", "SoftBank"=>"E019"),
"EB43" => array("docomo"=>"[ﾎﾞｰﾘﾝｸﾞ]", "SoftBank"=>"[ﾎﾞｰﾘﾝｸﾞ]"),
"EB44" => array("docomo"=>"[なまはげ]", "SoftBank"=>"[なまはげ]"),
"EB45" => array("docomo"=>"[天狗]", "SoftBank"=>"[天狗]"),
"EB46" => array("docomo"=>"[ﾊﾟﾝﾀﾞ]", "SoftBank"=>"[ﾊﾟﾝﾀﾞ]"),
"EB47" => array("docomo"=>"E728", "SoftBank"=>"E409"),
"EB48" => array("docomo"=>"E6CC", "SoftBank"=>"E10B"),
"EB49" => array("docomo"=>"[花]", "SoftBank"=>"E305"),
"EB4A" => array("docomo"=>"[ｱｲｽｸﾘｰﾑ]", "SoftBank"=>"[ｱｲｽｸﾘｰﾑ]"),
"EB4B" => array("docomo"=>"[ﾄﾞｰﾅﾂ]", "SoftBank"=>"[ﾄﾞｰﾅﾂ]"),
"EB4C" => array("docomo"=>"[ｸｯｷｰ]", "SoftBank"=>"[ｸｯｷｰ]"),
"EB4D" => array("docomo"=>"[ﾁｮｺ]", "SoftBank"=>"[ﾁｮｺ]"),
"EB4E" => array("docomo"=>"[ｷｬﾝﾃﾞｨ]", "SoftBank"=>"[ｷｬﾝﾃﾞｨ]"),
"EB4F" => array("docomo"=>"[ｷｬﾝﾃﾞｨ]", "SoftBank"=>"[ｷｬﾝﾃﾞｨ]"),
"EB50" => array("docomo"=>"(/_＼)", "SoftBank"=>"(/_＼)"),
"EB51" => array("docomo"=>"(･×･)", "SoftBank"=>"(･×･)"),
"EB52" => array("docomo"=>"|(･×･)|", "SoftBank"=>"|(･×･)|"),
"EB53" => array("docomo"=>"[火山]", "SoftBank"=>"[火山]"),
"EB54" => array("docomo"=>"E6EC", "SoftBank"=>"E328"),
"EB55" => array("docomo"=>"[ABC]", "SoftBank"=>"[ABC]"),
"EB56" => array("docomo"=>"[ﾌﾟﾘﾝ]", "SoftBank"=>"[ﾌﾟﾘﾝ]"),
"EB57" => array("docomo"=>"[ﾐﾂﾊﾞﾁ]", "SoftBank"=>"[ﾐﾂﾊﾞﾁ]"),
"EB58" => array("docomo"=>"[てんとう虫]", "SoftBank"=>"[てんとう虫]"),
"EB59" => array("docomo"=>"[ﾊﾁﾐﾂ]", "SoftBank"=>"[ﾊﾁﾐﾂ]"),
"EB5A" => array("docomo"=>"E745", "SoftBank"=>"E345"),
"EB5B" => array("docomo"=>"[飛んでいくお金]", "SoftBank"=>"[飛んでいくお金]"),
"EB5C" => array("docomo"=>"[ｸﾗｸﾗ]", "SoftBank"=>"E407"),
"EB5D" => array("docomo"=>"E724", "SoftBank"=>"E416"),
"EB5E" => array("docomo"=>"E724", "SoftBank"=>"E416"),
"EB5F" => array("docomo"=>"E6B3", "SoftBank"=>"E44B"),
"EB60" => array("docomo"=>"(´3`)", "SoftBank"=>"E418"),
"EB61" => array("docomo"=>"E6F0", "SoftBank"=>"E057"),
"EB62" => array("docomo"=>"E6CF", "SoftBank"=>"E103"),
"EB63" => array("docomo"=>"E72A", "SoftBank"=>"E412"),
"EB64" => array("docomo"=>"E72A", "SoftBank"=>"E412"),
"EB65" => array("docomo"=>"E726", "SoftBank"=>"E106"),
"EB66" => array("docomo"=>"E6F3", "SoftBank"=>"E403"),
"EB67" => array("docomo"=>"E6F3", "SoftBank"=>"E403"),
"EB68" => array("docomo"=>"E72E", "SoftBank"=>"E413"),
"EB69" => array("docomo"=>"E72E", "SoftBank"=>"E413"),
"EB6A" => array("docomo"=>"E6CC", "SoftBank"=>"E404"),
"EB6B" => array("docomo"=>"[ﾄﾞﾚｽ]", "SoftBank"=>"E319"),
"EB6C" => array("docomo"=>"[ﾓｱｲ]", "SoftBank"=>"[ﾓｱｲ]"),
"EB6D" => array("docomo"=>"[駅]", "SoftBank"=>"E039"),
"EB6E" => array("docomo"=>"[花札]", "SoftBank"=>"[花札]"),
"EB6F" => array("docomo"=>"[ｼﾞｮｰｶｰ]", "SoftBank"=>"[ｼﾞｮｰｶｰ]"),
"EB70" => array("docomo"=>"[ｴﾋﾞﾌﾗｲ]", "SoftBank"=>"[ｴﾋﾞﾌﾗｲ]"),
"EB71" => array("docomo"=>"E6D3", "SoftBank"=>"E103"),
"EB72" => array("docomo"=>"E733", "SoftBank"=>"E201"),
"EB73" => array("docomo"=>"[ﾊﾟﾄｶｰ]", "SoftBank"=>"E432"),
"EB74" => array("docomo"=>"[EZﾑｰﾋﾞｰ]", "SoftBank"=>"[EZﾑｰﾋﾞｰ]"),
"EB75" => array("docomo"=>"E6ED", "SoftBank"=>"E327"),
"EB76" => array("docomo"=>"E74F", "SoftBank"=>"E523"),
"EB77" => array("docomo"=>"E711", "SoftBank"=>"[ｼﾞｰﾝｽﾞ]"),
"EB78" => array("docomo"=>"E717", "SoftBank"=>"E103|E328"),
"EB79" => array("docomo"=>"E735", "SoftBank"=>"↑↓"),
"EB7A" => array("docomo"=>"E73C", "SoftBank"=>"⇔"),
"EB7B" => array("docomo"=>"E73D", "SoftBank"=>"↑↓"),
"EB7C" => array("docomo"=>"E73F", "SoftBank"=>"E43E"),
"EB7D" => array("docomo"=>"E746", "SoftBank"=>"E110"),
"EB7E" => array("docomo"=>"E74E", "SoftBank"=>"[ｶﾀﾂﾑﾘ]"),
"EB7F" => array("docomo"=>"E6CC", "SoftBank"=>"E404"),
"EB80" => array("docomo"=>"E6CC", "SoftBank"=>"E404"),
"EB81" => array("docomo"=>"[Cﾒｰﾙ]", "SoftBank"=>"[Cﾒｰﾙ]"),
"EB82" => array("docomo"=>"E741", "SoftBank"=>"E110"),
"EB83" => array("docomo"=>"E693", "SoftBank"=>"E010"),
"EB84" => array("docomo"=>"E6E0", "SoftBank"=>"E210"),
"EB85" => array("docomo"=>"(^-^)/", "SoftBank"=>"E012"),
"EB86" => array("docomo"=>"＼(^o^)／", "SoftBank"=>"E427"),
"EB87" => array("docomo"=>"E6F3", "SoftBank"=>"E403"),
"EB88" => array("docomo"=>"E724", "SoftBank"=>"E416"),
"EB89" => array("docomo"=>"[EZｱﾌﾟﾘJ]", "SoftBank"=>"[EZｱﾌﾟﾘJ]"),
"EB8A" => array("docomo"=>"[EZｱﾌﾟﾘB]", "SoftBank"=>"[EZｱﾌﾟﾘB]"),
"EB8B" => array("docomo"=>"[EZ着うた]", "SoftBank"=>"[EZ着うた]"),
"EB8C" => array("docomo"=>"[EZﾅﾋﾞMS]", "SoftBank"=>"[EZﾅﾋﾞMS]"),
"EB8D" => array("docomo"=>"[WIN]", "SoftBank"=>"[WIN]"),
"EB8E" => array("docomo"=>"[ﾌﾟﾚﾐｱﾑ]", "SoftBank"=>"[ﾌﾟﾚﾐｱﾑ]"),
);

	/**#@-*/
	
	/**#@+
	 * @access public
	 */
	
	// }}}
	// {{{ getAll()
	
	/**
	 * 全変換レコード集取得
	 *
	 * @return	array	$this->_conv	コード集
	 */
	function getAll()
	{
		return $this->_conv;
	}
	
	/**#@-*/
	
	// }}}
}

// }}}

?>