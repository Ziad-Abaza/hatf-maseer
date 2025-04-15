<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $advantages = [
            [
                'ar' => '        <h4 class="translatable" data-ar="أكثر من 17 عاما من الخبرة"
        >
        أكثر من 17 عاما من الخبرة
    </h4>
    <p class="translatable"
        data-ar="تأسس مصنع مسير الصناعي عام 1990 في مجال الصناعات المعدنية ومنتجات التبريد المنزلية."
        >
        تأسس مصنع مسير الصناعي عام 1990 في مجال الصناعات المعدنية ومنتجات التبريد المنزلية.
    </p>',
                'en' => '    <h4 class="translatable" 
    data-en="Over 17 Years of Experience">
    Over 17 Years of Experience
    </h4>
     <p class="translatable"
    data-en="Masir Industrial Factory was established in 1990 in the field of metal industries and home cooling products.">
    Masir Industrial Factory was established in 1990 in the field of metal industries and home cooling products.
   </p>',
            ],
            [
                'ar' => '        <h4 class="translatable" data-ar="نقدم افضل الخامات"
        >
        نقدم افضل الخامات
    </h4>
    <p class="translatable"
        data-ar="تأسس مصنع مسير الصناعي عام 1990 في مجال الصناعات المعدنية ومنتجات التبريد المنزلية."
        >
        تأسس مصنع مسير الصناعي عام 1990 في مجال الصناعات المعدنية ومنتجات التبريد المنزلية.
    </p>',
                'en' => '    <h4 class="translatable" 
    data-en="We Offer the Best Materials">
    We Offer the Best Materials
</h4>
<p class="translatable"
   
    data-en="Masir Industrial Factory was established in 1990 in the field of metal industries and home cooling products.">
    Masir Industrial Factory was established in 1990 in the field of metal industries and home cooling products.
</p>',
            ],
            [
                'ar' => '        <h4 class="translatable" data-ar="جودة لا مثيل لها" >
                جودة لا مثيل لها
            </h4>
            <p class="translatable"
                data-ar="نحن نستخدم أحدث التقنيات لضمان تقديم منتجات تبريد عالية الجودة."
                >
                نحن نستخدم أحدث التقنيات لضمان تقديم منتجات تبريد عالية الجودة.
            </p>',
                'en' => '    <h4 class="translatable"  data-en="Unmatched Quality">
    Unmatched Quality
</h4>
<p class="translatable"
    
    data-en="We use the latest technology to ensure high-quality cooling products.">
    We use the latest technology to ensure high-quality cooling products.
</p>',
            ],
        ];


        foreach ($advantages as $advantage) {
            Advantage::create([
                'content' => prepareLocalizedData($advantage['ar'], $advantage['en']),
            ]);
        }
    }
}

// php artisan db:seed --class=AdvantageSeeder
