<div class="container-fluid">
  <br>
  <div class="row">
    <div class="col-md-6">
      <h2 class="article-title"><?php echo substr($sub_title, 0 , -2); ?></h2>
    </div>
    <div class="col-md-6">
      <div class="ui breadcrumb hidden-sm-down">
        <a class="section" href="/">Home</a>
        <div class="divider"> / </div>
        <a class="section" href="/events-and-activities">Events And Activities</a>
        <div class="divider"> / </div>
        <div class="active section"><?php echo $name; ?></div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12">
                <p class="article-content">
            <?php echo $short; ?>
          </p>

    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-lg-12">
      <img src="/public/images/uploads/<?php echo $image;?>" width='100%' class='shadow-effect'>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
                    <div class="col-sm-12">
                      <div id="card">
                        <div id="card-blue">
                          <i class="fa fa-calendar"></i>
                          <h1> <?php echo $date; ?> </h1>
                        </div>
                      </div>
                    </div>
          </div>
          <br>
        </div>
        <div class="col-md-8">
          <p class="article-content">
            <?php echo $report; ?>
          </p>
        </div>     
      </div>
    </div>
  </div>
  <br>
</div>
