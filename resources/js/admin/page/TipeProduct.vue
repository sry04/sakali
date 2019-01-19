<template>
<div class="">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Tipe Produk</h3>
          <!--<a href="" class="btn btn-info pull-right"></a>-->
          <router-link :to="{name: 'InsertTipe'}" class="pull-right btn btn-info">
            Tambah Tipe
          </router-link>
        </div>

        <div class="box-body">
          <table id="product" class="table table-responsive table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Tipe</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Kaos</td>
              <td>
                <router-link :to="{name: 'EditTipe'}" class="btn text-black">
                  <i class="fa fa-edit"></i>
                </router-link>
                <a href="#" class="btn text-black"><i class="fa fa-trash"></i></a>

              </td>
            </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
</div>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
