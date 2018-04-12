<!-- RD Navbar Nav-->
<div class="rd-navbar-nav-wrap">
    <!-- RD Navbar Nav-->
    <ul class="rd-navbar-nav">
      <?php foreach($pages->visible() as $item): ?>
        <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
          <?php if($item->hasChildren() && false) : ?>
            <ul class="rd-navbar-dropdown">
              <?php foreach($item->children() as $subitem): ?>
                <li class="menu-item<?= r($subitem->isOpen(), ' is-active') ?>">
                  <a href="<?= $subitem->url() ?>"><?= $subitem->title()->html() ?></a>
                </li>
              <?php endforeach ?>              
            </ul>
          <?php endif; ?>
        </li>
      <?php endforeach ?>
    </ul>
    <div class="rd-navbar-element rd-navbar-element_left">
      <ul class="list-icons list-inline-xs">
        <li><a class="icon icon-sm fa fa-facebook icon-style-social" href="https://www.facebook.com/rolf.neeser"></a></li>
        <li><a class="icon icon-sm fa fa-instagram icon-style-social" href="https://www.instagram.com/neeserfotograf/"></a></li>
       </ul>
      <!-- Rights-->
      <p class="rights"><span>&nbsp;&copy;&nbsp;</span><span>Rolf Neeser</span><span class="copyright-year"></span></p>
    </div>
</div>
