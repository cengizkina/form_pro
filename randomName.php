<?php
//echo randomName("en",5);
$class = New Random();
$class->randomName("tr",10);

class Random{
public $gecmis = array("ornek kelime");

function randomName($language, $adet)
{
	$isim = array("kedi","insan","deniz","masa","dolap","bilgisayar",
	"kapı","pencere","hafta","gece","gündüz","martı","kazak",
	"sarışın","sahil","merdiven","ahmet","yol","araba","ağaç",
	"yaprak","dal","adam","konuk","ahmet","toprak","altın",
	"elmas","yakut","zümrüt","koca","kadın","sarımsak",
	"soğan","sözlük","ayna","asker","bomba","etek","pantolon",
	"sprey","boya","kılıçbalığı","ahtapot","yengeç","denizaltı",
	"deniz","rüya");
    
	$sifat=array("anormal","bereketli","ekşi","iyi","inci","güzel",
	"hizli","yavaş","yakışıklı","kısa","uzun","mert","kahverengi","asil","suçlu",
	"cimri","kel","masmavi","uçan","kaç","yarım","bu","şu","aç",
	"sefil","saçma","şefkatli","seçkin","soğuk","sıcak","sarı",
	"mavi","yeşil","kırmızı","laci","mor","hoş","verimli","kötü",
	"nazik","kibar","gerzek","geveze","agresif","hileci","namussuz","mal",
	"dönek","mutlu","zengin","rahat","kokulu","şişman","yaşlı","genç","hasta");
	
	//Bu kelimeler https://gist.github.com/roktas/f0701df5f4149ffa87d9 adresinden alınmıştır :)
	$names = array("baby","child","man","main","house","sea","car",
	"anvil","arrow","axe","balloon","baseball","bathtub","bible",
	"bike","bikini","bleach","blouse","blowdryer","book","bookmark",
	"boombox","bottlecap","button","candle","candywrapper","canvas",
	"card","CD","cha","chainmail","chalk","charger","checkbook",
	"clarinet","claypot","clock","coffeemaker","comb","cookiejar",
	"cork","crayons","creditcard","cushion","deodorant","detergent",
	"dice","dollarbill","drum","eraser","eyeliner","facewash","flag",
	"flowers","flute","fork","gel","glasses","glowstick","gridpaper",
	"hairtie","hanger","hat","helmet","icecube","javelin","keychain",
	"kilt","kite","knife","lace","lampshade","legwarmers","lipgloss",
	"lotion","mallet","map","microphone","modelcar","mousepad","nail",
	"needle","outlet","paint","brush","passport","pencil","pepperspray",
	"photo","album","piano","picture","frame","piggy","bank","pillow",
	"pool","stick","puddle","quilt","radio","receipt","remote","control",
	"rock","rope","rubberband","rubber","duck","rug","sandpaper","scissors",
	"scotchtape","screw","seatbelt","sharpie","shield","shoelace","shovel",
	"sketchpad","slipper","soap","speakers","spear","sponge","spoon","sticky",
	"note","stockings","stone","suitcase","sunglasses","thermometer","thread",
	"tire","tissuebox","tobacco","toothpaste","toothpick","vase","wheelbarrow",
	"whiteout","zipper","abyss","atoll","aurora","autumn","badlands","beach",
	"briars","brook","canopy","canyon","cavern","chasm","cliff","cove","crater"
	,"creek","darkness","dawn","desert","dew","dove","drylands","dusk",
	"farm","fern","firefly","flowers","fog","foliage","forest","galaxy",
	"garden","geyser","grove","hurricane","iceberg","lagoon","lake","leaves",
	"marsh","meadow","mist","moss","mountain","oasis","ocean","peak","pebble",
	"pine","plateau","pond","reef","reserve","resonance","sanctuary","sands",
	"shelter","silence","smokescreen","snowflake","spring","storm","stream",
	"summer","summit","sunrise","sunset","sunshine","surf","swamp","temple",
	"thorns","tsunami","tundra","valley","volcano","waterfall","willow","winds","winter",
	"computer","pencil","pen","doctor","window","line");
	
    $adjectives = array("good","beatiful","long","small","nice",
	"micke","bad","slow","green","blue","hard,attractive",
	"average","beautiful","big","broad","broken","bumpy",
	"chubby","clean","colorful","colossal","crooked",
	"curved","cute","damaged","dark","deep","dirty","dry",
	"dull","dusty","fancy","fat","filthy","flat","gigantic",
	"gorgeous","graceful","great","grotesque","high","hollow",
	"huge","large","little","long","mammoth","massive",
	"miniature","misty","muddy","narrow","petite","plain",
	"precious","prickly","puny","quaint","round","scrawny",
	"shallow","shiny","short","skinny","slimy","slippery",
	"small","smooth","soft","steep","sticky","straight",
	"strange","tall","teeny","tiny","ugly","unusual","wide",
	"affectionate","amiable","arrogant","balmy","barren",
	"benevolent","billowing","blessed","breezy","calm",
	"celestial","charming","combative","composed","condemned",
	"divine","dry","energized","enigmatic","exuberant","flowing",
	"fluffy","fluttering","frightened","fuscia","gentle","greasy",
	"grieving","harmonious","hollow","homeless","icy","indigo",
	"inquisitive","itchy","joyful","jubilant","juicy","khaki",
	"limitless","lush","mellow","merciful","merry","mirthful",
	"moonlit","mysterious","natural","outrageous","pacific",
	"parched","placid","pleasant","poised","purring",
	"radioactive","resilient","scenic","screeching","sensitive",
	"serene","snowy","solitary","spacial","squealing","stark",
	"stunning","sunset","talented","tasteless","teal",
	"thoughtless","thriving","tranquil","tropical","undisturbed",
	"unsightly","unwavering","uplifting","voiceless","wandering",
	"warm","wealthy","whispering","withered","wooden","zealous");
	
	
	$sozluk = array(
	"tr" => array($isim, $sifat),
	"en" => array($names, $adjectives)
	);
	
	
	$i = 0;
	$isim_boyut = count($sozluk[$language][0]);
	$sifat_boyut = count($sozluk[$language][1]);
	$gecmis = [];
	
		while($i <= $adet)
		{
			$index_isim = rand(0,$isim_boyut-1);
			$index_sifat = rand(0,$sifat_boyut-1);
			$kelime = $sozluk[$language][1][$index_sifat]. " " . $sozluk[$language][0][$index_isim] . "</br>";
			if ($this->kelimeKontrol($kelime)) {
			array_push($this->gecmis,$kelime);
			$i++;
			echo $kelime;
			}
		}
}

function kelimeKontrol($kelime) {
	if (in_array($kelime, $this->gecmis)) {
		return false;
	}else{
		return true;
	}
}
}
?>
