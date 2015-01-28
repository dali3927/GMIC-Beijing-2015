<?php

// =============================================================================
// TEMPLATE NAME: Exhibitor Directory
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "template-blank-4.php," where you'll be able to
// find the appropriate output.
// =============================================================================

?>

<?php get_header(); ?>

  <div class="x-main full" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="x-container-fluid max width">
<?php x_get_view( 'global', '_content', 'the-content' ); ?>
<?php
$url = 'http://www.webexpotec.com/mobile/JsonWebexpotecInterface.aspx';

$fields = array(
	'ExpoID' => '96',
	'License' => 'D6358A275215E607DC302138824D555D',
	'Method' => 'ExpoInterface;WebExpoTecInterface.PublicInterface;GetActorListAll',
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
$result = curl_exec($ch);
curl_close($ch);

$jsonArray = json_decode($result, true);

$url = $jsonArray['Root']['Node']['Node']['@FilePath'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

$xml = simplexml_load_string($result);

foreach ($xml as $x) {
	echo '<div class="col col-md-4 col-sm-6 col-xs-12">';
	echo '<div class="img-container"><img src="', $x['ActorLogo'], '"></div>';
	echo '<div class="text-container">', $x['CompanyName'], '<br>', $x['BoothNo'], '</div>';
	echo "</div>\r\n";
}
?>
<div class="clear"></div>
</div>
      </article>

    <?php endwhile; ?>

  </div>

<?php get_footer(); ?>