<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/France - mainland - 45°N to 47°N.
 * @internal
 */
class Extent3549
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [6.6903838559035, 45], [6.661665916443, 45.039993286133], [6.6239671707154, 45.11572265625], [6.6341209411621, 45.124000549317], [6.6377773284914, 45.126106262207], [6.6899299621583, 45.148052215576], [6.7663884162905, 45.168190002441], [6.8216662406921, 45.153053283692], [6.9394435882571, 45.179443359375], [7.0647220611572, 45.223052978516], [7.1277770996097, 45.259300231934], [7.1586103439331, 45.377494812012], [7.1469440460207, 45.430549621582], [7.0891590118408, 45.476860046387], [6.9954156875611, 45.525272369385], [6.9694442749026, 45.596939086914], [6.8098607063296, 45.729648590088], [6.799345970154, 45.788665771484], [6.8133325576782, 45.834232330322], [6.8723602294925, 45.855968475342], [6.9020829200746, 45.849857330322], [6.9222221374512, 45.85221862793], [6.9438886642458, 45.858329772949], [6.9845132827759, 45.875896453858], [7.0380544662478, 45.931938171387], [7.0305547714235, 45.961936950684], [7.0188786036572, 45.980010636158], [7.0072216987613, 45.998054504395], [6.9330549240115, 46.055274963379], [6.8738880157473, 46.088050842285], [6.7834720611573, 46.154716491699], [6.7999992370608, 46.378326416016], [6.8070158958436, 46.404228210449], [6.7983326911928, 46.428607940674], [6.7377777099609, 46.447494506836], [6.7027769088747, 46.454719543457], [6.6336107254031, 46.464164733887], [6.5151386260987, 46.458465576172], [6.4919443130493, 46.453048706055], [6.3197216987612, 46.404163360596], [6.2955551147462, 46.394165039063], [6.2448606491089, 46.356384277344], [6.2299995422366, 46.33020401001], [6.2437472343447, 46.315509796143], [6.2719440460207, 46.261940002442], [6.2455549240114, 46.218330383301], [6.1874995231629, 46.172080993652], [6.1332631111145, 46.149784088135], [5.996388435364, 46.146942138672], [5.9670133590701, 46.207286834717], [5.981388092041, 46.221939086914], [6.0091657638553, 46.23388671875], [6.0299997329714, 46.241386413574], [6.074582576752, 46.248397827149], [6.1155552864075, 46.26152420044], [6.1061091423036, 46.29748916626], [6.1176385879519, 46.308746337891], [6.1535410881043, 46.379264831543], [6.111110687256, 46.409721374512], [6.071110725403, 46.426383972168], [6.0869436264038, 46.449440002441], [6.1352777481079, 46.53971862793], [6.1286797523501, 46.588050842285], [6.2691659927368, 46.682777404785], [6.3587493896486, 46.716732025147], [6.4349994659424, 46.758049011231], [6.456874370575, 46.781452178955], [6.4469442367554, 46.83943939209], [6.4602775573733, 46.89582824707], [6.5283327102663, 46.971664428711], [6.5663881301881, 46.979995727539], [6.6324992179873, 46.999996185303], [6.6325043351096, 47], [6.3087615084556, 47], [5.9850186818015, 47], [5.6612758551475, 47], [5.3375330284935, 47], [5.0137902018395, 47], [4.6900473751855, 47], [4.3663045485315, 47], [4.0425617218775, 47], [3.7188188952235, 47], [3.3950760685694, 47], [3.0713332419154, 47], [2.7475904152614, 47], [2.4238475886074, 47], [2.1001047619534, 47], [1.7763619352994, 47], [1.4526191086454, 47], [1.1288762819914, 47], [0.80513345533734, 47], [0.48139062868333, 47], [0.15764780202932, 47], [-0.1660950246247, 47], [-0.48983785127871, 47], [-0.81358067793272, 47], [-1.1373235045867, 47], [-1.4610663312407, 47], [-1.7848091578948, 47], [-2.1085519845488, 47], [-2.1418591151509, 46.974868721921], [-2.1438697769957, 46.973284793414], [-2.1468024417105, 46.970707773653], [-2.1488217519739, 46.968708132307], [-2.1895284282988, 46.926181017255], [-2.1922692641138, 46.923015150596], [-2.1944057383739, 46.920099645203], [-2.1962583599419, 46.917096029722], [-2.1978192387039, 46.914017178934], [-2.1990817385267, 46.91087628762], [-2.2000405048553, 46.907686813871], [-2.2008011628624, 46.903602697349], [-2.2060483249654, 46.852188306855], [-2.2061376139679, 46.848172549219], [-2.205854667706, 46.844926541479], [-2.2052613048475, 46.841701148159], [-2.2043601212227, 46.838510173649], [-2.2032996417751, 46.835703914689], [-2.195286568447, 46.816796583837], [-2.193711717049, 46.813546713771], [-2.1919169817527, 46.810539848836], [-2.1898378410306, 46.807620520207], [-2.1874832307857, 46.804801211635], [-2.1846749390415, 46.801914331132], [-2.1637778930114, 46.782155184734], [-2.1612823855519, 46.779930336346], [-2.1581687654194, 46.777480755626], [-2.1548267082567, 46.775176288246], [-2.1520411827653, 46.773468837986], [-2.1297259827322, 46.760483961297], [-2.1254085549567, 46.758188766345], [-2.1013490932734, 46.746445632912], [-2.0972451244929, 46.744584880117], [-2.0756660783616, 46.735663661139], [-2.0580880646598, 46.725762854525], [-1.9737172672653, 46.659966860699], [-1.9247493761826, 46.613589202861], [-1.8932069743719, 46.558453599963], [-1.8555994229742, 46.47364894269], [-1.8543736871782, 46.471124893036], [-1.8526130642679, 46.468111066262], [-1.850569212888, 46.465183846007], [-1.848250917792, 46.462355750088], [-1.8456681326077, 46.459638870603], [-1.8428319367677, 46.457044822465], [-1.8397544877347, 46.454584693988], [-1.836448968732, 46.452268999748], [-1.8329295322054, 46.450107635899], [-1.8292112392625, 46.448109838139], [-1.8253099953466, 46.446284142492], [-1.8212424824156, 46.444638349082], [-1.817510937857, 46.443335254578], [-1.6852702997909, 46.400318114815], [-1.6821188759554, 46.399362328951], [-1.5030945134229, 46.348372844184], [-1.3043019449912, 46.262793283609], [-1.3010183075893, 46.261456742859], [-1.296831483189, 46.259976558817], [-1.2925122585033, 46.258688973866], [-1.2880790884634, 46.257599488584], [-1.2826510333624, 46.256566815336], [-1.2337386792017, 46.249071120971], [-1.2309353337483, 46.248681545755], [-1.226276559366, 46.248208700985], [-1.2215814913293, 46.247947308605], [-1.2168701788388, 46.247898486728], [-1.2121627403332, 46.248062445817], [-1.2074792782963, 46.248438487755], [-1.2028397941208, 46.249025008771], [-1.1982641033779, 46.249819506196], [-1.1937717518422, 46.250818589027], [-1.1893819326108, 46.252017992258], [-1.185113404666, 46.253412594918], [-1.1821982158942, 46.254530861898], [-1.2057851840974, 46.196294541395], [-1.2300915206417, 46.22402010013], [-1.2323579873549, 46.22644114548], [-1.2351504160146, 46.229052793792], [-1.2381852740644, 46.23153166815], [-1.2414495719333, 46.23386713368], [-1.244929330209, 46.236049169614], [-1.2486096395168, 46.238068412551], [-1.2524747245084, 46.239916196879], [-1.256508011681, 46.241584592215], [-1.2611283931014, 46.243206133601], [-1.4473970976249, 46.301582912131], [-1.4508492773863, 46.302586251245], [-1.4552896306056, 46.303668793139], [-1.4598247453222, 46.304548074134], [-1.4644351518977, 46.30522032037], [-1.4691010552035, 46.305682646978], [-1.4739228438738, 46.305936611984], [-1.4889110127901, 46.306359151046], [-1.4933868479358, 46.306388900268], [-1.4980984945123, 46.306212567034], [-1.5024293335891, 46.305860900294], [-1.5134538106915, 46.304730863907], [-1.5182723377548, 46.304112463458], [-1.5223021967053, 46.303405060927], [-1.5710311016291, 46.293814176225], [-1.5757105912733, 46.292761599733], [-1.5800948872071, 46.29154679308], [-1.5843559429579, 46.29013695961], [-1.5884754792072, 46.288538153286], [-1.5924358289111, 46.286757238552], [-1.596220013407, 46.284801860634], [-1.5998118154571, 46.28268041247], [-1.6031958489107, 46.280401998432], [-1.6063576246821, 46.277976395002], [-1.60928361276, 46.275414008556], [-1.6119612999854, 46.272725830477], [-1.6143792433512, 46.269923389757], [-1.6165271186009, 46.26701870333], [-1.6183957639266, 46.264024224326], [-1.6199772185867, 46.260952788497], [-1.6212647562883, 46.257817559029], [-1.6222529132044, 46.25463196999], [-1.6229375105207, 46.251409668658], [-1.6233156714276, 46.24816445698], [-1.6233858324995, 46.244910232407], [-1.6231477494345, 46.24166092837], [-1.6226024971384, 46.238430454644], [-1.6217524641762, 46.235232637855], [-1.6206013416252, 46.232081162392], [-1.6191541063977, 46.228989511966], [-1.6174796807954, 46.226070510414], [-1.5989476700196, 46.196515009345], [-1.596899258042, 46.193532119355], [-1.5946085403986, 46.190697487273], [-1.5920540508455, 46.187973427217], [-1.5892467478153, 46.185371585029], [-1.5861986653213, 46.182903082565], [-1.5829228612107, 46.180578470405], [-1.5799933317774, 46.178737084741], [-1.5673537380464, 46.171223802009], [-1.5633865834019, 46.169050917091], [-1.5595163306069, 46.167214427579], [-1.5550188641855, 46.165385227118], [-1.5409577344506, 46.16021695042], [-1.537693957908, 46.159090550044], [-1.5333774918689, 46.157812445007], [-1.529881361064, 46.156941488649], [-1.3409697240207, 46.113474483611], [-1.3212990461378, 46.109197936407], [-1.3171027516093, 46.108382134116], [-1.3125114973888, 46.107702866024], [-1.3076174983142, 46.107214387115], [-1.2921025760206, 46.106077122363], [-1.2879135509402, 46.105855531273], [-1.2832146539402, 46.1058091003], [-1.2785197910695, 46.105975443947], [-1.2738490113451, 46.106353853913], [-1.2688562449776, 46.107001839595], [-1.2423575126077, 46.111185443796], [-1.2385074791845, 46.111871122754], [-1.2340269877006, 46.1128714135], [-1.2296488320604, 46.114071996516], [-1.225391721592, 46.115467745747], [-1.2212738528653, 46.117052700978], [-1.2173128323366, 46.118820093078], [-1.213525601414, 46.120762372678], [-1.2099283642613, 46.122871242177], [-1.2072030731567, 46.124317334848], [-1.1810828218643, 46.099231087129], [-1.1245735383361, 46.02641522685], [-1.1249410037834, 46.015332963299], [-1.1358199539918, 45.948018902914], [-1.1713011992936, 45.990175479854], [-1.17395482439, 45.993065461706], [-1.1767304843359, 45.995679308528], [-1.1796230042832, 45.998064296941], [-1.2199644409792, 46.029241288392], [-1.2232767117564, 46.031625995298], [-1.2277553918864, 46.034385187192], [-1.3176732248515, 46.083484825483], [-1.3223484811083, 46.085764087549], [-1.3263715893699, 46.087430301678], [-1.3305450111261, 46.088909890925], [-1.3348508401414, 46.090196504576], [-1.3377387156843, 46.090933061237], [-1.3618505738582, 46.096666856177], [-1.3671322537224, 46.097726402154], [-1.3717233243902, 46.098403360778], [-1.3763701735329, 46.098870434791], [-1.3812009301453, 46.099130102224], [-1.3958814244469, 46.099552586535], [-1.4002836971437, 46.099585233296], [-1.4049776233961, 46.099413645165], [-1.4096468796716, 46.099029637308], [-1.4142714179862, 46.098434860712], [-1.4188313843813, 46.097631871306], [-1.4233072048162, 46.096624118869], [-1.4276796698032, 46.095415932059], [-1.4319300174099, 46.094012499652], [-1.4360400142571, 46.09241984806], [-1.4399920341584, 46.09064481524], [-1.4437691340531, 46.088695021105], [-1.4473551268968, 46.086578834567], [-1.4507346511985, 46.084305337364], [-1.4538932368955, 46.081884284834], [-1.4568173672875, 46.079326063793], [-1.4594945367623, 46.076641647727], [-1.4619133040706, 46.073842549482], [-1.4640633409253, 46.070940771654], [-1.4659354757254, 46.06794875492], [-1.4675217322239, 46.064879324501], [-1.4688153629878, 46.06174563503], [-1.469810877515, 46.058561114032], [-1.4705040649055, 46.055339404284], [-1.4708920109988, 46.052094305282], [-1.4709731099267, 46.048839714094], [-1.4707470700406, 46.045589565833], [-1.4702149142083, 46.042357774008], [-1.4696848998608, 46.04019769265], [-1.4450515783752, 45.951508218094], [-1.4437672882338, 45.947834234582], [-1.442340531614, 45.944739364443], [-1.4406251247005, 45.941717024068], [-1.4379014916379, 45.937845886111], [-1.427450054822, 45.925041083596], [-1.4245113231087, 45.921826884791], [-1.4217280753436, 45.919219706268], [-1.4187047097964, 45.916745470718], [-1.4154541786997, 45.91441475341], [-1.4110082610663, 45.911680389243], [-1.3835222201353, 45.896621171787], [-1.3602829577001, 45.884013770925], [-1.3361866195112, 45.87150238849], [-1.3120702095557, 45.847499809014], [-1.3051238882657, 45.838324450716], [-1.2912192670906, 45.812121320212], [-1.2934567312356, 45.809123011467], [-1.2953316256086, 45.806133801432], [-1.2969223297775, 45.803066658445], [-1.2982220765347, 45.799934727372], [-1.2992253484467, 45.796751428259], [-1.3000547367314, 45.792653513685], [-1.3099992587479, 45.70908028436], [-1.3101412558038, 45.705328187971], [-1.3099296746605, 45.702077069941], [-1.3094138388256, 45.698843778618], [-1.3085960097114, 45.695642152985], [-1.3074797394393, 45.692485894055], [-1.3060698547756, 45.689388506347], [-1.304372435665, 45.686363240253], [-1.3023947884695, 45.683423035518], [-1.3001454140386, 45.680580466088], [-1.2976339707587, 45.677847686549], [-1.2948712327497, 45.675236380379], [-1.2918690433934, 45.672757710241], [-1.2886402644011, 45.670422270512], [-1.2851987206399, 45.668240042253], [-1.2815591409565, 45.666220350802], [-1.2777370952513, 45.664371826173], [-1.2737489280682, 45.662702366418], [-1.2696116889849, 45.661219104106], [-1.2645350648154, 45.659713667871], [-1.1953855034334, 45.641973436487], [-1.1237339471364, 45.61515695185], [-1.109529266789, 45.6080075334], [-1.1255999991472, 45.601311393278], [-1.1295405167671, 45.599543805477], [-1.1332975153964, 45.597605609126], [-1.136866332445, 45.595500353733], [-1.1402316795641, 45.593237073977], [-1.1433791468234, 45.590825481219], [-1.1462952643983, 45.588275921578], [-1.1489675601062, 45.585599331295], [-1.1515928558241, 45.582544241158], [-1.2022983491447, 45.51752727857], [-1.2040295674819, 45.515156784752], [-1.2059019108925, 45.512169186396], [-1.2074917909939, 45.509103348655], [-1.2087924434032, 45.505972410784], [-1.2097983460706, 45.502789788575], [-1.2106174068627, 45.498822194566], [-1.2193070255661, 45.431218247197], [-1.2229605419341, 45.395060082806], [-1.2230984636623, 45.391441384351], [-1.222828278339, 45.372592450004], [-1.2386425909848, 45.213511110809], [-1.2770798135206, 45.019140829937], [-1.2800735639791, 45], [-0.94797117148399, 45], [-0.61586877898888, 45], [-0.28376638649377, 45], [0.048336006001335, 45], [0.38043839849644, 45], [0.71254079099155, 45], [1.0446431834867, 45], [1.3767455759818, 45], [1.7088479684769, 45], [2.040950360972, 45], [2.3730527534671, 45], [2.7051551459622, 45], [3.0372575384573, 45], [3.3693599309524, 45], [3.7014623234475, 45], [4.0335647159427, 45], [4.3656671084378, 45], [4.6977695009329, 45], [5.029871893428, 45], [5.3619742859231, 45], [5.6940766784182, 45], [6.0261790709133, 45], [6.3582814634084, 45], [6.6903838559035, 45],
                ],
            ],
        ];
    }
}
