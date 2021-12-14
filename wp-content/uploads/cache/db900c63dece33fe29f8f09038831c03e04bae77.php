<!doctype html>
<html <?php echo get_language_attributes(); ?>>
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body <?php body_class() ?>>
        <?php do_action('get_header') ?>
        <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="wrap container" role="document">
            <div class="content">
                <main class="main">
                    <h1>Experience</h1>
                    <div class="highlight experience">
                        <h2>Campbell Ewald</h2> <h3>Front End Developer</h3>
                        <h4>Responsiblities</h4>
                        <p><strong>HTML5 Email Development - </strong> Ensuring cross compatibility between
                            different devices, email clients, and browsers was something I took very seriously at CE.
                            I was responsiblity for developing and HTML5 email framework that Travelocity & USAA used
                            for a number of years.</p>
                        <p>This framework was built with Jade, NodeJS, Gulp, HTML5, and SASS. I developed a
                            reusable custom SASS/CSS3 specifically for emails that we passed along to our clients.
                            This gave them the ability to mix and match different modules within newsletters and
                            other emailers depending on design requirements and needs.</p>
                        <p><strong>Drupal Migration -</strong> Executed on migration of a large government-run site
                            based in Upstate New York from Drupal 7 to Drupal 8. Along with this migration came a
                            redesign, as well as the creation of a blog. I was responsible all backend development of
                            this site. </p>
                    </div>
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
        </div>
        <?php do_action('get_footer') ?>
        <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php wp_footer() ?>
    </body>
</html>

