<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Asia - FSU - CS63 zone K3.
 * @internal
 */
class Extent2777
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [55.2666666667, 50.706592419811], [55.09013748169, 50.814025878906], [55.074100494385, 50.835067749024], [54.987770080566, 50.89860534668], [54.828880310059, 50.983329772949], [54.71374130249, 51.029850006104], [54.67416381836, 51.037216186524], [54.647216796875, 51.03694152832], [54.554229736328, 51.009857177734], [54.548606872559, 50.922218322754], [54.580825805664, 50.917770385742], [54.634853363037, 50.904575347901], [54.672424316406, 50.871208190918], [54.671661376953, 50.793609619141], [54.658325195313, 50.727905273438], [54.665824890137, 50.696098327637], [54.693878173828, 50.649719238281], [54.701797485352, 50.609645843506], [54.686798095703, 50.589855194092], [54.606662750244, 50.542774200439], [54.523933410645, 50.528839111328], [54.4987449646, 50.533466339111], [54.451103210449, 50.557632446289], [54.418884277344, 50.588043212891], [54.411933898926, 50.596656799316], [54.39839553833, 50.62589263916], [54.44123840332, 50.769367218018], [54.468048095703, 50.795547485352], [54.504089355469, 50.830272674561], [54.501659393311, 50.859230041504], [54.425827026367, 50.88582611084], [54.374435424805, 50.89527130127], [54.309440612793, 50.904991149902], [54.204437255859, 50.966934204102], [54.168460845947, 50.998741149902], [54.143882751465, 51.084434509277], [54.135131835938, 51.104019165039], [53.950267791748, 51.196102142334], [53.914989471436, 51.199714660645], [53.884918212891, 51.192695617676], [53.751663208008, 51.214157104492], [53.675548553467, 51.229293823242], [53.611938476563, 51.301242828369], [53.612495422363, 51.349716186523], [53.638114929199, 51.383014678955], [53.42374420166, 51.49263381958], [53.355411529541, 51.501106262207], [53.325691223145, 51.492214202881], [53.294441223145, 51.486381530762], [53.203880310059, 51.493186950684], [53.147491455078, 51.501106262207], [53.048332214356, 51.491661071777], [52.986106872559, 51.470825195313], [52.884994506836, 51.464996337891], [52.841377258301, 51.484718322754], [52.768257141113, 51.503261566162], [52.69860458374, 51.472629547119], [52.664154052734, 51.456657409668], [52.60763168335, 51.456382751465], [52.559158325195, 51.470825195313], [52.530689239502, 51.484153747559], [52.507358551025, 51.503883361817], [52.489856719971, 51.528743743897], [52.482769012451, 51.549297332764], [52.474086761475, 51.582630157471], [52.365272521973, 51.759162902832], [52.341800689697, 51.780754089356], [52.313323974609, 51.778877258301], [52.2666666667, 51.759794549197], [52.2666666667, 51.433809523161], [52.2666666667, 51.107824497126], [52.2666666667, 50.781839471091], [52.2666666667, 50.455854445056], [52.2666666667, 50.129869419021], [52.2666666667, 49.803884392985], [52.2666666667, 49.47789936695], [52.2666666667, 49.151914340915], [52.2666666667, 48.82592931488], [52.2666666667, 48.499944288844], [52.2666666667, 48.173959262809], [52.2666666667, 47.847974236774], [52.2666666667, 47.521989210739], [52.2666666667, 47.196004184704], [52.2666666667, 46.870019158668], [52.2666666667, 46.544034132633], [52.2666666667, 46.218049106598], [52.2666666667, 45.892064080563], [52.2666666667, 45.566079054528], [52.2666666667, 45.240094028492], [52.2666666667, 44.914109002457], [52.2666666667, 44.588123976422], [52.2666666667, 44.262138950387], [52.2666666667, 43.936153924351], [52.2666666667, 43.610168898316], [52.2666666667, 43.284183872281], [52.2666666667, 42.958198846246], [52.2666666667, 42.632213820211], [52.2666666667, 42.306228794175], [52.2666666667, 41.98024376814], [52.2666666667, 41.654258742105], [52.440071105957, 41.740936279297], [52.49137878418, 41.780822753906], [52.649295806885, 41.898464202881], [52.80721282959, 42.016105651856], [52.923049926758, 42.093601226807], [52.95707321167, 42.112354278565], [53.006244659424, 42.135688781738], [53.316665649414, 42.235824584961], [53.340827941895, 42.243324279785], [53.398048400879, 42.257217407227], [53.446586608887, 42.267910003662], [53.540550231934, 42.279434204102], [53.598045349121, 42.284164428711], [53.641937255859, 42.28694152832], [53.663047790528, 42.289161682129], [53.771934509277, 42.306655883789], [53.877216339111, 42.324855804443], [53.903602600098, 42.330272674561], [53.935131072998, 42.338600158691], [53.995544433594, 42.348602294922], [54.023326873779, 42.350410461426], [54.055549621582, 42.348602294922], [54.173049926758, 42.337211608887], [54.198600769043, 42.332496643066], [54.225822448731, 42.322494506836], [54.248329162598, 42.310546875], [54.315269470215, 42.268325805664], [54.566940307617, 42.1533203125], [54.732208251953, 42.07332611084], [54.761108398438, 42.058883666992], [54.934158325195, 41.929992675781], [54.962734222412, 41.900615692139], [54.95832824707, 41.855270385742], [54.962768554688, 41.816452026367], [54.980686187744, 41.792495727539], [55.001937866211, 41.771377563477], [55.047912597656, 41.733600616455], [55.12582397461, 41.651935577393], [55.146659851074, 41.624992370606], [55.193878173828, 41.562767028809], [55.207218170166, 41.543605804443], [55.227767944336, 41.505554199219], [55.239990234375, 41.488742828369], [55.2666666667, 41.462142969202], [55.2666666667, 41.792301878152], [55.2666666667, 42.122460787102], [55.2666666667, 42.452619696053], [55.2666666667, 42.782778605003], [55.2666666667, 43.112937513953], [55.2666666667, 43.443096422904], [55.2666666667, 43.773255331854], [55.2666666667, 44.103414240804], [55.2666666667, 44.433573149755], [55.2666666667, 44.763732058705], [55.2666666667, 45.093890967655], [55.2666666667, 45.424049876606], [55.2666666667, 45.754208785556], [55.2666666667, 46.084367694506], [55.2666666667, 46.414526603457], [55.2666666667, 46.744685512407], [55.2666666667, 47.074844421358], [55.2666666667, 47.405003330308], [55.2666666667, 47.735162239258], [55.2666666667, 48.065321148209], [55.2666666667, 48.395480057159], [55.2666666667, 48.725638966109], [55.2666666667, 49.05579787506], [55.2666666667, 49.38595678401], [55.2666666667, 49.71611569296], [55.2666666667, 50.046274601911], [55.2666666667, 50.376433510861], [55.2666666667, 50.706592419811],
                ],
            ],
        ];
    }
}