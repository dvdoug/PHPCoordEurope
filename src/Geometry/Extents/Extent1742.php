<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Norway - zone II.
 * @internal
 */
class Extent1742
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [9.6562166666667, 63.944707384142], [9.655011240315, 63.944248556376], [9.6021026706724, 63.922077615819], [9.5984907451725, 63.920490819419], [9.5935859210963, 63.91808110728], [9.5900309355114, 63.916114806523], [9.5559473587043, 63.896222643964], [9.5513096126973, 63.893254359469], [9.547566354762, 63.890461037012], [9.5442425110974, 63.887563490241], [9.5413522207391, 63.884574153408], [9.5389077502803, 63.881505850959], [9.5369194432423, 63.878371742215], [9.5353956779195, 63.875185264677], [9.5343428338399, 63.871960076194], [9.5337652669453, 63.868709996265], [9.5336484022441, 63.86601235522], [9.5354388023661, 63.761978603657], [9.5358229593806, 63.758438781592], [9.5366731859631, 63.755197597038], [9.5379940391627, 63.75198721218], [9.5397797163992, 63.748821361856], [9.5420224334025, 63.745713586314], [9.5447124598934, 63.742677173516], [9.5478381634009, 63.739725102582], [9.5503337841246, 63.737716859121], [9.5197879813339, 63.725157661289], [9.5150488054004, 63.723086824549], [9.5101827261127, 63.720674631743], [9.5056810228142, 63.718123884871], [9.501562934858, 63.715445538614], [9.497599816131, 63.712449106025], [9.474812081452, 63.693536099403], [9.4650832038969, 63.687404820094], [9.4412226212087, 63.68888605363], [9.4327600637218, 63.689225794969], [9.4254994209198, 63.689282068876], [9.4145373172484, 63.688960760699], [9.3700649152229, 63.686992546277], [9.3656983326511, 63.690055030067], [9.3613426863653, 63.692674654925], [9.3566155459397, 63.695161447794], [9.3534726119561, 63.696647436057], [9.1487421834998, 63.789122994427], [9.1423281664649, 63.791732760122], [9.1365817658989, 63.793751795722], [9.1305538495558, 63.795598765314], [9.1242702889103, 63.797265729328], [9.117758068812, 63.798745520964], [9.1110451706037, 63.800031777374], [9.104160450671, 63.801118967355], [9.0971335149756, 63.802002415439], [9.0900836602047, 63.802671225658], [9.0761256492259, 63.80378525809], [9.068860420235, 63.804253615915], [9.0615896252226, 63.804505976089], [9.0543000170358, 63.804544798334], [9.0470229689716, 63.804369916807], [9.040208201673, 63.804010413502], [9.0333344002101, 63.80355085466], [9.0349352690834, 63.807360980443], [9.0383909756225, 63.819673222913], [9.0390305957997, 63.823384166123], [9.0390759284664, 63.826645186986], [9.0385985185991, 63.83009317222], [9.0195794374581, 63.91501158816], [9.0187478919567, 63.917873893575], [9.0173619513988, 63.921079388809], [9.0155086050901, 63.924238751169], [9.0131956507832, 63.927338434718], [9.0104328657833, 63.930365145473], [9.007231967268, 63.933305898684], [9.0036065640712, 63.936148074845], [8.9995721000979, 63.938879474188], [8.9951457895888, 63.941488369425], [8.9903465444809, 63.943963556495], [8.985194894163, 63.9462944031], [8.9797128979503, 63.948470894799], [8.9739240506491, 63.950483678467], [8.9678531816153, 63.952324102914], [8.9609923347638, 63.954112464655], [8.9498927476285, 63.95674409067], [8.9444042338701, 63.957960044781], [8.9376469389179, 63.959238587801], [8.9307181220697, 63.96031787815], [8.9236475801963, 63.961193274222], [8.9164657287732, 63.961861011202], [8.9092034692569, 63.962318217463], [8.9018920542214, 63.962562927077], [8.8945629508707, 63.962594088372], [8.8872477035608, 63.962411568498], [8.8799777959682, 63.962016153992], [8.8727845135414, 63.961409547318], [8.8656988068692, 63.960594359424], [8.8614381274892, 63.959995490557], [8.8503035083452, 63.958319810929], [8.8463728870737, 63.957687466992], [8.7921410939705, 63.948162463477], [8.78785294716, 63.94736113456], [8.7812758486723, 63.945942099752], [8.7749244397654, 63.944333819659], [8.7688259976221, 63.942543210477], [8.7630066973607, 63.94057797101], [8.7574914989158, 63.938446549166], [8.7523040394625, 63.936158105223], [8.7474665318632, 63.933722472036], [8.7435104266884, 63.931462590631], [8.6902848203921, 63.899120989816], [8.6859620288461, 63.896265291917], [8.6823009428542, 63.89345195743], [8.6788130457798, 63.890288846786], [8.5824067994052, 63.865125395967], [8.5793372699443, 63.864338301379], [8.5211908340718, 63.853700051805], [8.2821683434288, 63.850097226203], [8.2481199935034, 63.848405429023], [8.2444885536175, 63.84819748893], [8.230768565824, 63.847304920144], [8.2226955651063, 63.846614951791], [8.2156499302432, 63.845779689353], [8.2126728803536, 63.845359007337], [8.190150124818, 63.842017710769], [8.1862230618458, 63.841397909643], [8.1813648409382, 63.84052584009], [8.1384307750883, 63.83227404456], [8.1309640540454, 63.830651672521], [8.1246618680587, 63.829025464826], [8.118614396145, 63.82721766614], [8.1128475925614, 63.825236048926], [8.1073861899279, 63.823089131209], [8.1022535926718, 63.820786139538], [8.0974717765086, 63.818336968908], [8.0950397117303, 63.816955545328], [8.0834312701438, 63.810093736493], [8.0784237199359, 63.806782316856], [8.0748121920717, 63.803959766613], [8.0716232304257, 63.801036432524], [8.0688703920633, 63.798024858295], [8.0665653512526, 63.794937962493], [8.0647178514362, 63.79178898284], [8.0633356656952, 63.788591419203], [8.062424565841, 63.78535897552], [8.0619883002207, 63.782105500929], [8.0620285802927, 63.778844930336], [8.0625450759814, 63.775591224694], [8.0635354197865, 63.772358311252], [8.0649952195842, 63.769160024006], [8.0669180800151, 63.766010044639], [8.0692956323313, 63.762921844168], [8.0721175725254, 63.759908625562], [8.075371707545, 63.756983267577], [8.0790440093546, 63.754158270013], [8.083118676589, 63.751445700662], [8.0853318804745, 63.750117585471], [8.1190362328482, 63.730554655403], [8.1212795847921, 63.729293708203], [8.1260987552471, 63.72683913269], [8.1312629153573, 63.724530021252], [8.1367499541001, 63.722376228839], [8.1425363982425, 63.720386945746], [8.1485975124533, 63.718570658821], [8.154907404479, 63.716935115653], [8.1614391349499, 63.71548729191], [8.1681648313602, 63.714233361945], [8.1750558057589, 63.713178672786], [8.1820826756789, 63.712327721628], [8.1892154878137, 63.711684136894], [8.1965450902018, 63.711245231595], [8.2091454731155, 63.710686454962], [8.216155945054, 63.710475240719], [8.2234229147968, 63.710466048677], [8.2306729373035, 63.710669801526], [8.2378751218672, 63.711085632176], [8.2449987783891, 63.711711769585], [8.252013546233, 63.712545546176], [8.2588895217859, 63.71358340903], [8.2655973842139, 63.714820934805], [8.2721085189226, 63.716252848318], [8.2746118516982, 63.716868609502], [8.4934670047284, 63.721647873611], [8.5003790010372, 63.723327741828], [8.5030014015902, 63.723288298725], [8.518512683332, 63.719226308054], [8.5218753852054, 63.718380438216], [8.5283992519457, 63.716925577143], [8.5351181853694, 63.715664407984], [8.5420035259249, 63.714602308632], [8.5490611859674, 63.713124926049], [8.5445851410808, 63.712248936308], [8.5374592586566, 63.711627338172], [8.5304423072335, 63.710797394872], [8.5271504357235, 63.710330327916], [8.5160248121839, 63.708664902797], [8.5124392590577, 63.708096998954], [8.5057309478056, 63.706861485518], [8.4991383954129, 63.705411433304], [8.2793179793706, 63.700666120035], [8.2731984993461, 63.699085092781], [8.2671680425858, 63.697283110797], [8.2607919837802, 63.695074102369], [8.1934733406001, 63.669538300146], [8.1892800870542, 63.667860708691], [8.186233148623, 63.666526656957], [8.1556799322496, 63.652611158806], [8.1526582596299, 63.651171521362], [8.1114408788203, 63.630268194941], [8.1086006747651, 63.628766084463], [8.1042162926279, 63.626181663565], [8.1002193975405, 63.62347263916], [8.09662704258, 63.620650641687], [8.0934545304024, 63.617727783294], [8.0902550984791, 63.614137052538], [8.0809419126358, 63.601888436351], [8.0783453479919, 63.597608373655], [8.0754034458734, 63.598907282097], [8.0702573478693, 63.601214688588], [8.0647883771633, 63.603366282243], [8.0590199756863, 63.605352817099], [8.0529768875179, 63.607165755007], [8.0466850521998, 63.60879730273], [8.0401714925991, 63.610240445831], [8.0334641978182, 63.61148897919], [8.0265920016775, 63.612537534016], [8.0239576507976, 63.612880820433], [8.004902067169, 63.615248195048], [8.0005282022827, 63.615748435305], [7.9934144768617, 63.616383506723], [7.9862262803218, 63.616807717829], [7.9778147528862, 63.617030644888], [7.9162608671077, 63.617323573306], [7.9108295067645, 63.617287149284], [7.882454383783, 63.616721156787], [7.8763232622688, 63.61652092954], [7.8691490677532, 63.616088564093], [7.8620562289564, 63.615445439058], [7.8550752609463, 63.614594322419], [7.8482361902453, 63.613538876601], [7.8415684239659, 63.612283642478], [7.8351006218039, 63.610834019561], [7.8291807343949, 63.609286419753], [7.6202376486063, 63.550407221139], [7.6141170417622, 63.548535140027], [7.6084367584454, 63.546535447662], [7.6030617029894, 63.54437143937], [7.5980149072905, 63.542052414593], [7.5933179772944, 63.539588336613], [7.5889910005769, 63.53698978933], [7.5850524607738, 63.534267931382], [7.5815191592195, 63.531434447828], [7.5784061441127, 63.5285014996], [7.5757266474959, 63.525481670961], [7.5734920302923, 63.522387915191], [7.5717117356057, 63.519233498742], [7.5703932504505, 63.516031944119], [7.5695420760367, 63.512796971716], [7.5691617066978, 63.509542440888], [7.5693965435707, 63.50529477311], [7.5742117567007, 63.479644534727], [7.5753817337471, 63.475776535516], [7.5768772875732, 63.472582993194], [7.5788305278995, 63.469439172912], [7.5809521718837, 63.466687771499], [7.5914000557759, 63.454303165917], [7.5939376499813, 63.451567654258], [7.6033551355468, 63.442202853453], [7.6068391790845, 63.439070426212], [7.6105147570188, 63.436256418931], [7.6145867325809, 63.433556012848], [7.6190376149825, 63.430980740667], [7.6238483100904, 63.428541598106], [7.6289982027709, 63.426248997356], [7.634465245412, 63.424112723054], [7.6402260522372, 63.422141890936], [7.6462559990129, 63.420344909352], [7.6525293277271, 63.418729443788], [7.6590192558072, 63.417302384545], [7.6656980894248, 63.416069817693], [7.6725373404285, 63.415036999441], [7.6798047573276, 63.414178072445], [7.7544322244725, 63.406649386921], [7.7609074279384, 63.406085794467], [7.7680480600412, 63.405671695036], [7.7756231183005, 63.404934398717], [7.7769876806322, 63.400638052811], [7.7784575103492, 63.397442380258], [7.7803842262294, 63.394295828781], [7.7827594474537, 63.3912118547], [7.785572884249, 63.388203642945], [7.7888123839677, 63.385284050955], [7.7924639849101, 63.38246555404], [7.7965119776302, 63.379760192415], [7.8009389734343, 63.37717952014], [7.8057259797606, 63.374734556171], [7.8108524821011, 63.372435737715], [7.8162965321067, 63.370292876094], [7.8220348414908, 63.368315115285], [7.8280428813369, 63.366510893314], [7.8342949863851, 63.364887906648], [7.840764463872, 63.36345307774], [7.8474237064679, 63.362212525857], [7.8542443088587, 63.361171541293], [7.8613240979504, 63.360044145742], [7.7589448993419, 63.31461336275], [7.7545188619543, 63.312558341327], [7.7498437581472, 63.310099079287], [7.7455350148153, 63.307504948906], [7.7416110390383, 63.304787089689], [7.7380885715965, 63.301957169387], [7.7349826163643, 63.299027333531], [7.7325442652775, 63.296303167641], [7.7246804534609, 63.28670578271], [7.7223278418025, 63.283467579442], [7.7205444888575, 63.28031476528], [7.7192190256268, 63.27711434285], [7.7183569860483, 63.273880027763], [7.7179619138386, 63.270625676666], [7.7180353498502, 63.26736522779], [7.7185768280568, 63.264112641223], [7.7195838801427, 63.260881839159], [7.7210520486281, 63.25768664639], [7.7229749084337, 63.254540731274], [7.7253440967488, 63.251457547449], [7.7281493510344, 63.248450276525], [7.7318773401814, 63.245145675349], [7.7084994567744, 63.243742499124], [7.6140958427307, 63.239272928814], [7.6070527078697, 63.238830852599], [7.600053710994, 63.238176352307], [7.5931668242737, 63.237314046469], [7.5864216669995, 63.23624764541], [7.5798472399752, 63.23498173683], [7.5731293494768, 63.233436061449], [7.5710237093343, 63.232905287829], [7.5583769225747, 63.236217643563], [7.5546769562218, 63.237143869472], [7.5482213812873, 63.238566805191], [7.5415774985795, 63.239794552143], [7.5347738688538, 63.240821831253], [7.5278397495194, 63.241644225238], [7.5208049672366, 63.242258197842], [7.5136997878955, 63.242661109227], [7.5065547845729, 63.242851227468], [7.4994007040724, 63.242827736074], [7.4922683326671, 63.242590737534], [7.4851883616619, 63.24214125284], [7.4781912533981, 63.241481217013], [7.4713071083159, 63.240613470636], [7.4652690550475, 63.239664288242], [7.2593698181641, 63.203994481637], [7.2524651650326, 63.202652982782], [7.2461123040329, 63.201179595164], [7.2399875920932, 63.199518919966], [7.2341173258087, 63.197678097632], [7.2285266940707, 63.195665041642], [7.223239669326, 63.193488404097], [7.2182789043744, 63.191157538123], [7.2136656351538, 63.188682457256], [7.209419589932, 63.186073792014], [7.2055589052941, 63.183342743825], [7.2021000492733, 63.180501036536], [7.1990577519438, 63.17756086571], [7.1964449437495, 63.174534845943], [7.1937294557861, 63.170492957734], [7.1880296326725, 63.160017480851], [7.1809095212619, 63.160627354034], [7.173819122272, 63.161014656786], [7.1666913600936, 63.161189096625], [7.1595569069276, 63.161149924582], [7.1524464640137, 63.160897310662], [7.1453906275741, 63.160432343078], [7.1384197552446, 63.159757023478], [7.1310347862874, 63.158796102839], [7.1229166666667, 63.157570839375], [7.1229166666667, 62.840671079841], [7.1229166666667, 62.523771320307], [7.1229166666667, 62.206871560773], [7.1229166666667, 61.889971801239], [7.1229166666667, 61.573072041705], [7.1229166666667, 61.256172282171], [7.1229166666667, 60.739272522637], [7.1229166666667, 60.422372763103], [7.1229166666667, 60.105473003569], [7.1229166666667, 59.788573244035], [7.1229166666667, 59.471673484501], [7.1229166666667, 59.154773724967], [7.1229166666667, 58.837873965433], [7.1229166666667, 58.520974205899], [7.1229166666667, 58.204074446365], [7.1229166666667, 57.887174686831], [7.2306865386898, 57.865997780758], [7.2366657400833, 57.864945326353], [7.2426040402225, 57.864127280148], [7.2486284102882, 57.863517281598], [7.2527821413081, 57.863221434885], [7.3746951592862, 57.855957076326], [7.3817776482809, 57.855711953821], [7.3879040111346, 57.855732605753], [7.3940469233023, 57.855968209731], [7.4384669069881, 57.85845713218], [7.4440913847777, 57.858863461723], [7.475620708925, 57.861658373283], [7.4827814486241, 57.862457447162], [7.545625882607, 57.871184307169], [7.5495850974811, 57.871783258483], [7.5553738170767, 57.872844433612], [7.5610187299877, 57.874104902149], [7.5664957365842, 57.875559286734], [7.5717814455802, 57.87720138182], [7.5768532731374, 57.879024179872], [7.58168953871, 57.881019900961], [7.5862695572353, 57.883180025642], [7.5905737272866, 57.885495330982], [7.5936666562078, 57.887363892672], [7.6144934754254, 57.900594902335], [7.7313713309414, 57.918899907416], [7.8521050781175, 57.930400869337], [8.0452158385125, 57.949875930049], [8.0489018268626, 57.950285755859], [8.0548338463846, 57.951121155114], [8.0606492757304, 57.952160835417], [8.0663232959492, 57.953400361998], [8.071831684323, 57.954834446901], [8.0771509168234, 57.956456971288], [8.0822582677551, 57.958261011267], [8.0871319061809, 57.960238867127], [8.0917509887261, 57.962382095879], [8.0960957483809, 57.96468154696], [8.1001475789228, 57.967127400951], [8.1045364506656, 57.970199947273], [8.1104758238269, 57.970508796836], [8.1166213534733, 57.970496486456], [8.1227538884372, 57.970697357835], [8.1288472738143, 57.971110555257], [8.1348755194685, 57.971734317255], [8.1408129095772, 57.972565984013], [8.1466341110808, 57.973602008571], [8.1523142805985, 57.974837971762], [8.1578291693811, 57.976268600847], [8.1631552258746, 57.977887791756], [8.1682696954778, 57.979688634847], [8.173150717084, 57.981663444088], [8.1777774160102, 57.983803789535], [8.1821299929274, 57.986100532979], [8.1861898084175, 57.988543866615], [8.189939462802, 57.991123354579], [8.1933628708962, 57.993827977174], [8.1964453313717, 57.996646177611], [8.1991735904131, 57.99956591108], [8.2020231856398, 58.003290430722], [8.2334368302585, 58.051686928959], [8.2355497350559, 58.055661189274], [8.2367634317694, 58.058858415799], [8.2375796869198, 58.062091569228], [8.2379697996489, 58.064999072305], [8.2385471217148, 58.072325949351], [8.5425150481715, 58.108478983315], [8.6365364502051, 58.122325691715], [8.643102152554, 58.123457027092], [8.6488151974434, 58.124680765181], [8.6543638157606, 58.126099531972], [8.6597243129015, 58.127707274132], [8.6648737881284, 58.129497131024], [8.6697902317144, 58.13146146368], [8.6744526184878, 58.133591887077], [8.6797760794788, 58.136415295687], [8.8624287663407, 58.243802823449], [8.8646672516366, 58.245162586784], [8.8684759344399, 58.247729129574], [8.8719576827614, 58.25042194807], [8.8750975462213, 58.253229536403], [8.8778820256714, 58.256139895618], [8.8802991319097, 58.25914058464], [8.8827401489441, 58.26293297104], [8.9052534758245, 58.30524565145], [8.9072199198201, 58.310247743056], [8.9413319241361, 58.320560807603], [8.9463376237109, 58.322048742573], [8.9515281114849, 58.323827974606], [8.9564856501084, 58.325782168081], [8.9604403569286, 58.327546188228], [8.9949730906928, 58.343817639626], [8.9997809237493, 58.346273238694], [9.0039208525665, 58.34869844271], [9.0086145079193, 58.351901711564], [9.1261376785731, 58.44165119736], [9.1561703328567, 58.458481002064], [9.1699946110932, 58.461751418164], [9.1746259709291, 58.462927028896], [9.2083895639783, 58.472138915368], [9.2140586812503, 58.47381804882], [9.3343044652069, 58.512857178694], [9.3383348771327, 58.514237792612], [9.343338830766, 58.516178169369], [9.3480890412243, 58.518285882443], [9.3525651839581, 58.520551933707], [9.3565845755154, 58.522866067496], [9.5128324398048, 58.618379285502], [9.5168073764818, 58.62097823527], [9.5203720333984, 58.623654799093], [9.5228495262151, 58.625764974149], [9.5319428615248, 58.633965257847], [9.5351802186336, 58.637203823751], [9.537879418689, 58.640465134813], [9.5916426123748, 58.713432280013], [9.6562166666667, 58.746687330409], [9.6562166666667, 59.079888667325], [9.6562166666667, 59.41309000424], [9.6562166666667, 59.746291341156], [9.6562166666667, 60.079492678071], [9.6562166666667, 60.412694014987], [9.6562166666667, 60.745895351902], [9.6562166666667, 61.279096688818], [9.6562166666667, 61.612298025733], [9.6562166666667, 61.945499362649], [9.6562166666667, 62.278700699564], [9.6562166666667, 62.61190203648], [9.6562166666667, 62.945103373395], [9.6562166666667, 63.278304710311], [9.6562166666667, 63.611506047226], [9.6562166666667, 63.944707384142],
                ],
            ],
        ];
    }
}
