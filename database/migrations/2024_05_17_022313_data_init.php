<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        DB::table('service_types')->insert([
            ['name' => 'Movil', 'number' => 31331229],
            ['name' => 'Hogar', 'number' => 60175820],
        ]);


        DB::table('main_menus')->insert([
            ['name' => 'Conoce tu Plan', 'description' => 'Solicita mas información sobre tu plan movil', 'service_type_id' => 1],
            ['name' => 'Facturacion', 'description' => 'Brinda información sobre facturación movil', 'service_type_id' => 1],
            ['name' => 'Ofertas', 'description' => 'Se te mostrarán las diferentes ofertas disponibles para movil', 'service_type_id' => 1],
            ['name' => 'Soporte Técnico', 'description' => 'Solicitar ayuda de un experto en soporte tecnico para movil', 'service_type_id' => 1],
            ['name' => 'Atención al Cliente', 'description' => 'Hablar con personal de atención al cliente de movil', 'service_type_id' => 1],

            ['name' => 'Conoce tu Plan', 'description' => 'Solicita mas información sobre tu plan hogar', 'service_type_id' => 2],
            ['name' => 'Facturacion', 'description' => 'Brinda información sobre facturación hogar', 'service_type_id' => 2],
            ['name' => 'Ofertas', 'description' => 'Se te mostrarán las diferentes ofertas disponibles para hogar', 'service_type_id' => 2],
            ['name' => 'Soporte Técnico', 'description' => 'Solicitar ayuda de un experto en soporte tecnico para hogar', 'service_type_id' => 2],
            ['name' => 'Atención al Cliente', 'description' => 'Hablar con personal de atención al cliente de hogar', 'service_type_id' => 2],

        ]);


        DB::table('details')->insert([
            ['name' => 'Información', 'description' => 'Su fecha de facturacion es el 15 de cada mes por un valor de $29.900', 'answer' => '', 'redirect' => '', 'main_menus_id' => 1],
            ['name' => 'Cambiar direccion', 'description' => 'Su dirección se cambiará a calle 68 # 0 - 25', 'answer' => 'Se confirma el cambio de su dirección', 'redirect' => '', 'main_menus_id' => 1],

            ['name' => 'Información de la factura', 'description' => 'Valor a Pagar', 'answer' => 'Tendrás que pagar $29.900', 'redirect' => '', 'main_menus_id' => 2],
            ['name' => 'Información de la factura', 'description' => 'Proximo Corte', 'answer' => 'tu fecha de corte es el 15 de cada mes', 'redirect' => '', 'main_menus_id' => 2],
            ['name' => 'Información de la factura', 'description' => 'Referencia de Pago', 'answer' => 'tu numero de pago es: 123456789', 'redirect' => '', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Daviplata', 'redirect' => 'https://www.daviplata.com/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Servibanca', 'redirect' => 'https://www.servibanca.com.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Rappi', 'redirect' => 'https://www.rappi.com.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Nequi', 'redirect' => 'https://www.nequi.com.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Itaú', 'redirect' => 'https://banco.itau.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'Colpatria', 'redirect' => 'https://www.scotiabankcolpatria.com/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'Banco Bogotá', 'redirect' => 'https://www.bancodebogota.com/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'Bancolombia', 'redirect' => 'https://www.bancolombia.com/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'Davivienda', 'redirect' => 'https://www.davivienda.com/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'BBVA', 'redirect' => 'https://www.bbva.com.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Corresponsales', 'answer' => 'Efecty', 'redirect' => 'https://www.efecty.com.co/web/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Corresponsales', 'answer' => 'Movil Red', 'redirect' => 'https://www.moviired.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Corresponsales', 'answer' => 'Giros y Finanzas', 'redirect' => 'https://www.bancounion.com/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Corresponsales', 'answer' => 'Paga Todo', 'redirect' => 'https://www.pagatodo.com.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'Exito', 'redirect' => 'https://www.exito.com/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'Jumbo', 'redirect' => 'https://www.tiendasjumbo.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'Metro', 'redirect' => 'https://www.tiendasmetro.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'SurtiMax', 'redirect' => 'https://www.surtimax.com.co/', 'main_menus_id' => 2],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'Carulla', 'redirect' => 'https://www.carulla.com/', 'main_menus_id' => 2],
            ['name' => 'Pagos no registrados', 'description' => 'A continuación se le muestran los ultimos pagos realizados', 'answer' => 'Fecha de pago / Cantidad / Producto', 'redirect' => '', 'main_menus_id' => 2],
            ['name' => 'Consulte otro numero', 'description' => 'Ingrese el nuevo numero', 'answer' => 'Se le redigirá al comienzo para la consulta de su nuevo numero', 'redirect' => '', 'main_menus_id' => 2],

            ['name' => 'Todo Incluido', 'description' => 'Promocion de todo incluido por $25.000', 'answer' => 'Se da la activación de la oferta seleccionada', 'redirect' => '', 'main_menus_id' => 3],
            ['name' => 'Minutos', 'description' => 'Promocion de 10000 minutos por $10.000', 'answer' => 'Se da la activación de la oferta seleccionada', 'redirect' => '', 'main_menus_id' => 3],
            ['name' => 'Datos', 'description' => 'Promocion de 10 Gb de Datos por $15.000', 'answer' => 'Se da la activación de la oferta seleccionada', 'redirect' => '', 'main_menus_id' => 3],

            ['name' => 'Señal', 'description' => 'Direcciona a un colsultor', 'answer' => '', 'redirect' => '', 'main_menus_id' => 4],
            ['name' => 'Datos', 'description' => 'Direcciona a un colsultor', 'answer' => '', 'redirect' => '', 'main_menus_id' => 4],

            ['name' => 'Direcciona a un Consultor', 'description' => '', 'answer' => '', 'redirect' => '', 'main_menus_id' => 5],



            ['name' => 'Información', 'description' => 'Su fecha de facturacion es el 15 de cada mes por un valor de $59.900', 'answer' => '', 'redirect' => '', 'main_menus_id' => 6],
            ['name' => 'Cambiar direccion', 'description' => 'Su dirección se cambiará a calle 68 # 0 - 25', 'answer' => 'Se confirma el cambio de su dirección', 'redirect' => '', 'main_menus_id' => 6],

            ['name' => 'Información de la factura', 'description' => 'Valor a Pagar', 'answer' => 'Tendrás que pagar $29.900', 'redirect' => '', 'main_menus_id' => 7],
            ['name' => 'Información de la factura', 'description' => 'Proximo Corte', 'answer' => 'tu fecha de corte es el 15 de cada mes', 'redirect' => '', 'main_menus_id' => 7],
            ['name' => 'Información de la factura', 'description' => 'Referencia de Pago', 'answer' => 'tu numero de pago es: 123456789', 'redirect' => '', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Daviplata', 'redirect' => 'https://www.daviplata.com/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Servibanca', 'redirect' => 'https://www.servibanca.com.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Rappi', 'redirect' => 'https://www.rappi.com.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Nequi', 'redirect' => 'https://www.nequi.com.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Medios electrónicos', 'answer' => 'Itaú', 'redirect' => 'https://banco.itau.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'Colpatria', 'redirect' => 'https://www.scotiabankcolpatria.com/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'Banco Bogotá', 'redirect' => 'https://www.bancodebogota.com/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'Bancolombia', 'redirect' => 'https://www.bancolombia.com/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'Davivienda', 'redirect' => 'https://www.davivienda.com/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Bancos', 'answer' => 'BBVA', 'redirect' => 'https://www.bbva.com.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Corresponsales', 'answer' => 'Efecty', 'redirect' => 'https://www.efecty.com.co/web/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Corresponsales', 'answer' => 'Movil Red', 'redirect' => 'https://www.moviired.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Corresponsales', 'answer' => 'Giros y Finanzas', 'redirect' => 'https://www.bancounion.com/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Corresponsales', 'answer' => 'Paga Todo', 'redirect' => 'https://www.pagatodo.com.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'Exito', 'redirect' => 'https://www.exito.com/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'Jumbo', 'redirect' => 'https://www.tiendasjumbo.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'Metro', 'redirect' => 'https://www.tiendasmetro.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'SurtiMax', 'redirect' => 'https://www.surtimax.com.co/', 'main_menus_id' => 7],
            ['name' => 'Punto de pago', 'description' => 'Almacenes de Cadena', 'answer' => 'Carulla', 'redirect' => 'https://www.carulla.com/', 'main_menus_id' => 7],
            ['name' => 'Pagos no registrados', 'description' => 'A continuación se le muestran los ultimos pagos realizados', 'answer' => 'Fecha de pago / Cantidad / Producto', 'redirect' => '', 'main_menus_id' => 7],
            ['name' => 'Consulte otro numero', 'description' => 'Ingrese el nuevo numero', 'answer' => 'Se le redigirá al comienzo para la consulta de su nuevo numero', 'redirect' => '', 'main_menus_id' => 7],

            ['name' => 'Todo Incluido', 'description' => 'Promocion de todo incluido por $55.000', 'answer' => 'Se da la activación de la oferta seleccionada', 'redirect' => '', 'main_menus_id' => 8],
            ['name' => 'Minutos', 'description' => 'Promocion de 10000 minutos por $30.000', 'answer' => 'Se da la activación de la oferta seleccionada', 'redirect' => '', 'main_menus_id' => 8],
            ['name' => 'Datos', 'description' => 'Promocion de 10 Gb/s de Datos por $65.000', 'answer' => 'Se da la activación de la oferta seleccionada', 'redirect' => '', 'main_menus_id' => 8],

            ['name' => 'Señal', 'description' => 'Direcciona a un consultor', 'answer' => '', 'redirect' => '', 'main_menus_id' => 9],
            ['name' => 'Datos', 'description' => 'Direcciona a un consultor', 'answer' => '', 'redirect' => '', 'main_menus_id' => 9],

            ['name' => 'Direcciona a un Consultor', 'description' => '', 'answer' => '', 'redirect' => '', 'main_menus_id' => 10],






        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar las inserciones si es necesario
        DB::table('details')->truncate();
        DB::table('main_menus')->truncate();
        DB::table('service_types')->truncate();
    }
};
