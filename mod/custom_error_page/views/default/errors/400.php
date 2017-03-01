<?php
/**
 * Elgg failsafe pageshell
 * Special viewtype for rendering exceptions. Includes minimal code so as not to
 * create a "Exception thrown without a stack frame in Unknown on line 0" error
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['title'] The page title
 * @uses $vars['body'] The main content of the page
 */

// we won't trust server configuration but specify utf-8
header('Content-type: text/html; charset=utf-8');
$vars['title'] = '400';
$vars['body'] = 'My body<br>No access';
$gc_language = $_COOKIE['connex_lang'];

$tokens = explode('/', $vars['current_url']);
$str = trim(end($tokens));

?>

	<head>

		<style type="text/css">

		body {
			text-align:left;
			margin:0;
			padding:0;
			background: #4690d6;
			color: #333333;
		}
		p {
			margin: 0px 0px 15px 0;
		}
		#elgg-wrapper {
			background:#e2e2e2;
			/*width:570px;*/
			margin:auto;
			/*padding:10px 40px;*/
			margin-bottom:40px;
			margin-top:20px;
			/*border-right: 1px solid #666666;*/
			/*border-bottom: 1px solid #666666;*/
		}
		h1{
			border-bottom:none;
		}
		.img{
			width:25%;
		}
		</style>

	</head>
	
	<div id="elgg-wrapper" class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
		<h1><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Sorry, your browser sent a request that this server could not understand </h1>
		</div>
		<div class="col-sm-12">Maybe bad access</div>


		<div class="col-sm-8">Try keyword search:</div>


    <!-- <section id="wb-srch" class="col-xs-6 text-right visible-md visible-lg"> -->
                <?php if ($gc_language === '' || $gc_language === 'en' || !$gc_language) { ?>
        <form  action="http://intranet.canada.ca/search-recherche/query-recherche-eng.aspx" method="get" name="cse-search-box" class="form-inline mrgn-bttm-sm col-sm-6">
        <?php } else { ?>
        <form action="http://intranet.canada.ca/search-recherche/query-recherche-fra.aspx" method="get" name="cse-search-box" class="form-inline mrgn-bttm-sm col-sm-6">
        <?php } ?>
            <div class="form-group">
                <label for="wb-srch-q" class="wb-inv">
                    <?php echo elgg_echo('wet:searchweb');?>
                </label>
                <input class="wb-srch-q form-control" name="q"  value="" size="27" maxlength="150" placeholder="<?php echo elgg_echo('wet:searchgctools');?>">

                <input type="hidden" name="a"  value="s">
                <input type="hidden" name="s"  value="3">
                <input type="hidden" name="chk4"  value="True">

            </div>
            <div class="form-group submit">
                <!-- search button -->
                <button type="submit" class="btn btn-primary btn-small" name="wb-srch-sub">
                    <span class="glyphicon-search glyphicon"></span>
                    <span class="wb-inv"> <?php echo elgg_echo('wet:searchHead');?> </span>
                </button>
            </div>
        </form>
    <!-- </section> -->

    <img class="img" src='https://cdn4.iconfinder.com/data/icons/emoticons-outline/512/21-512.png' />

</div>
	</div>
	

