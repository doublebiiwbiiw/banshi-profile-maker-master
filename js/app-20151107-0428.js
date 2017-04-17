//var context = $('#upload-canvas')[0].getContext('2d');
$(document).ready(function(){
    checkRequirement();
    $('#step-1').show();
    $('#step-2').hide();
    $('#step-3').hide();
});

var oriContext;

$('#file-uploader').change(function(){
    var input = this;

    var oldUploadButtonText = $('#btn-upload').html();
    $('#btn-upload').prop('disabled', true).html('กำลังอัพโหลด รอสักครู่นะ...').addClass('disabled');
        if (input.files && input.files[0]) {

        if(!input.files[0].type.match('image/jp.*') && !input.files[0].type.match('image/png')) {
            swal('มีอะไรบางอย่างไม่ถูกต้องแหละ!', 'กรุณาอัพโหลดภาพสกุล .jpg หรือ .png เท่านั้นนะ', 'error');
            $('#btn-upload').prop('disabled', false).html(oldUploadButtonText).removeClass('disabled');
            return;
        }
        
        var reader = new FileReader();

        reader.onload = (function (file) {
            return function(e) {
                var img = new Image();
                img.src = e.target.result;
                img.onload = function() {
                    swal('อัพโหลดภาพเสร็จแล้ว!', 'จากนั้นมาปรับขนาดของภาพกันนะ ลองเลย รออะไรอยู่!', 'success');

                    var width = img.width;
                    var height = img.height;

                    var MAX_WIDTH = 1024;
                    var MAX_HEIGHT = 1024;

                    if (width > height) {
                        if (height > MAX_HEIGHT) {
                            width *= MAX_HEIGHT / height;
                            height = MAX_HEIGHT;
                        }
                    } else {
                        if (width > MAX_WIDTH) {
                            height *= MAX_WIDTH / width;
                            width = MAX_WIDTH;
                        }
                    }

                    var canvas = document.createElement("canvas");
                    canvas.width = width;
                    canvas.height = height;
                    var ctx = canvas.getContext("2d");
                    ctx.drawImage(img, 0, 0, width, height);

                    var dataurl = canvas.toDataURL();

                    $('#step-1').hide();
                    $('#step-2').show();

                    $('#img-preview').cropper('reset').cropper('replace', dataurl).cropper('setAspectRatio', 1);
                    $('#img-preview').show();
                }
            };

        })(input.files[0]);
        reader.readAsDataURL(input.files[0]);
    } else {
        swal('ขอโทษด้วยนะ', 'อัพโหลดภาพไม่ได้ครับ ลองอัพใหม่อีกครั้งนะ', 'error');
        $('#btn-upload').prop('disabled', false).html(oldUploadButtonText).removeClass('disabled');
    }
});

$('#btn-to-step-3').click(function(){
    $('#step-2').hide();
    var destContext = $('#img-canvas')[0].getContext('2d');
    oriContext = $('#img-preview').cropper('getCroppedCanvas');
    var srcContext = $('#img-preview').cropper('getCroppedCanvas');
    destContext.drawImage(srcContext, 0, 0, $('#img-canvas')[0].width, $('#img-canvas')[0].height);
    $('#btn-download').prop('disabled', true);
    $('#step-3').show();
    var $root = $('html, body');
    $root.animate({
        scrollTop: $('#step-3 h2').offset().top - 40
    }, 300);
});


$('#btn-download').click(function(){
    var img = $('#img-canvas')[0].toDataURL("image/png"); 
    ReImg.fromCanvas(document.getElementById('img-canvas')).downloadPng();
});

function overlayImage(type) {
    $('#loading').show();
    var filename = 'img/overlay/';
    switch (type) {
        
        case 'stat':     filename += 'major/stat.png'; break;
        case 'bit':     filename += 'major/bit.png'; break;
        case 'insu':     filename += 'major/insurance.png'; break;
        case 'app':     filename += 'major/apply.png'; break;
        case 'math':     filename += 'major/math.png'; break;
        case 'audit':     filename += 'major/audit.png'; break;
        case 'fin':     filename += 'major/finance.png'; break;
        case 'logis':     filename += 'major/logis.png'; break;
        case 'mkt':     filename += 'major/market.png'; break;
        case 'mis':     filename += 'major/mis.png'; break;
        case 'ent':    filename += 'major/entre.png'; break;
		
        
        case 'club-1': filename += 'club/a1.png'; break;
        case 'club-2': filename += 'club/a2.png'; break;
        case 'club-3': filename += 'club/a3.png'; break;
        case 'club-4': filename += 'club/a4.png'; break;
        case 'club-5': filename += 'club/a5.png'; break;
        case 'club-6': filename += 'club/b1.png'; break;
        case 'club-7': filename += 'club/b2.png'; break;
        case 'club-8': filename += 'club/b3.png'; break;
        case 'club-9': filename += 'club/b4.png'; break;
		case 'club-10': filename += 'club/b5.png'; break;
        case 'club-11': filename += 'club/sd.png'; break;
        case 'club-12': filename += 'club/st.png'; break;
    }
    var destContext = $('#img-canvas')[0].getContext('2d');
    destContext.clearRect(0, 0, $('#img-canvas')[0].width, $('#img-canvas')[0].height);
    destContext.drawImage(oriContext, 0, 0, $('#img-canvas')[0].width, $('#img-canvas')[0].height);
    if (filename != 'img/overlay/') {
        var img = new Image();
        img.src = filename;
        img.onload = function() {
            destContext.drawImage(img, 0, 0, $('#img-canvas')[0].width, $('#img-canvas')[0].height);
        }
        $('#btn-download').prop('disabled', false);
    }
    $('#loading').hide();
    var $root = $('html, body');
    $root.animate({
        scrollTop: $('#step-3').offset().top - 40
    }, 300);
}

function checkRequirement() {
    if (!(window.File && window.FileReader)) {
        swal('ขอโทษด้วยนะ', 'เราพบว่า browser ของคุณไม่สามารถใช้งานเว็บของเราได้ ลองเปลี่ยน browser แล้วเข้ามาใหม่นะ ขออภัยอีกครั้งครับ', 'error');
        $('#btn-upload').prop('disabled', true).html('ขออภัยด้วย browser ของคุณไม่สามารถใช้งานได้').addClass('disabled');
    }
}

$('.intania-team').click(function(){
	overlayImage( $(this).data('tagid') );
});

$('#btn-rotate-ccw').click(function(){ $('#img-preview').cropper('rotate', -90); });
$('#btn-rotate-cw').click(function(){ $('#img-preview').cropper('rotate', 90); });
