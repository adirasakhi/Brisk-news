<?php
$this->load->model('category_model', 'category', true);
$navbar   = $this->category->getCategory();

$category = $this->uri->segment(3);
?>

<nav class="navbar navbar-light navbar-expand-lg navbar-light bg-danger fixed-top home mb-5">
   <div class="container">
      <a href="<?= base_url() ?>" class="navbar-brand d-flex w-50 mr-auto">
         <img src="<?= base_url('images/brand/13.gif') ?>" height="60" alt=""><br>Brisk News
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
         <ul class="navbar-nav w-100 justify-content-center">
            <?php foreach ($navbar as $n) : ?>
               <li class="nav-item <?php if ($n->slug === $category) {
                                       echo "active";
                                    } ?> ">
                  <a class="nav-link text-light" href="<?= base_url("blog/category/$n->slug") ?>"><?= $n->category_name ?></a>
               </li>
            <?php endforeach ?>
         </ul>
         <ul class="nav navbar-nav ml-auto w-100 justify-content-end ">
            <li class="nav-item">
               <a class="nav-link" href="https://twitter.com/CNNIndonesia" target="_blank">
                  <i class="fa fa-twitter"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="https://www.instagram.com/nagaimariaa" target="_blank">
                  <i class="fa fa-instagram"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="https://www.facebook.com/CNNIndonesia/?locale=id_ID" target="_blank">
                  <i class="fa fa-facebook"></i>
               </a>
            </li>
         </ul>
      </div>
   </div>
</nav>