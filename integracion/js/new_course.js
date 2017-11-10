$(document).ready(function(){
    $('#div1').show();
    $('#div2').hide();
    //settings = {gbtnClass:"btn-large btn-flat"};

    //$("#btn2").addClass(settings.gbtnClass);

     $("#btn2").click(function a(){
        $('#btn3').removeAttr('disabled');
        var contador=0;
        var separador="\n";
        var nombreCurso=$('#1').val();
        var contenido=$('#ta1').val();
        var contenidoseparado=contenido.split(separador);
        if(nombreCurso==''){
            alert('Debes ingresar un nombre para el curso');
        }
        if (contenido=='') {
            alert('Debes ingresar una estructura de curso correcta ');
        }
        if(nombreCurso!='' && contenido!=''){
        $('#div1').hide();
        $('#div2').show();

        for (var i = 0; i < contenidoseparado.length; i++) {
            var linea=contenidoseparado[i].split(' ');
            if (linea[0][0]!='-') {//convierte ambos a lowercase y compara una sola vez
                $('#div3').append($("<div/>",{class:'divider'}))
                .append($("<div/>",{class:'section'})
                .css({"background":'#6DA23B',"border-radius":"6px","margin":"4px","padding-left":"2px"})
                .append(contenidoseparado[i]));
            }
            else{
                $('#div3').append($("<div/>")
                .css({"background":'#C0CAB7',"border-radius":"6px","margin":"4px","padding-left":"20px"})
                .append(contenidoseparado[i]));
            }
        }
        }

    });
    $("#btn11").click(function(){
    	$('#btn3').attr('disabled','disabled');
        var contenido2=$('#ta1').val();
        $('#div2').hide();
        $('#div1').show();
        $('#div3').empty();

    });
    $('#btn3').click(function(){
        var confirmacion=confirm('¿Estás seguro de crear el curso?');
        if (confirmacion) {
            $('#div').empty();
            var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
            var codigo = "";
            for (i=0; i<5; i++) {
                codigo += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
            }

            document.getElementById('div').append("Course created successfully \n Code course: "+codigo);
            //document.getElementById('div').append($("<div/>").append("Course created successfully \n").append("Code course: "+codigo));
        }
    });
});   

