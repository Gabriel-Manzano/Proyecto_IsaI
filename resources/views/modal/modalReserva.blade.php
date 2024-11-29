<!-- Modal de Reserva -->
<div class="modal fade" id="reservarModal" tabindex="-1" aria-labelledby="reservarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="reservarModalLabel">Formulario de Reserva de Hotel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('reservar') }}" method="POST">
          @csrf
          <!-- Información Personal del Huésped -->
          <h5>Información Personal del Huésped</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="nombre" class="form-label">Nombre Completo</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="col-md-6">
              <label for="correo" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="telefono" class="form-label">Número de Teléfono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="col-md-6">
              <label for="documento" class="form-label">Documento de Identidad</label>
              <input type="text" class="form-control" id="documento" name="documento" required>
            </div>
          </div>

          <!-- Información de la Reserva -->
          <h5 class="mt-4">Información de la Reserva</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="fecha_llegada" class="form-label">Fecha de Llegada</label>
              <input type="date" class="form-control" id="fecha_llegada" name="fecha_llegada" required>
            </div>
            <div class="col-md-6">
              <label for="fecha_salida" class="form-label">Fecha de Salida</label>
              <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="num_personas" class="form-label">Número de Personas</label>
              <input type="number" class="form-control" id="num_personas" name="num_personas" required>
            </div>
            <div class="col-md-6">
              <label for="num_adultos" class="form-label">Número de Adultos</label>
              <input type="number" class="form-control" id="num_adultos" name="num_adultos" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="num_ninos" class="form-label">Número de Niños (si aplica)</label>
              <input type="number" class="form-control" id="num_ninos" name="num_ninos">
            </div>
            <div class="col-md-6">
              <label for="edad_ninos" class="form-label">Edad de los Niños</label>
              <input type="text" class="form-control" id="edad_ninos" name="edad_ninos">
            </div>
          </div>

          <!-- Preferencias de la Habitación -->
          <h5 class="mt-4">Preferencias de la Habitación</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="tipo_habitacion" class="form-label">Tipo de Habitación</label>
              <select class="form-select" id="tipo_habitacion" name="tipo_habitacion" required>
                <option value="individual">Individual</option>
                <option value="doble">Doble</option>
                <option value="suite">Suite</option>
                <option value="familiar">Habitación Familiar</option>
                <option value="vista">Habitación con vistas</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="preferencia_cama" class="form-label">Preferencias de Cama</label>
              <select class="form-select" id="preferencia_cama" name="preferencia_cama">
                <option value="matrimonial">Cama Matrimonial</option>
                <option value="individual">Camas Individuales</option>
                <option value="extra">Cama Extra</option>
              </select>
            </div>
          </div>

          <!-- Servicios Adicionales -->
          <h5 class="mt-4">Servicios Adicionales</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="necesidades_especiales" class="form-label">Necesidades Especiales</label>
              <select class="form-select" id="necesidades_especiales" name="necesidades_especiales">
                <option value="accesibilidad">Accesibilidad para personas con discapacidad</option>
                <option value="cama_adicional">Cama adicional</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="servicios_especiales" class="form-label">Solicitar Servicios Especiales</label>
              <select class="form-select" id="servicios_especiales" name="servicios_especiales">
                <option value="traslado">Traslado al aeropuerto</option>
                <option value="desayuno">Servicio de desayuno</option>
                <option value="spa">Spa, gimnasio</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="preferencia_ubicacion" class="form-label">Preferencia de Piso o Ubicación</label>
              <select class="form-select" id="preferencia_ubicacion" name="preferencia_ubicacion">
                <option value="planta_baja">Planta baja</option>
                <option value="vista_mar">Vista al mar/montaña</option>
                <option value="habitacion_tranquila">Habitación tranquila</option>
              </select>
            </div>
          </div>

          <!-- Métodos de Pago -->
          <h5 class="mt-4">Métodos de Pago</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="tarjeta_credito" class="form-label">Número de Tarjeta de Crédito/Débito</label>
              <input type="text" class="form-control" id="tarjeta_credito" name="tarjeta_credito">
            </div>
            <div class="col-md-6">
              <label for="fecha_expiracion" class="form-label">Fecha de Expiración</label>
              <input type="month" class="form-control" id="fecha_expiracion" name="fecha_expiracion">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="codigo_seguridad" class="form-label">Código de Seguridad</label>
              <input type="text" class="form-control" id="codigo_seguridad" name="codigo_seguridad">
            </div>
            <div class="col-md-6">
              <label for="forma_pago" class="form-label">Forma de Pago Preferida</label>
              <select class="form-select" id="forma_pago" name="forma_pago">
                <option value="tarjeta">Tarjeta</option>
                <option value="transferencia">Transferencia Bancaria</option>
                <option value="efectivo">Pago en Efectivo</option>
              </select>
            </div>
          </div>

          <!-- Botón de envío -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Confirmar Reserva</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
