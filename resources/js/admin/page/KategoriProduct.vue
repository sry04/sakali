<template>
<div class="">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Data Kategori Produk</h3>
          <!--<a href="" class="btn btn-info pull-right"></a>-->
          <router-link :to="{name: 'InsertProduct'}" class="pull-right btn btn-info">
            Add Produk
          </router-link>
        </div>

        <div class="box-body">
          <table id="product" class="table table-responsive table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Kd Produk</th>
              <th>Title</th>
              <th>Tipe</th>
              <th>Kategori</th>
              <th>Restock</th>
              <th>Jml Klik</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>KS1-001</td>
              <td>Lorem Ipsum</td>
              <td>Kaos</td>
              <td>Kategori1</td>
              <td>1 Oktober 2019</td>
              <td>50</td>
              <td>Publish</td>
              <td>

                <a href="#" class="btn text-black"><i class="fa fa-eye"></i></a>
                <a href="#" class="btn text-black"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn text-black"><i class="fa fa-trash"></i></a>

              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>KS1-001</td>
              <td>Lorem Ipsum</td>
              <td>Kaos</td>
              <td>Kategori1</td>
              <td>1 Oktober 2019</td>
              <td>50</td>
              <td>Publish</td>
              <td>

                <a href="#" class="btn text-black"><i class="fa fa-eye"></i></a>
                <a href="#" class="btn text-black"><i class="fa fa-edit"></i></a>
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
