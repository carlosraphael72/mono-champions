<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Mono Champions</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<script language="javascript" src="javascript/script.js"></script>
	
</head>
<body>
	<div class="div_logo">
		<figure>
			<img id="logo" src="img/mono_champions.png" alt="Logo">
		</figure>
	</div>
	<h1>Se você quer aprender a jogar com um campeão<br> nada melhor do que aprender com quem só joga com ele</h1>


	
		Selecione um campeão: 
	<select id="cboChampions">
		<option value=""></option>
		<option value="aatrox">Aatrox</option>
		<option value="ahri">Ahri</option>
		<option value="akali">Akali</option>
		<option value="alistar">Alistar</option>
		<option value="amumu">Amumu</option>
		<option value="anivia">Anivia</option>
		<option value="annie">Annie</option>
		<option value="ashe">Ashe</option>
	</select>
	<input id="btnPesquisa" type="button"  value="Pesquisar Monos" onclick="filtrar()">


<div class="corpo">
	<?php
	function checkStream($stream){
	$ch = curl_init("https://api.twitch.tv/helix/streams?user_login=$stream");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Client-ID: a5zyq2na4qgu1ccuuo5omjathz1fbe'));
	$twitch_api = json_decode(curl_exec($ch), true);
	curl_close($ch);

	$id = array_map(function($item){
		return (int)$item['game_id'];
	}, $twitch_api['data']);

	$lol = 21779;

	if (/*$twitch_api['data'] == null*/count($id) >= 1){
		if ($id[0] == $lol) {
			echo '<span style="color:rgb(0, 255, 0);">ONLINE</span>';
		} else{
			echo '<span style="color:rgb(255, 0, 0);">OFFLINE</span>';
		}
	//	
	} else{
		echo '<span style="color:rgb(255, 0, 0);">OFFLINE</span>';
	}
}

	function addStream($stream, $nick, $opgg){
		echo '<img id="twitch_icon" src="img/twitch1.png"><a id="link" href="https://www.twitch.tv/'.$stream .'" target="_blank">';echo $nick; echo '</a>'; checkStream($stream); echo '<a href="'. $opgg . '" target="_blank"><img id="linkopgg" src="img/op.gg.png"></a> <br>';
	}
	?>

<!-- Aatrox -->

		<div class="container" id="aatrox" >
		<img src="img/80px-AatroxSquare.png" alt="Aatrox"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("mattious_", "Mattious", "https://euw.op.gg/summoner/userName=Mattious"); ?>
		
	</div>

	<!-- Ahri -->
		<div class="container" id="ahri">
		<img src="img/80px-AhriSquare.png" alt="Ahri"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("wavey", "Wavey", "https://euw.op.gg/summoner/userName=wavey"); ?>
		 <?php addStream("megaatronn", "Megatronn", "https://br.op.gg/summoner/userName=Megatronn"); ?>
		 <?php addStream("excaliberprime", "ExcaliberPrime", "https://na.op.gg/summoner/userName=excaliberprime"); ?>
	</div>

	<!-- AKALI -->
	<div class="container" id="akali">
		<img src="img/80px-AkaliSquare.png" alt="Akali"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("dockan12000", "Dockan", "https://br.op.gg/summoner/userName=DOCK%C3%81N"); ?>
		 <?php addStream("licwit", "Licwit", "https://euw.op.gg/summoner/userName=Licwit"); ?>
	</div>

	<!-- ALISTAR -->
	<div class="container" id="alistar">
		<img src="img/80px-AlistarSquare.png" alt="Alistar"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("alicopter", "Alicopter", "https://na.op.gg/summoner/userName=Alicopter"); ?>
		 <?php addStream("terminhaider", "TerminHaider", "https://na.op.gg/summoner/userName=TerminHaider"); ?>
	</div>

	<!-- AMUMU -->
	<div class="container" id="amumu">
		<img src="img/80px-AmumuSquare.png" alt="Amumu"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("infermaipe", "Infermaipe", "https://br.op.gg/summoner/userName=Infermaipe"); ?>

		</div>

	<!-- ANIVIA -->
		<div class="container" id="anivia">
		<img src="img/80px-AniviaSquare.png" alt="Anivia"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("dj_y4ssin", "Y4ssin", "https://na.op.gg/summoner/userName=dj+y4ssin"); ?>
		 <?php addStream("noname_justin", "NoNameJ", "https://euw.op.gg/summoner/userName=NoNameJ"); ?>
		 <?php addStream("trizze", "Trizze", "https://euw.op.gg/summoner/userName=trizze"); ?>		
	</div>


