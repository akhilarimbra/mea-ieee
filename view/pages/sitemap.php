<div class="container-fluid">
  <br>
  <div class="row">
    <div class="col-md-6">
      <h2 class="article-title"><?php echo substr($sub_title, 0 , -2); ?></h2>
    </div>
    <div class="col-md-6">
      <div class="ui breadcrumb">
        <a class="section" href="/">Home</a>
        <div class="divider"> / </div>
        <div class="active section">Sitemap</div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12">
      <div class="ui list">
        <div class="item">
          <i class="folder icon"></i>
          <div class="content">
            <div class="header">src</div>
            <div class="description">Source files for project</div>
            <div class="list">
              <div class="item">
                <i class="folder icon"></i>
                <div class="content">
                  <div class="header">site</div>
                  <div class="description">Your site's theme</div>
                </div>
              </div>
              <div class="item">
                <i class="folder icon"></i>
                <div class="content">
                  <div class="header">themes</div>
                  <div class="description">Packaged theme files</div>
                  <div class="list">
                    <div class="item">
                      <i class="folder icon"></i>
                      <div class="content">
                        <div class="header">default</div>
                        <div class="description">Default packaged theme</div>
                      </div>
                    </div>
                    <div class="item">
                      <i class="folder icon"></i>
                      <div class="content">
                        <div class="header">my_theme</div>
                        <div class="description">Packaged themes are also available in this folder</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <i class="file icon"></i>
                <div class="content">
                  <div class="header">theme.config</div>
                  <div class="description">Config file for setting packaged themes</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <i class="folder icon"></i>
          <div class="content">
            <div class="header">dist</div>
            <div class="description">Compiled CSS and JS files</div>
            <div class="list">
              <div class="item">
                <i class="folder icon"></i>
                <div class="content">
                  <div class="header">components</div>
                  <div class="description">Individual component CSS and JS</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <i class="file icon"></i>
          <div class="content">
            <div class="header">semantic.json</div>
            <div class="description">Contains build settings for gulp</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
