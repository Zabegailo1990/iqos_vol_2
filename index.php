<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('description');?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <?php wp_head();?>
    
</head>
<body class="root">
    <section class="promo">
        <div class="container">
            <div class="promo__inner">
                <img class="img promo__img" src="<?php the_field('promo_bg');?>" alt="" >
                <div class="logo promo__item">
                    <svg class="logo__img"><use xlink:href="<?php bloginfo('template_url')?> ./assets/img/sprite/sprite.svg#icon-logo"></use></svg>
                </div>
                <h1 class="title title--size--l title--color--white promo__title"><?php the_field('promo_title');?></h1>
                <h2 class="subtitle"><?php the_field('promo_subtitle');?></h2>
                <div class="promo__button"><?php the_field('promo_button');?></div>
            </div>
        </div>
    </section>
    <section class="innovation">
        <div class="container">
            <h3 class="title innovation__title"><?php the_field('innovation_title');?></h3>
            <div class="innovation__inner">
                <p class="text"><?php the_field('innovation_text');?></p>
            </div>
        </div>
    </section>
    <section class="possibilities">
        <div class="container">
            <h3 class="title possibilities__title"><?php the_field('possibilities_title-one');?>НОВЫЕ ВОЗМОЖНОСТИ потратить баллы. СКОРО</h3>
            <div class="possibilities__inner">
                <div class="possibilities__item">
                    <h3 class="title title--size--xs"><?php the_field('possibilities_name-one');?></h3>
                    <div class="possibilities__img">
                        <img class="img" src="<?php the_field('possibilities_img-one');?>" alt="" >
                    </div>
                    <p class="text text--size--s possibilities__text"><?php the_field('possibilities_text-one');?></p>
                </div>
                <div class="possibilities__item">
                    <h3 class="title title--size--xs"><?php the_field('possibilities_name-two');?></h3>
                    <div class="possibilities__img">
                        <img class="img" src="<?php the_field('possibilities_img-two');?>" alt="" >
                    </div>
                    <p class="text text--size--s possibilities__text"><?php the_field('possibilities_text-two');?></p>
                </div> 
            </div>
        <a class="link possibilities__button" href="#"><?php the_field('possibilities_button');?></a> 
    </section>
    <section class="subscription">
        <div class="container">
            <h3 class="title title--size--s subscription__title"><?php the_field('subscription_title');?></h3>
            <div class="subscription__inner">
                <p class="subscription__item"><?php the_field('subscription_text');?></p>
                <a class="link subscription__link" href="#">
                    <svg class="subscription__icon subscription__icon--inst"><use xlink:href="<?php bloginfo('template_url')?> ./assets/img/sprite/sprite.svg#icon-inst"></use></svg>
                </a>
                <a class="link subscription__link" href="#">
                    <svg class="subscription__icon subscription__icon--vk"><use xlink:href="<?php bloginfo('template_url')?> ./assets/img/sprite/sprite.svg#icon-vk"></use></svg>
                </a>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="container container--faq">
            <h3 class="title title--color--dark title--faq faq__title"><?php the_field('faq_title');?></h3>
            <div class="faq__inner">
                <h3 class="subtitle subtitle--color--black subtitle--decor--text faq__subtitle"><?php the_field('faq_subtitle');?></h3>
                <div class="accordion">
                    <div class="accordion__item">
                        <div class="accordion__title"><?php the_field('faq_question-1');?></div>
                        <div class="text accordion__text"><?php the_field('faq_answer-1');?></div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title"><?php the_field('faq_question-2');?></div>
                        <div class="text accordion__text"><?php the_field('faq_answer-2');?></div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title"><?php the_field('faq_question-3');?></div>
                        <div class="text accordion__text"><?php the_field('faq_answer-3');?></div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title"><?php the_field('faq_question-4');?></div>
                        <div class="text accordion__text"><?php the_field('faq_answer-4');?></div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title"><?php the_field('faq_question-5');?></div>
                        <div class="text accordion__text"><?php the_field('faq_answer-5');?></div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title"><?php the_field('faq_question-6');?></div>
                        <div class="text accordion__text"><?php the_field('faq_answer-6');?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq__inner">
            <div class="text text--size--l text--color--light faq__text">C полным списком вопросов можно <a class="link faq__link" href="">ознакомиться по ссылке</a></div>
        </div>
    </section>
    <?php wp_footer();?>
</body>
</html>