<?php
	$name ="Nicole Anne S. Mabale";
	$role ="Computer Science Student";
	$contact ="09674379018";
	$add ="389 Francisco, San Ricardo, Talavera, Nueva Ecija";
	$email ="nicolemabale1@gmail.com";
	$sk [0][0] = "C++";
	$sk [1][0] = "Java";
	$sk [2][0] = "Python";
	$sk [3][0] = "HTML";
	$sk [4][0] = "PHP";
	$sk [5][0] = "CSS"; 
	$ments [0][0] = "- 1st Honorable Mention 2013";
	$ments [1][0] = "- 1st Place in Group Collaboration 2014";
	$ments [2][0] = "- Overall champion in DSPC 2014";
	$ments [3][0] = "- With Honors 2019";
	$ments [4][0] = "- Java MTA Certified 2021";
	$org1 = "The Wesleyanian";
	$org2 = "Dance Troupe";
	$org3 = "Every Nation Campus Club";
	$org4 = "Association for Computing Machinery";
	$educ1 = "San Ricardo IEMELIF Learning Center Inc";
	$educ2 = "Wesleyan University Philippines";
	$educ3 = "FEU High School";
	$educ4 = "FEU Institute of Technology";
	$hob1 = "Reading";
	$hob2 = "Watching";
	$hob3 = "Painting";
	$hob4 = "Crocheting";
	$hob5 = "Dancing";
	$hob6 = "Writing";


?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $name; ?></title>
	<link rel="stylesheet" href="style.css">
	<script src ="https://kit.fontawesome.com/7748e27a7d.js"></script>
