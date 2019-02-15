<div class="card mb-3 card-style-1">
  <div class="card-body pb-1 pt-1">
    <div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="form-group form-group-style-1">
            <label for="minicipio" class="mr-sm-2">Municipio</label>          
            <select name="minicipio" class="form-control" id="slt_municipio_mapa">
              <option value="0">TODOS</option>
              <?php foreach ($municipios as $municipio): ?>

                <option value="<?=$municipio['id_municipio']?>"><?=$municipio['municipio']?></option>

              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="form-group form-group-style-1">
            <label for="nivel">Nivel</label>          
            <select name="nivel" class="form-control" id="slt_nivel_mapa">
              <option value="0">TODOS</option>
              <?php foreach ($niveles as $nivel): ?>

                <option value="<?=$nivel['id_nivel']?>"><?=$nivel['nivel']?></option>

              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="form-group form-group-style-1">
            <label for="sostenimiento">Sostenimiento</label>            
            <select name="sostenimiento" class="form-control" id="slt_sostenimiento_mapa">
              <option value="0">TODOS</option>
              <?php foreach ($sostenimientos as $sostenimiento): ?>

                <option value="<?=$sostenimiento['id_sostenimiento']?>"><?=$sostenimiento['sostenimiento']?></option>

              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
      <div class="row mb-15">
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="form-group form-group-style-1">
            <label for="n_escuela">Nombre de la escuela (opcional)</label>            <input type="text" name="n_escuela" value="" class="form-control" id="txt_nombre_escuela">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="form-group form-group-style-1">
           <label for="cct">Clave Centro de Trabajo (opcional)</label>            <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text fw800" id="btnGroupAddon">05</div>
            </div>
            <input type="text" name="cct" value="" class="form-control fw800" id="txt_cct_escuela">
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-4 mt-2">
        <label></label>            <button class="btn btn-success btn-block btn-style-1" id="btn_ayuda_mapa">Ayuda</button>
      </div><!--  col-sm-6 -->

      <div class="col-xs-12 col-sm-6 col-lg-4 mt-2">
        <label></label>            <button class="btn btn-info btn-block btn-style-1" id="btn_buscar_mapa">Buscar</button>
      </div><!--  col-sm-6 -->
    </div>
  </div>
</div><!-- card-body -->
</div>