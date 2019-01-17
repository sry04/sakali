<template>
  <div class="">
  <div class="container top-nav">
    <a href="index.php">
      <div class="my-brand">
        <img src="user/asset/images/logo-circle.svg">
      </div>
      <div class="my-brand-2 ml-3" id="fading">
        <img src="user/asset/images/logo-text.svg">
      </div>
    </a>
  </div>
  <div class="float-menu">
    <div class="frame-menu">
      <!--
      <a href="#catalog" role="button" data-toggle="modal">
        <div class="menu-item">KATALOG</div>
      </a>
      <a href="#howtobuy" role="button" data-toggle="modal">
        <div class="menu-item right">CARA BELI?</div>
      </a> -->
      <div class="btn-wave"><span></span>
        <router-link :to="{name: 'Landing'}" class="left">
          <div class="menu-item">BERANDA</div>
        </router-link>

        <a class="center" href="#catalog" role="button" data-toggle="modal">
          <div class="menu-item">KATALOG</div>
        </a>
        <a class="right" href="#howtobuy" role="button" data-toggle="modal">
          <div class="menu-item">CARA BELI?</div>
        </a>
      </div>
    </div>
  </div>

  <!-- KATALOG -->
  <div class="modal" id="catalog" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-full" role="document">
          <div class="modal-content">
              <!-- <div class="modal-header">
                  <h5 class="modal-title">Modal</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div> -->
              <div class="modal-body p-4" id="result">
                   <div class="container fr-category">
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <div class="row">
                          <div class="col-md-4 text-center">
                            <router-link :to="{name: 'Catalog'}" class="icon-category" id="cathide">
                              <img src="user/asset/images/01_satire.svg" >
                              <p>SATIRE</p>
                            </router-link>
                          </div>
                          <div class="col-md-4 text-center">
                            <a href="category-list.php" class="icon-category" id="cathide">
                              <img src="user/asset/images/02_fans.svg" >
                              <p>FANS</p>
                            </a>
                          </div>
                          <div class="col-md-4 text-center">
                            <a href="category-list.php" class="icon-category" id="cathide">
                              <img src="user/asset/images/03_bogorian.svg" >
                              <p>BOGORIAN</p>
                            </a>
                          </div>
                          <div class="col-md-4 text-center">
                            <a href="category-list.php" class="icon-category" id="cathide">
                              <img src="user/asset/images/04_faith.svg" >
                              <p>FAITH</p>
                            </a>
                          </div>
                          <div class="col-md-4 text-center">
                            <a href="category-list.php" class="icon-category" id="cathide">
                              <img src="user/asset/images/06_nak.svg" >
                              <p>NAK</p>
                            </a>
                          </div>
                          <div class="col-md-4 text-center">
                            <a href="category-list.php" class="icon-category" id="cathide">
                              <img src="user/asset/images/05_saodrey.svg" >
                              <p>SAODREY</p>
                            </a>
                          </div>
                        </div>
                        <br>
                        <br>
                        <center>
                          <button type="button" class="btn btn-outline-dark pill-button" data-dismiss="modal" aria-label="Close">
                            <i class="la la-close"></i>&nbsp;&nbsp;TUTUP
                          </button>
                        </center>
                      </div>
                    </div>
                   </div>
              </div>
              <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
              </div> -->
          </div>
      </div>
  </div>

  <!-- CARA BELI -->
  <!-- KATALOG -->
  <div class="modal" id="howtobuy" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-full" role="document">
          <div class="modal-content">
              <div class="modal-body p-4" id="result">
                   <div class="container fr-category">
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <center>
                          <button type="button" class="btn btn-outline-dark pill-button" data-dismiss="modal" aria-label="Close">
                            <i class="la la-close"></i>&nbsp;&nbsp;TUTUP
                          </button>
                        </center>
                      </div>
                    </div>
                   </div>
              </div>
          </div>
      </div>
  </div>

  </div>
</template>

<script>

export default {

}
</script>

<style lang="css">
</style>
