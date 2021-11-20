<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionTableSeeder extends Seeder
{
   
       private $permissions ,$profesor_permissions ,$lite_permissions, $platinium_permissions, $premium_permissions;

 
    public function __construct()
    {
        /*
        set the default permissions
        */
        $this->permissions =  [
                                /* Usuarios */
                                'VerUsuario',
                                'RegistrarUsuario',
                                'EditarUsuario',
                                'EliminarUsuario',

                                /* Organismos */
                                'VerOrganismo',
                                'RegistrarOrganismo',
                                'EditarOrganismo',
                                'EliminarOrganismo',
                                
                                
                                /* Asignar permisos */
                                'AsignarPermisos',                              
                               
                               
                                'VerPermisos',
                                'CrearPermisos',
                                'EditarPermisos',
                                'EliminarPermisos',
                                
                                /* Logins */
                                'VerLogins',
                                'VerLogSistema',

                                /* Roles */
                                'VerRole',
                                'RegistrarRole',
                                'EditarRole',
                                'EliminarRole',
    

                                /* Institutos */
                                'VerInstituto',
                                'RegistrarInstituto',
                                'EditarInstituto',
                                'EliminarInstituto',

                                /* Forma de pago */
                                'VerFormaDePago',
                                'RegistrarFormaDePago',
                                'EditarFormaDePago',
                                'EliminarFormaDePago',

                                /* Cursos */
                                'VerCurso',
                                'RegistrarCurso',
                                'EditarCurso',
                                'EliminarCurso',

                                /* Nacionalidads */
                                'VerNacionalidad',
                                'RegistrarNacionalidad',
                                'EditarNacionalidad',
                                'EliminarNacionalidad',

                                /* Tipo de Sangre */

                                'VerTipoDeSangre',
                                'RegistrarTipoDeSangre',
                                'EditarTipoDeSangre',
                                'EliminarTipoDeSangre',

                                /* Generos */
                                'VerGenero',
                                'RegistrarGenero',
                                'EditarGenero',
                                'EliminarGenero',

                                 /* Paiss */
                                'VerPais',
                                'RegistrarPais',
                                'EditarPais',
                                'EliminarPais',

                                 /* Estadoss */
                                'VerEstados',
                                'RegistrarEstados',
                                'EditarEstados',
                                'EliminarEstados',

                                 /* Nivels */
                                'VerNivel',
                                'RegistrarNivel',
                                'EditarNivel',
                                'EliminarNivel',

                                 /* EstadoCivils */
                                'VerEstadoCivil',
                                'RegistrarEstadoCivil',
                                'EditarEstadoCivil',
                                'EliminarEstadoCivil',

                                 /* Grado de Instruccion */
                                'VerGradoInstruccion',
                                'RegistrarGradoInstruccion',
                                'EditarGradoInstruccion',
                                'EliminarGradoInstruccion',

                                /* Comentarios*/
                                'VerComentario',
                                'RegistrarComentario',
                                'EditarComentario',
                                'EliminarComentario',


                                /* Nivel Academico*/
                                'VerNivelAcademico',
                                'RegistrarNivelAcademico',
                                'EditarNivelAcademico',
                                'EliminarNivelAcademico',



                              ];



        $this->profesor_permissions = [
                                    
                                   
                                   

                                    ];
    }

    public function run()
      {
          // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        foreach ($this->permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }

        // create the admin role and set all default permissions
        $role = Role::create(['name' => 'Super Administrador']);
        $role->givePermissionTo($this->permissions);

        // create the user role and set all user permissions
        $role = Role::create(['name' => 'Profesor']);
        $role->givePermissionTo($this->profesor_permissions);

    }
}
