<h1 class="text-center pt-5 my-5 fs-1">Introduzca sus datos</h1>
<div class="container  d-flex justify-content-center">
    <div class="row col-lg-6 col-xs-12">
        <form action="index.php?sec=oka" method="POST">
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="nombre">Nombre(s) *</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" required />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="apellido">Apellido(s) *</label>
                        <input type="text" id="apellido" class="form-control" name="apellido" required />
                    </div>
                </div>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email *</label>
                <input type="email" id="email" name="email" class="form-control" required />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="direccion">Dirección *</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required />
                <div class="mt-2">
                    <input type="checkbox" name="direccionCheck" value="1" class="form-check-input">
                    <label class="form-label mx-2" id="direccionCheck" for="direccionCheck">Misma dirección de facturación</label>
                </div>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="celular">Número de celular</label>
                <input type="number" id="celular" name="celular" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="adicional">Información adicional para el envío</label>
                <textarea class="form-control" id="adicional" name="infoAdicional" rows="4"></textarea>
            </div>

            <p class="d-block">(*) Campo obligatorio</p>
            <div class="mt-2">
                <input type="checkbox" name="terminos" value="2" class="form-check-input">
                <label class="form-label mx-2" for="termino">Acepto las <a href="#" class="underline">politicas de privacidad</a> de datos</label>
            </div>

            <button type="submit" class="btn btn-oka fw-bold btn-block w-100 mb-4 text-uppercase">Guardar</button>
        </form>
    </div>
</div>