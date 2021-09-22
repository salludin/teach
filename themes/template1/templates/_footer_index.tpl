<!-- Footer -->
<footer class="page-footer font-small blue pt-4" style=" background-color: #3367d6;color: white;--link-color: white;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">
                                      <!-- logo -->
                            <a href="{$system['system_url']}" class="logo">
                                {if $system['system_logo']}
                                    <img style="width:50%;" src="{$system['system_uploads']}/{$system['system_logo']}" alt="{$system['system_title']}" title="{$system['system_title']}">
                                {else}
                                    {$system['system_title']}
                                {/if}
                            </a><br>
                            <!-- logo -->
            <a href="https://play.google.com/store/apps/details?id=com.teachin.teachin"><img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" width=200px></a>
        <!-- Content -->
        <h5 class="text-uppercase"><!-- Footer Content--></h5>
        <p><!-- Here you can use rows and columns to organize your footer content.--></p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
	{if $static_pages}
				{foreach $static_pages as $static_page}
				 <li>
					<a href="{$system['system_url']}/static/{$static_page['page_url']}">{__($static_page['page_title'])}
					</a>
				</li>{if !$static_page@last}{/if}
				{/foreach}
			{/if}
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
			{if $system['contact_enabled']}
				 <li>
				<a href="{$system['system_url']}/contacts">
					{__("Contact Us")}
				</a>
				</li>
			{/if}
			{if $system['developers_apps_enabled'] || $system['developers_share_enabled']}
				 <li>
				<a href="{$system['system_url']}/developers{if !$system['developers_apps_enabled']}/share{/if}">
					{__("Developers")}
				</a>
				</li>
			{/if}
			{if $system['directory_enabled']}
				 <li>
				<a href="{$system['system_url']}/directory">
					{__("Directory")}
				</a>
				</li>
			{/if}
			{if $system['market_enabled']}
                 <li>
                <a href="{$system['system_url']}/market">
                    {__("Market")}
                </a>
                </li>
            {/if}
            {if $system['forums_enabled']}
                 <li>
                <a href="{$system['system_url']}/forums">
                    {__("Forums")}
                </a>
                </li>
            {/if}
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://teachin.id/"> Teachin.id</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->