<!-- Annie -->
	<div class="container" id="annie">
		<img src="img/80px-AnnieSquare.png" alt="Annie"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("anniebot", "Annie Bot", "https://na.op.gg/summoner/userName=anniebot"); ?>
		 <?php// addStream("pandaannielol", "Panda Annie", "https://oce.op.gg/summoner/userName=Panda+Annie"); ?>	
	</div>

	<!-- ASHE -->
	<div class="container" id="ashe">
		<img src="img/80px-AsheSquare.png" alt="Ashe"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

	<!-- AURELION SOL -->
	<div class="container" id="aurelionsol">
		<img src="img/80px-Aurelion_SolSquare.png" alt="Aurelion Sol"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("iolkaida", "Olkaida", "https://br.op.gg/summoner/userName=Olkaida"); ?>	
		 <?php addStream("lyaphine", "Lyaphine", "https://euw.op.gg/summoner/userName=lyaphine"); ?>	
	</div>

	<!-- AZIR -->
	<div class="container" id="azir">
		<img src="img/80px-AzirSquare.png" alt="Azir"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("fullsand", "Full Sand", "https://na.op.gg/summoner/userName=Full+Sand"); ?>
		 <?php addStream("body_those_fools", "Body Those Fools", "https://na.op.gg/summoner/userName=Body+Those+Fools"); ?>
</div>

	<!-- BARDO -->
<div class="container" id="bardo">
		<img src="img/80px-BardSquare.png" alt="Bardo"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("cheed", "Cheed", "https://br.op.gg/summoner/userName=im+cheed"); ?>
</div>

<!-- BLITZCRANK -->
<div class="container" id="blitzcrank">
		<img src="img/80px-BlitzcrankSquare.png" alt="Blitzcrank"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("padrejoselol", "PadreJoseLOL", "https://br.op.gg/summoner/userName=XXT+PadreJose"); ?>
		 <?php addStream("scrandor", "Scrandor", "https://na.op.gg/summoner/userName=Scrandor"); ?>
</div>

<!-- BRAND -->
<div class="container" id="brand">
		<img src="img/80px-BrandSquare.png" alt="Brand"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("ferkzmainbrandbr", "Ferkz", "https://br.op.gg/summoner/userName=ferkz"); ?>
</div>

<!-- BRAUM -->
	<div class="container" id="braum">
		<img src="img/80px-BraumSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- CAITLYN -->
	<div class="container" id="caitlyn">
		<img src="img/80px-CaitlynSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- CAMILLE -->
	<div class="container" id="camille">
		<img src="img/80px-CamilleSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- CASSIOPEIA -->
	<div class="container" id="cassiopeia">
		<img src="img/80px-CassiopeiaSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- CHO'GATH -->
	<div class="container" id="chogath">
		<img src="img/80px-ChoGathSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("alex_blais", "Alex Blais", "https://na.op.gg/summoner/userName=Alex+Blais"); ?>

	</div>

<!-- CORKI -->
	<div class="container" id="corki">
		<img src="img/80px-CorkiSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- DARIUS -->
	<div class="container" id="darius">
		<img src="img/80px-DariusSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("dystrex", "Dystrex", "https://na.op.gg/summoner/userName=dystrex"); ?>
		 <?php addStream("donaldthegiant", "DonaldTheGiant", "https://br.op.gg/summoner/userName=fake+mylon"); ?>
		 <?php addStream("adzioo", "AdziOo", "https://eune.op.gg/summoner/userName=adzioo"); ?>
		 <?php addStream("ravenborne_", "Ravenborne", "https://euw.op.gg/summoner/userName=ravenb%C3%B3rn"); ?>
	</div>

<!-- DIANA -->
	<div class="container" id="diana">
		<img src="img/80px-DianaSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("sdiana2na", "S Diana 2", "https://na.op.gg/summoner/userName=S%20Diana%202"); ?>
		 <?php addStream("suntail_", "Suntail", "https://na.op.gg/summoner/userName=suntail"); ?>
	</div>

<!-- DR.MUNDO -->
	<div class="container" id="drmundo">
		<img src="img/80px-DrMundoSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("mundo_stream", "Mundo Stream", "https://na.op.gg/summoner/userName=mundo"); ?>
	</div>

<!-- DRAVEN -->
	<div class="container" id="draven">
		<img src="img/80px-DravenSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("parnstarzilean", "ParnstarZielan", "https://euw.op.gg/summoner/userName=%CE%A1SZ"); ?>
		 <?php addStream("rickfrantz", "rickFrantZ", "https://br.op.gg/summoner/userName=DRAV%C3%8BN"); ?>

	</div>

<!-- EKKO -->
	<div class="container" id="ekko">
		<img src="img/80px-EkkoSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("maxskeproductions", "Maxske", "https://na.op.gg/summoner/userName=maxske"); ?>

	</div>

<!-- ELISE -->
	<div class="container" id="elise">
		<img src="img/80px-EliseSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- EVELYNN -->
	<div class="container" id="evelynn">
		<img src="img/80px-EvelynnSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("keiozin", "Keio", "https://br.op.gg/summoner/userName=keio"); ?>
	</div>

<!-- EZREAL -->
	<div class="container" id="ezreal">
		<img src="img/80px-EzrealSquare.png" alt="Ezreal"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- FIDDLESTICKS -->
	<div class="container" id="fiddlesticks">
		<img src="img/80px-FiddlesticksSquare.png" alt="Fiddlesticks"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("fearthesticks", "FearTheSticks", "https://na.op.gg/summoner/userName=fearthesticks"); ?>

	</div>

