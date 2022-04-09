<!DOCTYPE HTML>
<html>
<head>
<title>Spacedisk</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript">
				jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
		</script>
</head>
<body>
<div class="header">
       <div class="header_top">
	 <div class="wrap">		
		 	<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
					</div>	
					<div class="menu">
					    <ul>
							<li><a href="index.html">Главная</a></li>
							<li class="active"><a href="hosting.html">Информация о подписках</a></li>
							<li><a href="support.html">Поддержка</a></li>
							<li><a href="contact.html">Контакты</a></li>
							<li><a href="">Войти</a></li>
							<div class="clear"></div>
						</ul>
					</div>
	    		 <div class="clear"></div>
	       </div>
	   </div>
  </div>
</div>
  <div class="main">
  	 <div class="wrap">
  	  <div class="plans">
  			<h3>Выберите свой план</h3>
  			 <div class="plans_table">
  			 	
  			 	<table width="100%" cellspacing="0" class="compare_plan">
				<thead>
   					<tr>
        				<th class="plans-list"><h3>ОСОБЕННОСТИ ПЛАНА</h3></th>
        				<th class="plans-list"><h3>Для частных лиц</h3><h4>250р<small>/месяц</small></h4></th>
        				<th class="plans-list"><h3>Для семьи</h3><h4>400р<small>/месяц</small></h4></th>
        				<th class="plans-list"><h3>Для предприятия</h3><h4>600р<small>/месяц</small></h4></th>
        				<th class="plans-list"><h3>Для комании</h3><h4>1000р<small>/месяц</small></h4></th>
    				</tr>
				</thead>
					<tfoot>
	    			<tr>
				        <td> </td>
        				<td class="order_now"><a href="#account" class="scroll"><button>Заказать сейчас</button></a></td>
        				<td class="order_now"><a href="#account" class="scroll"><button>Заказать сейчас</button></a></td>
        				<td class="order_now"><a href="#account" class="scroll"><button>Заказать сейчас</button></a></td>
        				<td class="order_now"><a href="#account" class="scroll"><button>Заказать сейчас</button></a></td>
					</tr>
					</tfoot>				
   				<tbody>
   					<tr>
	        			<td class="plan_list_title">Объем аккаунта</td>
				        <td class="price_body">250р</td>
				        <td class="price_body">400р</td>
				        <td class="price_body">600р</td>
			    	    <td class="price_body">1000р</td>
	    			</tr>
    				<tr>
        				<td class="plan_list_title">Пользователи</td>
						<td class="price_body">1 пользователь</td>
		        		<td class="price_body">3 пользователя</td>
		        		<td class="price_body">3 пользователя и более</td>
			        	<td class="price_body">3 пользователя и более</td>
    				</tr>
    				<tr>
        				<td class="plan_list_title">Лучшая в своем классе технология синхронизации</td>
			    	    <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
			        	<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
						<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
					</tr>
    				<tr>
			    	    <td class="plan_list_title">Доступ к файлам откуда угодно и когда угодно</td>
			        	<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
						<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
    				</tr>
    				<tr>
        				<td class="plan_list_title">Резервное копирование компьютера</td>
	        			<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
        				<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
        				<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
    				</tr>
	    			<tr>
    	    			<td class="plan_list_title">E-mail</td>
        				<td class="price_body"><img src="images/icon-remove.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
			    	    <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
			        	<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
	    			</tr>
    				<tr>
        				<td class="plan_list_title">Удобный и безопасный общий доступ</td>
				        <td class="price_body"><img src="images/icon-remove.png" alt="img" /></td>
			    	    <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
			        	<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
	        			<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
    				</tr>
    				<tr>
        				<td class="plan_list_title">Удаленное стирание данных</td>
        				<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
			        	<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
    				</tr>
    				<tr>
        				<td class="plan_list_title">256-битное шифрование AES и шифрование SSL/TLS</td>
				    	<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
        				<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
    				</tr>
    				<tr>
        				<td class="plan_list_title">Консоль администрирования</td>
						<td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /> </td>
				        <td class="price_body"><img src="images/tickmark-icon.png" alt="img" /></td>
    				</tr>
				</tbody></table>
  			 	
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
					<li><img src="" alt="" /><a href="#">ПОДПИШИСЬ В YOUTUBE</a></li>
					<li><img src="" alt="" /><a href="#">ПОДПИШИСЬ ВКОНТАКТЕ</a></li>
			   </ul>
		   </div>
	</div>
<div class="clear"></div>
</div>
</div>
</div>
   <div class="copy_right">
		   <p> &copy; Spacedisk 2022 <a href=""></a></p>
	</div>
</body>
</html>
