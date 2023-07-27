{if !isset($baseurl) }
  {assign var="baseurl" value=""}
{/if}

{config_load "my.conf"}
        <footer>
          <nav>
            <h2>
              <a href="?action=">{$env['website_logo_title']}</a>
            </h2>
            <div class="section">
            {* start buttons creation *}
              {foreach $env['website_sections'] as $section}
                <a class="navbar-brand col" href="?action={$section}">
                  {if $section eq ''} 
                  home 
                  {else} 
                  {$section} 
                  {/if}
                </a>
              {/foreach}
            {* ends button creation *}
            </div>
          </nav>
          <small> <a href="">Legal</a> | <a href="">Privacy Policy </a> <a href="https://medanosol.es/en">{#pageMemory#}</a></small>
        </footer>
        <script type="text/javascript" src="{$baseurl}js/jquery.js"></script>
        <script type="text/javascript" src="{$baseurl}js/bootstrap.js"></script>
        <script type="text/javascript">
          $('.carousel').carousel();
        </script>
        <script type="text/javascript" defer src="{$baseurl}js/main.js"></script>
    </div> {* End of #main container  *}
    
  </body>
</html>