<!-- FIORA -->
	<div class="container" id="fiora">
		<img src="img/80px-FioraSquare.png" alt="Fiora"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("forgottenproject", "ForgottenProject", "https://na.op.gg/summoner/userName=ForgottenProject"); ?>
		 <?php addStream("polar_hugs", "Revenge of Avian", "https://na.op.gg/summoner/userName=Revenge%20of%20Avian"); ?>

	</div>

<!-- FIZZ -->
	<div class="container" id="fizz">
		<img src="img/80px-FizzSquare.png" alt="Fizz"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- GALIO -->
	<div class="container" id="galio">
		<img src="img/80px-GalioSquare.png" alt="Galio"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- GANGPLANK -->
	<div class="container" id="gangplank">
		<img src="img/80px-GangplankSquare.png" alt="Gangplank"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("solarbacca", "SolarBacca", "https://na.op.gg/summoner/userName=solarbacca"); ?>
		 <?php addStream("gpgustavo1", "GPGustavo", "https://br.op.gg/summoner/userName=GPGustavo"); ?>
		 <?php addStream("tobiasfate", "TobiasFate", "https://na.op.gg/summoner/userName=tobiasfate"); ?>
		 <?php addStream("shygo", "Shygo", "https://br.op.gg/summoner/userName=new+shygo"); ?>
		 <?php addStream("misteregg1", "MisterEgg", "https://br.op.gg/summoner/userName=misterkegg"); ?>
	</div>

<!-- GAREN -->
	<div class="container" id="garen">
		<img src="img/80px-GarenSquare.png" alt="Garen"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("riste", "riste", "https://na.op.gg/summoner/userName=riste"); ?>
	</div>

<!-- GNAR -->
	<div class="container" id="gnar">
		<img src="img/80px-GnarSquare.png" alt="Gnar"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("thingintheice_", "Thing in The Ice", "https://na.op.gg/summoner/userName=thingintheice"); ?>
		 <?php addStream("mrpopper", "Mr Popper", "https://na.op.gg/summoner/userName=mr+popper"); ?>

	</div>

<!-- GRAGAS -->
	<div class="container" id="gragas">
		<img src="img/80px-GragasSquare.png" alt="Gragas"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("panunulol", "Panunu", "https://na.op.gg/summoner/userName=panunu"); ?>
		 <?php addStream("gragolandia1", "Gragolandia", "https://br.op.gg/summoner/userName=Gragolandia"); ?>
		 <?php addStream("woodyfruity", "WoodyFruity", "https://na.op.gg/summoner/userName=TBones"); ?>
	</div>

<!-- GRAVES -->
	<div class="container" id="graves">
		<img src="img/80px-GravesSquare.png" alt="Graves"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("iwantmycigar", "I Want My Cigar", "https://na.op.gg/summoner/userName=i+want+my+cigar"); ?>
	</div>

<!-- HECARIM -->
	<div class="container" id="hecarim">
		<img src="img/80px-HecarimSquare.png" alt="Hecarim"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("dallasmmbr", "Dallasmmbr", "https://br.op.gg/summoner/userName=Dallasmmbr"); ?>

	</div>

<!-- HEIMERDINGER -->
	<div class="container" id="heimerdinger">
		<img src="img/80px-HeimerdingerSquare.png" alt="Heimerdinger"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("heisendongna", "Heisendong", "https://na.op.gg/summoner/userName=heisendong"); ?>

	</div>

<!-- ILLAOI -->
	<div class="container" id="illaoi">
		<img src="img/80px-IllaoiSquare.png" alt="Illaoi"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("shock_dog", "SHOCK DOG", "https://br.op.gg/summoner/userName=SHOCK+DOG"); ?>
	</div>

<!-- IRELIA -->
	<div class="container" id="irelia">
		<img src="img/80px-IreliaSquare.png" alt="Irelia"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- IVERN -->
	<div class="container" id="ivern">
		<img src="img/80px-IvernSquare.png" alt="Ivern"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- JANNA -->
	<div class="container" id="janna">
		<img src="img/80px-JannaSquare.png" alt="Janna"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("vento_ventania", "Vento", "https://br.op.gg/summoner/userName=vento"); ?>
	</div>

<!-- JARVAN IV -->
	<div class="container" id="jarvaniv">
		<img src="img/80px-JarvanIVSquare.png" alt="Jarvan IV"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- JAX -->
	<div class="container" id="jax">
		<img src="img/80px-JaxSquare.png" alt="Jax"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- JAYCE -->
	<div class="container" id="jayce">
		<img src="img/80px-JayceSquare.png" alt="Jayce"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("fmjayce", "FMJayce", "https://na.op.gg/summoner/userName=Real+FMJayce"); ?>
	</div>

<!-- JHIN -->
	<div class="container" id="jhin">
		<img src="img/80px-JhinSquare.png" alt="Jhin"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("ikeepittaco", "IKeepItTaco", "https://na.op.gg/summoner/userName=I+Keep+It+Taco"); ?>
	</div>

