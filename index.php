<?php
require "connectdb.php";
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Spacedisk</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>

		<script type="text/javascript">
				jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
		</script>
	<script src="js/responsiveslides.min.js"></script>
					<script>
									
									$(function () {
									 
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
					</script>
</head>
<body>
<div class="header">
       <div class="header_top">
			<div class="wrap">		
				<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt="" /></a>
					</div>	
					<div class="menu">
					    <ul>
							<li class="active"><a href="index.php">Главная</a></li>
							<li><a href="hosting.php">Информация о подписках</a></li>
							<li><a href="support.php">Поддержка</a></li>
							<li><a href="contact.php">Контакты</a></li>
							<li><a href="reg1.php">Войти</a></li>
							<div class="clear"></div>
						</ul>
					</div>
	    		 <div class="clear"></div>
	        </div>
	   </div>
   	<div class="header_bottom">
		<div class="slider">
			<div class="wrap">
  	     		
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="da-slide">
								<div class="slide-text">
								<h2>Добро пожадовать <span>Spacedisk</span></h2>
								<p>Один из лидеров сервисов по хранению облачных данных</p>
									<a href="#" class="da-link">Читать больше</a>
								</div>
								<div class="da-img"><img src="images/2.png" alt="image01" /></div>
								<div class="clear"></div>
							</div>
						</li>
						<li>
							<div class="da-slide">
								<div class="slide-text">
								<h2>Стабильные <span>сервера</span></h2>
								<p>Наши сервера находятся по всему миру,что обеспечивает быструю работу с ними и стабильнсть.</p>					
								<a href="#" class="da-link">Читать больше</a>
								</div>
								<div class="da-img"><img src="images/1.png" alt="image01" /></div>
							  <div class="clear"></div>
							</div>
						</li>
						<li>
							<div class="da-slide">
								<div class="slide-text">
								<h2><span>Удобная работа</span> с хранилищем</h2>
								<p>Нашь интерфейс понятен и удобен,что обеспечивает комфортную работу с хранилищем</p>
								<a href="#" class="da-link">Читать больше</a>
								</div>
								<div class="da-img"><img src="images/3.png" alt="image01" /></div>
							  <div class="clear"></div>
							</div>
						</li>
						<li>
							<div class="da-slide">
								<div class="slide-text">
								<h2>Максимальная защита  <span>облачных данных</span></h2>
								<p>Мы гарнатируем максимальную защиту ваших данных</p>
								<a href="#" class="da-link">Читать больше</a>
								</div>
								<div class="da-img"><img src="images/2.png" alt="image01" /></div>
							  <div class="clear"></div>
							</div>
						</li>
					</ul>
				</div>
		    </div>
  	    </div>
		<div class="clear"></div>
	</div>
</div>

  <div class="main">
	<div class="content_top">
		    <div class="wrap">
		        <div class="ptables">
             	<ul class="green pricing jcarousel-list jcarousel-list-horizontal">
                  <li>
                        <ul>
		                    <li class="title"><h3>Для частных лиц</h3><h4>250р<small>/месяц</small></h4></li>
		                    <li>Неограниченная Поддержка</li>
		                    <li>Полная гарантия сохранения данных</li>
		                    <li>50 ГБ места на диске</li>
		                    <li>Доступ к панели &amp; Fantastico</li>
		                    <li>24/7 Live Support</li>
		                    <li>Легко обновить</li>
		                    <li><a href="#account" class="scroll">Присоединиться сейчас</a></li>
                     </ul>
                 </li>
                     <li>
						 <ul>
                           <li class="title"><h3>Для семьи</h3><h4>400р<small>/месяц</small></h4></li>
						   <li>Неограниченная Поддержка</li>
		                   <li>Полная гарантия сохранения данных</li>
		                   <li>100 ГБ места на диске</li>
		                   <li>Доступ к панели &amp; Fantastico</li>
		                   <li>24/7 Live Support</li>
		                   <li>Легко обновить</li>
		                   <li><a href="#account" class="scroll">Присоединиться сейчас</a></li>
                       </ul>
                    </li>               
                    <li>
                    	<ul>
		                    <li class="title"><h3>Для предприятия</h3><h4>600р<small>/месяц</small></h4></li>
		                    <li>Неограниченная Поддержка</li>
		                    <li>Полная гарантия сохранения данных</li>
		                    <li>150 ГБ места на диске</li>
		                    <li>Доступ к панели &amp; Fantastico</li>
		                    <li>24/7 Live Support</li>
		                    <li>Легко обновить</li>
		                    <li><a href="#account" class="scroll">Присоединиться сейчас</a></li>
                		</ul>
                	</li>        
                <li>
                	<ul>
	                    <li class="title"><h3>Для компании</h3><h4>1000р<small>/месяц</small></h4></li>
	                    <li>Неограниченная Поддержка</li>
	                    <li>полная гарантия сохранения данных</li>
	                    <li>200 ГБ места на диске</li>
	                    <li>Доступ к панели &amp; Fantastico</li>
	                    <li>24/7 Live Support</li>
	                    <li>Легко обновить</li>
	                    <li><a href="#account" class="scroll">Присоединиться сейчас</a></li>
                 </ul>
               </li>   
               <div class="clear"></div>          
            </ul>
         </div>
       </div>        
     </div>
     <div class="content_data">
     	<div class="content">     		
     		 <div class="services_heading">
     		 <h2>Наши услуги</h2>
     		  <p>позволяет хранить все — обычные файлы, данные из облака, веб-ярлыки — в едином пространстве</p>
     		  </div>
     		 <div class="wrap">
     		 	<div class="services">
     			  <div class="services_list">
				     <div class="services_grid1">	
					  <div class="services_img">
							<img src="images/service_1.png" alt="" />
					   </div>
							<div class="services_desc">
								<h4>Бесплатный Email</h4>
								<p>При любом уровне подписки, вы получаете свою индивидуальную почтуб, которую  можете  использовать в любых других сервисах.</p>
							</div>
					<div class="clear"></div>
				</div>
					<div class="services_grid2">	
						   <div class="services_img">
									<img src="images/service_2.png" alt="" />
							</div>
									<div class="services_desc">
										<h4>Защита конфиденциальности</h4>
										<p>Обеспечьте конфиденциальность своих файлов с помощью нескольких уровней защиты, предоставляемых службой, которой доверяют миллионы.</p>
									</div>
							<div class="clear"></div>
					  </div>
				  <div class="clear"></div>
			</div>
			    	<div class="services_list">
				 <div class="services_grid1">	
					  <div class="services_img">
							<img src="images/service_3.png" alt="" />
					   </div>
							<div class="services_desc">
								<h4>Круглосуточная поддержка</h4>
								<p>Служба поддержки работает в любое 24/7 и готова помочь вам влюбое время,быстро и эффективно.</p>
							</div>
					<div class="clear"></div>
				</div>
					<div class="services_grid2">	
						   <div class="services_img">
									<img src="images/service_4.png" alt="" />
							</div>
									<div class="services_desc">
											<h4>Доступность</h4>
											<p>Быстро отправляйте файлы любого размера кому угодно, даже если у получателя нет аккаунта</p>
										</div>
							<div class="clear"></div>
					  </div>
				  <div class="clear"></div>
			</div>
			 <div class="services_list">
				  <div class="services_grid1">	
					<div class="services_img">
						<img src="images/service_5.png" alt="" />
					</div>
						<div class="services_desc">
							<h4>Удобный интерфейс</h4>
							<p>Управляйте заданиями, отслеживайте обновления файлов и синхронизируйте данные со своими рабочими группами и клиентами.</p>
						</div>
					<div class="clear"></div>
				</div>
						<div class="services_grid2">	
							  <div class="services_img">
								  <img src="images/service_6.png" alt="" />
							  </div>
									<div class="services_desc">
										<h4>Удобство использувания где бы вы не находились</h4>
										<p>Храните, обменивайтесь и имейте доступ ко всем своим файлам используя одну простую и высоконадежную платформу в любое время и в любом месте.</p>
									</div>
							   <div class="clear"></div>
					      </div>
				   <div class="clear"></div>
			   </div>
     		</div>
     	  </div>    	
      </div>
   </div>       
  <div class="content_bottom" id="account">
	<div class="wrap">
    	<div class="register_account">
    		<h3>Зарегистрировать новую учетную запись </h3>
    		<form>
		   			 <table>
		   				<tbody><tr><td>
		   				<div class="left-fields">
		   				<div><input type="text" placeholder="Имя"></div>
		    			<div><input type="text" placeholder="Название комании"></div>
		    			<div><input type="text" placeholder="E-Mail "></div>
		    			<div><input type="password" placeholder="Пароль"></div>
		    			</div>
		    			 </td>
		    			<td><div><input type="text" placeholder="Адрес"></div>
		    			<div><select id="country" onchange="change_country(this.value)" class="frm-field required">
		            <option value="null">Выберете страну</option>         
		            <option value="AX">Россия</option>
		         </select></div>		        
		          <div><input type="text" placeholder="Город"></div>
		           <div>
		          	<input type="text" value="" class="code"> - <input type="text" value="" class="number">
		          		<p>Код страны + номер телефона</p>
		          </div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="create_account"><input type="submit" value="Создать аккаунт"></div>
		    <p class="terms">Нажимая «Создать учетную запись», вы соглашаетесь с  <a href="#">Условиями &amp; Положениями</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
        <div class="login_panel">
        	<h3>Войти в существующий аккаунт </h3>
        	<form id="member">
                	<input type="text" placeholder="Имя пользователя" class="field">
                    <input type="password" placeholder="Пароль" class="field">                
                 <p class="note">Если вы забыли свой пароль нажмите  <a href="#">сюда</a></p>
                    <div class="login"><input type="submit" value="Войти"></div>
                </form>
            </div>              
       <div class="clear"></div>
    </div>
  </div>
  </div>
 <div class="footer">
   	  <div class="wrap">
   	    <div class="footer_grides">
				<div class="footer_grid2" style="padding:0px">
					<h3>Наши слуги</h3>
								<ul>
						            <li><a href="#">Выделенные серверы</a></li>
						     		<li><a href="#">Виртуальные серверы</a></li>
						     		<li><a href="#">Общий хостинг</a></li>
						     		<li><a href="#">Индивидуальные решения</a></li>						     		
						   	   </ul>
				     </div>
				<div class="footer_grid1">	
						<h3>Связь с нами</h3>
							<div class="address">
							<ul>
						  	  <li>Россия,Омск</li>
						  	  <li>Улица пушкина,дом №30</li>
						  	   
						  	 <li><a href="Spacedisk@gmail.com">Spacedisk@gmail.com</a></li>
						  	 <li><span>Телефон :</span> +00 000 00000</li>
						  </ul>
					  	</div>
			     </div>
				<div class="footer_grid5">
					<h3>НАША КОМПАНИЯ</h3>
						<div class="f_menu">
							   <ul>
						            <li><a href="#">О нас</a></li>
						     		<li><a href="#">Вакансии</a></li>
						     		<li><a href="#">Новости</a></li>
						     		<li><a href="#">Для инвесторов</a></li>	
						     		<li><a href="#">Партнеры</a></li>					     		
						   	   </ul>
						</div>
				</div>
				<div class="footer_grid3">
					<h3>Сообщество</h3>
						<div class="f_menu">
							   <ul>
						            <li><a href="index.html">Блог</a></li>
						     		<li><a href="domains.html">Разработчикам</a></li>
						     		<li><a href="hosting.html">Форму сообщества</a></li>
						     		<li><a href="support.html">Пригласите друзей</a></li>
						     		>
						   	   </ul>
						</div>
				</div>
		<div class="footer_grid4">
			<h3>Следите за нами</h3>
				<div class="img_list">
				    <ul>
					     <li><img src="" alt="" /><a href="#">Подпишись в Youtube</a></li>
					     <li><img src="" alt="" /><a href="#">ПОДПИШИСЬ ВКОНТАКТЕ</a></li>
				    </ul>
				</div>
		 </div>
	 <div class="clear"></div>
    </div>
   </div>
</div>
		<div class="copy_right">
				<p> &copy; Spacedisk 2022<a href=""></a></p>
		 </div>
</body>
</html>

