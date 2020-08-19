function pro_home() {
	$("#mainpage").load("project/home_pro.php");
	localStorage.clear();
}
function users_home() {
	$("#mainpage").load("users/home_user.php");
}
function type_home() {
	$("#mainpage").load("project/home_type.php");
}
function sum_show() {
	$("#mainpage").load("summary/summary.php");
}
function cald_show() {
	$("#mainpage").load("summary/calendar.php");
}
function gantt_show() {
	$("#mainpage").load("summary/gantcharte_enter.php");
}

function reload(id) {
	$("#comtable").load("project/commit_table.php",{ id : id});
}
function teaml(id) {
	$("#team").load("project/edit_team_show.php",{ id : id});
}
function uploadprot(id) {
	$("#uploadtable").load("project/Upload_pro_table.php",{ id : id});
}
function comload(id) {
	$("#filec").load("project/file_commit",{ id : id });
}
function typeshow() {
	$("#type").load("project/type_show.php");
}

function showscreen(){
	var windowWidth = 1450;
	var windowHeight = 900;
	window.resizeTo(windowWidth,windowHeight);
	var xPos = screen.width - (windowWidth*4);
	var yPos = screen.height - (windowHeight*2);
	window.moveTo(xPos, yPos);
	window.focus();
}

function checkKey(n){

	if (window.event.keyCode == 13){ //Enter
		if( (n=="user1") && ($('#user1').val() != '') ){
		  //alert("test enter");
		  $('#pass1').focus();
		}
		if( (n=="pass1") && ($('#pass1').val() !='' ) ){
		  //alert(n);
		  login();
		}
		//schstock();
	}else if(window.event.keyCode == 37){ //Left
		//ChkKeyLeft(n,i)
	}else if(window.event.keyCode == 38){ //Up
		//ChkKeyUp(n,i);
	}else if(window.event.keyCode == 39){ //Right
		//ChkKeyRight(n,i);
	}else if(window.event.keyCode == 40){ //Down
		//ChkKeyDown(n,i);
	}else{

	}
  }
function login() {
   // alert("test");
    var username = $("#user1").val();
    var password = $("#pass1").val();
    var data = "user1=" + username + "&pass1=" + password;
	if(username != '' && password != '')
	{
		$.ajax({
			type: "POST",
			url: "systems/login_check.php",
			cache: false,
			data: data,
			success: function(msg){
				//alert(msg);
				if(msg=='Y'){
					window.location.href = "index.php";
				}else{
					$('#username').focus();
					$('#username').select();
					$("#alertlog").html(msg);
				}
			},
			error: function(){
				//
			},
			complete: function(){
				//
			}
		});
	}else{
		$("#alertlog").html('กรุณากรอกข้อมูล');
	}

}