<!-- JINX -->
	<div class="container" id="jinx">
		<img src="img/80px-JinxSquare.png" alt="Jinx"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- KAI'SA -->
	<div class="container" id="kaisa">
		<img src="img/80px-Kai'SaSquare.png" alt="Kai'Sa"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- KALISTA -->
	<div class="container" id="kalista">
		<img src="img/80px-KalistaSquare.png" alt="Kalista"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- KARMA -->
	<div class="container" id="karma">
		<img src="img/80px-KarmaSquare.png" alt="Karma"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- KARTHUS -->
	<div class="container" id="karthus">
		<img src="img/80px-KarthusSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("smurfdomuca", "Smurf do Muca", "https://br.op.gg/summoner/userName=SMURF+DO+MUCA"); ?>
	</div>

<!-- KASSADIN -->
	<div class="container" id="kassadin">
		<img src="img/80px-KassadinSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("permabanxd", "PermabanXD", "https://euw.op.gg/summoner/userName=Babygirl%20Abuser"); ?>

	</div>

<!-- KATARINA -->
	<div class="container" id="katarina">
		<img src="img/80px-KatarinaSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("kat_life", "Kat Life", "https://na.op.gg/summoner/userName=son+of+tree"); ?>
		 <?php addStream("katevolved", "KatEvolved", "https://na.op.gg/summoner/userName=KatEvolved"); ?>
		 <?php addStream("flyerbeklol", "Flyerbek", "https://euw.op.gg/summoner/userName=Flyerbek"); ?>
		 <?php addStream("srdogg", "SrDog", "https://br.op.gg/summoner/userName=srdog"); ?>
		 <?php addStream("gamergirl", "Gamer Girl", "https://na.op.gg/summoner/userName=Gamer%20Girl"); ?>
		 <?php addStream("katarina__bot", "Katarina Βot", "https://euw.op.gg/summoner/userName=Katarina+%CE%92ot"); ?>
	</div>

<!-- KAYLE -->
	<div class="container" id="kayle">
		<img src="img/80px-KayleSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("letkaylescale", "Let Kayle Scale", "https://na.op.gg/summoner/userName=let+kayle+scale"); ?>
		 <?php addStream("kayle_1v9", "Kayle 1v9", "https://na.op.gg/summoner/userName=kayle+1v9"); ?>
	</div>

<!-- KAYN -->
	<div class="container" id="kayn">
		<img src="img/80px-KaynSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("karasmai", "KarasMai", "https://na.op.gg/summoner/userName=KarasmaiBestKayn"); ?>
	</div>

<!-- KENNEN -->
	<div class="container" id="kennen">
		<img src="img/80px-KennenSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("slicktv", "slicK", "https://na.op.gg/summoner/userName=slick"); ?>

	</div>

<!-- KHA'ZIX -->
	<div class="container" id="khazix">
		<img src="img/80px-kha'ZixSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("kami_khazix", "Kami KhaZix", "https://euw.op.gg/summoner/userName=kamik6"); ?>
		 <?php addStream("gamergirl1_lol", "GamerGirl1", "https://eune.op.gg/summoner/userName=Hugglingfox"); ?>
	</div>

<!-- KINDRED -->
	<div class="container" id="kindred">
		<img src="img/80px-KindredSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("forestwithin", "ForestWithin", "https://na.op.gg/summoner/userName=forest"); ?>
	</div>

<!-- KLED -->
	<div class="container" id="kled">
		<img src="img/80px-KledSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("feedaboi", "FeedaBoi", "https://na.op.gg/summoner/userName=feedaboi"); ?>

	</div>

<!-- KOG'MAW -->
	<div class="container" id="kogmaw">
		<img src="img/80px-Kog'MawSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- LEBLANC -->
	<div class="container" id="leblanc">
		<img src="img/80px-LeblancSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("bobqinxd", "bobqinXD", "https://na.op.gg/summoner/userName=bobqinXD"); ?>

	</div>

<!-- LEE SIN -->
	<div class="container" id="leesin">
		<img src="img/80px-Lee_SinSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- LEONA -->
	<div class="container" id="leona">
		<img src="img/80px-LeonaSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- LISSANDRA -->
	<div class="container" id="lissandra">
		<img src="img/80px-LissandraSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("elsa_of_garendel", "Elsa of Garendel", "https://na.op.gg/summoner/userName=elsa+of+garendel"); ?>

	</div>

<!-- LUCIAN -->
	<div class="container" id="lucian">
		<img src="img/80px-LucianSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- LULU -->
	<div class="container" id="lulu">
		<img src="img/80px-LuluSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- LUX -->
	<div class="container" id="lux">
		<img src="img/80px-LuxSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- MALPHITE -->
	<div class="container" id="malphite">
		<img src="img/80px-MalphiteSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- MALZAHAR -->
	<div class="container" id="malzahar">
		<img src="img/80px-MalzaharSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- MAOKAI -->
	<div class="container" id="maokai">
		<img src="img/80px-MaokaiSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("aizolol", "Aizo", "https://na.op.gg/summoner/userName=aizo"); ?>

	</div>

