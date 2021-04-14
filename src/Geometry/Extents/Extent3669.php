<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Norway - onshore - 25ºE to 26ºE.
 * @internal
 */
class Extent3669
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [26, 71.169928193823], [25.990951549336, 71.16973045481], [25.981137703702, 71.169302538535], [25.97182967745, 71.168695465045], [25.95687387674, 71.167558544548], [25.94707796711, 71.16669474632], [25.945496057597, 71.168188602808], [25.941836620113, 71.171191338898], [25.937583561577, 71.174105834051], [25.932754899175, 71.176919572572], [25.92737114788, 71.179620466509], [25.921455235422, 71.182196908088], [25.915032406316, 71.184637820136], [25.908130115311, 71.186932704281], [25.9007779107, 71.189071686695], [25.893007307963, 71.191045561182], [25.888843425241, 71.191997009977], [25.86993219257, 71.196160051183], [25.865938833684, 71.197008509075], [25.85742995285, 71.198626646537], [25.848607733823, 71.200056420614], [25.839510137437, 71.201291670032], [25.830176335027, 71.20232707029], [25.820646537013, 71.203158157063], [25.810961816554, 71.203781345846], [25.801163929099, 71.204193947744], [25.791295128693, 71.204394181342], [25.781397981892, 71.204381180582], [25.771515180198, 71.20415499862], [25.761689351888, 71.203716607643], [25.751962874151, 71.203067894642], [25.74237768642, 71.202211653166], [25.732975105799, 71.201151571083], [25.72476787003, 71.200036606604], [25.612971502359, 71.183541526538], [25.603584622136, 71.1820109341], [25.594984884414, 71.180365374342], [25.586723953428, 71.178539469037], [25.578837326294, 71.176541079392], [25.571358859017, 71.174378807452], [25.564320620086, 71.172061958494], [25.557752752418, 71.16960050039], [25.551683344239, 71.167005020121], [25.545698665353, 71.164052483129], [25.500292007284, 71.139535767639], [25.497408356631, 71.139435975604], [25.486442257199, 71.13891748649], [25.364566062074, 71.131332534393], [25.356967323443, 71.130790073313], [25.347433062481, 71.129915112451], [25.343659753509, 71.129506845657], [25.287152589377, 71.123112432605], [25.281581218617, 71.122440678282], [25.272465585345, 71.121160807459], [25.263615930206, 71.119687654982], [25.255070337037, 71.118027565134], [25.246865554128, 71.116187686263], [25.24298045709, 71.115222907969], [25.22616700734, 71.110906495532], [25.222225095906, 71.109859193707], [25.214809434876, 71.107683610346], [25.20783528679, 71.10535421408], [25.201332516515, 71.102881026348], [25.195328930236, 71.100274684115], [25.189850157102, 71.097546393532], [25.184919540867, 71.094707881163], [25.180558041983, 71.09177134303], [25.176784150506, 71.088749391678], [25.173613810156, 71.085655001528], [25.171775226867, 71.083471535844], [25.148695967129, 71.053387167445], [25.146420453616, 71.049702647094], [25.144923492012, 71.04560263455], [25.139845794791, 71.019100466009], [25.139734927132, 71.015091242312], [25.140374844702, 71.011847795323], [25.141652949408, 71.008628118714], [25.143563475008, 71.005445989036], [25.146097960069, 71.002315016281], [25.149245288962, 70.999248585876], [25.152833510714, 70.995789003916], [25.132300895019, 71.002165952269], [25.127449659629, 71.00372209175], [25.120080631899, 71.005832986052], [25.112303371881, 71.00777714033], [25.106990410238, 71.008959011054], [25.075707824172, 71.015589761232], [25.072866884775, 71.016176504847], [25.064369846402, 71.017761533665], [25.055569683228, 71.019156952168], [25.046504264472, 71.020356747356], [25.03721262524, 71.021355747803], [25.027734795665, 71.022149646377], [25.018111625329, 71.02273501919], [25.008384603787, 71.023109340683], [25, 71.023247803825], [25, 70.720276360952], [25, 70.417304918078], [25, 70.114333475205], [25, 69.811362032332], [25, 69.508390589458], [25, 69.205419146585], [25, 68.902447703711], [25, 68.599476260838], [25.076385498047, 68.621383666992], [25.105068206787, 68.637908935547], [25.104997634888, 68.669784545898], [25.154720306397, 68.767776489258], [25.169858932495, 68.789024353027], [25.188331604004, 68.803329467773], [25.214443206787, 68.817489624023], [25.23416519165, 68.825271606445], [25.363887786865, 68.873886108398], [25.384719848633, 68.880554199219], [25.406944274902, 68.886383056641], [25.437776565552, 68.891105651856], [25.481803894043, 68.89151763916], [25.508052825928, 68.888320922852], [25.562776565552, 68.879432678223], [25.585552215576, 68.878875732422], [25.617776870728, 68.882766723633], [25.639860153199, 68.894302368164], [25.652774810791, 68.906387329102], [25.661388397217, 68.911651611328], [25.692218780518, 68.933883666992], [25.761108398438, 68.989166259766], [25.768329620362, 69.045272827149], [25.732219696045, 69.109161376953], [25.708053588867, 69.209014892578], [25.713333129883, 69.255264282227], [25.739440917969, 69.318328857422], [25.752359390259, 69.339157104492], [25.770553588867, 69.353881835938], [25.811664581299, 69.368606567383], [25.833747863769, 69.385269165039], [25.874164581299, 69.486373901367], [25.953330993652, 69.584159851074], [25.970691680908, 69.618812561035], [25.969442367554, 69.64249420166], [25.944511413575, 69.665199279785], [25.959302902222, 69.685684204102], [25.983331680298, 69.704299926758], [26, 69.710329918815], [26, 69.967219781021], [26, 70.224109643226], [26, 70.480999505432], [26, 70.737889367637], [25.893048727179, 70.666694552883], [25.888236851805, 70.662975719765], [25.885031664904, 70.659892629959], [25.882428907422, 70.656748301435], [25.880569384477, 70.65380102708], [25.866277110796, 70.627211867779], [25.839600099568, 70.615182999192], [25.683187763649, 70.547479162847], [25.679814162005, 70.545954346231], [25.677140964134, 70.544655072659], [25.46243458953, 70.43604788328], [25.413976883783, 70.412349910409], [25.405172399322, 70.491230284047], [25.404625805575, 70.494029484313], [25.40341202379, 70.497250623794], [25.401579877123, 70.500434935299], [25.399136943942, 70.503568767508], [25.396093434323, 70.506638679861], [25.392462150652, 70.509631500471], [25.388258436777, 70.512534382966], [25.383500115861, 70.515334862025], [25.378207417148, 70.51802090735], [25.372402891879, 70.520580975831], [25.365697441048, 70.523151910389], [25.345507163693, 70.530302059999], [25.462755898837, 70.572344491577], [25.466253402522, 70.573648728038], [25.637151051728, 70.639381417916], [25.639645519934, 70.640361529066], [25.748025405555, 70.683934297937], [25.754371328603, 70.686685388682], [25.759811185419, 70.689398702742], [25.764719219903, 70.69222341813], [25.769074273956, 70.695147479516], [25.772185419533, 70.697581850541], [25.790733002428, 70.713202346115], [25.794269848404, 70.716575193902], [25.796057835086, 70.718651638977], [25.819468850579, 70.748153709365], [25.876338252752, 70.766523381502], [25.959730519226, 70.793859605061], [25.96386225634, 70.795264772762], [25.970355824582, 70.797713592968], [25.977085934202, 70.800633907669], [26, 70.811512915971], [26, 70.990720554897], [26, 71.169928193823],
                ],
            ],
            [
                [
                    [25, 71.083737749599], [25.001284356954, 71.089890924884], [25.001411068386, 71.094109009931], [25.000747698886, 71.097352096726], [25, 71.099196931832], [25, 71.083737749599],
                ],
            ],
        ];
    }
}
