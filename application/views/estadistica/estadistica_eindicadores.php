<div class="content-header">
	<h1>Estadística educativa específica</h1>
	<ol class="breadcrumb">
		<li><a href="<?=base_url("index/index")?>"><i class="fa fa-home"></i>Inicio</a></li>
		<!-- <li class="active">Estadística educativa</li>
		<li class="active">Específica</li> -->
	</ol>
</div>
		<div class="contenedor">
			<div class="buscador">
				<div id="contenedorBusqueda">
					<div id="contenedorGrupoOpciones">
							<form name="buscarEscuela">
									<div id="divSearchMunicipio">
										<div><input id="radio1" type="radio" name="radio" checked/>&nbsp;&nbsp;&nbsp;Por Estado / Municipio</div>
										</div>
										<div id="divSearchZona">
											<div><input id="radio2" type="radio" name="radio"/>&nbsp;&nbsp;&nbsp;Por Zona Escolar</div>
										</div>
										<div id="divSearchZonaCCTZ">
											<div><input id="radio3" type="radio" name="radio"/>&nbsp;&nbsp;&nbsp;Por CCT de la zona escolar</div>
										</div>
									<div id="divfiltrosEstadoMunicipio">
										<div style="padding-left:50px; padding-bottom:5px;" class="pormuni">
											<div style="display:inline;">
												<label>Municipio:</label>
											</div>
											<div style="display:inline">
												<select id="Municipios"></select>
											</div>
											</br>
										</div>
										
									<div style="padding-left:50px; padding-bottom:5px" class="pormuni">
											<div style="display:inline;  padding-left:83px;">
												<label>Nivel:</label>
											</div>
											<div style="display:inline">
												<select id="nivelmunicipios"></select>
											</div>
											</br>
										</div>

									<div style="padding-left:50px; padding-bottom:5px" class="pormuni">
											<div style="display:inline;  padding-left:31px;">
												<label id="sostmuni">Sostenimiento:</label>
											</div>
											<div style="display:inline">
												<select id="sostenimientomuni"></select>
											</div>
											</br>
										</div>

									<div style="padding-left:50px; padding-bottom:5px" class="pormuni">
											<div style="display:inline;  padding-left:55px;">
												<label id="modamuni">Modalidad:</label>
											</div>
											<div style="display:inline">
												<select id="modalidadmuni"></select>
											</div>
											</br>
										</div>

									<div style="padding-left:50px; padding-bottom:5px" class="pormuni">
											<div style="display:inline;  padding-left:37px">
												<label>Ciclo Escolar:</label>
											</div>
											<div style="display:inline">
												<select id="ciclo"></select>
											</div>
										</div>
									</div>

									<div id="divCriteriasPerZone">
										<div style="color:black; width: 170px; padding-left:15px; height: 25px; border-radius: 7px; margin-left: 150px; background-color:#A0A0A0; display: block; display:none;" class="porzona btngenera">
											<b>Generar Nueva Consulta</b>
										</div>
										<div style="display:none; padding-left:133px; padding-bottom:5px" class="porzona">
											<label>Nivel:</label>
											<select id="nivel" disabled="true">
											</select>
											</br>
										</div>
										<div style="display:none; padding-left:82px; padding-bottom:5px" class="porzona">
											<label>Sostenimiento:</label>
											<select id="sost" disabled="true">
											</select>
											</br>
										</div>
										<div style="display:none; padding-left:105px; padding-bottom:5px" class="porzona">
											<label>Modalidad:</label>
											<select id="modalidad" disabled="true">
											</select>
											</br>
										</div>
										<div style="display:none; padding-left:90px; padding-bottom:5px" class="porzona">
											<label>Zona Escolar:</label>
											<select id="zona" disabled="true">
											</select>
											</br>
										</div>
										<div style="display:none; padding-left:88px; padding-bottom:0px" class="porzona">
											<label>Ciclo Escolar:</label>
											<select id="ciclo1" disabled="true">
											</select>
										</div>
									</div>

									<div class="porzonacctz temporal" id="clavezona">
										<label id="lblClaveZonaEscolar"><b>Clave de centro de trabajo de la zona escolar:</b></label>
										<label id="lblCicloEscolar"><b>Ciclo Escolar:</b></label>
										<div id="divInputsClaveZona" >
												<input id="inputNoEstado" type="text" name="a" id="26" value="26" readonly>
												<input id="inputPrimerasTresLetras" type="text" name="b" id="3letras" maxlength="3" placeholder="3 letras" pattern="[A-Za-z]{3}" required>
												<input id="inputCuatroNumeros" type="text" name="c" id="4numeros" maxlength="4" placeholder="4 NÚMEROS" pattern="[0-9]{4}" required>
												<input id="inputUltimaLetra" type="text" name="d" id="1letra" maxlength="1" placeholder="1 letra" pattern="[A-Za-z]{1}" required>
												<div id="afterFantasma"><select id="ciclocctzona"></select></div>
										</div><br>
										<div id="buscar_cctzona">
											<center>BUSCAR</center>
										</div><br>
										<div class="" id="nomsup">
											<b>Nombre del Supervisor (a):</b>
										</div>
									</div>
							</form>
					</div>
					<!--/form-->
					<!--<button id="btnBuscarEsc" type="button" form="burcar_escuela">BUSCAR</button>-->
				</div>
			</div>
			<div class="pestana">
					BUSCAR
			</div>
		</div> <!-- -->

		<!-- Main content -->
		<div class="box-body">
			<div class="box-group" id="accordion">
				<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
				<div class="panel box box-danger">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								Estadística Estatal / Municipal
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">
						<div class="box-body">
							<table id="example2" class="table table-hover">
								<thead>
								<tr>
									<th rowspan="3" width="19%">Nivel Educativo</th>
									<th colspan="9">Alumnos</th>
								</tr>
								<tr>
									<th colspan="3" >Total</th>
									<th rowspan="2" width="9%">1°</th>
									<th rowspan="2" width="9%">2°</th>
									<th rowspan="2" width="9%">3°</th>
									<th rowspan="2" width="9%">4°</th>
									<th rowspan="2" width="9%">5°</th>
									<th rowspan="2" width="9%">6°</th>
								</tr>
								<tr>
									<th width="9%" ><i class="fa fa-male"></i></th>
									<th width="9%" ><i class="fa fa-female"></i></th>
									<th width="9%" ><i class="fa fa-male"></i><i class="fa fa-female"></i></th>
								</tr>
								</thead>
								<tbody>
									<tr id="total">
										<td id="mis_td">Total (todos&nbsp;los&nbsp;niveles)</td>
										<td id="show">1,050,939</td>
										<td id="show">1,036,096</td>
										<td id="show">2,087,035</td>
										<td id="show">448,029</td>
										<td id="show">465,358</td>
										<td id="show">443,258</td>
										<td id="show">131,239</td>
										<td id="show">134,408</td>
										<td class="thtd_right" id="show">137,386</td>
									</tr>
									<tr class="parent" id="esp" title="Click para expander/contraer" style="cursor: pointer;">
										<td id="mis_td" size="10">+ Especial</td>
											<td id="show">12,295</td>
											<td id="show">6,842</td>
											<td id="show">19,137</td>
											<td id="show">0</td>
											<td id="show">0</td>
											<td id="show">0</td>
											<td id="show">0</td>
											<td id="show">0</td>
											<td class="thtd_right" id="show">0</td>
										</tr>
											<tr class="child-esp child-parent hide-ini" id="esppub" title="Click para expander/contraer" style="cursor: pointer; display: table-row;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Público</td>
												<td id="show">12,187</td>
												<td id="show">6,756</td>
												<td id="show">18,943</td>
												<td id="show">0</td>
												<td id="show">0</td>
												<td id="show">0</td>
												<td id="show">0</td>
												<td id="show">0</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-esppub class-hide-esp hide-ini" id="esppubcam" style="display: none;">
												<td id="mis_td" >&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CAM</td>
												<td  id="show">1,721</td><td  id="show">1,053</td><td  id="show">2,774</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-esppub class-hide-esp hide-ini" id="esppubusa" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;USAER
											</td><td  id="show">10,466</td><td  id="show">5,703</td><td  id="show">16,169</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="child-esp child-parent hide-ini" id="esppri" title="Click para expander/contraer" style="cursor: pointer; display: table-row;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											</td><td id="show">108</td><td id="show">86</td><td id="show">194</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-esppri  class-hide-esp hide-ini" id="esppricam"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CAM
											</td><td  id="show">108</td><td  id="show">86</td><td  id="show">194</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="parent" id="ini" title="Click para expander/contraer" style="cursor: pointer;"><td id="mis_td" size="10">
												+ Inicial
											</td><td id="show">23,524</td><td id="show">22,860</td><td id="show">46,384</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="child-ini child-parent hide-ini" id="inipub" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Público
											</td><td id="show">23,502</td><td id="show">22,846</td><td id="show">46,348</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-inipub class-hide-ini hide-ini" id="inipubesc" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Escolarizado
											</td><td  id="show">2,723</td><td  id="show">2,567</td><td  id="show">5,290</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-inipub class-hide-ini hide-ini" id="inipubnoe" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;No&nbsp;Escolarizado
											</td><td  id="show">20,779</td><td  id="show">20,279</td><td  id="show">41,058</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="child-ini child-parent hide-ini" id="inipri" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											</td><td id="show">22</td><td id="show">14</td><td id="show">36</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-inipri class-hide-ini hide-ini" id="inipriesc" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Escolarizado
											</td><td  id="show">22</td><td  id="show">14</td><td  id="show">36</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="parent" id="pre" title="Click para expander/contraer" style="cursor: pointer;"><td id="mis_td">
												+ Preescolar
											</td><td id="show">147,374</td><td id="show">145,279</td><td id="show">292,653</td><td id="show">63,269</td><td id="show">108,295</td><td id="show">121,089</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="child-pre child-parent hide-ini" id="prepub" title="Click para expander/contraer" style="cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Público
											</td><td id="show">124,930</td><td id="show">123,566</td><td id="show">248,496</td><td id="show">51,365</td><td id="show">92,630</td><td id="show">104,501</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-prepub class-hide-pre hide-ini" id="prepubcon"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CONAFE
											</td><td  id="show">5,169</td><td  id="show">4,919</td><td  id="show">10,088</td><td  id="show">3,197</td><td  id="show">4,099</td><td  id="show">2,792</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-prepub class-hide-pre hide-ini" id="prepubgen"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											</td><td  id="show">96,442</td><td  id="show">95,524</td><td  id="show">191,966</td><td  id="show">38,313</td><td  id="show">71,524</td><td  id="show">82,129</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-prepub class-hide-pre hide-ini" id="prepubind"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Indígena
											</td><td  id="show">23,319</td><td  id="show">23,123</td><td  id="show">46,442</td><td  id="show">9,855</td><td  id="show">17,007</td><td  id="show">19,580</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="child-pre child-parent hide-ini" id="prepri" title="Click para expander/contraer" style="cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											</td><td id="show">22,444</td><td id="show">21,713</td><td id="show">44,157</td><td id="show">11,904</td><td id="show">15,665</td><td id="show">16,588</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-prepri class-hide-pre hide-ini" id="preprigen" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											</td><td  id="show">22,444</td><td  id="show">21,713</td><td  id="show">44,157</td><td  id="show">11,904</td><td  id="show">15,665</td><td  id="show">16,588</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="parent" id="pri" title="Click para expander/contraer" style="cursor: pointer;"><td style="background-color: #FFFFF" id="mis_td">
												+ Primaria
											</td><td id="show">405,854</td><td id="show">391,347</td><td id="show">797,201</td><td id="show">130,009</td><td id="show">132,748</td><td id="show">131,411</td><td id="show">131,239</td><td id="show">134,408</td><td class="thtd_right" id="show">137,386</td></tr><tr class="child-pri child-parent hide-ini" id="pripub" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Público
											</td><td id="show">371,789</td><td id="show">359,104</td><td id="show">730,893</td><td id="show">118,391</td><td id="show">121,455</td><td id="show">120,207</td><td id="show">120,416</td><td id="show">123,706</td><td class="thtd_right" id="show">126,718</td></tr><tr class="nieto-pripub class-hide-pri hide-ini" id="pripubcon" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CONAFE
											</td><td  id="show">2,877</td><td  id="show">2,850</td><td  id="show">5,727</td><td  id="show">923</td><td  id="show">1,049</td><td  id="show">924</td><td  id="show">952</td><td  id="show">1,059</td><td  class="thtd_right" id="show">820</td></tr><tr class="nieto-pripub class-hide-pri hide-ini" id="pripubgen" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											</td><td  id="show">334,066</td><td  id="show">323,235</td><td  id="show">657,301</td><td  id="show">106,678</td><td  id="show">109,308</td><td  id="show">108,190</td><td  id="show">108,219</td><td  id="show">110,918</td><td  class="thtd_right" id="show">113,988</td></tr><tr class="nieto-pripub class-hide-pri hide-ini" id="pripubind" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Indígena
											</td><td  id="show">34,846</td><td  id="show">33,019</td><td  id="show">67,865</td><td  id="show">10,790</td><td  id="show">11,098</td><td  id="show">11,093</td><td  id="show">11,245</td><td  id="show">11,729</td><td  class="thtd_right" id="show">11,910</td></tr><tr class="child-pri child-parent hide-ini" id="pripri" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											</td><td id="show">34,065</td><td id="show">32,243</td><td id="show">66,308</td><td id="show">11,618</td><td id="show">11,293</td><td id="show">11,204</td><td id="show">10,823</td><td id="show">10,702</td><td class="thtd_right" id="show">10,668</td></tr><tr class="nieto-pripri class-hide-pri hide-ini" id="priprigen" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											</td><td  id="show">34,065</td><td  id="show">32,243</td><td  id="show">66,308</td><td  id="show">11,618</td><td  id="show">11,293</td><td  id="show">11,204</td><td  id="show">10,823</td><td  id="show">10,702</td><td  class="thtd_right" id="show">10,668</td></tr><tr class="parent" id="sec" title="Click para expander/contraer" style="cursor: pointer;"><td id="mis_td">
												+ Secundaria
											</td><td id="show">194,150</td><td id="show">192,679</td><td id="show">386,829</td><td id="show">138,770</td><td id="show">133,213</td><td id="show">114,846</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="child-sec child-parent hide-ini" id="secpub" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Público
											</td><td id="show">178,743</td><td id="show">177,510</td><td id="show">356,253</td><td id="show">127,871</td><td id="show">122,840</td><td id="show">105,542</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-secpub  class-hide-sec hide-ini" id="secpubcon" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CONAFE
											</td><td  id="show">786</td><td  id="show">854</td><td  id="show">1,640</td><td  id="show">681</td><td  id="show">580</td><td  id="show">379</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-secpub class-hide-sec hide-ini" id="secpubgen" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											</td><td  id="show">59,637</td><td  id="show">61,106</td><td  id="show">120,743</td><td  id="show">42,881</td><td  id="show">41,938</td><td  id="show">35,924</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-secpub class-hide-sec hide-ini" id="secpubpar" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Para&nbsp;Trabajadores
											</td><td  id="show">966</td><td  id="show">795</td><td  id="show">1,761</td><td  id="show">575</td><td  id="show">654</td><td  id="show">532</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-secpub class-hide-sec hide-ini" id="secpubtec" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Técnica
											</td><td  id="show">40,918</td><td  id="show">40,946</td><td  id="show">81,864</td><td  id="show">29,121</td><td  id="show">27,930</td><td  id="show">24,813</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-secpub class-hide-sec hide-ini" id="secpubtel" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Telesecundaria
											</td><td  id="show">76,436</td><td  id="show">73,809</td><td  id="show">150,245</td><td  id="show">54,613</td><td  id="show">51,738</td><td  id="show">43,894</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="child-sec child-parent hide-ini" id="secpri" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											</td><td id="show">15,407</td><td id="show">15,169</td><td id="show">30,576</td><td id="show">10,899</td><td id="show">10,373</td><td id="show">9,304</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-secpri class-hide-sec hide-ini" id="secprigen" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											</td><td  id="show">15,161</td><td  id="show">14,946</td><td  id="show">30,107</td><td  id="show">10,753</td><td  id="show">10,213</td><td  id="show">9,141</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-secpri class-hide-sec hide-ini" id="secpritec" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Técnica
											</td><td  id="show">246</td><td  id="show">223</td><td  id="show">469</td><td  id="show">146</td><td  id="show">160</td><td  id="show">163</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="parent" id="med" title="Click para expander/contraer" style="cursor: pointer;"><td id="mis_td">
										+ Media Superior
									</td><td id="show">143,932</td><td id="show">147,802</td><td id="show">291,734</td><td id="show">115,981</td><td id="show">91,102</td><td id="show">75,912</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="child-med child-parent hide-ini" id="medpub" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Publico
											</td><td id="show">109,891</td><td id="show">111,080</td><td id="show">220,971</td><td id="show">84,729</td><td id="show">68,134</td><td id="show">59,369</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-medpub class-hide-med hide-ini" id="medpubgen" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;General
											</td><td  id="show">91,119</td><td  id="show">94,713</td><td  id="show">185,832</td><td  id="show">70,357</td><td  id="show">57,003</td><td  id="show">49,733</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-medpub class-hide-med hide-ini" id="medpubtec" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;Tecnológico
											</td><td  id="show">18,550</td><td  id="show">15,463</td><td  id="show">34,013</td><td  id="show">13,837</td><td  id="show">10,748</td><td  id="show">9,428</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-medpub class-hide-med hide-ini" id="medpubpro" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Profesional&nbsp;Técnico
											</td><td  id="show">222</td><td  id="show">904</td><td  id="show">1,126</td><td  id="show">535</td><td  id="show">383</td><td  id="show">208</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="child-med child-parent hide-ini" id="medaut" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Autónomo
											</td><td id="show">7,332</td><td id="show">9,012</td><td id="show">16,344</td><td id="show">6,206</td><td id="show">5,294</td><td id="show">4,844</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-medaut class-hide-med hide-ini" id="medautgen" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;General
											</td><td  id="show">6,777</td><td  id="show">8,647</td><td  id="show">15,424</td><td  id="show">5,633</td><td  id="show">5,071</td><td  id="show">4,720</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-medaut class-hide-med hide-ini" id="medautpro" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Profesional&nbsp;Técnico
											</td><td  id="show">555</td><td  id="show">365</td><td  id="show">920</td><td  id="show">573</td><td  id="show">223</td><td  id="show">124</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="child-med child-parent hide-ini" id="medpri" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											</td><td id="show">26,709</td><td id="show">27,710</td><td id="show">54,419</td><td id="show">25,046</td><td id="show">17,674</td><td id="show">11,699</td><td id="show">0</td><td id="show">0</td><td class="thtd_right" id="show">0</td></tr><tr class="nieto-medpri class-hide-med hide-ini" id="medprigen" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;General
											</td><td  id="show">23,792</td><td  id="show">21,393</td><td  id="show">45,185</td><td  id="show">20,976</td><td  id="show">14,754</td><td  id="show">9,455</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-medpri class-hide-med hide-ini" id="medpritec" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;Tecnológico
											</td><td  id="show">1,076</td><td  id="show">983</td><td  id="show">2,059</td><td  id="show">885</td><td  id="show">652</td><td  id="show">522</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="nieto-medpri class-hide-med hide-ini" id="medpripro" style="display: none;"><td id="mis_td" >
												&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Profesional&nbsp;Técnico
											</td><td  id="show">1,841</td><td  id="show">5,334</td><td  id="show">7,175</td><td  id="show">3,185</td><td  id="show">2,268</td><td  id="show">1,722</td><td  id="show">0</td><td  id="show">0</td><td  class="thtd_right" id="show">0</td></tr><tr class="parent" id="sup" title="Click para expander/contraer" style="cursor: pointer;"><td id="mis_td">
												+ Superior
											</td><td id="show">123,810</td><td id="show">129,287</td><td id="show">253,097</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td class="thtd_right" id="show">n/d</td></tr><tr class="child-sup child-parent hide-ini" id="supuni" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Universitario&nbsp;y&nbsp;Tecnológico
											</td><td id="show">111,636</td><td id="show">110,083</td><td id="show">221,719</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td class="thtd_right" id="show">n/d</td></tr><tr class="nieto-supuni child-nieto class-hide-sup hide-ini" id="supunipub" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td" >
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;+Público
														</td><td  id="show">36,303</td><td  id="show">25,677</td><td  id="show">61,980</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="bisnieto-supunipub class-hide-sup class-hide-supuni hide-ini" id="supunipubest" style="display: none;"><td id="mis_td">
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Estatal
														</td><td  id="show">28,749</td><td  id="show">21,861</td><td  id="show">50,610</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="bisnieto-supunipub class-hide-sup class-hide-supuni hide-ini" id="supunipubfed" style="display: none;"><td id="mis_td">
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Federal
														</td><td  id="show">7,554</td><td  id="show">3,816</td><td  id="show">11,370</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="nieto-supuni class-hide-sup hide-ini" id="supuniaut" style="display: none;"><td id="mis_td" >
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Autónomo
														</td><td  id="show">29,865</td><td  id="show">33,313</td><td  id="show">63,178</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="nieto-supuni class-hide-sup hide-ini" id="supunipri" style="display: none;"><td id="mis_td" >
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Privado
														</td><td  id="show">45,468</td><td  id="show">51,093</td><td  id="show">96,561</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="child-sup child-parent hide-ini" id="supnor" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Normal
											</td><td id="show">1,455</td><td id="show">4,855</td><td id="show">6,310</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td class="thtd_right" id="show">n/d</td></tr><tr class="nieto-supnor child-nieto class-hide-sup hide-ini" id="supnorpub" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td" >
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;+Público
														</td><td  id="show">1,012</td><td  id="show">3,422</td><td  id="show">4,434</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="bisnieto-supnorpub class-hide-sup class-hide-supnor hide-ini" id="supnorpubest" style="display: none;"><td id="mis_td">
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Estatal
														</td><td  id="show">1,012</td><td  id="show">3,422</td><td  id="show">4,434</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="nieto-supnor class-hide-sup hide-ini" id="supnorpri" style="display: none;"><td id="mis_td" >
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Privado
														</td><td  id="show">443</td><td  id="show">1,433</td><td  id="show">1,876</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="child-sup child-parent hide-ini" id="suppos" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td">
												&nbsp; &nbsp; &nbsp; &nbsp;+ Posgrado
											</td><td id="show">10,719</td><td id="show">14,349</td><td id="show">25,068</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td id="show">n/d</td><td class="thtd_right" id="show">n/d</td></tr><tr class="nieto-suppos child-nieto class-hide-sup hide-ini" id="suppospub" title="Click para expander/contraer" style="display: none; cursor: pointer;"><td id="mis_td" >
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;+Público
														</td><td  id="show">649</td><td  id="show">714</td><td  id="show">1,363</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="bisnieto-suppospub class-hide-sup class-hide-suppos hide-ini" id="suppospubest" style="display: none;"><td id="mis_td">
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Estatal
														</td><td  id="show">328</td><td  id="show">568</td><td  id="show">896</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="bisnieto-suppospub class-hide-sup class-hide-suppos hide-ini" id="suppospubfed" style="display: none;"><td id="mis_td">
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Federal
														</td><td  id="show">321</td><td  id="show">146</td><td  id="show">467</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="nieto-suppos class-hide-sup hide-ini" id="supposaut" style="display: none;"><td id="mis_td" >
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Autónomo
														</td><td  id="show">1,910</td><td  id="show">1,904</td><td  id="show">3,814</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr><tr class="nieto-suppos class-hide-sup hide-ini" id="suppospri" style="display: none;"><td id="mis_td" >
															&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Privado
														</td><td  id="show">8,160</td><td  id="show">11,731</td><td  id="show">19,891</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td  id="show">n/d</td><td class="thtd_right"  id="show">n/d</td></tr>

								</tbody>
								<tfoot>
								<tr>
									<th colspan="10">
										<div class="callout callout-success">
											<p>Fuente: SEC Sonora con base en el Formato 911.</p>
										</div>
									</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<div class="panel box box-success">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								Estadística
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="box-body">
							<table id="example2" class="table table-hover">
								<thead>
								<tr>
									<th width="20%">Nivel Educativo</th>
									<th width="20%">Docentes</th>
									<th width="20%">Directivos</th>
									<th width="20%">Supervisores</th>
									<th width="20%">Jefes de Sector</th>
								</tr>
								</thead>
								<tbody>
									<tr id="total">
										<td id="mis_td">Total (todos&nbsp;los&nbsp;niveles)</td>
										<td id="show">1,050,939</td>
										<td id="show">1,036,096</td>
										<td id="show">2,087,035</td>
										<td class="thtd_right" id="show">137,386</td>
									</tr>
									<tr class="parent" id="esp" title="Click para expander/contraer" style="cursor: pointer;">
										<td id="mis_td" size="10">+ Especial</td>
											<td id="show">12,295</td>
											<td id="show">6,842</td>
											<td id="show">19,137</td>
											<td class="thtd_right" id="show">0</td>
										</tr>
											<tr class="child-esp child-parent hide-ini" id="esppub" title="Click para expander/contraer" style="cursor: pointer; display: table-row;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Público</td>
												<td id="show">12,187</td>
												<td id="show">6,756</td>
												<td id="show">18,943</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-esppub class-hide-esp hide-ini" id="esppubcam" style="display: none;">
												<td id="mis_td" >&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CAM</td>
												<td id="show">1,721</td>
												<td id="show">1,053</td>
												<td id="show">2,774</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-esppub class-hide-esp hide-ini" id="esppubusa" style="display: none;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;USAER</td>
												<td id="show">10,466</td>
												<td id="show">5,703</td>
												<td id="show">16,169</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-esp child-parent hide-ini" id="esppri" title="Click para expander/contraer" style="cursor: pointer; display: table-row;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Privado</td>
												<td id="show">108</td>
												<td id="show">86</td>
												<td id="show">194</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-esppri  class-hide-esp hide-ini" id="esppricam">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CAM</td>
												<td id="show">108</td>
												<td id="show">86</td>
												<td id="show">194</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="ini" title="Click para expander/contraer" style="cursor: pointer;">
												<td id="mis_td" size="10">+ Inicial</td>
												<td id="show">23,524</td>
												<td id="show">22,860</td>
												<td id="show">46,384</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-ini child-parent hide-ini" id="inipub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Público</td>
												<td id="show">23,502</td>
												<td id="show">22,846</td>
												<td id="show">46,348</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-inipub class-hide-ini hide-ini" id="inipubesc" style="display: none;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Escolarizado</td>
												<td id="show">2,723</td>
												<td id="show">2,567</td>
												<td id="show">5,290</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-inipub class-hide-ini hide-ini" id="inipubnoe" style="display: none;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;No&nbsp;Escolarizado</td>
												<td id="show">20,779</td>
												<td id="show">20,279</td>
												<td id="show">41,058</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-ini child-parent hide-ini" id="inipri" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Privado</td>
												<td id="show">22</td>
												<td id="show">14</td>
												<td id="show">36</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-inipri class-hide-ini hide-ini" id="inipriesc" style="display: none;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Escolarizado</td>
												<td  id="show">22</td>
												<td  id="show">14</td>
												<td  id="show">36</td>
												<td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="pre" title="Click para expander/contraer" style="cursor: pointer;">
												<td id="mis_td">+ Preescolar</td>
												<td id="show">147,374</td>
												<td id="show">145,279</td>
												<td id="show">292,653</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-pre child-parent hide-ini" id="prepub" title="Click para expander/contraer" style="cursor: pointer;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Público</td>
												<td id="show">124,930</td>
												<td id="show">123,566</td>
												<td id="show">248,496</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-prepub class-hide-pre hide-ini" id="prepubcon">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CONAFE</td>
												<td  id="show">5,169</td>
												<td  id="show">4,919</td>
												<td  id="show">10,088</td>
												<td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-prepub class-hide-pre hide-ini" id="prepubgen">
											   <td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General</td>
											   <td  id="show">96,442</td>
											   <td  id="show">95,524</td>
											   <td  id="show">191,966</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-prepub class-hide-pre hide-ini" id="prepubind">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Indígena
											   </td>
											   <td  id="show">23,319</td>
											   <td  id="show">23,123</td>
											   <td  id="show">46,442</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-pre child-parent hide-ini" id="prepri" title="Click para expander/contraer" style="cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											   </td>
											   <td id="show">22,444</td>
											   <td id="show">21,713</td>
											   <td id="show">44,157</td>
											   <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-prepri class-hide-pre hide-ini" id="preprigen" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											   </td>
											   <td  id="show">22,444</td>
											   <td  id="show">21,713</td>
											   <td  id="show">44,157</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="pri" title="Click para expander/contraer" style="cursor: pointer;">
											   <td style="background-color: #FFFFF" id="mis_td">
											      + Primaria
											   </td>
											   <td id="show">405,854</td>
											   <td id="show">391,347</td>
											   <td id="show">797,201</td>
											   <td class="thtd_right" id="show">137,386</td>
											</tr>
											<tr class="child-pri child-parent hide-ini" id="pripub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Público
											   </td>
											   <td id="show">371,789</td>
											   <td id="show">359,104</td>
											   <td id="show">730,893</td>
											   <td class="thtd_right" id="show">126,718</td>
											</tr>
											<tr class="nieto-pripub class-hide-pri hide-ini" id="pripubcon" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CONAFE
											   </td>
											   <td  id="show">2,877</td>
											   <td  id="show">2,850</td>
											   <td  id="show">5,727</td>
											   <td  class="thtd_right" id="show">820</td>
											</tr>
											<tr class="nieto-pripub class-hide-pri hide-ini" id="pripubgen" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											   </td>
											   <td  id="show">334,066</td>
											   <td  id="show">323,235</td>
											   <td  id="show">657,301</td>
											   <td  class="thtd_right" id="show">113,988</td>
											</tr>
											<tr class="nieto-pripub class-hide-pri hide-ini" id="pripubind" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Indígena
											   </td>
											   <td  id="show">34,846</td>
											   <td  id="show">33,019</td>
											   <td  id="show">67,865</td>
											   <td  class="thtd_right" id="show">11,910</td>
											</tr>
											<tr class="child-pri child-parent hide-ini" id="pripri" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											   </td>
											   <td id="show">34,065</td>
											   <td id="show">32,243</td>
											   <td id="show">66,308</td>
											   <td class="thtd_right" id="show">10,668</td>
											</tr>
											<tr class="nieto-pripri class-hide-pri hide-ini" id="priprigen" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											   </td>
											   <td  id="show">34,065</td>
											   <td  id="show">32,243</td>
											   <td  id="show">66,308</td>
											   <td  class="thtd_right" id="show">10,668</td>
											</tr>
											<tr class="parent" id="sec" title="Click para expander/contraer" style="cursor: pointer;">
											   <td id="mis_td">
											      + Secundaria
											   </td>
											   <td id="show">194,150</td>
											   <td id="show">192,679</td>
											   <td id="show">386,829</td>
											   <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-sec child-parent hide-ini" id="secpub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Público
											   </td>
											   <td id="show">178,743</td>
											   <td id="show">177,510</td>
											   <td id="show">356,253</td>
											   <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub  class-hide-sec hide-ini" id="secpubcon" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CONAFE
											   </td>
											   <td  id="show">786</td>
											   <td  id="show">854</td>
											   <td  id="show">1,640</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub class-hide-sec hide-ini" id="secpubgen" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											   </td>
											   <td  id="show">59,637</td>
											   <td  id="show">61,106</td>
											   <td  id="show">120,743</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub class-hide-sec hide-ini" id="secpubpar" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Para&nbsp;Trabajadores
											   </td>
											   <td  id="show">966</td>
											   <td  id="show">795</td>
											   <td  id="show">1,761</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub class-hide-sec hide-ini" id="secpubtec" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Técnica
											   </td>
											   <td  id="show">40,918</td>
											   <td  id="show">40,946</td>
											   <td  id="show">81,864</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub class-hide-sec hide-ini" id="secpubtel" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Telesecundaria
											   </td>
											   <td  id="show">76,436</td>
											   <td  id="show">73,809</td>
											   <td  id="show">150,245</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-sec child-parent hide-ini" id="secpri" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											   </td>
											   <td id="show">15,407</td>
											   <td id="show">15,169</td>
											   <td id="show">30,576</td>
											   <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpri class-hide-sec hide-ini" id="secprigen" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
											   </td>
											   <td  id="show">15,161</td>
											   <td  id="show">14,946</td>
											   <td  id="show">30,107</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpri class-hide-sec hide-ini" id="secpritec" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Técnica
											   </td>
											   <td  id="show">246</td>
											   <td  id="show">223</td>
											   <td  id="show">469</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="med" title="Click para expander/contraer" style="cursor: pointer;">
											   <td id="mis_td">
											      + Media Superior
											   </td>
											   <td id="show">143,932</td>
											   <td id="show">147,802</td>
											   <td id="show">291,734</td>
											   <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-med child-parent hide-ini" id="medpub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Publico
											   </td>
											   <td id="show">109,891</td>
											   <td id="show">111,080</td>
											   <td id="show">220,971</td>
											   <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpub class-hide-med hide-ini" id="medpubgen" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;General
											   </td>
											   <td  id="show">91,119</td>
											   <td  id="show">94,713</td>
											   <td  id="show">185,832</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpub class-hide-med hide-ini" id="medpubtec" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;Tecnológico
											   </td>
											   <td  id="show">18,550</td>
											   <td  id="show">15,463</td>
											   <td  id="show">34,013</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpub class-hide-med hide-ini" id="medpubpro" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Profesional&nbsp;Técnico
											   </td>
											   <td  id="show">222</td>
											   <td  id="show">904</td>
											   <td  id="show">1,126</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-med child-parent hide-ini" id="medaut" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Autónomo
											   </td>
											   <td id="show">7,332</td>
											   <td id="show">9,012</td>
											   <td id="show">16,344</td>
											   <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medaut class-hide-med hide-ini" id="medautgen" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;General
											   </td>
											   <td  id="show">6,777</td>
											   <td  id="show">8,647</td>
											   <td  id="show">15,424</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medaut class-hide-med hide-ini" id="medautpro" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Profesional&nbsp;Técnico
											   </td>
											   <td  id="show">555</td>
											   <td  id="show">365</td>
											   <td  id="show">920</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-med child-parent hide-ini" id="medpri" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Privado
											   </td>
											   <td id="show">26,709</td>
											   <td id="show">27,710</td>
											   <td id="show">54,419</td>
											   <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpri class-hide-med hide-ini" id="medprigen" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;General
											   </td>
											   <td  id="show">23,792</td>
											   <td  id="show">21,393</td>
											   <td  id="show">45,185</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpri class-hide-med hide-ini" id="medpritec" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;Tecnológico
											   </td>
											   <td  id="show">1,076</td>
											   <td  id="show">983</td>
											   <td  id="show">2,059</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpri class-hide-med hide-ini" id="medpripro" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Profesional&nbsp;Técnico
											   </td>
											   <td  id="show">1,841</td>
											   <td  id="show">5,334</td>
											   <td  id="show">7,175</td>
											   <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="sup" title="Click para expander/contraer" style="cursor: pointer;">
											   <td id="mis_td">
											      + Superior
											   </td>
											   <td id="show">123,810</td>
											   <td id="show">129,287</td>
											   <td id="show">253,097</td>
											   <td class="thtd_right" id="show">n/d</td>
											</tr>
											<tr class="child-sup child-parent hide-ini" id="supuni" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Universitario&nbsp;y&nbsp;Tecnológico
											   </td>
											   <td id="show">111,636</td>
											   <td id="show">110,083</td>
											   <td id="show">221,719</td>
											   <td class="thtd_right" id="show">n/d</td>
											</tr>
											<tr class="nieto-supuni child-nieto class-hide-sup hide-ini" id="supunipub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;+Público
											   </td>
											   <td  id="show">36,303</td>
											   <td  id="show">25,677</td>
											   <td  id="show">61,980</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-supunipub class-hide-sup class-hide-supuni hide-ini" id="supunipubest" style="display: none;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Estatal
											   </td>
											   <td  id="show">28,749</td>
											   <td  id="show">21,861</td>
											   <td  id="show">50,610</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-supunipub class-hide-sup class-hide-supuni hide-ini" id="supunipubfed" style="display: none;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Federal
											   </td>
											   <td  id="show">7,554</td>
											   <td  id="show">3,816</td>
											   <td  id="show">11,370</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-supuni class-hide-sup hide-ini" id="supuniaut" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Autónomo
											   </td>
											   <td  id="show">29,865</td>
											   <td  id="show">33,313</td>
											   <td  id="show">63,178</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-supuni class-hide-sup hide-ini" id="supunipri" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Privado
											   </td>
											   <td  id="show">45,468</td>
											   <td  id="show">51,093</td>
											   <td  id="show">96,561</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="child-sup child-parent hide-ini" id="supnor" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Normal
											   </td>
											   <td id="show">1,455</td>
											   <td id="show">4,855</td>
											   <td id="show">6,310</td>
											   <td class="thtd_right" id="show">n/d</td>
											</tr>
											<tr class="nieto-supnor child-nieto class-hide-sup hide-ini" id="supnorpub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;+Público
											   </td>
											   <td  id="show">1,012</td>
											   <td  id="show">3,422</td>
											   <td  id="show">4,434</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-supnorpub class-hide-sup class-hide-supnor hide-ini" id="supnorpubest" style="display: none;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Estatal
											   </td>
											   <td  id="show">1,012</td>
											   <td  id="show">3,422</td>
											   <td  id="show">4,434</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-supnor class-hide-sup hide-ini" id="supnorpri" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Privado
											   </td>
											   <td  id="show">443</td>
											   <td  id="show">1,433</td>
											   <td  id="show">1,876</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="child-sup child-parent hide-ini" id="suppos" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;+ Posgrado
											   </td>
											   <td id="show">10,719</td>
											   <td id="show">14,349</td>
											   <td id="show">25,068</td>
											   <td class="thtd_right" id="show">n/d</td>
											</tr>
											<tr class="nieto-suppos child-nieto class-hide-sup hide-ini" id="suppospub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;+Público
											   </td>
											   <td  id="show">649</td>
											   <td  id="show">714</td>
											   <td  id="show">1,363</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-suppospub class-hide-sup class-hide-suppos hide-ini" id="suppospubest" style="display: none;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Estatal
											   </td>
											   <td  id="show">328</td>
											   <td  id="show">568</td>
											   <td  id="show">896</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-suppospub class-hide-sup class-hide-suppos hide-ini" id="suppospubfed" style="display: none;">
											   <td id="mis_td">
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Federal
											   </td>
											   <td  id="show">321</td>
											   <td  id="show">146</td>
											   <td  id="show">467</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-suppos class-hide-sup hide-ini" id="supposaut" style="display: none;">
											   <td id="mis_td" >
											      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Autónomo
											   </td>
											   <td  id="show">1,910</td>
											   <td  id="show">1,904</td>
											   <td  id="show">3,814</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-suppos class-hide-sup hide-ini" id="suppospri" style="display: none;">
											   <td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Privado</td>
											   <td  id="show">8,160</td>
											   <td  id="show">11,731</td>
											   <td  id="show">19,891</td>
											   <td class="thtd_right"  id="show">n/d</td>
											</tr>


								</tbody>
								<tfoot>
								<tr>
									<th colspan="10">
										<div class="callout callout-success">
											<p>Fuente: SEC Sonora con base en el Formato 911.</p>
										</div>
									</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<div class="panel box box-danger">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								Infraestructura
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="box-body">
							<table id="example2" class="table table-hover">
								<thead>
								<tr>
									<th width="20%">Nivel Educativo</th>
									<th width="20%">Escuelas</th>
									<th width="20%">Edificios Escolares</th>
									<th width="20%">Aulas</th>
									<th width="20%">Grupos</th>
								</tr>
								</thead>
								<tbody>
									<tr id="total">
										<td id="mis_td">Total (todos&nbsp;los&nbsp;niveles)</td>
										<td id="show">1,050,939</td>
										<td id="show">1,036,096</td>
										<td id="show">2,087,035</td>
										<td class="thtd_right" id="show">137,386</td>
									</tr>
									<tr class="parent" id="esp" title="Click para expander/contraer" style="cursor: pointer;">
										<td id="mis_td" size="10">+ Especial</td>
											<td id="show">12,295</td>
											<td id="show">6,842</td>
											<td id="show">19,137</td>
											<td class="thtd_right" id="show">0</td>
										</tr>
											<tr class="child-esp child-parent hide-ini" id="esppub" title="Click para expander/contraer" style="cursor: pointer; display: table-row;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Público</td>
												<td id="show">12,187</td>
												<td id="show">6,756</td>
												<td id="show">18,943</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-esppub class-hide-esp hide-ini" id="esppubcam" style="display: none;">
												<td id="mis_td" >&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CAM</td>
												<td id="show">1,721</td>
												<td id="show">1,053</td>
												<td id="show">2,774</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-esppub class-hide-esp hide-ini" id="esppubusa" style="display: none;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;USAER</td>
												<td id="show">10,466</td>
												<td id="show">5,703</td>
												<td id="show">16,169</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-esp child-parent hide-ini" id="esppri" title="Click para expander/contraer" style="cursor: pointer; display: table-row;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Privado</td>
												<td id="show">108</td>
												<td id="show">86</td>
												<td id="show">194</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-esppri  class-hide-esp hide-ini" id="esppricam">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CAM</td>
												<td id="show">108</td>
												<td id="show">86</td>
												<td id="show">194</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="ini" title="Click para expander/contraer" style="cursor: pointer;">
												<td id="mis_td" size="10">+ Inicial</td>
												<td id="show">23,524</td>
												<td id="show">22,860</td>
												<td id="show">46,384</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-ini child-parent hide-ini" id="inipub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Público</td>
												<td id="show">23,502</td>
												<td id="show">22,846</td>
												<td id="show">46,348</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-inipub class-hide-ini hide-ini" id="inipubesc" style="display: none;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Escolarizado</td>
												<td id="show">2,723</td>
												<td id="show">2,567</td>
												<td id="show">5,290</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-inipub class-hide-ini hide-ini" id="inipubnoe" style="display: none;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;No&nbsp;Escolarizado</td>
												<td id="show">20,779</td>
												<td id="show">20,279</td>
												<td id="show">41,058</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-ini child-parent hide-ini" id="inipri" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Privado</td>
												<td id="show">22</td>
												<td id="show">14</td>
												<td id="show">36</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-inipri class-hide-ini hide-ini" id="inipriesc" style="display: none;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Escolarizado</td>
												<td  id="show">22</td>
												<td  id="show">14</td>
												<td  id="show">36</td>
												<td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="pre" title="Click para expander/contraer" style="cursor: pointer;">
												<td id="mis_td">+ Preescolar</td>
												<td id="show">147,374</td>
												<td id="show">145,279</td>
												<td id="show">292,653</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-pre child-parent hide-ini" id="prepub" title="Click para expander/contraer" style="cursor: pointer;">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;+ Público</td>
												<td id="show">124,930</td>
												<td id="show">123,566</td>
												<td id="show">248,496</td>
												<td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-prepub class-hide-pre hide-ini" id="prepubcon">
												<td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CONAFE</td>
												<td  id="show">5,169</td>
												<td  id="show">4,919</td>
												<td  id="show">10,088</td>
												<td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-prepub class-hide-pre hide-ini" id="prepubgen">
												 <td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General</td>
												 <td  id="show">96,442</td>
												 <td  id="show">95,524</td>
												 <td  id="show">191,966</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-prepub class-hide-pre hide-ini" id="prepubind">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Indígena
												 </td>
												 <td  id="show">23,319</td>
												 <td  id="show">23,123</td>
												 <td  id="show">46,442</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-pre child-parent hide-ini" id="prepri" title="Click para expander/contraer" style="cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
												 </td>
												 <td id="show">22,444</td>
												 <td id="show">21,713</td>
												 <td id="show">44,157</td>
												 <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-prepri class-hide-pre hide-ini" id="preprigen" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
												 </td>
												 <td  id="show">22,444</td>
												 <td  id="show">21,713</td>
												 <td  id="show">44,157</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="pri" title="Click para expander/contraer" style="cursor: pointer;">
												 <td style="background-color: #FFFFF" id="mis_td">
														+ Primaria
												 </td>
												 <td id="show">405,854</td>
												 <td id="show">391,347</td>
												 <td id="show">797,201</td>
												 <td class="thtd_right" id="show">137,386</td>
											</tr>
											<tr class="child-pri child-parent hide-ini" id="pripub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Público
												 </td>
												 <td id="show">371,789</td>
												 <td id="show">359,104</td>
												 <td id="show">730,893</td>
												 <td class="thtd_right" id="show">126,718</td>
											</tr>
											<tr class="nieto-pripub class-hide-pri hide-ini" id="pripubcon" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CONAFE
												 </td>
												 <td  id="show">2,877</td>
												 <td  id="show">2,850</td>
												 <td  id="show">5,727</td>
												 <td  class="thtd_right" id="show">820</td>
											</tr>
											<tr class="nieto-pripub class-hide-pri hide-ini" id="pripubgen" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
												 </td>
												 <td  id="show">334,066</td>
												 <td  id="show">323,235</td>
												 <td  id="show">657,301</td>
												 <td  class="thtd_right" id="show">113,988</td>
											</tr>
											<tr class="nieto-pripub class-hide-pri hide-ini" id="pripubind" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Indígena
												 </td>
												 <td  id="show">34,846</td>
												 <td  id="show">33,019</td>
												 <td  id="show">67,865</td>
												 <td  class="thtd_right" id="show">11,910</td>
											</tr>
											<tr class="child-pri child-parent hide-ini" id="pripri" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
												 </td>
												 <td id="show">34,065</td>
												 <td id="show">32,243</td>
												 <td id="show">66,308</td>
												 <td class="thtd_right" id="show">10,668</td>
											</tr>
											<tr class="nieto-pripri class-hide-pri hide-ini" id="priprigen" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
												 </td>
												 <td  id="show">34,065</td>
												 <td  id="show">32,243</td>
												 <td  id="show">66,308</td>
												 <td  class="thtd_right" id="show">10,668</td>
											</tr>
											<tr class="parent" id="sec" title="Click para expander/contraer" style="cursor: pointer;">
												 <td id="mis_td">
														+ Secundaria
												 </td>
												 <td id="show">194,150</td>
												 <td id="show">192,679</td>
												 <td id="show">386,829</td>
												 <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-sec child-parent hide-ini" id="secpub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Público
												 </td>
												 <td id="show">178,743</td>
												 <td id="show">177,510</td>
												 <td id="show">356,253</td>
												 <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub  class-hide-sec hide-ini" id="secpubcon" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;CONAFE
												 </td>
												 <td  id="show">786</td>
												 <td  id="show">854</td>
												 <td  id="show">1,640</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub class-hide-sec hide-ini" id="secpubgen" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
												 </td>
												 <td  id="show">59,637</td>
												 <td  id="show">61,106</td>
												 <td  id="show">120,743</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub class-hide-sec hide-ini" id="secpubpar" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Para&nbsp;Trabajadores
												 </td>
												 <td  id="show">966</td>
												 <td  id="show">795</td>
												 <td  id="show">1,761</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub class-hide-sec hide-ini" id="secpubtec" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Técnica
												 </td>
												 <td  id="show">40,918</td>
												 <td  id="show">40,946</td>
												 <td  id="show">81,864</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpub class-hide-sec hide-ini" id="secpubtel" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Telesecundaria
												 </td>
												 <td  id="show">76,436</td>
												 <td  id="show">73,809</td>
												 <td  id="show">150,245</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-sec child-parent hide-ini" id="secpri" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
												 </td>
												 <td id="show">15,407</td>
												 <td id="show">15,169</td>
												 <td id="show">30,576</td>
												 <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpri class-hide-sec hide-ini" id="secprigen" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;General
												 </td>
												 <td  id="show">15,161</td>
												 <td  id="show">14,946</td>
												 <td  id="show">30,107</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-secpri class-hide-sec hide-ini" id="secpritec" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Técnica
												 </td>
												 <td  id="show">246</td>
												 <td  id="show">223</td>
												 <td  id="show">469</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="med" title="Click para expander/contraer" style="cursor: pointer;">
												 <td id="mis_td">
														+ Media Superior
												 </td>
												 <td id="show">143,932</td>
												 <td id="show">147,802</td>
												 <td id="show">291,734</td>
												 <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-med child-parent hide-ini" id="medpub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Publico
												 </td>
												 <td id="show">109,891</td>
												 <td id="show">111,080</td>
												 <td id="show">220,971</td>
												 <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpub class-hide-med hide-ini" id="medpubgen" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;General
												 </td>
												 <td  id="show">91,119</td>
												 <td  id="show">94,713</td>
												 <td  id="show">185,832</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpub class-hide-med hide-ini" id="medpubtec" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;Tecnológico
												 </td>
												 <td  id="show">18,550</td>
												 <td  id="show">15,463</td>
												 <td  id="show">34,013</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpub class-hide-med hide-ini" id="medpubpro" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Profesional&nbsp;Técnico
												 </td>
												 <td  id="show">222</td>
												 <td  id="show">904</td>
												 <td  id="show">1,126</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-med child-parent hide-ini" id="medaut" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Autónomo
												 </td>
												 <td id="show">7,332</td>
												 <td id="show">9,012</td>
												 <td id="show">16,344</td>
												 <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medaut class-hide-med hide-ini" id="medautgen" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;General
												 </td>
												 <td  id="show">6,777</td>
												 <td  id="show">8,647</td>
												 <td  id="show">15,424</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medaut class-hide-med hide-ini" id="medautpro" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Profesional&nbsp;Técnico
												 </td>
												 <td  id="show">555</td>
												 <td  id="show">365</td>
												 <td  id="show">920</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="child-med child-parent hide-ini" id="medpri" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Privado
												 </td>
												 <td id="show">26,709</td>
												 <td id="show">27,710</td>
												 <td id="show">54,419</td>
												 <td class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpri class-hide-med hide-ini" id="medprigen" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;General
												 </td>
												 <td  id="show">23,792</td>
												 <td  id="show">21,393</td>
												 <td  id="show">45,185</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpri class-hide-med hide-ini" id="medpritec" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Bachillerato&nbsp;Tecnológico
												 </td>
												 <td  id="show">1,076</td>
												 <td  id="show">983</td>
												 <td  id="show">2,059</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="nieto-medpri class-hide-med hide-ini" id="medpripro" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Profesional&nbsp;Técnico
												 </td>
												 <td  id="show">1,841</td>
												 <td  id="show">5,334</td>
												 <td  id="show">7,175</td>
												 <td  class="thtd_right" id="show">0</td>
											</tr>
											<tr class="parent" id="sup" title="Click para expander/contraer" style="cursor: pointer;">
												 <td id="mis_td">
														+ Superior
												 </td>
												 <td id="show">123,810</td>
												 <td id="show">129,287</td>
												 <td id="show">253,097</td>
												 <td class="thtd_right" id="show">n/d</td>
											</tr>
											<tr class="child-sup child-parent hide-ini" id="supuni" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Universitario&nbsp;y&nbsp;Tecnológico
												 </td>
												 <td id="show">111,636</td>
												 <td id="show">110,083</td>
												 <td id="show">221,719</td>
												 <td class="thtd_right" id="show">n/d</td>
											</tr>
											<tr class="nieto-supuni child-nieto class-hide-sup hide-ini" id="supunipub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;+Público
												 </td>
												 <td  id="show">36,303</td>
												 <td  id="show">25,677</td>
												 <td  id="show">61,980</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-supunipub class-hide-sup class-hide-supuni hide-ini" id="supunipubest" style="display: none;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Estatal
												 </td>
												 <td  id="show">28,749</td>
												 <td  id="show">21,861</td>
												 <td  id="show">50,610</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-supunipub class-hide-sup class-hide-supuni hide-ini" id="supunipubfed" style="display: none;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Federal
												 </td>
												 <td  id="show">7,554</td>
												 <td  id="show">3,816</td>
												 <td  id="show">11,370</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-supuni class-hide-sup hide-ini" id="supuniaut" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Autónomo
												 </td>
												 <td  id="show">29,865</td>
												 <td  id="show">33,313</td>
												 <td  id="show">63,178</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-supuni class-hide-sup hide-ini" id="supunipri" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Privado
												 </td>
												 <td  id="show">45,468</td>
												 <td  id="show">51,093</td>
												 <td  id="show">96,561</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="child-sup child-parent hide-ini" id="supnor" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Normal
												 </td>
												 <td id="show">1,455</td>
												 <td id="show">4,855</td>
												 <td id="show">6,310</td>
												 <td class="thtd_right" id="show">n/d</td>
											</tr>
											<tr class="nieto-supnor child-nieto class-hide-sup hide-ini" id="supnorpub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;+Público
												 </td>
												 <td  id="show">1,012</td>
												 <td  id="show">3,422</td>
												 <td  id="show">4,434</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-supnorpub class-hide-sup class-hide-supnor hide-ini" id="supnorpubest" style="display: none;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Estatal
												 </td>
												 <td  id="show">1,012</td>
												 <td  id="show">3,422</td>
												 <td  id="show">4,434</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-supnor class-hide-sup hide-ini" id="supnorpri" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Privado
												 </td>
												 <td  id="show">443</td>
												 <td  id="show">1,433</td>
												 <td  id="show">1,876</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="child-sup child-parent hide-ini" id="suppos" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;+ Posgrado
												 </td>
												 <td id="show">10,719</td>
												 <td id="show">14,349</td>
												 <td id="show">25,068</td>
												 <td class="thtd_right" id="show">n/d</td>
											</tr>
											<tr class="nieto-suppos child-nieto class-hide-sup hide-ini" id="suppospub" title="Click para expander/contraer" style="display: none; cursor: pointer;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;+Público
												 </td>
												 <td  id="show">649</td>
												 <td  id="show">714</td>
												 <td  id="show">1,363</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-suppospub class-hide-sup class-hide-suppos hide-ini" id="suppospubest" style="display: none;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Estatal
												 </td>
												 <td  id="show">328</td>
												 <td  id="show">568</td>
												 <td  id="show">896</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="bisnieto-suppospub class-hide-sup class-hide-suppos hide-ini" id="suppospubfed" style="display: none;">
												 <td id="mis_td">
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Federal
												 </td>
												 <td  id="show">321</td>
												 <td  id="show">146</td>
												 <td  id="show">467</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-suppos class-hide-sup hide-ini" id="supposaut" style="display: none;">
												 <td id="mis_td" >
														&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Autónomo
												 </td>
												 <td  id="show">1,910</td>
												 <td  id="show">1,904</td>
												 <td  id="show">3,814</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>
											<tr class="nieto-suppos class-hide-sup hide-ini" id="suppospri" style="display: none;">
												 <td id="mis_td">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Privado</td>
												 <td  id="show">8,160</td>
												 <td  id="show">11,731</td>
												 <td  id="show">19,891</td>
												 <td class="thtd_right"  id="show">n/d</td>
											</tr>


								</tbody>
								<tfoot>
								<tr>
									<th colspan="10">
										<div class="callout callout-success">
											<p>Fuente: SEC Sonora con base en el Formato 911.</p>
										</div>
									</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<div class="panel box box-success">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
								Indicadores de Asistencia
							</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse">
						<div class="box-body">
							<table id="example2" class="table table-hover">
								<thead>
								<tr>
									<th rowspan="2" width="20%">Nivel Educativo</th>
									<th colspan="2">Cobertura</th>
									<th colspan="2">Absorción</th>
								</tr>
								<tr>
									<th width="20%">Tasa</th>
									<th width="20%">Posición</th>
									<th width="20%">Tasa</th>
									<th width="20%">Posición</th>
								</tr>
								</thead>
								<tbody>
									<tr id="total">
										<td id="mis_td">Preescolar</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Primaria</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Secundaria</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Media Superior</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Superior</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>

								</tbody>
								<tfoot>
								<tr>
									<th colspan="10">
										<div class="callout callout-success">
											<p>Fuente: SEC Sonora con base en el Formato 911.</p>
										</div>
									</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<div class="panel box box-danger">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
								Indicadores de Permanencia
							</a>
						</h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse">
						<div class="box-body">
							<table id="example2" class="table table-hover">
								<thead>
								<tr>
									<th rowspan="2" width="16%">Nivel Educativo</th>
									<th colspan="2">Retención</th>
									<th colspan="2">Aprovación</th>
									<th colspan="2">Eficiencia Terminal</th>
								</tr>
								<tr>
									<th width="14%">Tasa</th>
									<th width="14%">Posición</th>
									<th width="14%">Tasa</th>
									<th width="14%">Posición</th>
									<th width="14%">Tasa</th>
									<th width="14%">Posición</th>
								</tr>
								</thead>
								<tbody>
									<tr id="total">
										<td id="mis_td">Preescolar</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Primaria</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Secundaria</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Media Superior</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Superior</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>

								</tbody>
								<tfoot>
								<tr>
									<th colspan="10">
										<div class="callout callout-success">
											<p>Fuente: SEC Sonora con base en el Formato 911.</p>
										</div>
									</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<div class="panel box box-success">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
								Indicadores de Aprendizaje 2014-2015
							</a>
						</h4>
					</div>
					<div id="collapseSix" class="panel-collapse collapse">
						<div class="box-body">
							<table id="example2" class="table table-hover">
								<thead>
								<tr>
									<th rowspan="2">Resultados de la prueba Planea</th>
									<th colspan="5">Lenguaje y Comunicación</th>
									<th colspan="5">Matemáticas</th>
								</tr>
								<tr>
									<th colspan="4">Nivel de dominio</th>
									<th rowspan="2" width="9%">Porcentaje de alumnos con nivel bueno y excelente</th>
									<th colspan="4">Nivel de dominio</th>
									<th rowspan="2" width="9%">Porcentaje de alumnos con nivel bueno y excelente</th>
								</tr>
								<tr>
									<th width="9%">Nivel</th>
									<th width="9%">I</th>
									<th width="9%">II</th>
									<th width="9%">III</th>
									<th width="9%">IV</th>

									<th width="9%">I</th>
									<th width="9%">II</th>
									<th width="9%">III</th>
									<th width="9%">IV</th>
								</tr>
								</thead>
								<tbody>
									<tr id="total">
										<td id="mis_td">Primaria</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Secundaria</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Media Superior</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>

								</tbody>
								<tfoot>
								<tr>
									<th colspan="10">
										<div class="callout callout-success">
											<p>Fuente: SEC Sonora con base en el Formato 911.</p>
										</div>
									</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<div class="panel box box-danger">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
								Rezago Educativo (2010)
							</a>
						</h4>
					</div>
					<div id="collapseSeven" class="panel-collapse collapse">
						<div class="box-body">
							<table id="example2" class="table table-hover">
								<thead>
								<tr>
									<th>Inasistencia Escolar</th>
									<th colspan="3">Población Total</th>
									<th colspan="3">Población que no asiste a la escuela</th>
								</tr>
								<tr>
									<th width="16%">Población por grupo de edad que no asiste a la escuela</th>
									<th width="14%" ><i class="fa fa-male"></i></th>
									<th width="14%" ><i class="fa fa-female"></i></th>
									<th width="14%" ><i class="fa fa-male"></i><i class="fa fa-female"></i></th>
									<th width="14%" ><i class="fa fa-male"></i></th>
									<th width="14%" ><i class="fa fa-female"></i></th>
									<th width="14%" ><i class="fa fa-male"></i><i class="fa fa-female"></i></th>
								</tr>
								</thead>
								<tbody>
									<tr id="total">
										<td id="mis_td">Preescolar</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Primaria</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Secundaria</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Media Superior</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>
									<tr id="total">
										<td id="mis_td">Superior</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
										<td class="thtd_right" id="show">n/a</td>
									</tr>

								</tbody>
								<tfoot>
								<tr>
									<th colspan="10">
										<div class="callout callout-success">
											<p>Fuente: SEC Sonora con base en el Formato 911.</p>
										</div>
									</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<div class="panel box box-danger">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
								Analfabetismo (2010)
							</a>
						</h4>
					</div>
					<div id="collapseEight" class="panel-collapse collapse">
						<div class="box-body">
							<table id="example2" class="table table-hover">
								<thead>
								<tr>
									<th width="25%"></th>
									<th width="25%"><i class="fa fa-male"></i></th>
									<th width="25%"><i class="fa fa-female"></i></th>
									<th width="25%"><i class="fa fa-male"></i><i class="fa fa-female"></i></th>
								</tr>
								</thead>
								<tbody>
									<tr id="total">
										<td id="mis_td">Población mayor de 15 años que no saben leer ni escribir</td>
										<td id="show">92.9%</td>
										<td id="show">n/a</td>
										<td id="show">92.9%</td>
									</tr>
								</tbody>
								<tfoot>
								<tr>
									<th colspan="10">
										<div class="callout callout-success">
											<p>Fuente: SEC Sonora con base en el Formato 911.</p>
										</div>
									</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="content" style="padding-left:22px">
			<div id="wrapper_contents2">
				<section>
					<div class="contents">
							<div class="middle">
								<div id="pagina">
									<header>

								<a href="#openModalexcel">
									<div id="boton_reporte" style="padding-top:5px;">
										<center><strong>Generar Reporte en Excel</strong></center>
									</div>
								</a>
								<div id="openModalexcel" class="modalDialog">
									<div>
										<a href="#close" title="Close" class="close">X</a>
										<div id="excel" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<form action="ficheroExcel.php" method="post" id="FormularioExportacion" class="form-inline">
												<div class="modal-header">
													<h3 id="myModalLabel" align="center">Guardar como</h3>
												</div>
												<div class="modal-body" align="center">
													<input type="text" name="nombre" autocomplete="off" placeholder="Nombre del Fichero" value="" required><br>
													<strong>Tipo de archivo: </strong><br>
													<select name="imp">
														<option value="excel">Excel</option>
														<!--<option value="pdf">Archivo PDF</option>-->
													</select>
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn botonExcel"><i class="icon-print"></i><strong>Guardar</strong></button>
													<input type="hidden" id="datos_a_enviar" name="datos_a_enviar"/>
												</div>
											</form>
										</div>
									</div>

								</div>
								<!--*********************************-Modalbox-********************************-->
								<div id="openModal_1" class="modalDialog">
									<div>
										<a href="#close" title="Close" class="close">X</a>
										<h2>Cobertura:</h2>
										<p>
											<b>Porcentaje de alumnos en edades idóneas o típica para cursar educación básica, media superior y superior, inscritos en el nivel o tipo educativo correspondiente al inicio del ciclo escolar, por cada cien personas de la población en esas edades. <br>
											<b>Fuente: INEE</b>
										</p>
									</div>
								</div>
								<div id="openModal_2" class="modalDialog">
									<div>
										<a href="#close" title="Close" class="close">X</a>
										<h2>Absorción:</h2>
										<p>
											<b>Porcentaje de alumnos de nuevo ingreso al primer grado de secundaria, media superior o superior en un determinado ciclo escolar por cada cien egresados del nivel educativo precedente del ciclo escolar previo.<b><br>
											<b>Fuente: INEE</b>
										</p>
									</div>
								</div>
								<div id="openModal_3" class="modalDialog">
									<div>
										<a href="#close" title="Close" class="close">X</a>
										<h2>Retención:</h2>
										<p>
											<b>Porcentaje de alumnos que permanecen en la escuela entre ciclos escolares consecutivos antes de concluir el nivel educativo de referencia, por cada cien alumnos matriculados al inicio del ciclo escolar.</b><br>
											<b>Fuente: INEE</b>
										</p>
									</div>
								</div>
								<div id="openModal_4" class="modalDialog">
									<div>
										<a href="#close" title="Close" class="close">X</a>
										<h2>Aprobación:</h2>
										<p>
											<b>Porcentaje de alumnos aprobados de un determinado grado, por cada cien alumnos que están matriculados al final del ciclo escolar.<br>
											<b>Fuente: INEE</b></b>
										</p>
									</div>
								</div>
								<div id="openModal_5" class="modalDialog">
									<div>
										<a href="#close" title="Close" class="close">X</a>
										<h2>Eficiencia Terminal:</h2>
										<p>
											<b>Porcentaje de alumnos que egresan de cierto nivel o tipo educativo en un determinado ciclo escolar por cada cien alumnos de nuevo ingreso, inscritos tantos ciclos escolares atrás como dure el nivel o tipo educativo en cuestión.</b>
											<br>
											Fuente: INEE</b>
										</p>
									</div>
								</div>
								<div id="openModal_6" class="modalDialog">
									<div>
										<a href="#close" title="Close" class="close">X</a>
										<h2>Posición:</h2>
										<p>
											<b>La posición aplica para los municipios, y se refiere al lugar que ocupa el municipio seleccionado entre los 217 municipios del estado con base en el desempeño del indicador.<b>
										</p>
									</div>
								</div>

							<br>
							<p>
								Notas:
							</p>
							<ul>
								<li><b>La estadística solo incluye las escuelas que presentarón su información al inicio de cursos 2014-2015.</b></li>
							</ul>

							</header>
						</div>
						</div>
						<div class="bottom">
						</div>
						</div>
						</section>
					</div>
					<!-- End contents -->
				</section>
				<!-- /.content -->
			</div>