<!-- MASTER YI -->
	<div class="container" id="masteryi">
		<img src="img/80px-Master_YiSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("cowsep", "Cowsep", "https://na.op.gg/summoner/userName=Cowsep"); ?>
		 <?php addStream("silenceedgaf", "Silencee", "https://euw.op.gg/summoner/userName=report+silencee"); ?>
		 <?php addStream("danijrm", "Danijrm", "https://lan.op.gg/summoner/userName=TwitchtvDanijrm"); ?>
		 <?php addStream("themissingward", "THEMISSINGWARD", "https://na.op.gg/summoner/userName=CRÃZYHEAD"); ?>		 
	</div>

<!-- MISS FORTUNE -->
	<div class="container" id="missfortune">
		<img src="img/80px-MissFortuneSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- MORDEKAISER -->
	<div class="container" id="mordekaiser">
		<img src="img/80px-MordekaiserSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("kaizermordelol", "Kaizer Morde", "https://na.op.gg/summoner/userName=Kaizer+Morde"); ?>

	</div>

<!-- MORGANA -->
	<div class="container" id="morgana">
		<img src="img/80px-MorganaSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- NAMI -->
	<div class="container" id="nami">
		<img src="img/80px-NamiSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- NASUS -->
	<div class="container" id="nasus">
		<img src="img/80px-NasusSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("daggerkill", "Daggerkill", "https://br.op.gg/summoner/userName=daggerkill1"); ?>

	</div>

<!-- NAUTILUS -->
	<div class="container" id="nautilus">
		<img src="img/80px-NautilusSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- NEEKO -->
	<div class="container" id="neeko">
		<img src="img/80px-NeekoSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("doglightning", "Doglightning", "https://na.op.gg/summoner/userName=ttv%20doglightning"); ?>

	</div>

<!-- NIDALEE -->
	<div class="container" id="nidalee">
		<img src="img/80px-NidaleeSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("cougarabuser", "Couger Abuser", "https://eune.op.gg/summoner/userName=cougar+abuser"); ?>

	</div>

<!-- NOCTURNE -->
	<div class="container" id="nocturne">
		<img src="img/80px-NocturneSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- NUNU E WILLUMP -->
	<div class="container" id="nunu">
		<img src="img/80px-Nunu_&_WillumpSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- OLAF -->
	<div class="container" id="olaf">
		<img src="img/80px-OlafSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("olaf_only", "Olaf Only", "https://euw.op.gg/summoner/userName=Olaf+Only"); ?>
	</div>

<!-- ORIANNA -->
	<div class="container" id="oriana">
		<img src="img/80px-OriannaSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- ORNN -->
	<div class="container" id="ornn">
		<img src="img/80px-OrnnSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- PANTHEON -->
	<div class="container" id="pantheon">
		<img src="img/80px-PantheonSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("keegunlol", "Keegun", "https://na.op.gg/summoner/userName=keegun"); ?>
		 <?php addStream("spear_shot", "Spear Shot", "https://euw.op.gg/summoner/userName=spear+shot"); ?>
	</div>

<!-- POPPY -->
	<div class="container" id="poppy">
		<img src="img/80px-PoppySquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("tacticianix", "TacticianIX", "https://na.op.gg/summoner/userName=young+technician"); ?>

	</div>

<!-- PYKE -->
	<div class="container" id="pyke">
		<img src="img/80px-PykeSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("xdavemon", "Davemon", "https://na.op.gg/summoner/userName=davemon"); ?>
		 <?php addStream("hanjarolol", "Hanjaro", "https://na.op.gg/summoner/userName=fbgg+hanjaro"); ?>
	</div>

<!-- QIYANA -->
	<div class="container" id="qiyana">
		<img src="img/80px-QiyanaSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- QUINN -->
	<div class="container" id="quinn">
		<img src="img/80px-QuinnSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("quinnad", "QuinnAD", "https://na.op.gg/summoner/userName=quinn+adc"); ?>
	</div>

<!-- RAKAN -->
	<div class="container" id="rakan">
		<img src="img/80px-RakanSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- RAMMUS -->
	<div class="container" id="rammus">
		<img src="img/80px-RammusSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("lordsemilol", "Lord Semi", "https://br.op.gg/summoner/userName=%C3%89L+lord+semi"); ?>
	</div>

<!-- REK'SAI -->
	<div class="container" id="reksai">
		<img src="img/80px-Rek'SaiSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- RENEKTON -->
	<div class="container" id="renekton">
		<img src="img/80px-RenektonSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("godrekton_", "Godrekton", "https://euw.op.gg/summoner/userName=godrekton"); ?>

	</div>

<!-- RENGAR -->
	<div class="container" id="rengar">
		<img src="img/80px-RengarSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("dekar173", "Dekar", "https://na.op.gg/summoner/userName=Hello+Im+Dekar"); ?>
		 <?php addStream("orengaar", "O Rengar", "https://br.op.gg/summoner/userName=orengar"); ?>
		 <?php addStream("scrubnoob", "ScrubNoob", "https://na.op.gg/summoner/userName=fear"); ?>
		 <?php addStream("onlyrengar", "OnlyRengar", "https://na.op.gg/summoner/userName=yoshi"); ?>
		 <?php addStream("rengarabuser", "RengarAbuser", "https://na.op.gg/summoner/userName=%CB%87Eli"); ?>
		 <?php addStream("rengarjones", "RengarJones", "https://eune.op.gg/summoner/userName=high+apm+rengar"); ?>
	</div>

