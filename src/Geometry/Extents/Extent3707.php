<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Germany - Lower Saxony 7.5°E to 10.5°E.
 * @internal
 */
class Extent3707
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [10.5, 53.37581214965], [10.498073577881, 53.376274108887], [10.479442596436, 53.382774353027], [10.420276641846, 53.403610229492], [10.327465057373, 53.427673339844], [10.310832977295, 53.432495117188], [10.30611038208, 53.432777404785], [10.288055419922, 53.430549621582], [10.267740249634, 53.425842285156], [10.254444122315, 53.420272827148], [10.249443054199, 53.416381835938], [9.9794425964355, 53.412498474121], [9.9144439697267, 53.411659240723], [9.9124984741212, 53.41194152832], [9.8574981689453, 53.431938171387], [9.8316650390626, 53.446662902832], [9.8211097717285, 53.453048706055], [9.8102760314941, 53.461662292481], [9.7666664123536, 53.508888244629], [9.7652759552003, 53.51082611084], [9.7636108398437, 53.538055419922], [9.7647457122803, 53.543731689453], [9.76174310238, 53.553292646049], [9.7422141984249, 53.557160966595], [9.7100266279963, 53.558201794047], [9.6818456190598, 53.563170390307], [9.6556540727155, 53.570630668215], [9.614947606228, 53.585724063679], [9.5760490810885, 53.600750600625], [9.5456692384647, 53.624642265791], [9.491290337029, 53.67365245558], [9.463129242238, 53.698789604615], [9.4305285670937, 53.728896011925], [9.4040929647146, 53.758066487617], [9.391432769837, 53.775559236577], [9.381609347968, 53.795656079309], [9.3720454492914, 53.810346410494], [9.3323632728507, 53.838195270975], [9.2867899068916, 53.864021624223], [9.2653842030413, 53.869289493462], [9.2334068986008, 53.875469185366], [9.1616220606677, 53.879131339828], [9.0872167562415, 53.879551160024], [9.0160748382735, 53.869940258471], [8.9773956971515, 53.8665772981], [8.9303709645238, 53.867216733933], [8.8764966092626, 53.878977020004], [8.862849262426, 53.879394544197], [8.8195661007824, 53.884130008752], [8.8103064948218, 53.886150420975], [8.8052219780269, 53.887772153706], [8.7744212584616, 53.904066710247], [8.7502522419528, 53.92345661733], [8.748152499976, 53.925070275336], [8.7445509081564, 53.92755339144], [8.7406817587154, 53.929892307738], [8.7365616193177, 53.93207698458], [8.7322081433094, 53.934098043033], [8.72763999395, 53.935946805458], [8.7228767641377, 53.937615333062], [8.7179388919735, 53.939096460277], [8.7128475725373, 53.940383825795], [8.7076246662648, 53.941471900136], [8.7022926043309, 53.942356009615], [8.6968742914672, 53.943032356597], [8.6913930066418, 53.943498035969], [8.6858723020557, 53.943751047727], [8.6803359009025, 53.943790305647], [8.6745946551093, 53.943604457218], [8.6511638653236, 53.9423365965], [8.6460936370737, 53.941970187069], [8.6406531366324, 53.941369837428], [8.6352915919826, 53.940560576889], [8.6300320344892, 53.939545883209], [8.6259648341831, 53.938602077837], [8.5918450733097, 53.93006420706], [8.5849258128184, 53.923339368038], [8.5700681284783, 53.913248254379], [8.5520450022238, 53.904447705942], [8.5335995777728, 53.893969923723], [8.5094630401051, 53.884836387013], [8.508399247597, 53.883895815492], [8.5065779073269, 53.88228544788], [8.5032215980565, 53.878970346731], [8.5009838421234, 53.876367373437], [8.4716035851813, 53.839520724216], [8.4693280437286, 53.836358924804], [8.4672304862134, 53.832716700968], [8.4027766515389, 53.699095127406], [8.4012169085659, 53.694883161883], [8.4004687879116, 53.6916798593], [8.5117340087891, 53.617218017578], [8.587776184082, 53.603332519531], [8.622220993042, 53.593330383301], [8.635555267334, 53.564994812012], [8.6441650390626, 53.535270690918], [8.6438884735108, 53.531105041504], [8.6411094665527, 53.518051147461], [8.639165878296, 53.515548706055], [8.6269435882569, 53.504440307617], [8.6230545043945, 53.501663208008], [8.603054046631, 53.490272521973], [8.5994434356689, 53.489440917969], [8.5933322906494, 53.49055480957], [8.5724983215333, 53.499443054199], [8.5694427490234, 53.502777099609], [8.5608673095703, 53.515434265137], [8.5387105668377, 53.534790046173], [8.5161238024193, 53.565475047366], [8.4805792494905, 53.601752455325], [8.4067779935741, 53.646419625322], [8.3765880432113, 53.657611999569], [8.3722721320529, 53.659107191967], [8.3673548838262, 53.660574640977], [8.3622867009856, 53.66184791707], [8.357089344589, 53.662921551425], [8.3517851359025, 53.663790932521], [8.3463968596958, 53.664452326123], [8.3411120331663, 53.664892448128], [8.3148907341026, 53.666571040999], [8.3093214860368, 53.666812881239], [8.303820630809, 53.666835731812], [8.2983296158407, 53.666644699716], [8.2928720359009, 53.666240606749], [8.2874713404128, 53.665625190119], [8.2821507316782, 53.664801094889], [8.2769330642221, 53.663771862484], [8.2724748076986, 53.662707790067], [8.2356001882732, 53.653160561912], [8.2303404775358, 53.651650713331], [8.2255662175819, 53.650034638125], [8.2209810014437, 53.648236247771], [8.2166044944254, 53.64626326558], [8.2124554578915, 53.644124163403], [8.2085516685771, 53.641828124957], [8.2049098423014, 53.63938500609], [8.2019652346814, 53.637146809576], [8.1818632455298, 53.6209259902], [8.1276980277539, 53.656163425548], [8.1195040092057, 53.673815881817], [8.1320612706002, 53.674675968214], [8.1824546582583, 53.685174590643], [8.2031019490348, 53.695323258991], [8.2244491479733, 53.703722156934], [8.2300484132688, 53.72051995282], [8.2164002041113, 53.743616922163], [8.2062515357635, 53.755865314997], [8.1919034184442, 53.763214350697], [8.1572579644293, 53.763914258859], [8.1285617297907, 53.759014901725], [8.1019652196377, 53.748866233377], [8.0862172859946, 53.740117381354], [8.0753687094849, 53.743266968082], [8.0669698115419, 53.751315911944], [8.0494721074939, 53.770213432316], [8.0270750463126, 53.790860723093], [8.0036281228882, 53.805208840412], [7.9756317964116, 53.815707462841], [7.9514849648254, 53.82270654446], [7.9231386842678, 53.824806268946], [7.8919927710625, 53.827605901593], [7.8545476843998, 53.825506177108], [7.8387997507566, 53.82270654446], [7.8241016793563, 53.809408289383], [7.7877064549367, 53.813607738355], [7.7408126080882, 53.819556957731], [7.7026676132635, 53.819906911812], [7.6757708403946, 53.818457404123], [7.6521071780381, 53.811275415991], [7.6381269882722, 53.79657734459], [7.6128626296056, 53.79754368305], [7.5819831466977, 53.801343486575], [7.5238749103122, 53.802427181237], [7.5071923561023, 53.803946468289], [7.5, 53.80402057608], [7.5, 53.515204001853], [7.5, 53.226387427626], [7.5, 52.9375708534], [7.5, 52.648754279173], [7.5, 52.359937704946], [7.5308332443238, 52.373603820801], [7.578332901001, 52.430274963379], [7.6958332061768, 52.446937561035], [7.7555551528932, 52.394165039063], [7.8049993515015, 52.374443054199], [7.9064035415651, 52.381103515625], [7.935832977295, 52.353881835938], [7.9761104583741, 52.311943054199], [7.9755554199219, 52.308883666992], [7.9261102676392, 52.232772827149], [7.9905548095703, 52.182220458984], [7.9727773666381, 52.12166595459], [7.9655551910402, 52.121383666992], [7.9491662979125, 52.119163513184], [7.9280548095704, 52.113609313965], [7.9163885116577, 52.109443664551], [7.9024991989135, 52.102493286133], [7.8919439315796, 52.094161987305], [7.8888883590699, 52.091110229492], [7.8877773284913, 52.088333129883], [7.8886108398438, 52.084716796875], [7.9113883972169, 52.055549621582], [7.9224996566773, 52.051940917969], [7.9736108779907, 52.035827636719], [8.1944427490234, 52.078887939453], [8.1999988555909, 52.08277130127], [8.2161102294922, 52.10221862793], [8.2338886260987, 52.115829467773], [8.2544441223145, 52.127494812012], [8.2661094665527, 52.133331298828], [8.2713871002197, 52.134994506836], [8.2805538177491, 52.134437561035], [8.3472213745117, 52.124160766602], [8.3544425964356, 52.122215270996], [8.3613872528077, 52.119163513184], [8.3641662597657, 52.116943359375], [8.372220993042, 52.113609313965], [8.3794441223145, 52.111663818359], [8.3936100006103, 52.111106872559], [8.4005546569824, 52.111938476562], [8.405553817749, 52.113883972168], [8.4094429016114, 52.116386413574], [8.4855537414552, 52.168327331543], [8.4916648864747, 52.174995422363], [8.5005550384521, 52.188049316406], [8.4999999999999, 52.189163208008], [8.4566650390626, 52.22388458252], [8.4586105346679, 52.232498168945], [8.4605541229249, 52.284439086914], [8.4605541229249, 52.304992675781], [8.4524993896484, 52.331382751465], [8.4455547332765, 52.34610748291], [8.4355545043945, 52.364440917969], [8.4274997711182, 52.368606567383], [8.3894443511963, 52.383331298828], [8.372220993042, 52.440826416016], [8.5486106872559, 52.501388549805], [8.6386108398439, 52.526107788086], [8.6752777099609, 52.516387939453], [8.680555343628, 52.510551452637], [8.6972217559816, 52.491943359375], [8.7002773284912, 52.487777709961], [8.7049999237061, 52.477493286133], [8.7072219848633, 52.469993591309], [8.7074985504151, 52.464164733887], [8.7036094665527, 52.450553894043], [8.7038879394531, 52.44221496582], [8.70583152771, 52.411659240723], [8.7077770233155, 52.400833129883], [8.7119426727295, 52.397499084473], [8.7155551910402, 52.395553588867], [8.7205543518068, 52.394721984863], [8.8294429779053, 52.388053894043], [8.859998703003, 52.388885498047], [8.9333324432373, 52.400276184082], [8.9461097717286, 52.403053283691], [8.963888168335, 52.409996032715], [8.969165802002, 52.415550231934], [8.9758319854737, 52.42749786377], [8.9769439697266, 52.431938171387], [8.9830551147462, 52.443885803223], [8.9927768707275, 52.457221984863], [8.9980545043945, 52.462776184082], [9.0241527557373, 52.479423522949], [9.0277767181396, 52.480827331543], [9.0516662597656, 52.489166259766], [9.0805549621582, 52.497772216797], [9.0952758789062, 52.498893737793], [9.138053894043, 52.475273132324], [9.138053894043, 52.471382141113], [9.127498626709, 52.405548095703], [9.1255550384521, 52.402221679688], [9.1188888549806, 52.394996643066], [9.0744438171387, 52.347770690918], [9.0574989318848, 52.337219238281], [9.0558319091797, 52.336387634277], [9.0499992370605, 52.336387634277], [9.0291652679444, 52.340270996094], [9.0177764892579, 52.341384887695], [9.0122203826905, 52.341110229492], [9.0063877105714, 52.339164733887], [9.0041656494141, 52.337493896484], [9.0022220611573, 52.335548400879], [8.9936103820801, 52.319717407227], [8.9813880920411, 52.268882751465], [8.9813880920411, 52.264717102051], [9.0361099243165, 52.134719848633], [9.0752773284913, 52.136108398438], [9.1199989318848, 52.134162902832], [9.1349983215333, 52.132499694824], [9.1463871002198, 52.129165649414], [9.1499996185303, 52.126937866211], [9.2899990081787, 51.972221374512], [9.3349990844728, 51.904998779297], [9.3386096954346, 51.893325805664], [9.3391666412354, 51.88582611084], [9.3313884735107, 51.853881835938], [9.3588886260987, 51.861106872559], [9.3638877868653, 51.861663818359], [9.4349994659425, 51.862495422363], [9.4511165618898, 51.850257873535], [9.4561100006104, 51.801666259766], [9.4541664123535, 51.794715881348], [9.4352760314941, 51.768051147461], [9.4280548095704, 51.761383056641], [9.4247207641602, 51.759437561035], [9.4074993133545, 51.754165649414], [9.404998779297, 51.752220153809], [9.392282485962, 51.733558654785], [9.3727760314942, 51.662773132324], [9.3719444274902, 51.649436950684], [9.3727760314942, 51.646659851074], [9.3755550384523, 51.641662597656], [9.3858318328858, 51.637496948242], [9.3963871002198, 51.637496948242], [9.4052772521974, 51.638610839844], [9.4399909973146, 51.648948669434], [9.49027633667, 51.636383056641], [9.5327758789064, 51.629997253418], [9.5577774047853, 51.629997253418], [9.6233329772949, 51.62971496582], [9.6574993133546, 51.607498168945], [9.6886100769043, 51.568885803223], [9.6886100769043, 51.564437866211], [9.6877765655518, 51.562774658203], [9.685832977295, 51.561386108399], [9.6772212982178, 51.558326721192], [9.6727771759034, 51.558052062988], [9.6447219848633, 51.571662902832], [9.6413879394531, 51.572776794434], [9.6380538940431, 51.572494506836], [9.6352767944336, 51.571105957031], [9.6161098480226, 51.55249786377], [9.5899982452393, 51.518051147461], [9.5922222137452, 51.512771606445], [9.6127777099609, 51.482215881348], [9.6277770996095, 51.455551147461], [9.6461105346679, 51.417495727539], [9.6472206115723, 51.40860748291], [9.6449985504152, 51.402770996094], [9.6422214508057, 51.401382446289], [9.6127777099609, 51.399993896484], [9.5863876342775, 51.398887634277], [9.5813884735109, 51.399436950684], [9.5780544281006, 51.398330688477], [9.5602760314942, 51.382774353027], [9.5577774047853, 51.360832214355], [9.5822219848632, 51.341110229492], [9.7113876342773, 51.291381835938], [9.7222213745117, 51.289993286133], [9.7299995422363, 51.290832519531], [9.7413883209229, 51.295555114746], [9.7616653442384, 51.30583190918], [9.7708320617676, 51.312217712402], [9.7849998474122, 51.33610534668], [9.7847213745118, 51.338882446289], [9.7802772521974, 51.341941833496], [9.7766666412354, 51.343048095703], [9.7716655731202, 51.3427734375], [9.764720916748, 51.338882446289], [9.7586097717285, 51.333885192871], [9.7549991607667, 51.329437255859], [9.752498626709, 51.328605651855], [9.7497215270997, 51.329437255859], [9.7422218322754, 51.334159851074], [9.7147216796876, 51.353332519531], [9.7116661071777, 51.359992980957], [9.7122211456299, 51.36222076416], [9.7147216796876, 51.36499786377], [9.7163887023927, 51.365829467773], [9.7999992370605, 51.398330688477], [9.9083328247071, 51.399719238281], [9.9491653442384, 51.381660461426], [9.9899997711182, 51.398048400879], [10.006942749024, 51.411109924317], [10.008888244629, 51.413604736328], [10.009164810181, 51.416938781738], [10.075553894043, 51.418884277344], [10.138053894043, 51.431663513184], [10.291666030884, 51.48999786377], [10.295276641846, 51.491386413574], [10.363887786865, 51.539161682129], [10.365833282471, 51.541381835938], [10.5, 51.55838455952], [10.5, 51.861289157875], [10.5, 52.16419375623], [10.5, 52.467098354585], [10.5, 52.77000295294], [10.5, 53.072907551295], [10.5, 53.37581214965],
                ],
                [
                    [8.9144439697267, 53.024436950684], [8.9080543518068, 53.024436950684], [8.8505554199218, 53.029159545898], [8.8397216796875, 53.030830383301], [8.7022209167482, 53.056388854981], [8.6791648864747, 53.093330383301], [8.6349983215332, 53.134437561035], [8.5741653442384, 53.178329467773], [8.5377769470215, 53.187774658203], [8.5255546569825, 53.191108703613], [8.5188884735107, 53.193885803223], [8.5133323669434, 53.197494506836], [8.5005550384521, 53.210273742676], [8.4939002990723, 53.219718933105], [8.4923763275146, 53.223495483398], [8.5069427490235, 53.226943969727], [8.513053894043, 53.227493286133], [8.5222206115722, 53.226943969727], [8.5261096954346, 53.226104736328], [8.5955543518067, 53.209442138672], [8.6730537414552, 53.189163208008], [8.9177761077881, 53.147499084473], [8.9263877868652, 53.160270690918], [8.9291648864747, 53.163330078125], [8.9324989318848, 53.164443969727], [8.9363880157472, 53.163604736328], [8.9602775573732, 53.148887634277], [8.9766654968262, 53.136665344238], [8.988609313965, 53.100555419922], [8.988609313965, 53.091659545899], [8.9747219085693, 53.054443359375], [8.9730548858642, 53.05249786377], [8.9541664123536, 53.040275573731], [8.9227771759033, 53.02693939209], [8.9144439697267, 53.024436950684],
                ],
            ],
        ];
    }
}
