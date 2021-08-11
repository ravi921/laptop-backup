<?php
/**
 * Template Name: Our Team Page Template
 *
 */

get_header(); ?>
<!-- header section end -->
<!-- 
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<section class="banner-inner-outer" style="background:url('<?php echo $image[0]; ?>') 0 0 / cover no-repeat;">
 -->
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;800;900&display=swap');

    .team-page-contentbox1 {
        background-color: #FFF;
    }
     .team-page-contentbox1in{
         padding: 30px 0;
     }
    .team-page-contentbox1in .title-box {
        background-color: #FFF;
        padding: 0;
        padding-left: 80px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        margin: 0 0 20px;
        text-transform: capitalize;
        position: relative;
    }
    .team-page-contentbox1in .title-box:after{ 
        content: '';
        background-image: url(https://www.codeflies.com/wp-content/themes/codeflies/images/logo.png);
        position: absolute;
        top: 35%;
        left: 20px;
        width: 50px;
        height: 50px;
        background-size: contain;
        background-repeat: no-repeat;
    }
    .listing-row {
        display: flex;
        justify-content: center;
        flex-flow: wrap;
    }
    .listing-box1in{transition: all .3s ease; -webkit-transition: all .3s ease;border: rgba(204, 204, 204, 0.38) 1px solid;
        border-radius: 20px; width:100%;}

    .listing-row .listing-box1 {
        padding: 20px;
        width: calc(100%/4);
        transition: all .3s ease;
        -webkit-transition: all .3s ease; 
        margin-bottom: 0;
        position: relative;
        display: flex;
    }
    .listing-box1-img {
        border-radius: 20px 20px 0 0;
        overflow: hidden;
        position: relative;
    } 
    .listing-box1-img img {
        transition: all .3s ease;
        -webkit-transition: all 1s ease;
        width: 100%;
        height: auto;
    }
    .listing-box1-text {
        position: relative;
        padding: 20px 20px 20px;
    }
    .social-box {
       width: 100%;
       border-top: #ecefec 1px solid;
           margin: 0;
        padding: 13px 0;
    }
    .social-box ul {
        text-align: center;
    }
    .social-box ul li {
        display: inline-block;
    }
    .social-box ul li a {
        width: 40px;
        height: 40px;
        background: #00a5b4;
        background: -moz-linear-gradient(top,rgba(0,165,180,1) 0%,rgba(0,87,163,1) 100%);
        background: -webkit-linear-gradient(top,rgba(0,165,180,1) 0%,rgba(0,87,163,1) 100%);
        background: linear-gradient(to bottom,rgba(0,165,180,1) 0%,rgba(0,87,163,1) 100%);
        display: block;
        border-radius: 100px;
        color: #FFF;
        text-align: center;
        line-height: 42px;
        font-size: 20px;
    }
    .listing-box1-text h3:after {
        display: none;
    }
    .listing-box1-text h3 {
        font-size: 20px;
        text-transform: capitalize;
            padding-right: 30px;
    }
    .listing-box1-text p {
        padding: 10px 0 0;
        color: #b1b1b1;
        font-weight: 100;
        letter-spacing: 1px;
        font-size: 16px;
        text-transform: capitalize;
            margin: 0;
    }
    .listing-box1-text h6 {
        font-size: 16px;
        line-height: 26px;
        text-transform: initial;
        color: #828282;
        padding: 0 20px 20px;
        font-family: 'GothamRounded-Book';
    }
         
    .listing-row .listing-box1in:hover, .listing-box1in.active {
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        border-radius: 20px;    
    }


    .team-title {
    text-align: center;
    margin: 30px 0;
	}
	.team-title h3 {
	    font-family: 'Montserrat', sans-serif;
	    font-weight: 800;
	    text-transform: uppercase;
	    color: #FFF;
	    font-size: 42px;
	    padding: 0;
	    line-height: 40px;
	    text-shadow: 5px 6px 0 #666666;
	}

	.team-title span {
	    background-color: #00a5b4;
	    padding: 5px 20px;
	    /* display: inline-block; */
	}

    span.redamorelinki.active i.fa-plus:before {
        content: "\f00d";
    }
    .redamorelink {
        position: absolute;
        top: 16px;
        right: 20px;
        font-size: 20px;
    }
        
    .toggle-content {
        position: absolute;
        box-shadow: 0 15px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24);
        border-radius: 0 0 20px 20px;
        width: 100%;
        left: 0;
        top: 100%;
        background-color: #FFF;
        z-index: 999;
        padding: 0;
        margin-top: -12px;
        display: none;
    }
    .listing-row .listing-box1 .listing-box1in.active {
        opacity: 0.5;
        pointer-events: none;
        transform: scale(0.9,0.9);
    }
    .redamorelinki{cursor: pointer;}
    a.toggle-info.redamorelinki {
        border-radius: 32px;
        height: 32px;
        padding: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 32px;
        display: inline-block;
    }
    a.toggle-info.redamorelinki span {
        background: #343434;
        display: block;
        height: 2px;
        position: absolute;
        top: 15px;
        -webkit-transition: all 0.5s 0.1s cubic-bezier(0.23, 1, 0.32, 1);
        transition: all 0.5s 0.1s cubic-bezier(0.23, 1, 0.32, 1);
        width: 12px;
    }
    a.toggle-info.redamorelinki .left {
        right: 0;
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    a.toggle-info.redamorelinki .right {
        left: 20px;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    a.toggle-info.redamorelinki.active .left {
        right: 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    a.toggle-info.redamorelinki.active .right {
        left: 20px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    @media(max-width:1199px){
        .listing-row .listing-box1 {width: calc(100%/3);}
    }

    @media (max-width: 991px){
        .listing-row .listing-box1 {width: calc(100%/2);}
    }


    @media (max-width: 767px){
        .listing-box1-text h3 {font-size: 20px;}
        .team-title h3 {font-size: 24px;text-shadow: 2px 3px 0 #666666;}
        .team-title {margin: 30px 0 5px;}
    }

    @media (max-width: 600px){
        .listing-row .listing-box1 {width: 100%;}
    }

    @media (max-width: 450px){
		.team-title h3 {font-size: 18px;}
    }
</style>

 <section class="banner-inner-outer" style="background:url(<?php echo get_template_directory_uri(); ?>/images/services.jpg) 0 0 / cover no-repeat;">
     
</section>

<!-- top heading section end -->
<div class="breadcrumb-outer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-4 col-xs-5">
                <h1 class="breadcrumb-title"><?php the_title(); ?></h1>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-7 text-right">
                <?php custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<!-- service area start -->
<div class="our-team-sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="inner-right">
					<div class="inner-content">
						<div class="team-page-contentbox1">
							<div class="team-page-contentbox1in">
								<div class="team-title">
									<h3><span>Operations</span></h3>
								</div>
								<div class="listing-row">
									<div class="listing-box1">
										<div class="listing-box1in">
											<div class="listing-box1-img">
												<img src="/wp-content/uploads/2021/04/Nidhi.jpg">   
											</div>
											<div class="listing-box1-text">
												<h3>Nidhi Rubal</h3>
												<p>HR Manager</p>
												<div class="redamorelink">
													<a class="toggle-info redamorelinki">
														<span class="left"></span>
														<span class="right"></span>
													</a>
												</div>
												<div class="toggle-content">
													<h6>Binding each employee in the organisation is the key responsibility of an HR manager. Besides, unpolished diamonds are difficult to spot by an untrained eye. So, here we have Ms. Nidhi Rubal with 3+ years of hands-on experience in managing a wide gamut, team handling, operations, employee engagement, retention, and more. Besides, her ability to boost individual professional growth helps maximize the company's performance.</h6>
													<div class="social-box">
														<ul>
															<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="listing-box1">
										<div class="listing-box1in">
											<div class="listing-box1-img">
												<img src="/wp-content/uploads/2021/04/shweta.jpg">   
											</div>
											<div class="listing-box1-text">
												<h3>Shweta</h3>
												<p>HR Executive</p>
												<div class="redamorelink">
													<a class="toggle-info redamorelinki">
														<span class="left"></span>
														<span class="right"></span>
													</a>
												</div>
												<div class="toggle-content">
													<h6>Ms. Shweta is another crucial member of our Human Resources team. The main responsibility of the HR Executive is to manage the on boarding process, recruitment activities, conduct the interview process, and handle new joinee formalities. Her leadership, communication, team management, analytical, and problem-solving skills are an added advantage.</h6>
													<div class="social-box">
														<ul>
															<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="listing-box1">
										<div class="listing-box1in">
											<div class="listing-box1-img">
												<img src="/wp-content/uploads/2021/08/Garima.jpg">   
											</div>
											<div class="listing-box1-text">
												<h3>Garima</h3>
												<p>Account Manager</p>
												<div class="redamorelink">
													<a class="toggle-info redamorelinki">
														<span class="left"></span>
														<span class="right"></span>
													</a>
												</div>
												<div class="toggle-content">
													<h6>Accounting is one of the most crucial jobs in any organization. Hiring a professional with the ability to perform complicated calculations like GST, Income Tax, and ESI EPF is a must. Ms Garima is one of the spectacular talents with 3+ years of experience in handling accounts. In addition, she stood out to be a great learner qualifying all three aspects of the job role with distinct understanding.</h6>
													<div class="social-box">
														<ul>
															<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="team-title">
									<h3><span>Managers</span></h3>
								</div>

								<div class="listing-row">
									<div class="listing-box1">
										<div class="listing-box1in">
											<div class="listing-box1-img">
												<img src="/wp-content/uploads/2019/08/ankit.jpg">   
											</div>
											<div class="listing-box1-text">
												<h3>Ankit Kumar</h3>
												<p>SEO Manager</p>
												<div class="redamorelink">
													<a class="toggle-info redamorelinki">
														<span class="left"></span>
														<span class="right"></span>
													</a>
												</div>
												<div class="toggle-content">
													<h6>Ankit Kumar is an SEO Manager at Codeflies Technologies Pvt. Ltd, having more than 8 Years of Experience and Coordinating content, design, social media, pay-per-click (PPC) marketing and other activities as well as implementing SEO Strategies.</h6>
												</div>
											</div>
										</div>
									</div>

									<div class="listing-box1">
										<div class="listing-box1in">
											<div class="listing-box1-img">
												<img src="/wp-content/uploads/2019/08/vivek.jpg">   
											</div>
											<div class="listing-box1-text">
												<h3>Vivek Singh</h3>
												<p>IT Project Manager</p>
												<div class="redamorelink">
													<a class="toggle-info redamorelinki">
														<span class="left"></span>
														<span class="right"></span>
													</a>
												</div>
												<div class="toggle-content">
													<h6>Just like a determined sailor knows how to sail through all storms, an experienced professional knows how to lead a team through all ups and downs. That’s what Mr. Vivek Singh, our IT Project Manager, is known for. In the past 6 years, Mr. Singh has contributed as an expert in tracking and planning, ensuring high end quality management, information management and cost estimation.</h6>
												</div>
											</div>
										</div>
									</div>

									<div class="listing-box1">
										<div class="listing-box1in">
											<div class="listing-box1-img">
												<img src="/wp-content/uploads/2020/07/shivani.jpg">  
											</div>
											<div class="listing-box1-text">
												<h3>Shivani Singh</h3>
												<p>Project Manager</p>
												<div class="redamorelink">
													<a class="toggle-info redamorelinki">
														<span class="left"></span>
														<span class="right"></span>
													</a>
												</div>
												<div class="toggle-content">
													<h6>Ms. Shivani is our Project Manager who partakes in major key responsibilities of Codeflies Technologies. She maintains client relations, figures out budget estimates, analyze and manage any project risks, monitor progress, and implement changes, as and when needed. She is one strong pillar of our enterprise.</h6>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="team-title">
									<h3><span>Digital Marketing</span></h3>
								</div>

								<div class="listing-row">	

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/Priyanka.jpg">  
								            </div>
								            <div class="listing-box1-text">
								                <h3>Priyanka Gusain</h3>
								                <p>SEO Executive</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Innovation comes from young talents, and we derive it from Ms. Priyanka. As an unstoppable learner and smart SEO Executive having more than a year's experience in the domain, the lady brings unimaginably innovative ideas to the table. Furthermore, her exceptional technical and programming skills help the organization ace through the SEO race.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/Varun.jpg">  
								            </div>
								            <div class="listing-box1-text">
								                <h3>Varun Sarpal</h3>
								                <p>SEO Executive</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Varun Sarpal is a recent add-on to our SEO team. His ability to meet deadlines and find rich quotes from websites can help our company revise its SEO strategy in order to boost brand value. Besides being a dedicated employee, he also has a wishful habit of being up to date and enrolling in skilful challenges. He is a dedicated professional who holds 3+ years of experience in a relevant area.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/shivani-pal.jpg">  
								            </div>
								            <div class="listing-box1-text">
								                <h3>Shivani Pal</h3>
								                <p>SEO Executive</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Ms Shivani holds strong motivation and dedication towards her job role. Her prior 3+ years of experience in search engine optimization has been a leading advantage to her response. In the run to meet deadlines, her ability to work at a fast pace and correctly up-levelling our organization on a digital platform is glorious.</h6>
								                </div>
								            </div>
								        </div>
								    </div>


								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/ritika.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Ritika Jain</h3>
								                <p>Content Writer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>In a world where content is the king, she is the queen of the game. Ms. Jain knows how to juggle words to deliver content that not only provokes every reader to think beyond the horizons, but also aligns well with the SEO requirements, thereby making the content a fit for impressive online content presentation.</h6>
								                </div>
								            </div>
								        </div>
								    </div>								    
								</div>

								<div class="team-title">
									<h3><span>Back-end Developers</span></h3>
								</div>	   														

								<div class="listing-row">	
								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2020/07/aditya.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Aditya Chaudhary</h3>
								                <p>PHP Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr. Chaudhary is another pillar of our PHP development platform. He is proficient at his PHP development skills and provides a great deal of support in developing high-performing websites and apps. </h6>
								                </div>
								            </div>
								        </div>
								    </div>      

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/Minakshi.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Meenakshi Chauhan</h3>
								                <p>PHP Developer / Laravel Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Whenever an exciting project requiring high end PHP development falls on our lap, all eyes turn to Ms. Meenakshi! She is known for her unparalleled expertise in complete PHP development, front-end and back-end, and juggling with the best of ever-evolving PHP changes, trends and advancements.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/Deepanshu.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Dipanshu</h3>
								                <p>PHP/CI Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr. Deepanshu is a high-end PHP developer who specializes in Problem solving, logic building, and writing reusable code. His impressive work in transforming robust websites is exceptional. Besides, his commendable experience as PHP Developer will strengthen the online presence of the company and its clients.</h6>
								                </div>
								            </div>
								        </div>
								    </div>     

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/05/shyam.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Shyam Ji</h3>
								                <p>PHP Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Shyam Ji holds the role of PHP developer in the company. Apart from his significant job role, he has an ability to attract the traffic to the website base by using creativity. His mastery in PHP language can help the organization reach extensive goals.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/05/Sudhir.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Sudhir Gangwar</h3>
								                <p>PHP Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Sudhir Gangwar is a cumulative addition to our PHP team. His adequate experience being Wordpress Developer can do wonders for the company. Besides, his idea to rectify keen details in a website can help stimulate the company's analytical and professional approach.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/ranu.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Ranu Kumari</h3>
								                <p>Web Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Ms Ranu is one of the senior Web Developers with 4+ years of experience in PHP, Shopify, and Codeigniter. Besides, her uprooting proficiency scales in the above-mentioned frameworks, she also holds adequate knowledge about HTML, CSS, Bootstrap, MySQL. Her diligent experience quantifies the level of creativity she adds to the projects.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/Sandeep.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Sandeep Singh</h3>
								                <p>WordPress Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Creativity is table stakes for everyone we hire.  Mr Sandeep is another ordinant pillar of our WordPress developing team holding 3 years of experience in the same field. He holds a significant expense on supporting technologies like CSS, HTML, JavaScript, BootStrap, and MySQL.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/Harshit.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Harshit</h3>
								                <p>WordPress Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr Harshit is a cumulative addition to our WordPress developers team. His 3+ years of hands-on experience on the same makes him a dedicated as well as a proficient individual whose efforts and intellect will upstage the organization's combined growth. Some of his hidden talents are teamwork, problem-solving, and planning. Besides, his passion to learn new things at every step of life rebrands the organization's beliefs.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/Tarun.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Tarun Varshney</h3>
								                <p>Laravel Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Every organization looks for a talent who knows how to break the ice when all the frameworks stop responding. Mr Tarun Varshney is one of the crucial pillars of our developing team holding proficiency in Laravel frameworks for 4+ years. Besides, some of his native interests include juggling among the scripting languages like  Core PHP, Laravel, SQL, Javascript.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/Rajnikant.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Rajnikant Lodhi</h3>
								                <p>Hybrid App Developer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr. Rajnikant has been working as a Hybrid Mobile App Developer with us,having vast knowledge in the same field. His proficiency as a web developer, allows the team to surpass any tides of complex software trends. He is known for his hands on proficiency in Angular and React JS, Ionic, React Native,etc. hybrid app development specifics.</h6>
								                </div>
								            </div>
								        </div>
								    </div>    

								</div>	

								<div class="team-title">
									<h3><span>Front-end Developers</span></h3>
								</div>	

								<div class="listing-row">	
									<div class="listing-box1">
										<div class="listing-box1in">
											<div class="listing-box1-img">
												<img src="/wp-content/uploads/2019/08/dharmesh.jpg">   
											</div>
											<div class="listing-box1-text">
												<h3>Dharmesh Kumar</h3>
												<p>Sr. Web Designer</p>
												<div class="redamorelink">
													<a class="toggle-info redamorelinki">
														<span class="left"></span>
														<span class="right"></span>
													</a>
												</div>
												<div class="toggle-content">
													<h6>Dharmesh Kumar is working as Web Designer at Codeflies Technologies Pvt. Ltd. having 4 years of experience and helps in deliver many successful projects as well as expert in HTML, CSS, Prestashop, SASS, javascript, jQuery, Hugo and Wordpress.</h6>
												</div>
											</div>
										</div>
									</div>

									<div class="listing-box1">
										<div class="listing-box1in">
											<div class="listing-box1-img">
												<img src="/wp-content/uploads/2019/08/ravi.jpg">   
											</div>
											<div class="listing-box1-text">
												<h3>Ravi Singh</h3>
												<p>Sr. Frontend Developer</p>
												<div class="redamorelink">
													<a class="toggle-info redamorelinki">
														<span class="left"></span>
														<span class="right"></span>
													</a>
												</div>
												<div class="toggle-content">
													<h6>Ravi Singh is Working as Frontend Developer carrying experience of more than 4 years. Outstanding in using Technologies like Wordpress, HTML, CSS, Bootstrap, Photoshop, AMP, javascript, jQuery. His dedication is imperative for the growth of our company.</h6>
												</div>
											</div>
										</div>
									</div>

									<div class="listing-box1">
										<div class="listing-box1in">
											<div class="listing-box1-img">
												<img src="/wp-content/uploads/2020/07/sourabh.jpg">   
											</div>
											<div class="listing-box1-text">
								                <h3>Sourav Mogha</h3>
								                <p>Web Designer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Sourav Mogha is Working as Web Designer carrying experience of more than 3 years. Outstanding in using Technologies like Wordpress, HTML, CSS, Bootstrap, Photoshop. His dedication is imperative for the growth of our company.</h6>
								                </div>
											</div>
										</div>
									</div>  

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/Ritesh.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Ritesh Kumar</h3>
								                <p>Website Designer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr. Ritesh Kumar is the Picasso of the art of website designing. He is the young talent behind all applauds we receive for our mesmerising website layouts and their high end elements. His vivid imagination and unmatched expertise makes him a man of superb creative abilities. </h6>
								                </div>
								            </div>
								        </div>
								    </div>  

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/Naveen.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Naveen Singh</h3>
								                <p>Website Designer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Designing is a daunting task for most organizations, but not for Codeflies Technologies, as we have Mr. Naveen Singh working as a keen website designer by our side. He is known for grabbing eyeballs through his enchanting and responsive website layouts. His efficiency has always made the organization stand on the expectations of clients.</h6>
								                </div>
								            </div>
								        </div>
								    </div>
								    
								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2019/08/siddharth.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Siddharth Tyagi</h3>
								                <p>Graphic Designer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Siddharth Tyagi is Graphic Designer at Codeflies Technologies Pvt. Ltd; Having experience of more than 2 Years and Expert in using Photoshop, coralDraw, Illustrator & In-Design. He is playing a vital role for the growth of the Company.</h6>
								                </div>
								            </div>
								        </div>
								    </div> 

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/Anmol.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Anmol Gupta</h3>
								                <p>Quality Analyst</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>He who works ahead of time wins the race. We are glad to have such an exemplary associate in our team, Mr. Anmol Gupta. As a diligent quality analyst, he is known for implementing fool-proof plans and making each of our projects touch success. Well versed with quality assurance testing tools; the man keeps the team abreast of the fruits of success.</h6>
								                </div>
								            </div>
								        </div>
								    </div> 

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/Ram.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Ram Sharma</h3>
								                <p>Web Designer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr Ram is another crucial member of our Web designing team. The main role of a web designer is to look after the appearance, layout, and content of the website. Likewise, a combination of 3+ years of prior experience and leading technologies like Html, CSS, Scss, Bootstrap, Tailwind, Jquery, WordPress Design, UI/UX Design help him rock any issues related to website appearance.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/Masuma.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Masuma</h3>
								                <p>Web Designer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Ms Masuma is a fresh addition to the Codeflies Team. Besides, she holds  3+ years of experience in Web designing. Her Professionalism and dedication towards her work have outcast her hidden list of talents - HTML, CSS, Bootstrap, Photoshop, JavaScript, WordPress platform proficiency. This exclusive combination of platforms makes her skills distinctive of all.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/abhishek.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Abhishek Gautam</h3>
								                <p>Web Designer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>In any organization, social skills are equally important. Our organization is a client-based service, requires social understanding as well that includes listening skills, patience, meeting deadlines.  We believe Mr Abhishek was the perfect hire. Besides, his 3 years of experience in web designing will help boost the organization's overall revenue and improve the brand identity of the businesses we intend our services to. Apart from social intellect, he holds proficiency in skills - Html, CSS, Bootstrap, Javascript, Jquery.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/Ved.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Ved Prakash</h3>
								                <p>Web Designer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr Ved is a recent addition to our web designing intellects. He holds 3+ years of experience as a web designer. Apart from his native interest, he holds proficiency in HTML, CSS, bootstrap, javascript, jquery, adobe xd, and git language. Observing his great advanced skill level, we believe his strengths would prove to be a great source of technical understanding and might help the team resolve complexity in the functioning of the projects.</h6>
								                </div>
								            </div>
								        </div>
								    </div> 
								</div> 												
								    
								<div class="team-title">
									<h3><span>Sales Team</span></h3>
								</div>

								<div class="listing-row">
									<div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/Gurvinder.jpg">  
								            </div>
								            <div class="listing-box1-text">
								                <h3>Gurwinder Kaur</h3>
								                <p>Business Development Executive</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Ms. Kaur is our opportunist to bring in new clients. She partakes in incessant team meetings to understand our business goals and blend her knowledge with thorough market research to generate leads and maintain client relations. </h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/04/Gourav.jpg">  
								            </div>
								            <div class="listing-box1-text">
								                <h3>Gaurav Gudheniya</h3>
								                <p>Business Development Executive</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr. Gudheniya is responsible for analyzing business leads, understanding market competition, strategizing actions for business growth. His contribution has been our constant support. </h6>
								                </div>
								            </div>
								        </div>
								    </div> 

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2020/01/Ghanshyam.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Ghanshyam Verma</h3>
								                <p>Email Marketer</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr. Verma is an email marketer and a tool enchanter. He knows well about how to run big-fish marketing tools like Auto Pager, Email Extractor, etc. to get the best results out of email marketing processes. He ensures Codeflies Technologies of apt data analysis and management by his expertise. </h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/Amit.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Amit Kumar</h3>
								                <p>Email Marketing</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr Amit is one of the classic talents who know how to present a proposal to a potential client. Besides, he holds 3+ years of experience in the same. His mastery in searching potential leads and platforms to execute email marketing campaigns will prove to be a close call for our new clients.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

								    <div class="listing-box1">
								        <div class="listing-box1in">
								            <div class="listing-box1-img">
								                <img src="/wp-content/uploads/2021/08/Shane-Alam.jpg">   
								            </div>
								            <div class="listing-box1-text">
								                <h3>Shane Alam</h3>
								                <p>Email Marketing</p>
								                <div class="redamorelink">
								                    <a class="toggle-info redamorelinki">
								                        <span class="left"></span>
								                        <span class="right"></span>
								                    </a>
								                </div>
								                <div class="toggle-content">
								                    <h6>Mr Shane is another grade pillar of Codeflies Email Marketing Team. His 3+ years of experience in the field makes him the most knowledgeable person to track potential leads and make online connections for the business. Besides, to achieve the goal he targets mail advertisements, brochures, updates, and proposals to promote services.</h6>
								                </div>
								            </div>
								        </div>
								    </div>

							    									   

								</div>	

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- service area end -->

<?php get_footer(); ?>