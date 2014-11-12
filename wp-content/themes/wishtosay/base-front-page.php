<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap folder" role="document">
    <div class="container content">
      <div class="container" ng-app="archiveCards">
        <div class="row" ng-controller="cardsController">
          
          <div class="col-sm-12">
            <div class="form-group">
              <input class="form-control" ng-model="searchText" placeholder="search">
            </div>
          </div>
          
          <div class="col-sm-3" ng-repeat="card in cards | filter:searchText | limitTo: 20">
            <a href="#card-{{card.id}}" data-toggle="modal">
              <img class="center img-responsive" src="http://oringapi.cauley.co/cards/{{ card.cardImage }}">
            </a>
            <div id="card-{{card.id}}" class="modal modal-wide fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">{{ card.lastName}}, {{ card.firstName}}</h4>
                    </div>
                  <div class="modal-body">
                    <img class="cnter img-responsive" src="http://oringapi.cauley.co/cards/{{ card.cardImage }}">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
      </div>
    </div>
  </div>
</div>
    </div><!-- /.content -->
    <?php get_template_part('templates/footer'); ?>
  </div><!-- /.wrap -->

</body>
</html>