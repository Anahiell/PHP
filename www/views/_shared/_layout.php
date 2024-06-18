<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->view_data['title']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/site.css"/>
    <link rel="stylesheet" href="/css/base.css"/>
</head>
<body>
<div class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="/img/php.png" alt="" class="nav-logo-img d-inline-block align-text-top">
                    Some PHP Project
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="btn btn-outline-red nav-link mx-2" href="/home/hmw1">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-red nav-link mx-2" href="#">Магазин</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-red nav-link mx-2" href="#">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-red nav-link mx-2" href="#">Контакты</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="btn btn-outline-red nav-link mx-2" href="#">Вход</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-red nav-link mx-2" href="/feed/feedback" title="Оцените нас">
                                <i class="bi bi-emoji-smile"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="view-content">
        <?php include $view_path ; ?>
    </main>
    
    <footer class="mt-auto">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>О компании</h3>
                <p>Краткое описание компании, миссии и услуг.</p>
            </div>
            <div class="footer-section links">
                <h3>Полезные ссылки</h3>
                <ul>
                    <li><a href="/privacy-policy">Политика конфиденциальности</a></li>
                    <li><a href="/terms-of-service">Условия использования</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/sitemap">Карта сайта</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h3>Контакты</h3>
                <p><i class="fa fa-phone"></i> +1 (555) 123-4567</p>
                <p><i class="fa fa-envelope"></i> info@example.com</p>
                <p><i class="fa fa-map-marker"></i> 1234 Example St, City, Country</p>
            </div>
            <div class="footer-section social">
                <h3>Мы в социальных сетях</h3>
                <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Example Company. Все права защищены.</p>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="/js/site.js"></script>
</body>
</html>
