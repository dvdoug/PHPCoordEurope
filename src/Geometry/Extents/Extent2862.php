<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Germany - east of 12°E.
 * @internal
 */
class Extent2862
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [11.633609771729, 53.04333114624], [11.638890266418, 53.036380767822], [11.685830116272, 52.98498916626], [11.693050384521, 52.978881835938], [11.707779884338, 52.977489471436], [11.77583026886, 52.967498779297], [11.847780227661, 52.955551147461], [11.849439620972, 52.944721221924], [11.826390266418, 52.924160003662], [11.836110115051, 52.916381835938], [11.905550003052, 52.894718170166], [11.962989807129, 52.88447189331], [11.993060112, 52.880828857422], [12, 52.881475962573], [12, 52.666666666667], [12, 52.5], [12, 52.333333333333], [12, 52.166666666667], [12, 52], [12, 51.833333333333], [12, 51.666666666667], [12, 51.5], [12, 51.333333333333], [12, 51.166666666667], [12, 51], [12, 50.833333333334], [12, 50.666666666667], [12, 50.5], [12, 50.333333333333], [12, 50.166666666667], [12, 50], [12, 49.833333333334], [12, 49.666666666667], [12, 49.5], [12, 49.333333333333], [12, 49.166666666667], [12, 49], [12, 48.833333333334], [12, 48.666666666667], [12, 48.5], [12, 48.333333333333], [12, 48.166666666667], [12, 48], [12, 47.833333333334], [12, 47.666666666667], [12, 47.623683179946], [12.006387710571, 47.624443054199], [12.059999465942, 47.620552062988], [12.111110687256, 47.614715576172], [12.141387939453, 47.611106872559], [12.201557159424, 47.612987518311], [12.207316398621, 47.633377075195], [12.201110839844, 47.657493591309], [12.454999923706, 47.667770385742], [12.514443397522, 47.63325881958], [12.566665649414, 47.64193725586], [12.576390266419, 47.644165039063], [12.603401184082, 47.672286987305], [12.665833473206, 47.684997558594], [12.73694229126, 47.682704925537], [12.827845573425, 47.621246337891], [12.80597114563, 47.614856719971], [12.788193702698, 47.583534240723], [12.806665420532, 47.554718017578], [12.957870483398, 47.477016448975], [13.012498855591, 47.469787597656], [13.053332328797, 47.497566223145], [13.100137710571, 47.642913818359], [13.077499389649, 47.687358856201], [13.058332443237, 47.706108093262], [13.023054122925, 47.72416305542], [12.993748664856, 47.71416091919], [12.913956642151, 47.724998474121], [12.944166183472, 47.788745880127], [12.970554351807, 47.810554504395], [13.008888244629, 47.854164123535], [12.966665267945, 47.906944274902], [12.918888092041, 47.95777130127], [12.865342140198, 47.994598388672], [12.857048034668, 48.011940002441], [12.83749961853, 48.029998779297], [12.799165725708, 48.054580688477], [12.766248703003, 48.082218170166], [12.759720802307, 48.121730804444], [12.871248245239, 48.202911376953], [13.017775535584, 48.259437561035], [13.154443740845, 48.292221069336], [13.258054733277, 48.298881530762], [13.285276412964, 48.305274963379], [13.313055038452, 48.315826416016], [13.334999084473, 48.328605651856], [13.394998550415, 48.366104125977], [13.421874046326, 48.391036987305], [13.437915802002, 48.429439544678], [13.45749950409, 48.515552520752], [13.443227767944, 48.560237884522], [13.51861000061, 48.584579467774], [13.602776527405, 48.568054199219], [13.654721260071, 48.551662445068], [13.676942825317, 48.532287597656], [13.725996017456, 48.515586853027], [13.803749084473, 48.582633972168], [13.825415611267, 48.631107330322], [13.814722061157, 48.738052368164], [13.833610534668, 48.77360534668], [13.81826210022, 48.779853820801], [13.812012672425, 48.800205230713], [13.780137062073, 48.834022521973], [13.761665344238, 48.845966339111], [13.745623588562, 48.870758056641], [13.728123664856, 48.881313323975], [13.699443817139, 48.879299163818], [13.672221183777, 48.889442443848], [13.651943206787, 48.904438018799], [13.626110076904, 48.947635650635], [13.595345497132, 48.957424163818], [13.564826011658, 48.973667144775], [13.509721755982, 48.972496032715], [13.402542114258, 49.006187438965], [13.396110534668, 49.049163818359], [13.318470954895, 49.100830078125], [13.173053741455, 49.167221069336], [13.03111076355, 49.287773132324], [12.95902633667, 49.334926605225], [12.887203216553, 49.340377807617], [12.797221183777, 49.339859008789], [12.674444198608, 49.424995422364], [12.597776412964, 49.527496337891], [12.578609466553, 49.560554504395], [12.554721832275, 49.616661071777], [12.515484809875, 49.677219390869], [12.476110458374, 49.690826416016], [12.455554962158, 49.695549011231], [12.4684715271, 49.783470153809], [12.545971870422, 49.909580230713], [12.491388320923, 49.975830078125], [12.471109390259, 49.985832214355], [12.429443359375, 49.993888854981], [12.307498931885, 50.047492980957], [12.265554428101, 50.066108703613], [12.206142425537, 50.10620880127], [12.193818092347, 50.13631439209], [12.20916557312, 50.163608551026], [12.122082710266, 50.30846786499], [12.093704223633, 50.322532653809], [12.182638168335, 50.31457901001], [12.28111076355, 50.218467712402], [12.323055267334, 50.206665039062], [12.325553894043, 50.236106872559], [12.398611068726, 50.30916595459], [12.486110687256, 50.373054504395], [12.515415191651, 50.39249420166], [12.620971679687, 50.41194152832], [12.671388626099, 50.41194152832], [12.740416526795, 50.431522369385], [12.772220611572, 50.444995880127], [12.825138092041, 50.453048706055], [12.855833053589, 50.44221496582], [12.898332595825, 50.425273895264], [12.917221069336, 50.41471862793], [12.944721221924, 50.409996032715], [12.985557556153, 50.418327331543], [12.991943359375, 50.421104431152], [13.015276908874, 50.439300537109], [13.079442977905, 50.498054504394], [13.1872215271, 50.502773284912], [13.20611000061, 50.520412445069], [13.223227500916, 50.551422119141], [13.24958229065, 50.589164733887], [13.378332138061, 50.629440307617], [13.414859771729, 50.611385345459], [13.436665534973, 50.605270385742], [13.463401794434, 50.601661682129], [13.51847076416, 50.641872406006], [13.510831832886, 50.650550842285], [13.541110992432, 50.689720153809], [13.582221984864, 50.709442138672], [13.634721755982, 50.722221374512], [13.669443130493, 50.725830078125], [13.734165191651, 50.730827331543], [13.891109466553, 50.768882751465], [13.903610229492, 50.788192749023], [13.990693092346, 50.814441680908], [14.155553817749, 50.843048095703], [14.311388015747, 50.882217407227], [14.36833190918, 50.934997558594], [14.321249008179, 50.946105957032], [14.258053779602, 50.995132446289], [14.285554885864, 51.037498474121], [14.306248664856, 51.052494049072], [14.491664886475, 51.036659240723], [14.569166183472, 51.005554199219], [14.597221374512, 50.982498168945], [14.628332138062, 50.923606872559], [14.631387710571, 50.881103515625], [14.619235038757, 50.858257293701], [14.651666641236, 50.847221374512], [14.717777252197, 50.829162597656], [14.739721298218, 50.823883056641], [14.771527290344, 50.818328857422], [14.80291557312, 50.819717407227], [14.824998855591, 50.856384277344], [14.828332901001, 50.865829467773], [14.82617855072, 50.883052825928], [14.896944046021, 50.959442138672], [14.93111038208, 51.002494812012], [14.96555519104, 51.052215576172], [14.978887557984, 51.078330993652], [14.994443893433, 51.118606567383], [15.032220840454, 51.239166259766], [15.033818244934, 51.286659240723], [15.002637863159, 51.316799163819], [14.983332633972, 51.333610534668], [14.97166633606, 51.357219696045], [14.981833457947, 51.368049621582], [14.975555419922, 51.440826416016], [14.953054428101, 51.469993591309], [14.921110153198, 51.481941223145], [14.83749961853, 51.498603820801], [14.739443778992, 51.526523590088], [14.71499824524, 51.554721832275], [14.75923538208, 51.607494354248], [14.756110191346, 51.666732788086], [14.722082138062, 51.690967559815], [14.698055267334, 51.702217102051], [14.667984962463, 51.72388458252], [14.600971221924, 51.820064544678], [14.610137939453, 51.848190307617], [14.645415306092, 51.86527633667], [14.689860343933, 51.896942138672], [14.717551231384, 51.943111419678], [14.760765075684, 52.069862365723], [14.707915306092, 52.245620727539], [14.692497253418, 52.254440307617], [14.655832290649, 52.260276794434], [14.598886489869, 52.272773742676], [14.579859733582, 52.288330078125], [14.534442901611, 52.396247863769], [14.543957710266, 52.421871185303], [14.563193321228, 52.43318939209], [14.585137367249, 52.43985748291], [14.633540153503, 52.490550994873], [14.639581680298, 52.572978973389], [14.595777511597, 52.606830596924], [14.554581642151, 52.627220153809], [14.514443397522, 52.639163970948], [14.478749275208, 52.652496337891], [14.448331832886, 52.675277709961], [14.383333206177, 52.730827331543], [14.354999542236, 52.748329162598], [14.205415725708, 52.818607330322], [14.149166107178, 52.862777709961], [14.147637367248, 52.959232330322], [14.168888092041, 52.973327636719], [14.200277328492, 52.984718322754], [14.225415229797, 52.988883972168], [14.293739318848, 53.018768310547], [14.347360610962, 53.048885345459], [14.380276679993, 53.110134124756], [14.391689300537, 53.144165039062], [14.412776947022, 53.304443359375], [14.413253048051, 53.338362746078], [14.413261413574, 53.338958740234], [14.309720993042, 53.555549621582], [14.27562713623, 53.699066162109], [14.274438513, 53.707165166], [14.249281395328, 53.778961294962], [14.230782513001, 53.831209166], [14.223409253268, 53.85226497301], [14.219902512923, 53.862279165888], [14.218887329102, 53.869018554688], [14.215831756592, 53.899993896484], [14.225555419922, 53.928604125977], [14.242428589574, 53.982992214398], [14.244122450898, 53.98929410411], [14.224499760974, 54.05794304601], [14.204560513, 54.127699166], [14.204560594212, 54.127699165164], [14.204560575978, 54.127699228909], [14.239372575996, 54.127354228979], [14.265884002822, 54.137108579729], [14.322594513, 54.157974166], [14.342791217294, 54.165414662377], [14.352222578163, 54.16888922669], [14.599677450914, 54.383333228987], [14.749999510672, 54.500000171366], [14.636722514, 54.536222167], [14.414166513, 54.658333167], [14.414166513, 54.812500167], [14.172777513, 54.812500167], [14.172777448459, 54.81250022595], [13.992835514695, 54.962442169034], [13.889251012958, 54.991901666996], [13.785666575014, 55.021361105108], [13.462834521344, 55.014751724306], [13.147958508206, 55.008305171652], [12.933999575, 54.833805104001], [12.749972449, 54.763805104], [12.443249574, 54.687750229], [12.277666574, 54.549416729], [12.112083574, 54.411083229], [12, 54.382168862946], [12, 54.333333333333], [12, 54.166666666667], [12, 54], [12, 53.833333333333], [12, 53.666666666667], [12, 53.350317829711], [11.988610267639, 53.33943939209], [12, 53.32209478444], [12, 53.318941179269], [11.995829582214, 53.309440612793], [11.893890380859, 53.25], [11.78516960144, 53.242980957031], [11.676719665527, 53.255420684815], [11.60359954834, 53.23371887207], [11.575180053711, 53.189041137695], [11.592690467835, 53.166358947754], [11.646300315857, 53.137649536133], [11.663969993591, 53.120590209961], [11.672269821167, 53.092380523682], [11.671810150146, 53.075508117676], [11.633609771729, 53.04333114624],
                ],
            ],
        ];
    }
}