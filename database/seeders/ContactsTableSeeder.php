<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $param = [
            'fullname' => '岩崎蓮',
            'gender' => '1',
            'email' => 'ren.iwasaki@zmail.com',
            'postcode' => '134-0003',
            'address' => '東京都江戸川区春江町１丁目',
            'building_name' => '興和ビル601',
            'opinion' => '斬新なデザインがとてもよかったです。',
        ];
        DB::table('contacts')->insert($param);
     $param = [
            'fullname' => '町田里奈',
            'gender' => '2',
            'email' => 'satona.machida@zaboo.co.jp',
            'postcode' => '590-0803',
            'address' => '大阪府堺市堺区東上野芝町１丁',
            'building_name' => '振興ビル432',
            'opinion' => 'とても見た目が美しく色鮮やかで、大事に使っていきたいと思います。',
        ];
        DB::table('contacts')->insert($param);
     $param = [
            'fullname' => '横田拓也',
            'gender' => '1',
            'email' => 'takuya.yokota@zmail.com',
            'postcode' => '910-2475',
            'address' => '福井県福井市 赤谷町',
            'building_name' => '片瀬ハイツ303',
            'opinion' => '最初は、使い勝手が良くわかりませんでしたが、成れて来たら非常に便利で重宝しています。',
        ];
        DB::table('contacts')->insert($param);
     $param = [        
                    'fullname' => '矢野萌',
        'gender' => '2',
        'email' => 'moe.yano@zaboo.co.jp',
        'postcode' => '249-0006',
        'address' => '神奈川県逗子市３丁目５番地の１',
        'building_name' => '桜マンション202',
        'opinion' => '次も、同じものを購入したいと思います。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '沼田舞',
        'gender' => '2',
        'email' => 'mai.numata@zmail.com',
        'postcode' => '606-8187',
        'address' => '京都府京都市 左京区 一乗寺大原田町',
        'building_name' => '雅コート301',
        'opinion' => '荷物が到着した時には既に壊れてました。輸送事故とはいえ商品の交換対応が遅く、正直、御社の対応にはガッカリしました。他社と比べて良い製品だと思いましたが、サービス対応には不満です。改善をお願いします。',
        ];
        DB::table('contacts')->insert($param);
     $param = [         
        'fullname' => '一条彰',
        'gender' => '1',
        'email' => 'akira.ichijo@zaboo.co.jp',
        'postcode' => '003-0859',
        'address' => '北海道札幌市 白石区 川北',
        'building_name' => 'サンライズ305',
        'opinion' => '待ちに待った商品が届きました。期待を裏切らないデザインと性能に大満足です。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '横山隆二',
        'gender' => '1',
        'email' => 'ryuji.yokoyama@zmail.com',
        'postcode' => '990-2301',
        'address' => '山形県山形市 蔵王温泉',
        'building_name' => '釜戸旅館',
        'opinion' => '玄関先に飾っています。お客様も物珍しそうに眺めています。良い商品を購入させていただきました。',
        ];
        DB::table('contacts')->insert($param);
     $param = [         
        'fullname' => '山田綾',
        'gender' => '2',
        'email' => 'aya.yamada@zaboo.co.jp',
        'postcode' => '320-0024',
        'address' => '栃木県宇都宮市 栄町',
        'building_name' => '大倉ビル522',
        'opinion' => 'お店に飾っています。お陰でお店の雰囲気も華やかになりました。',
        ];
        DB::table('contacts')->insert($param);
     $param = [         
        'fullname' => '新庄勉',
        'gender' => '1',
        'email' => 'tsutomu.shinjo@zmail.com',
        'postcode' => '891-0175',
        'address' => '鹿児島県鹿児島市 桜ケ丘６丁目',
        'building_name' => 'サザンクロス 104',
        'opinion' => 'とても役に立ってます。',
        ];
        DB::table('contacts')->insert($param);
     $param = [    
        'fullname' => '比企洋子',
        'gender' => '2',
        'email' => 'yoko.hiki@zaboo.co.jp',
        'postcode' => '350-1335',
        'address' => '埼玉県狭山市 柏原',
        'building_name' => 'スカイコート607',
        'opinion' => 'デザインが特徴的で飽きが来ない！長く大事に使えそう！',
        ];
        DB::table('contacts')->insert($param);
     $param = [         
        'fullname' => '藤井勇実',
        'gender' => '1',
        'email' => 'isami.fujii@zmail.com',
        'postcode' => '400-0606',
        'address' => '山梨県南巨摩郡 富士川町 十谷',
        'building_name' => 'アルプスハイツ204',
        'opinion' => '思ったより軽く、旅行の時には何時も携行しています。',
        ];
        DB::table('contacts')->insert($param);
     $param = [         
        'fullname' => '白戸愛',
        'gender' => '2',
        'email' => 'ai.shirato@zaboo.co.jp',
        'postcode' => '437-0624',
        'address' => '静岡県浜松市 天竜区 春野町和泉平',
        'building_name' => 'スタンレーマンション311',
        'opinion' => '家族全員で使っています。特に子供たちが気に入っています。',
        ];
        DB::table('contacts')->insert($param);
     $param = [     
        'fullname' => '岡田正明',
        'gender' => '1',
        'email' => 'masaaki.okada@zmail.com',
        'postcode' => '704-8173',
        'address' => '岡山県岡山市 東区 可知',
        'building_name' => 'マスカットハイツ103',
        'opinion' => '荷物が到着した時には既に壊れてました。サービスに問い合わせましたがメールにて依頼してくださいとのことでした。オンラインショップなので分かりますが、それでも、もう少し電話での応対は丁寧にお願いしたいです。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '渡辺貴文',
        'gender' => '1',
        'email' => 'takafumi.watanabe@zaboo.co.jp',
        'postcode' => '684-0064',
        'address' => '鳥取県境港市 三軒屋町',
        'building_name' => 'シーライフ205',
        'opinion' => '予想通りの商品で大満足です。親戚や友達にも紹介したいと思います',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '遠藤良一',
        'gender' => '1',
        'email' => 'ryoichi.endo@zmail.com',
        'postcode' => '969-3411',
        'address' => '福島県会津若松市 河東町大田原',
        'building_name' => '八重桜ハイツ303',
        'opinion' => '毎日、使用しています。軽いので階段での運搬も楽にでき、年寄りにはとても優しい商品です。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '佐藤紀子',
        'gender' => '2',
        'email' => 'noriko.sato@zaboo.co.jp',
        'postcode' => '028-0544',
        'address' => '岩手県遠野市 松崎町松崎',
        'building_name' => 'コーポ北見104',
        'opinion' => '軽いので持ち運びが楽です。友達に貸したら大人気で、友達も買いたいと言っていましたので、紹介しました。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '井上真司',
        'gender' => '1',
        'email' => 'shinji.inoue@zmail.com',
        'postcode' => '798-0052',
        'address' => '愛媛県宇和島市 京町',
        'building_name' => '南海ラグーン403',
        'opinion' => '奇抜なデザインなので目立ちます。外で持ち歩くと、通りすがりの人が振り返って見る事もあります。デザインGoodです。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '斎藤秋穂',
        'gender' => '2',
        'email' => 'akiho.saito@zaboo.co.jp',
        'postcode' => '501-0111',
        'address' => '岐阜県岐阜市 鏡島',
        'building_name' => '両備ビル101',
        'opinion' => 'お店に置いています。何時もお会計の時にお客様が珍しがって、どの様な商品か良く尋ねられます。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '水沼玲',
        'gender' => '2',
        'email' => 'rei.mizunuma@zaboo.co.jp',
        'postcode' => '950-2145',
        'address' => '新潟県新潟市 西区 田島',
        'building_name' => '北信ビル321',
        'opinion' => '車に常備置いて眺めています。お客様の送迎の際、話題になって、とても和んだ雰囲気にしてくれて助かってます。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '田中恵美',
        'gender' => '2',
        'email' => 'emi.tanaka@zaboo.co.jp',
        'postcode' => '886-0111',
        'address' => '宮崎県小林市 須木中原',
        'building_name' => 'スカイハイツ302',
        'opinion' => '近い将来、買い替えを考えています。もう少し色のバリエーションを増やしていただけるとありがたいです。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '三浦玄',
        'gender' => '1',
        'email' => 'gen.miura@zmail.com',
        'postcode' => '299-5234',
        'address' => '千葉県勝浦市 勝浦',
        'building_name' => 'マリンライフ501',
        'opinion' => '取り扱い説明書が同梱されていませんでした。サービスに問い合わせましたがメールにて依頼してくださいとのことでした。また、サイトからダウンロードできるから！との説明に少しイラとしました。入るべき物が同梱されていなかったわけですから、もう少し客の立場に成って対応してほしい。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '岸忍',
        'gender' => '1',
        'email' => 'shinobu.kishi@zaboo.co.jp',
        'postcode' => '840-0861',
        'address' => '佐賀県佐賀市 嘉瀬町中原',
        'building_name' => 'ウエストコート202',
        'opinion' => '待ちに待った商品が届きました。期待を裏切らないデザインと性能に大満足です。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '鈴木一馬',
        'gender' => '1',
        'email' => 'kazuma.suzuki@zmail.com',
        'postcode' => '456-0035',
        'address' => '愛知県名古屋市 熱田区 白鳥',
        'building_name' => 'ドラゴンコート708',
        'opinion' => 'キャンプで使用しています。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '神崎麗美',
        'gender' => '2',
        'email' => 'remi.shinzaki@zaboo.co.jp',
        'postcode' => '310-0801',
        'address' => '茨城県水戸市 桜川',
        'building_name' => 'シェラネバタマンション513',
        'opinion' => '散歩の際に持ち歩いています。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '三好圭吾',
        'gender' => '1',
        'email' => 'keigo.miyoshi@zmail.com',
        'postcode' => '376-0041',
        'address' => '群馬県桐生市 川内町',
        'building_name' => 'マーガレットハイツ101',
        'opinion' => '妻に購入しましたが、実際には子供たちの方が、気に入って使ってます。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '三田祥子',
        'gender' => '2',
        'email' => 'shoko.,mita@zaboo.co.jp',
        'postcode' => '380-0812',
        'address' => '長野県長野市 早苗町',
        'building_name' => 'サンシャインビラ301',
        'opinion' => '軽いわりに、意外と作りがしっかりしていて長持ちしそうなので良かったです。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '平川栄治',
        'gender' => '1',
        'email' => 'eiji.hirakawa@zmail.com',
        'postcode' => '870-0278',
        'address' => '大分県大分市 青崎',
        'building_name' => 'スプリングフィールド402',
        'opinion' => '思ったより軽く、旅行の時には何時も携行しています。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '工藤芽衣',
        'gender' => '2',
        'email' => 'mei.kudo@zaboo.co.jp',
        'postcode' => '981-0911',
        'address' => '宮城県仙台市 青葉区 台原',
        'building_name' => 'ブルーリーブスマション720',
        'opinion' => '家族全員で使っています。特に子供たちが気に入っています。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '岡崎良亮',
        'gender' => '1',
        'email' => 'ryosuke.okazaki@zmail.com',
        'postcode' => '930-0898',
        'address' => '富山県富山市 桜谷みどり町',
        'building_name' => 'マスカットハイツ103',
        'opinion' => '荷物が到着した時には既に壊れてました。サービスに問い合わせましたがメールにて依頼してくださいとのことでした。オンラインショップなので分かりますが、それでも、もう少し電話での応対は丁寧にお願いしたいです。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '尾崎淳司',
        'gender' => '1',
        'email' => 'junji.ozaki@zaboo.co.jp',
        'postcode' => '630-8453',
        'address' => '奈良県奈良市 西九条町',
        'building_name' => 'エデン403',
        'opinion' => '暫く倉庫にしまっていましたが、最近子供が生まれ、また、使い始めました。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '大野仁志',
        'gender' => '1',
        'email' => 'hitoshi.oono@zmail.com',
        'postcode' => '525-0072',
        'address' => '滋賀県草津市 笠山',
        'building_name' => 'レイクサイド211',
        'opinion' => '購入してよかった！納得の商品です。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '照屋真理',
        'gender' => '2',
        'email' => 'mari.teruya@zaboo.co.jp',
        'postcode' => '903-0815',
        'address' => '沖縄県那覇市 首里金城町',
        'building_name' => 'エメラルドグリーン首里105',
        'opinion' => 'お店に飾ってます。雰囲気がガラっと変わって購入してよかったです。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '小林美優',
        'gender' => '2',
        'email' => 'miyu.kobayashi@zaboo.co.jp',
        'postcode' => '814-0103',
        'address' => '福岡県福岡市 城南区 鳥飼',
        'building_name' => 'エンペラービレッジ801',
        'opinion' => '義理の両親も気に入っていて、大満足です。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '宮下亜香里',
        'gender' => '2',
        'email' => 'akari.miyashita@zaboo.co.jp',
        'postcode' => '850-0831',
        'address' => '長崎県長崎市 鍛冶屋町',
        'building_name' => 'クレアーレ520',
        'opinion' => '窓際に置いて何時も眺めています。とても奇抜なデザインで、特に夜の間接ライトで良い雰囲気になります。',
        ];
        DB::table('contacts')->insert($param);
     $param = [ 
        'fullname' => '幸田咲',
        'gender' => '2',
        'email' => 'saki.koda@zaboo.co.jp',
        'postcode' => '739-1742',
        'address' => '広島県広島市 安佐北区 亀崎',
        'building_name' => 'サンタモニカ402',
        'opinion' => '何時も面白い商品を紹介頂けるのでネットで定期的に拝見させて頂いています。今度、子供の誕生日に何か商品を購入しようかと考えています。',
        ];
        DB::table('contacts')->insert($param);
    }
}
