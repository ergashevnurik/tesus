<?php
//Footer Goes Here
echo '
<footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <h3>Услуги</h3>
                                <ul>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Установка камер видеонаблюдения</a>
                                        <div class="footer-line"></div>
                                    </li>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Установка домофонов</a>
                                        <div class="footer-line"></div>
                                    </li>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Установка кодовых панелей</a>
                                        <div class="footer-line"></div>
                                    </li>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Установка шлагбаумов</a>
                                        <div class="footer-line"></div>
                                    </li>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Установка звуковых устройств</a>
                                        <div class="footer-line"></div>
                                    </li>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Организация локальных сетей</a>
                                        <div class="footer-line"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <h3>О компании</h3>
                                <ul>
                                    <li>
                                        <a href="#about">О нас</a>
                                        <div class="footer-line"></div>
                                    </li>
                                    <li>
                                        <a href="#services">Услуги</a>
                                        <div class="footer-line"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <h3>Наши преимущества</h3>
                                <ul>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Низкие цены на установку</a>
                                        <div class="footer-line"></div>
                                    </li>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Установка в удобное для вас время</a>
                                        <div class="footer-line"></div>
                                    </li>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Профессиональная команда</a>
                                        <div class="footer-line"></div>
                                    </li>
                                    <li>
                                        <a href="https://t.me/tesusgroup" target="_blank">Осуществляем полный цикл производства</a>
                                        <div class="footer-line"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <h3>Подписаться</h3>
                                <form action="./backend/database/datasourceSubscribe.php" method="post">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" name="subscriber" placeholder="Подпишись..." />
                                        <button type="submit" class="btn btn-dark">
                                            <i class="bi bi-envelope"></i>
                                        </button>
                                    </div>
                                </form>
                                <hr />
                                <div class="footer_call_center">
                                    <h5>Call Center</h5>
                                    <h3>+998 90 003 00 09</h3>
                                </div>
                                <hr />
                                <div class="footer_social_media">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/tesusgroup" target="_blank">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://t.me/tesusgroup" target="_blank">
                                                <i class="bi bi-telegram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/tesusgroup/" target="_blank">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="bi bi-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h5 class="footer_all_rights mr-auto">&copy; All Rights are reserved <script>document.write(new Date().getFullYear())</script></h5>
                        <h5 class="footer_all_rights">Developed By <strong><a href="https://menz.uz">MENZ</a></strong></h5>
                    </div>
                </div>
            </footer>
';
//Footer Ends Here
?>