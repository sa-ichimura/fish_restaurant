<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('foods')->delete();
        DB::table('foods')->insert([
                'id'=>'1',
                'code'=>'236622',
                'price'=>'774',
                'name'=>'アドバンスフード テトラ 20g',
                'volume'=>'20g',
                'size'=>"直径:0.24~0.42mm",
                'material'=>"オキアミミール、魚粉、イカミール、でんぷん、(小麦粉)、魚油、ベタイン、パラコッカス、カロチニファシエンス菌体末、酵素処理オキアミ、リン酸カルシウム、大豆レシチン、グルコサミン、全卵粉末、乳酸菌、酪酸菌、糖化菌、ビール酵母、ニンニク粉末、甘草抽出物、ビフィズス菌体末、ブドウ糖、ケイ酸、炭酸カルシウム、大豆油かす、(ファフィア酵母)、(イカ肝油)",
                'type'=>"",
                'feature'=>
                "<li>タンパクと脂質を豊富に含み、栄養バランスに優れたプレミアムフードです</li>
                <li>リン脂質と必須脂肪酸であるEPAやDHAを強化しました。</li>
                <li>水が汚れにくい粒製法で作られています。</li>
                <li>高い嗜好性と、最適な分散性・沈降性を実現した理想的なフードです。</li>
                <li>自然で健康な成長をサポートします。</li>",
                'target'=>"テトラ",
                'created_at' => $now, 
                'updated_at' => $now
            ]);
            DB::table('foods')->insert([
                'id'=>'2',
                'code'=>'236623',
                'price'=>'774',
                'name'=>'アドバンスフード テトラ 20g',
                'volume'=>'20g',
                'size'=>'直径:0.42~0.62mm',
                'material'=>"オキアミミール、魚粉、イカミール、でんぷん、(小麦粉)、魚油、ベタイン、パラコッカス、カロチニファシエンス菌体末、酵素処理オキアミ、リン酸カルシウム、大豆レシチン、グルコサミン、全卵粉末、乳酸菌、酪酸菌、糖化菌、ビール酵母、ニンニク粉末、甘草抽出物、ビフィズス菌体末、ブドウ糖、ケイ酸、炭酸カルシウム、大豆油かす、(ファフィア酵母)、(イカ肝油)",
                'type'=>"顆粒",
                'feature'=>
                '<li>獣医師が推奨している国産のグッピー用人工飼料です。</li>
                <li>タンパクと脂質を豊富に含み、栄養バランスに優れたプレミアムフードです。</li>
                <li>繁殖に最適な高い栄養成分をしており、免疫力のサポートもします。</li>
                <li>リン脂質と必須脂肪酸であるEPAやDHAを強化しました。</li>
                <li>水が汚れにくい粒製法で作られています。</li>
                <li>高い嗜好性と、最適な分散性・沈降性を実現した理想的なフードです。</li>',
                'target'=>'グッピー',
                'created_at' => $now, 
                'updated_at' => $now
            ]);
    }
}
