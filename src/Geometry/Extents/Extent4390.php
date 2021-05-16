<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/UK - Britain and UKCS 49°45'N to 61°N, 9°W to 2°E.
 * @internal
 */
class Extent4390
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-5.9999999999999, 53.931747393812], [-5.9819935059996, 53.917631166001], [-5.941284506, 53.885718166001], [-5.90044845697, 53.863713459397], [-5.8749995049998, 53.850000166001], [-5.8639575049999, 53.842638166001], [-5.8499995049997, 53.833333166001], [-5.683333505, 53.791667166001], [-5.5416665049994, 53.775000166001], [-5.3499575049996, 53.753699166001], [-5.3498655049997, 53.753689166001], [-5.2417065049999, 53.741671166001], [-5.2416665049994, 53.741667166001], [-5.2657485049996, 53.674774166001], [-5.3166665049998, 53.533333166001], [-5.3166665049998, 53.533324166001], [-5.3143085049994, 53.479106166001], [-5.3083335049995, 53.341667165001], [-5.324999505, 53.250000165001], [-5.2916665049996, 53.141667165001], [-5.3499995049994, 52.966667165001], [-5.408333505, 52.808333165001], [-5.4166665049995, 52.758333165001], [-5.4333335049994, 52.650000165001], [-5.4249995049998, 52.566667165001], [-5.3831205050001, 52.482929165], [-5.6166665049998, 52.308333165001], [-5.6166825049997, 52.308315165001], [-5.791666505, 52.108333164001], [-5.8650275049997, 51.993706164001], [-5.9249995059998, 51.900000164001], [-5.9999999999999, 51.806999969042], [-6.0000001, 51.806999845042], [-6.1333335059997, 51.641667164001], [-6.2750000059998, 51.495833664001], [-6.4166665059998, 51.350000164001], [-6.4499995059994, 51.316667164001], [-6.591666506, 51.075000163001], [-6.699999506, 51.050000163001], [-6.7422695059994, 51.035949163001], [-6.776386506, 51.026422163001], [-6.8146015059999, 51.015887163001], [-6.8898315059995, 50.992363163001], [-6.9182135059994, 50.982302163001], [-6.9269665059996, 50.979199163001], [-7.2224635069999, 50.874449163001], [-7.2640825069994, 50.859599163001], [-7.2831295069994, 50.853038163001], [-7.3730445069996, 50.822062163001], [-7.5517075069998, 50.728621663001], [-7.6791670250958, 50.661960512675], [-7.6612609999999, 50.5], [-7.6188829999998, 50.1291515], [-7.5765049999999, 49.758303], [-7.1823787499999, 49.772811878], [-6.7882524999998, 49.787320755999], [-6.3992259671775, 49.801641899295], [-6.3941262499998, 49.801829633997], [-6.2757735817307, 49.806186523255], [-5.9999999999999, 49.816338511996], [-5.567278706586, 49.832268180355], [-5.1345574131723, 49.848197848712], [-4.8681239999999, 49.858006], [-4.42416999801, 49.865510995808], [-3.9802159960203, 49.873015991615], [-3.5362619940304, 49.880520987423], [-3.0923079920405, 49.88802598323], [-2.962487503, 50.022639162001], [-2.908857503, 50.064081162001], [-2.879693503, 50.086837162001], [-2.8622996480029, 50.099813561756], [-2.8622975029994, 50.099815162001], [-2.6604035024995, 50.108333162001], [-2.4585095019999, 50.116851162001], [-2.4472335019998, 50.117289162001], [-2.3977555019995, 50.121895162001], [-2.3298445019994, 50.128443162001], [-2.2504905019998, 50.137077162001], [-2.1487835019995, 50.148115163001], [-2.1434955019997, 50.148919163001], [-2.1346335019997, 50.150289163001], [-2.1071530604833, 50.154416778712], [-2.1071505019994, 50.154417163001], [-2.1071482374656, 50.154417048783], [-2.056533502, 50.151864163001], [-2.0234775019999, 50.149766163001], [-1.8753875019995, 50.158517163001], [-1.844582502, 50.160142163001], [-1.8353295019996, 50.160667163001], [-1.793056502, 50.161388163001], [-1.7532515019998, 50.162118163001], [-1.6844945019996, 50.165636163001], [-1.6796245019994, 50.165877163001], [-1.6611668902271, 50.166760809294], [-1.6611599999999, 50.166761], [-1.6611586360958, 50.166760938104], [-1.6130855019999, 50.154275163001], [-1.6036715009994, 50.151810163001], [-1.450784501, 50.143723162001], [-1.4222075009995, 50.142592162001], [-1.3095925009997, 50.139073162001], [-1.3009915010001, 50.138809162001], [-1.2262395009996, 50.136204162001], [-1.2108095009997, 50.135935162001], [-1.1423625009995, 50.136914162001], [-1.0375355009996, 50.136387162001], [-0.982693078306, 50.135971170508], [-0.97504550099973, 50.135913162001], [-0.97479050100003, 50.135910162001], [-0.85832950099967, 50.132031162001], [-0.82962050099962, 50.131018162001], [-0.59206550099998, 50.121842162001], [-0.57427950099981, 50.121066162001], [-0.55015650099978, 50.116342162001], [-0.55015470056327, 50.116342462809], [-0.4999994999996, 50.124722162001], [-0.25834219125198, 50.220274726434], [-0.25833349999954, 50.220278163001], [3.4106051316485E-13, 50.234603122506], [0.037222500000496, 50.236667163001], [0.08379682384998, 50.244185713781], [0.3435649119254, 50.286120856891], [0.60333300000048, 50.328056], [0.73385957402189, 50.374062220042], [0.77749950100042, 50.389444163], [0.9280048197233, 50.5], [0.92800554062399, 50.5], [1.1238890000005, 50.643889], [1.2577780000004, 50.797222], [1.282778, 50.896389], [1.3569445010004, 50.950000163001], [1.5000000000001, 51.016110970889], [1.5505127989975, 51.039454652004], [1.7252775020004, 51.099444163001], [1.9549995020007, 51.240833164001], [1.9550017073941, 51.240835694836], [2.0000000000001, 51.292474229375], [2.0000000000001, 51.60630928075], [2.0000000000001, 51.920144332125], [2.0000000000001, 52.2339793835], [2.0000000000001, 52.547814434875], [2.0000000000001, 52.86164948625], [2.0000000000001, 53.175484537625], [2.0000000000001, 53.489319589], [2.0000000000001, 53.803154640375], [2.0000000000001, 54.11698969175], [2.0000000000001, 54.430824743125], [2.0000000000001, 54.7446597945], [2.0000000000001, 55.058494845875], [2.0000000000001, 55.37232989725], [2.0000000000001, 55.686164948625], [2.0000000000001, 56], [2.0000000000001, 56.305713240337], [2.0000000000001, 56.611426480675], [2.0000000000001, 56.917139721012], [2.0000000000001, 57.222852961349], [2.0000000000001, 57.528566201686], [2.0000000000001, 57.834279442024], [1.9649995019801, 57.905000169987], [1.8044441683213, 58.080000169983], [1.6438888346624, 58.25500016998], [1.4999999999958, 58.411834237665], [1.4999999999997, 58.49277335252], [1.5594445013436, 58.716666836994], [1.6346704447363, 58.999999999999], [1.6355555016838, 59.003333504011], [1.7116665020239, 59.290000171029], [1.8333331686765, 59.492222171348], [1.9549998353293, 59.694444171667], [2.0000000000007, 59.76923888385], [2.0000000000001, 60], [2.000000000001, 60.287129995795], [1.9619997019916, 60.480666172398], [1.9046663019965, 60.772666172604], [1.860029927855, 61], [1.5000000000001, 61], [1, 61], [0.50000000000002, 61], [0, 61], [-0.63483298431315, 61], [-1.2696659686263, 61], [-1.9044989529394, 61], [-2.5393319372526, 61], [-3.0607318138675, 61], [-3.5821316904825, 61], [-4.1035315670974, 61], [-4.1749495039999, 60.916316173001], [-4.233466504, 60.863483172001], [-4.3090165039997, 60.795283172001], [-4.5234415039998, 60.598283172001], [-4.7378665039998, 60.401283172001], [-4.944533505, 60.351683172001], [-5.173891505, 60.332124672001], [-5.403249505, 60.312566172001], [-5.7016247524912, 60.281822377152], [-5.7312267779969, 60.278772262881], [-5.9999999999999, 60.251078582347], [-6.0592040509999, 60.244978353819], [-6.3871813239998, 60.211184444728], [-6.7151585969998, 60.177390535637], [-7.0431358699997, 60.143596626546], [-7.3711131429997, 60.109802717455], [-7.6990904159998, 60.076008808364], [-8.0270676889998, 60.042214899274], [-8.3550449619997, 60.008420990183], [-8.4367725120352, 60], [-8.6830222349997, 59.974627081092], [-8.9999999999999, 59.941966532157], [-9, 59.627977688105], [-9, 59.313988844053], [-9, 59], [-9, 58.971573140271], [-8.9676245062054, 58.80474612917], [-8.8564112733904, 58.231677766319], [-8.788607841934, 57.882294869366], [-8.7660268879403, 57.765937939446], [-8.7451980405753, 57.658609403467], [-8.6339848077603, 57.085541040616], [-8.54191190388, 56.584437020308], [-8.4498389999999, 56.083333], [-8.4417080057261, 56.024392122136], [-8.4308330079996, 56.020832168001], [-8.2449995079996, 55.959999168001], [-8.0433335069996, 55.893333168001], [-7.996665507, 55.888332168001], [-7.6658330069997, 55.880832668001], [-7.3350005069996, 55.873333168001], [-7.2066665069995, 55.811668168001], [-7.1383335069994, 55.773334168001], [-7.0450005069999, 55.711666168001], [-6.9833335069999, 55.660000168001], [-6.8983335059995, 55.581665168001], [-6.7950005059997, 55.483333167001], [-6.7300005059996, 55.459999167001], [-6.7201475059994, 55.456726167001], [-6.7200125059996, 55.456673167001], [-6.7207625059997, 55.442016167001], [-6.7337235059999, 55.411616167001], [-6.7359645059999, 55.406577167001], [-6.7458876635977, 55.381315716927], [-6.7601075059995, 55.345116167001], [-6.773269506, 55.299850167001], [-6.7769578509315, 55.28739465951], [-6.650551, 55.314204], [-6.4264549999999, 55.33618], [-6.2821949999999, 55.399034], [-6.088995, 55.378825], [-6.0226249999999, 55.333247], [-6.012027, 55.284664], [-5.9999999999999, 55.276981151697], [-5.888821, 55.20596], [-5.809362, 55.026365], [-5.5915587815882, 54.915563670306], [-5.534618, 54.786985], [-5.426605, 54.771532], [-5.363056, 54.722402], [-5.374338, 54.643506], [-5.2781549999999, 54.512067], [-5.2860239999999, 54.4306], [-5.359978, 54.294283], [-5.494419, 54.189906], [-5.609199, 54.140704], [-5.724891, 54.138524], [-5.805688, 54.0297], [-5.883782661321, 53.97883790372], [-5.9999999999999, 53.931747393812],
                ],
            ],
        ];
    }
}
