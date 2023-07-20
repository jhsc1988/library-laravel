<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        ////////////////////////////////////////// Users
        User::create([
            'name' => 'Jasmin',
            'surname' => 'Husić',
            'email' => 'admin@library.com',
            'role'=> 'admin',
            'password'=> 'adminpass1234'
        ]);

        User::create([
            'name' => 'Hrvoje',
            'surname' => 'Horvat',
            'email' => 'user@library.com',
            'role'=> 'user',
            'password'=> 'userpass1234'
        ]);

        ////////////////////////////////////////// Listings
        Listing::create([
            'title'=>'Čudesa',
            'author'=>'Medel, Elena',
            'publisher'=>'Zagreb : Hena com, 2022',
            'language'=>'hrvatski',
            'annotation'=>'Prvi roman suvremene španjolske pjesnikinje priča je o ženama i njihovim izborima, o nedostatku novca, o prekarnosti, o klasnoj nejednakosti i ženskom pokretu u Španjolskoj. U djelu je opisana životna priča bake i unuke, koje su desetljećima razdvojene, ali sudbina im je slična. María rađa kćer izvan braka 1969. godine i mora ostaviti svoje dijete i rodni grad Córdobu kako bi potražila posao u Madridu. Alicia, rođena trideset godina kasnije, također bježi u Madrid nakon obiteljske tragedije koja ostavlja njezinu, nekoć bogatu obitelj, u rasulu. Dok se njihove fragmentirane priče isprepliću, a da pritom nikada ne dođu do potpuno oblikovane slike, životi dviju žena obilježeni su teškim životnim odlukama, samoubojstvom, ovrhama i neizmjernom tugom.',
            'ISBN'=>'978-953-259-426-3',
            'cover' =>'',
            'amount'=>3
        ]);

        Listing::create([
            'title'=>'Kad se vratim',
            'author'=>'Marco Balzano',
            'publisher'=>'Zagreb : Hena com, 2023',
            'language'=>'hrvatski',
            'annotation'=>'Odluku o prihvaćanju posla u inozemstvu Daniela je donijela brzo i provela naglo. Jednostavno, noću se iskrala iz kuće u kojoj je ostao spavati njezin nezaposleni suprug i dvoje djece tinejdžerske dobi i Rumunjsku zamijenila Italijom. U Milanu se zapošljava kao njegovateljica, prolazi teškim i neizvjesnim putem brojnih siromašnih žena koje se trude skromnom zaradom uzdržavati svoju obitelj. Roman time otvara ozbiljnu i tešku temu suvremene ženske ekonomske emigracije koja, radeći za strance iscrpljujuće a slabo plaćene poslove njege starih i nemoćnih te pomoći u domaćinstvu, pred velike izazove stavlja opstanak vlastitih obitelji. Pripovijedana iz perspektive majke, sina i kćeri, ova priča neuljepšano i istovremeno suosjećajno i nenametljivo odražava stvarnost brojnih žena.',
            'ISBN'=>'978-953-259-432-4',
            'cover' =>'',
            'amount'=>4
        ]);

        Listing::create([
            'title'=>'Pjesma nad pjesmama iz Ulice Palermo',
            'author'=>'Bjergfeldt, Annette',
            'publisher'=>'Zagreb : Hena com, 2022',
            'language'=>'hrvatski',
            'annotation'=>'Priču o tri generacije dansko-švedsko-ruske obitelji pripovijeda Esther, djevojka koja ima sestru blizanku Olgu i boležljivu stariju sestru Filippu. Njihov djed Hannibal oženio se ruskom akrobatkinjom Varinkom koja je nastupala u cirkusu svog oca. Estherin pradjed Igor je dao dopremiti slona iz zoološkog vrta u Poljskoj, ali je umjesto slona u Sankt Peterburg stigao nilski konj, što je završilo debaklom. Hannibal i Varinka napustili su poslije Prvoga svjetskog rata Rusiju i obiteljsko gnijezdo svili na danskom otoku Amageru, u Ulici Palermo, i dobili kćer Evu, Estherinu majku. Esther je mirnije naravi i nadarena za slikanje, dok će energičnija Olga otkriti da ima smisla za glazbu, tako da među djevojkama vlada neobično rivalstvo.',
            'ISBN'=>'978-953-259-427-0',
            'cover' =>'',
            'amount'=>5
        ]);

        Listing::create([
            'title'=>'San o Križaniću',
            'author'=>'Peričić, Denis',
            'publisher'=>'Zagreb : Hena com, 2022',
            'language'=>'hrvatski',
            'annotation'=>'Intrigantna figura burnog 17. stoljeća, Juraj Križanić, svećenik dominikanac, književnik, politolog, muzikolog, skladatelj, teolog, polihistor, utemeljitelj panslavističke ideje koje su utjecaji u variranim oblicima prisutni i danas, tema je romana kojim autor osvjetljuje različite aspekte vremena i okolnosti djelovanja naslovne osobe. Povijesni trenutak vjerskih srazova i previranja u kojemu je hrvatstvo gotovo posve nestalo na povijesnom poprištu, stvorio je čovjeka snažne motivacije za uspostavljanjem ravnoteže u geostrateškim tenzijama, koji je svojim pisanim radovima i posredničkim djelovanjem na različitim suočenim stranama fascinirao brojne proučavatelje, među kojima i Miroslava Krležu.',
            'ISBN'=>'978-953-259-437-9',
            'cover' =>'',
            'amount'=>2
        ]);

        Listing::create([
            'title'=>'San o Križaniću',
            'author'=>'Peričić, Denis',
            'publisher'=>'Zagreb : Hena com, 2022',
            'language'=>'hrvatski',
            'annotation'=>'Intrigantna figura burnog 17. stoljeća, Juraj Križanić, svećenik dominikanac, književnik, politolog, muzikolog, skladatelj, teolog, polihistor, utemeljitelj panslavističke ideje koje su utjecaji u variranim oblicima prisutni i danas, tema je romana kojim autor osvjetljuje različite aspekte vremena i okolnosti djelovanja naslovne osobe. Povijesni trenutak vjerskih srazova i previranja u kojemu je hrvatstvo gotovo posve nestalo na povijesnom poprištu, stvorio je čovjeka snažne motivacije za uspostavljanjem ravnoteže u geostrateškim tenzijama, koji je svojim pisanim radovima i posredničkim djelovanjem na različitim suočenim stranama fascinirao brojne proučavatelje, među kojima i Miroslava Krležu.',
            'ISBN'=>'978-953-259-437-9',
            'cover' =>'',
            'amount'=>2
        ]);

        Listing::create([
            'title'=>'Skriveno',
            'author'=>'Majerić, Ozren',
            'publisher'=>'Zagreb : Hena com, 2023',
            'language'=>'hrvatski',
            'annotation'=>'Debitantska knjiga zagrebačkog fotografa Ozrena Majerića, kratkopričaša koji se okušao i u pisanju putopisnih knjiga, nazvana je "Skriveno" i upravo se takvim čine i pripovjedači u ovoj zbirci priča. Iako tehnički ova knjiga predstavlja zbirku priča i sastoji se od 21, one su po mnogočemu povezane, a detalji koji bi čitatelju možda i izmaknuli, Majerićevo ih "profesionalno" oko itekako razotkriva. Njegovi su nam likovi bliski, i sami se možemo ogledati u njima, a situacije poznate. Prva i zadnja priča čine okvir ove zbirke priča nastavljajući se jedna na drugu čime ova zbirka postiže cjelovitu zaokruženost.',
            'ISBN'=>'978-953-259-435-5',
            'cover' =>'',
            'amount'=>2
        ]);

        Listing::create([
            'title'=>'Strah od barbara',
            'author'=>'Andonovski, Petar',
            'publisher'=>'Zagreb : Hena com, 2023',
            'language'=>'hrvatski',
            'annotation'=>'U malu izoliranu otočnu zajednicu krajnjeg europskog juga dolazi troje stranaca, žena i dvojica muškaraca. Nakon černobilske katastrofe neočekivani dolazak Ukrajinke Oksane i njezinih suputnika među otočanima izaziva nelagodu. Kontrastirajući naizmjence ispovijedi otočanke Pinelopi i došljakinje Oksane, autor gradi atmosferičnu priču u kojoj se stvara latentna netrpeljivost dok tjeskoba postupno raste.',
            'ISBN'=>'978-953-259-429-4',
            'cover' =>'',
            'amount'=>2
        ]);

        Listing::create([
            'title'=>'Šalaporte',
            'author'=>'Gregur, Marko',
            'publisher'=>'Zagreb : Hena com, 2023',
            'language'=>'hrvatski',
            'annotation'=>'Nezaposleni politolog Jerko vraća se zbog sprovoda iz Zagreba na rodni otok Prvić. Povratak u zatvorenu otočku zajednicu kojoj i pripada i ne pripada, probudit će Jerkove stare nelagode, a to će protresti njegove latentne umjetničke ambicije koje se odražavaju ponajviše u citatima iz književnosti kojima je obojen njegov unutarnji svijet. Našavši se sredini živopisnog otočkog mentaliteta, uz dodatnu okolnost da zbog pandemije mora neplanirano ondje ostati dulje nego što je namjeravao, Jerko će se morati "presložiti" i redefinirati svoj identitet.',
            'ISBN'=>'978-953-259-434-8',
            'cover' =>'',
            'amount'=>2
        ]);

        Listing::create([
            'title'=>'Te sitnice',
            'author'=>'Keegan, Claire',
            'publisher'=>'Zagreb : Hena com, 2022',
            'language'=>'hrvatski',
            'annotation'=>'Skromni trgovac ugljenom i otac pet djevojčica tijekom redovne dostave ugljena otkrije tajnu koju uspješno skriva obližnji samostan. Prizor koji je vidio pratit će ga dok obavlja zadnje pripreme prije Božića i dostavlja posljednje narudžbe te godine. Atmosferična, napeta i do samog kraja neizvjesna priča navodi na razmišljanje o odgovornosti pojedinca i zajednice. Priče o ženama i djeci Magdalenskih praonica nepoznate su, obavijene tajnama i tračevima, šutnjom odgovornih i okretanju glava mještana. Roman je nadahnut istinitim događajima, a autorica za njega osvojila nekoliko prestižnih nagrada.',
            'ISBN'=>'978-953-259-428-7',
            'cover' =>'',
            'amount'=>3
        ]);

        Listing::create([
            'title'=>'Berlinsko djetinjstvo oko 1900',
            'author'=>'Benjamin, Walter',
            'publisher'=>'Zagreb : Mala zvona, 2021',
            'language'=>'hrvatski',
            'annotation'=>'Knjiga započeta 1932. godine, najintimnija knjiga ovog utjecajnog mislioca 20. stoljeća, niz je vinjeta, meditativnih "misaonih slika", iz autorovog rodnog grada Berlina. Kako kaže u predgovoru, započeo ju je pisati u inozemstvu kada mu je postajalo jasno da će se "morati za duže vrijeme a možda i zauvijek oprostiti od grada" u kojem je rođen... Nekoliko je rukopisnih verzija, a ovo izdanje je "posljednja autorova verzija" iz 1938. kojoj su pridodani neki stariji fragmenti.',
            'ISBN'=>'978-953-8313-36-3',
            'cover' =>'',
            'amount'=>4
        ]);

        Listing::create([
            'title'=>'Bit ću ondje',
            'author'=>'Sin, Kyong-suk',
            'publisher'=>'Zagreb : Hena com, 2022',
            'language'=>'hrvatski',
            'annotation'=>'Ljubavna priča bez sretnog završetka počinje 1980-tih u Južnoj Koreji, u dramatičnim okolnostima studentskih prosvjeda protiv političke diktature. Vraćajući se uz pomoć zapisa jednog od prijatelja u te dane, pripovjedačica evocira poznanstvo s dvoje mladih kolega s kojima se intenzivno družila ispisujući kontemplativnu prozu o duboko proživljenim emocijama, gubitku i sazrijevanju.',
            'ISBN'=>'978-953-259-389-1',
            'cover' =>'',
            'amount'=>3
        ]);

        Listing::create([
            'title'=>'Bračni dnevnik',
            'author'=>'Schumann, Clara Josephine',
            'publisher'=>'Zagreb : Mala zvona, 2021',
            'language'=>'hrvatski',
            'annotation'=>'Bračni dnevnik kojeg su u prvim godinama braka naizmjenično pisali Clara i Robert Schumann pruža uvid kako u bračnu intimu ovoga čuvenog glazbenog para, tako i u lajpcišku glazbenu scenu 40.-ih godina 19. stoljeća. Kroz dom Schumannovih prolaze kompozitori, svirači, pjevači, kao i druge značajne osobe iz glazbenog i društvenog života toga doba. Supružnici iskazuju veliku međusobnu ljubav i privrženost, no isto tako i dileme oko vlastitih glazbenih karijera. U Clari se bore kontradiktorni osjećaji i dužnosti supruge i majke s velikim poteškoćama bavljenja vlastitom umjetnošću. Ovaj dnevnik također je i zanimljivo svjedočanstvo vremena te preporuka onima koji vole klasičnu glazbu.',
            'ISBN'=>'978-953-8313-40-0',
            'cover' =>'',
            'amount'=>7
        ]);

        Listing::create([
            'title'=>'Esperel, grad malih čuda',
            'author'=>'Lovrenčić, Sanja',
            'publisher'=>'Zagreb : Mala zvona, 2013',
            'language'=>'hrvatski',
            'annotation'=>'Prva priča započinje u "Dućanu na tri kata", čudnom dućanu u kojem je troje djece zarobljeno. Je li gospodinTomas bio stari vještac pa ih je namjerno zarobio? Bila je to idealna prilika da budu s lutkama. Kad je pala noć, lutke su oživjele i pustolovina započela. U sljedećoj priči o Rijeci, Rijeka iznenada postaje žuta i stanovnici šalju Brzog Martina da to istraži. U priči Tri pekara koji su i braća, nestaje jedan po jedan. U priči o poštaru Maksu doznaje se što je sve doživio na putu za Valungrad, kako je poželio letjeti i kako je postao nevidljivi poštar... Priče se nastavljaju, u njima pustolovine. Priče o stanovnicima Esperela, njihovim tajnama, neobičnim željama i događanjima.',
            'ISBN'=>'978-953-7760-35-9',
            'cover' =>'',
            'amount'=>2
        ]);

        Listing::create([
            'title'=>'Flush, biografija',
            'author'=>'Woolf, Virginia',
            'publisher'=>'Zagreb : Mala zvona, 2021',
            'language'=>'hrvatski',
            'annotation'=>'Riječ je o biografiji jednog psa. Autorica iz perspektive koker-španijela, Flusha, opisuje viktorijansko doba i odnos s vlasnicom, velikom pjesnikinjom - Elizabeth Barrett Browning. Prikazuje uloge intelektualki tog vremena u društvu, njihov položaj i odnos društva prema njihovom radu, pogotovo spisateljskom. Progovara o povijesti, društvenim konvencijama i socijalnoj pravdi.',
            'ISBN'=>'978-953-8313-37-0',
            'cover' =>'',
            'amount'=>6
        ]);

        Listing::create([
            'title'=>'Pogledaj što je mačka donijela',
            'author'=>'Tomić, Ante',
            'publisher'=>'Zagreb : Hena com, 2017',
            'language'=>'hrvatski',
            'annotation'=>'Hrvatski književnik i novinar ovim djelom predstavlja četrnaest istovremeno smiješnih i turobnih priča. Radnje se odvijaju u provincijama, većinom Hrvatskim. Događaji su tipični za područje u koje su smješteni. Glavna vodilja svih priča je nečiji neočekivani ili manje očekivani dolazak, koji sa sobom nosi razne spletke, očekivanja, prisjećanja na prošlost, smrt, ludnicu, pa čak i ubojstvo. Svaka priča ima glazbenu podlogu predstavljenu vrhunskom svjetskom glazbom.',
            'ISBN'=>'978-953-259-397-6',
            'cover' =>'',
            'amount'=>2
        ]);

        Listing::create([
            'title'=>'Sestrinska zvona',
            'author'=>'Mytting, Lars',
            'publisher'=>'Zagreb : Hena com, 2021',
            'language'=>'hrvatski',
            'annotation'=>'Mladi pastor Kai Schweigaard u zabačenom norveškom selu Butangen pokušava provesti promjene koje bi potaknule vjeru i unaprijedile tu sredinu, još vezanu za stara nordijska vjerovanja i pučka praznovjerja. Kraj je 19. stoljeća i uvjeti života na dalekom, hladnom sjeveru iznimno su teški. Obitelji su mnogobrojne, teško je namaknuti hranu za ljude i stoku kroz duge mjesece pod snijegom i ledom. Kad se jedna mještanka smrzne u crkvi za vrijeme mise, pastor odluči sagraditi novu i topliju crkvu. Stara seoska crkva na drvenim stupcima, tzv. stavkirke autohtona je srednjovjekovna građevina za koju pokazuju interes u Njemačkoj. Šalju nadarenog studenta arhitekture s Akademije likovne umjetnosti u Dresdenu, Gerharda Schönauera sa zadatkom da precrta crkvu, rastavi je i preseli na njemačko tlo, po nalogu i uz financijsku potporu kraljice Saske. Pastor i student počnu raditi na tome zadatku, ali između njih staje djevojka Astrid Hekne koja se žestoko bori da zvona te crkve ostanu u selu. Zvona su poklon predaka obitelji Hekne i uz njih se vežu legende koje utječu na ljude toga kraja. Oba muškarca zaljubljuju se u Astrid i predodređuju njezinu tragičnu sudbinu. Ovo povijesno štivo napeta je, atmosferična priča surovog podneblja koje zapečaćuje sudbine svojih žitelja, napose troje mladih ljudi koji se nađu u vrtlogu ljubavi, dužnosti, časti i izdaje.',
            'ISBN'=>'978-953-259-390-7',
            'cover' =>'',
            'amount'=>5
        ]);

        Listing::create([
            'title'=>'Što je muškarac bez brkova',
            'author'=>'Tomić, Ante',
            'publisher'=>'Zagreb : Hena com, 2017',
            'language'=>'hrvatski',
            'annotation'=>'Prvi roman ovoga autora do sada poznatog čitateljstvu po zbirci pripovijedaka u carverovskoj maniri "Zaboravio sam gdje sam parkirao" ( Split,1997). Tomić s puno simpatija predstavlja paletu živopisnih likova i oslikava tipičnu seosku sredinu Dalmatinske zagore. Zdrav i svjež humor u romanu se ne očituje toliko u situacijama kroz koje likovi prolaze, nego više proizilazi iz sočnog i živopisnog jezika te primitivnog mentaliteta ljudi, ispod čije se grubosti najčešće krije dobrota.',
            'ISBN'=>'978-953-259-396-9',
            'cover' =>'',
            'amount'=>1
        ]);

        Listing::create([
            'title'=>'Teorija čudnovatosti',
            'author'=>'Horakova, Pavla',
            'publisher'=>'Zagreb : Hena com, 2021',
            'language'=>'hrvatski',
            'annotation'=>'Djelo ove češke spisateljice, radijske novinarke i književne provoditeljice, njezin je prvi roman za odrasle. Glavni lik je britka i duhovita mlada znanstvenica Ada Sabová, zaposlenica Zavoda za interdisciplinarne studije čovjeka. U krizi je srednjih godina, iza sebe ima cijeli niz propalih veza, život ispunjen živopisnim snovima i jednoličnom svakodnevicom. Jutarnju kavu pije s kolegicom knjižničarkom Valerie Hauserovom, nekadašnjom ravnateljicom i najobrazovanijom osobom u Zavodu, čiji je sin Kaspar nestao. Ada, prateći neobične podudarnosti, počinje tragati za njim, nastavljajući uočavati niz slučajnosti s određenim pravilnostima i povezanostima, nastoji ih definirati ispisujući "teoriju čudnovatosti". Objavljen 2018. godine, roman je nagrađen češkom književnom nagradom Magnesia Litera.',
            'ISBN'=>'978-953-259-388-4',
            'cover' =>'',
            'amount'=>3
        ]);

        Listing::create([
            'title'=>'Veličanstveni Poskokovi',
            'author'=>'Tomić, Ante',
            'publisher'=>'Zagreb : Hena com, 2016',
            'language'=>'hrvatski',
            'annotation'=>'Roman popularnog i plodnog hrvatskog književnika, njegov prvi triler s ljubavnom pričom. Autor i u ovom romanu tematizira tajkunizaciju, korupciju i kriminal. Naime, priča prati najbogatijeg čovjeka u zemlji, Tomislava Poskoka i njegovog sina Zdeslava, koji su odlično organizirani i do srži pokvareni kriminalci, nimalo smiješni. Zato je autor svoj uobičajeni humor provukao kroz komentare i opise.',
            'ISBN'=>'978-953-259-399-0',
            'cover' =>'',
            'amount'=>2
        ]);
    }
}
