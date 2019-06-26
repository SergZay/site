        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <?php if( get_field('copyright', 'option') ): ?>
                                <?php the_field('copyright', 'option'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <?php if( get_field('design', 'option') ): ?>
                                <?php the_field('design', 'option'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->



        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->

        <?php wp_footer(); ?>
    </body>

</html>