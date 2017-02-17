$(document).ready(function(){
	var count_experiences=1;
	var count_form=1;

	//mosue is over first item menu 
	$(".item").mouseover(function(){
		$(".item-active").css({"background-color":"white","color":"rgb(0,114,188)",
			"border-bottom":"solid","border-bottom-color": "white"
		});
	});
	//when mouse is out 
	$(".item").mouseleave(function(){
		$(".item-active").css({"background-color":"rgb(0,114,188)","color":"white",
			"border-bottom":"solid","border-bottom-color": "black"
		});
	});

	//show div with sesion form
	$(".icon-user").click(function(){
		$("#sesion-form").slideToggle();
	});

	//hide div with sesion form
	$(".hide-sesion").click(function(){
		$("#sesion-form").slideUp();
	});

	//open cv-form and modal
	$(".button-start").click(function(){
		$(".modal").slideDown("fast");
		$(".cv-form").slideDown();
	});

	//Close window with cv-form
	$(".close-modal").click(function(){
		$(".modal").hide();
		$(".cv-form").hide();
	});
	

	//event change in input type file
	$("#file-input").change(function(e){
		addImage(e);
	});

     //Acordeon content
     $(".add-new").click(function(){
     	add_experience();
     	$(".acordeon-item-"+(count_experiences-1)).slideUp();
     });

     //add new item in formacion
     $(".add-new-form").click(function(){
     	add_form();
     });

     //add new aplication in informatica
     $(".add-new-app").click(function(){
     	add_aplication();
     });

    //close sub-acordeon max 10 
    $('.acordeon-items').on("click",".close-item-1", function(){
     	$(".sub-acordeon-1").remove();
   	});
   	$('.acordeon-items').on("click",".close-item-2", function(){
     	$(".sub-acordeon-2").remove();
   	});
   	$('.acordeon-items').on("click",".close-item-3", function(){
     	$(".sub-acordeon-3").remove();
   	});
   	$('.acordeon-items').on("click",".close-item-4", function(){
     	$(".sub-acordeon-4").remove();
   	});
   	$('.acordeon-items').on("click",".close-item-5", function(){
     	$(".sub-acordeon-5").remove();
   	});
   	$('.acordeon-items').on("click",".close-item-6", function(){
     	$(".sub-acordeon-6").remove();
   	});
   	$('.acordeon-items').on("click",".close-item-7", function(){
     	$(".sub-acordeon-7").remove();
   	});
   	$('.acordeon-items').on("click",".close-item-8", function(){
     	$(".sub-acordeon-8").remove();
   	});
   	$('.acordeon-items').on("click",".close-item-9", function(){
     	$(".sub-acordeon-9").remove();
   	});
   	$('.acordeon-items').on("click",".close-item-10", function(){
     	$(".sub-acordeon-10").remove();
   	});

   	//hide or show experience
   	$('.acordeon-items').on("click",".minimize-item-1", function(){
     	$(".acordeon-item-1").toggle();
   	});
   	$('.acordeon-items').on("click",".minimize-item-2", function(){
     	$(".acordeon-item-2").toggle();
   	});
   	$('.acordeon-items').on("click",".minimize-item-3", function(){
     	$(".acordeon-item-3").toggle();
   	});
   	$('.acordeon-items').on("click",".minimize-item-4", function(){
     	$(".acordeon-item-4").toggle();
   	});
   	$('.acordeon-items').on("click",".minimize-item-5", function(){
     	$(".acordeon-item-5").toggle();
   	});
   	$('.acordeon-items').on("click",".minimize-item-6", function(){
     	$(".acordeon-item-6").toggle();
   	});
   	$('.acordeon-items').on("click",".minimize-item-7", function(){
     	$(".acordeon-item-7").toggle();
   	});
   	$('.acordeon-items').on("click",".minimize-item-8", function(){
     	$(".acordeon-item-8").toggle();
   	});
   	$('.acordeon-items').on("click",".minimize-item-9", function(){
     	$(".acordeon-item-9").toggle();
   	});
   	$('.acordeon-items').on("click",".minimize-item-10", function(){
     	$(".acordeon-item-10").toggle();
   	});


     /////////functions////////

    //get data file input and review type 
	function addImage(e){
		var file = e.target.files[0],
		imageType = /image.*/;

    	if (!file.type.match(imageType))
    		return;

    	//variable to read new file 
    	var reader = new FileReader();
    	reader.onload = fileOnload;
    	reader.readAsDataURL(file);
    }
  
  	//load image selected preview
    function fileOnload(e) {
     	var result=e.target.result;
     	$('.add-photo').attr("src",result);
     }

     //add elements necesary for new item in experience step
     function add_experience(){
     	count_experiences++;
     	var experience='<div class="sub-acordeon-'+count_experiences+'">'+
     		'<div class="col-md-12 acordeon-'+count_experiences+'" align="left" id="tab_acordeon">'+
     		'<span class="col-md-3"><label># '+count_experiences+'</label></span>'+
				'<span class="col-md-9" align="right">'+
					'<span class="minimize-item-'+count_experiences+'">'+
					'<a href="#"><img src="img/icons/minimize_experience.png" alt="minimiza"></a>'+
					'</span>'+
						'<span class="close-item-'+count_experiences+'"><a href="#"><img src="img/icons/close_experience.png" alt="cerrar"></a></span>'+
				'</span>'+
     					'</div>'+
							'<div class="acordeon-item-'+count_experiences+'">'+
							'<div class="col-md-6">'+
								'<div class="form-group">'+
									'<input type="text" class="form-control" placeholder="Nombre del puesto" id="puesto_ocupado" name="puesto_ocupado[]">'+
								'</div>'+
							'</div>'+
							'<div class="col-md-6">'+
								'<div class="form-group">'+
									'<input type="text" class="form-control" placeholder="Nombre de la empresa" id="empresa_antigua" name="nombre_empresa[]">'+
								'</div>'+
							'</div>'+
							'<div class="col-md-6">'+
								'<div class="form-group">'+
									'<b>Periodo</b>'+
									'<input type="date" class="form-control" id="fecha" name="periodo_inicio_trabajo[]"> <b>al</b> '+
									'<input type="date" class="form-control" id="fecha" name="periodo_fin_trabajo[]">'+
								'</div>'+
							'</div>'+
							'<div class="col-md-6">'+
								'<div class="form-group">'+
									'<textarea name="actividades_realizadas[]" id="" cols="30" rows="10" placeholder="Describe las actividades realizadas..." class="form-control"></textarea>'+
								'</div>'+
							'</div>'+
							'</div>'+
							'</div>';
		$('.acordeon-items').append(experience);

     }

     function add_form(){
     	count_form++;
     	var new_formacion='<b># '+count_form+'</b>'+
     		'<div class="formacion-'+count_form+'" align="left" id="formacion-general">'+
								'<span class="col-md-6 form-group">'+
									'<input type="text" class="form-control" placeholder="Grado/Título obtenido" id="titulo_obtenido" name="titulo_obtenido[]">'+
								'</span>'+
								'<span class="col-md-6 form-group">'+
									'<input type="text" class="form-control" placeholder="Centro académico o institución" id="centro_formacion" name="centro_formacion[]">'+
								'</span>'+
								'Periodo (inicio - fin)'+
								'<span class="col-md-12 form-group">'+
									'<span class="col-md-6">'+
										'<input type="date" class="form-control" id="fecha" name="periodo_inicio_formacion[]">'+
									'</span>'+
									'<span class="col-md-6">'+
										'<input type="date" class="form-control" id="fecha" name="periodo_fin_formacion[]">'+
									'</span>'+
								'</span>'+
							'</div>	'+
							'<hr>';
		$(".formacion").append(new_formacion);

     }

     function add_aplication(){
     	var add_app='<div class="form-group">'+
					'<input type="text" name="nombre_app[]" placeholder="Aplicación" class="form-control" id="in_aplicacion">'+
					'</div>';
     	var add_niv='<div class="form-group">'+
							'<select name="nivel_conocimiento[]" id="" class="form-control">'+
								'<option value="">Elige nivel</option>'+
								'<option value="Usuario">Usuario</option>'+
								'<option value="Profesional">Profesional</option>'+
								'<option value="Experto">Experto</option>'+
							'</select>'+
							'</div>';
     	var add_com='<div class="form-group">'+
						'<input type="text" placeholder="Comentario" class="form-control" id="in_comentarios" name="comentarios_app[]">'+
					'</div>';

	    $('.aplicacion').append(add_app);
     	$('.nivel_con').append(add_niv);
     	$('.comentarios').append(add_com);	

     }

  
});