<!DOCTYPE HTML>
<html>
	<head>
		<title>Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/menubox/assets/css/main.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/menubox/assets/css/bootstrap.css" />
		<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> -->
        <!-- Bootstrap CSS CDN -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/bootstrap-sidebar/style2.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	</head>
	<body>

				<!-- Main
					<div id="main">

						<!-- One -->
							<!-- <?php echo sizeof($allmenu); ?> -->
							<section id="one" class="tiles">
							<?php if(sizeof($allmenu) > 0) { $index=0; foreach($allmenu as $menu){ $index++; ?>
							<?php if($index%1==0){ $warna = "#8ea9e8";}?>
							<?php if($index%2==0){ $warna = "#e7b788";}?>
							<?php if($index%3==0){ $warna = "#ec8d81";}?>
							<?php if($index%4==0){ $warna = "#8d82c4";}?>
							<?php if($index%5==0){ $warna = "#6fc3df";}?>
							<?php if($index%6==0){ $warna = "#87c5a4";}?>
								<article id="">
									<div id="divheader_xxx<?php echo $index;?>">
										<span class="image">
											<img src="images/pic01.jpg" alt="" />
										</span>
										<header class="major" id="header_xxx<?php echo $index;?>">
											<label class="menu-dash"><a href="landing.html"><?php echo $menu['mn_name'];?> </a></label>
											<?php if($menu['menu_child'] != false) { ?>
												<?php foreach($menu['menu_child'] as $mn_child){?>
												 <ul class="actions">
													<li>
													<a onclick="create_tab('<?php echo $mn_child->id_child;?>','<?php echo $mn_child->submn_name;?>','<?php echo $mn_child->submn_url;?>')"  class="button next"><?php echo $mn_child->submn_name;?></a></li>
												</ul>
												<?php } ?>
											<?php } ?>
										</header>
									</div>
								</article>
							<?php }if(sizeof($allmenu)%2==1){ ?>
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html">Contact Us</a></h3>
										<ul class="icons">
											<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
											<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
										</ul>
									</header>
								</article>
							<?php } }?>
							</section>


							<?php if(sizeof($allmenu)%2==0){ ?>							
<!-- 								<footer id="footer">
										<div class="inner">
											<header class="major">
												<h2>Hello World</h2>
											</header>
											<div class="content">
												<p>A responsive site template designed by HTML5 UP<br />
												and released under the Creative Commons.</p>
												<ul class="actions">
													<li><a href="#one" class="button next scrolly">Get Started</a></li>
													<label style="font-size:7px;">&#169; HTML5UP</label>
												</ul>
											</div>
										</div>
								</footer> -->
							<?php } ?>

					</div>



        <div style="position:relative">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar active" style="position:relative">
                <div class="sidebar-header">
                    <h3><?php echo $param; ?></h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Diisi Foto Profile</p>
                    <!-- <?php echo json_encode($allmenu); ?> -->
                    <?php if(sizeof($allmenu) > 0) { $index=0; foreach($allmenu as $menu){ $index++; ?>
                    	<li>
							<?php if($menu['menu_child'] != false) { ?>
                        	<a href="#menu_<?php echo $menu['id_master'];?>" data-toggle="collapse" aria-expanded="false"><?php echo $menu['mn_name'];?></a>
                        		<ul class="collapse list-unstyled" id="menu_<?php echo $menu['id_master'];?>">
								<?php foreach($menu['menu_child'] as $mn_child){?>                   		
									<li><a onclick="create_tab('<?php echo $mn_child->id_child;?>','<?php echo $mn_child->submn_name;?>','<?php echo $mn_child->submn_url;?>')"><?php echo $mn_child->submn_name;?></a></li>
								<?php } ?>
								</ul>
							<?php }else{?>
                        	<a href="#"><?php echo $menu['mn_name'];?></a>
							<?php } ?>
						</li>
					<?php }?>
                    <?php } ?>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content" class="active">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Hello World</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>


                <div class="row">
                	<div class="col-md-12 col-xs-12">
                		<div class="main-tab-conent">
							<ul class="nav nav-tabs" id="nav-tab">
								<!-- Diisi Tab by JS -->
							</ul>

							<div class="tab-content" id="parent-content-tab">
								<!-- Diisi konten tab by JS -->
							</div>
						</div>
                	</div>
                </div>



                
        </div>
		<!-- Scripts -->
		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

			<script src="<?php echo base_url(); ?>assets/frontend/menubox/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/frontend/menubox/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/frontend/menubox/assets/js/skel.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/frontend/menubox/assets/js/util.js"></script>
			<script src="<?php echo base_url(); ?>assets/frontend/menubox/assets/js/main.js"></script>
			<script type="text/javascript">
			function tes(){
				
				//if mobile
				// if(tinggi1 > 89){
				// 	// var percent = Math.round((tinggi1/89)*10);
				// 	var percent = Math.round((parseFloat((parseInt(tinggi1)/89))).toFixed(1)*27);
				// 	alert("total by percent => "+percent + " Total by tinggi => " + tinggi1);
				// 	$('#header_xxx1').css("margin-top", percent+"%");
				// }


					//if desktop ( each height has default size 71 )
					//each menu has value 10.5S
					var height = [];
					var divheight = [];
					var percent = [];
					var jumlah_menu = "<?php echo sizeof($allmenu); ?>";
					str = 'tes';
					for(i=1; i<=jumlah_menu; i++){
						height[i] =  $('#header_xxx'+i);
						divheight[i] =  $('#divheader_xxx'+i);
						console.log(height[i].height());
						if(height[i].height()>259){
							// percent[i] =  Math.round((parseFloat((parseInt(height[i].height())/9.5))).toFixed(1))+"%";
							// percent[i] =  Math.round((parseFloat((parseInt(height[i].height())/12))).toFixed(1))+"%";
							percent[i] =  Math.round((parseFloat((parseInt(height[i].height())/70))).toFixed(1))*10+"%";
						}else{
							percent[i] = "1%";
						}
						console.log(percent[i]);
						divheight[i].css("margin-top", percent[i]);
						// height[i].css("margin-top", percent[i]);
						// height[i].css("min-height", "40em");

					}
			}


			tes();
			</script>
			<script type="text/javascript">
				var total_tab = 0;
				var all_tab = [];
				var li_id ='li_tab_';
				var id_tab ="tab_content_";
				function create_tab(id,submenu_name,content_url){
					// alert(content_url);
					var parent_tab = $('#nav-tab');
					var parent_content_tab = $('#parent-content-tab');
   					if(total_tab<=4){
   						if(check_tab_exist(id) == true){
   							//create tab and adding id to array
   							// var id_on_tab =id_tab+id;
							$('#nav-tab li').removeClass('active'); 
							parent_tab.append("<li id='"+li_id+id+"' class='active'><a data-toggle='tab' style='display:inline;' href='#"+id_tab+id+"'>"+submenu_name+"</a>&nbsp;&nbsp;<i data-toggle='tab' style='margin-left:-5%;' onclick='close_tab("+id+")' class='btn btn-danger fa fa-times'></i></li>");	

							// <i class='fa fa-times' onclick='close_tab("+id+")' aria-hidden='true'></i>
							total_tab++;

   							//create content of tab
   							$('#parent-content-tab div').removeClass('in active');
   							create_content_tab(parent_content_tab,id_tab+id,id,submenu_name);

   							//add content to tab
							load_content(id_tab+id,id,content_url);

							//go to content
							  if ($(window).scrollTop() < $('body').height() / 8) {
								$("html, body").delay(100).animate({scrollTop: $('#'+id_tab+id).offset().top }, 500);
							  } 

							// console.log("add tab sbb : "+all_tab);
   						}
					}else{
						alert("maximal tab adalah 5");
					}
				}

				function check_tab_exist(id){
					if(all_tab.indexOf(id)== -1){
   						all_tab.push(id);
						return true;
					}else{
						return false;
					}
				}

				function close_tab(id,submenu_name){
					//remove array element
					var li_element =li_id+id;
					var get_position_arr =  all_tab.indexOf(id.toString());
					var tab_active_byid = $("#nav-tab li.active").attr("id");
					console.log("posisi item yang dipilih "+get_position_arr+" dan itemnya adalah "+all_tab[get_position_arr]);
					console.log("array nya "+all_tab);
					if(get_position_arr > -1 ){
						all_tab.splice(get_position_arr, 1);
						total_tab--;
						

						if(tab_active_byid == (li_id+id)){
							$('#nav-tab li').removeClass('active'); 
   							$('#parent-content-tab div').removeClass('in active');

							if(get_position_arr == (all_tab.length)){
								if(all_tab.length==0){
									console.log("tab is over");
								}else{
									var next_tab = "#"+id_tab+(all_tab[get_position_arr-1]);
									console.log("next tab is "+next_tab);
    								$('a[href="#passive_order_categories"]').tab('show');
								}

							}else if(get_position_arr < all_tab.length ){
								console.log("go to next tab");
    								// $('a[href="#passive_order_categories"]').tab('show');
								var next_tab = "#"+id_tab+(all_tab[get_position_arr]);
							}
    								$('a[href="'+next_tab+'"]').tab('show');

						}

						// remove li element
						$( "#"+li_element).remove();

						//remove content element
						$( "#"+id_tab+id).remove();


					}
				}

				function close_tab_tes(id){

				}

				function create_new_tab(id_tab,submenu_name){

				}

				function create_content_tab(el,id_tab,id_raw,submenu_name){
					var tab_element = "<div id='"+id_tab+"' class='tab-pane fade'><h3>"+submenu_name+"</h3></div>";
					el.append(tab_element);
					$('#'+id_tab).addClass('in active');
				}


				function load_content(id_tab,id_raw,content_url){
					// var url = "<?php echo base_url(); ?>"+"index.php/Dashboard/tes_konten1";
		            $.ajax({
		                    type:"GET",
		                    url: content_url,
					        contentType: "application/json",
					        dataType: "json",
		                    success:function(response)
		                    {
		                    	console.log(response);
		                        $('#'+id_tab).append(response);
		                    },
		                    error: function(err) 
		                    {
		                        console.log("invalid parsing data "+err);
		                        $('#'+id_tab).append("Halaman tidak ditemukan");
		                    }
		                });

					}
			</script>


		<!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });


        </script>
	</body>
</html>