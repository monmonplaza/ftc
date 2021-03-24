<?php wp_footer(); ?>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-box">
              <img src="<?php echo get_template_directory_uri()?>/img/logo-white.png" alt="" />
              <p>
                FTC has been privileged to help hundreds of children, has
                established several child care facilities, and now provides
                regular full time care, education, and opportunity for dozens of
                former street children.
              </p>

              <a href="#" class="btn bg-secondary">Donate Now</a>
            </div>
          </div>

          <div class="col-md-2">
            <div class="footer-box">
              <h3>Social Media</h3>
              <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-2">
            <div class="footer-box">
              <h3>Quick Links</h3>
              <?php wp_nav_menu(array(
               'theme_location' => 'footerMenuLocation'
               )
               
           ); ?>
            </div>
          </div>

          <div class="col-md-4">
            <div class="footer-box">
              <h3>Ministries</h3>
              <ul>
                <li><a href="#">Frontline Business Solutions</a></li>
                <li><a href="#">Frontline Worship Center</a></li>
                <li><a href="#">Frontline Christian Academy</a></li>
                <li><a href="#">Frontline Threadworks</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

<?php 
    global $template;
    echo '<div class"template-name" style="position:fixed; left: 30px; bottom: 30px; padding:2px; background: coral; color:#fff; font-size: 13px;">'.basename($template).'</div>';

?>

    <div class="copyright">
      <div class="container">
        <p>Face The Children - An Opportunity for Life</p>
        <p>&copy; <?php echo wp_date( 'Y' )?> Philippine Frontline Ministries</p>
      </div>
    </div>

  </body>
</html>
