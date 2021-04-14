<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Turkey - 37.5°E to 40.5°E onshore.
 * @internal
 */
class Extent1528
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [40.5, 41.094981368961], [40.476554370491, 41.092089315297], [40.463424672951, 41.092543178606], [40.46060317882, 41.092594975512], [40.456306335349, 41.092498638809], [40.452032416084, 41.092190973645], [40.447799767041, 41.091673298222], [40.443626556495, 41.090947832412], [40.43953069643, 41.090017688204], [40.435529765129, 41.088886856277], [40.432449708566, 41.087855572925], [40.363675827398, 41.063144621898], [40.35951509938, 41.061476989316], [40.355903494354, 41.059773804609], [40.352398636767, 41.057862892769], [40.324544129008, 41.04152067753], [40.321377975868, 41.039535034498], [40.318293681202, 41.037327041389], [40.315412034848, 41.034969182443], [40.312745377228, 41.032471572525], [40.310757921621, 41.03036135636], [40.305782628569, 41.024901225399], [40.241989144997, 41.002583452183], [40.128628350827, 40.967445932037], [40.1209480729, 40.96604989475], [40.11459772592, 40.96625024836], [40.096664864178, 40.969500417216], [39.93160410754, 41.003720757845], [39.74208561342, 41.056657016073], [39.736822650961, 41.057869676759], [39.732611713269, 41.058582976212], [39.728352701527, 41.059088185169], [39.724063894696, 41.059383132152], [39.719763701209, 41.059466548257], [39.715470579399, 41.059338072688], [39.711202957706, 41.058998254363], [39.706979154988, 41.058448549587], [39.702160405698, 41.057548721166], [39.69462304657, 41.055852812123], [39.587926138742, 41.093475803707], [39.532091571455, 41.133209975356], [39.529347618383, 41.135056932442], [39.525945990063, 41.137086145637], [39.522378779289, 41.138946054386], [39.518661273199, 41.14062867642], [39.514809408062, 41.142126789263], [39.510839700742, 41.143433961455], [39.506769177584, 41.144544580373], [39.502615301031, 41.145453876526], [39.497736191703, 41.146246047482], [39.423894622186, 41.155508283323], [39.420946388054, 41.155825796311], [39.416649476984, 41.156108157305], [39.412342138357, 41.15617887972], [39.408042861332, 41.156037657281], [39.403770100885, 41.155685093658], [39.399542198004, 41.155122699906], [39.395377300399, 41.154352887965], [39.391293284039, 41.153378960274], [39.387307675906, 41.152205095521], [39.383437578271, 41.150836330614], [39.379699594863, 41.149278538933], [39.376109759223, 41.147538404973], [39.37246485539, 41.145491309018], [39.348202502109, 41.130693908234], [39.32243344226, 41.120344889576], [39.29714014403, 41.110701230764], [39.267496470313, 41.10038882176], [39.258346176331, 41.107709031919], [39.255861737434, 41.10959489255], [39.252631402499, 41.11177643158], [39.249221724078, 41.113796817387], [39.245647309341, 41.115647380231], [39.241923476611, 41.117320177918], [39.238066189568, 41.118808030114], [39.234091988583, 41.12010454939], [39.230017919498, 41.121204168847], [39.225696569732, 41.122133135073], [39.180499983373, 41.130519099645], [39.176607778028, 41.131148001739], [39.1723394017, 41.13163021378], [39.168043042962, 41.131901867128], [39.163737142889, 41.131961792921], [39.159440184473, 41.13180973126], [39.155170612705, 41.131446332376], [39.150946754824, 41.130873153859], [39.146786741081, 41.130092653969], [39.142708426357, 41.129108181037], [39.138729313006, 41.127923959026], [39.134866475248, 41.126545069299], [39.131136485452, 41.124977428685], [39.127555342638, 41.123227763927], [39.124138403511, 41.121303582646], [39.120900316333, 41.119213140923], [39.117442086191, 41.116633438948], [39.105920017527, 41.107196133316], [39.103603102586, 41.105185970898], [39.098747069494, 41.103326532391], [39.077634885533, 41.098046640161], [39.037871462742, 41.089188784086], [39.002215347248, 41.083834489013], [38.935684928397, 41.090092815092], [38.931042151529, 41.090385410154], [38.926738953838, 41.090434953982], [38.922445548829, 41.090272471918], [38.91818036619, 41.089898658952], [38.913961714236, 41.089315117402], [38.909807700758, 41.088524350032], [38.90568565926, 41.087515972284], [38.79263746636, 41.056508226191], [38.78877111148, 41.055336945477], [38.784688304736, 41.053851176745], [38.751927777987, 41.040703776021], [38.748678917811, 41.039305932672], [38.745114355754, 41.037541439415], [38.741714914654, 41.035602994089], [38.738495167305, 41.033498913904], [38.735599480707, 41.031342180775], [38.718858963369, 41.018048724358], [38.693976924026, 41.002583586758], [38.682468548478, 40.996439710343], [38.507307915015, 40.969229692084], [38.426640245653, 40.962603609285], [38.408811703642, 40.967097911337], [38.40396970818, 40.968128248263], [38.399749834265, 40.968786033346], [38.395486560821, 40.969234779591], [38.391198185518, 40.969472558033], [38.386903115177, 40.969498345324], [38.3826197862, 40.969312028208], [38.378366584867, 40.968914404054], [38.37416176784, 40.968307177448], [38.370023383231, 40.967492952858], [38.365668653124, 40.966390060906], [38.35495386032, 40.963308407017], [38.350411069974, 40.96463436894], [38.342416489848, 40.966528240766], [38.174332661722, 40.997566381357], [38.170738536952, 40.998139957141], [38.138005538524, 41.002645195026], [38.12825185, 41.006835375885], [38.123575157252, 41.008614965413], [38.119584406516, 41.009868358377], [38.114720878887, 41.011099140996], [38.005621082931, 41.035159313409], [38.002230148499, 41.03583248089], [37.998001568431, 41.036473953661], [37.993730852323, 41.036906125304], [37.988837412238, 41.037139042628], [37.934440348995, 41.037836100849], [37.931338269544, 41.037819532029], [37.927051590868, 41.037613975529], [37.921638841049, 41.037038141943], [37.909900272411, 41.035275838512], [37.859274124765, 41.063576580202], [37.849810313026, 41.07221139199], [37.85112937029, 41.096054301041], [37.85111657808, 41.100326710433], [37.850769795503, 41.10356099893], [37.850143096344, 41.106774718315], [37.849239120314, 41.10995410476], [37.848061695903, 41.113085539125], [37.846615824716, 41.116155605358], [37.844907660742, 41.119151148057], [37.84294448465, 41.122059328957], [37.840734673191, 41.12486768209], [37.838287663843, 41.127564167386], [37.835613914834, 41.130137222469], [37.832724860704, 41.132575812443], [37.828655069328, 41.135523452133], [37.795211552987, 41.157034368734], [37.791088720898, 41.15942366937], [37.787468533338, 41.161225206061], [37.783703046149, 41.162846540864], [37.779808403143, 41.164280714162], [37.775801306307, 41.165521568826], [37.771673576448, 41.166569534769], [37.700780609433, 41.18262148655], [37.696623951739, 41.183452022125], [37.692382395748, 41.18408151504], [37.688099524874, 41.184501519635], [37.68379372139, 41.184710230363], [37.679483467329, 41.184706748716], [37.675187264588, 41.184491087154], [37.67092355493, 41.184064169093], [37.666710640246, 41.183427824957], [37.662566603429, 41.182584784295], [37.658509230207, 41.181538664014], [37.654555932295, 41.180293952775], [37.650723672187, 41.178855991616], [37.647028889945, 41.177230950891], [37.643487432287, 41.17542580363], [37.639368583694, 41.172965403437], [37.611250022376, 41.154174205045], [37.607410148663, 41.151289147276], [37.604628293424, 41.14884736563], [37.602067817461, 41.14627127404], [37.599739676546, 41.143571921699], [37.597854729156, 41.141051676198], [37.571123431682, 41.102639024579], [37.559987636541, 41.085970708509], [37.554576268017, 41.083536297002], [37.543432192262, 41.081238840849], [37.529086001908, 41.085865051077], [37.5, 41.099665584941], [37.5, 40.783481236545], [37.5, 40.467296888149], [37.5, 40.151112539753], [37.5, 39.834928191357], [37.5, 39.518743842961], [37.5, 39.202559494565], [37.5, 38.886375146169], [37.5, 38.570190797773], [37.5, 38.254006449377], [37.5, 37.937822100981], [37.5, 37.621637752585], [37.5, 37.305453404189], [37.5, 36.989269055793], [37.5, 36.673084707397], [37.533332824707, 36.677772521973], [37.568321228028, 36.696937561035], [37.669715881348, 36.73722076416], [37.710269927979, 36.748329162598], [37.736106872559, 36.747764587403], [37.776935577393, 36.747978210449], [37.891387939453, 36.78109741211], [37.91777420044, 36.79109954834], [37.956104278565, 36.812908172608], [37.99333190918, 36.824714660645], [38.02336883545, 36.830360412598], [38.055549621582, 36.850547790528], [38.097286224366, 36.873741149902], [38.181106567383, 36.905822753907], [38.243396759034, 36.913879394531], [38.386375427246, 36.898330688477], [38.432769775391, 36.885543823242], [38.513610839844, 36.858047485352], [38.541103363037, 36.844303131104], [38.628318786621, 36.768043518066], [38.68416595459, 36.725547790527], [38.72526550293, 36.703605651856], [38.774711608887, 36.698043823242], [38.917629241944, 36.695133209229], [38.966102600098, 36.696937561035], [39.003673553467, 36.705619812012], [39.043464660645, 36.708187103272], [39.074714660645, 36.702766418457], [39.096374511719, 36.695541381836], [39.130546569824, 36.683601379395], [39.171657562256, 36.669708251953], [39.221523284912, 36.665340423584], [39.257766723633, 36.66805267334], [39.308601379395, 36.678321838379], [39.439300537109, 36.69751739502], [39.588050842285, 36.718879699707], [39.818054199219, 36.753608703614], [39.923324584961, 36.78638458252], [39.942771911621, 36.792762756348], [40.007766723633, 36.814712524414], [40.214431762696, 36.895820617676], [40.263877868652, 36.919486999512], [40.279708862305, 36.928596496582], [40.415267944336, 37.00138092041], [40.447769165039, 37.015270233154], [40.482490539551, 37.020820617676], [40.5, 37.022175906749], [40.5, 37.335468634612], [40.5, 37.648761362474], [40.5, 37.962054090337], [40.5, 38.275346818199], [40.5, 38.588639546061], [40.5, 38.901932273924], [40.5, 39.215225001786], [40.5, 39.528517729649], [40.5, 39.841810457511], [40.5, 40.155103185373], [40.5, 40.468395913236], [40.5, 40.781688641098], [40.5, 41.094981368961],
                ],
            ],
        ];
    }
}