<!-- RIVEN -->
	<div class="container" id="riven">
		<img src="img/80px-RivenSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("shy_eleven", "Shy Eleven", "https://br.op.gg/summoner/userName=lil+shy+1+1"); ?>
		 <?php addStream("secillia", "Secillia", "https://na.op.gg/summoner/userName=xPu5sy51aY3rXx69"); ?>
		 <?php addStream("dududuelista", "Dududuelista", "https://br.op.gg/summoner/userName=O+Duel%C3%AFsta"); ?>
	</div>

<!-- RUMBLE -->
	<div class="container" id="rumble">
		<img src="img/80px-RumbleSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("wentrumble", "Went", "https://na.op.gg/summoner/userName=went"); ?>

	</div>

<!-- RYZE -->
	<div class="container" id="ryze">
		<img src="img/80px-RyzeSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- SEJUANI -->
	<div class="container" id="sejuani">
		<img src="img/80px-SejuaniSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- SHACO -->
	<div class="container" id="shaco">
		<img src="img/80px-ShacoSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("pinkwardlol", "Pink Ward", "https://na.op.gg/summoner/userName=Pink+Ward"); ?>
		 <?php addStream("chaseshaco", "ChaseShaco", "https://na.op.gg/summoner/userName=ChSh"); ?>
		 <?php addStream("desperateshaco", "Desperate Shaco", "https://euw.op.gg/summoner/userName=Desperate+Shaco"); ?>
		 <?php addStream("igniteclone", "IgniteClone", "https://br.op.gg/summoner/userName=9318106720715Zed"); ?>
		 <?php addStream("shaclone", "Shaclone", "https://euw.op.gg/summoner/userName=clone+says+no"); ?>
	</div>

<!-- SHEN -->
	<div class="container" id="shen">
		<img src="img/80px-ShenSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("shending_help", "Shending Help", "https://euw.op.gg/summoner/userName=shendinghelp"); ?>
	</div>

<!-- SHYVANA -->
	<div class="container" id="shyvana">
		<img src="img/80px-ShyvanaSquare.png" alt="Icon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("veralion", "Veralion", "https://na.op.gg/summoner/userName=veralion"); ?>

	</div>

<!-- SINGED -->
	<div class="container" id="singed">
		<img src="img/80px-SingedSquare.png" alt="SINGOD"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("minishcap1", "Minishcap1", "https://na.op.gg/summoner/userName=Minishcap1"); ?>
		 <?php addStream("tommy309", "Tommy309", "https://na.op.gg/summoner/userName=tommy309"); ?>
		 <?php addStream("mynameiscbc", "CBC", "https://na.op.gg/summoner/userName=CBC"); ?>
		 <?php addStream("sirhcez", "SirhcEz", "https://na.op.gg/summoner/userName=chriseypoo+"); ?>
		 <?php addStream("dragaodekomodo", "Dragão de Komodo", "https://br.op.gg/summoner/userName=drag%C3%A3odekomodo"); ?>
		 <?php addStream("leo_chem", "Leo Chem", "https://br.op.gg/summoner/userName=twtv+leo+chem"); ?>
		 <?php addStream("proxyginger", "ProxyGinger", "https://euw.op.gg/summoner/userName=proxyginger"); ?>
	</div>

<!-- SION -->
	<div class="container" id="sion">
		<img src="img/80px-SionSquare.png" alt="Sion"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("thebausffs", "Thebausffs", "https://euw.op.gg/summoner/userName=thebausffs"); ?>
	</div>

<!-- SIVIR -->
	<div class="container" id="sivir">
		<img src="img/80px-SivirSquare.png" alt="Sivir"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- SKARNER -->
	<div class="container" id="skarner">
		<img src="img/80px-SkarnerSquare.png" alt="Skarner"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("merthos_", "Merthos", "https://na.op.gg/summoner/userName=m%C3%A9rthos"); ?>

	</div>

<!-- SONA -->
	<div class="container" id="sona">
		<img src="img/80px-SonaSquare.png" alt="Sona"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- SORAKA -->
	<div class="container" id="soraka">
		<img src="img/80px-SorakaSquare.png" alt="Soraka"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- SWAIN -->
	<div class="container" id="swain">
		<img src="img/80px-SwainSquare.png" alt="Swain"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- SYLAS -->
	<div class="container" id="sylas">
		<img src="img/80px-SylasSquare.png" alt="Sylas"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- SYNDRA -->
	<div class="container" id="syndra">
		<img src="img/80px-SyndraSquare.png" alt="Syndra"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- TAHM KENCH -->
	<div class="container" id="tahmkench">
		<img src="img/80px-Tahm_KenchSquare.png" alt="Tahm Kench"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- TALIYAH -->
	<div class="container" id="taliyah">
		<img src="img/80px-TaliyahSquare.png" alt="Taliyah"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- TALON -->
	<div class="container" id="talon">
		<img src="img/80px-TalonSquare.png" alt="Talon"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("yamikazexz", "Yamikaze", "https://na.op.gg/summoner/userName=Yamikaze"); ?>
		 <?php addStream("higuilty", "HiGuilty", "https://br.op.gg/summoner/userName=Gu%C3%AFlty+"); ?>
		 <?php addStream("eoba", "Eoba", "https://na.op.gg/summoner/userName=eoba"); ?>
		 <?php addStream("cawabanga", "Cawabanga", "https://br.op.gg/summoner/userName=cawabanga"); ?>
		 <?php addStream("talonlonfarm", "Talonlonfarm", "https://euw.op.gg/summoner/userName=TaIonlonfarm"); ?>
		 <?php addStream("dougzdisney", "DougzDISNEY", "https://br.op.gg/summoner/userName=dougz"); ?>
		 <?php addStream("toih", "Toih", "https://br.op.gg/summoner/userName=toih"); ?>
		 <?php addStream("fwiizone", "fwii", "https://na.op.gg/summoner/userName=fwii"); ?>
	</div>

