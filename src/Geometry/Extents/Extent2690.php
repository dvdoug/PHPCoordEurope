<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Russia - 130.5°E to 133.5°E onshore.
 * @internal
 */
class Extent2690
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [133.5, 71.531836820966], [133.47449302673, 71.538484573364], [133.44641304016, 71.547342300415], [133.28414726257, 71.602773666382], [133.24382591248, 71.623937606812], [133.12895393372, 71.691221237183], [133.1104221344, 71.703355789185], [133.09422492981, 71.721086502075], [133.07517433167, 71.740148544312], [133.07120323181, 71.743539810181], [133.06705665588, 71.746412277222], [133.06230354309, 71.749189376831], [133.05696678162, 71.75185585022], [133.05206108093, 71.753995895386], [133.02382469177, 71.765596389771], [133.01687431335, 71.768213272095], [133.00991630554, 71.770486831665], [133.00247383118, 71.772607803345], [132.99458503723, 71.774568557739], [132.98627662659, 71.776357650757], [132.9741191864, 71.778551101685], [132.8845615387, 71.792974472046], [132.87066841125, 71.79546546936], [132.88828086853, 71.804052352905], [132.89203071594, 71.80597114563], [132.89695167542, 71.808824539185], [132.90127372742, 71.811765670776], [132.90497398376, 71.814779281616], [132.90804100037, 71.81785774231], [132.91045951843, 71.82098197937], [132.91221427917, 71.824144363403], [132.91330528259, 71.827325820923], [132.91372108459, 71.830892562866], [132.91103553772, 71.937883377075], [132.90997505188, 71.942266464233], [132.90836906433, 71.945402145386], [132.90609550476, 71.948488235474], [132.90316581726, 71.951517105103], [132.89958763123, 71.954469680786], [132.89538002014, 71.957342147827], [132.8905582428, 71.960111618042], [132.88514518738, 71.962778091431], [132.87916374207, 71.96531867981], [132.87263679504, 71.967729568481], [132.86559486389, 71.969999313355], [132.85806846619, 71.972116470337], [132.85008430481, 71.974073410034], [132.84066581726, 71.976057052612], [132.80532264709, 71.982797622681], [132.79857444763, 71.984010696411], [132.78943824768, 71.985433578491], [132.77999687195, 71.986669540405], [132.77028846741, 71.987707138062], [132.76035881042, 71.98854637146], [132.75024986267, 71.989179611206], [132.73999977112, 71.9896068573], [132.72965812683, 71.989828109741], [132.71927070618, 71.989839553833], [132.70887947083, 71.989641189575], [132.69852638245, 71.989233016968], [132.6882610321, 71.988618850708], [132.67812538147, 71.987802505493], [132.66816520691, 71.986783981323], [132.6584186554, 71.985570907593], [132.64893531799, 71.984167098999], [132.64277839661, 71.983125686646], [132.57700157166, 71.971437454224], [132.57397651672, 71.970888137817], [132.56514167786, 71.969118118286], [132.55668449402, 71.967176437378], [132.54864311218, 71.965074539185], [132.54270744324, 71.963335037231], [132.50573539734, 71.951948165894], [132.49682426453, 71.948930740357], [132.41715049744, 71.919088363648], [132.41253089905, 71.917268753052], [132.40649604797, 71.914613723755], [132.40102958679, 71.91184425354], [132.39789390564, 71.910055160522], [132.36919975281, 71.892824172974], [132.36367988586, 71.889032363892], [132.10939979553, 71.686727523804], [132.10587120056, 71.683561325073], [131.9636554718, 71.532072067261], [131.93652915955, 71.499013900757], [131.93529701233, 71.497392654419], [131.79648399353, 71.297334671021], [131.79447746277, 71.293386459351], [131.79361534119, 71.290182113647], [131.78792381287, 71.255590438843], [131.78782844543, 71.251684188843], [131.78121376038, 71.249300003052], [131.77356147766, 71.247159957886], [131.7687625885, 71.245672225952], [131.73489952087, 71.234689712525], [131.72695732117, 71.231859207153], [131.72072029114, 71.229299545288], [131.71500968933, 71.22661781311], [131.70985221863, 71.223829269409], [131.70526695251, 71.220941543579], [131.70071983337, 71.217512130737], [131.62833213806, 71.154783248901], [131.62606239319, 71.152666091919], [131.62331962585, 71.149564743042], [131.62077903748, 71.145574569702], [131.5959148407, 71.090856552124], [131.51310157776, 70.989740371704], [131.48847007751, 70.9664478302], [131.43263435364, 70.922063827515], [131.40232276917, 70.899030685425], [131.37333869934, 70.883420944214], [131.23052787781, 70.817861557007], [131.20211219788, 70.805696487427], [131.1779499054, 70.796339035034], [131.12538719177, 70.780492782593], [131.06207466125, 70.782484054565], [131.03679847717, 70.785520553589], [131.04355812073, 70.795648574829], [131.04488563538, 70.797880172729], [131.04622840881, 70.801057815552], [131.04693031311, 70.80425453186], [131.04693031311, 70.808023452759], [131.04165840149, 70.842336654663], [131.04022026062, 70.846513748169], [131.03785514832, 70.850328445435], [130.92882347107, 70.986440658569], [130.92497062683, 70.990278244019], [130.92123985291, 70.993200302124], [130.9169216156, 70.996030807495], [130.91202735901, 70.998754501343], [130.90657997131, 71.00136756897], [130.9006061554, 71.00385093689], [130.89412498474, 71.006196975708], [130.88717079163, 71.00839805603], [130.87977409363, 71.010438919067], [130.87195777893, 71.012315750122], [130.8637638092, 71.014017105103], [130.85522270203, 71.015539169312], [130.84637641907, 71.016874313354], [130.83725547791, 71.018014907837], [130.82790565491, 71.018957138062], [130.81836509705, 71.019697189331], [130.80867195129, 71.020235061646], [130.79887199402, 71.020559310913], [130.78900718689, 71.020677566528], [130.77911949158, 71.020586013794], [130.76924705505, 71.02028465271], [130.75943946838, 71.019773483276], [130.74973487854, 71.019056320191], [130.74017906189, 71.018140792847], [130.73080635071, 71.017023086548], [130.72166633606, 71.015710830689], [130.7167263031, 71.014905929565], [130.68083763123, 71.008783340454], [130.67690467834, 71.008089065552], [130.66834068298, 71.006406784058], [130.66011619568, 71.004545211792], [130.6522693634, 71.002519607544], [130.64483833313, 71.000337600708], [130.63784599304, 70.998006820679], [130.63132667542, 70.995534896851], [130.62529182434, 70.992929458618], [130.59820747375, 70.980401992798], [130.59276008606, 70.977705001831], [130.5878276825, 70.974885940552], [130.58346366882, 70.971971511841], [130.57969093323, 70.968976974487], [130.5765247345, 70.965913772583], [130.57397270203, 70.962800979614], [130.5720539093, 70.959642410278], [130.57122993469, 70.957792282105], [130.56323051453, 70.937059402466], [130.5, 70.950687822967], [130.5, 70.620901801036], [130.5, 70.291115779105], [130.5, 69.961329757175], [130.5, 69.631543735244], [130.5, 69.301757713313], [130.5, 68.971971691383], [130.5, 68.642185669452], [130.5, 68.312399647522], [130.5, 67.982613625591], [130.5, 67.65282760366], [130.5, 67.32304158173], [130.5, 66.993255559799], [130.5, 66.663469537868], [130.5, 66.333683515938], [130.5, 66.003897494007], [130.5, 65.674111472076], [130.5, 65.344325450146], [130.5, 65.014539428215], [130.5, 64.684753406284], [130.5, 64.354967384354], [130.5, 64.025181362423], [130.5, 63.695395340492], [130.5, 63.365609318562], [130.5, 63.035823296631], [130.5, 62.706037274701], [130.5, 62.37625125277], [130.5, 62.046465230839], [130.5, 61.716679208909], [130.5, 61.386893186978], [130.5, 61.057107165047], [130.5, 60.727321143117], [130.5, 60.397535121186], [130.5, 60.067749099255], [130.5, 59.737963077325], [130.5, 59.408177055394], [130.5, 59.078391033463], [130.5, 58.748605011533], [130.5, 58.418818989602], [130.5, 58.089032967671], [130.5, 57.759246945741], [130.5, 57.42946092381], [130.5, 57.09967490188], [130.5, 56.769888879949], [130.5, 56.440102858018], [130.5, 56.110316836088], [130.5, 55.780530814157], [130.5, 55.450744792226], [130.5, 55.120958770296], [130.5, 54.791172748365], [130.5, 54.461386726434], [130.5, 54.131600704504], [130.5, 53.801814682573], [130.5, 53.472028660642], [130.5, 53.142242638712], [130.5, 52.812456616781], [130.5, 52.48267059485], [130.5, 52.15288457292], [130.5, 51.823098550989], [130.5, 51.493312529058], [130.5, 51.163526507128], [130.5, 50.833740485197], [130.5, 50.503954463267], [130.5, 50.174168441336], [130.5, 49.844382419405], [130.5, 49.514596397475], [130.5, 49.184810375544], [130.5, 48.855024353613], [130.50901985168, 48.851522445679], [130.53802680969, 48.851663589478], [130.56427192688, 48.856386184692], [130.62768745422, 48.8746509552], [130.64282417297, 48.875410079956], [130.67399787903, 48.860414505005], [130.67053413391, 48.839712142944], [130.633852005, 48.810548782349], [130.57718086243, 48.713327407837], [130.52887153625, 48.626100540161], [130.52359199524, 48.605760574341], [130.60940742493, 48.519990921021], [130.73745918274, 48.429437637329], [130.82399177551, 48.326803207397], [130.83149909973, 48.29388999939], [130.75387763977, 48.192491531372], [130.67837715149, 48.138952255249], [130.65983772278, 48.108396530151], [130.67956733704, 48.047636032105], [130.7580280304, 47.988046646118], [130.79803657532, 47.964998245239], [130.85385322571, 47.931108474732], [130.88372993469, 47.906240463257], [130.9133014679, 47.865274429321], [130.92996406555, 47.83860206604], [130.93983650208, 47.817495346069], [130.9460773468, 47.797773361206], [130.93510627747, 47.740827560425], [130.93997383118, 47.72027015686], [130.95468330383, 47.706106185913], [130.99217414856, 47.687211990356], [131.03080940247, 47.677495956421], [131.08593940735, 47.672185897827], [131.15970039368, 47.693048477173], [131.19720649719, 47.706384658814], [131.22468757629, 47.718050003052], [131.26819038391, 47.730268478394], [131.41665840149, 47.738603591919], [131.44636726379, 47.737771987915], [131.48675727844, 47.731939315796], [131.53497505188, 47.719228744507], [131.54706001282, 47.697492599487], [131.61801338196, 47.66388130188], [131.81524848938, 47.674715042114], [131.91497993469, 47.6699924469], [132.12161445618, 47.692766189575], [132.21080207825, 47.713468551636], [132.25525093079, 47.728044509888], [132.28970527649, 47.73638343811], [132.34106636047, 47.74249458313], [132.36523628235, 47.742074966431], [132.38926887512, 47.736246109009], [132.41830635071, 47.725267410278], [132.46637153625, 47.71693611145], [132.52108955383, 47.710275650024], [132.5424823761, 47.713884353638], [132.57788276672, 47.733255386353], [132.66206550598, 47.871938705444], [132.86386299133, 47.994440078735], [133.08273506165, 48.098882675171], [133.1941242218, 48.109437942505], [133.27221870422, 48.104166030884], [133.42872810364, 48.085409164429], [133.44926643372, 48.074304580689], [133.48427009583, 48.068883895874], [133.5, 48.072453403991], [133.5, 48.402867254934], [133.5, 48.733281105877], [133.5, 49.063694956821], [133.5, 49.394108807764], [133.5, 49.724522658707], [133.5, 50.054936509651], [133.5, 50.385350360594], [133.5, 50.715764211537], [133.5, 51.046178062481], [133.5, 51.376591913424], [133.5, 51.707005764367], [133.5, 52.03741961531], [133.5, 52.367833466254], [133.5, 52.698247317197], [133.5, 53.02866116814], [133.5, 53.359075019084], [133.5, 53.689488870027], [133.5, 54.01990272097], [133.5, 54.350316571914], [133.5, 54.680730422857], [133.5, 55.0111442738], [133.5, 55.341558124744], [133.5, 55.671971975687], [133.5, 56.00238582663], [133.5, 56.332799677574], [133.5, 56.663213528517], [133.5, 56.99362737946], [133.5, 57.324041230403], [133.5, 57.654455081347], [133.5, 57.98486893229], [133.5, 58.315282783233], [133.5, 58.645696634177], [133.5, 58.97611048512], [133.5, 59.306524336063], [133.5, 59.636938187007], [133.5, 59.96735203795], [133.5, 60.297765888893], [133.5, 60.628179739837], [133.5, 60.95859359078], [133.5, 61.289007441723], [133.5, 61.619421292667], [133.5, 61.94983514361], [133.5, 62.280248994553], [133.5, 62.610662845497], [133.5, 62.94107669644], [133.5, 63.271490547383], [133.5, 63.601904398326], [133.5, 63.93231824927], [133.5, 64.262732100213], [133.5, 64.593145951156], [133.5, 64.9235598021], [133.5, 65.253973653043], [133.5, 65.584387503986], [133.5, 65.91480135493], [133.5, 66.245215205873], [133.5, 66.575629056816], [133.5, 66.90604290776], [133.5, 67.236456758703], [133.5, 67.566870609646], [133.5, 67.89728446059], [133.5, 68.227698311533], [133.5, 68.558112162476], [133.5, 68.88852601342], [133.5, 69.218939864363], [133.5, 69.549353715306], [133.5, 69.879767566249], [133.5, 70.210181417193], [133.5, 70.540595268136], [133.5, 70.871009119079], [133.5, 71.201422970023], [133.5, 71.531836820966],
                ],
            ],
            [
                [
                    [133.5, 45.855344064435], [133.47606086731, 45.823469161987], [133.47494697571, 45.797739028931], [133.48753547668, 45.678255081177], [133.47024726868, 45.624578475952], [133.4172077179, 45.589715957642], [133.38217353821, 45.569993972778], [133.26831245422, 45.525552749634], [133.24411201477, 45.516107559204], [133.21663093567, 45.511110305786], [133.19224739075, 45.503816604614], [133.14914131165, 45.450830459595], [133.130235672, 45.414575576782], [133.10190010071, 45.294443130493], [133.09919929504, 45.228879928589], [133.11386299133, 45.197214126587], [133.12620735168, 45.164716720581], [133.11746406555, 45.124574661255], [133.07467842102, 45.088884353638], [133.02527046204, 45.056940078735], [132.95260810852, 45.024580001831], [132.93145942688, 45.021413803101], [132.87129402161, 45.038179397583], [132.79940986633, 45.06499671936], [132.56802558899, 45.116388320923], [132.36413764954, 45.161104202271], [132.29913520813, 45.175271987915], [132.19693183899, 45.19748878479], [132.12274360657, 45.213609695435], [131.99243354797, 45.241437911987], [131.96136665344, 45.255968093872], [131.92372322083, 45.286108016968], [131.91038703918, 45.30860710144], [131.89579963684, 45.337564468384], [131.86844062805, 45.345823287964], [131.8361530304, 45.334299087524], [131.70331001282, 45.216104507446], [131.65275764465, 45.133741378784], [131.64637947083, 45.108053207398], [131.62802314758, 45.091520309448], [131.46911811829, 44.973878860474], [131.34108161926, 44.970960617066], [131.31440925598, 44.955129623413], [131.28616523743, 44.931802749634], [131.21246528625, 44.91054725647], [131.17712593079, 44.911867141724], [131.14927864075, 44.928052902222], [131.12454414368, 44.927354812622], [131.09219551086, 44.918603897095], [131.06775093079, 44.909715652466], [130.95298957825, 44.836488723755], [131.00067329407, 44.781938552856], [131.01983833313, 44.773050308228], [131.0555896759, 44.753465652466], [131.09552192688, 44.691377639771], [131.12857246399, 44.585824966431], [131.17590141296, 44.436326980591], [131.25555610657, 44.184717178345], [131.28497505188, 44.093606948853], [131.29803657532, 44.051935195923], [131.262758255, 44.037359237671], [131.24441719055, 44.021383285522], [131.23108100891, 43.973878860474], [131.19912910461, 43.818887710571], [131.19122505188, 43.536245346069], [131.22302436829, 43.511667251587], [131.23550605774, 43.505556106567], [131.27276802063, 43.481935501099], [131.28305244446, 43.473421096802], [131.30101203918, 43.457143783569], [131.31039619446, 43.389581680298], [131.2641620636, 43.270273208618], [131.19192695618, 43.185823440552], [131.10620307922, 43.038888931274], [131.1030292511, 43.015554428101], [131.10399055481, 42.982213973999], [131.11496162415, 42.958608627319], [131.13337898254, 42.939714431763], [131.12849617004, 42.91644859314], [131.02136421204, 42.857080459595], [130.88719367981, 42.851804733276], [130.86551094055, 42.857774734497], [130.84164619446, 42.870271682739], [130.8185749054, 42.876100540161], [130.79553413391, 42.871934890747], [130.63803291321, 42.831666946411], [130.53274726868, 42.789995193482], [130.5, 42.775848373413], [130.5, 42.68465831843], [130.53608894348, 42.682004928589], [130.58496284485, 42.644998550415], [130.60522651672, 42.619714736939], [130.61871528625, 42.585409164429], [130.60746955872, 42.563604354858], [130.58026313782, 42.481103897095], [130.60437202454, 42.42186164856], [130.63275337219, 42.411378860474], [130.65901374817, 42.375272750855], [130.65277290344, 42.339990615845], [130.65504646301, 42.318117141724], [130.69742012024, 42.292207717896], [130.74461936951, 42.256353378296], [130.76763725281, 42.270048141479], [130.77174949646, 42.272802352905], [130.77470588684, 42.275121688843], [130.77744865417, 42.277582168579], [130.78012657166, 42.280359268189], [130.80056190491, 42.303449630737], [130.80250740051, 42.305788040161], [130.80467033386, 42.30881690979], [130.92987632751, 42.501924514771], [130.93137931824, 42.504407882691], [130.93289375305, 42.507398605347], [130.93413352966, 42.510457992554], [130.93509483337, 42.513578414917], [130.93577766418, 42.51674079895], [130.936170578, 42.519933700562], [130.93627738953, 42.523141860962], [130.93609809875, 42.52635383606], [130.93562889099, 42.529554367066], [130.93487739563, 42.532732009888], [130.93384361267, 42.535871505737], [130.93253135681, 42.538957595825], [130.93094444275, 42.541982650757], [130.92909812927, 42.544927597046], [130.92698860168, 42.547780990601], [130.92410469055, 42.551092147827], [130.89102745056, 42.585062026978], [130.88743400574, 42.588331222534], [130.88439750671, 42.590707778931], [130.88115501404, 42.592935562134], [130.8777256012, 42.595006942749], [130.87412071228, 42.596914291382], [130.87035942078, 42.59864616394], [130.86645698547, 42.600198745728], [130.86242866516, 42.601564407349], [130.85828971863, 42.602735519409], [130.85337638855, 42.603841781616], [130.81741523743, 42.610609054566], [130.79339790344, 42.622617721558], [130.77662467957, 42.638113021851], [130.78935813904, 42.638452529907], [130.85126304626, 42.611970901489], [130.85516166687, 42.610422134399], [130.85828971863, 42.609342575073], [130.94201469421, 42.582269668579], [130.94659996033, 42.580953598022], [130.9508228302, 42.579977035522], [130.95511817932, 42.579202651978], [130.9594707489, 42.578630447388], [130.96385765076, 42.578271865845], [130.9682598114, 42.578119277954], [130.97265815735, 42.578176498413], [130.97703742981, 42.578443527222], [130.9813785553, 42.57892036438], [130.98565864563, 42.57960319519], [130.98986244202, 42.580492019653], [130.99397468567, 42.581579208374], [130.99885368347, 42.583181381226], [131.01777458191, 42.590307235718], [131.08485984802, 42.604764938354], [131.09832954407, 42.588865280151], [131.10010719299, 42.572343826294], [131.10053062439, 42.569478988647], [131.10127449036, 42.566301345825], [131.10230064392, 42.563161849976], [131.10360527039, 42.560075759888], [131.10518074036, 42.557050704956], [131.10702323914, 42.55410194397], [131.10912132263, 42.551244735718], [131.11146736145, 42.548490524292], [131.1140537262, 42.545846939087], [131.11686515808, 42.543329238892], [131.11989021301, 42.540948867798], [131.1231212616, 42.538717269898], [131.12736320496, 42.536184310913], [131.16490364075, 42.516065597534], [131.16962623596, 42.513818740845], [131.17351722717, 42.512258529663], [131.1775302887, 42.51088142395], [131.18165779114, 42.509698867798], [131.18587303162, 42.508710861206], [131.19016075134, 42.507928848267], [131.19450569153, 42.507349014282], [131.19888114929, 42.506978988648], [131.20327949524, 42.506814956665], [131.20767402649, 42.50686454773], [131.21204948425, 42.507123947144], [131.2153301239, 42.507455825806], [131.23605918884, 42.50994682312], [131.2408657074, 42.51068687439], [131.24506950378, 42.511564254761], [131.24917793274, 42.51263999939], [131.25317573547, 42.513910293579], [131.2570476532, 42.515371322632], [131.26077079773, 42.517019271851], [131.26433753967, 42.518838882446], [131.26772499084, 42.520830154419], [131.27092170715, 42.522981643677], [131.27391624451, 42.525285720825], [131.27669334412, 42.527727127075], [131.27924156189, 42.530305862427], [131.28155326843, 42.532999038696], [131.28360939026, 42.535802841187], [131.28540992737, 42.538702011109], [131.28694343567, 42.54168510437], [131.28820610046, 42.54474067688], [131.28914833069, 42.547704696655], [131.29780387878, 42.579439163208], [131.29965019226, 42.587736129761], [131.30021858215, 42.59169960022], [131.30034828186, 42.59490776062], [131.30018806458, 42.598119735718], [131.299741745, 42.601320266724], [131.29900932312, 42.604497909546], [131.29799461365, 42.607641220093], [131.29670143127, 42.610731124878], [131.2951335907, 42.61375617981], [131.29330253601, 42.616708755493], [131.29121208191, 42.619569778442], [131.28886985779, 42.622327804565], [131.28582191467, 42.625413894653], [131.28301048279, 42.628000259399], [131.2849445343, 42.637945175171], [131.33470344543, 42.732919692993], [131.34203147888, 42.737066268921], [131.39012336731, 42.75640296936], [131.39396858215, 42.758081436157], [131.39755439758, 42.759897232056], [131.40100288391, 42.761907577515], [131.51725196838, 42.834383010864], [131.52040672302, 42.836473464966], [131.52342796326, 42.838766098023], [131.52623558044, 42.841199874878], [131.5288143158, 42.843767166138], [131.53115272522, 42.84645652771], [131.53323936462, 42.849252700806], [131.53506660461, 42.852144241333], [131.5366268158, 42.855123519898], [131.53791618347, 42.858179092407], [131.564245224, 42.92885017395], [131.58477210999, 42.977895736694], [131.63156700134, 43.009737014771], [131.63502311707, 43.012311935425], [131.63866233826, 43.015531539917], [131.69470787048, 43.07176399231], [131.80994606018, 43.193014144897], [131.81233024597, 43.195711135864], [131.81445121765, 43.198495864868], [131.81630897522, 43.201383590698], [131.81789970398, 43.204355239868], [131.81921577454, 43.207399368286], [131.8202495575, 43.210500717163], [131.82113456726, 43.214471817017], [131.82831382751, 43.264322280884], [131.83506202698, 43.274682998657], [131.92768287659, 43.270223617554], [131.8947467804, 43.256063461304], [131.89030647278, 43.253915786743], [131.88684654236, 43.251951217651], [131.8835773468, 43.249826431274], [131.87971687317, 43.246892929077], [131.85524177551, 43.225942611694], [131.85199546814, 43.222829818726], [131.84962272644, 43.220151901245], [131.84750175476, 43.217367172241], [131.84550666809, 43.214250564575], [131.78156089783, 43.10223197937], [131.7576084137, 43.096090316772], [131.75427436829, 43.095232009888], [131.75022315979, 43.093988418579], [131.74629402161, 43.09255027771], [131.74251365662, 43.090925216675], [131.73889350891, 43.089124679565], [131.73544883728, 43.087156295776], [131.73219490051, 43.085023880005], [131.7291469574, 43.082738876343], [131.72631645203, 43.080312728882], [131.72371482849, 43.077753067017], [131.72135734558, 43.075071334839], [131.71924781799, 43.072282791138], [131.71740150452, 43.06939125061], [131.71547889709, 43.065656661987], [131.68823814392, 43.001893997192], [131.68691062927, 42.998025894165], [131.6861782074, 42.994871139526], [131.68572807312, 42.99168586731], [131.68557167053, 42.988481521606], [131.68570518494, 42.985273361206], [131.68612480164, 42.9820728302], [131.68683433533, 42.978891372681], [131.68782997131, 42.975748062134], [131.6891040802, 42.972654342651], [131.69065284729, 42.969621658325], [131.69246864319, 42.966665267944], [131.6945476532, 42.963796615601], [131.69687843323, 42.961030960083], [131.69944953918, 42.958375930786], [131.70224952698, 42.955842971802], [131.70526695251, 42.953443527222], [131.7084941864, 42.951192855835], [131.71190834045, 42.949090957642], [131.71620368958, 42.946813583374], [131.78768730164, 42.912603378296], [131.79003334045, 42.911527633667], [131.79393196106, 42.909940719604], [131.79795646667, 42.908536911011], [131.80209541321, 42.907327651978], [131.80632591248, 42.906312942505], [131.81063652039, 42.905500411987], [131.81500053406, 42.904893875122], [131.8194026947, 42.904493331909], [131.82382774353, 42.904302597046], [131.82825279236, 42.904321670532], [131.83248329163, 42.904535293579], [131.88169288635, 42.90814781189], [131.88615608215, 42.908590316772], [131.88881874084, 42.908960342407], [131.91535377502, 42.913057327271], [131.92042350769, 42.914037704468], [131.92457771301, 42.915082931518], [131.92862129211, 42.91632270813], [131.93253898621, 42.917753219604], [131.9363117218, 42.919370651245], [131.93992805481, 42.92116355896], [131.94336509705, 42.923128128052], [131.94661521912, 42.925252914429], [131.94966316223, 42.927530288696], [131.9524936676, 42.92995262146], [131.95509529114, 42.932504653931], [131.95786094666, 42.93568611145], [131.97821998596, 42.961992263794], [131.98073005676, 42.965761184692], [131.98226737976, 42.968622207642], [131.98678398132, 42.977899551392], [131.98812294006, 42.980993270874], [131.98916053772, 42.984098434448], [131.98991203308, 42.987245559692], [131.99040412903, 42.990732192993], [131.99095726013, 42.997369766235], [131.99107551575, 42.999967575073], [131.99096107483, 43.003175735474], [131.99055671692, 43.00637626648], [131.98965263367, 43.010301589966], [131.98608589172, 43.022165298462], [131.98977851868, 43.023984909058], [131.99341011047, 43.02606010437], [132.09081077576, 43.086130142212], [132.09370994568, 43.088026046753], [132.09677314758, 43.090295791626], [132.09961891174, 43.092714309692], [132.10223579407, 43.095262527466], [132.10395622253, 43.097150802612], [132.12816047668, 43.125177383423], [132.14369010925, 43.138963699341], [132.16528129578, 43.148847579956], [132.18476676941, 43.155191421509], [132.21574211121, 43.164415359497], [132.22085762024, 43.166200637817], [132.22466087341, 43.167806625366], [132.22741508484, 43.169130325317], [132.26935768127, 43.190378189087], [132.27327156067, 43.192556381226], [132.27655220032, 43.194669723511], [132.27963066101, 43.196935653687], [132.28335762024, 43.200162887573], [132.29843711853, 43.21498298645], [132.2857837677, 43.182332992554], [132.27080345154, 43.150178909302], [132.26972007751, 43.147619247437], [132.23969078064, 43.066747665405], [132.23856544495, 43.06308555603], [132.21774482727, 42.969827651978], [132.21717262268, 42.966203689575], [132.2170009613, 42.962057113647], [132.22033882141, 42.878782272339], [132.2207698822, 42.874921798706], [132.22145271301, 42.871744155884], [132.22241783142, 42.86859703064], [132.22366142273, 42.86549949646], [132.22518348694, 42.862459182739], [132.22736549377, 42.85891532898], [132.251745224, 42.824151992798], [132.2546749115, 42.820516586304], [132.25721549988, 42.817850112915], [132.25998878479, 42.815305709839], [132.26297950745, 42.812894821167], [132.26617622376, 42.810625076294], [132.26956367493, 42.808507919312], [132.27313423157, 42.806554794311], [132.2768611908, 42.804773330688], [132.28074073792, 42.80316734314], [132.28474617004, 42.801748275757], [132.28886604309, 42.800519943237], [132.29308509827, 42.799486160278], [132.29737663269, 42.798654556274], [132.30172920227, 42.798028945923], [132.30612373352, 42.797605514526], [132.31053733826, 42.797395706177], [132.31495475769, 42.797391891479], [132.31935691834, 42.797597885132], [132.32271766663, 42.797899246216], [132.36364936829, 42.802328109741], [132.36846733093, 42.803003311157], [132.37270927429, 42.803831100464], [132.37686347961, 42.804857254028], [132.38090705872, 42.806077957153], [132.38482475281, 42.807493209839], [132.3886051178, 42.809091567993], [132.3922252655, 42.810865402222], [132.39567375183, 42.812814712524], [132.3989315033, 42.814924240112], [132.4019908905, 42.817186355591], [132.40483283997, 42.819593429565], [132.40744590759, 42.822134017944], [132.40982246399, 42.824796676636], [132.41195106506, 42.827569961548], [132.41382408142, 42.830442428589], [132.41542625427, 42.833402633667], [132.41675758362, 42.836439132691], [132.41781425476, 42.83953666687], [132.41858482361, 42.842679977417], [132.41906547546, 42.845857620239], [132.41926383972, 42.849306106567], [132.41930580139, 42.868963241577], [132.44619941711, 42.881399154663], [132.46071434021, 42.873407363892], [132.54000282288, 42.809183120728], [132.54393577576, 42.806318283081], [132.54731559753, 42.804197311401], [132.55087089539, 42.80223274231], [132.55459403992, 42.800439834595], [132.55846214294, 42.798826217651], [132.56246376038, 42.797395706177], [132.56657600403, 42.796155929565], [132.57078742981, 42.795110702515], [132.57507514954, 42.794267654419], [132.57942771912, 42.793630599976], [132.58381843567, 42.793195724487], [132.58822822571, 42.792970657349], [132.59264564514, 42.79295539856], [132.59704780579, 42.79314994812], [132.60141563416, 42.79355430603], [132.60616111755, 42.794237136841], [132.70386314392, 42.811441421509], [132.70856285095, 42.810869216919], [132.70978736877, 42.807447433472], [132.73392295837, 42.749418258667], [132.73558616638, 42.745973587036], [132.73734855652, 42.743005752563], [132.73937034607, 42.740118026734], [132.74164390564, 42.737333297729], [132.74415779114, 42.734655380249], [132.74690437317, 42.732099533081], [132.74987220764, 42.72967338562], [132.75304985046, 42.727392196655], [132.75643348694, 42.725252151489], [132.7758808136, 42.713735580444], [132.77939414978, 42.711782455444], [132.78321266174, 42.709936141968], [132.80623054504, 42.699605941772], [132.80987358093, 42.698080062866], [132.81385993958, 42.6966381073], [132.81796073914, 42.695390701294], [132.82216072083, 42.694337844849], [132.82602119446, 42.693555831909], [132.83858680725, 42.691305160523], [132.84313392639, 42.690618515015], [132.84751319885, 42.690176010132], [132.85191917419, 42.689939498901], [132.85632896423, 42.68991279602], [132.86072349548, 42.690095901489], [132.86508750916, 42.690488815308], [132.86939811707, 42.691087722778], [132.87363624573, 42.691892623901], [132.87779045105, 42.692899703979], [132.88183784485, 42.694101333618], [132.88575935364, 42.69549369812], [132.88954353333, 42.697072982788], [132.89317131042, 42.698831558228], [132.89695549011, 42.700956344605], [132.92192649841, 42.716279983521], [132.92454719543, 42.717977523804], [132.92761802673, 42.720220565796], [132.93047523499, 42.722612380982], [132.93362236023, 42.724809646607], [132.93362617493, 42.721307754517], [132.93340110779, 42.718111038208], [132.93346977234, 42.714906692505], [132.93382453918, 42.711706161499], [132.93446922302, 42.708524703979], [132.93539619446, 42.705377578735], [132.93660163879, 42.702272415161], [132.93808174133, 42.699228286743], [132.93983268738, 42.696256637573], [132.94184303284, 42.693368911743], [132.94410514832, 42.690576553345], [132.94682121277, 42.687688827515], [132.9792766571, 42.655897140503], [132.98159217834, 42.65375328064], [132.98454856873, 42.651319503784], [132.98770713806, 42.649034500122], [132.99106407166, 42.646894454956], [132.99460029602, 42.644918441773], [132.99830055237, 42.643114089966], [133.00214576721, 42.641485214233], [133.00612449646, 42.640035629272], [133.01022148132, 42.638780593872], [133.01441383362, 42.637720108032], [133.01868629456, 42.63685798645], [133.02301597595, 42.636201858521], [133.02739143372, 42.635751724243], [133.03026390076, 42.635568618774], [133.08846473694, 42.632772445679], [133.09361839294, 42.632703781128], [133.15789604187, 42.633680343628], [133.16229820251, 42.633852005005], [133.16665458679, 42.634229660034], [133.1709651947, 42.634817123413], [133.17520713806, 42.635606765747], [133.17936134338, 42.636602401733], [133.18340873718, 42.637788772583], [133.18733406067, 42.639169692993], [133.1921749115, 42.641229629517], [133.22798347473, 42.658609390259], [133.232213974, 42.660905838013], [133.23549079895, 42.66298866272], [133.23857307434, 42.665224075317], [133.24143791199, 42.667604446411], [133.24432563782, 42.670370101929], [133.25827217102, 42.68500328064], [133.39063453674, 42.709539413452], [133.39582633972, 42.710725784302], [133.39880943298, 42.711568832397], [133.47056388855, 42.733331680298], [133.5, 42.742780308665], [133.5, 43.054036684242], [133.5, 43.365293059819], [133.5, 43.676549435396], [133.5, 43.987805810973], [133.5, 44.29906218655], [133.5, 44.610318562127], [133.5, 44.921574937704], [133.5, 45.232831313281], [133.5, 45.544087688858], [133.5, 45.855344064435],
                ],
                [
                    [132.95315361023, 42.772005081177], [132.95784568787, 42.771757125855], [132.96607780457, 42.762990951538], [132.9484500885, 42.747819900513], [132.9449672699, 42.745100021362], [132.95315361023, 42.772005081177],
                ],
            ],
        ];
    }
}
