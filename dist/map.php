<?
include('includes/head.php');
?>
		<section class="breadcrumb-box">
	<div class="content">
		<ol class="breadcrumb">
			<li>
				<a href="\">Главная</a>
			</li>
			\<li class="breadcrumb__active active">Новости</li>
		</ol>
	</div>
</section>
		<section class="content-box">
		<div class="content content_flex content_stretch">
            <div class="base-block__one-column">
                <h2 class = "zagolovok">Заголовок</h2>
                <div class="production-page-items__box">



                </div>
                <div class="pagination">
				<ul class="pagination">
					<li class="disabled">
						<span>Первая</span>
					</li>
					<li class="disabled">
						<span>«</span>
					</li>
					<li class="active">
					<a href="index.php?id=5">1</a>
						</li>
					<li>
						<a href="index.php?id=5&amp;page=2">2</a>
					</li>
					<li class="control">
						<a href="index.php?id=5&amp;page=2">»</a>
					</li>
					<li class="control"><a href="index.php?id=5&amp;page=2">Последняя</a></li>
				</ul>
			</div>




            </div>
		</div>
		</section>


	</div>
</div>
<section class="form-box-bottom__block">
  <div class="content">
	<h2 class = "podzagolovok color_white wow fadeInLeft" data-wow-offset="100" data-wow-duration="1.3s">Отправьте заявку на расчет стоимости Вашего тиража</h2>
	<div class="form-box__bottom wow fadeIn" data-wow-delay="1s" data-wow-duration="1.3s">
	  <form class="form-box-bottom__form validate" action="" method="post" id="bottom_form">

		<div class="form-box-bottom__pole">
		  <span class="form-box-bottom__input-name">Ваше имя</span>
		  <input class="form-box-bottom__input" type="text" placeholder="" name="name" required/>
		</div>
		<div class="form-box-bottom__pole">
		  <span class="form-box-bottom__input-name">Номер телефона</span>
		  <input class="form-box-bottom__input" type="tel" placeholder="" name="tel" required/>
		</div>
		<div class="form-box-bottom__pole">
		  <span class="form-box-bottom__input-name">E-mail</span>
		  <input class="form-box-bottom__input" type="email" placeholder="" name="email" required/>
		</div>
		<div class="form-box-bottom__pole_big">
		  <span class="form-box-bottom__input-name">Сообщение</span>
		  <textarea class="form-box-bottom__textarea" name="comment" rows="3"></textarea>
		</div>

		<input class="form-box__submit" type="submit" value="Отправить!" name="submit"/>
	  </form>
	</div>
  </div>
</section>
<?
include('includes/footer.php');
?>
