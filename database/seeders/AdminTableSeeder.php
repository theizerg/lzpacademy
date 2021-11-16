<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Academia;
use App\Models\FormaDePago;
use App\Models\Curso;
use App\Models\Nacionalidades;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =new User();
        $user->name = 'Theizer';
        $user->lastname = 'Gonzalez';
        $user->username = 'tgonzalez';
        $user->email = 'tgonzalez@mail.com';
        $user->email_verified_at = now();
        $user->password = bcrypt('admin123');
        $user->status = 1;
        $user->save();

        $user->assignRole('Super Administrador');





        $academia =new Academia();
        $academia->name       = 'Lzpacademy';
        $academia->direccion  = 'Caracas - Venezuela';
        $academia->telefono   = '+58 000-0000000';
        $academia->email      = 'correo@mail.com';
        $academia->logo       = 'logo-principal.png';
        $academia->save();

        $pago =new FormaDePago();
        $pago->name       = 'Efectivo (USD)';
        $pago->status     = 1;
        $pago->save();


        $pago =new FormaDePago();
        $pago->name       = 'Paypal (USD)';
        $pago->status     = 1;
        $pago->save();



        $curso =new Curso();
        $curso->name       = 'Guitarra';
        $curso->status     = 1;
        $curso->save();


        $curso =new Curso();
        $curso->name       = 'Teclado';
        $curso->status     = 1;
        $curso->save();

        $curso =new Curso();
        $curso->name       = 'Violonchello';
        $curso->status     = 1;
        $curso->save();

        $curso =new Curso();
        $curso->name       = 'Canto';
        $curso->status     = 1;
        $curso->save();

        $curso =new Curso();
        $curso->name       = 'Trompeta';
        $curso->status     = 1;
        $curso->save();

        $curso =new Curso();
        $curso->name       = 'Bajo';
        $curso->status     = 1;
        $curso->save();


        $curso =new Curso();
        $curso->name       = 'Batería';
        $curso->status     = 1;
        $curso->save();



          $nationals = array(
            'Afgano', 'albanés', 'argelino', 'estadounidense', 'andorrano', 'angoleño', 'antiguo', 'argentino', 'armenio', 'australiano', 'austriaco', 'azerbaiyano', 'bahameño ',' Bahrein ',' Bangladesh ',' Barbados ',' Barbudanos ',' Batswana ',' Bielorruso ',' Belga ',' Beliceño ',' Beninés ',' Bután ',' Boliviano ',' Bosnio ', 'Brasileño', 'Británico', 'Bruneano', 'Búlgaro', 'Burkinés', 'Birmano', 'Burundés', 'Camboyano', 'Camerún', 'Canadiense', 'Caboverdiano', 'Centroafricano', 'Chadiano', 'chileno', 'chino', 'colombiano', 'comorano', 'congoleño', 'costarricense', 'croata', 'cubano', 'chipriota', 'checo', 'danés', ' Djibouti ',' dominicano ',' holandés ',' timorense oriental ',' ecuatoriano ',' egipcio ',' emiriano ',' ecuatoguineano ',' eritreo ',' estonio ',' etíope ',' fiyiano ',' Filipino ',' finlandés ',' francés ',' gabonés ',' gambiano ',' georgiano ',' alemán ',' ghanés ',' griego ',' granadino ',' guatemalteco ',' Guinea-Bissauan ',' Guineano ',' guyanés ',' haitiano ',' herzegovino ',' hondureño ',' húngaro ',' I-Kiribati ', 'Islandés', 'indio', 'indonesio', 'iraní', 'iraquí', 'irlandés', 'israelí', 'italiano', 'marfileño', 'jamaiquino', 'japonés', 'jordano', 'kazajo ',' Keniano ',' Kittiano y Nevisiano ',' Kuwaití ',' Kirguís ',' Laosiano ',' Letón ',' Libanés ',' Liberiano ',' Libio ',' Liechtensteiner ',' Lituano ',' Luxemburgués ',' Macedonio ',' malgache ',' malauí ',' malasio ',' maldivan ',' maliense ',' maltés ',' marshalés ',' mauritano ',' mauriciano ',' mexicano ',' micronesia ', 'Moldavo', 'Mónaco', 'Mongol', 'Marroquí', 'Mosotho', 'Motswana', 'Mozambique', 'Namibia', 'Nauru', 'Nepalí', 'Neozelandés', 'Nicaragüense', ' Nigeriano, nigerino, norcoreano, irlandés del norte, noruego, omaní, pakistaní, palauano, panameño, papua nuevo guineano, paraguayo, peruano','Polaco','Portugués', 'Qatarí', 'Rumano', 'Ruso', 'Ruandes', 'Santa Lucía', 'Salvadoreño', 'Samoano', 'San Marino', 'Santo Tomé', 'Saudita', 'Escocés' , 'Senegalés', 'Serbio', 'Seychelles', 'Sierra Leona', 'Singapur', 'Eslovaco', 'Esloveno', 'Islas Salomón', 'Somalí', 'Sudafricano', 'Surcoreano', ' Español ',' de Sri Lanka ',' sudanés ',' surinam ',' suazi ',' sueco ',' suizo ',' sirio ',' taiwanés ',' tayiko ',' tanzano ',' tailandés ',' togolés ',' Tongano ',' trinitense / tobagoniano ',' tunecino ',' turco ',' tuvaluano ',' ugandés ',' ucraniano ',' uruguayo ',' uzbeko ',' venezolano ',' vietnamita ',' galés ',' Yemenita ',' zambiano ',' zimbabuense '
        );

        foreach ($nationals as $n) {
            Nacionalidades::create(['name' => $n]);
        }

        







        //$academia->assignRole('Super Administrador');
    }
}
