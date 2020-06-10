<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SignaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Técnico Superior en Desarrollo de Aplicaciones Multiplataforma

        DB::table('signatures')->insert([
            'name' => 'Sistemas informáticos',
            'course_id' => '1'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Bases de Datos',
            'course_id' => '1'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Programación',
            'course_id' => '1'
        ]);


        DB::table('signatures')->insert([
            'name' => 'Lenguajes de marcas y sistemas de gestión de información',
            'course_id' => '1'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Entornos de desarrollo',
            'course_id' => '1'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Formación y orientación laboral',
            'course_id' => '1'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Acceso a datos',
            'course_id' => '2'

        ]);

        DB::table('signatures')->insert([
            'name' => 'Desarrollo de interfaces',
            'course_id' => '2'

        ]);

        DB::table('signatures')->insert([
            'name' => 'Programación multimedia y dispositivos móviles',
            'course_id' => '2'

        ]);

        DB::table('signatures')->insert([
            'name' => 'Programación de servicios y procesos',
            'course_id' => '2'

        ]);

        DB::table('signatures')->insert([
            'name' => 'Sistemas de gestión empresarial',
            'course_id' => '2'

        ]);

        DB::table('signatures')->insert([
            'name' => 'Proyecto de desarrollo de aplicaciones multiplataforma',
            'course_id' => '2'

        ]);


        DB::table('signatures')->insert([
            'name' => 'Empresa e iniciativa emprendedora',
            'course_id' => '2'

        ]);

        DB::table('signatures')->insert([
            'name' => 'Formación en centros de trabajo',
            'course_id' => '2'
        ]);

        //Técnico Superior en Desarrollo de Aplicaciones Web

        DB::table('signatures')->insert([
            'name' => 'Sistemas informáticos',
            'course_id' => '3'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Bases de Datos',
            'course_id' => '3'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Programación',
            'course_id' => '3'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Sistemas informáticos',
            'course_id' => '3'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Lenguajes de marcas y sistemas de gestión de información',
            'course_id' => '3'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Entornos de desarrollo',
            'course_id' => '3'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Formación y orientación laboral',
            'course_id' => '3'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Desarrollo web en entorno cliente',
            'course_id' => '4'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Desarrollo web en entorno servidor',
            'course_id' => '4'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Despliegue de aplicaciones web',
            'course_id' => '4'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Diseño de interfaces WEB',
            'course_id' => '4'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Proyecto de desarrollo de aplicaciones web',
            'course_id' => '4'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Empresa e iniciativa emprendedora',
            'course_id' => '4'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Formación en centros de trabajo',
            'course_id' => '4'
        ]);
        
        //Técnico Superior en Administración de Sistemas Informáticos en Red

        DB::table('signatures')->insert([
            'name' => 'aaaImplantación de sistemas operativos',
            'course_id' => '5'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Planificación y administración de redes',
            'course_id' => '5'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Fundamentos de hardware',
            'course_id' => '5'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Gestión de bases de datos',
            'course_id' => '5'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Lenguajes de marcas y sistemas de gestión de información',
            'course_id' => '5'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Administración de sistemas operativos',
            'course_id' => '5'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Formación y orientación laboral',
            'course_id' => '5'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Servicios de red e Internet',
            'course_id' => '6'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Implantación de aplicaciones web',
            'course_id' => '6'
        ]);
        DB::table('signatures')->insert([
            'name' => 'Administración de sistemas gestores de bases de datos',
            'course_id' => '6'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Seguridad y alta disponibilidad',
            'course_id' => '6'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Proyecto de administración de sistemas informáticos en red',
            'course_id' => '6'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Empresa e iniciativa emprendedora',
            'course_id' => '6'
        ]);

        DB::table('signatures')->insert([
            'name' => 'Formación en centros de trabajo',
            'course_id' => '6'
        ]);
    }
}
