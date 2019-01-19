<template>
<div class="">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Kategori Produk</h3>
          <!--<a href="" class="btn btn-info pull-right"></a>-->
          <router-link :to="{name: 'InsertKategori'}" class="pull-right btn btn-info">
            Tambah Kategori
          </router-link>
        </div>

        <div class="box-body">
          <table id="product" class="table table-responsive table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>KS1-001</td>
              <td>Lorem Ipsum</td>
              <td>
                <router-link :to="{name: 'EditKategori'}" class="btn text-black">
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
