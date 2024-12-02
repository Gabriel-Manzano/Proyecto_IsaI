<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CondicionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar registros con los datos correspondientes a las nuevas columnas
        DB::table('condiciones')->insert([
            [
                'condiciones' => 'Acceso y Uso del Servicio: Los servicios de reservas de hoteles y vuelos están destinados únicamente para fines personales y no comerciales. Usted se compromete a utilizar los servicios de manera responsable y a no realizar ninguna acción que pueda dañar, deshabilitar, sobrecargar o afectar el funcionamiento del sitio web.',
            ],
            [
                'condiciones' => 'Reservas de Hoteles y Vuelos:Las reservas de hoteles y vuelos son gestionadas por proveedores terceros, y por lo tanto, las tarifas, disponibilidad, políticas de cancelación y otros términos pueden variar según el proveedor. Al realizar una reserva, usted acepta los términos y condiciones específicos de cada proveedor.',
            ],
            [
                'condiciones' => 'Precios y Pagos: Los precios indicados en el sitio web son los aplicables en el momento de la reserva y pueden estar sujetos a cambios sin previo aviso. Cualquier pago realizado a través de la plataforma debe ser efectuado con los métodos de pago habilitados en el sitio. Las transacciones están sujetas a las políticas de privacidad y seguridad correspondientes.',
            ],
            [
                'condiciones' => ' Política de Cancelación: Las políticas de cancelación pueden variar según el proveedor del servicio de hotel o vuelo. Se recomienda revisar las condiciones de cancelación antes de confirmar cualquier reserva. En caso de cancelación, podrían aplicarse cargos adicionales según la política de cada proveedor.',
            ],
            [
                'condiciones' => ' Responsabilidad: No nos responsabilizamos de cualquier inconveniente, pérdida, daño o perjuicio derivado de la utilización de los servicios de terceros proveedores. El sitio web actúa únicamente como intermediario para la reserva de servicios y no se hace responsable de la calidad, puntualidad o cumplimiento de los servicios ofrecidos.',
            ],
            [
                'condiciones' => 'Modificaciones: Nos reservamos el derecho de modificar o actualizar estas condiciones de uso en cualquier momento, por lo que le recomendamos revisarlas periódicamente. Las modificaciones entrarán en vigencia tan pronto como sean publicadas en el sitio web.',
            ]
        ]);
    }
}
