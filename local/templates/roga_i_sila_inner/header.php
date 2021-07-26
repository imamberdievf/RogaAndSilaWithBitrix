<?php
if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addCss(SITE_DEFAULT_PATH . '/assets/css/form.css');
$asset->addCss(SITE_DEFAULT_PATH . '/assets/css/tailwind.css');
$asset->addCss(SITE_DEFAULT_PATH . '/assets/css/base.css');
$asset->addCss(SITE_DEFAULT_PATH . '/assets/css/inner_page_template_styles.css');
$asset->addCss(SITE_DEFAULT_PATH . '/assets/js/vendor/slick.css');

$asset->addJs(SITE_DEFAULT_PATH . '/assets/js/vendor/jquery-3.6.0.js');
$asset->addJs(SITE_DEFAULT_PATH . '/assets/js/vendor/slick.js');
$asset->addJs(SITE_DEFAULT_PATH . '/assets/js/script.js');
?>
<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <title><?php $APPLICATION->ShowTitle()?></title>
    <?php $APPLICATION->ShowHead()?>
    <link href="<?=SITE_DEFAULT_PATH?>/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<?php $APPLICATION->ShowPanel()?>
<div class="wrapper flex flex-1 flex-col">
    <header class="bg-white">
        <div class="border-b">
            <div class="container mx-auto block sm:flex sm:justify-between sm:items-center py-4 px-4 sm:px-0 space-y-4 sm:space-y-0">
                <div class="flex justify-center">
                    <a href="/" class="inline-block sm:inline hover:opacity-75">
                        <img src="<?=SITE_DEFAULT_PATH?>/assets/images/logo.png" width="222" height="30" alt="">
                    </a>
                </div>
                <div>
                    <ul class="flex justify-center sm:justify-end items-center space-x-8 text-sm">
                        <li>
                            <a class="text-gray-500 hover:text-orange" href="authorized.html">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Регистрация
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-500 hover:text-orange" href="form.html">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                                Авторизация
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-b">
            <div class="container mx-auto block lg:flex justify-between items-center px-2 sm:px-0">
                <form name="search_form" class="bg-gray-100 rounded-full flex items-center px-3 text-sm order-2 my-4 lg:my-0">
                    <label for="search-input" class="hidden"></label>
                    <input id="search-input" type="text" placeholder="Поиск по сайту" class="bg-gray-100 rounded-full py-1 px-1 focus:outline-none placeholder-opacity-50 flex-1 border-none focus:shadow-none focus:ring-0">
                    <button type="submit" class="group focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-black group-hover:text-orange h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>

                <nav class="order-1">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a class="inline-block p-4 text-black font-bold border-l border-r border-transparent group-hover:text-orange group-hover:bg-gray-100 group-hover:border-l group-hover:border-r group-hover:border-gray-200 group-hover:shadow" href="catalog.html">
                                Легковые
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>

                            <ul class="dropdown-navigation-submenu absolute hidden group-hover:block bg-white shadow-lg">
                                <li><a class="block py-2 px-4 text-black hover:text-orange hover:bg-gray-100" href="catalog.html">Седаны</a></li>
                                <li><a class="block py-2 px-4 text-black hover:text-orange hover:bg-gray-100" href="catalog.html">Хетчбеки</a></li>
                                <li><a class="block py-2 px-4 text-black hover:text-orange hover:bg-gray-100" href="catalog.html">Универсалы</a></li>
                                <li><a class="block py-2 px-4 text-black hover:text-orange hover:bg-gray-100" href="catalog.html">Купе</a></li>
                                <li><a class="block py-2 px-4 text-black hover:text-orange hover:bg-gray-100" href="catalog.html">Родстеры</a></li>
                            </ul>
                        </li>
                        <li class="group">
                            <a class="inline-block p-4 text-black font-bold border-l border-r border-transparent group-hover:text-orange group-hover:bg-gray-100 group-hover:border-l group-hover:border-r group-hover:border-gray-200 group-hover:shadow" href="catalog.html">
                                Внедорожники
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <ul class="dropdown-navigation-submenu absolute hidden group-hover:block bg-white shadow-lg">
                                <li><a class="block py-2 px-4 text-black hover:text-orange hover:bg-gray-100" href="catalog.html">Рамные</a></li>
                                <li><a class="block py-2 px-4 text-black hover:text-orange hover:bg-gray-100" href="catalog.html">Пикапы</a></li>
                                <li><a class="block py-2 px-4 text-black hover:text-orange hover:bg-gray-100" href="catalog.html">Кроссоверы</a></li>
                            </ul>
                        </li>
                        <li class="group"><a class="inline-block p-4 text-black font-bold hover:text-orange" href="catalog.html">Раритетные</a></li>
                        <li class="group"><a class="inline-block p-4 text-black font-bold hover:text-orange" href="catalog.html">Распродажа</a></li>
                        <li class="group"><a class="inline-block p-4 text-black font-bold hover:text-orange" href="catalog.html">Новинки</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <nav class="container mx-auto bg-gray-100 py-1 px-4 text-sm flex items-center space-x-2">
        <a class="hover:text-orange" href="index.html">Главная</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-3 w-3 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
        </svg>
        <span>Легковые</span>
    </nav>
    <main class="flex-1 container mx-auto bg-white flex">

        <div class="flex-1 grid grid-cols-4 lg:grid-cols-5 border-b">
            <aside class="hidden sm:block col-span-1 border-r p-4">
                <nav>
                    <ul class="text-sm">
                        <li>
                            <p class="text-xl text-black font-bold mb-4">Информация</p>
                            <ul class="space-y-2">
                                <li><a class="hover:text-orange" href="inner.html">О компании</a></li>
                                <li><a class="text-orange cursor-default" href="inner.html">Контактная информация</a></li>
                                <li><a class="hover:text-orange" href="inner.html">Условия продаж</a></li>
                                <li><a class="hover:text-orange" href="inner.html">Финансовый отдел</a></li>
                                <li><a class="hover:text-orange" href="inner.html">Для клиентов</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>
            <div class="col-span-4 sm:col-span-3 lg:col-span-4 p-4">
                <h1 class="text-black text-3xl font-bold mb-4"><?php $APPLICATION->ShowTitle()?></h1>