<?php	$array_nota_dinas_kepada = $this->nota_dinas_kepada_model->get_array(array( 'limit' => 100 ));?><?php $this->load->view( 'common/meta', array( 'title' => 'Nota Dinas' ) ); ?><body><?php $this->load->view( 'common/header'); ?><div class="content enlarged">	<?php $this->load->view( 'common/sidebar'); ?>	<div class="hide">		<input type="hidden" name="nota_dinas_id" value="0" />		<div class="cnt-data"><?php echo json_encode($page_data); ?></div>		<iframe name="iframe_file_surat" src="<?php echo base_url('upload?callback=set_file_surat'); ?>"></iframe>	</div>	  	<div class="mainbar">	    <div class="page-head">			<h2 class="pull-left button-back">Nota Dinas</h2>			<div class="clearfix"></div>		</div>			    <div class="matter"><div class="container">            <div class="row"><div class="col-md-12">								<div class="widget grid-main">					<div class="widget-head">						<div class="pull-left">							<button class="btn btn-info btn-xs btn-add">Tambah</button>						</div>						<div class="widget-icons pull-right">							<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>							<a href="#" class="wclose"><i class="fa fa-times"></i></a>						</div>						<div class="clearfix"></div>					</div>					<div class="widget-content">						<table id="datatable" class="table table-striped table-bordered table-hover">							<thead>								<tr>									<th>No Urut</th>									<th>No Surat</th>									<th>Surat Dari</th>									<th>Perihal</th>									<th>Tanggal Surat</th>									<th class="center">Control</th>								</tr>							</thead>							<tbody></tbody>						</table>						<div class="widget-foot">							<br /><br />							<div class="clearfix"></div> 						</div>					</div>				</div>								<h3 class="grid-disposisi hide">Disposisi Nota Dinas - <span>&nbsp;</span></h3>				<div class="widget grid-disposisi hide">					<div class="widget-head">						<div class="pull-left">							<button class="btn btn-info btn-xs btn-add-disposisi">Tambah</button>						</div>						<div class="widget-icons pull-right">							<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>							<a href="#" class="wclose"><i class="fa fa-times"></i></a>						</div>						<div class="clearfix"></div>					</div>					<div class="widget-content">						<table id="dt-disposisi" class="table table-striped table-bordered table-hover">							<thead>								<tr>									<th class="center">Waktu</th>									<th>Kepada</th>									<th>Keterangan</th>									<th class="center">Control</th>								</tr>							</thead>							<tbody></tbody>						</table>						<div class="widget-foot">							<br /><br />							<div class="clearfix"></div> 						</div>					</div>				</div>								<div class="widget hide" id="form-surat">					<div class="widget-head">						<div class="pull-left">Form Nota Dinas</div>						<div class="widget-icons pull-right">							<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>							<a href="#" class="wclose"><i class="fa fa-times"></i></a>						</div>						<div class="clearfix"></div>					</div>										<div class="widget-content">						<div class="padd"><form class="form-horizontal">							<input type="hidden" name="action" value="update" />							<input type="hidden" name="id" value="0" />														<div class="form-group">								<label class="col-lg-2 control-label">No Urut</label>								<div class="col-lg-10">									<input type="text" name="no_urut" class="form-control" placeholder="No Urut" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">No Surat</label>								<div class="col-lg-10">									<input type="text" name="no_surat" class="form-control" placeholder="No Surat" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Surat Dari</label>								<div class="col-lg-10">									<input type="text" name="surat_dari" class="form-control" placeholder="Surat Dari" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Disediakan Kepada</label>								<div class="col-lg-10">									<input type="text" name="disposisi_kepada" class="form-control" placeholder="Disposisi Kepada" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Perihal</label>								<div class="col-lg-10">									<input type="text" name="perihal" class="form-control" placeholder="Perihal" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Posisi</label>								<div class="col-lg-10">									<input type="text" name="posisi" class="form-control" placeholder="Posisi" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Tanggal Disposisi</label>								<div class="col-lg-10">									<div class="input-append datepicker">										<input name="tanggal_disposisi" type="text" class="form-control dtpicker" placeholder="Tanggal Disposisi" data-format="dd-MM-yyyy" />										<span class="add-on"><i data-time-icon="fa fa-time" data-date-icon="fa fa-calendar" class="btn btn-info"></i></span>									</div>								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Tanggal Surat</label>								<div class="col-lg-10">									<div class="input-append datepicker">										<input name="tanggal_surat" type="text" class="form-control dtpicker" placeholder="Tanggal Surat" data-format="dd-MM-yyyy" />										<span class="add-on"><i data-time-icon="fa fa-time" data-date-icon="fa fa-calendar" class="btn btn-info"></i></span>									</div>								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Tanggal Terima</label>								<div class="col-lg-2">									<div class="input-append datepicker">										<input name="tanggal_terima_date" type="text" class="form-control dtpicker" placeholder="Tanggal Ajuan" data-format="dd-MM-yyyy" />										<span class="add-on"><i data-time-icon="fa fa-time" data-date-icon="fa fa-calendar" class="btn btn-info"></i></span>									</div>								</div>								<label class="col-lg-2 control-label">Waktu Terima</label>								<div class="col-lg-2">									<div class="input-append timepicker">										<input name="tanggal_terima_time" type="text" class="form-control tmpicker" data-format="hh:mm:ss" />										<span class="add-on"><i data-time-icon="fa fa-clock-o" data-date-icon="fa fa-calendar" class="btn btn-info"></i></span>									</div>								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Catatan</label>								<div class="col-lg-10">									<input type="text" name="catatan" class="form-control" placeholder="Catatan" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">File Surat</label>								<div class="col-lg-4">									<input type="text" name="file_surat" class="form-control" placeholder="File Surat" />								</div>								<div class="col-lg-2">									<input type="button" class="btn btn-primary btn-browse-file-surat" value="Browse" />									<input type="button" class="btn btn-primary btn-check-file" value="Check" />								</div>							</div>														<hr />							<div class="form-group">								<div class="col-lg-offset-2 col-lg-9">									<button type="submit" class="btn btn-info">Save</button>									<button type="button" class="btn btn-info btn-show-grid">Cancel</button>								</div>							</div>						</form></div>					</div>				</div>  							</div></div>        </div></div>    </div>	<div class="clearfix"></div>		<div id="form-disposisi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-big"><div class="modal-content"><form>		<div class="modal-header">			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			<h4 class="modal-title">Form Disposisi</h4>		</div>		<div class="modal-body"><div class="widget-content">			<div class="padd"><div class="form-horizontal">				<input type="hidden" name="action" value="disposisi_update" />				<input type="hidden" name="id" value="0" />								<div class="form-group">					<label class="col-lg-2 control-label">Kepada</label>					<div class="col-lg-10">						<select class="form-control" name="nota_dinas_kepada_id">							<?php echo ShowOption(array( 'Array' => $array_nota_dinas_kepada )); ?>						</select>					</div>				</div>							</div></div>		</div></div>		<div class="modal-footer">			<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>			<button type="submit" class="btn btn-primary">Save changes</button>		</div>	</form></div></div></div>	</div><?php $this->load->view( 'common/footer' ); ?><?php $this->load->view( 'common/library_js'); ?><script>$(document).ready(function() {	var dt = null;	var page = {		show_grid: function() {			$('.grid-main').show();			$('#form-surat').hide();		},		show_form: function() {			$('.grid-main').hide();			$('.grid-disposisi').hide();			$('#form-surat').show();		}	}		// global	$('.btn-show-grid').click(function() {		page.show_grid();	});		// upload	$('.btn-browse-file-surat').click(function() { window.iframe_file_surat.browse() });	set_file_surat = function(p) {		$('#form-surat [name="file_surat"]').val(p.file_name);	}		// grid nota dinas	var param = {		id: 'datatable', aaSorting: [[0, 'desc']],		source: web.host + 'surat/nota_dinas/home/grid',		column: [ { }, { }, { }, { }, { }, { bSortable: false, sClass: "center" } ],		fnServerParams: function ( aoData ) {			aoData.push(				{ "name": "action", "value": 'nota_dinas' }			)		},		callback: function() {			$('#datatable .btn-edit').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								Func.ajax({ url: web.host + 'surat/nota_dinas/home/action', param: { action: 'get_by_id', id: record.id }, callback: function(result) {					Func.populate({ cnt: '#form-surat', record: result });					$('#form-surat form').valid();					page.show_form();				} });			});						$('#datatable .btn-disposisi').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);				$('[name="nota_dinas_id"]').val(record.id);								// show disposisi				$('h3.grid-disposisi span').text(record.no_surat);				$('.grid-disposisi').show();				dt_disposisi.reload();			});						$('#datatable .btn-delete').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								Func.form.del({					data: { action: 'delete', id: record.id },					url: web.host + 'surat/nota_dinas/home/action', callback: function() { dt.reload(); }				});			});		}	}	dt = Func.datatable(param);		// grid disposisi	var disposisi_param = {		id: 'dt-disposisi', aaSorting: [[0, 'asc']],		source: web.host + 'surat/nota_dinas/home/grid',		column: [ { sClass: "center" }, { }, { sClass: "center" }, { bSortable: false, sClass: "center" } ],		fnServerParams: function ( aoData ) {			aoData.push(				{ "name": "action", "value": 'nota_dinas_disposisi' },				{ "name": "nota_dinas_id", "value": $('[name="nota_dinas_id"]').val() }			)		},		callback: function() {			// hide first validasi button			$('#dt-disposisi tbody tr').first().find('.btn-validasi').hide();						// coloring row			var counter = $('#dt-disposisi tbody tr').length;			if (counter > 0) {				for (var i = 0; i < counter; i++) {					var raw_record = $('#dt-disposisi tbody tr').eq(i).last('td').find('span.hide').text();					if (raw_record.length > 0) {						eval('var record = ' + raw_record);												// get color						var color = '';						var day = 24 * 60 * 60;						if (record.waktu_diff == '') {							color = '';						} else if (record.waktu_diff <= (day * 1)) {							color = '#66FF33';						} else if (record.waktu_diff <= (day * 2)) {							color = '#0099FF';						} else if (record.waktu_diff <= (day * 3)) {							color = '#FF9966';						} else {							color = '#FF7171';						}												if (color != '') {							$('#dt-disposisi tbody tr').eq(i).find('td').css('background', color);							$('#dt-disposisi tbody tr').eq(i).find('td').last().css('background', '');						}					}				}			}						$('#dt-disposisi .btn-edit').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								Func.ajax({ url: web.host + 'surat/nota_dinas/home/action', param: { action: 'disposisi_get_by_id', id: record.id }, callback: function(result) {					Func.populate({ cnt: '#form-disposisi', record: result });					$('#form-disposisi').modal();				} });			});						$('#dt-disposisi .btn-validasi').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								Func.ajax({ url: web.host + 'surat/nota_dinas/home/action', param: { action: 'disposisi_validasi', id: record.id }, callback: function(result) {					dt_disposisi.reload();				} });			});						$('#dt-disposisi .btn-delete').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								Func.form.del({					data: { action: 'disposisi_delete', id: record.id },					url: web.host + 'surat/nota_dinas/home/action', callback: function() { dt_disposisi.reload(); }				});			});		}	}	var dt_disposisi = Func.datatable(disposisi_param);		// form surat	$('.btn-add').click(function() {		page.show_form();		$('#form-surat form')[0].reset();		$('#form-surat [name="id"]').val(0);				// get next no urut		Func.ajax({ url: web.host + 'surat/nota_dinas/home/action', param: { action: 'get_next_no' }, callback: function(result) {			$('#form-surat [name="no_urut"]').val(result.next_no);		} });	});	$('#form-surat form').validate({		rules: {			no_surat: { required: true },			surat_dari: { required: true },			perihal: { required: true },			tanggal_surat: { required: true }		}	});	$('#form-surat form').submit(function(e) {		e.preventDefault();		if (! $('#form-surat form').valid()) {			return false;		}				var param = Func.form.get_value('form-surat');		param.tanggal_terima = param.tanggal_terima_date + ' ' + param.tanggal_terima_time;		Func.form.submit({			url: web.host + 'surat/nota_dinas/home/action',			param: param,			callback: function(result) {				dt.reload();				page.show_grid();				$('#form-surat form')[0].reset();			}		});	});		// form disposisi	$('.btn-add-disposisi').click(function() {		$('#form-disposisi [name="id"]').val(0);		$('#form-disposisi').modal();	});	$('#form-disposisi form').validate({		rules: {			kepada: { required: true }		}	});	$('#form-disposisi form').submit(function(e) {		e.preventDefault();		if (! $('#form-disposisi form').valid()) {			return false;		}				var param = Func.form.get_value('form-disposisi');		param.nota_dinas_id = $('[name="nota_dinas_id"]').val();		Func.form.submit({			url: web.host + 'surat/nota_dinas/home/action',			param: param,			callback: function(result) {				dt_disposisi.reload();				$('#form-disposisi').modal('hide');				$('#form-disposisi form')[0].reset();			}		});	});	});</script></body></html>