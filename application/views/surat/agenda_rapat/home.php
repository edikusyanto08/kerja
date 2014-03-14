<?php $this->load->view( 'common/meta', array( 'title' => 'Agenda Rapat' ) ); ?><body><?php $this->load->view( 'common/header'); ?><div class="content">	<?php $this->load->view( 'common/sidebar'); ?>	<div class="hide">		<input type="hidden" name="agenda_rapat_id" value="0" />		<div class="cnt-data"><?php echo json_encode($page_data); ?></div>	</div>	  	<div class="mainbar">	    <div class="page-head">			<h2 class="pull-left button-back">Agenda Rapat</h2>			<div class="clearfix"></div>		</div>			    <div class="matter"><div class="container">            <div class="row"><div class="col-md-12">								<div class="widget grid-main">					<div class="widget-head">						<div class="pull-left">							<button class="btn btn-info btn-xs btn-add">Tambah</button>						</div>						<div class="widget-icons pull-right">							<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>							<a href="#" class="wclose"><i class="fa fa-times"></i></a>						</div>						<div class="clearfix"></div>					</div>					<div class="widget-content">						<table id="datatable" class="table table-striped table-bordered table-hover">							<thead>								<tr>									<th>Leading Sektor</th>									<th>No Surat</th>									<th>Tempat</th>									<th>Tanggal Ajuan</th>									<th class="center">Control</th>								</tr>							</thead>							<tbody></tbody>						</table>						<div class="widget-foot">							<br /><br />							<div class="clearfix"></div> 						</div>					</div>				</div>								<h3 class="grid-spkd hide">Undangan Surat - <span>&nbsp;</span></h3>				<div class="widget grid-spkd hide">					<div class="widget-head">						<div class="pull-left">							<button class="btn btn-info btn-xs btn-add-skpd">Tambah</button>						</div>						<div class="widget-icons pull-right">							<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>							<a href="#" class="wclose"><i class="fa fa-times"></i></a>						</div>						<div class="clearfix"></div>					</div>					<div class="widget-content">						<table id="dt-agenda-skpd" class="table table-striped table-bordered table-hover">							<thead>								<tr>									<th class="center">Nama</th>									<th>Kepada</th>									<th>Instansi</th>									<th class="center">Control</th>								</tr>							</thead>							<tbody></tbody>						</table>						<div class="widget-foot">							<br /><br />							<div class="clearfix"></div> 						</div>					</div>				</div>								<div class="widget hide" id="form-surat">					<div class="widget-head">						<div class="pull-left">Form Agenda Rapat</div>						<div class="widget-icons pull-right">							<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>							<a href="#" class="wclose"><i class="fa fa-times"></i></a>						</div>						<div class="clearfix"></div>					</div>										<div class="widget-content">						<div class="padd"><form class="form-horizontal">							<input type="hidden" name="action" value="update" />							<input type="hidden" name="id" value="0" />														<div class="form-group">								<label class="col-lg-2 control-label">Leading Sektor</label>								<div class="col-lg-10">									<input type="text" name="leading_sektor" class="form-control" placeholder="Leading Sektor" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">No Surat</label>								<div class="col-lg-10">									<input type="text" name="no_surat" class="form-control" placeholder="No Surat" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Tempat</label>								<div class="col-lg-10">									<input type="text" name="tempat" class="form-control" placeholder="Tempat" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Tanggal Ajuan</label>								<div class="col-lg-10">									<div class="input-append datepicker">										<input name="tanggal_ajuan_date" type="text" class="form-control dtpicker" placeholder="Tanggal Ajuan" data-format="dd-MM-yyyy" />										<span class="add-on"><i data-time-icon="fa fa-time" data-date-icon="fa fa-calendar" class="btn btn-info"></i></span>									</div>								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Waktu Ajuan</label>								<div class="col-lg-10">									<div class="input-append timepicker">										<input name="tanggal_ajuan_time" type="text" class="form-control tmpicker" placeholder="Waktu Ajuan" data-format="hh:mm:ss" />										<span class="add-on"><i data-time-icon="fa fa-clock-o" data-date-icon="fa fa-calendar" class="btn btn-info"></i></span>									</div>								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Tanggal Undangan</label>								<div class="col-lg-10">									<div class="input-append datepicker">										<input name="tanggal_undangan" type="text" class="form-control dtpicker" placeholder="Tanggal Undangan" data-format="dd-MM-yyyy" />										<span class="add-on"><i data-time-icon="fa fa-time" data-date-icon="fa fa-calendar" class="btn btn-info"></i></span>									</div>								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Pimpinan Rapat</label>								<div class="col-lg-10">									<input type="text" name="pimpinan_rapat" class="form-control" placeholder="Pimpinan Rapat" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Pakaian</label>								<div class="col-lg-10">									<input type="text" name="pakaian" class="form-control" placeholder="Pakaian" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Catatan</label>								<div class="col-lg-10">									<input type="text" name="catatan" class="form-control" placeholder="Catatan" />								</div>							</div>							<div class="form-group">								<label class="col-lg-2 control-label">Keterangan</label>								<div class="col-lg-10">									<input type="text" name="keterangan" class="form-control" placeholder="Keterangan" />								</div>							</div>														<hr />							<div class="form-group">								<div class="col-lg-offset-2 col-lg-9">									<button type="submit" class="btn btn-info">Save</button>									<button type="button" class="btn btn-info btn-show-grid">Cancel</button>								</div>							</div>						</form></div>					</div>				</div>  							</div></div>        </div></div>    </div>	<div class="clearfix"></div>		<div id="form-skpd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-big"><div class="modal-content">		<div class="modal-header">			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			<h4 class="modal-title">Form SKPD</h4>		</div>		<div class="modal-body"><div class="widget-content">			<div class="padd">				<div class="widget grid-spkd hide">					<div class="widget-head">						<div class="pull-left">&nbsp;</div>						<div class="widget-icons pull-right">&nbsp;</div>						<div class="clearfix"></div>					</div>					<div class="widget-content">						<table id="dt-skpd" class="table table-striped table-bordered table-hover">							<thead>								<tr>									<th class="center">Nama</th>									<th>Kepada</th>									<th>Instansi</th>									<th class="center">Control</th>								</tr>							</thead>							<tbody></tbody>						</table>						<div class="widget-foot">							<br /><br />							<div class="clearfix"></div> 						</div>					</div>				</div>			</div>		</div></div>		<div class="modal-footer">&nbsp;</div>	</div></div></div>		<div id="form-sms" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-big"><div class="modal-content"><form>		<div class="modal-header">			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			<h4 class="modal-title">Form SMS</h4>		</div>		<div class="modal-body"><div class="widget-content">			<div class="padd"><div class="form-horizontal">				<input type="hidden" name="action" value="sent_sms" />				<input type="hidden" name="agenda_rapat_id" value="0" />								<div class="form-group">					<label class="col-lg-2 control-label">Isi SMS</label>					<div class="col-lg-10">						<textarea name="message" class="form-control" placeholder="Isi SMS"></textarea>					</div>				</div>							</div></div>		</div></div>		<div class="modal-footer">			<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>			<button type="submit" class="btn btn-primary">Sent</button>		</div>	</form></div></div></div>	</div><?php $this->load->view( 'common/footer' ); ?><?php $this->load->view( 'common/library_js'); ?><script>$(document).ready(function() {	var page = {		show_grid: function() {			$('.grid-main').show();			$('#form-surat').hide();		},		show_form: function() {			$('.grid-main').hide();			$('.grid-spkd').hide();			$('#form-surat').show();		}	}		// global	$('.btn-show-grid').click(function() {		page.show_grid();	});		// grid	var dt_param = {		id: 'datatable',		source: web.host + 'surat/agenda_rapat/home/grid',		column: [ { }, { }, { }, { sClass: "center" }, { bSortable: false, sClass: "center" } ],		fnServerParams: function ( aoData ) {			aoData.push(				{ "name": "action", "value": 'agenda_rapat' }			)		},		callback: function() {			$('#datatable .btn-edit').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								Func.ajax({ url: web.host + 'surat/agenda_rapat/home/action', param: { action: 'get_by_id', id: record.id }, callback: function(result) {					Func.populate({ cnt: '#form-surat', record: result });					$('#form-surat form').valid();					page.show_form();				} });			});						$('#datatable .btn-sms').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								$('#form-sms [name="agenda_rapat_id"]').val(record.id);				$('#form-sms').modal();			});						$('#datatable .btn-skpd').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);				$('[name="agenda_rapat_id"]').val(record.id);								// show skpd				$('h3.grid-spkd span').text(record.leading_sektor);				$('.grid-spkd').show();				dt_agenda_skpd.reload();			});						$('#datatable .btn-delete').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								Func.form.del({					data: { action: 'delete', id: record.id },					url: web.host + 'surat/agenda_rapat/home/action', callback: function() { dt.reload(); }				});			});		}	}	var dt = Func.datatable(dt_param);		// grid agenda skpd	var agenda_skpd_param = {		id: 'dt-agenda-skpd',		source: web.host + 'surat/agenda_rapat/home/grid',		column: [ { }, { }, { }, { bSortable: false, sClass: "center" } ],		fnServerParams: function ( aoData ) {			aoData.push(				{ "name": "action", "value": 'skpd' },				{ "name": "agenda_rapat_id", "value": $('[name="agenda_rapat_id"]').val() }			)		},		callback: function() {			$('#dt-agenda-skpd .btn-delete').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								Func.form.del({					data: { action: 'skpd_delete', id: record.id },					url: web.host + 'surat/agenda_rapat/home/action', callback: function() { dt_agenda_skpd.reload(); }				});			});		}	}	var dt_agenda_skpd = Func.datatable(agenda_skpd_param);		// grid skpd	var skpd_param = {		id: 'dt-skpd',		source: web.host + 'master/skpd/grid',		column: [ { }, { }, { }, { bSortable: false, sClass: "center" } ],		fnServerParams: function ( aoData ) {			aoData.push(				{ "name": "grid_type", "value": 'search' }			)		},		callback: function() {			$('#dt-skpd .btn-add').click(function() {				var raw_record = $(this).siblings('.hide').text();				eval('var record = ' + raw_record);								Func.form.submit({					url: web.host + 'surat/agenda_rapat/home/action',					param: { action: 'skpd_update', skpd_id: record.id, agenda_rapat_id: $('[name="agenda_rapat_id"]').val() },					callback: function(result) {						dt_agenda_skpd.reload();					}				});			});		}	}	var dt_skpd = Func.datatable(skpd_param);		// form surat	$('.btn-add').click(function() {		page.show_form();		$('#form-surat form')[0].reset();		$('#form-surat [name="id"]').val(0);	});	$('#form-surat form').validate({		rules: {			leading_sektor: { required: true },			no_surat: { required: true },			tempat: { required: true },			tanggal_ajuan_date: { required: true },			tanggal_ajuan_time: { required: true }		}	});	$('#form-surat form').submit(function(e) {		e.preventDefault();		if (! $('#form-surat form').valid()) {			return false;		}				var param = Func.form.get_value('form-surat');		param.tanggal_ajuan = param.tanggal_ajuan_date + ' ' + param.tanggal_ajuan_time;		Func.form.submit({			url: web.host + 'surat/agenda_rapat/home/action',			param: param,			callback: function(result) {				dt.reload();				page.show_grid();				$('#form-surat form')[0].reset();			}		});	});		// form skpd	$('.btn-add-skpd').click(function() {		$('#form-skpd [name="id"]').val(0);		$('#form-skpd').modal();	});		// form sms	$('#form-sms form').validate({		rules: {			message: { required: true }		}	});	$('#form-sms form').submit(function(e) {		e.preventDefault();		if (! $('#form-sms form').valid()) {			return false;		}				Func.form.submit({			url: web.host + 'surat/agenda_rapat/home/action',			param: Func.form.get_value('form-sms'),			callback: function(result) {				$('#form-sms').modal('hide');			}		});	});});</script></body></html>