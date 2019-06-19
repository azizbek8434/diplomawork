   <div class="footer-top">
       <div class="container">
           <div class="row">

               <div class="col-lg-3 col-md-6 footer-links">
                   <h4>Календар</h4>
                   <div id="demo"></div>
               </div>

               <div class="col-lg-3 col-md-6 footer-links">
                   <h4>Фойдали ҳаволалар</h4>
                   <ul>
                       <li><i class="ion-ios-arrow-right"></i> <a href="#">Асосий</a></li>
                       <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                       <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                       <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                       <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                   </ul>
               </div>

               <div class="col-lg-3 col-md-6 footer-contact">
                   <h4>Прокуратура</h4>
                <p>
                       ЎЗБЕКИСТОН РЕСПУБЛИКАСИ<br>
                       БОШ ПРОКУРАТУРАСИ<br>
                       Яҳё Ғуломов кўчаси, 66<br>
                       <strong>Телефон:</strong> +99871 233-82-80<br>
                       <strong>Э-Почта:</strong> info@prokuratura.uz<br>
                   </p>

                   <div class="social-links">
                       <a href="https://t.me/uzbprokuratura" target="_blank" class="telegram"><i
                               class="fa fa-telegram"></i></a>
                       <a href="https://www.facebook.com/prokuraturauzb" target="_blank" class="facebook"><i
                               class="fa fa-facebook"></i></a>
                       <a href="https://www.instagram.com/prokuraturauz/" target="_blank" class="instagram"><i
                               class="fa fa-instagram"></i></a>
                       <a href="https://www.youtube.com/channel/UCMvwgB_fKK2XyNgxYe5CFZQ" target="_blank"
                           class="youtube"><i class="fa fa-youtube"></i></a>
                   </div>

               </div>

               <div class="col-lg-3 col-md-6 footer-newsletter">
                   <h4>Бизнинг хабарномамиз</h4>
                   <p>Ўзбекистон Республикаси Бош Прокуратураси томонидан олиб борилаётган ишлар ва янгиликлардан
                       ҳабардор бўлиб туриш учун э-почта манзилингизни қолдиринг.</p>
                   <form action="/subscribe" method="post">
                       {{ csrf_field() }}
                       <input type="email" name="email"><input type="submit" value="Жўнатиш">
                   </form>
               </div>

           </div>
       </div>
   </div>

   <div class="container">
       <div class="copyright">
           &copy; 2019 <strong>Прокуратура</strong>. Барча ҳуқуқлар ҳимояланган
       </div>
   </div>
