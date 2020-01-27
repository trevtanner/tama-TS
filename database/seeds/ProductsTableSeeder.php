<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'productnumber' => 'NI-' . Rand(0, 9) . Rand(0, 9) . Rand(0, 9) . Rand(0, 9),
            'title' => 'Test Product',
            'shortdescript' => Str::random(15),
            'longdescript' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quod cum dixissent, ille contra.
             Non enim quaero quid verum, sed quid cuique dicendum sit. Quem Tiberina descensio festo illo die tanto
             gaudio affecit, quanto L. Quasi ego id curem, quid ille aiat aut neget. Effluit igitur voluptas corporis
             et prima quaeque avolat saepiusque relinquit causam paenitendi quam recordandi. Duo Reges: constructio
             interrete. Quid igitur dubitamus in tota eius natura quaerere quid sit effectum? Non semper, inquam;
             Obsecro, inquit, Torquate, haec dicit Epicurus? Quae quidem vel cum periculo est quaerenda vobis;

            Etenim semper illud extra est, quod arte comprehenditur. Nobis Heracleotes ille Dionysius flagitiose
            descivisse videtur a Stoicis propter oculorum dolorem. Quae fere omnia appellantur uno ingenii nomine,
            easque virtutes qui habent, ingeniosi vocantur. Itaque eos id agere, ut a se dolores, morbos, debilitates
            repellant. Si alia sentit, inquam, alia loquitur, numquam intellegam quid sentiat;',
            //image link needs to be in products/{filename} format and img needs to be in storage/products folder
            'image' => '/opt/lampp/htdocs/tama/tama-TS/public/img/comingsoon1280x1020.jpg',
            //card image must be 300x300
            'index_image' => '/public/img/comingsoon300.jpg',
            'supplier_id' => Rand(1, 8),
            'tag_id' => Rand(1, 6),
            'subcategory_id' => Rand(1, 11),

        ]);


    }
}
