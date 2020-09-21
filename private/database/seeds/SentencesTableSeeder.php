<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Sentence;

class SentencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete All Sentences
        $sentences = Sentence::all();
        foreach ($sentences as $row) {
            $row->forceDelete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Sentence::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Set new sentences
        $sentences = [
            [
                'name' => 'home-title',
                'tr' => [
                    'content' => 'Demir Okulu Nedir?',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'home-content',
                'tr' => [
                    'content' => ' Demir Okulu; alanında öncü isimleri bir araya getiren, sağlık çalışanlarının demir eksikliği ve demir eksikliği anemisi ile ilgili paylaşımlar yapmalarına destek veren; yeni yaklaşımları Türk hekimlerinin görüşlerine sunan dijital bir platformdur.',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'home-detail-button',
                'tr' => [
                    'content' => 'Detay',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],

// FORM
            [
                'name' => 'home-form-tittle',
                'tr' => [
                    'content' => 'ÜYE OL',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],

            [
                'name' => 'company-name-title',
                'tr' => [
                    'content' => 'Kurum Adı',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'company-name-1',
                'tr' => [
                    'content' => 'Kurum Adı 1',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'company-name-2',
                'tr' => [
                    'content' => 'Kurum Adı 2',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'company-name-3',
                'tr' => [
                    'content' => 'Kurum Adı 3',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
// BRANCH
            [
                'name' => 'branch',
                'tr' => [
                    'content' => 'Branş',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-1',
                'tr' => [
                    'content' => 'İç Hastalıkları',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branc-2',
                'tr' => [
                    'content' => 'Kardiyoloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-3',
                'tr' => [
                    'content' => 'Göğüs Hastalıkları',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-4',
                'tr' => [
                    'content' => 'Enfeksiyon Hastalıkları',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-5',
                'tr' => [
                    'content' => 'Nöroloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-6',
                'tr' => [
                    'content' => 'Psikiyatri',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-7',
                'tr' => [
                    'content' => 'Çocuk Sağlığı ve Hastalıkları',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-8',
                'tr' => [
                    'content' => 'Çocuk Psikiyatrisi',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-9',
                'tr' => [
                    'content' => 'Dermatoloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-10',
                'tr' => [
                    'content' => 'Fiziksel Tıp ve Rehabilitasyon',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-11',
                'tr' => [
                    'content' => 'Genel Cerrahi',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],

            [
                'name' => 'branch-12',
                'tr' => [
                    'content' => 'Çocuk Cerrahisi',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-13',
                'tr' => [
                    'content' => 'Göğüs Cerrahisi',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-14',
                'tr' => [
                    'content' => 'Kalp ve Damar Cerrahisi',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-15',
                'tr' => [
                    'content' => 'Beyin ve Sinir Cerrahisi',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-16',
                'tr' => [
                    'content' => 'Plastik, Rekonstrüktif ve Estetik Cerrahi',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],

            [
                'name' => 'branch-17',
                'tr' => [
                    'content' => 'Ortopedi ve Travmatoloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-18',
                'tr' => [
                    'content' => 'Üroloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-19',
                'tr' => [
                    'content' => 'Kulak-Burun-Boğaz Hastalıkları',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-20',
                'tr' => [
                    'content' => 'Göz Hastalıkları',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-21',
                'tr' => [
                    'content' => 'Kadın Hastalıkları ve Doğum',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],

            [
                'name' => 'branch-22',
                'tr' => [
                    'content' => 'Anesteziyoloji ve Reanimasyon',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-23',
                'tr' => [
                    'content' => 'Radyasyon Onkolojisi',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-24',
                'tr' => [
                    'content' => 'Radyoloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-25',
                'tr' => [
                    'content' => 'Nükleer Tıp',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-26',
                'tr' => [
                    'content' => 'Tıbbi Patoloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-27',
                'tr' => [
                    'content' => 'Tıbbi Genetik',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-28',
                'tr' => [
                    'content' => 'Tıbbi Biyokimya',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-29',
                'tr' => [
                    'content' => 'Tıbbi Mikrobiyoloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],

            [
                'name' => 'branch-30',
                'tr' => [
                    'content' => 'Tıbbi Farmakoloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-31',
                'tr' => [
                    'content' => 'Spor Hekimliği',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-32',
                'tr' => [
                    'content' => 'Askeri Sahra Hekimliği',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-33',
                'tr' => [
                    'content' => 'Hava ve Uzay Hekimliği',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-34',
                'tr' => [
                    'content' => 'Sualtı Hekimliği ve Hiperbarik Tıp',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-35',
                'tr' => [
                    'content' => 'Acil Tıp',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-36',
                'tr' => [
                    'content' => 'Halk Sağlığı',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-37',
                'tr' => [
                    'content' => 'Fizyoloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-38',
                'tr' => [
                    'content' => 'Aile Hekimliği',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-39',
                'tr' => [
                    'content' => 'Anatomi',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            [
                'name' => 'branch-40',
                'tr' => [
                    'content' => 'Embriyoloji ve Histoloji',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            

           




            [
                'name' => 'social-medya',
                'tr' => [
                    'content' => '<strong>SOSYAL MEDYA</strong> BAĞLANTILARI',
                ],
                'en' => [
                    'content' => 'CONNECT ON <strong>SOCIAL MEDIA</strong>',
                ],
            ],
            [
                'name' => 'copyright',
                'tr' => [
                    'content' => '© COPYRIGHT 2020 DemirOkulu. TÜM HAKLARI SAKLIDIR',
                ],
                'en' => [
                    'content' => '© COPYRIGHT 2020 DemirOkulu. ALL RIGHTS RESERVED',
                ],
            ],
            [
                'name' => '404-warning',
                'tr' => [
                    'content' => 'Aradığınız sayfa bulunamadı',
                ],
                'en' => [
                    'content' => 'The page you are looking for could not be found',
                ],
            ],
            [
                'name' => '404-home',
                'tr' => [
                    'content' => 'ANASAYFAYA DÖN',
                ],
                'en' => [
                    'content' => 'BACK TO HOMEPAGE',
                ],
            ],
      
          
           
            // references

            [
                'name' => 'references-1',
                'tr' => [
                    'content' => 'G.Ramírez, S;Brilli, E;Tarantino, G; Muñoz,M; Sucrosomial® Iron: A New Generation Iron for Improving Oral Supplementation Pharmaceuticals2018, 11,97; doi:10.3390/ph11040097 ',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            
            [
                'name' => 'references-2',
                'tr' => [
                    'content' => 'Fabiano, A.; Brilli, E.; Fogli, S.; Beconcini, D.; Carpi, S.; Tarantino, G.; Zambito, Y. Ex Vivo and in Vivo Study of Sucrosomial® Iron Intestinal Absorption and Bioavailability,  Int. J. Mol. Sci. 2018, 19, 2722; doi:10.3390/ijms19092722',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],
            
            [
                'name' => 'references-3',
                'tr' => [
                    'content' => 'Mafodda,A; Giuffrida,D; Prestifilippo,A; Azzarello,D; Giannicola,R; Mare,M; Maisano,R; Oral sucrosomial iron versus intravenous iron in anemic cancer patients without iron deficiency receiving darbepoetin alfa: a pilot study',
                ],
                'en' => [
                    'content' => 'Lorem',
                ],
            ],






            [
                'name' => 'sukrozomiyal-5',
                'tr' => [
                    'content' => 'Tüm dünyadaki ölümlerin yaklaşık %30\'u kardiyovasküler hastalıklar (KVH) kaynaklıdır. Türkiye\'de hastalığa yakalanma oranının %40 ve hastalık sebebi ile ölme oranının da %25 olması bizleri ilk bu konuda çalışmaya itmiştir. Bu oranı düşürebilmek ve sağlık masraflarını azaltabilmek amacı ile çalışmalarımız başlamıştır. Önleyici sağlık tedbirlerini herkesin erişebileceği basitlikte ve ucuzlukta sunmanın, ülkemize yapılabilecek en değerli katkı olduğuna inanan ekibimiz, kapsamlı ve karmaşık klinik veri analizlerini otomatik hale getirerek sağlık planı sponsorlarının ve üyelerinin kronik hastalıkları daha hızlı tespit etmelerine ve daha iyi yönetmelerine yardımcı olacak bir tıbbi teknoloji sistemi geliştirmiştir. ',
                ],
                'en' => [
                    'content' => 'Cardiovascular diseases (CVD) are the leading cause of death worldwide, representing approximately 30% of all global deaths. In Turkey this ratio is 40% and over the ages of 40 and up the mortality rate increases to 25%. These conditions were dangerous and healthcare expenditures are doubled. But, many of these conditions and their devastating toll can be prevented. So, this team set out to build a medical technology system that would combine comprehensive and complex clinical data analysis with personalized preventive care to help health plan sponsors and their members detect chronic disease earlier and manage it better. The goal was to help drive down healthcare costs while improving health outcomes.',
                ],
            ],

          
            [
                'name' => 'sukrozomiyal-6',
                'tr' => [
                    'content' => 'Demir eksikliği genellikle oral demir tuzları ile tedavi edilir, ancak hastaların % 50 kadarında gastrointestinal yan etkiler görülür ve tedavi uyumunun azalmasına neden olur. ',
                ],
                'en' => [
                    'content' => 'Demir eksikliği genellikle oral demir tuzları ile tedavi edilir, ancak hastaların % 50 kadarında gastrointestinal yan etkiler görülür ve tedavi uyumunun azalmasına neden olur. ',
                ],
            ],
            [
                'name' => 'sukrozomiyal-7',
                'tr' => [
                    'content' => 'Bunun iki önemli nedeni vardır; Birincisi; oral alınan demirin biyoyararlanımı çok düşüktür. İki değerlikli demirler için ortalama %15, üç değerlikli demirler için ise %5 kadardır denebilir. Günlük ihtiyacı karşılaması için 80-120 mg’lık formlar tedavide kullanılmaktadır. Büyük oranda emilmemiş serbest demir GİS mukozası ile direk olarak temas etmektedir. ',
                ],
                'en' => [
                    'content' => 'Bunun iki önemli nedeni vardır; Birincisi; oral alınan demirin biyoyararlanımı çok düşüktür. İki değerlikli demirler için ortalama %15, üç değerlikli demirler için ise %5 kadardır denebilir. Günlük ihtiyacı karşılaması için 80-120 mg’lık formlar tedavide kullanılmaktadır. Büyük oranda emilmemiş serbest demir GİS mukozası ile direk olarak temas etmektedir. ',
                ],
            ],
            [
                'name' => 'sukrozomiyal-8',
                'tr' => [
                    'content' => 'İkinci önemli nokta ise; demir pro-oksidan bir molekül olarak metabolizması sırasında serbest radikallerin oluşumuna neden olur, GİS mukozasında inflamatuvar yanıt oluşturduğu gösterilmiştir. Bu da karaciğerden salgılanan bir hormon olan ve demir emilimini yöneten Hepsidin salgılanmasına neden olmaktadır ve demir emilimi daha da kısıtlanmaktadır. Ayrıca GİS’teki reaksiyonlar nedeniyle sıklıkla gördüğümüz gastralji, kabızlık, karın ağrısı, bulantı gibi GİS yan etkileri ile karşılaşmaktayız.',
                ],
                'en' => [
                    'content' => 'İkinci önemli nokta ise; demir pro-oksidan bir molekül olarak metabolizması sırasında serbest radikallerin oluşumuna neden olur, GİS mukozasında inflamatuvar yanıt oluşturduğu gösterilmiştir. Bu da karaciğerden salgılanan bir hormon olan ve demir emilimini yöneten Hepsidin salgılanmasına neden olmaktadır ve demir emilimi daha da kısıtlanmaktadır. Ayrıca GİS’teki reaksiyonlar nedeniyle sıklıkla gördüğümüz gastralji, kabızlık, karın ağrısı, bulantı gibi GİS yan etkileri ile karşılaşmaktayız.',
                ],
            ],
            [
                'name' => 'sukrozomiyal-9',
                'tr' => [
                    'content' => 'Sukrozomiyal® demir (SD), ferrik pirofosfatın iki katmanlı fosfolipit ile çevrilmiş ve sukroz ester bir zarf ile kaplanmış, paraselüler ve transselüler yollardan ve M hücreleri aracılığı ile üç ayrı yoldan emilebilen, yenilikçi bir oral demir formülasyonudur.',
                ],
                'en' => [
                    'content' => 'Sukrozomiyal® demir (SD), ferrik pirofosfatın iki katmanlı fosfolipit ile çevrilmiş ve sukroz ester bir zarf ile kaplanmış, paraselüler ve transselüler yollardan ve M hücreleri aracılığı ile üç ayrı yoldan emilebilen, yenilikçi bir oral demir formülasyonudur.',
                ],
            ],
            [
                'name' => 'sukrozomiyal-10',
                'tr' => [
                    'content' => 'Bu yapısal, fizikokimyasal ve farmakokinetik özellikler, Sukrozomiyal® demire yüksek demir biyoyararlanımı ve mükemmel gastrointestinal toleransı sağlar. Mevcut kanıtların analizi, demir eksikliği tedavisi için konvansiyonel oral demirlerden daha etkili ve daha iyi tolere edilen geçerli bir seçenek olarak oral SD’i desteklemektedir. ',
                ],
                'en' => [
                    'content' => 'Bu yapısal, fizikokimyasal ve farmakokinetik özellikler, Sukrozomiyal® demire yüksek demir biyoyararlanımı ve mükemmel gastrointestinal toleransı sağlar. Mevcut kanıtların analizi, demir eksikliği tedavisi için konvansiyonel oral demirlerden daha etkili ve daha iyi tolere edilen geçerli bir seçenek olarak oral SD’i desteklemektedir. ',
                ],
            ],
            [
                'name' => 'sukrozomiyal-11',
                'tr' => [
                    'content' => 'Sukrozomiyal® demir aynı zamanda, genellikle IV demir (özellikle kronik böbrek hastalığı, kanser, bariatrik cerrahi) alan hastalarda daha düşük risklerle benzer etkinlik göstermiştir. Bu nedenle, oral SD, demir eksikliği tedavisinde önemli bir ilk seçenek olarak ortaya çıkarmaktadır, hatta demir tuzlarına toleranssız veya etkisiz olan denekler için bile kullanılabilir. ',
                ],
                'en' => [
                    'content' => 'Sukrozomiyal® demir aynı zamanda, genellikle IV demir (özellikle kronik böbrek hastalığı, kanser, bariatrik cerrahi) alan hastalarda daha düşük risklerle benzer etkinlik göstermiştir. Bu nedenle, oral SD, demir eksikliği tedavisinde önemli bir ilk seçenek olarak ortaya çıkarmaktadır, hatta demir tuzlarına toleranssız veya etkisiz olan denekler için bile kullanılabilir. ',
                ],
            ],
            [
                'name' => 'sukrozomiyal-12',
                'tr' => [
                    'content' => 'SD emilimine farklı hücresel yolların dahil olması, yüksek biyoyararlanımını, hemoglobin ve ferritin konsantrasyonlarını iyileştirme etkinliğini açıklamaktadır.',
                ],
                'en' => [
                    'content' => 'SD emilimine farklı hücresel yolların dahil olması, yüksek biyoyararlanımını, hemoglobin ve ferritin konsantrasyonlarını iyileştirme etkinliğini açıklamaktadır.',
                ],
            ],
            [
                'name' => 'sukrozomiyal-13',
                'tr' => [
                    'content' => 'CACO-2 hücre kültürlerinden elde edilen veriler, SD uygulamasının, demir sülfat ile karşılaştırıldığında 3 kat ferritin birikimini ve ferrik pirofosfat içeren fosfolipid ile karşılaştırıldığında 3,5 kat arttığını göstermektedir.',
                ],
                'en' => [
                    'content' => 'CACO-2 hücre kültürlerinden elde edilen veriler, SD uygulamasının, demir sülfat ile karşılaştırıldığında 3 kat ferritin birikimini ve ferrik pirofosfat içeren fosfolipid ile karşılaştırıldığında 3,5 kat arttığını göstermektedir.',
                ],
            ],
            [
                'name' => 'sukrozomiyal-14',
                'tr' => [
                    'content' => 'Preklinik çalışmalar açıkça SD\'nin özel yapısal, fizikokimyasal ve farmakokinetik özelliklere sahip olduğunu göstermiştir. Sukrester\'in varlığı, SD’e gastrik direnç sağlar, demir pirofosfatı enzimatik indirgemeye karşı korur ve M hücreleri tarafından yüksek oranda emilmelerini sağlar.',
                ],
                'en' => [
                    'content' => 'Preklinik çalışmalar açıkça SD\'nin özel yapısal, fizikokimyasal ve farmakokinetik özelliklere sahip olduğunu göstermiştir. Sukrester\'in varlığı, SD’e gastrik direnç sağlar, demir pirofosfatı enzimatik indirgemeye karşı korur ve M hücreleri tarafından yüksek oranda emilmelerini sağlar.',
                ],
            ],
            [
                'name' => 'sukrozomiyal-15',
                'tr' => [
                    'content' => 'Preklinik çalışmalar göstermiştir ki, SD diğer klasik demir preparatlarının emildiği DMT-1 (divalan metal transportır) yolağından ve Hepsidin inhibisyonundan bağımsız olarak yüksek emilim oranına sahiptir. ',
                ],
                'en' => [
                    'content' => 'Preklinik çalışmalar göstermiştir ki, SD diğer klasik demir preparatlarının emildiği DMT-1 (divalan metal transportır) yolağından ve Hepsidin inhibisyonundan bağımsız olarak yüksek emilim oranına sahiptir. ',
                ],
            ],
            [
                'name' => 'sukrozomiyal-16',
                'tr' => [
                    'content' => 'Mevcut klinik kanıtların analizi, oral Sukrozomiyal® demiri, geleneksel demir tuzlarına göre daha iyi tolere edilebilen ve yüksek etkinliğe (daha düşük dozlar, daha yüksek Hb artışları ve / veya demir depolarının daha iyi yenilenmesi) sahip yeni nesil demir takviyesi olarak desteklemektedir.',
                ],
                'en' => [
                    'content' => 'Mevcut klinik kanıtların analizi, oral Sukrozomiyal® demiri, geleneksel demir tuzlarına göre daha iyi tolere edilebilen ve yüksek etkinliğe (daha düşük dozlar, daha yüksek Hb artışları ve / veya demir depolarının daha iyi yenilenmesi) sahip yeni nesil demir takviyesi olarak desteklemektedir.',
                ],
            ],
            [
                'name' => 'sukrozomiyal-17',
                'tr' => [
                    'content' => '*Sukrozomiyal® demir ile ilgili, iletişim sayfasından soru, katkı, talep ve görüşlerinizi iletebilirsiniz.',
                ],
                'en' => [
                    'content' => '*Sukrozomiyal® demir ile ilgili, iletişim sayfasından soru, katkı, talep ve görüşlerinizi iletebilirsiniz.',
                ],
            ],
            [
                'name' => 'sukrozomiyal-18',
                'tr' => [
                    'content' => 'Sukrozomiyal® demir bir Pharmanutra teknolojisidir.',
                ],
                'en' => [
                    'content' => 'Sukrozomiyal® demir bir Pharmanutra teknolojisidir.',
                ],
            ],
            
            
            
            
            

        
            [
                'name' => 'subs-contact-name',
                'tr' => [
                    'content' => 'Ad Soyad',
                ],
                'en' => [
                    'content' => 'Name Surname',
                ],
            ],
            [
                'name' => 'contact-email',
                'tr' => [
                    'content' => 'E-Posta',
                ],
                'en' => [
                    'content' => 'E-Mail',
                ],
            ],
            [
                'name' => 'contact-telephone',
                'tr' => [
                    'content' => 'Telefon',
                ],
                'en' => [
                    'content' => 'Phone',
                ],
            ],
            [
                'name' => 'contact-name-surname',
                'tr' => [
                    'content' => 'Ad Soyad',
                ],
                'en' => [
                    'content' => 'Name Surname',
                ],
            ],
            [
                'name' => 'contact-message',
                'tr' => [
                    'content' => 'Mesaj',
                ],
                'en' => [
                    'content' => 'Message',
                ],
            ],

            [
                'name' => 'contact-fax',
                'tr' => [
                    'content' => 'Fax',
                ],
                'en' => [
                    'content' => 'Fax',
                ],
            ],

            [
                'name' => 'contact-address',
                'tr' => [
                    'content' => 'Adres',
                ],
                'en' => [
                    'content' => 'Address',
                ],
            ],
            [
                'name' => 'contact-company',
                'tr' => [
                    'content' => 'DemirOkulu Giyilebilir Sağlık Ürün Hizmet ve <br>Teknolojileri San. ve Tic. A.Ş.',
                ],
                'en' => [
                    'content' => 'DemirOkulu Giyilebilir Saglik Urun Hizmet ve <br>Teknolojileri San. ve Tic. A.S.',
                ],
            ],
            [
                'name' => 'contact-adress-content',
                'tr' => [
                    'content' => 'Sanayi Mahallesi Teknopark Bulvarı Teknopark 4A Apt. No:1 4A /309 Pendik / İstanbul',
                ],
                'en' => [
                    'content' => 'Sanayi Mahallesi Teknopark Bulvari Teknopark 4A Apt. No:1 4A /309 Pendik / Istanbul',
                ],
            ],
            [
                'name' => 'contact-information-text',
                'tr' => [
                    'content' => '<strong>Bilgilendirme Metni</strong> okudum kabul ediyorum.',
                ],
                'en' => [
                    'content' => 'I have read and accepted the <strong> Information Text </strong>.',
                ],
            ],
            [
                'name' => 'contact-send',
                'tr' => [
                    'content' => 'Gönder',
                ],
                'en' => [
                    'content' => 'Send',
                ],
            ],
            [
                'name' => 'contact-subsribe-title',
                'tr' => [
                    'content' => 'Haber bültenimize abone olun',
                ],
                'en' => [
                    'content' => 'Subscribe to our newsletter',
                ],
            ],
            [
                'name' => 'contact-subsribe-content',
                'tr' => [
                    'content' => '',
                ],
                'en' => [
                    'content' => '',
                ],
            ],
           
            [
                'name' => 'contact-information-text-read',
                'tr' => [
                    'content' => 'Demir Okulu ile ilgili güncel haberleri e-mail olarak almak isterim.',  
                ],
                'en' => [
                    'content' => '-', 
                ],
            ],
            [
                'name' => 'contact-information-text-agree',
                'tr' => [
                    'content' => '<a style="text-decoraiton:underline !important;" href=":link:">KVKK Metnini okudum,</a> kabul ediyorum.',
                ],
                'en' => [
                    'content' => 'I hereby <a href=":link:"><strong>give consent</strong> for my personal data to be processed within the scope of this Declaration for the purposes specified by DemirOkulu and transfered to the specified third parties.</a>.', 
                ],
            ],
           
           
                    //Read text begin
            [
                'name' => 'popup-information-text-read',
                'tr' => [
                    'content' => '<h2 class="text-center">DemirOkulu <br>AYDINLATMA METNİ VE AÇIK RIZA BEYANI</h2>
                    <h3>1. Konu</h3>
                    <br>
                    <p>İşbu Beyanın konusu; internet sitesi, e-posta ve sair elektronik ortamlar aracılığı ile DemirOkulu Giyilebilir Sağlık Ürün Hizmet ve Teknolojileri Sanayi ve Ticaret A.Ş. ( <strong>“DemirOkulu”</strong> ) ile iletişime geçen Veri Sahibinin ( <strong>“Veri Sahibi”</strong> ), DemirOkulu ile paylaştığı kişisel verilerine ilişkin olarak 6698 sayılı ve 7 Nisan 2016 tarihli ve 29677 sayılı Resmi Gazete’de yayınlanmış olan Kişisel Verilerin Korunması Kanunu başta olmak üzere kişisel verilerin korunmasına ilişkin mevzuat kapsamında kişisel verilerinin işlenmesine ilişkin hakları bakımından aydınlatılmasını ve bu kapsamda vereceği açık rızasını düzenlemektir.</p>
                    <br>
                    <h3>2. Açık Rıza Kapsamındaki Veriler</h3>
                    <br>
                    <p>Veri Sahibi’nin açık rızası aşağıdaki bilgiler dâhil olmak üzere Veri Sahibi’nin kişisel verilerini kapsamaktadır: <br>
                        <strong>2.1.</strong> İsim, soy isim;
                        <br>
                        <strong>2.2.</strong> E-posta adresi;
                        <br>
                        <strong>2.3.</strong> IP adresi;
                    </p>
                        <br>
                        <h3>3.Kişisel Verilerin İşlenme Yöntemi, Hukuki Sebebi ve Amacı</h3>
                        <br>
                        <p>DemirOkulu işbu Beyanın konusu kişisel verileri, iletişim taleplerine etkin geri dönüşün sağlanması, operasyonel ve tanıtım/promosyon faaliyetlerinin yürütülmesi, bilgilendirme yapılabilmesi, veri sahiplerinin talepleri doğrultusunda işlem yapılabilmesi, iletişim faaliyetlerinin yürütülmesi, hizmetlerin geliştirilebilmesi, müşteri memnuniyetinin sağlanması, sözleşmesel ilişkinin yürütülmesi, hizmetler hakkında değerlendirme ve geri bildirim süreçlerinin etkin bir şekilde yürütülmesi amaçlarıyla elektronik ortamlarda toplamaktadır. Bu süreçte toplanan kişisel veriler, otomatik ve otomatik olmayan yöntemlerle işlenebilmektedir. DemirOkulu kişisel verilerin işlenmesi bakımından işbu amaç ve dayanağın dışına çıkmayacaktır. </p>
                        <br>
                        <h3>4. Kişisel Verilerin Aktarımı</h3>
                        <p>DemirOkulu yukarıda belirtilen amaçlarla işlediği Veri Sahibi’nin kişisel verilerini, hukuki yükümlülüklerin gerektirdiği durumlarda ilgili ve yetkili kamu kurum ve kuruluşlarına yapılacak olan aktarım dışında hiçbir gerçek veya tüzel kişiye aktarmayacaktır.</p>
                        <br>
                        <h3>5. Kişisel Verilerin İşlenme Süresi</h3>
                        <br>
                        <p>DemirOkulu, işlediği kişisel verileri güncel teknolojik yöntemler dâhilinde doğru ve güncel olarak muhafaza etmekte ve yukarıda belirtilen amaçlarla sınırlı sürelerle işlemektedir. DemirOkulu, işlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel verileri re’sen veya Veri Sahibi’nin talebi üzerine silecek, yok edecek veya anonim hâle getirecektir.</p>
                        <br>
                        <h3>6. Veri Sahibi’nin Hakları</h3>
                        <br>
                        <p>Veri Sahibi, DemirOkulu’e başvurarak aşağıda sayılan haklarını kullanabilir:</p>
                        <p class="pl-md-40"><strong>6.1.</strong>Kişisel verilerinin işlenip işlenmediğini öğrenme;</p>
                        <p class="pl-md-40"><strong>6.2.</strong>Kişisel verileri işlenmişse buna ilişkin bilgi talep etme;</p>
                        <p class="pl-md-40"><strong>6.3.</strong>Kişisel verilerinin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme;</p>
                        <p class="pl-md-40"><strong>6.4.</strong>Yurt içinde veya yurt dışında kişisel verilerinin aktarıldığı üçüncü kişileri bilme;</p>
                        <p class="pl-md-40"><strong>6.5.</strong>Kişisel verilerinin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme;</p>
                        <p class="pl-md-40"><strong>6.6.</strong>Kanunun 7. maddesi çerçevesinde kişisel verilerinin silinmesini veya yok edilmesini isteme;</p>
                        <p class="pl-md-40"><strong>6.7.</strong>6.5. ve 6.6. bölümleri uyarınca yapılan işlemlerin, kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme;</p>
                        <p class="pl-md-40"><strong>6.8.</strong>İşlenen kişisel verilerinin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme ve</p>
                        <p class="pl-md-40"><strong>6.9.</strong>Kişisel verilerinin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep etme.</p>
                        <p>Veri Sahibi’nin yukarıda belirtilen haklarını kullanabilmesi için söz konusu taleplerini kimlik tespitini sağlayacak bilgiler ile birlikte aşağıdaki iletişim yollarından yararlanarak yazılı şekilde DemirOkulu’e iletmesi gerekmektedir:</p>
                        <p class="pl-md-40"> <strong>a.</strong> <a href="http://www.DemirOkulu.com.tr">kvkk@DemirOkulu.com.tr </a>adresine, elektronik posta vasıtasıyla; veya</p>
                        <p class="pl-md-40"><strong>b. <i>“Teknopark İstanbul Sanayi Mahallesi Teknopark Bulvarı No: 1 / 4A 309 Pendik İstanbul, Türkiye”</i></strong>adresine posta vasıtasıyla.</p>
                        <br>
                        <h3>7. Kapsam</h3>
                        <br>
                        <p>İşbu Beyan, DemirOkulu tarafından <a href="http://www.DemirOkulu.com.tr">http://www.DemirOkulu.com.tr</a>i <a href="http://www.cardiom.com.tr">http://www.cardiom.com.tr</a>internet sitesinde yayınlanmış olan DemirOkulu Kişisel Verilerin Korunması Politikasının hüküm ve koşullarını kapsamaktadır.</p>
                       ',
                ],
                'en' => [
                    'content' => '<h2 class="text-center">DemirOkulu <br>GENERAL CLARIFICATION NOTICE AND DECLARATION OF EXPLICIT CONSENT</h2>
                    <h3>1.Subject </h3>
                    <br>
                    <p>The subject of this Declaration is to inform the Data Subject <strong>(“Data Subject”)</strong> regarding his/her rights in the processing of their personal data shared with DemirOkulu Giyilebilir Sağlık Ürün Hizmet ve Teknolojileri Sanayi ve Ticaret A.Ş. <strong>(“DemirOkulu”)</strong> through the contact via website, e-mail or other electronic mediums and to obtain his/her explicit consent within the scope of the legislation on personal data protection, particularly the Personal Data Protection Law <strong>(“Law”)</strong> published in the Official Gazette dated 07.04.2016 and numbered 29677.</p>
                    <br>
                    <h3>2.Personal Data Within the Scope of Explicit Consent</h3>
                    <br>
                    <p>This explicit consent comprises any personal data of the Data Subject including the followings: <br>
                        <strong>2.1.</strong> Name, surname;
                        <br>
                        <strong>2.2.</strong> E-mail address;
                        <br>
                        <strong>2.3.</strong> IP address;
                    </p>
                        <br>
                        <h3>3. Method, Legal Grounds and Purpose of Personal Data Processing</h3>
                        <br>
                        <p>DemirOkulu collects the personal data which is subject to this Declaration through the electronic mediums in order to provide effective feedback to the communication requests, conduct operational and advertising/ promotional activities, give information, take action according to the requests of Data Subjects, conduct communication activities, develop services, ensure customer satisfaction, execute contractual relationships, carry out evaluation and feedback processes about services effectively. The personal data collected in this manner may be processed through automatic and non-automatic methods. DemirOkulu shall not exceed these purposes and basis in terms of processing personal data.</p>
                        <br>
                        <h3>4. Transfer of Personal Data</h3>
                        <p>DemirOkulu shall not transfer any personal data of the Data Subject that is processed pursuant to the afore-mentioned purposes to any real or legal persons excluding the duly authorized organizations and institutions when required by legal obligations.</p>
                        <br>
                        <h3>5. Duration of Processing Personal Data </h3>
                        <br>
                        <p>DemirOkulu retains the personal data as accurate and current within the latest technological methods and processes the personal data for a limited time necessary for the aforementioned purposes. In case of disappearance of the process reasons, DemirOkulu shall erase, destruct or anonymize the personal data ex officio or upon a demand by the Data Subject. </p>
                        <br>
                        <h3>6. The Rights of Data Subject</h3>
                        <br>
                        <p>Data Subject may use the rights listed below by applying to DemirOkulu:</p>
                        <p class="pl-md-40"><strong>6.1.</strong>ascertaining whether any personal data is processed or not;</p>
                        <p class="pl-md-40"><strong>6.2.</strong>requesting information related to the processed personal data, if processed;</p>
                        <p class="pl-md-40"><strong>6.3.</strong>ascertaining the purpose of processing personal data, and whether this data is used in compliance with the(se) purpose(s);</p>
                        <p class="pl-md-40"><strong>6.4.</strong>identifying third parties to whom the personal data is transferred within the country or abroad;</p>
                        <p class="pl-md-40"><strong>6.5.</strong>requesting rectification if the personal data is processed in an unsatisfactory or incorrect manner;</p>
                        <p class="pl-md-40"><strong>6.6.</strong>requesting erasure or destruction of the personal data within the framework of Article 7 of the Law;</p>
                        <p class="pl-md-40"><strong>6.7.</strong>requesting to send notification of the operations carried out in compliance with subparagraphs 6.5 and 6.6 to the third parties to whom the personal data had been transferred;</p>
                        <p class="pl-md-40"><strong>6.8.</strong>objecting to the processing of the personal data, exclusively by automatic means, which results to an unfavorable consequence for the Data Subject and</p>
                        <p class="pl-md-40"><strong>6.9.</strong>claiming compensation for the damages due to the unlawful processing of the personal data.</p>
                        <p>In order to exercise the afore-mentioned rights, the Data Subject shall convey the requests in writing, along with the information that will enable identification, to DemirOkulu through the following means of communication:</p>
                        <p class="pl-md-40"> <strong>a.</strong> via e-mail to <a href="http://www.DemirOkulu.com.tr">kvkk@DemirOkulu.com.tr </a></p>
                        <p class="pl-md-40"><strong>b. via mail to the address<i>“Teknopark İstanbul Sanayi Mahallesi Teknopark Bulvarı No: 1 / 4A 309 Pendik İstanbul, Türkiye”</i></strong></p>
                        <br>
                        <h3>7. Scope</h3>
                        <br>
                        <p>This Declaration covers the terms and conditions of the DemirOkulu Personal Data Protection Policy published by DemirOkulu on the websites <a href="http://www.DemirOkulu.com.tr">http://www.DemirOkulu.com.tr</a>and <a href="http://www.cardiom.com.tr">http://www.cardiom.com.tr</a></p>',
                ],
            ],


            //read text-end


            //agree text- begin
            [
                'name' => 'popup-information-text-agree',
                'tr' => [
                    'content' => '<h2 class="text-center">DEMİROKULU <br>BİLGİLENDİRME GRUBU AYDINLATMA METNİ VE AÇIK RIZA BEYANI</h2>
                  
                    <br>
                    <p>Genveon İlaç\'ın sahibi olduğu www.demirokulu.com sitesi kapsamında işlenecek olan kişisel verilere ve siteye üye olacak kişilere ilişkin hazırladığımız dokümantasyon ekte ilgilerinize sunulmaktadır.</p>
                    <br>
                  
                    <p>Göndermiş olduğumuz dokümanların konumlandırılması ile ilgili bilgiler aşağıda bilginize sunulmaktadır.</p>
                    
                        <br>
                        
                        <p><strong>Genveon İlaç (Demirokulu) İnternet Sitesi KVK Bilgilendirme ve Açık Rıza Metni & Genveon İlaç (Demirokulu) Çerez Bilgilendirme Metni:</strong> Bu metinler siteye üye olmadan siteyi ziyaret eden kişilere yönelik hazırlanmıştır. Bu metinlere erişim sağlanabilmesini sağlayacak linklerin sitenin aşağısında kalıcı olarak bulunması gerekmektedir.</p>
                        <br>

                        <p>KVKK\'nın 10. maddesinde düzenlenen \"Aydınlatma Yükümlülüğü\" uyarınca İnternet Sitesi KVK Bilgilendirme ve Açık Rıza Metni ile Çerez Bilgilendirme Metni\'ni internet sitesini ilk defa ziyaret eden kişilerin karşısına çıkararak, kişiler tarafından okunulmasını sağlayacak bir mekanizma ile sunmanız gerekmektedir. (Örn. sticky box, splash screen veya popup gibi)</p>
                        <br>
                      
                        <p>Söz konusu metinleri sitenin alt tarafında bulunan bir çubuk vasıtasıyla hyperlink verilerek, site ziyaretçileri için erişilebilir hale getirmeniz için hazırlanan örnek metin aşağıda, örnek görsel ise ekte ilginize sunulmaktadır.</p>
                        <br>
                        
                        <p>"Verdiğimiz hizmetleri geliştirmek için çerez kullanıyoruz. Konu ile ilgili daha detaylı bilgi almak ve kişisel tercihlerinizi yönetmek için Çerez Bilgilendirme Metni ve İnternet Sitesi KVK Bilgilendirme ve Açık Rıza Metni\'ni ziyaret edebilirsiniz.\"</p>
                        <p class="pl-md-40"><strong>6.1.</strong>Kişisel verilerinin işlenip işlenmediğini öğrenme;</p>
                        <p class="pl-md-40"><strong>6.2.</strong>Kişisel verileri işlenmişse buna ilişkin bilgi talep etme;</p>
                        <p class="pl-md-40"><strong>6.3.</strong>Kişisel verilerinin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme;</p>
                        <p class="pl-md-40"><strong>6.4.</strong>Yurt içinde veya yurt dışında kişisel verilerinin aktarıldığı üçüncü kişileri bilme;</p>
                        <p class="pl-md-40"><strong>6.5.</strong>Kişisel verilerinin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme;</p>
                        <p class="pl-md-40"><strong>6.6.</strong>Kanunun 7. maddesi çerçevesinde kişisel verilerinin silinmesini veya yok edilmesini isteme;</p>
                        <p class="pl-md-40"><strong>6.7.</strong>6.5. ve 6.6. bölümleri uyarınca yapılan işlemlerin, kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme;</p>
                        <p class="pl-md-40"><strong>6.8.</strong>İşlenen kişisel verilerinin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme ve</p>
                        <p class="pl-md-40"><strong>6.9.</strong>Kişisel verilerinin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep etme.</p>
                        <p>Veri Sahibi’nin yukarıda belirtilen haklarını kullanabilmesi için söz konusu taleplerini kimlik tespitini sağlayacak bilgiler ile birlikte aşağıdaki iletişim yollarından yararlanarak yazılı şekilde DemirOkulu’e iletmesi gerekmektedir:</p>
                        <p class="pl-md-40"> <strong>a.</strong> <a href="http://www.DemirOkulu.com.tr">kvkk@DemirOkulu.com.tr </a>adresine, elektronik posta vasıtasıyla; veya</p>
                        <p class="pl-md-40"><strong>b. <i>“Teknopark İstanbul Sanayi Mahallesi Teknopark Bulvarı No: 1 / 4A 309 Pendik İstanbul, Türkiye”</i></strong>adresine posta vasıtasıyla.</p>
                        <br>
                        <h3>7. Kapsam</h3>
                        <br>
                        <p>İşbu Beyan, DemirOkulu tarafından <a href="http://www.DemirOkulu.com.tr">http://www.DemirOkulu.com.tr</a>i <a href="http://www.cardiom.com.tr">http://www.cardiom.com.tr</a>internet sitesinde yayınlanmış olan DemirOkulu Kişisel Verilerin Korunması Politikasının hüküm ve koşullarını kapsamaktadır.</p>
                        ',
                ],
                'en' => [
                    'content' => '<h2 class="text-center">DemirOkulu <br>CLARIFICATION NOTICE OF INFORMATION GROUP ON PROCESSING PERSONAL DATA AND DECLARATION OF EXPLICIT CONSENT</h2>
                    <h3>1.Subject </h3>
                    <br>
                    <p>The subject of this Declaration is to inform our software users which are the doctors and people who would like to subscribe to the e-newsletter (collectively <strong>“Data Subject”</strong> ) of their rights regarding the processing of their personal data shared with DemirOkulu Giyilebilir Sağlık Ürün Hizmet ve Teknolojileri Sanayi ve Ticaret A.Ş. <strong>(“DemirOkulu”)</strong> for DemirOkulu Information Group or the e-newsletter subscription and to obtain their explicit consent within the scope of the legislation on personal data protection, particularly the Personal Data Protection Law No. 6698 <strong>(“Law”).</strong></p>
                    <br>
                    <h3>2. Personal Data Within the Scope of Explicit Consent </h3>
                    <br>
                    <p>This explicit consent comprises the following personal data of the Data Subject:  <br>
                        <strong>2.1.</strong> Name, surname;
                        <br>
                        <strong>2.2.</strong> E-mail address;
                    </p>
                        <br>
                        <h3>3. Method, Legal Grounds and Purpose of Personal Data Processing</h3>
                        <br>
                        <p>DemirOkulu collects the personal data through the electronic and/or physical mediums to send e-mails to the Data Subject to provide e-newsletter subscription in order to keep the Data Subject abreast of the news and campaigns, to give information concerning the innovations and developments, to conduct adversiting/promotion activities, to develop services, to ensure customer satisfaction, to execute the contractual relationships, to carry out evaluation and feedback processes about services effectively, to maintain sales and marketing policies. The personal data collected in this manner may be processed through automatic and non-automatic methods. DemirOkulu shall not exceed these purposes and basis in terms of processing personal data.</p>
                        <br>
                        <h3>4. Transfer of Personal Data</h3>
                        <p>DemirOkulu shall not transfer any personal data of the Data Subject, which is processed pursuant to the afore-mentioned purposes, to any real or legal persons excluding the duly authorized organizations and institutions when required by legal obligations.</p>
                        <br>
                        <h3>5. Duration of Processing Personal Data </h3>
                        <br>
                        <p>DemirOkulu retains the personal data as accurate and current within the latest technological methods and processes the personal data for a limited time necessary for the afore-mentioned purposes. In case of disappearance of the process reasons,DemirOkulu shall erase, destruct or anonymize the personal data ex officio or upon a demand by the Data Subject. </p>
                        <br>
                        <h3>6. The Rights of Data Subject</h3>
                        <br>
                        <p>Data Subject may use the rights listed below by applying to DemirOkulu:</p>
                        <p class="pl-md-40"><strong>6.1.</strong>ascertaining whether any personal data is processed or not;</p>
                        <p class="pl-md-40"><strong>6.2.</strong>requesting information related to the processed personal data, if processed;</p>
                        <p class="pl-md-40"><strong>6.3.</strong>ascertaining the purpose of processing personal data, and whether this data is used in compliance with the(se) purpose(s);</p>
                        <p class="pl-md-40"><strong>6.4.</strong>identifying third parties to whom the personal data is transferred within the country or abroad;</p>
                        <p class="pl-md-40"><strong>6.5.</strong>requesting rectification if the personal data is processed in an unsatisfactory or incorrect manner;</p>
                        <p class="pl-md-40"><strong>6.6.</strong>requesting erasure or destruction of the personal data within the framework of Article 7 of the Law;</p>
                        <p class="pl-md-40"><strong>6.7.</strong>requesting to send notification of the operations carried out in compliance with subparagraphs 6.5 and 6.6 to the third parties to whom the personal data had been transferred;</p>
                        <p class="pl-md-40"><strong>6.8.</strong>objecting to the processing of the personal data, exclusively by automatic means, which results to an unfavorable consequence for the Data Subject and</p>
                        <p class="pl-md-40"><strong>6.9.</strong>claiming compensation for the damages due to the unlawful processing of the personal data.</p>
                        <p>In order to exercise the afore-mentioned rights, the Data Subject shall convey the requests  in writing, along with the information that will enable identification, to DemirOkulu through the following means of communication:</p>
                        <p class="pl-md-40"> <strong>a.</strong> via e-mail to <a href="http://www.DemirOkulu.com.tr">kvkk@DemirOkulu.com.tr </a></p>
                        <p class="pl-md-40"><strong>b. via mail to the address<i>“Teknopark İstanbul Sanayi Mahallesi Teknopark Bulvarı No: 1 / 4A 309 Pendik İstanbul, Türkiye”</i></strong></p>
                        <br>
                        <h3>7. Scope</h3>
                        <br>
                        <p>This Declaration covers the terms and conditions of the DemirOkulu Personal Data Protection Policy published by DemirOkulu on the websites <a href="http://www.DemirOkulu.com.tr">http://www.DemirOkulu.com.tr</a>and <a href="http://www.cardiom.com.tr">http://www.cardiom.com.tr</a></p>
                        ',
                ],
            ],
            // agree-text-end

            //Cookies

            [
                'name' => 'cookies-text',
                'tr' => [
                    'content' => 'İçeriği ve reklamları kişiselleştirmek, sosyal medya özellikleri sunmak ve trafiği analiz etmek için çerezler kullanıyoruz.',
                ],
                'en' => [
                    'content' => 'İçeriği ve reklamları kişiselleştirmek, sosyal medya özellikleri sunmak ve trafiği analiz etmek için çerezler kullanıyoruz.',
                ],
            ],
            [
                'name' => 'cookies-button-text',
                'tr' => [
                    'content' => 'Tamam',
                ],
                'en' => [
                    'content' => 'Okey',
                ],
            ],

            //end

            [
                'name' => 'kvkk-text',
                'tr' => [
                    'content' => '<a href="assets/downloads/ENG_ERDEM-ERDEM-DemirOkulu_KVKK.pdf" > Kişisel Verilerin Korunması Politikası</a>',
                ],
                'en' => [
                    'content' => '<a href="assets/downloads/ENG_ERDEM-ERDEM-DemirOkulu_KVKK.pdf" > Personal Data Protection Policy</a>',
                ],
            ],        


            
            
            
            
            
            
            

        ];

        // Create
        foreach ($sentences as $sentence) {
            Sentence::create($sentence);
        }
    }
}