<!-- TARIC -->
	<div class="container" id="taric">
		<img src="img/80px-TaricSquare.png" alt="Taric"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("tavinisboosted", "Tavin", "https://na.op.gg/summoner/userName=tavin"); ?>

	</div>

<!-- TEEMO -->
	<div class="container" id="teemo">
		<img src="img/80px-TeemoSquare.png" alt="Teemo"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("ipav999", "Ipav", "https://na.op.gg/summoner/userName=ipav"); ?>
		 <?php addStream("arthur_lanches", "Arthur Lanches", "https://br.op.gg/summoner/userName=arthur+lanches"); ?>
		 <?php addStream("manco1", "Manco1", "https://na.op.gg/summoner/userName=Manc0"); ?>
		 <?php addStream("xblotter", "xBlotter", "https://na.op.gg/summoner/userName=xblotter"); ?>
		 <?php addStream("yang2101y", "항 심", "https://www.op.gg/summoner/userName=%ED%95%AD%EC%8B%AC"); ?>
	</div>

<!-- THRESH -->
	<div class="container" id="thresh">
		<img src="img/80px-ThreshSquare.png" alt="Thresh"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- TRISTANA -->
	<div class="container" id="tristana">
		<img src="img/80px-TristanaSquare.png" alt="Tristana"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

	<!-- TRUNDLE -->
		<div class="container" id="trundle">
		<img src="img/80px-TrundleSquare.png" alt="Trundle"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- TRYNDAMERE -->
	<div class="container" id="tryndamere">
		<img src="img/80px-TryndamereSquare.png" alt="Tryndamere"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("foggedftw2", "Foggedftw2", "https://na.op.gg/summoner/userName=foggedftw2"); ?>
		 <?php addStream("yasukeh", "Yasukeh", "https://na.op.gg/summoner/userName=Yasukeh"); ?>
		 <?php addStream("kako", "Kako", "https://br.op.gg/summoner/userName=kakolitano"); ?>
		 <?php addStream("wyzdm", "WyzDM", "https://na.op.gg/summoner/userName=Trynds+R+Us"); ?>
		 <?php addStream("stktirano", "Tirano", "https://br.op.gg/summoner/userName=Tirano+e+Botando"); ?>
		 <?php addStream("goodguygarry", "GoodGuyGarry", "https://na.op.gg/summoner/userName=GOOD+GUY+GARRY"); ?>
	</div>

<!-- TWISTED FATE -->
	<div class="container" id="twistedfate">
		<img src="img/80px-Twisted_FateSquare.png" alt="Twisted fate"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("tfvini", "TF Vini", "https://br.op.gg/summoner/userName=TF+Vini"); ?>
	</div>

<!-- TWITCH -->
	<div class="container" id="twitch">
		<img src="img/80px-TwitchSquare.png" alt="Twitch"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("ratirl", "RATIRL", "https://euw.op.gg/summoner/userName=dynamitelarry63"); ?>
		 <?php addStream("alonixlol", "Alonix", "https://br.op.gg/summoner/userName=alonix"); ?>

	</div>

<!-- UDYR -->
	<div class="container" id="udyr">
		<img src="img/80px-UdyrSquare.png" alt="Udyr"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("metasolaray", "MetaSolaray", "https://na.op.gg/summoner/userName=metasolaray"); ?>

	</div>

<!-- VARUS -->
	<div class="container" id="varus">
		<img src="img/80px-VarusSquare.png" alt="Varus"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- VAYNE -->
		<div class="container" id="vayne">
		<img src="img/80px-VayneSquare.png" alt="Vayne"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("g4non_games", "Ganon", "https://br.op.gg/summoner/userName=Ganon"); ?>
	</div>

<!-- VEIGAR -->
	<div class="container" id="veigar">
		<img src="img/80px-VeigarSquare.png" alt="Veigar"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("djswagpants", "Djswagpants", "https://euw.op.gg/summoner/userName=DJ+MEMELORD"); ?>

	</div>

<!-- VEL'KOZ -->
	<div class="container" id="velkoz">
		<img src="img/80px-Vel'KozSquare.png" alt="Vel'Koz"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("azzapp", "Azzapp", "https://euw.op.gg/summoner/userName=azzapp"); ?>

	</div>

