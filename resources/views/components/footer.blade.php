<footer>
    <div class="footer-content">

        <div class="footer-about">
            <h3>{{ __('messages.footer_about_title') }}</h3>
            <p>{{ __('messages.footer_about_text') }}</p>
        </div>

        <div class="footer-contact">
            <h3>{{ __('messages.footer_contact_title') }}</h3>
            <ul>
                <li><strong>{{ __('messages.footer_contact_address') }}</strong></li>
                <li><strong>{{ __('messages.footer_contact_email') }}</strong></li>
                <li><strong>{{ __('messages.footer_contact_phone') }}</strong></li>
            </ul>
        </div>

        <div class="footer-social">
            <h3>{{ __('messages.footer_follow_us') }}</h3>
            <ul>
                <li><a href="https://www.facebook.com" target="_blank">{{ __('messages.footer_facebook') }}</a></li>
                <li><a href="https://www.twitter.com" target="_blank">{{ __('messages.footer_twitter') }}</a></li>
                <li><a href="https://www.instagram.com" target="_blank">{{ __('messages.footer_instagram') }}</a></li>
                <li><a href="https://www.linkedin.com" target="_blank">{{ __('messages.footer_linkedin') }}</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© {{ __('messages.footer_copyright') }}</p>
    </div>
</footer>

<!-- analytics code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30506707-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- Einde analytics code -->

<script language="Javascript" type="text/javascript">

 if (top.location!= self.location) {
  top.location = self.location.href
 }

</script>