function logout(){
	$.ajax({
		type: "POST",
		url: "systems/logout.php",
		cache: false,
		data: "",
		success: function(msg){
			if(msg=='Y'){
				window.location.href = "login.php";
			}else{
				//
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});
}
//-------------User
function btn_add_user() {
	BootstrapDialog.show({
		title: 'New User',
		message: $('<div></div>').load('users/add_user.php'),
		buttons: [{
			label: 'Add User',
			// no title as it is optional
			cssClass: 'btn-primary',
			action: function(dialogItself){
				adduser();
				dialogItself.close();
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_edit_user(id) {
	BootstrapDialog.show({
		title: 'Edit User',
		message:  $('<div></div>').load('users/edit_user.php',{ id : id}),
		buttons: [{
			label: 'Edit User',
			// no title as it is optional
			cssClass: 'btn-warning',
			action: function(dialogItself){
				edituser(id);
				dialogItself.close();
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_chan_pass(id) {
	BootstrapDialog.show({
		title: 'Change Password',
		message:  $('<div></div>').load('systems/chan_pass.php',{ id : id}),
		buttons: [{
			label: 'Change Password',
			// no title as it is optional
			cssClass: 'btn-warning',
			action: function(dialogItself){
				chan_pass(id);
				dialogItself.close();
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_delete_user(iddel,name) {
	//alert(iddel + ',' + name);
	BootstrapDialog.show({
		title: 'Delete User',
		message: "<h3 class='text-danger'>คุณต้องการลบ " + name + " ? </h3>",
		buttons: [{
			label: 'Delete User',
			// no title as it is optional
			cssClass: 'btn-danger',
			action: function(dialogItself){
				deleteuser(iddel);
				dialogItself.close();
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}
//-------------------
function adduser() {
	var useru = $("#useru").val();
	var passu = $("#passu").val();
	var nameu = $("#nameu").val();
	var statusu = $("#statusu").val();
	var data = "useru=" + useru + "&passu=" + passu + "&nameu=" + nameu +"&statusu=" + statusu;
	//alert(data);
	if(useru != '' && passu != '' && nameu != ''){
	$.ajax({
		type: "POST",
		url: "users/add_user_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				users_home();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});}else{
		$("#test").html('กรุณากรอกข้อมูลให้ครบ');
	}

}

function edituser(idedit) {
	//alert(idedit);
	var userue = $("#userue").val();
	var passue = $("#passue").val();
	var nameue = $("#nameue").val();
	var statusue = $("#statusue").val();
	//alert("ทดสอบ" + statusue);
	var data = "userue=" + userue + "&passue=" + passue + "&nameue=" + nameue +"&statusue=" + statusue + "&id=" +idedit;
	//alert(data);
	if(userue != '' && passue != '' && nameue != ''){
	$.ajax({
		type: "POST",
		url: "users/edit_user_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				users_home();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});}else{
		$("#test").html('กรุณากรอกข้อมูลให้ครบ');
	}

}

function chan_pass(id) {
	//alert(id);
	var chpass = $("#chpass").val();
	var data = "chpass=" + chpass + "&id=" + id;
	$.ajax({
		type: "POST",
		url: "systems/chan_pass_pro.php",
		cache: false,
		data:data,
		success: function (msg) {
			//alert(msg);
			if(msg == 'Y'){
				BootstrapDialog.alert('เปลียนรหัสเรียบร้อย');
			}else{
				BootstrapDialog.alert(msg);
			}
		}
	});
}

function deleteuser(iddelete) {
	//alert(iddelete);
	var data = "id=" + iddelete;
	//alert("ทดสอบ" + data);
	if(data != '' ){
	$.ajax({
		type: "POST",
		url: "users/delete_user.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				users_home();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});}else{
		BootstrapDialog.show({
			type:BootstrapDialog.TYPE_DANGER,
			title: 'Delete Error',
			message: 'Error',
			buttons: [{
				label: 'Close',
				action: function(dialogItself){
					dialogItself.close();
				}
			}],
			draggable: true,
			closable:false
		});
	}

}
//--------------User End
//---------pro
function btn_add_pro() {
	BootstrapDialog.show({
		size: BootstrapDialog.SIZE_WIDE,
		title: 'New Project',
		message: $('<div></div>').load('project/add_proj.php'),
		buttons: [{
			label: 'Add Project',
			// no title as it is optional
			cssClass: 'btn-primary',
			action: function(dialogItself){
				addpro();
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_upload_view(idup,name) {
	BootstrapDialog.show({
		size: BootstrapDialog.SIZE_WIDE,
		title: 'Upload File Project ' + name,
		message: $('<div></div>').load('project/Upload_proj.php',{ id: idup}),
		buttons: [{
			label: 'Upload File',
			// no title as it is optional
			cssClass: 'btn-primary',
			action: function(dialogItself){
				btn_upload_pro(idup);
				//dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}
function btn_upload_pro(idlp) {
	//alert(idlp);
	BootstrapDialog.show({
		title: 'Upload File Project ' + name,
		message: $('<div></div>').load('project/Upload_input.php',{ id: idlp}),
		buttons: [{
			label: 'Upload',
			// no title as it is optional
			cssClass: 'btn-primary',
			action: function(dialogItself){
				UploadPro(idlp);
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_edit_pro(idp,idus) {
	BootstrapDialog.show({
		size: BootstrapDialog.SIZE_WIDE,
		title: 'Edit Project',
		message: $('<div></div>').load('project/edit_proj.php',{id : idp}),
		buttons: [{
			label: 'Edit Project',
			// no title as it is optional
			cssClass: 'btn-warning',
			action: function(dialogItself){
				//alert(idp);
				editpro(idp,idus);
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_edit_sta(idsta,idus) {
	//alert(idsta+'/'+idus);
	BootstrapDialog.show({
		title: 'Edit Status',
		message: $('<div></div>').load('project/user_status.php',{id : idsta}),
		buttons: [{
			label: 'Edit Status',
			// no title as it is optional
			cssClass: 'btn-warning',
			action: function(dialogItself){
				//alert(idp);
				editsta(idsta,idus);
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_team_edit(idet) {
	//alert(idcm);
	BootstrapDialog.show({
		title: 'Edit Team',
		message: $('<div></div>').load('project/edit_team.php',{ id : idet}),
		buttons: [{
			label: 'Edit Team',
			// no title as it is optional
			cssClass: 'btn-info',
			action: function(dialogItself){
				//alert(idet);
				editteam(idet);
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_del_pro(id,name) {
	BootstrapDialog.show({
		title: 'Delete Project',
		message: '<h3>คุณต้องการลบ ' + name + ' ? </h3>',
		buttons: [{
			label: 'Delete Project',
			// no title as it is optional
			cssClass: 'btn-danger',
			action: function(dialogItself){
				//alert(id);
				deletepro(id);
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}
function btn_view_pro(idv,namev,idus) {
	//alert(idv+'/'+idus+'/'+namev)
	BootstrapDialog.show({
		size: BootstrapDialog.SIZE_WIDE,
		title: 'View ' + namev,
		message: $('<div></div>').load('project/view_proj.php',{id : idv, idus : idus}),
		buttons: [{
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_pdel_up(id,idj,name) {
	BootstrapDialog.show({
		title: 'Delect File',
		message: 'คุรต้องการลบ '+name+' ?',
		buttons: [{
			label: 'Delete File',
			// no title as it is optional
			cssClass: 'btn-danger',
			action: function(dialogItself){
				//alert(id);
				filedel(id,idj,name);
				dialogItself.close();
				//alert(form_pro);
			}
		},{
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}
//---------------------------------------------------------------------
function addpro() {
	var typep = $("#typep").val();
	var statusp = $("#statusp").val();
	var namep = $("#namep").val();
	var luserp = $("#luserp").val();
	var userp = $("#userp").val();
	var datestart = $("#datestart").val();
	var dateend = $("#dateend").val();
	var lvp = $("#lvp").val();
	var company = $("#company").val();
	//alert(lvp);
	var detailp = CKEDITOR.instances['detailp'].getData();
	var data = "typep=" + typep + "&statusp=" + statusp + "&namep=" + namep + "&luserp=" + luserp + "&userp=" + userp + "&datestart=" + datestart + "&dateend=" + dateend + "&detailp=" + detailp + "&lvp=" + lvp + "&company=" + company;
	//alert(data);
	$.ajax({
		type: "POST",
		url: "project/add_proj_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				pro_home();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});
}

function UploadPro(id) {
	//var file_data = $("#fileup").prop("files")[0];
	//var form_data = new FormData($("#uploadpro2")[0]);
	//form_data.append("file", file_data);
    var file_data = $('#fileup').prop('files')[0];
   // alert(file_data);
    if(file_data!=null){
    var form_data = new FormData();
    form_data.append('fileup', file_data);
    $.ajax({
        url: "project/Upload_file_proj.php?id=" + id,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(msg){
            if(msg == 'Y'){
				//alert(msg);
				uploadprot(id);
			}else{
				alert(msg);
			}
        }
	});
	}
}

/*function upattf(attfid,reqid,docid){
	//alert('testok');
	if( document.getElementById("fileToUpload").files.length == 0 ){
		$('#fgup1').addClass('has-error');
		$('#smtup1').html('ยังไม่เลือกไฟล์ upload!');
		$('#fileToUpload').focus();
	}else{
		$('#fgup1').removeClass('has-error');
		$('#smtup1').html('');
		//alert(attfid+','+reqid+','+docid);

		$.ajax({
			url: "sysrequester/uploadWS.php?attfid=" + attfid + "&reqid=" + reqid + "&docid=" + docid,
			type: "POST",
			data: new FormData($("#frm")[0]),
			processData: false,
			contentType:false
			}).done(function(data){
				str = data;
				res = str.split(",");
				//alert("Success: Files sent!" + res[0]  + res[1]);
				if (res[0] == 1){
					resp = "ไม่สามารถอัปโหลดไฟล์ได้ เนื่องจากไม ่ไช่ไฟล์รูปภาพ.";
					$('#msg').html(resp);
				}else
				if(res[0] == 2){
					resp = "ไม่สามารถอัปโหลดไฟล์ได้ เนื่องจาก ไฟล์ชื่อนี้อยู่ในระบบแล้ว.";
					$('#msg').html(resp);
				}else
				if(res[0] == 3){
					resp = "ไม่สามารถอัปโหลดไฟล์ได้ เนื่องจาก ไฟล์มีขนาดใหญ่เกินไป.";
					$('#msg').html(resp);
				}else
					if(res[0] == 4){
					resp = "ไม่สามารถอัปโหลดไฟล์ได้ เนื่องจาก ไฟล์ต้องเป็นชนิืด PDF เท่านั้น.";
					$('#msg').html(resp);
				}else{
					resp = "อัปโหลดไฟล์ เสร็จเรียบร้อย.";
					$('#fileToUpload').val("");
					$('#fileToUpload').hide();
					$('#Uploadfilebtn').hide();
					$('#msg').html(resp);
					fname = attfid + reqid + docid + "." + res[1];
					$('#pobj').attr({
						data: "uploads/" + fname,
						type: "application/pdf",
						width:"200px",
						height:"200px"
					});

					loadattftb(reqid);
					//AttFile(reqid);
				}
			}).fail(function(){

		});

	}
}*/


function editpro(ided,idus) {
	//alert(ided + 'ทดสอบ');
	var typepe = $("#typepe").val();
	var statuspe = $("#statuspe").val();
	var namepe = $("#namepe").val();
	var luserpe = $("#luserpe").val();
	var datestarte = $("#datestarte").val();
	var dateende = $("#dateende").val();
	var detailpe = CKEDITOR.instances['detailpe'].getData();
	var lvpe = $("#lvpe").val();
	var company = $("#company").val();
	//alert(lvpe);
	var data = "typepe=" + typepe + "&statuspe=" + statuspe + "&namepe=" + namepe + "&luserpe=" + luserpe  + "&datestarte=" + datestarte + "&dateende=" + dateende + "&detailpe=" + detailpe + "&id=" + ided + "&lvpe=" + lvpe + "&company=" + company;
	//alert(data);
	$.ajax({
		type: "POST",
		url: "project/edit_proj_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				$("#mainpage").load("Project/home_pro.php",{ idus : idus });
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});
}

function editsta(id,idus) {
		var editstu = $("#userstu").val();
		var data = "editstu=" + editstu + "&id=" + id ;
		$.ajax({
			type: "POST",
			url: "project/edit_status_pro.php",
			cache: false,
			data: data,
			success: function(msg){
				if(msg=='Y'){
					$("#mainpage").load("project/home_pro.php",{ idus : idus });
				}else{
					BootstrapDialog.show({
						type:BootstrapDialog.TYPE_DANGER,
						title: 'Error',
						message: msg,
						buttons: [{
							label: 'Close',
							action: function(dialogItself){
								dialogItself.close();
							}
						}],
						draggable: true,
						closable:false
					});
				}
			},
			error: function(){
				//
			},
			complete: function(){
				//
			}
		});
}

function editteam(idpj) {
	var team = $("#teamed").val();
	var data = "teamed=" + team + "&id=" + idpj ;
	$.ajax({
		type: "POST",
		url: "project/edit_team_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			if(msg=='Y'){
				pro_home();
				teaml(idpj);
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});
}

function deletepro(idpro) {
	//alert(idpro);
	var data = "id=" + idpro;
	//alert("ทดสอบ" + data);
	if(data != '' ){
	$.ajax({
		type: "POST",
		url: "project/delete_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				pro_home();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});}else{
		BootstrapDialog.show({
			type:BootstrapDialog.TYPE_DANGER,
			title: 'Delete Error',
			message: 'Error',
			buttons: [{
				label: 'Close',
				action: function(dialogItself){
					dialogItself.close();
				}
			}],
			draggable: true,
			closable:false
		});
	}

}

function deletepro(idpro) {
	//alert(idpro);
	var data = "id=" + idpro;
	//alert("ทดสอบ" + data);
	if(data != '' ){
	$.ajax({
		type: "POST",
		url: "project/delete_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				pro_home();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});}else{
		BootstrapDialog.show({
			type:BootstrapDialog.TYPE_DANGER,
			title: 'Delete Error',
			message: 'Error',
			buttons: [{
				label: 'Close',
				action: function(dialogItself){
					dialogItself.close();
				}
			}],
			draggable: true,
			closable:false
		});
	}

}

function filedel(id,idj,name) {
		//alert(name);
		var data = "id=" + id + "&name=" + name;
		//alert("ทดสอบ" + data);
		if(data != '' ){
		$.ajax({
			type: "POST",
			url: "project/delete_file_pro.php",
			cache: false,
			data: data,
			success: function(msg){
				//alert(msg);
				if(msg=='Y'){
					uploadprot(idj);
				}else{
					BootstrapDialog.show({
						type:BootstrapDialog.TYPE_DANGER,
						title: 'Error',
						message: msg,
						buttons: [{
							label: 'Close',
							action: function(dialogItself){
								dialogItself.close();
							}
						}],
						draggable: true,
						closable:false
					});
				}
			},
			error: function(){
				//
			},
			complete: function(){
				//
			}
		});}else{
			BootstrapDialog.show({
				type:BootstrapDialog.TYPE_DANGER,
				title: 'Delete Error',
				message: 'Error',
				buttons: [{
					label: 'Close',
					action: function(dialogItself){
						dialogItself.close();
					}
				}],
				draggable: true,
				closable:false
			});
		}
}
//---------Pro End
//---------Commit
function btn_commit(idcm,idus) {
	BootstrapDialog.show({
		size: BootstrapDialog.SIZE_WIDE,
		title: 'Commit Project',
		message: $('<div></div>').load('project/add_commit.php',{ id : idcm}),
		buttons: [{
			label: 'Add Commit',
			// no title as it is optional
			cssClass: 'btn-info',
			action: function(dialogItself){
				addcommit(idcm,idus);
				dialogItself.close();
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_com_up(idcu,idpj) {
	//alert(idcu + '/'+idpj);
	BootstrapDialog.show({
		title: 'Upload File Commit',
		message: $('<div></div>').load('project/Upload_comm.php',{ id : idcu}),
		buttons: [{
			label: 'Upload',
			// no title as it is optional
			cssClass: 'btn-info',
			action: function(dialogItself){
				//alert(idcm);
				uploadcomm(idcu,idpj);
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_cdel_up(id,idc,name) {
	BootstrapDialog.show({
		title: 'Delete File Commit',
		message: '<h3>คุณต้องการลบ ' + name + ' ? </h3>',
		buttons: [{
			label: 'Delete File',
			// no title as it is optional
			cssClass: 'btn-danger',
			action: function(dialogItself){
				//alert(id);
				file_Del_com(id,idc,name);
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

//--------------------------------
function addcommit(idci,idus) {
	var detail = CKEDITOR.instances['commitd'].getData();
	var procas = $("#proper").val();
	var data = "commitd=" + detail + "&proper=" + procas + "&id=" + idci;
	$.ajax({
		type: "POST",
		url: "project/add_commit_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			if(msg=='Y'){
				reload(idci);
				$("#mainpage").load("Project/home_pro.php",{ idus : idus});
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});
}

function uploadcomm(id,idpj) {
	//alert(id+'/'+idpj)
	var file_data = $('#fliecom').prop('files')[0];
    //alert(file_data);
    if(file_data!=null){
    var form_data = new FormData();
    form_data.append('fliecom', file_data);
    $.ajax({
        url: "project/Upload_file_commit.php?id=" + id,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(msg){
            if(msg == 'Y'){
				//alert(msg);
				reload(idpj);
			}else{
				alert(msg);
			}
        }
	});
	}else{
		alert("เลือกไฟล์");
	}
}

function file_Del_com(id,idc,name) {
	//alert(name);
	var data = "id=" + id +"&name=" + name;
	//alert(data);
	$.ajax({
		type: "POST",
		url: "project/delete_file_com.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				comload(idc);
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});
}
//---------EndCommit
//---------Type
function btn_type_add() {
	BootstrapDialog.show({
		title: 'Add Type',
		message: $('<div></div>').load('project/add_type.php'),
		buttons: [{
			label: 'Add Type',
			// no title as it is optional
			cssClass: 'btn-info',
			action: function(dialogItself){
				//alert(idcm);
				addtype();
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}
//------------------------
function addtype() {
	//alert(idci);
	var typep1 = $("#typep1").val();
	var data = "typep1=" + typep1;
	//alert(data);
	//alert(data);
	$.ajax({
		type: "POST",
		url: "project/add_type_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				typeshow();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});
}
//---------------------
function btn_type_add2() {
	BootstrapDialog.show({
		title: 'Add Type',
		message: $('<div></div>').load('project/add_type.php'),
		buttons: [{
			label: 'Add Type',
			// no title as it is optional
			cssClass: 'btn-info',
			action: function(dialogItself){
				//alert(idcm);
				addtype2();
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_edit_type(id) {
	BootstrapDialog.show({
		title: 'Add Type',
		message: $('<div></div>').load('project/edit_type.php',{ id:id }),
		buttons: [{
			label: 'Add Type',
			// no title as it is optional
			cssClass: 'btn-info',
			action: function(dialogItself){
				//alert(idcm);
				edittype(id);
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}

function btn_delete_type(id,name) {
	BootstrapDialog.show({
		title: 'Delete Type',
		message: 'คุณต้องการลบ ' + name + ' ?',
		buttons: [{
			label: 'Delete Type',
			// no title as it is optional
			cssClass: 'btn-info',
			action: function(dialogItself){
				//alert(idcm);
				deltype(id);
				dialogItself.close();
				//alert(form_pro);
			}
		}, {
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}],
		draggable: true,
		closable:false
	});
}
//------------------------
function addtype2() {
	//alert(idci);
	var typep1 = $("#typep1").val();
	var data = "typep1=" + typep1;
	//alert(data);
	//alert(data);
	$.ajax({
		type: "POST",
		url: "project/add_type_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				type_home();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});
}

function edittype(id) {
	//alert(idci);
	var typed1 = $("#typed1").val();
	var data = "typed1=" + typed1 + "&id=" + id;
	//alert(data);
	$.ajax({
		type: "POST",
		url: "project/edit_type_pro.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				type_home();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});
}

function deltype(idtype) {
	//alert(idpro);
	var data = "id=" + idtype;
	//alert("ทดสอบ" + data);
	if(data != '' ){
	$.ajax({
		type: "POST",
		url: "project/delete_type.php",
		cache: false,
		data: data,
		success: function(msg){
			//alert(msg);
			if(msg=='Y'){
				type_home();
			}else{
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title: 'Error',
					message: msg,
					buttons: [{
						label: 'Close',
						action: function(dialogItself){
							dialogItself.close();
						}
					}],
					draggable: true,
					closable:false
				});
			}
		},
		error: function(){
			//
		},
		complete: function(){
			//
		}
	});}else{
		BootstrapDialog.show({
			type:BootstrapDialog.TYPE_DANGER,
			title: 'Delete Error',
			message: 'Error',
			buttons: [{
				label: 'Close',
				action: function(dialogItself){
					dialogItself.close();
				}
			}],
			draggable: true,
			closable:false
		});
	}

}
//---------EndType

function enter_gantchart() {
	var user = $("#user").val();
	var date1 = $("#date1").val();
	var date2 = $("#date2").val();
	//alert(user);
	$("#chart").load("summary/gantcharte.php",{user:user,date1:date1,date2:date2});
	//alert(user+" , "+date1+" , "+date2);
}
