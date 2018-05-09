<?php include('header.php');?>

<?php
$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/npmarchant/9MAYO-CLASE10/master/netfli.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);
?>

<main role="main" class="container">
<h1 class="mb-4">TOP 20 NETFLIX SERIES</h1>
<div class="row">

<?php for($t = 0; $t < count($csv); $t++){?>
    <div class="col-sm-4 col-md-3 py-3">
    <h6 class="border-top pt-3"> <?php print($csv[$t]['serie'])?></h6>
    <a href="<?php print($csv[$t]['url'])?>">
    <figure style="height:140px; overflow:hidden;">
    <img src="
    <?php if ($csv[$t]['image'] == NULL){
        print ("img/gris.png");
    } else {
        print ($csv[$t]['image']);
    };?>"
    class="img-fluid">
    </figure>
    </a>
    <p>
    <strong><?php print($csv[$t]['year'])?></strong>
    </p>
    <p>
    <!--  <strong>Temporadas:</strong> <?php print($csv[$t]['seasons'])?><seasons> -->
    SEASONS:  <?php print($csv[$t]['seasons'])?><seasons></strong>
    </p>

    <?php
    if ($csv[$t]['original'] == NULL){
            print '<h5><a href="'.($csv[$t]['url2']).'">'.($csv[$t]['-']).'</a></h5>';
        } else {
            print '<h5><a href="'.($csv[$t]['url2']).'">'.($csv[$t]['original']).'</a></h5>';
        }?>
    </div>
<?php };?>
</div>

</main>
<?php include('footer.php');?>
