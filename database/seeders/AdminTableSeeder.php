<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Academia;
use App\Models\FormaDePago;
use App\Models\Curso;
use App\Models\Nacionalidades;
use App\Models\TipoDeSangre; 
use App\Models\Genero;
use App\Models\Pais;
use App\Models\Estado;
use App\Models\Nivel;
use App\Models\EstadoCivil;
use App\Models\GradoInstruccion;
use App\Models\TipoClase;
use App\Models\TipoAcademia;
use App\Models\Cargo;
use App\Models\TipoDirectiva;
use App\Models\Directiva;
use App\Models\Estructura;
use App\Models\Aula;
use App\Models\Calendario;
use App\Models\Periodo;
use App\Models\Turno;
use App\Models\HoraAcademica;
use App\Models\CargaHoraria;
use App\Models\Materia;
use App\Models\TipoCondicion;
use App\Models\DiaSemana;

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



        $user =new User();
        $user->name = 'Ada';
        $user->lastname = 'Tovar';
        $user->username = 'atovar';
        $user->email = 'atovar@mail.com';
        $user->email_verified_at = now();
        $user->password = bcrypt('admin123');
        $user->status = 1;
        $user->save();

        $user->assignRole('Super Administrador');


        $user =new User();
        $user->name = 'Rosmery';
        $user->lastname = 'Lugo';
        $user->username = 'rlugo';
        $user->email = 'rlugo@mail.com';
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
        $curso->name       = 'Bater??a';
        $curso->status     = 1;
        $curso->save();


        $curso =new TipoCondicion();
        $curso->name       = 'Regular';
        $curso->status     = 1;
        $curso->save();

        $curso =new TipoCondicion();
        $curso->name       = 'Repitiente';
        $curso->status     = 1;
        $curso->save();


        $curso =new TipoCondicion();
        $curso->name       = 'No matriculado';
        $curso->status     = 1;
        $curso->save();



          $nationals = array(
            'Afgano', 'alban??s', 'argelino', 'estadounidense', 'andorrano', 'angole??o', 'antiguo', 'argentino', 'armenio', 'australiano', 'austriaco', 'azerbaiyano', 'bahame??o ',' Bahrein ',' Bangladesh ',' Barbados ',' Barbudanos ',' Batswana ',' Bielorruso ',' Belga ',' Belice??o ',' Benin??s ',' But??n ',' Boliviano ',' Bosnio ', 'Brasile??o', 'Brit??nico', 'Bruneano', 'B??lgaro', 'Burkin??s', 'Birmano', 'Burund??s', 'Camboyano', 'Camer??n', 'Canadiense', 'Caboverdiano', 'Centroafricano', 'Chadiano', 'chileno', 'chino', 'colombiano', 'comorano', 'congole??o', 'costarricense', 'croata', 'cubano', 'chipriota', 'checo', 'dan??s', ' Djibouti ',' dominicano ',' holand??s ',' timorense oriental ',' ecuatoriano ',' egipcio ',' emiriano ',' ecuatoguineano ',' eritreo ',' estonio ',' et??ope ',' fiyiano ',' Filipino ',' finland??s ',' franc??s ',' gabon??s ',' gambiano ',' georgiano ',' alem??n ',' ghan??s ',' griego ',' granadino ',' guatemalteco ',' Guinea-Bissauan ',' Guineano ',' guyan??s ',' haitiano ',' herzegovino ',' hondure??o ',' h??ngaro ',' I-Kiribati ', 'Island??s', 'indio', 'indonesio', 'iran??', 'iraqu??', 'irland??s', 'israel??', 'italiano', 'marfile??o', 'jamaiquino', 'japon??s', 'jordano', 'kazajo ',' Keniano ',' Kittiano y Nevisiano ',' Kuwait?? ',' Kirgu??s ',' Laosiano ',' Let??n ',' Liban??s ',' Liberiano ',' Libio ',' Liechtensteiner ',' Lituano ',' Luxemburgu??s ',' Macedonio ',' malgache ',' malau?? ',' malasio ',' maldivan ',' maliense ',' malt??s ',' marshal??s ',' mauritano ',' mauriciano ',' mexicano ',' micronesia ', 'Moldavo', 'M??naco', 'Mongol', 'Marroqu??', 'Mosotho', 'Motswana', 'Mozambique', 'Namibia', 'Nauru', 'Nepal??', 'Neozeland??s', 'Nicarag??ense', ' Nigeriano, nigerino, norcoreano, irland??s del norte, noruego, oman??, pakistan??, palauano, paname??o, papua nuevo guineano, paraguayo, peruano','Polaco','Portugu??s', 'Qatar??', 'Rumano', 'Ruso', 'Ruandes', 'Santa Luc??a', 'Salvadore??o', 'Samoano', 'San Marino', 'Santo Tom??', 'Saudita', 'Escoc??s' , 'Senegal??s', 'Serbio', 'Seychelles', 'Sierra Leona', 'Singapur', 'Eslovaco', 'Esloveno', 'Islas Salom??n', 'Somal??', 'Sudafricano', 'Surcoreano', ' Espa??ol ',' de Sri Lanka ',' sudan??s ',' surinam ',' suazi ',' sueco ',' suizo ',' sirio ',' taiwan??s ',' tayiko ',' tanzano ',' tailand??s ',' togol??s ',' Tongano ',' trinitense / tobagoniano ',' tunecino ',' turco ',' tuvaluano ',' ugand??s ',' ucraniano ',' uruguayo ',' uzbeko ',' venezolano ',' vietnamita ',' gal??s ',' Yemenita ',' zambiano ',' zimbabuense '
        );

        foreach ($nationals as $n) {
            Nacionalidades::create(['name' => $n]);
        }

         $bgs = ['Sin recordar','O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];
        foreach($bgs as  $bg){
            TipoDeSangre::create(['name' => $bg,'status' => 1]);
        }

        $genero =new Genero();
        $genero->name       = 'Maculino';
        $genero->status     = 1;
        $genero->save();

        $genero =new Genero();
        $genero->name       = 'Femenino';
        $genero->status     = 1;
        $genero->save();

        $pais= new Pais();
        $pais->name ='Afganist??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Albania';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Alemania';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Andorra';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Angola';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Antigua y Barbuda';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Arabia Saudita';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Argelia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Argentina';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Armenia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Australia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Austria';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Azerbaiy??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Bahamas';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Banglad??s';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Barbados';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Bar??in';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'B??lgica';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Belice';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Ben??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Bielorrusia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Birmania';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Bolivia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Bosnia y Herzegovina';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Botsuana';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Brasil';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Brun??i';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Bulgaria';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Burkina Faso';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Burundi';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'But??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Cabo Verde';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Camboya';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Camer??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Canad??';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Catar';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Chad';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Chile';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'China';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Chipre';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Ciudad del Vaticano';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Colombia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Comoras';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Corea del Norte';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Corea del Sur';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Costa de Marfil';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Costa Rica';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Croacia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Cuba';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Dinamarca';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Dominica';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Ecuador';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Egipto';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'El Salvador';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Emiratos ??rabes Unidos';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Eritrea';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Eslovaquia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Eslovenia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Espa??a';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Estados Unidos';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Estonia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Etiop??a';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Filipinas';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Finlandia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Fiyi';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Francia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Gab??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Gambia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Georgia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Ghana';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Granada';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Grecia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Guatemala';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Guyana';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Guinea';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Guinea-Bis??u';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Guinea Ecuatorial';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Hait??';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Honduras';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Hungr??a';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'India';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Indonesia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Irak';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Ir??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Irlanda';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Islandia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Islas Marshall';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Islas Salom??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Israel';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Italia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Jamaica';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Jap??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Jordania';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Kazajist??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Kenia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Kirguist??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Kiribati';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Kuwait';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Laos';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Lesoto';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Letonia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'L??bano';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Liberia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Libia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Liechtenstein';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Lituania';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Luxemburgo';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Macedonia del Norte';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Madagascar';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Malasia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Malaui';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Maldivas';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Mal??';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Malta';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Marruecos';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Mauricio';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Mauritania';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'M??xico';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Micronesia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Moldavia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'M??naco';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Mongolia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Montenegro';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Mozambique';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Namibia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Nauru';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Nepal';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Nicaragua';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'N??ger';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Nigeria';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Noruega';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Nueva Zelanda';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Om??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Pa??ses Bajos';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Pakist??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Palaos';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Panam??';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Pap??a Nueva Guinea';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Paraguay';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Per??';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Polonia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Portugal';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Reino Unido de Gran Breta??a e Irlanda del Norte';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Rep??blica Centroafricana';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Rep??blica Checa';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Rep??blica del Congo';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Rep??blica Democr??tica del Congo';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Rep??blica Dominicana';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Rep??blica Sudafricana';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Ruanda';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Ruman??a';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Rusia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Samoa';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'San Crist??bal y Nieves';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'San Marino';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'San Vicente y las Granadinas';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Santa Luc??a';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Santo Tom?? y Pr??ncipe';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Senegal';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Serbia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Seychelles';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Sierra Leona';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Singapur';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Siria';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Somalia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Sri Lanka';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Suazilandia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Sud??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Sud??n del Sur';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Suecia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Suiza';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Surinam';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Tailandia';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Tanzania';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Tayikist??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Timor Oriental';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Togo';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Tonga';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Trinidad y Tobago';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'T??nez';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Turkmenist??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Turqu??a';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Tuvalu';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Ucrania';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Uganda';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Uruguay';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Uzbekist??n';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Vanuatu';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Venezuela';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Vietnam';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Yemen';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Yibuti';
        $pais->status = 1;
        $pais->save();


        $pais= new Pais();
        $pais->name = 'Zambia';
        $pais->status = 1;
        $pais->save();

        $pais= new Pais();
        $pais->name = 'Zimbabue';
        $pais->status = 1;
        $pais->save();


        $estado = new Estado();
        $estado->name = 'Amazonas';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Anzo??tegui';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Apure';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Aragua';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Barinas';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Bol??var';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Carabobo';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Cojedes';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Delta Amacuro';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Distrito Capital';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Falc??n';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Gu??rico';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Lara';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'M??rida';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Miranda';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Monagas';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Nueva Esparta';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Portuguesa';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Sucre';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'T??chira';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Trujillo';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Vargas';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Yaracuy';
        $estado->status = 1;
        $estado->save();

        $estado = new Estado();
        $estado->name = 'Zulia';
        $estado->status = 1;
        $estado->save();

        $nivel = new Nivel();
        $nivel->name = 'B??sico';
        $nivel->status = 1;
        $nivel->save();

        $nivel = new Nivel();
        $nivel->name = 'Intermedio';
        $nivel->status = 1;
        $nivel->save();

        $nivel = new Nivel();
        $nivel->name = 'Avanzado';
        $nivel->status = 1;
        $nivel->save();



        $estado = new EstadoCivil();
        $estado->name = 'Soltero(a)';
        $estado->status = 1;
        $estado->save();


        $estado = new EstadoCivil();
        $estado->name = 'Casado(a)';
        $estado->status = 1;
        $estado->save();


        $estado = new EstadoCivil();
        $estado->name = 'Vuido(a)';
        $estado->status = 1;
        $estado->save();


        $estado = new EstadoCivil();
        $estado->name = 'Divorciado(a)';
        $estado->status = 1;
        $estado->save();

        $grado = new GradoInstruccion();
        $grado->name = 'Primaria';
        $grado->status = 1;
        $grado->save();

        $grado = new GradoInstruccion();
        $grado->name = 'Bachillerato';
        $grado->status = 1;
        $grado->save();

        $grado = new GradoInstruccion();
        $grado->name = 'TSU';
        $grado->status = 1;
        $grado->save();


        $grado = new GradoInstruccion();
        $grado->name = 'Ingenier??a';
        $grado->status = 1;
        $grado->save();

        $grado = new GradoInstruccion();
        $grado->name = 'Doctorado';
        $grado->status = 1;
        $grado->save();

        $tipoclase = new TipoClase();
        $tipoclase->name = 'Pre-escolar';
        $tipoclase->status = 1;
        $tipoclase->save();

        $tipoclase = new TipoClase();
        $tipoclase->name = 'Primaria';
        $tipoclase->status = 1;
        $tipoclase->save();


        $tipoclase = new TipoClase();
        $tipoclase->name = 'Bachillerato';
        $tipoclase->status = 1;
        $tipoclase->save();


        $tipoclase = new TipoClase();
        $tipoclase->name = 'Cursos';
        $tipoclase->status = 1;
        $tipoclase->save();
        

        $tipoclase = new TipoClase();
        $tipoclase->name = 'Nivel Universitario';
        $tipoclase->status = 1;
        $tipoclase->save();

        $tipoacademia = new TipoAcademia();
        $tipoacademia->name = 'P??blica';
        $tipoacademia->status = 1;
        $tipoacademia->save();
        

        $cargo = new Cargo();
        $cargo->name = 'Director';
        $cargo->status = 1;
        $cargo->save();

        $cargo = new Cargo();
        $cargo->name = 'Subdirector';
        $cargo->status = 1;
        $cargo->save();


        $cargo = new Cargo();
        $cargo->name = 'Secretario';
        $cargo->status = 1;
        $cargo->save();


        $cargo = new Cargo();
        $cargo->name = 'Docente';
        $cargo->status = 1;
        $cargo->save();

        $tipodirectiva = new TipoDirectiva();
        $tipodirectiva->name = 'Junta Directiva ';
        $tipodirectiva->status = 1;
        $tipodirectiva->save();

        $tipodirectiva = new TipoDirectiva();
        $tipodirectiva->name = 'Asociacion de Padres';
        $tipodirectiva->status = 1;
        $tipodirectiva->save();


        $tipodirectiva = new TipoDirectiva();
        $tipodirectiva->name = 'Administrativo  ';
        $tipodirectiva->status = 1;
        $tipodirectiva->save();


        $tipodirectiva = new TipoDirectiva();
        $tipodirectiva->name = 'Otros';
        $tipodirectiva->status = 1;
        $tipodirectiva->save();

        $directiva = new Directiva();
        $directiva->name = 'Director';
        $directiva->cargo_id = 1;
        $directiva->tipo_directiva_id = 1;
        $directiva->documento = '25212293';
        $directiva->status = 1;
        $directiva->save();



        $estructura = new Estructura();
        $estructura->name = 'Colegio';
        $estructura->status = 1;
        $estructura->save();

        $aula = new Aula();
        $aula->name = 'Aula 1';
        $aula->estructura_id = 1;
        $aula->status = 1;
        $aula->save();

        $aula = new Aula();
        $aula->name = 'Aula 2';
        $aula->estructura_id = 1;
        $aula->status = 1;
        $aula->save();

        $aula = new Aula();
        $aula->name = 'Aula 3';
        $aula->estructura_id = 1;
        $aula->status = 1;
        $aula->save();


        $calendario = new Calendario();
        $calendario->nb_calendario = 'Calendario 2021';
        $calendario->aa_escolar = 2021;
        $calendario->status = 1;
        $calendario->fecha_inicio = '05/04/2021';
        $calendario->fecha_fin    = '17/12/2021';
        $calendario->save();


        $calendario = new Calendario();
        $calendario->nb_calendario = 'Calendario 2022';
        $calendario->aa_escolar = '2022';
        $calendario->status = 0;
        $calendario->fecha_inicio = '28/03/2022';
        $calendario->fecha_fin    = '23/12/2022';
        $calendario->save();

        $periodo = new Periodo();
        $periodo->nb_periodo = 'Periodo 2021 I';
        $periodo->nu_periodo = 1;
        $periodo->status = 1;
        $periodo->calendario_id = 1;
        $periodo->fe_inicio = '11/03/2021';
        $periodo->fe_fin    = '01/05/2021';
        $periodo->save();


        $periodo = new Periodo();
        $periodo->nb_periodo = 'Periodo 2021 II';
        $periodo->nu_periodo = 2;
        $periodo->status = 0;
        $periodo->calendario_id = 1;
        $periodo->fe_inicio = '02/05/2021';
        $periodo->fe_fin    = '01/07/2021';
        $periodo->save();


        $periodo = new Periodo();
        $periodo->nb_periodo = 'Periodo 2021 IIi';
        $periodo->nu_periodo = 3;
        $periodo->status = 0;
        $periodo->calendario_id = 1;
        $periodo->fe_inicio = '02/07/2021';
        $periodo->fe_fin    = '01/09/2021';
        $periodo->save();



        $periodo = new Periodo();
        $periodo->nb_periodo = 'Periodo 2021 IV';
        $periodo->nu_periodo = 4;
        $periodo->status = 0;
        $periodo->calendario_id = 1;
        $periodo->fe_inicio = '02/09/2021';
        $periodo->fe_fin    = '01/11/2021';
        $periodo->save();

        $periodo = new Periodo();
        $periodo->nb_periodo = '2022 I';
        $periodo->nu_periodo = 1;
        $periodo->status = 0;
        $periodo->calendario_id = 2;
        $periodo->fe_inicio = '01/01/2022';
        $periodo->fe_fin    = '01/03/2022';
        $periodo->save();


        $periodo = new Periodo();
        $periodo->nb_periodo = '2022 II';
        $periodo->nu_periodo = 2;
        $periodo->status = 0;
        $periodo->calendario_id = 2;
        $periodo->fe_inicio = '02/03/2022';
        $periodo->fe_fin    = '01/06/2022';
        $periodo->save();



        $periodo = new Periodo();
        $periodo->nb_periodo = '2022 III';
        $periodo->nu_periodo = 3;
        $periodo->status = 0;
        $periodo->calendario_id = 2;
        $periodo->fe_inicio = '02/06/2022';
        $periodo->fe_fin    = '01/09/2022';
        $periodo->save();


        $periodo = new Periodo();
        $periodo->nb_periodo = '2022 IV';
        $periodo->nu_periodo = 4;
        $periodo->status = 0;
        $periodo->calendario_id = 2;
        $periodo->fe_inicio = '02/09/2022';
        $periodo->fe_fin    = '01/12/2022';
        $periodo->save();



        $turno = new Turno();
        $turno->name = 'Ma??ana';
        $turno->status = 1;
        $turno->save();

        $turno = new Turno();
        $turno->name = 'Tarde';
        $turno->status = 1;
        $turno->save();


        $turno = new Turno();
        $turno->name = 'Noche';
        $turno->status = 1;
        $turno->save();

        $turno = new Turno();
        $turno->name = 'Sabatino';
        $turno->status = 1;
        $turno->save();

        $periodo = new HoraAcademica();
        $periodo->nb_hora_academica = 'Ma??ana';
        $periodo->nivel_id = 1;
        $periodo->status = 1;
        $periodo->save();

        $periodo = new HoraAcademica();
        $periodo->nb_hora_academica = 'Tarde';
        $periodo->nivel_id = 1;
        $periodo->status = 1;
        $periodo->save();

        $periodo = new HoraAcademica();
        $periodo->nb_hora_academica = 'Noche';
        $periodo->nivel_id = 1;
        $periodo->status = 1;
        $periodo->save();

        $periodo = new HoraAcademica();
        $periodo->nb_hora_academica = 'sabatino';
        $periodo->nivel_id = 1;
        $periodo->status = 1;
        $periodo->save();



        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'DIR. GRUPO';
        $carga->hora_academica_id = 1;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '07:00:00';
        $carga->hh_fin = '07:45:00';
        $carga->turno_id = 1;
        $carga->bo_receso = 1;
        $carga->status = 1;
        $carga->save();


        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 1';
        $carga->hora_academica_id = 1;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '08:00:00';
        $carga->hh_fin = '08:45:00';
        $carga->turno_id = 1;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();


        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 2';
        $carga->hora_academica_id = 1;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '08:45:00';
        $carga->hh_fin = '09:30:00';
        $carga->turno_id = 1;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();

        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'DESCANSO';
        $carga->hora_academica_id = 1;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '09:30:00';
        $carga->hh_fin = '10:15:00';
        $carga->turno_id = 1;
        $carga->bo_receso = 1;
        $carga->status = 1;
        $carga->save();


        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 3';
        $carga->hora_academica_id = 1;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '10:15:00';
        $carga->hh_fin = '11:00:00';
        $carga->turno_id = 1;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();


        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'ALMUERZO';
        $carga->hora_academica_id = 1;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '11:00:00';
        $carga->hh_fin = '11:45:00';
        $carga->turno_id = 1;
        $carga->bo_receso = 1;
        $carga->status = 1;
        $carga->save();



        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 1';
        $carga->hora_academica_id = 2;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '13:00:00';
        $carga->hh_fin = '14:00:00';
        $carga->turno_id = 2;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();


        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 2';
        $carga->hora_academica_id = 2;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '14:00:00';
        $carga->hh_fin = '15:00:00';
        $carga->turno_id = 2;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();


        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'RECESO';
        $carga->hora_academica_id = 2;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '15:00:00';
        $carga->hh_fin = '16:00:00';
        $carga->turno_id = 2;
        $carga->bo_receso = 1;
        $carga->status = 1;
        $carga->save();


        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 3';
        $carga->hora_academica_id = 2;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '16:00:00';
        $carga->hh_fin = '17:00:00';
        $carga->turno_id = 2;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();


        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 1';
        $carga->hora_academica_id = 3;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '17:00:00';
        $carga->hh_fin = '18:00:00';
        $carga->turno_id = 3;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();

        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 2';
        $carga->hora_academica_id = 3;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '18:00:00';
        $carga->hh_fin = '19:00:00';
        $carga->turno_id = 3;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();


        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 1';
        $carga->hora_academica_id =4;
        $carga->nu_orden = 4;
        $carga->hh_inicio = '08:00:00';
        $carga->hh_fin = '09:00:00';
        $carga->turno_id = 4;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();



        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 1';
        $carga->hora_academica_id =4;
        $carga->nu_orden = 4;
        $carga->hh_inicio = '09:00:00';
        $carga->hh_fin = '10:00:00';
        $carga->turno_id = 4;
        $carga->bo_receso = 1;
        $carga->status = 1;
        $carga->save();



        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = 'Hora 2';
        $carga->hora_academica_id = 4;
        $carga->nu_orden = 1;
        $carga->hh_inicio = '10:00:00';
        $carga->hh_fin = '11:00:00';
        $carga->turno_id = 4;
        $carga->bo_receso = 0;
        $carga->status = 1;
        $carga->save();


        $materia = new Materia();
        $materia->nb_materia = 'Idiomas';
        $materia->codigo = 1215632541;
        $materia->status = 1;
        $materia->save();

        $materia = new Materia();
        $materia->nb_materia = 'Matem??ticas';
        $materia->codigo = 1415633541;
        $materia->status = 1;
        $materia->save();

        $materia = new Materia();
        $materia->nb_materia = 'Ciencias sociales';
        $materia->codigo = 1415623541;
        $materia->status = 1;
        $materia->save();

        $materia = new Materia();
        $materia->nb_materia = 'Qu??mica';
        $materia->codigo = 1415633542;
        $materia->status = 1;
        $materia->save();

        $materia = new Materia();
        $materia->nb_materia = 'F??sica';
        $materia->codigo = 1415633545;
        $materia->status = 1;
        $materia->save();


        $dia = new DiaSemana();
        $dia->name = 'Lunes';
        $dia->status = 1;
        $dia->save();

        $dia = new DiaSemana();
        $dia->name = 'Martes';
        $dia->status = 1;
        $dia->save();


        $dia = new DiaSemana();
        $dia->name = 'Mi??rcoles';
        $dia->status = 1;
        $dia->save();


        $dia = new DiaSemana();
        $dia->name = 'Jueves';
        $dia->status = 1;
        $dia->save();


        $dia = new DiaSemana();
        $dia->name = 'Viernes';
        $dia->status = 1;
        $dia->save();


         $dia = new DiaSemana();
        $dia->name = 'S??bado';
        $dia->status = 1;
        $dia->save();


         $dia = new DiaSemana();
        $dia->name = 'Domingo';
        $dia->status = 1;
        $dia->save();














        //$academia->assignRole('Super Administrador');
    }
}
