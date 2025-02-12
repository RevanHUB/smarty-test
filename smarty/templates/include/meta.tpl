{if !isset($baseurl) }
{assign var="baseurl" value=""}
{/if}
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{$env['website_title']}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{$baseurl}css/bootstrap.min.css" rel="stylesheet">
    <link href="{$baseurl}css/fonts.css" rel="stylesheet">
    <link href="{$baseurl}css/common.css" rel="stylesheet">
    <link href="{$baseurl}css/carousel.css" rel="stylesheet">
    <link href="{$baseurl}css/style.css" rel="stylesheet">
    <link href="{$baseurl}css/responsive.css" rel="stylesheet">
    {if $env['website_resources']['website_favicon_url'] != null}
      {assign var="favicon_url" value=$env['website_resources']['website_favicon_url']}
      <link rel="icon" type="image/png" href="{$favicon_url}" sizes="16x16">  
      <link rel="icon" type="image/png" href="{$favicon_url}" sizes="32x32">
      <link rel="icon" type="image/png" href="{$favicon_url}" sizes="96x96">
    {/if}
    
  </head>

<!--[if lt IE 7]> <body class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <body class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <body class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <body> <!--<![endif]-->