<!-- VI -->
	<div class="container" id="vi">
		<img src="img/80px-ViSquare.png" alt="Vi"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- VIKTOR -->
	<div class="container" id="viktor">
		<img src="img/80px-ViktorSquare.png" alt="Viktor"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("dunlol", "Dun", "https://na.op.gg/summoner/userName=dun%20"); ?>
		 <?php addStream("zane_prodigy", "Zane Prodigy", "https://na.op.gg/summoner/userName=zane+prodigy"); ?>
	</div>

<!-- VLADIMIR -->
	<div class="container" id="vladimir">
		<img src="img/80px-VladimirSquare.png" alt="Vladimir"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("elite500", "Elite500", "https://euw.op.gg/summoner/userName=elite500"); ?>
		 <?php addStream("paacha", "Pacha", "https://br.op.gg/summoner/userName=el+pacha+del+15"); ?>
	</div>

<!-- VOLIBEAR -->
	<div class="container" id="volibear">
		<img src="img/80px-VolibearSquare.png" alt="Volibear"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("cookiemanman", "Cookiemanman", "https://na.op.gg/summoner/userName=cookiemanman"); ?>

	</div>

<!-- WARWICK -->
	<div class="container" id="warwick">
		<img src="img/80px-WarwickSquare.png" alt="Warwick"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("lolparnellyx", "parnellyx", "https://na.op.gg/summoner/userName=CheIsea+Smile"); ?>

	</div>

<!-- WUKONG -->
	<div class="container" id="wukong">
		<img src="img/80px-WukongSquare.png" alt="Wukong"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("harambe", "Harambe", "https://na.op.gg/summoner/userName=harambe"); ?>
		 <?php addStream("braindeadwukongotp", "BraindeadWukongOTP", "https://euw.op.gg/summoner/userName=PissedeBloos"); ?>
	</div>

<!-- XAYAH -->
	<div class="container" id="xayah">
		<img src="img/80px-XayahSquare.png" alt="Xayah"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- XERATH -->
	<div class="container" id="xerath">
		<img src="img/80px-XerathSquare.png" alt="Xerath"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- XIN ZHAO -->
	<div class="container" id="xinzhao">
		<img src="img/80px-Xin_ZhaoSquare.png" alt="Xin Zhao"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- YASUO -->
	<div class="container" id="yasuo">
		<img src="img/80px-YasuoSquare.png" alt="Yasuo"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("yassuo", "Yassuo", "https://na.op.gg/summoner/userName=yassuo"); ?>
		 <?php addStream("blasteerlol", "BlasTeer", "https://br.op.gg/summoner/userName=blasteer"); ?>
		 <?php addStream("mikecomtrema", "mïke", "https://br.op.gg/summoner/userName=m%C3%AFke"); ?>
		 <?php addStream("srdogg", "SrDog", "https://br.op.gg/summoner/userName=srdog"); ?>
	</div>

<!-- YORICK -->
	<div class="container" id="yorick">
		<img src="img/80px-YorickSquare.png" alt="Yorick"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("ghoulguy", "Ghoul Guy", "https://na.op.gg/summoner/userName=ghoulguyyorick"); ?>
		 <?php addStream("tipsyz", "Tipsyz", "https://br.op.gg/summoner/userName=xtipsy+"); ?>

	</div>

<!-- YUUMI -->
	<div class="container" id="yuumi">
		<img src="img/80px-YuumiSquare.png" alt="Yuumi"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- ZAC -->
	<div class="container" id="zac">
		<img src="img/80px-ZacSquare.png" alt="Zac"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- ZED -->
	<div class="container" id="zed">
		<img src="img/80px-ZedSquare.png" alt="Zed"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("lacerration", "Lacerration", "https://na.op.gg/summoner/userName=laceration"); ?>
		 <?php addStream("llstylish", "LLStylish", "https://na.op.gg/summoner/userName=llstylish"); ?>
		 <?php addStream("zaionlol", "Zaion", "https://na.op.gg/summoner/userName=zaion"); ?>
		 <?php addStream("emceeheat", "EmceeHeat", "https://euw.op.gg/summoner/userName=420WeabooSlayer"); ?>
	</div>

<!-- ZIGGS -->
	<div class="container" id="ziggs">
		<img src="img/80px-ZiggsSquare.png" alt="Ziggs"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- ZILEAN -->
	<div class="container" id="zilean">
		<img src="img/80px-ZileanSquare.png" alt="Zilean"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <i>Sem mono por enquanto</i>

	</div>

<!-- ZOE -->
	<div class="container" id="zoe">
		<img src="img/80px-ZoeSquare.png" alt="Zoe"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("qshiroo", "Shiroo", "https://lan.op.gg/summoner/userName=Shiroo"); ?>

	</div>

<!-- ZYRA -->
	<div class="container" id="zyra">
		<img src="img/80px-ZyraSquare.png" alt="Zyra"> <br>
		<h2 id="monos">Monos:</h2>
		 <br>
		 <?php addStream("melyn", "Melyn", "https://na.op.gg/summoner/userName=melyn"); ?>

	</div>


	</div>

</body>
</html>