</head>
<body>

	<div class="wrapper">
		<div class="resume">
			<div class="left">
				<div class ="img_holder">
					<img src="nicole.png" alt="pic">
				</div>
				<div class ="content_wrap pb">
					<div class ="title">
						contact 
					</div>
					<div class ="contact"> 
						<ul>
							<li>
								<div class ="li_wrap">
									<div class="icon">
										<i class="fas fa-mobile-alt"></i>
										</div>
										<div class ="text"> <?php echo $contact; ?> </div>
								</div>
							</li>
							<li>
								<div class ="li_wrap">
									<div class="icon">
										<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class ="text"> <?php echo $add; ?> </div>
								</div>
							</li>
							<li>
								<div class ="li_wrap">
									<div class="icon">
										<i class="far fa-envelope"></i>
										</div>
										<div class ="text"> <?php echo $email; ?> </div>
								</div>
							</li>
					
						</ul>
					</div>

				</div>
				<div class ="skills">
					Skills
				</div>
				<div class ="skills_wrap">
					<ul>
								<div class ="li_wrap">
										<div class ="text"> <?php
										foreach ($sk as $value) {
						echo "<li class = 'pb'>";
						echo $value[0];
						echo "</li>";
					} ?>
										</div>
								</div>
						</ul>
				</div>
				<div class ="achievements">
						Achievements
					</div>
					<div class ="awards"> 
						<ul>
								<div class ="li_wrap">
										<div class ="text"> <?php
										foreach ($ments as $value) {
						echo "<li class = 'pb'>";
						echo $value[0];
						echo "</li>";
					} ?>
										</div>
								</div>
						</ul>
		</div>
		<div class ="hobbies_wrap pb">
			<div class="hobbies">
				hobbies
			</div>
			<div class="likes">
				<ul>
							<li>
								<div class ="li_wrap">
									<div class="icon">
										<i class="fas fa-book"></i>
										</div>
										<div class ="text"> <?php echo $hob1; ?> </div>
								</div>
							</li>
							<li>
								<div class ="li_wrap">
									<div class="icon">
										<i class="fas fa-video"></i>
										</div>
										<div class ="text"> <?php echo $hob2; ?> </div>
								</div>
							</li>
							<li>
								<div class ="li_wrap">
									<div class="icon">
										<i class="fas fa-palette"></i>
										</div>
										<div class ="text"> <?php echo $hob3; ?> </div>
								</div>
							</li>
					<li>
								<div class ="li_wrap">
									<div class="icon">
										<i class="fas fa-mitten"></i>
										</div>
										<div class ="text"> <?php echo $hob4; ?> </div>
								</div>
							</li>
							<li>
								<div class ="li_wrap">
									<div class="icon">
										<i class="fas fa-music"></i>
										</div>
										<div class ="text"> <?php echo $hob5; ?> </div>
								</div>
							</li>
							<li>
								<div class ="li_wrap">
									<div class="icon">
										<i class="fas fa-pen-nib"></i>
										</div>
										<div class ="text"> <?php echo $hob6; ?> </div>
								</div>
							</li>
						</ul>
			</div>
		</div>
		</div>
		<div class ="right">
			<div class ="header">
				<div class ="personal_profile">
					<div class = "name_role">
						<div class ="name">
							<?php echo $name; ?>
						</div>
						<div class ="role">
							<?php echo $role; ?>
						</div>
					</div>
				</div>
			<div class ="about">
				I'm studying at FEU Institute of Technology.
				I'm currently learning different programming
				languages that can help me in my future career.
			</div>
			</div>
			<div class="inner">
				<div class="organization">
					<div class="org">
						Organization
					</div>
					<div class="org_wrap">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="date"> 2014</div>
									<div class="info"> 
										<p class ="info_title"> 
											<?php echo $org1; ?> </p>
										<p class="info_role">
											Editorial Journalist
										</p>
										<p class="info_abt">
											The Wesleyanian is an organization responsible
											for the schools's paper. 
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="date"> 2014</div>
									<div class="info"> 
										<p class ="info_title"> 
											<?php echo $org2; ?> </p>
										<p class="info_role">
											Member
										</p>
										<p class="info_abt">
											Dance Troupe is an organization for students that have a talent in dancing. 
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="date"> 2017</div>
									<div class="info"> 
										<p class ="info_title"> 
											<?php echo $org3; ?> </p>
										<p class="info_role">
											Member
										</p>
										<p class="info_abt">
											Every Nation Campus is an organization that compose of those who wants to be involve with God. 
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="date"> 2019</div>
									<div class="info"> 
										<p class ="info_title"> 
											<?php echo $org4; ?> </p>
										<p class="info_role">
											Member
										</p>
										<p class="info_abt">
											Association for Computing Machinery or ACM is an international organization that help students who are in computing field. 
										</p>
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div>

				<div class="education">
					<div class="educ">
						Education
					</div>
					<div class="educ_wrap">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="date"> 2005 - 2013</div>
									<div class="info"> 
										<p class ="info_title"> 
											<?php echo $educ1; ?> </p>
										<p class="info_role">
											Elementary
										</p>
										<p class="info_abt"> 
											San Ricardo, Talavera, Nueva Ecija
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="date"> 2013 - 2017</div>
									<div class="info"> 
										<p class ="info_title"> 
											<?php echo $educ2; ?> </p>
										<p class="info_role">
											Junior High School
										</p>
										<p class="info_abt_info">
											Mabini Street Extension, Cabanatuan City, Nueva Ecija 
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="date"> 2017 - 2019</div>
									<div class="info"> 
										<p class ="info_title"> 
											<?php echo $educ3; ?> </p>
										<p class="info_role">
											Senior High School
										</p>
										<p class="info_abt">
											Nicanor Reyes St, Sampaloc, Manila, 1008 Metro Manila
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="date"> 2019 - present </div>
									<div class="info"> 
										<p class ="info_title"> 
											<?php echo $educ4; ?> </p>
										<p class="info_role">
											College
										</p>
										<p class="info_abt">
											P. Paredes St, Sampaloc, Manila, 1015 Metro Manila 
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</div>
</body>
</html>