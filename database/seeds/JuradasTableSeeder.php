<?php

use Illuminate\Database\Seeder;

class JuradasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('juradas')->insert(array(
            array( // row #0
                'id' => 21,
                'nro_dj' => 1835,
                'arti_id' => 39,
                'desc_corta' => '1835 Arriendos',
                'fe_vence' => '2019-03-25',
                'descripcion' => 'Declaración Jurada anual sobre bienes raíces arrendados.',
                'certificado' => 'NO',
                'fe_certifica' => '2019-04-30',
                'Instruccion' => '_Instruccion1550669606.pdf',
                'Formulario' => '_Formulario1550669606.pdf',
                'created_at' => '2019-02-20 11:33:26',
                'updated_at' => '2019-02-21 13:05:03',
            ),
            array( // row #1
                'id' => 25,
                'nro_dj' => 1837,
                'arti_id' => 51,
                'desc_corta' => '1837 Pagos Prov. a disposición',
                'fe_vence' => '2019-05-16',
                'descripcion' => 'Declaración Jurada Anual sobre Créditos y PPM puestos a disposición de los Socios',
                'certificado' => '18',
                'fe_certifica' => '2019-04-30',
                'Instruccion' => '_Instruccion1550780018.pdf',
                'Formulario' => '_Formulario1550780018.pdf',
                'created_at' => '2019-02-21 18:13:38',
                'updated_at' => '2019-02-21 18:13:38',
            ),
            array( // row #2
                'id' => 26,
                'nro_dj' => 1847,
                'arti_id' => 47,
                'desc_corta' => '1847 Balance y Capita P.Tribu',
                'fe_vence' => '2019-05-07',
                'descripcion' => 'Declaración Jurada sobre balance de 8 columnas y otros antecedentes',
                'certificado' => 'NO',
                'fe_certifica' => '2019-04-30',
                'Instruccion' => '_Instruccion1551450179.pdf',
                'Formulario' => '_Formulario1551450179.pdf',
                'created_at' => '2019-03-01 12:22:59',
                'updated_at' => '2019-03-01 12:22:59',
            ),
            array( // row #3
                'id' => 24,
                'nro_dj' => 1879,
                'arti_id' => 0,
                'desc_corta' => '1879 Honorarios',
                'fe_vence' => '2019-03-25',
                'descripcion' => 'Declaración Jurada anual sobre retenciones efectuadas conforme a los arts. 42° N° 2 y 48° de la LIR.',
                'certificado' => '1',
                'fe_certifica' => '2019-03-14',
                'Instruccion' => '_Instruccion1550759559.pdf',
                'Formulario' => '_Formulario1550759559.pdf',
                'created_at' => '2019-02-21 12:32:39',
                'updated_at' => '2019-03-18 14:28:13',
            ),
            array( // row #4
                'id' => 23,
                'nro_dj' => 1887,
                'arti_id' => 37,
                'desc_corta' => '1887 Sueldos',
                'fe_vence' => '2019-03-19',
                'descripcion' => 'Declaración Jurada anual sobre rentas del art. 42 Nº 1 (sueldos), otros componentes de la remuneración y retenciones del impuesto único de segunda categoría de la Ley de la Renta.',
                'certificado' => '6',
                'fe_certifica' => '2019-03-14',
                'Instruccion' => '_Instruccion1550693693.pdf',
                'Formulario' => '_Formulario1550693693.pdf',
                'created_at' => '2019-02-20 18:14:53',
                'updated_at' => '2019-02-21 18:49:10',
            ),
            array( // row #5
                'id' => 33,
                'nro_dj' => 1909,
                'arti_id' => 41,
                'desc_corta' => '1909 Gastos Rechazados',
                'fe_vence' => '2019-03-25',
                'descripcion' => 'Declaración Jurada Anual sobre Desembolsos y Otras Partidas o Cantidades a que se refiere el inciso tercero del artículo  21 de la LIR',
                'certificado' => '38',
                'fe_certifica' => '2019-03-21',
                'Instruccion' => '_Instruccion1555103179.pdf',
                'Formulario' => '_Formulario1555103179.pdf',
                'created_at' => '2019-04-12 18:06:19',
                'updated_at' => '2019-04-12 18:06:19',
            ),
            array( // row #6
                'id' => 32,
                'nro_dj' => 1913,
                'arti_id' => 58,
                'desc_corta' => '1913 Caracterización Tributari',
                'fe_vence' => '2019-05-01',
                'descripcion' => 'Declaración Jurada Anual de Caracterización Tributaria Global',
                'certificado' => 'NO',
                'fe_certifica' => '2019-03-18',
                'Instruccion' => '_Instruccion1552926061.pdf',
                'Formulario' => '_Formulario1552926061.pdf',
                'created_at' => '2019-03-18 14:21:01',
                'updated_at' => '2019-03-18 14:21:01',
            ),
            array( // row #7
                'id' => 27,
                'nro_dj' => 1923,
                'arti_id' => 42,
                'desc_corta' => '1923 Renta liquida imp. 14A',
                'fe_vence' => '2019-03-29',
                'descripcion' => 'Renta Líquida Imponible, Renta a atribuir Renta Atribuida a los propietarios, titulares, socios...',
                'certificado' => 'NO',
                'fe_certifica' => '2019-03-18',
                'Instruccion' => '_Instruccion1552920855.pdf',
                'Formulario' => '_Formulario1552920855.pdf',
                'created_at' => '2019-03-18 12:54:15',
                'updated_at' => '2019-03-18 12:54:15',
            ),
            array( // row #8
                'id' => 30,
                'nro_dj' => 1926,
                'arti_id' => 48,
                'desc_corta' => '1926 Renta Liquida impo. 14 B',
                'fe_vence' => '2019-05-07',
                'descripcion' => 'Declaración Jurada anual sobre Base Imponible de Primera Categoría y Datos Contables Balance.',
                'certificado' => 'NO',
                'fe_certifica' => '2019-03-18',
                'Instruccion' => '_Instruccion1552921993.pdf',
                'Formulario' => '_Formulario1552921993.pdf',
                'created_at' => '2019-03-18 13:13:13',
                'updated_at' => '2019-03-18 13:13:13',
            ),
            array( // row #9
                'id' => 22,
                'nro_dj' => 1932,
                'arti_id' => 52,
                'desc_corta' => '1932 Rentas obtenidas por 3ºro',
                'fe_vence' => '2019-03-25',
                'descripcion' => 'Declaración Jurada anual sobre rentas obtenidas por terceros.',
                'certificado' => 'NO',
                'fe_certifica' => '2019-04-30',
                'Instruccion' => '_Instruccion1550689718.pdf',
                'Formulario' => '_Formulario1550689719.pdf',
                'created_at' => '2019-02-20 17:08:39',
                'updated_at' => '2019-02-21 13:12:33',
            ),
            array( // row #10
                'id' => 28,
                'nro_dj' => 1938,
                'arti_id' => 49,
                'desc_corta' => '1938 Registro renta Empres 14A',
                'fe_vence' => '2019-05-14',
                'descripcion' => 'Movimientos y saldos de los registros de rentas empresariales del Régimen de Renta Atribuida a que se refiere la letra A) del artículo 14 de la Ley sobre Impuesto a la Renta.',
                'certificado' => 'NO',
                'fe_certifica' => '2019-03-18',
                'Instruccion' => '_Instruccion1552921506.pdf',
                'Formulario' => '_Formulario1552921506.pdf',
                'created_at' => '2019-03-18 13:05:06',
                'updated_at' => '2019-03-18 13:05:06',
            ),
            array( // row #11
                'id' => 31,
                'nro_dj' => 1939,
                'arti_id' => 50,
                'desc_corta' => '1939 Registro renta Empres 14B',
                'fe_vence' => '2019-05-14',
                'descripcion' => 'Movimientos y saldos de los registros de rentas empresariales del régimen de imputación parcial de crédito a que se refiere la letra b) del artículo 14 de la Ley sobre Impuesto a la Renta, y de los registros establecidos en el número 2) del artículo 81 de la Ley N° 20.712',
                'certificado' => 'NO',
                'fe_certifica' => '2019-03-18',
                'Instruccion' => '_Instruccion1552922546.pdf',
                'Formulario' => '_Formulario1552922546.pdf',
                'created_at' => '2019-03-18 13:22:26',
                'updated_at' => '2019-03-18 13:22:26',
            ),
            array( // row #12
                'id' => 29,
                'nro_dj' => 1940,
                'arti_id' => 44,
                'desc_corta' => '1940 Retiros o dividendos 14A',
                'fe_vence' => '2019-03-29',
                'descripcion' => 'Retiros, remesas y/o dividendos distribuidos y créditos correspondientes efectuados por contribuyentes sujetos al régimen de la letra A) del artículo 14 de la Ley sobre Impuesto a la Renta y sobre saldo de retiros en exceso pendiente de imputación.',
                'certificado' => 'NO',
                'fe_certifica' => '2019-03-18',
                'Instruccion' => '_Instruccion1552921633.pdf',
                'Formulario' => '_Formulario1552921633.pdf',
                'created_at' => '2019-03-18 13:07:13',
                'updated_at' => '2019-03-18 13:07:13',
            ),
            array( // row #13
                'id' => 20,
                'nro_dj' => 1941,
                'arti_id' => 38,
                'desc_corta' => '1941 Retiros o dividendos 14 B',
                'fe_vence' => '2019-03-21',
                'descripcion' => 'Declaración Jurada anual sobre retiros, remesas y/o dividendos distribuidos y créditos correspondientes, efectuados por contribuyentes sujetos al régimen de la letra B) del artículo 14 de la LIR,  y sobre saldo de retiros en exceso pendientes de imputación.',
                'certificado' => '54',
                'fe_certifica' => '2019-03-07',
                'Instruccion' => '_Instruccion1550613739.pdf',
                'Formulario' => '_Formulario1550613739.pdf',
                'created_at' => '2019-02-19 20:02:19',
                'updated_at' => '2019-02-19 20:02:19',
            ),
         ));
    }
}
