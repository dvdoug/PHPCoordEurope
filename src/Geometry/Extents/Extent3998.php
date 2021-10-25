<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Germany - onshore east of 13.5°E.
 * @internal
 */
class Extent3998
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [13.5, 48.578570135559], [13.51861000061, 48.584579467774], [13.602776527405, 48.568054199219], [13.654721260071, 48.551662445068], [13.676942825318, 48.532287597656], [13.725996017456, 48.515586853027], [13.803749084473, 48.582633972168], [13.825415611267, 48.631107330322], [13.819787444609, 48.687394016228], [13.814722061157, 48.738052368164], [13.826148500753, 48.75955987438], [13.833610534668, 48.77360534668], [13.81826210022, 48.779853820801], [13.812012672425, 48.800205230713], [13.780137062073, 48.834022521973], [13.761665344238, 48.845966339111], [13.745623588562, 48.870758056641], [13.728123664856, 48.881313323975], [13.72624167516, 48.881181153515], [13.699443817139, 48.879299163818], [13.672221183777, 48.889442443848], [13.651943206787, 48.904438018799], [13.626110076904, 48.947635650635], [13.595345497132, 48.957424163818], [13.564826011658, 48.973667144775], [13.509721755982, 48.972496032715], [13.5, 48.975552020074], [13.5, 48.777061077816], [13.5, 48.578570135559],
                ],
            ],
            [
                [
                    [13.4, 50.528385267947], [13.41847076416, 50.541872406006], [13.410831832886, 50.550550842285], [13.441110992432, 50.589720153809], [13.482221984864, 50.609442138672], [13.534721755982, 50.622221374512], [13.569443130493, 50.625830078125], [13.634165191651, 50.630827331543], [13.791109466553, 50.668882751465], [13.803610229492, 50.688192749023], [13.890693092346, 50.714441680908], [14.255553817749, 50.743048095703], [14.411388015747, 50.782217407227], [14.46833190918, 50.834997558594], [14.421249008179, 50.846105957032], [14.358053779602, 50.895132446289], [14.385554885864, 50.937498474121], [14.406248664856, 50.952494049072], [14.591664886475, 50.936659240723], [14.669166183472, 50.905554199219], [14.697221374512, 50.882498168945], [14.728332138062, 50.823606872559], [14.731387710571, 50.781103515625], [14.719235038757, 50.758257293701], [14.751666641236, 50.747221374512], [14.817777252197, 50.729162597656], [14.839721298218, 50.723883056641], [14.871527290344, 50.718328857422], [14.90291557312, 50.719717407227], [14.924998855591, 50.756384277344], [14.928332901001, 50.765829467773], [14.92617855072, 50.783052825928], [14.996944046021, 50.859442138672], [15.03111038208, 50.902494812012], [15.06555519104, 50.952215576172], [15.078887557984, 50.978330993652], [15.094443893433, 51.018606567383], [15.120383968095, 51.10139058431], [15.132220840454, 51.139166259766], [15.133818244934, 51.186659240723], [15.102637863159, 51.216799163819], [15.083332633972, 51.233610534668], [15.07166633606, 51.257219696045], [15.081833457947, 51.268049621582], [15.075555419922, 51.340826416016], [15.053054428101, 51.369993591309], [15.021110153198, 51.381941223145], [14.93749961853, 51.398603820801], [14.839443778992, 51.426523590088], [14.814998245239, 51.454721832276], [14.85923538208, 51.507494354248], [14.856110191346, 51.566732788086], [14.822082138062, 51.590967559815], [14.798055267334, 51.602217102051], [14.767984962463, 51.62388458252], [14.700971221924, 51.720064544678], [14.710137939453, 51.748190307617], [14.745415306091, 51.76527633667], [14.789860343933, 51.796942138672], [14.817551231384, 51.843111419678], [14.860765075684, 51.969862365723], [14.807915306092, 52.145620727539], [14.792497253418, 52.154440307617], [14.755832290649, 52.160276794434], [14.698886489868, 52.172773742676], [14.679859733582, 52.188330078125], [14.634442901611, 52.496247863769], [14.643957710266, 52.521871185303], [14.663193321228, 52.53318939209], [14.685137367249, 52.53985748291], [14.733540153503, 52.590550994873], [14.739581680298, 52.672978973389], [14.695777511597, 52.706830596924], [14.654581642151, 52.727220153809], [14.614443397522, 52.739163970948], [14.578749275208, 52.752496337891], [14.548331832886, 52.775277709961], [14.483333206177, 52.830827331543], [14.454999542236, 52.848329162598], [14.305415725708, 52.918607330322], [14.249166107178, 52.962777709961], [14.247637367248, 53.059232330322], [14.268888092041, 53.073327636719], [14.300277328492, 53.084718322754], [14.325415229797, 53.088883972168], [14.393739318848, 53.118768310547], [14.447360610962, 53.148885345459], [14.480276679993, 53.210134124756], [14.491689300537, 53.244165039063], [14.512776947022, 53.404443359375], [14.51325461348, 53.438474273682], [14.513261413574, 53.438958740234], [14.409720993042, 53.655549621582], [14.37562713623, 53.799066162109], [14.374438513, 53.807165166], [14.349281395326, 53.878961294969], [14.330782561335, 53.931209029487], [14.330782513001, 53.931209166], [14.323409253268, 53.95226497301], [14.319902512923, 53.962279165888], [14.318887329102, 53.969018554688], [14.315831756592, 53.999993896484], [14.325555419922, 54.028604125977], [14.342428589574, 54.082992214398], [14.267942398385, 54.132038254283], [14.163918011556, 54.199087571943], [14.160525024559, 54.201147442383], [14.156419744792, 54.203351011001], [14.152077875816, 54.205391821997], [14.147518028914, 54.207261112806], [14.142759759356, 54.208950856251], [14.137823482165, 54.210453795305], [13.931859647561, 54.211961176294], [13.895081615385, 54.220039248213], [13.890815726194, 54.220897071159], [13.860866398285, 54.226233982298], [13.843506520289, 54.231209601555], [13.833404060081, 54.237506720882], [13.804122938931, 54.264484022767], [13.792963686274, 54.283388877559], [13.790837888568, 54.28657098081], [13.788461689704, 54.289527383016], [13.785760854686, 54.292386233752], [13.782746904243, 54.295135270396], [13.779432709671, 54.297762699083], [13.775832438326, 54.300257245588], [13.771961493378, 54.302608204], [13.767836448094, 54.304805482978], [13.763474974923, 54.306839649373], [13.758895769677, 54.308701969043], [13.754118471147, 54.310384444648], [13.749163576495, 54.311879850295], [13.744052352799, 54.313181762835], [13.738806745132, 54.314284589715], [13.733449281602, 54.315183593218], [13.728002975753, 54.315874911022], [13.72249122678, 54.316355572947], [13.716937718002, 54.316623513855], [13.710539563323, 54.316661043202], [13.665445684723, 54.315744079787], [13.661448763761, 54.315606034286], [13.655913884009, 54.315230618038], [13.651310998778, 54.314737495808], [13.647111771759, 54.316000333204], [13.641996899019, 54.317298060658], [13.636748112, 54.318396593835], [13.631387952602, 54.31929121347], [13.62593944607, 54.319978076079], [13.620285922976, 54.321307366409], [13.625681314957, 54.322537503924], [13.631162904177, 54.323125798818], [13.636567218512, 54.323922876418], [13.640440303413, 54.324632671251], [13.657249063653, 54.327975420293], [13.663146454318, 54.32932455525], [13.668183244503, 54.330723434469], [13.673053472842, 54.332312326452], [13.677736328707, 54.334084447938], [13.682211794051, 54.336032232516], [13.686460728542, 54.33814736265], [13.690464951102, 54.340420804898], [13.694207317529, 54.342842848188], [13.697671793861, 54.345403144991], [13.700843525183, 54.348090755223], [13.703708899558, 54.350894192683], [13.706255606832, 54.353801473861], [13.708472692024, 54.356800168888], [13.710350603079, 54.359877454422], [13.711881232762, 54.363020168266], [13.713241528264, 54.366853413309], [13.728488746064, 54.424433217123], [13.72917145225, 54.428668544399], [13.729263130376, 54.431936521679], [13.728989208916, 54.435201078221], [13.728350776016, 54.438448232159], [13.72735048253, 54.441664073016], [13.725657525485, 54.445487077555], [13.712061129638, 54.470660345688], [13.709204489421, 54.474972286806], [13.688545582406, 54.501608484118], [13.686709627222, 54.503826095448], [13.68398788641, 54.506682600096], [13.681562928595, 54.508906938642], [13.67307271633, 54.516253440453], [13.669428246511, 54.519138830825], [13.665802259703, 54.521630060656], [13.661904551076, 54.523977466491], [13.65775180876, 54.526170972041], [13.653472268941, 54.528153355001], [13.622294355792, 54.541662843443], [13.617627813978, 54.54354373203], [13.61281794134, 54.545220668774], [13.607830117342, 54.546710340165], [13.602685751038, 54.548006347547], [13.597406930479, 54.549103123612], [13.592016327111, 54.549995956541], [13.586537097555, 54.550681010448], [13.580992783185, 54.551155342017], [13.575407207972, 54.55141691328], [13.571803776779, 54.551456425664], [13.566044558795, 54.557699460033], [13.594043820425, 54.572952488555], [13.607943730473, 54.57713191787], [13.612823103091, 54.578717992786], [13.617530875705, 54.580492348996], [13.62202977402, 54.582442256947], [13.62630055755, 54.584559390186], [13.63032495169, 54.586834706873], [13.634085725737, 54.589258488082], [13.637566766626, 54.591820379009], [13.640753148076, 54.594509432897], [13.642695424085, 54.596355669229], [13.651090705368, 54.604748312341], [13.654117147346, 54.608135769903], [13.656343778493, 54.611135281095], [13.658229068983, 54.614213233512], [13.659764878932, 54.61735646218], [13.660944558448, 54.620551519997], [13.66171851951, 54.623562306511], [13.664403382673, 54.63673582456], [13.664879534772, 54.640104556298], [13.664966454903, 54.643372455488], [13.664569866622, 54.647332982945], [13.659640758112, 54.673050467146], [13.65842169139, 54.677192703605], [13.657050620022, 54.680362553358], [13.655325740848, 54.683473526096], [13.653254369965, 54.686512285743], [13.650845314405, 54.689465802991], [13.648108835502, 54.692321411386], [13.645056605895, 54.695066861892], [13.641701660324, 54.697690375697], [13.63805834043, 54.70018069504], [13.634142233765, 54.702527131815], [13.631103534494, 54.704152170738], [13.594492545993, 54.722787721432], [13.589511346446, 54.72509911586], [13.584878171577, 54.726954810279], [13.580045681232, 54.728630392798], [13.575034610286, 54.73011866685], [13.569866467947, 54.731413239672], [13.564563444765, 54.732508550026], [13.559148316589, 54.73339989231], [13.55364434588, 54.734083436976], [13.547466202257, 54.734593616734], [13.526132739539, 54.73581431711], [13.521740051172, 54.735998898774], [13.516112287527, 54.736044133262], [13.510150119074, 54.735857301738], [13.48471852546, 54.734428748298], [13.479116572873, 54.734000785297], [13.404073825739, 54.726288894996], [13.4, 54.726140504366], [13.4, 54.518164950908], [13.4, 54.31018939745], [13.40159439379, 54.311765665317], [13.404117901351, 54.314679044254], [13.406311437593, 54.317683039714], [13.40816555087, 54.320764805471], [13.409672235509, 54.323911159938], [13.410824967222, 54.327108642348], [13.411618732276, 54.330343570187], [13.412067060971, 54.333853176257], [13.412799507388, 54.3461947349], [13.412832471602, 54.348960749031], [13.41253461946, 54.352224576265], [13.411873104408, 54.355470081502], [13.410850676722, 54.358683361088], [13.409195102184, 54.362386311943], [13.402277066719, 54.375281417974], [13.400761730865, 54.377812097207], [13.42019228811, 54.388032583576], [13.433894690963, 54.393183790381], [13.51304661114, 54.395064228464], [13.511394041297, 54.390851130109], [13.510591521655, 54.387616851419], [13.510152070774, 54.384358677518], [13.510077486421, 54.381090564024], [13.510368002993, 54.377826505957], [13.51102229197, 54.374580477808], [13.512037469046, 54.371366373745], [13.513409107892, 54.368197948214], [13.51513126046, 54.365088757201], [13.517196483725, 54.362052100374], [13.519595872723, 54.359100964386], [13.522319099727, 54.356247967548], [13.525354459375, 54.353505306122], [13.528688919545, 54.350884702448], [13.532308177735, 54.348397355123], [13.535999973213, 54.346165319347], [13.553806261715, 54.336044898815], [13.558043850471, 54.333799007187], [13.562418034155, 54.33177205732], [13.567008429418, 54.329916977385], [13.571795409978, 54.328241688617], [13.57675851778, 54.326753343694], [13.581876549903, 54.325458296473], [13.587127648504, 54.32436207511], [13.592489393422, 54.323469358688], [13.597938897056, 54.322783957435], [13.603593317869, 54.321455680316], [13.598198715159, 54.320224590709], [13.592717963848, 54.319634851091], [13.587315029199, 54.318835879286], [13.581439182081, 54.317705897232], [13.4, 54.27662771838], [13.4, 53.954060222886], [13.4, 53.631492727392], [13.4, 53.308925231898], [13.4, 52.986357736405], [13.4, 52.663790240911], [13.4, 52.141222745417], [13.4, 51.818655249923], [13.4, 51.496087754429], [13.4, 51.173520258935], [13.4, 50.850952763441], [13.4, 50.528385267947],
                ],
            ],
            [
                [
                    [13.5, 54.633563686355], [13.50009921462, 54.633658566222], [13.516598497494, 54.650268812721], [13.519582891337, 54.653628316789], [13.521800242852, 54.656631878104], [13.523674612576, 54.659713237326], [13.525197906437, 54.662859214806], [13.526363527203, 54.666056351561], [13.527166403987, 54.66929096669], [13.527603015329, 54.672549215789], [13.527671405692, 54.675817150121], [13.527371195307, 54.679080776283], [13.526703583287, 54.682326116119], [13.525671343971, 54.685539266623], [13.52427881649, 54.688706459576], [13.522531887581, 54.691814120655], [13.520437967685, 54.694848927763], [13.518005960425, 54.697797868327], [13.515246225556, 54.70064829531], [13.512170535544, 54.703387981697], [13.508792025934, 54.706005173212], [13.505125139709, 54.708488639037], [13.500496088738, 54.711202789167], [13.5, 54.711466970006], [13.5, 54.633563686355],
                ],
            ],
        ];
    }
}
