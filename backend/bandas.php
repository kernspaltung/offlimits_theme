<?php

add_action( 'init', 'registrar_cpt_bandas' );


function registrar_cpt_bandas() {
	$labels = array(
		'name'               => _x( 'Bandas', 'post type general name', 'offlimits-textdomain' ),
		'singular_name'      => _x( 'Banda', 'post type singular name', 'offlimits-textdomain' ),
		'menu_name'          => _x( 'Bandas', 'admin menu', 'offlimits-textdomain' ),
		'name_admin_bar'     => _x( 'Banda', 'add new on admin bar', 'offlimits-textdomain' ),
		'add_new'            => _x( 'Add New', 'banda', 'offlimits-textdomain' ),
		'add_new_item'       => __( 'Add New Banda', 'offlimits-textdomain' ),
		'new_item'           => __( 'New Banda', 'offlimits-textdomain' ),
		'edit_item'          => __( 'Edit Banda', 'offlimits-textdomain' ),
		'view_item'          => __( 'View Banda', 'offlimits-textdomain' ),
		'all_items'          => __( 'All Bandas', 'offlimits-textdomain' ),
		'search_items'       => __( 'Search Bandas', 'offlimits-textdomain' ),
		'parent_item_colon'  => __( 'Parent Bandas:', 'offlimits-textdomain' ),
		'not_found'          => __( 'No bandas found.', 'offlimits-textdomain' ),
		'not_found_in_trash' => __( 'No bandas found in Trash.', 'offlimits-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'offlimits-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'banda' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
	);

	register_post_type( 'banda', $args );
}





function annadir_metabox_banda()
{
    add_meta_box("banda-metabox", "Información de Banda", "metabox_banda_markup", "banda", "side", "high", null);
}

add_action("add_meta_boxes", "annadir_metabox_banda");


function metabox_banda_markup($object)
{
    wp_nonce_field(basename(__FILE__), "banda-metabox-nonce");

    ?>
        <div>

            <label for="banda-lugar_de_origen">Lugar de Origen</label>
            <input name="banda-lugar_de_origen" type="text" value="<?php echo get_post_meta($object->ID, "banda-lugar_de_origen", true); ?>">

            <br>

            <label for="banda-genero_musical">Género Musical</label>
            <input name="banda-genero_musical" type="text" value="<?php echo get_post_meta($object->ID, "banda-genero_musical", true); ?>">

            <br>

            <label for="banda-anno_formacion">Año de formación</label>
            <input name="banda-anno_formacion" type="number" value="<?php echo get_post_meta($object->ID, "banda-anno_formacion", true); ?>">

            <br>

				<div id="integrantes">

					<label>Integrantes</label>
					<br>
				<?php

				$integrantes = get_post_meta($object->ID, "banda-integrantes", true);

				if( is_array( $integrantes ) ) :
					foreach( $integrantes as $integrante ) :
						if( $integrante != "" ) :
							?>

			            <input name="banda-integrantes[]" type="text" value="<?php echo $integrante; ?>">

							<?php
						endif;
					endforeach;
				endif;
				?>

				<input name="banda-integrantes[]" type="text" value="">

				</div>

				<button id="annadir_integrante" type="button" name="button">
					Añadir Integrante
				</button>

				<input class="integrante repeatable hidden" name="banda-integrantes[]" type="text" value="">



		  <div id="enlaces">


					<label>Enlaces</label>
					<br>
  				<?php

  				$enlaces = get_post_meta($object->ID, "banda-enlaces", true);

  				if( is_array( $enlaces ) ) :
  					foreach( $enlaces as $enlace ) :
  						if( $enlace != "" ) :
  							?>

  			            <input name="banda-enlaces[]" type="text" value="<?php echo $enlace; ?>">

  							<?php
  						endif;
  					endforeach;
  				endif;
  				?>

  				<input name="banda-enlaces[]" type="text" value="">

  				</div>

  				<button id="annadir_enlace" type="button" name="button">
  					Añadir Enlace
  				</button>

  				<input class="enlace repeatable hidden" name="banda-enlaces[]" type="text" value="">


		  </div>

		  <script type="text/javascript">
		  $=jQuery.noConflict();
			$('#annadir_integrante').click(function(){
				$('input.integrante.repeatable').clone().removeClass('repeatable hidden').detach().appendTo('#integrantes');
			})
			$('#annadir_enlace').click(function(){
				$('input.enlace.repeatable').clone().removeClass('repeatable hidden').detach().appendTo('#enlaces');
			})
		  </script>
    <?php
}


function save_bandas_metabox($post_id, $post, $update)
{
    if (!isset($_POST["banda-metabox-nonce"]) || !wp_verify_nonce($_POST["banda-metabox-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "banda";
    if($slug != $post->post_type)
        return $post_id;

	$banda_lugar_de_origen = "";
	$banda_anno_formacion = "";
	$banda_genero_musical = "";
	$banda_integrantes = "";
	$banda_enlaces = "";


    if(isset($_POST["banda-lugar_de_origen"]))
    {
        $banda_lugar_de_origen = $_POST["banda-lugar_de_origen"];
    }
    update_post_meta($post_id, "banda-lugar_de_origen", $banda_lugar_de_origen );

    if(isset($_POST["banda-anno_formacion"]))
    {
        $banda_anno_formacion = $_POST["banda-anno_formacion"];
    }
    update_post_meta($post_id, "banda-anno_formacion", $banda_anno_formacion );


    if(isset($_POST["banda-genero_musical"]))
    {
        $banda_genero_musical = $_POST["banda-genero_musical"];
    }
    update_post_meta($post_id, "banda-genero_musical", $banda_genero_musical );


    if(isset($_POST["banda-integrantes"]))
    {
        $banda_integrantes = $_POST["banda-integrantes"];
    }
    update_post_meta($post_id, "banda-integrantes", $banda_integrantes );


    if(isset($_POST["banda-enlaces"]))
    {
        $banda_enlaces = $_POST["banda-enlaces"];
    }
    update_post_meta($post_id, "banda-enlaces", $banda_enlaces );


}

add_action("save_post", "save_bandas_metabox", 10, 3);
