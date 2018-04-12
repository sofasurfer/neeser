<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>
<!-- Isotope-->
<div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
  <div class="row">
    <?php foreach($projects as $project): ?>
    <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 1">
      <a class="thumb-ruby" href="<?= $project->url() ?>">
      <?php if($image = $project->coverimage()->toFile()): $thumb = $image->crop(370, 260);  ?>
        <img class="thumb-ruby__image" src="<?= $thumb->url() ?>" alt="" width="370" height="260"/>
      <?php endif ?>
      <div class="thumb-ruby__caption"> 
        <p class="thumb-ruby__title heading-3"><?= $project->title()->html() ?></p>
        <p class="thumb-ruby__text"><?= $project->published()->html() ?></p>
      </div>
      </a>
    </div>
    <?php endforeach ?>
  </div>
</div>

